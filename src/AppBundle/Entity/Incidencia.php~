<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Incidencia
 *
 * @ORM\Table(name="incidencia")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IncidenciaRepository")
 */
class Incidencia {

    /**
     * @var int
     *
     * @ORM\Column(name="codigo_incidencia_pk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoIncidenciaPk;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo_cliente_fk", type="integer")
     */
    private $codigoClienteFk;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo_prioridad_fk", type="integer")
     */
    private $codigoPrioridaFk;
    
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_categoria_fk", type="integer")
     */
    private $codigoCategoriaFk;
    
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_area_fk", type="integer")
     */
    private $codigoAreaFk;
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_cargo_fk", type="integer")
     */
    private $codigoCargoFk;    
    
    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=100)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_registro", type="datetime")
     */
    private $fechaRegistro;

    /**
     * @var int
     *
     * @ORM\Column(name="usuario", type="string", nullable=true)
     */
    private $usuario;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nombre_completo", type="string", length=50)
     */
    private $nombreCompleto;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string",length=50)
     */
    private $telefono;
    
    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string",length=50)
     */
    private $extension;

    /**
     * @var int
     *
     * @ORM\Column(name="estado_solucionado", type="boolean")
     */
    private $estadoSolucionado = false;

    /**
     * @var int
     *
     * @ORM\Column(name="estado_atendido", type="boolean")
     */
    private $estadoAtendido = false;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_solucion", type="datetime", nullable=true)
     */
    private $fechaSolucion;

    /**
     * @var string
     *
     * @ORM\Column(name="solucion", type="string", length=255, nullable=true)
     */
    private $solucion;
    
    /**
     * @var int
     *
     * @ORM\Column(name="usuario_asignado", type="string", length=50, nullable=true)
     */
    private $usuarioAsignado;

    /**
     * @ORM\ManyToOne(targetEntity="Cliente", inversedBy="incidenciasClienteRel")
     * @ORM\JoinColumn(name="codigo_cliente_fk", referencedColumnName="codigo_cliente_pk")
     */
    protected $clienteRel;

    /**
     * @ORM\ManyToOne(targetEntity="Prioridad", inversedBy="incidenciasPrioridadRel")
     * @ORM\JoinColumn(name="codigo_prioridad_fk", referencedColumnName="codigo_prioridad_pk")
     */
    protected $prioridadRel;

    /**
     * @ORM\ManyToOne(targetEntity="Categoria", inversedBy="incidenciasCategoriaRel")
     * @ORM\JoinColumn(name="codigo_categoria_fk", referencedColumnName="codigo_categoria_pk")
     */
    protected $categoriaRel;
    
    /**
     * @ORM\ManyToOne(targetEntity="Area", inversedBy="incidenciasAreaRel")
     * @ORM\JoinColumn(name="codigo_area_fk", referencedColumnName="codigo_area_pk")
     */
    protected $AreaRel;
    
    /**
     * @ORM\ManyToOne(targetEntity="Cargo", inversedBy="incidenciasCargoRel")
     * @ORM\JoinColumn(name="codigo_cargo_fk", referencedColumnName="codigo_cargo_pk")
     */
    protected $CargoRel;

    /**
     * @ORM\OneToMany(targetEntity="Comentario", mappedBy="incidenciaRel")
     */
    protected $comentariosIncidenciaRel;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comentariosIncidenciaRel = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get codigoIncidenciaPk
     *
     * @return integer
     */
    public function getCodigoIncidenciaPk()
    {
        return $this->codigoIncidenciaPk;
    }

    /**
     * Set codigoClienteFk
     *
     * @param integer $codigoClienteFk
     *
     * @return Incidencia
     */
    public function setCodigoClienteFk($codigoClienteFk)
    {
        $this->codigoClienteFk = $codigoClienteFk;

        return $this;
    }

    /**
     * Get codigoClienteFk
     *
     * @return integer
     */
    public function getCodigoClienteFk()
    {
        return $this->codigoClienteFk;
    }

    /**
     * Set codigoPrioridaFk
     *
     * @param integer $codigoPrioridaFk
     *
     * @return Incidencia
     */
    public function setCodigoPrioridaFk($codigoPrioridaFk)
    {
        $this->codigoPrioridaFk = $codigoPrioridaFk;

        return $this;
    }

    /**
     * Get codigoPrioridaFk
     *
     * @return integer
     */
    public function getCodigoPrioridaFk()
    {
        return $this->codigoPrioridaFk;
    }

    /**
     * Set codigoCategoriaFk
     *
     * @param integer $codigoCategoriaFk
     *
     * @return Incidencia
     */
    public function setCodigoCategoriaFk($codigoCategoriaFk)
    {
        $this->codigoCategoriaFk = $codigoCategoriaFk;

        return $this;
    }

    /**
     * Get codigoCategoriaFk
     *
     * @return integer
     */
    public function getCodigoCategoriaFk()
    {
        return $this->codigoCategoriaFk;
    }

    /**
     * Set codigoAreaFk
     *
     * @param integer $codigoAreaFk
     *
     * @return Incidencia
     */
    public function setCodigoAreaFk($codigoAreaFk)
    {
        $this->codigoAreaFk = $codigoAreaFk;

        return $this;
    }

    /**
     * Get codigoAreaFk
     *
     * @return integer
     */
    public function getCodigoAreaFk()
    {
        return $this->codigoAreaFk;
    }

    /**
     * Set codigoCargoFk
     *
     * @param integer $codigoCargoFk
     *
     * @return Incidencia
     */
    public function setCodigoCargoFk($codigoCargoFk)
    {
        $this->codigoCargoFk = $codigoCargoFk;

        return $this;
    }

    /**
     * Get codigoCargoFk
     *
     * @return integer
     */
    public function getCodigoCargoFk()
    {
        return $this->codigoCargoFk;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Incidencia
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Incidencia
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     *
     * @return Incidencia
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    /**
     * Get fechaRegistro
     *
     * @return \DateTime
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    /**
     * Set fechaSolucion
     *
     * @param \DateTime $fechaSolucion
     *
     * @return Incidencia
     */
    public function setFechaSolucion($fechaSolucion)
    {
        $this->fechaSolucion = $fechaSolucion;

        return $this;
    }

    /**
     * Get fechaSolucion
     *
     * @return \DateTime
     */
    public function getFechaSolucion()
    {
        return $this->fechaSolucion;
    }

    /**
     * Set solucion
     *
     * @param string $solucion
     *
     * @return Incidencia
     */
    public function setSolucion($solucion)
    {
        $this->solucion = $solucion;

        return $this;
    }

    /**
     * Get solucion
     *
     * @return string
     */
    public function getSolucion()
    {
        return $this->solucion;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Incidencia
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set nombreCompleto
     *
     * @param string $nombreCompleto
     *
     * @return Incidencia
     */
    public function setNombreCompleto($nombreCompleto)
    {
        $this->nombreCompleto = $nombreCompleto;

        return $this;
    }

    /**
     * Get nombreCompleto
     *
     * @return string
     */
    public function getNombreCompleto()
    {
        return $this->nombreCompleto;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Incidencia
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Incidencia
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set estadoSolucionado
     *
     * @param boolean $estadoSolucionado
     *
     * @return Incidencia
     */
    public function setEstadoSolucionado($estadoSolucionado)
    {
        $this->estadoSolucionado = $estadoSolucionado;

        return $this;
    }

    /**
     * Get estadoSolucionado
     *
     * @return boolean
     */
    public function getEstadoSolucionado()
    {
        return $this->estadoSolucionado;
    }

    /**
     * Set estadoAtendido
     *
     * @param boolean $estadoAtendido
     *
     * @return Incidencia
     */
    public function setEstadoAtendido($estadoAtendido)
    {
        $this->estadoAtendido = $estadoAtendido;

        return $this;
    }

    /**
     * Get estadoAtendido
     *
     * @return boolean
     */
    public function getEstadoAtendido()
    {
        return $this->estadoAtendido;
    }

    /**
     * Set usuarioAsignado
     *
     * @param string $usuarioAsignado
     *
     * @return Incidencia
     */
    public function setUsuarioAsignado($usuarioAsignado)
    {
        $this->usuarioAsignado = $usuarioAsignado;

        return $this;
    }

    /**
     * Get usuarioAsignado
     *
     * @return string
     */
    public function getUsuarioAsignado()
    {
        return $this->usuarioAsignado;
    }

    /**
     * Set clienteRel
     *
     * @param \AppBundle\Entity\Cliente $clienteRel
     *
     * @return Incidencia
     */
    public function setClienteRel(\AppBundle\Entity\Cliente $clienteRel = null)
    {
        $this->clienteRel = $clienteRel;

        return $this;
    }

    /**
     * Get clienteRel
     *
     * @return \AppBundle\Entity\Cliente
     */
    public function getClienteRel()
    {
        return $this->clienteRel;
    }

    /**
     * Set prioridadRel
     *
     * @param \AppBundle\Entity\Prioridad $prioridadRel
     *
     * @return Incidencia
     */
    public function setPrioridadRel(\AppBundle\Entity\Prioridad $prioridadRel = null)
    {
        $this->prioridadRel = $prioridadRel;

        return $this;
    }

    /**
     * Get prioridadRel
     *
     * @return \AppBundle\Entity\Prioridad
     */
    public function getPrioridadRel()
    {
        return $this->prioridadRel;
    }

    /**
     * Set categoriaRel
     *
     * @param \AppBundle\Entity\Categoria $categoriaRel
     *
     * @return Incidencia
     */
    public function setCategoriaRel(\AppBundle\Entity\Categoria $categoriaRel = null)
    {
        $this->categoriaRel = $categoriaRel;

        return $this;
    }

    /**
     * Get categoriaRel
     *
     * @return \AppBundle\Entity\Categoria
     */
    public function getCategoriaRel()
    {
        return $this->categoriaRel;
    }

    /**
     * Set areaRel
     *
     * @param \AppBundle\Entity\Area $areaRel
     *
     * @return Incidencia
     */
    public function setAreaRel(\AppBundle\Entity\Area $areaRel = null)
    {
        $this->AreaRel = $areaRel;

        return $this;
    }

    /**
     * Get areaRel
     *
     * @return \AppBundle\Entity\Area
     */
    public function getAreaRel()
    {
        return $this->AreaRel;
    }

    /**
     * Set cargoRel
     *
     * @param \AppBundle\Entity\Cargo $cargoRel
     *
     * @return Incidencia
     */
    public function setCargoRel(\AppBundle\Entity\Cargo $cargoRel = null)
    {
        $this->CargoRel = $cargoRel;

        return $this;
    }

    /**
     * Get cargoRel
     *
     * @return \AppBundle\Entity\Cargo
     */
    public function getCargoRel()
    {
        return $this->CargoRel;
    }

    /**
     * Add comentariosIncidenciaRel
     *
     * @param \AppBundle\Entity\Comentario $comentariosIncidenciaRel
     *
     * @return Incidencia
     */
    public function addComentariosIncidenciaRel(\AppBundle\Entity\Comentario $comentariosIncidenciaRel)
    {
        $this->comentariosIncidenciaRel[] = $comentariosIncidenciaRel;

        return $this;
    }

    /**
     * Remove comentariosIncidenciaRel
     *
     * @param \AppBundle\Entity\Comentario $comentariosIncidenciaRel
     */
    public function removeComentariosIncidenciaRel(\AppBundle\Entity\Comentario $comentariosIncidenciaRel)
    {
        $this->comentariosIncidenciaRel->removeElement($comentariosIncidenciaRel);
    }

    /**
     * Get comentariosIncidenciaRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComentariosIncidenciaRel()
    {
        return $this->comentariosIncidenciaRel;
    }

    /**
     * Set extension
     *
     * @param string $extension
     *
     * @return Incidencia
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }
}
