<?php

namespace AppBundle\Controller\Web;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class WebController extends Controller {

    /**
     * @Route("/", name="index")
     */
    public function inAction() {

        return $this->redirectToRoute('web_index');
    }

    /**
     * @Route("/index", name="web_index")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $arNovedad = $em->getRepository('AppBundle:Novedad')->findAll();
        return $this->render('AppBundle:Web:index.html.twig', array('arNovedad' => $arNovedad));
    }

    /**
     * @Route("/contacto", name="web_contacto")
     */
    public function contactoAction() {

        return $this->render('AppBundle:Web:contacto.html.twig');
    }

    /**
     * @Route("/corporativo", name="web_corporativo")
     */
    public function corporativoAction() {

        return $this->render('AppBundle:Web:corporativo.html.twig');
    }

    /**
     * @Route("/cliente", name="web_cliente")
     */
    public function clienteAction() {

        return $this->render('AppBundle:Web:cliente.html.twig');
    }

    /**
     * @Route("/producto", name="web_producto")
     */
    public function productoAction() {

        return $this->render('AppBundle:Web:producto.html.twig');
    }

    /**
     * @Route("/ayuda/documentacion", name="web_documentacion")
     */
    public function ayudaDocumentacionAction() {

        return $this->render('AppBundle:Web:documentacion_1.html.twig');
    }

}
