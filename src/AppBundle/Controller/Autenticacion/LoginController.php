<?php

namespace AppBundle\Controller\Autenticacion;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller {

    /**
     * @Route("/login", name="login")
     */
    public function indexAction(Request $request) {
        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('AppBundle:Login:login.html.twig', array(
                    'last_username' => $lastUsername,
                    'error' => $error,
        ));
    }

    /**
     * @Route("/registrar", name="registrar")
     */
    public function registrarAction(Request $request) {
        $arUsuario = new \AppBundle\Entity\Usuario();
        $form = $this->createForm(\AppBundle\Form\UsuarioType::class, $arUsuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $arUsuario = $form->getData();
            $password = $this->get('security.password_encoder')
                    ->encodePassword($arUsuario, $arUsuario->getPlainPassword());
            $arUsuario->setPassword($password);
            $em = $this->getDoctrine()->getManager();
            $em->persist($arUsuario);
            $em->flush();
            return $this->redirectToRoute('login');
        }

        return $this->render('AppBundle:Login:registrar.html.twig', array('form' => $form->createView())
        );
    }

}
