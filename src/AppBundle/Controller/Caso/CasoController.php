<?php

namespace AppBundle\Controller\Caso;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\IncidenciaType;
use AppBundle\Form\IncidenciaAdminType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\File;

class CasoController extends Controller
{

    /**
     * @Route("caso/lista", name="caso_lista")
     */
    public function listaAction(Request $request)
    {
        $mensaje = '';
        $paginator = $this->get('knp_paginator');
        $arUsuario = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createFormBuilder()
            ->add('BtnEliminar', SubmitType::class, array('label' => 'Eliminar'))
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('BtnEliminar')->isClicked()) {
                $arrSeleccionados = $request->request->get('ChkSeleccionar');
                if (count($arrSeleccionados) > 0) {
                    foreach ($arrSeleccionados AS $codigoIncidencia) {
                        $arIncidencia = $em->getRepository("AppBundle:Incidencia")->find($codigoIncidencia);
                        if ($arIncidencia->getEstadoAtendido() == 0) {
                            $arComentario = $em->getRepository("AppBundle:Comentario")->findBy(array('codigoIncidenciaFk' => $codigoIncidencia));
                            if (count($arComentario > 0)) {
                                foreach ($arComentario as $arComentario) {
                                    $em->remove($arComentario);
                                }
                            }
                            $em->remove($arIncidencia);
                        } else {
                            $mensaje = 'No se puede eliminar el caso despues de atendido';
                        }
                    }
                    $em->flush();
                }
            }
        }
        //Validacion tipo de usuario para mostrar el listado de las incidencias reportados
        if ($arUsuario->getRolRel()->getNombre() == "ROLE_ADMIN" || $arUsuario->getRolRel()->getNombre() == "ROLE_SUPER_ADMIN") {
            //$arIncidencia = $em->getRepository('AppBundle:Incidencia')->findAll();
            return $this->redirectToRoute('admin_index');
        } else {
            $arIncidencia = $paginator->paginate($em->getRepository('AppBundle:Incidencia')->findBy(array('usuario' => $arUsuario->getUsername(),
                'estadoSolucionado' => 0), array('fechaRegistro' => 'DESC')), $request->query->get('page', 1), 20);
            $arIncidenciaSolucionados = $paginator->paginate($em->getRepository('AppBundle:Incidencia')->findBy(array('usuario' => $arUsuario->getUsername(),
                'estadoSolucionado' => 1), array('fechaSolucion' => 'DESC')), $request->query->get('page', 1), 20);
        }
        return $this->render('AppBundle:Caso:lista.html.twig', array('arIncidencia' => $arIncidencia,
            'arIncidenciaSolucionado' => $arIncidenciaSolucionados,
            'mensaje' => $mensaje,
            'form' => $form->createView()));
    }

    /**
     * @Route("caso/nuevo/{codigoIncidencia}", name="caso_nuevo")
     */
    public function nuevoAction(Request $request, $codigoIncidencia)
    {
        //Crear formulario para el registro de caso
        $nombreArchivo = "";
        $em = $this->getDoctrine()->getManager();
        if ($codigoIncidencia != 0) {
            $arIncidencia = $em->getRepository('AppBundle:Incidencia')->find($codigoIncidencia);
            $nombreArchivo = $arIncidencia->getAdjunto();
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
            $objArchivo = $form->get('image')->getData();
            if ($objArchivo != NULL) {
                $strNombreArchivo = $objArchivo->getClientOriginalName();
                $form->get('image')->getData()->move('/var/www/html/recursos/web/incidente/', $strNombreArchivo);
                $arIncidencia->setAdjunto($strNombreArchivo);
                $file = new File();
                $file = '/var/www/html/recursos/web/incidente/' . $arIncidencia->getAdjunto();
                $arIncidencia->setImage($file);
            }
            $em->persist($arIncidencia);
            $em->flush();
            if ($codigoIncidencia == 0) {
                //$correoEnviar = array('sogaimplementacion@gmail.com', 'soporte1@appsoga.com', 'soporte2@appsoga.com');
                //$this->enviarCorreo($arIncidencia, $correoEnviar, '');
            }
            return $this->redirectToRoute('caso_lista');
        }
        return $this->render('AppBundle:Caso:nuevo.html.twig',
            array('archivoAdjunto' => $nombreArchivo,
            'form' => $form->createView()));
    }

    /**
     * @Route("caso/editarAdmin/{codigoIncidencia}", name="caso_editar")
     */
    public function editarAdminAction(Request $request, $codigoIncidencia)
    {
        //Crear formulario para el registro de caso
        $em = $this->getDoctrine()->getManager();
        $arIncidencia = $em->getRepository('AppBundle:Incidencia')->find($codigoIncidencia);
        $form = $this->createForm(IncidenciaAdminType::class, $arIncidencia);
        $form->handleRequest($request);
        //Validar el formulario para realizar el envio y almcenamiento de los datos
        if ($form->isSubmitted() && $form->isValid()) {
            $arIncidencia = $form->getData();
            $arIncidencia->setFechaSolucion(new \DateTime("now"));
            $em->persist($arIncidencia);
            $em->flush();
            if ($arIncidencia->getEstadoSolucionado() == 1) {
                $correoEnviar = $arIncidencia->getEmail();
                $this->enviarCorreo($arIncidencia, $correoEnviar, '');
            }
            return $this->redirectToRoute('caso_lista');
        }
        return $this->render('AppBundle:Caso:editarAdmin.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("caso/detalle/{codigoIncidencia}", name="caso_detalle")
     */
    public function detalleAction(Request $request, $codigoIncidencia)
    {
        $em = $this->getDoctrine()->getManager();
        $arUsuario = $this->getUser();
        $arIncidencia = $em->getRepository('AppBundle:Incidencia')->find($codigoIncidencia);
        $arDetalleComentario = $em->getRepository('AppBundle:Comentario')->findBy(array('codigoIncidenciaFk' => $codigoIncidencia));
        //Crear formulario de comentarios

        $form = $this->createFormBuilder()
            ->add('estadoSolucionado', ChoiceType::class, array(
                'data' => $arIncidencia->getEstadoSolucionado(),
                'choices' => array(
                    'No' => '0',
                    'Si' => '1',
                )))
            ->add('comentario', TextareaType::class, array('required' => false))
            ->add('BtnGuardar', SubmitType::class, array('label' => 'Guardar'))
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $comentario = $form->get('comentario')->getData();
            if ($comentario) {
                $arComentario = new \AppBundle\Entity\Comentario();
                $arComentario->setComentario($comentario);
                $arComentario->setIncidenciaRel($arIncidencia);
                $arComentario->setFechaRegistro(new \DateTime('now'));
                $arComentario->setUsername($arUsuario->getUsername());
                $em->persist($arComentario);
            }
            $arIncidencia->setEstadoSolucionado($form->get('estadoSolucionado')->getData());
            $em->persist($arIncidencia);
            $em->flush();
            if ($arUsuario->getRolRel()->getNombre() == "ROLE_ADMIN") {
                $correoEnviar = $arIncidencia->getEmail();
                $this->enviarCorreo($arIncidencia, $correoEnviar, $arComentario);
            }
            return $this->redirectToRoute('caso_detalle', array('codigoIncidencia' => $codigoIncidencia));
        }
        //Crear vista detalle del incidente
        return $this->render('AppBundle:Caso:detalle.html.twig', array(
            'arIncidencia' => $arIncidencia,
            'form' => $form->createView(),
            'arDetalleComentario' => $arDetalleComentario
        ));
    }

    private function enviarCorreo($arIncidencia, $correoEnviar, $arDetalleComentario)
    {
        $message = \Swift_Message::newInstance()
            ->setSubject('Soga soporte')
            ->setFrom('sogainformacion@gmail.com')
            ->setTo($correoEnviar)
            ->setBody($this->renderView('AppBundle:Email:nuevo.html.twig', array('arIncidencia' => $arIncidencia, 'arDetalleComentario' => $arDetalleComentario)), 'text/html');
        $this->get('mailer')->send($message);
    }

}
