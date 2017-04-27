<?php

namespace AppBundle\Controller\Admin\Nota;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\NotaType;

class NotaController extends Controller {

    /**
     * @Route("admin/nota/lista", name="nota_lista")
     */
    public function listaAction(Request $request) {
        $arUsuario = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $arNota = new \AppBundle\Entity\Nota();
        $form = $this->createForm(NotaType::class, $arNota);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('guardar')->isClicked()) {
                $arNota->setUsuarioAsignadoRel($arUsuario);
                $arNota->setUsername($arUsuario->getUsername());
                $arNota = $form->getData();
                $em->persist($arNota);
                $em->flush();
                return $this->redirectToRoute('nota_lista');
            }
            if ($form->get('eliminar')->isClicked()) {
                $arrSeleccionados = $request->request->get('ChkSeleccionar');
                if (count($arrSeleccionados) > 0) {
                    foreach ($arrSeleccionados AS $codigoNota) {
                        $arNota = $em->getRepository("AppBundle:Nota")->find($codigoNota);
                        $em->remove($arNota);
                        $em->flush();
                    }
                }
            }
        }
        $arNota = $em->getRepository('AppBundle:Nota')->findBy(array('username' => $arUsuario->getUsername()));
        return $this->render('AppBundle:Admin/Nota:lista.html.twig', array('arNota' => $arNota,
                    'form' => $form->createView()));
    }

}
