<?php

namespace AppBundle\Controller\Admin\Novedad;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\NovedadType;


class NovedadController extends Controller {

    /**
     * @Route("admin/novedad/lista", name="novedad_lista")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $arNovedad = $em->getRepository('AppBundle:Novedad')->findAll();
        return $this->render('AppBundle:Admin/Novedad:lista.html.twig', array('arNovedad' => $arNovedad));
    }

    /**
     * @Route("admin/novedad/nuevo/{codigoNovedad}", name="novedad_nuevo")
     */
    public function nuevoAction(Request $request, $codigoNovedad) {
        //Crear formulario para el registro de caso
        $em = $this->getDoctrine()->getManager();
        if ($codigoNovedad != 0) {
            $arNovedad = $em->getRepository('AppBundle:Novedad')->find($codigoNovedad);
        } else {
            $arNovedad = new \AppBundle\Entity\Novedad;
        }
        $form = $this->createForm(NovedadType::class, $arNovedad);
        $form->handleRequest($request);
        //Validar el formulario para realizar el envio y almcenamiento de los datos
        if ($form->isSubmitted() && $form->isValid()) {
            $arNovedad = $form->getData();
            $em->persist($arNovedad);
            $em->flush();
            return $this->redirectToRoute('novedad_lista');
        }
        return $this->render('AppBundle:Admin/Novedad:nuevo.html.twig', array('form' => $form->createView()));
    }

}
