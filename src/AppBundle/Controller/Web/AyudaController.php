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
        $em = $this->getDoctrine()->getManager();
        $arModulos = new \AppBundle\Entity\AyModulo();
        $arModulos = $em->getRepository('AppBundle:AyModulo')->findAll(array(), array('codigoModuloPk' => 'DESC'));
        $arFunciones = new \AppBundle\Entity\AyFuncion();
        $arFunciones = $em->getRepository('AppBundle:AyFuncion')->findAll(array(), array('codigoFuncionPk' => 'DESC'));
        $arTemas = $em->getRepository('AppBundle:AyTema')
                ->findAll(array(), array('codigoModuloFk' => 'DESC', 'codigoGrupoFk' => 'DESC'));
        return $this->render('AppBundle:Web:documentacion.html.twig', array(
                    'arTemas' => $arTemas,
                    'arModulos' => $arModulos,
                    'arFunciones' => $arFunciones));
    }

}
