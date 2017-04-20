<?php

namespace AppBundle\Controller\Tarea;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class TareaController extends Controller {

    /**
     * @Route("tarea/lista", name="tarea_lista")
     */
    public function listaAction(Request $request) {
        
        return $this->render('AppBundle:Tarea:lista.html.twig');
    }
}
