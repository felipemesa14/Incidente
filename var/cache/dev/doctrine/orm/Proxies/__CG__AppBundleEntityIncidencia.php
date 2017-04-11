<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Incidencia extends \AppBundle\Entity\Incidencia implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'codigoIncidenciaPk', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'titulo', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'descripcion', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'fechaRegistro', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'fechaSolucion', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'solucion', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'codigoClienteFk', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'codigoPrioridaFk', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'codigoGrupoFk', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'usuario', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'estadoSolucionado', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'estadoAtendido', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'codigoCategoriaFk', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'usuarioAsignado', 'clienteRel', 'prioridadRel', 'categoriaRel', 'grupoRel', 'comentariosIncidenciaRel'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'codigoIncidenciaPk', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'titulo', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'descripcion', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'fechaRegistro', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'fechaSolucion', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'solucion', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'codigoClienteFk', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'codigoPrioridaFk', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'codigoGrupoFk', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'usuario', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'estadoSolucionado', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'estadoAtendido', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'codigoCategoriaFk', '' . "\0" . 'AppBundle\\Entity\\Incidencia' . "\0" . 'usuarioAsignado', 'clienteRel', 'prioridadRel', 'categoriaRel', 'grupoRel', 'comentariosIncidenciaRel'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Incidencia $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getCodigoIncidenciaPk()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getCodigoIncidenciaPk();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodigoIncidenciaPk', []);

        return parent::getCodigoIncidenciaPk();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitulo($titulo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitulo', [$titulo]);

        return parent::setTitulo($titulo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitulo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitulo', []);

        return parent::getTitulo();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', [$descripcion]);

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', []);

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaRegistro($fechaRegistro)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaRegistro', [$fechaRegistro]);

        return parent::setFechaRegistro($fechaRegistro);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaRegistro()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaRegistro', []);

        return parent::getFechaRegistro();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaSolucion($fechaSolucion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaSolucion', [$fechaSolucion]);

        return parent::setFechaSolucion($fechaSolucion);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaSolucion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaSolucion', []);

        return parent::getFechaSolucion();
    }

    /**
     * {@inheritDoc}
     */
    public function setSolucion($solucion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSolucion', [$solucion]);

        return parent::setSolucion($solucion);
    }

    /**
     * {@inheritDoc}
     */
    public function getSolucion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSolucion', []);

        return parent::getSolucion();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodigoClienteFk($codigoClienteFk)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodigoClienteFk', [$codigoClienteFk]);

        return parent::setCodigoClienteFk($codigoClienteFk);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodigoClienteFk()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodigoClienteFk', []);

        return parent::getCodigoClienteFk();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodigoPrioridaFk($codigoPrioridaFk)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodigoPrioridaFk', [$codigoPrioridaFk]);

        return parent::setCodigoPrioridaFk($codigoPrioridaFk);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodigoPrioridaFk()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodigoPrioridaFk', []);

        return parent::getCodigoPrioridaFk();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodigoGrupoFk($codigoGrupoFk)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodigoGrupoFk', [$codigoGrupoFk]);

        return parent::setCodigoGrupoFk($codigoGrupoFk);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodigoGrupoFk()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodigoGrupoFk', []);

        return parent::getCodigoGrupoFk();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuario($usuario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuario', [$usuario]);

        return parent::setUsuario($usuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuario', []);

        return parent::getUsuario();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstadoSolucionado($estadoSolucionado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstadoSolucionado', [$estadoSolucionado]);

        return parent::setEstadoSolucionado($estadoSolucionado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstadoSolucionado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstadoSolucionado', []);

        return parent::getEstadoSolucionado();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstadoAtendido($estadoAtendido)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstadoAtendido', [$estadoAtendido]);

        return parent::setEstadoAtendido($estadoAtendido);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstadoAtendido()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstadoAtendido', []);

        return parent::getEstadoAtendido();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodigoCategoriaFk($codigoCategoriaFk)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodigoCategoriaFk', [$codigoCategoriaFk]);

        return parent::setCodigoCategoriaFk($codigoCategoriaFk);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodigoCategoriaFk()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodigoCategoriaFk', []);

        return parent::getCodigoCategoriaFk();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuarioAsignado($usuarioAsignado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuarioAsignado', [$usuarioAsignado]);

        return parent::setUsuarioAsignado($usuarioAsignado);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuarioAsignado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuarioAsignado', []);

        return parent::getUsuarioAsignado();
    }

    /**
     * {@inheritDoc}
     */
    public function setClienteRel(\AppBundle\Entity\Cliente $clienteRel = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClienteRel', [$clienteRel]);

        return parent::setClienteRel($clienteRel);
    }

    /**
     * {@inheritDoc}
     */
    public function getClienteRel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClienteRel', []);

        return parent::getClienteRel();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrioridadRel(\AppBundle\Entity\Prioridad $prioridadRel = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrioridadRel', [$prioridadRel]);

        return parent::setPrioridadRel($prioridadRel);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrioridadRel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrioridadRel', []);

        return parent::getPrioridadRel();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategoriaRel(\AppBundle\Entity\Categoria $categoriaRel = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategoriaRel', [$categoriaRel]);

        return parent::setCategoriaRel($categoriaRel);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategoriaRel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategoriaRel', []);

        return parent::getCategoriaRel();
    }

    /**
     * {@inheritDoc}
     */
    public function setGrupoRel(\AppBundle\Entity\Grupo $grupoRel = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrupoRel', [$grupoRel]);

        return parent::setGrupoRel($grupoRel);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrupoRel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrupoRel', []);

        return parent::getGrupoRel();
    }

    /**
     * {@inheritDoc}
     */
    public function addComentariosIncidenciaRel(\AppBundle\Entity\Comentario $comentariosIncidenciaRel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addComentariosIncidenciaRel', [$comentariosIncidenciaRel]);

        return parent::addComentariosIncidenciaRel($comentariosIncidenciaRel);
    }

    /**
     * {@inheritDoc}
     */
    public function removeComentariosIncidenciaRel(\AppBundle\Entity\Comentario $comentariosIncidenciaRel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeComentariosIncidenciaRel', [$comentariosIncidenciaRel]);

        return parent::removeComentariosIncidenciaRel($comentariosIncidenciaRel);
    }

    /**
     * {@inheritDoc}
     */
    public function getComentariosIncidenciaRel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComentariosIncidenciaRel', []);

        return parent::getComentariosIncidenciaRel();
    }

}
