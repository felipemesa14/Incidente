<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\IncidenciaType;
use AppBundle\Form\ComentarioType;

class CasoController extends Controller {

    /**
     * @Route("/", name="caso_lista")
     */
    public function listaAction() {
        //Retornar el listado de los casos
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        if ($user->getCodigoRolFk() == 1) {
            $casos = $em->getRepository('AppBundle:Incidencia')->findAll();
        } else {
            $casos = $em->getRepository('AppBundle:Incidencia')->findByusuario($user->getUsername());
        }
        return $this->render('AppBundle:Caso:lista.html.twig', array('casos' => $casos));
    }

    /**
     * @Route("caso/nuevo/{codigoIncidenciaPk}", name="caso_nuevo")
     */
    public function nuevoAction(Request $request, $codigoIncidenciaPk) {
        //Crear formulario para el registro de caso
        $em = $this->getDoctrine()->getManager();
        if ($codigoIncidenciaPk != 0) {
            $arIncidencia = $em->getRepository('AppBundle:Incidencia')->find($codigoIncidenciaPk);
        } else {
            $arIncidencia = new \AppBundle\Entity\Incidencia();            
            $arUsuario = $this->getUser();
            $arIncidencia->setUsuario($arUsuario->getUsername());
            $arIncidencia->setFechaRegistro(new \DateTime("now"));
            $arIncidencia->setClienteRel($arUsuario->getClienteRel());
        }
        $form = $this->createForm(IncidenciaType::class, $arIncidencia);
        $form->handleRequest($request);
        //Validar el formulario para realizar el envio y almcenamiento de los datos
        if ($form->isSubmitted() && $form->isValid()) {
            $arIncidencia = $form->getData();
            $em->persist($arIncidencia);
            $em->flush();
            if ($codigoIncidenciaPk == 0) {
                $this->enviarCorreo($arIncidencia);
            }
            return $this->redirectToRoute('caso_lista');
        }
        return $this->render('AppBundle:Caso:nuevo.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("caso/eliminar/{codigoIncidenciaPk}", name="caso_eliminar")
     */
    public function eliminarAction(Request $request, $codigoIncidenciaPk) {
        $em = $this->getDoctrine()->getEntityManager();
        $arIncidencia = $em->getRepository("AppBundle:Incidencia")->find($codigoIncidenciaPk);
        $arComentario = $em->getRepository("AppBundle:Comentario")->findBycodigoIncidenciaFk($arIncidencia);
        foreach ($arComentario as $arComentario) {
            $em->remove($arComentario);
        }
        $em->remove($arIncidencia);
        $em->flush();
        return $this->redirectToRoute('caso_lista');
    }

    /**
     * @Route("caso/detalle/{codigoIncidenciaPk}", name="caso_detalle")
     */
    public function detalleAction(Request $request, $codigoIncidenciaPk) {
        $em = $this->getDoctrine()->getManager();
        $arIncidencia = $em->getRepository('AppBundle:Incidencia')->find($codigoIncidenciaPk);
        $arDetalleComentario = $em->getRepository('AppBundle:Comentario')->findBy(array('codigoIncidenciaFk' => $codigoIncidenciaPk));
        
        //Crear formulario de observaciones
        $arComentario = new \AppBundle\Entity\Comentario();
        $form = $this->createForm(ComentarioType::class, $arComentario);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $usuario = $em->getRepository('AppBundle:User')->find($this->getUser());
            $arComentario = $form->getData();
            $arComentario->setIncidenciaRel($arIncidencia);
            $arComentario->setFechaRegistro(new \DateTime('now'));
            $arComentario->setUsername($usuario->getUsername());
            $em->persist($arComentario);
            $em->flush();
            return $this->redirectToRoute('caso_detalle', array('codigoIncidenciaPk' => $codigoIncidenciaPk));
        }

        //Crear vista detalle del incidente
        return $this->render('AppBundle:Caso:detalle.html.twig', array(
                    'arIncidencia' => $arIncidencia,
                    'form' => $form->createView(),
                    'arDetalleComentario' => $arDetalleComentario
        ));
    }

    private function enviarCorreo($arIncidencia) {
        $arUsuario = $this->getUser();
        $message = \Swift_Message::newInstance()
                ->setSubject('Soporte Soga')
                ->setFrom('felipemesa14@gmail.com')
                ->setTo('felipemesa14@gmail.com')
                ->setBody($this->renderView('AppBundle:Email:nuevo.html.twig', 
                        array('descripcion' => $arIncidencia->getDescripcion())), 'text/html');
        $this->get('mailer')->send($message);
    }

}
