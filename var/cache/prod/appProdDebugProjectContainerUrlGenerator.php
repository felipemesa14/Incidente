<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\Autenticacion\\LoginController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'registrar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\Autenticacion\\LoginController::registrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registrar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caso_lista' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CasoController::listaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caso_nuevo' => array (  0 =>   array (    0 => 'codigoIncidenciaPk',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CasoController::nuevoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'codigoIncidenciaPk',    ),    1 =>     array (      0 => 'text',      1 => '/caso/nuevo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caso_detalle' => array (  0 =>   array (    0 => 'codigoIncidenciaPk',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CasoController::detalleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'codigoIncidenciaPk',    ),    1 =>     array (      0 => 'text',      1 => '/caso/detalle',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caso_eliminar' => array (  0 =>   array (    0 => 'codigoIncidenciaPk',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CasoController::eliminarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'codigoIncidenciaPk',    ),    1 =>     array (      0 => 'text',      1 => '/caso/eliminar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
