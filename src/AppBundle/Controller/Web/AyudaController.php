<?php

namespace AppBundle\Controller\Web;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class AyudaController extends Controller {

    /**
     * @Route("/documentacion", name="web_documentacion")
     */
    public function listaAction(Request $request) {
        $paginator = $this->get('knp_paginator');
        $em = $this->getDoctrine()->getManager();
        $arTemas = $paginator->paginate($em->getRepository('AppBundle:AyTema')
                        ->findAll(array(),array('codigoModuloFk' => 'DESC','codigoGrupoFk' => 'DESC')), $request->query->get('page', 1), 20);
        return $this->render('AppBundle:Web:documentacion.html.twig', array(
                    'arTemas' => $arTemas));
    }
}
