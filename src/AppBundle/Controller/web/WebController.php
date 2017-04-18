<?php

namespace AppBundle\Controller\web;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class WebController extends Controller {

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

}
