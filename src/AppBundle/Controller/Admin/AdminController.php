<?php

namespace AppBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller {

    /**
     * @Route("admin/index", name="admin_index")
     */
    public function indexAction(Request $request) {
       
        return $this->render('AppBundle:Admin:index.html.twig');
    }
}
