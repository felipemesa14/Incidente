<?php

namespace AppBundle\Controller\Implementacion;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\ORM\EntityRepository;

class ImplementacionController extends Controller {

    var $strDqlLista = "";

    /**
     * @Route("implementacion/lista", name="implementacion_lista")
     */
    public function listaAction(Request $request) {
        $mensaje = '';
//        $paginator = $this->get('knp_paginator');
        $em = $this->getDoctrine()->getManager();
//        $arIncidencia = $paginator->paginate($em->createQuery($this->strDqlLista), $request->query->get('page', 1), 20);
        $arImplementacion = $em->getRepository('AppBundle:ImplementacionConcepto')->findAll();
        return $this->render('AppBundle:Implementacion:lista.html.twig', array(
                    'arImplementacion' => $arImplementacion,
                    'mensaje' => $mensaje));
    }
}
