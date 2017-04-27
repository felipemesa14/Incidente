<?php

namespace AppBundle\Controller\Admin\Tarea;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\TareaType;
use AppBundle\Form\TareaDetalleType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TareaController extends Controller {

    /**
     * @Route("admin/tarea/lista", name="tarea_lista")
     */
    public function listaAction(Request $request) {
        $mensaje = "";
        $arUsuario = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createFormBuilder()
                ->add('BtnEliminar', SubmitType::class, array('label' => 'Eliminar'))
                ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('BtnEliminar')->isClicked()) {
                $arrSeleccionados = $request->request->get('ChkSeleccionar');
                if (count($arrSeleccionados) > 0) {
                    foreach ($arrSeleccionados AS $codigoTarea) {
                        $arTarea = $em->getRepository("AppBundle:Tarea")->find($codigoTarea);
                        if ($arTarea->getFinalizado() == 0) {

                            $em->remove($arTarea);
                        } else {
                            $mensaje = 'No se puede eliminar la tarea despues de solucionado';
                        }
                    }
                    $em->flush();
                }
            }
        }
        //Validacion tipo de usuario para mostrar el listado de las incidencias reportados
        if ($arUsuario->getRolRel()->getNombre() == "ROLE_SUPER_ADMIN") {
            $arTarea = $em->getRepository('AppBundle:Tarea')->findAll();
        } else {
            $arTarea = $em->getRepository('AppBundle:Tarea')->findByUsuarioAsignadoRel($arUsuario);
        }
        return $this->render('AppBundle:Admin/Tarea:lista.html.twig', array('arTarea' => $arTarea,
                    'mensaje' => $mensaje,
                    'form' => $form->createView()));
    }

    /**
     * @Route("admin/tarea/nuevo/{codigoTarea}", name="tarea_nuevo")
     */
    public function nuevoAction(Request $request, $codigoTarea) {
        $em = $this->getDoctrine()->getManager();
        if ($codigoTarea != 0) {
            $arTarea = $em->getRepository('AppBundle:Tarea')->find($codigoTarea);
        } else {
            $arTarea = new \AppBundle\Entity\Tarea();
        }
        $form = $this->createForm(TareaType::class, $arTarea);
        $form->handleRequest($request);
        //Validar el formulario para realizar el envio y almcenamiento de los datos
        if ($form->isSubmitted() && $form->isValid()) {
            $arTarea = $form->getData();
            $em->persist($arTarea);
            $em->flush();
            return $this->redirectToRoute('tarea_lista');
        }
        return $this->render('AppBundle:Admin/Tarea:nuevo.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("admin/tarea/detalle/{codigoTarea}", name="tarea_detalle")
     */
    public function detalleAction(Request $request, $codigoTarea) {
        $em = $this->getDoctrine()->getManager();
        $arTarea = $em->getRepository('AppBundle:Tarea')->find($codigoTarea);
        $form = $this->createForm(TareaDetalleType::class, $arTarea);
        $form->handleRequest($request);
        //Validar el formulario para realizar el envio y almcenamiento de los datos
        if ($form->isSubmitted() && $form->isValid()) {
            $arTarea = $form->getData();
            $em->persist($arTarea);
            $em->flush();
            return $this->redirectToRoute('tarea_lista');
        }
        return $this->render('AppBundle:Admin/Tarea:detalle.html.twig', array('arTarea' => $arTarea,
                    'form' => $form->createView()));
    }

}
