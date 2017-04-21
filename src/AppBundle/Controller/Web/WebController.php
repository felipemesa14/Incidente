<?php

namespace AppBundle\Controller\Web;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class WebController extends Controller {

    /**
     * @Route("/", name="index")
     */
    public function inAction() {

        return $this->redirectToRoute('caso_lista');
    }

    /**
     * @Route("/index", name="web_index")
     */
    public function indexAction() {

        return $this->render('AppBundle:Web:index.html.twig');
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
     * @Route("/documentacion", name="web_documentacion")
     */
    public function documentacionAction() {

        return $this->render('AppBundle:Web:documentacion.html.twig');
    }

    /**
     * @Route("/producto", name="web_producto")
     */
    public function productoAction() {

        return $this->render('AppBundle:Web:producto.html.twig');
    }

}
