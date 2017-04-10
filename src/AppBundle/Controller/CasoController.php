<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\IncidenciaType;
use AppBundle\Form\ComentarioType;

class CasoController extends Controller {

    /**
     * @Route("/", name="caso_lista")
     */
    public function listaAction() {
        //Retornar el listado de los casos
        $em = $this->getDoctrine()->getManager();
        $casos = $em->getRepository('AppBundle:Incidencia')->findByusuario('JuanFelipe');
        return $this->render('AppBundle:Caso:lista.html.twig', array('casos' => $casos));
    }

    /**
     * @Route("caso/nuevo", name="caso_nuevo")
     */
    public function nuevoAction(Request $request) {
        //Crear formulario para el registro de caso
        $em = $this->getDoctrine()->getManager();
        $arCaso = new \AppBundle\Entity\Incidencia();
        $form = $this->createForm(IncidenciaType::class, $arCaso);
        $form->handleRequest($request);
        //Validar el formulario para realizarl el envio y almcenamiento de los datos
        if ($form->isSubmitted() && $form->isValid()) {
            $usuario = $em->getRepository('AppBundle:Usuario')->find(1);
            $arCaso = $form->getData();
            $arCaso->setFechaRegistro(new \DateTime("now"));
            $arCaso->setUsuario($usuario->getUsername());
            $arCaso->setClienteRel($usuario->getClienteRel());
            $em->persist($arCaso);
            $em->flush();
            return $this->redirectToRoute('caso_lista');
        }
        return $this->render('AppBundle:Caso:nuevo.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("caso/detalle/{codigoIncidenciaPk}", name="caso_detalle")
     */
    public function detalleAction(Request $request, $codigoIncidenciaPk) {

        $em = $this->getDoctrine()->getManager();
        $arIncidencia = $em->getRepository('AppBundle:Incidencia')->find($codigoIncidenciaPk);
        $arDetalleComentario = $em->getRepository('AppBundle:Comentario')->findBycodigoIncidenciaFk($codigoIncidenciaPk);
        //Crear formulario de observaciones
        $arComentario = new \AppBundle\Entity\Comentario();
        $form = $this->createForm(ComentarioType::class, $arComentario);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $usuario = $em->getRepository('AppBundle:Usuario')->find(1);
            $arComentario = $form->getData();
            $arComentario->setIncidenciaRel($arIncidencia);
            $arComentario->setFechaRegistro(new \DateTime('now'));
            $arComentario->setUsername($usuario->getUsername());
            $em->persist($arComentario);
            $em->flush();
            return $this->redirectToRoute('caso_detalle', array('codigoIncidenciaPk' => $codigoIncidenciaPk));
        }

        //Crear vista detalle del incidente
        return $this->render('AppBundle:Caso:detalle.html.twig', array(
                    'arIncidencia' => $arIncidencia,
                    'form' => $form->createView(),
                    'arDetalleComentario' => $arDetalleComentario
        ));
    }

}
