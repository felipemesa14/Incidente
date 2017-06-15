<?php

namespace AppBundle\Controller\Web;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\AyTemaType;

class AyudaController extends Controller {

    /**
     * @Route("/ayuda", name="web_ayuda")
     */
    public function listaAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT m.nombre as modulo, f.nombre as funcion, g.nombre as grupo, t.nombre as tema, t.codigoModuloFk, t.codigoFuncionFk, t.codigoGrupoFk, t.codigoTemaPk FROM AppBundle:AyTema t JOIN t.moduloRel m JOIN t.funcionRel f JOIN t.grupoRel g "
                . "ORDER BY t.codigoModuloFk, t.codigoFuncionFk, t.codigoGrupoFk, t.orden";
        $query = $em->createQuery($dql);
        $arTemas = $query->getResult();

        return $this->render('AppBundle:Web:documentacion.html.twig', array(
                    'arTemas' => $arTemas));
    }

    /**
     * @Route("/ayuda/nuevo/{codigoTema}", name="web_ayuda_nuevo")
     */
    public function nuevoAyudaAction(Request $request, $codigoTema = 0) {
        $em = $this->getDoctrine()->getManager();
        $arTema = new \AppBundle\Entity\AyTema();
        if ($codigoTema != 0) {
            $arTema = $em->getRepository("AppBundle:AyTema")->find($codigoTema);
        }
        $form = $this->createForm(AyTemaType::class, $arTema);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $arTema = $form->getData();
            $em->persist($arTema);
            $em->flush();
            return $this->redirectToRoute('web_ayuda');
        }
        return $this->render('AppBundle:Web:documentacionNuevo.html.twig', array(
                    'arTema' => $arTema,
                    'form' => $form->createView()));
    }

    /**
     * @Route("/ayuda/detalle/{codigoTema}", name="web_ayuda_detalle")
     */
    public function detalleAyudaAction(Request $request, $codigoTema) {
        $em = $this->getDoctrine()->getManager();
        $arTema = $em->getRepository("AppBundle:AyTema")->find($codigoTema);
        return $this->render('AppBundle:Web:documentacionDetalle.html.twig', array(
                    'arTema' => $arTema));
    }

}
