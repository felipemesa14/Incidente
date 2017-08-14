<?php

namespace AppBundle\Controller\Admin\Prueba;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class PruebaController extends Controller {

    /**
     * @Route("admin/prueba/lista", name="prueba_lista")
     */
    public function listaAction(Request $request) {
        $mensaje = "";
        $paginator = $this->get('knp_paginator');
        $arUsuario = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $arPrueba = $paginator->paginate($em->getRepository('AppBundle:Prueba')->findBy(array('estadoPrueba' => 1,'estadoFinalizado'=>0)), $request->query->get('page', 1), 20);
//            $arTareaFinalizado = $paginator->paginate($em->getRepository('AppBundle:Tarea')
//                            ->findBy(array('usuarioAsignadoRel' => $arUsuario,
//                                'finalizado' => 1), array('fechaInicio' => 'DESC')), $request->query->get('page', 1), 20);
        return $this->render('AppBundle:Admin/Prueba:lista.html.twig', array('arPrueba' => $arPrueba,
                    'mensaje' => $mensaje));
    }

    /**
     * @Route("admin/prueba/detalle/{codigoPrueba}", name="prueba_detalle")
     */
    public function detalleAction(Request $request, $codigoPrueba) {
        $em = $this->getDoctrine()->getManager();
        $arPrueba = $em->getRepository('AppBundle:Prueba')->find($codigoPrueba);
        $arTarea = $em->getRepository('AppBundle:Tarea')->find($arPrueba->getCodigoTareaFk());
        if ($arPrueba->getCodigoIncidenciaFk()) {
            $arIncidencia = $em->getRepository('AppBundle:Incidencia')->find($arPrueba->getCodigoIncidenciaFk());
        } else {
            $arIncidencia = NULL;
        }
        $arUsuario = $this->getUser();
        $arDetalleComentario = $em->getRepository('AppBundle:Comentario')->findBy(array('codigoPruebaFk' => $codigoPrueba));
        $form = $this->formularioDetalle($arPrueba);
        $form->handleRequest($request);
        //Validar el formulario para realizar el envio y almcenamiento de los datos
        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('estadoSolucionado')->getData()) {
                if ($arIncidencia) {
                    $arIncidencia->setEstadoAtendido(1);
                    $arIncidencia->setEstadoSolucionado(1);
                    $arIncidencia->setSolucion($arPrueba->getSolucion());
                    $arIncidencia->setUsuarioAsignado($arPrueba->getUsuarioAsignadoRel()->getUsername());
                    $em->persist($arIncidencia);
                    $correoEnviar = $arIncidencia->getEmail();
                    $this->enviarCorreo($arIncidencia, $correoEnviar, '');
                }
                $arPrueba->setEstadoFinalizado(1);
            }
            if ($form->get('estadoDevuelto')->getData()) {
                $arTarea->setFinalizado(0);
                $arPrueba->setEstadoPrueba(0);
                $arPrueba->setEstadoDevuelto(1);
                $em->persist($arTarea);
            }
            if ($form->get('comentario')->getData() != "") {
                $arComentario = new \AppBundle\Entity\Comentario();
                $arComentario->setTareaRel($arTarea);
                $arComentario->setPruebaRel($arPrueba);
                $arComentario->setFechaRegistro(new \DateTime('now'));
                $arComentario->setUsername($arUsuario->getUsername());
                $arComentario->setComentario($form->get('comentario')->getData());
                $em->persist($arComentario);
            }
            $em->persist($arPrueba);
            $em->flush();
            return $this->redirectToRoute('prueba_lista');
        }
        return $this->render('AppBundle:Admin/Prueba:detalle.html.twig', array('arPrueba' => $arPrueba,
                    'arDetalleComentario' => $arDetalleComentario,
                    'form' => $form->createView()));
    }

    private function formularioDetalle($arPrueba) {
        $form = $this->createFormBuilder()
                ->add('estadoSolucionado', CheckboxType::class, array('data' => $arPrueba->getEstadoFinalizado()))
                ->add('estadoDevuelto', CheckboxType::class, array('data' => $arPrueba->getEstadoDevuelto()))
                ->add('comentario', TextareaType::class)
                ->add('solucion', TextareaType::class, array('data' => $arPrueba->getSolucion()))
                ->add('guardar', SubmitType::class, array('label' => 'Guardar'))
                ->getForm();
        return $form;
    }
    
    private function enviarCorreo($arIncidencia, $correoEnviar, $arDetalleComentario) {
        $message = \Swift_Message::newInstance()
                ->setSubject('Soga soporte')
                ->setFrom('sogainformacion@gmail.com')
                ->setTo($correoEnviar)
                ->setBody($this->renderView('AppBundle:Email:nuevo.html.twig', array('arIncidencia' => $arIncidencia, 'arDetalleComentario' => $arDetalleComentario)), 'text/html');
        $this->get('mailer')->send($message);
    }

}
