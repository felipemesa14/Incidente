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
        $dql   = "SELECT m.nombre as modulo, f.nombre as funcion, g.nombre as grupo, t.nombre as tema, t.codigoModuloFk, t.codigoFuncionFk, t.codigoGrupoFk FROM AppBundle:AyTema t JOIN t.moduloRel m JOIN t.funcionRel f JOIN t.grupoRel g "
                . "ORDER BY t.codigoModuloFk, t.codigoFuncionFk, t.codigoGrupoFk, t.orden";
        $query = $em->createQuery($dql);
        $arTemas = $query->getResult();         
        
        return $this->render('AppBundle:Web:documentacion.html.twig', array(
                    'arTemas' => $arTemas));
    }

}
