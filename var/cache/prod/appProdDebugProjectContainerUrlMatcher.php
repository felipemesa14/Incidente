<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle\\Controller\\Autenticacion\\LoginController::indexAction',  '_route' => 'login',);
        }

        // registrar
        if ($pathinfo === '/registrar') {
            return array (  '_controller' => 'AppBundle\\Controller\\Autenticacion\\LoginController::registrarAction',  '_route' => 'registrar',);
        }

        // caso_lista
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'caso_lista');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\CasoController::listaAction',  '_route' => 'caso_lista',);
        }

        if (0 === strpos($pathinfo, '/caso')) {
            // caso_nuevo
            if (0 === strpos($pathinfo, '/caso/nuevo') && preg_match('#^/caso/nuevo/(?P<codigoIncidencia>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'caso_nuevo')), array (  '_controller' => 'AppBundle\\Controller\\CasoController::nuevoAction',));
            }

            // caso_editar
            if (0 === strpos($pathinfo, '/caso/editarAdmin') && preg_match('#^/caso/editarAdmin/(?P<codigoIncidencia>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'caso_editar')), array (  '_controller' => 'AppBundle\\Controller\\CasoController::editarAdminAction',));
            }

            // caso_detalle
            if (0 === strpos($pathinfo, '/caso/detalle') && preg_match('#^/caso/detalle/(?P<codigoIncidencia>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'caso_detalle')), array (  '_controller' => 'AppBundle\\Controller\\CasoController::detalleAction',));
            }

        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
