<?php

namespace AppBundle\Controller\Admin\Caso;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Form\IncidenciaType;
use AppBundle\Form\IncidenciaAdminType;
use AppBundle\Form\ComentarioType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CasoController extends Controller {

    var $strDqlLista = "";

    /**
     * @Route("admin/caso/lista_pendientes", name="caso_admin_lista_pendientes")
     */
    public function listaPendientesAction(Request $request) {
        $mensaje = '';
        $paginator = $this->get('knp_paginator');
        $em = $this->getDoctrine()->getManager();
        $form = $this->formularioPendienteFiltro();
        $form->handleRequest($request);
        $this->listaPendientes();
        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('BtnEliminar')->isClicked()) {
                $arrSeleccionados = $request->request->get('ChkSeleccionar');
                $em->getRepository('AppBundle:Incidencia')->eliminarIncidente($arrSeleccionados);
            }
            if ($form->get('BtnFiltrar')->isClicked()) {
                $this->filtrarPen($form);
                $this->listaPendientes();
            }
        }
        $arIncidencia = $paginator->paginate($em->createQuery($this->strDqlLista), $request->query->get('page', 1), 20);
        return $this->render('AppBundle:Admin/Caso:listaPendientes.html.twig', array(
                    'arIncidencia' => $arIncidencia,
                    'mensaje' => $mensaje,
                    'form' => $form->createView()));
    }

    /**
     * @Route("admin/caso/lista_solucionados", name="caso_admin_lista_solucionados")
     */
    public function listaSolucionadosAction(Request $request) {
        $mensaje = '';
        $paginator = $this->get('knp_paginator');
        $em = $this->getDoctrine()->getManager();
        $form = $this->formularioSolucionadosFiltro();
        $form->handleRequest($request);
        $this->listaSolucionados();
        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('BtnFiltrar')->isClicked()) {
                $this->filtrarSol($form);
                $this->listaSolucionados();
            }
        }
        $arIncidenciaSolucionados = $paginator->paginate($em->createQuery($this->strDqlLista), $request->query->get('page', 1), 20);
        return $this->render('AppBundle:Admin/Caso:listaSolucionados.html.twig', array(
                    'arIncidenciaSolucionado' => $arIncidenciaSolucionados,
                    'mensaje' => $mensaje,
                    'form' => $form->createView()));
    }

    /**
     * @Route("admin/caso/nuevo/{codigoIncidencia}", name="caso_admin_nuevo")
     */
    public function nuevoAction(Request $request, $codigoIncidencia) {
        //Crear formulario para el registro de caso
        $em = $this->getDoctrine()->getManager();
        if ($codigoIncidencia != 0) {
            $arIncidencia = $em->getRepository('AppBundle:Incidencia')->find($codigoIncidencia);
        } else {
            $arIncidencia = new \AppBundle\Entity\Incidencia();
            $arUsuario = $this->getUser();
            $arIncidencia->setUsuario($arUsuario->getUsername());
            $arIncidencia->setFechaRegistro(new \DateTime("now"));
            $arIncidencia->setClienteRel($arUsuario->getClienteRel());
        }
        $form = $this->createForm(IncidenciaType::class, $arIncidencia);
        $form->handleRequest($request);
        $Form = $request->request->all();
        //Validar el formulario para realizar el envio y almcenamiento de los datos
        if ($form->isSubmitted() && $form->isValid()) {
            $arIncidencia = $form->getData();
            $em->persist($arIncidencia);
            $em->flush();
            if ($codigoIncidencia == 0) {
                $correoEnviar = array('sogaimplementacion@gmail.com', 'soporte1@appsoga.com', 'soporte2@appsoga.com');
                //$correoEnviar = array('felipemesa14@gmail.com');
                $this->enviarCorreo($arIncidencia, $correoEnviar, '');
            }
            if ($arIncidencia->getEstadoSolucionado()) {
                return $this->redirectToRoute('caso_admin_lista_solucionados');
            } else {
                return $this->redirectToRoute('caso_admin_lista_pendientes');
            }
        }
        return $this->render('AppBundle:Admin/Caso:nuevo.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("admin/caso/editarAdmin/{codigoIncidencia}", name="caso_admin_editar")
     */
    public function editarAdminAction(Request $request, $codigoIncidencia) {
        //Crear formulario para el registro de caso
        $em = $this->getDoctrine()->getManager();
        $arIncidencia = new \AppBundle\Entity\Incidencia();
        $arIncidencia = $em->getRepository('AppBundle:Incidencia')->find($codigoIncidencia);
        $form = $this->createForm(IncidenciaAdminType::class, $arIncidencia);
        $form->handleRequest($request);
        //Validar el formulario para realizar el envio y almcenamiento de los datos
        if ($form->isSubmitted() && $form->isValid()) {
            $arIncidencia = $form->getData();
            $arIncidencia->setFechaSolucion(new \DateTime("now"));
            $em->persist($arIncidencia);
            if ($arIncidencia->getEstadoSolucionado() == 1) {
                $correoEnviar = $arIncidencia->getEmail();
                $this->enviarCorreo($arIncidencia, $correoEnviar, '');
            }
            if ($form->get('guardarTarea')->isClicked()) {
                if ($arIncidencia->getEstadoAtendido()) {
                    $arTarea = $em->getRepository('AppBundle:Tarea')->findOneBy(array('codigoIncidenciaFk' => $arIncidencia->getCodigoIncidenciaPk()));
                    if (!$arTarea) {
                        $arTarea = new \AppBundle\Entity\Tarea();
                    }
                    $arUsuario = $em->getRepository('AppBundle:User')->findOneBy(array('username' => $arIncidencia->getUsuarioAsignado()));
                    $arTipoTarea = $em->getRepository('AppBundle:TipoTarea')->find($arIncidencia->getCategoriaRel()->getCodigoInterfazFk());
                    $arTarea->setIncidenciaRel($arIncidencia);
                    $arTarea->setUsuarioAsignadoRel($arUsuario);
                    $arTarea->setTipoTareaRel($arTipoTarea);
                    $arTarea->setPrioridadRel($arIncidencia->getPrioridadRel());
                    $arTarea->setFechaInicio($arIncidencia->getFechaRegistro());
                    $arTarea->setFechaFinal($arIncidencia->getFechaRegistro());
                    $arTarea->setDescripcion($arIncidencia->getDescripcionDesarrollo());
                    $arTarea->setComentario($arIncidencia->getSolucion());
                    $em->persist($arTarea);
                }
            }
            $em->flush();
            if ($arIncidencia->getEstadoSolucionado()) {
                return $this->redirectToRoute('caso_admin_lista_solucionados');
            } else {
                return $this->redirectToRoute('caso_admin_lista_pendientes');
            }
        }
        return $this->render('AppBundle:Admin/Caso:editarAdmin.html.twig', array(
                    'form' => $form->createView(),
                    'arIncidencia' => $arIncidencia));
    }

    /**
     * @Route("admin/caso/detalle/{codigoIncidencia}", name="caso_admin_detalle")
     */
    public function detalleAction(Request $request, $codigoIncidencia) {
        $em = $this->getDoctrine()->getManager();
        $arUsuario = $this->getUser();
        $arIncidencia = $em->getRepository('AppBundle:Incidencia')->find($codigoIncidencia);
        $arDetalleComentario = $em->getRepository('AppBundle:Comentario')->findBy(array('codigoIncidenciaFk' => $codigoIncidencia));
        //Crear formulario de comentarios
        $arComentario = new \AppBundle\Entity\Comentario();
        $form = $this->createForm(ComentarioType::class, $arComentario);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $arComentario = $form->getData();
            if ($form->get('comentario')->getData()) {
                $arComentario->setIncidenciaRel($arIncidencia);
                $arComentario->setFechaRegistro(new \DateTime('now'));
                $arComentario->setUsername($arUsuario->getUsername());
                $em->persist($arComentario);
                $em->flush();
                if ($arUsuario->getRolRel()->getNombre() == "ROLE_ADMIN") {
                    $correoEnviar = $arIncidencia->getEmail();
                    $this->enviarCorreo($arIncidencia, $correoEnviar, $arComentario);
                }
            } else {
                return $this->redirectToRoute('caso_admin_detalle', array('codigoIncidencia' => $codigoIncidencia));
            }
        }
        //Crear vista detalle del incidente
        return $this->render('AppBundle:Admin/Caso:detalle.html.twig', array(
                    'arIncidencia' => $arIncidencia,
                    'form' => $form->createView(),
                    'arDetalleComentario' => $arDetalleComentario
        ));
    }
    
    /**
     * @Route("admin/caso/detalle2/{codigoIncidencia}", name="caso_admin_detalle2")
     */
    public function detalle2Action(Request $request, $codigoIncidencia) {
        $em = $this->getDoctrine()->getManager();
        $arUsuario = $this->getUser();
        $arIncidencia = $em->getRepository('AppBundle:Incidencia')->find($codigoIncidencia);
        $arDetalleComentario = $em->getRepository('AppBundle:Comentario')->findBy(array('codigoIncidenciaFk' => $codigoIncidencia));
        //Crear formulario de comentarios
        $arComentario = new \AppBundle\Entity\Comentario();
        $form = $this->createForm(ComentarioType::class, $arComentario);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $arComentario = $form->getData();
            if ($form->get('comentario')->getData()) {
                $arComentario->setIncidenciaRel($arIncidencia);
                $arComentario->setFechaRegistro(new \DateTime('now'));
                $arComentario->setUsername($arUsuario->getUsername());
                $em->persist($arComentario);
                $em->flush();
                if ($arUsuario->getRolRel()->getNombre() == "ROLE_ADMIN") {
                    $correoEnviar = $arIncidencia->getEmail();
                    $this->enviarCorreo($arIncidencia, $correoEnviar, $arComentario);
                }
            } else {
                return $this->redirectToRoute('caso_admin_detalle', array('codigoIncidencia' => $codigoIncidencia));
            }
        }
        //Crear vista detalle del incidente
        return $this->render('AppBundle:Admin/Caso:detalle2.html.twig', array(
                    'arIncidencia' => $arIncidencia,
                    'form' => $form->createView(),
                    'arDetalleComentario' => $arDetalleComentario
        ));
    }

    /**
     * @Route("admin/caso/detalle/descargar/adjunto/{codigoIncidencia}", name="caso_admin_detalle_descargar_adjunto")
     */
    public function descargarAction($codigoIncidencia) {
        $em = $this->getDoctrine()->getManager();
        $arIncidencia = $em->getRepository('AppBundle:Incidencia')->find($codigoIncidencia);
        $strRuta = '/var/www/html/recursos/web/incidente/' . $arIncidencia->getAdjunto();
        // Generate response
        $response = new Response();

        // Set headers
        $response->headers->set('Cache-Control', 'private');
        $response->headers->set('Content-Disposition', 'attachment; filename="' . $arIncidencia->getAdjunto() . '";');
        $response->sendHeaders();
        $response->setContent(readfile($strRuta));
    }

    private function enviarCorreo($arIncidencia, $correoEnviar, $arDetalleComentario) {
        $message = \Swift_Message::newInstance()
                ->setSubject('Soga soporte')
                ->setFrom('sogainformacion@gmail.com')
                ->setTo($correoEnviar)
                ->setBody($this->renderView('AppBundle:Email:nuevo.html.twig', array('arIncidencia' => $arIncidencia, 'arDetalleComentario' => $arDetalleComentario)), 'text/html');
        $this->get('mailer')->send($message);
    }

    private function listaPendientes() {
        $session = new session;
        $em = $this->getDoctrine()->getManager();
        $this->strDqlLista = $em->getRepository('AppBundle:Incidencia')->listaDql(
                $session->get('filtroCodigoCliente'), $session->get('filtroCodigoCategoria'), $session->get('filtroCodigoIncidenciaPen'));
    }

    private function listaSolucionados() {
        $session = new session;
        $em = $this->getDoctrine()->getManager();
        $this->strDqlLista = $em->getRepository('AppBundle:Incidencia')->listaSolucionadosDql(
                $session->get('filtroCodigoCliente'), $session->get('filtroCodigoCategoria'), $session->get('filtroCodigoIncidenciaSol'));
    }

    private function filtrarPen($form) {
        $session = new session;
        $codigoCliente = '';
        if ($form->get('clienteRel')->getData()) {
            $codigoCliente = $form->get('clienteRel')->getData()->getCodigoClientePk();
        }
        $session->set('filtroCodigoCliente', $codigoCliente);
        $codigoCategoria = '';
        if ($form->get('categoriaRel')->getData()) {
            $codigoCategoria = $form->get('categoriaRel')->getData()->getCodigoCategoriaPk();
        }
        $codigoIdIncidenciaPen = 0;
        if ($form->get('codigoIncidenciaPen')->getData()) {
            $codigoIdIncidenciaPen = $form->get('codigoIncidenciaPen')->getData();
        }
        $session->set('filtroCodigoIncidenciaPen', $codigoIdIncidenciaPen);
        $session->set('filtroCodigoCategoria', $codigoCategoria);
    }

    private function filtrarSol($form) {
        $session = new session;
        $codigoCliente = '';
        if ($form->get('clienteRel')->getData()) {
            $codigoCliente = $form->get('clienteRel')->getData()->getCodigoClientePk();
        }
        $session->set('filtroCodigoCliente', $codigoCliente);
        $codigoCategoria = '';
        if ($form->get('categoriaRel')->getData()) {
            $codigoCategoria = $form->get('categoriaRel')->getData()->getCodigoCategoriaPk();
        }
        $codigoIdIncidenciaSol = 0;
        if ($form->get('codigoIncidenciaSol')->getData()) {
            $codigoIdIncidenciaSol = $form->get('codigoIncidenciaSol')->getData();
        }


        $session->set('filtroCodigoIncidenciaSol', $codigoIdIncidenciaSol);
        $session->set('filtroCodigoCategoria', $codigoCategoria);
    }

    private function formularioPendienteFiltro() {

        $em = $this->getDoctrine()->getManager();
        $session = new session;
        $arrayPropiedadesClientes = array(
            'class' => 'AppBundle:Cliente',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('c')
                                ->orderBy('c.nombre', 'ASC');
            },
            'choice_label' => 'nombre',
            'required' => false,
            'empty_data' => "",
            'placeholder' => "TODOS",
            'data' => "",
            'label' => "Cliente"
        );

        $arrayPropiedadesCategoria = array(
            'class' => 'AppBundle:Categoria',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('c')
                                ->orderBy('c.nombre', 'ASC');
            },
            'choice_label' => 'nombre',
            'required' => false,
            'empty_data' => "",
            'placeholder' => "TODOS",
            'data' => "",
            'label' => "Categoria"
        );
        if ($session->get('filtroCodigoCliente')) {
            $arrayPropiedadesClientes['data'] = $em->getReference("AppBundle:Cliente", $session->get('filtroCodigoCliente'));
        }

        if ($session->get('filtroCodigoCategoria')) {
            $arrayPropiedadesCategoria['data'] = $em->getReference("AppBundle:Categoria", $session->get('filtroCodigoCategoria'));
        }

        $form = $this->createFormBuilder()
                ->add('codigoIncidenciaPen', NumberType::class, array('label' => 'Codigo', 'data' => $session->get('filtroCodigoIncidenciaPen')))
                ->add('clienteRel', EntityType::class, $arrayPropiedadesClientes)
                ->add('categoriaRel', EntityType::class, $arrayPropiedadesCategoria)
                ->add('BtnFiltrar', SubmitType::class, array('label' => 'Filtrar'))
                ->add('BtnEliminar', SubmitType::class, array('label' => 'Eliminar',))
                ->getForm();
        return $form;
    }

    private function formularioSolucionadosFiltro() {

        $em = $this->getDoctrine()->getManager();
        $session = new session;
        $arrayPropiedadesClientes = array(
            'class' => 'AppBundle:Cliente',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('c')
                                ->orderBy('c.nombre', 'ASC');
            },
            'choice_label' => 'nombre',
            'required' => false,
            'empty_data' => "",
            'placeholder' => "TODOS",
            'data' => "",
            'label' => "Cliente"
        );

        $arrayPropiedadesCategoria = array(
            'class' => 'AppBundle:Categoria',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('c')
                                ->orderBy('c.nombre', 'ASC');
            },
            'choice_label' => 'nombre',
            'required' => false,
            'empty_data' => "",
            'placeholder' => "TODOS",
            'data' => "",
            'label' => "Categoria"
        );
        if ($session->get('filtroCodigoCliente')) {
            $arrayPropiedadesClientes['data'] = $em->getReference("AppBundle:Cliente", $session->get('filtroCodigoCliente'));
        }

        if ($session->get('filtroCodigoCategoria')) {
            $arrayPropiedadesCategoria['data'] = $em->getReference("AppBundle:Categoria", $session->get('filtroCodigoCategoria'));
        }

        $form = $this->createFormBuilder()
                ->add('codigoIncidenciaSol', NumberType::class, array('label' => 'Codigo', 'data' => $session->get('filtroCodigoIncidenciaSol')))
                ->add('clienteRel', EntityType::class, $arrayPropiedadesClientes)
                ->add('categoriaRel', EntityType::class, $arrayPropiedadesCategoria)
                ->add('BtnFiltrar', SubmitType::class, array('label' => 'Filtrar'))
                ->getForm();
        return $form;
    }

}
