<?php

namespace AppBundle\Controller\Admin\Llamada;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\LlamadaType;

class LlamadaController extends Controller {

    /**
     * @Route("admin/llamada/lista", name="llamada_lista")
     */
    public function listaAction(Request $request) {
        $arUsuario = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $arLlamada = new \AppBundle\Entity\Llamada();
        $arLlamada->setFecha(new \DateTime('now'));
        $arLlamada->setHora(new \DateTime('now'));
        $form = $this->createForm(LlamadaType::class, $arLlamada);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if($form->get('guardar')->isClicked()){
                $arLlamada->setUsuarioAsignadoRel($arUsuario);
                $em->persist($arLlamada);
                $em->flush();
                return $this->redirect($this->generateUrl('llamada_lista'));
            }
            if($form->get('eliminar')->isClicked()){
                $arrSeleccionados = $request->request->get('ChkSeleccionar');
                if(count($arrSeleccionados)>0){
                    foreach($arrSeleccionados as $codigoLlamada){
                        $arLlamada = $em->getRepository('AppBundle:Llamada')->find($codigoLlamada);
                        $em->remove($arLlamada);
                    }
                    $em->flush();
                    return $this->redirect($this->generateUrl('llamada_lista'));
                }
            }
        }
        $dql = $em->getRepository('AppBundle:Llamada')->listaDql();
        $query = $em->CreateQuery($dql);
        $arLlamadas = $query->getResult();
        return $this->render('AppBundle:Admin/Llamada:lista.html.twig', array('arLlamadas' => $arLlamadas,
                    'form' => $form->createView()));
    }
    
    /**
     * @Route("admin/llamada/editar/{codigoLlamada}", name="llamada_editar")
     */
    public function editarAction(Request $request,$codigoLlamada) {
        $arUsuario = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $arLlamada = new \AppBundle\Entity\Llamada();
        $arLlamada = $em->getRepository('AppBundle:Llamada')->find($codigoLlamada);
        $form = $this->createForm(LlamadaType::class, $arLlamada);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if($form->get('guardar')->isClicked()){
                $arLlamada->setUsuarioAsignadoRel($arUsuario);
                $em->persist($arLlamada);
                $em->flush();
            }
            echo "<script languaje='javascript' type='text/javascript'>window.close();window.opener.location.reload();</script>";
        }
        return $this->render('AppBundle:Admin/Llamada:editar.html.twig', array('arLlamada' => $arLlamada,
                    'form' => $form->createView()));
    }
    
    /**
     * @Route("admin/llamada/solucionar/{codigoLlamada}", name="llamada_solucionar")
     */
    public function solucionarAction(Request $request,$codigoLlamada) {
        $arUsuario = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $arLlamada = new \AppBundle\Entity\Llamada();
        $arLlamada = $em->getRepository('AppBundle:Llamada')->find($codigoLlamada);
        $arLlamada->setEstado(true);
        $arLlamada->setSoluciono($arUsuario->getUserName());
        $em->flush();
        return $this->redirectToRoute('llamada_lista');
    }
}
