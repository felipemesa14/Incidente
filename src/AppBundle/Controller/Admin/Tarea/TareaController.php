<?php

namespace AppBundle\Controller\Admin\Tarea;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\TareaType;
use AppBundle\Form\TareaDetalleType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TareaController extends Controller {

    /**
     * @Route("admin/tarea/lista", name="tarea_lista")
     */
    public function listaAction(Request $request) {
        $mensaje = "";
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
                    foreach ($arrSeleccionados AS $codigoTarea) {
                        $arTarea = $em->getRepository("AppBundle:Tarea")->find($codigoTarea);
                        if ($arTarea->getFinalizado() == 0) {

                            $em->remove($arTarea);
                        } else {
                            $mensaje = 'No se puede eliminar la tarea despues de solucionado';
                        }
                    }
                    $em->flush();
                }
            }
        }
        //Validacion tipo de usuario para mostrar el listado de las incidencias reportados
        if ($arUsuario->getRolRel()->getNombre() == "ROLE_SUPER_ADMIN") {
            $arTarea = $paginator->paginate($em->getRepository('AppBundle:Tarea')
                            ->findByFinalizado(0), $request->query->get('page', 1), 20);
            $arTareaFinalizado = $paginator->paginate($em->getRepository('AppBundle:Tarea')
                            ->findByFinalizado(1, array('fechaInicio' => 'DESC')), $request->query->get('page', 1), 20);
        } else {
            $arTarea = $paginator->paginate($em->getRepository('AppBundle:Tarea')
                            ->findBy(array('usuarioAsignadoRel' => $arUsuario,
                                'finalizado' => 0)), $request->query->get('page', 1), 20);
            $arTareaFinalizado = $paginator->paginate($em->getRepository('AppBundle:Tarea')
                            ->findBy(array('usuarioAsignadoRel' => $arUsuario,
                                'finalizado' => 1), array('fechaInicio' => 'DESC')), $request->query->get('page', 1), 20);
        }
        return $this->render('AppBundle:Admin/Tarea:lista.html.twig', array('arTarea' => $arTarea,
                    'arTareaFinalizado' => $arTareaFinalizado,
                    'mensaje' => $mensaje,
                    'form' => $form->createView()));
    }

    /**
     * @Route("admin/tarea/nuevo/{codigoTarea}", name="tarea_nuevo")
     */
    public function nuevoAction(Request $request, $codigoTarea) {
        $em = $this->getDoctrine()->getManager();
        if ($codigoTarea != 0) {
            $arTarea = $em->getRepository('AppBundle:Tarea')->find($codigoTarea);
        } else {
            $arTarea = new \AppBundle\Entity\Tarea();
        }
        $form = $this->createForm(TareaType::class, $arTarea);
        $form->handleRequest($request);
        //Validar el formulario para realizar el envio y almcenamiento de los datos
        if ($form->isSubmitted() && $form->isValid()) {
            $arTarea = $form->getData();
            $em->persist($arTarea);
            $em->flush();
            $this->enviarCorreo($arTarea);
            return $this->redirectToRoute('tarea_lista');
        }
        return $this->render('AppBundle:Admin/Tarea:nuevo.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("admin/tarea/detalle/{codigoTarea}", name="tarea_detalle")
     */
    public function detalleAction(Request $request, $codigoTarea) {
        $em = $this->getDoctrine()->getManager();
        $arTarea = $em->getRepository('AppBundle:Tarea')->find($codigoTarea);
        $form = $this->createForm(TareaDetalleType::class, $arTarea);
        $form->handleRequest($request);
        //Validar el formulario para realizar el envio y almcenamiento de los datos
        if ($form->isSubmitted() && $form->isValid()) {
            $revisado = $request->request->get('chkRevisado');
            if ($revisado != NULL) {
                $arTarea->setRevisado($revisado);
            }
            $arTarea = $form->getData();
            $em->persist($arTarea);
            $em->flush();
            return $this->redirectToRoute('tarea_lista');
        }
        return $this->render('AppBundle:Admin/Tarea:detalle.html.twig', array('arTarea' => $arTarea,
                    'form' => $form->createView()));
    }

    private function enviarCorreo($arTarea) {
        $message = \Swift_Message::newInstance()
                ->setSubject('Tarea asignada')
                ->setFrom('sogainformacion@gmail.com')
                ->setTo($arTarea->getUsuarioAsignadoRel()->getEmail())
                ->setBody($this->renderView('AppBundle:Email:nuevaTarea.html.twig', array('arTarea' => $arTarea)), 'text/html');
        $this->get('mailer')->send($message);
    }

}
