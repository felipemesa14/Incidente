<?php

namespace AppBundle\Controller\Documentacion;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DocumentacionController extends Controller {

    /**
     * @Route("documentacion/recurso_humano", name="recurso_humano")
     */
    public function recursoHumanoAction() {

        return $this->render('AppBundle:Web/documentacion/recursoHumano:lista.html.twig');
    }




}
