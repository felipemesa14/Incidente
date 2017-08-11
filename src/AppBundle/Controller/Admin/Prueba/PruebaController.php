<?php

namespace AppBundle\Controller\Admin\Prueba;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class PruebaController extends Controller {

    /**
     * @Route("admin/prueba/lista", name="prueba_lista")
     */
    public function listaAction(Request $request) {
        $mensaje = "";
        $paginator = $this->get('knp_paginator');
        $arUsuario = $this->getUser();
        $em = $this->getDoctrine()->getManager();
            $arPrueba = $paginator->paginate($em->getRepository('AppBundle:Prueba')->findAll(), $request->query->get('page', 1), 20);
//            $arTareaFinalizado = $paginator->paginate($em->getRepository('AppBundle:Tarea')
//                            ->findBy(array('usuarioAsignadoRel' => $arUsuario,
//                                'finalizado' => 1), array('fechaInicio' => 'DESC')), $request->query->get('page', 1), 20);
        return $this->render('AppBundle:Admin/Prueba:lista.html.twig', array('arPrueba' => $arPrueba,
                    'mensaje' => $mensaje));
    }

}
