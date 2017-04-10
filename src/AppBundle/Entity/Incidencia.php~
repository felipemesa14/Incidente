<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Incidencia
 *
 * @ORM\Table(name="incidencia")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IncidenciaRepository")
 */
class Incidencia
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_incidencia_pk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoIncidenciaPk;

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
     * @ORM\Column(name="codigo_grupo_fk", type="integer")
     */
    private $codigoGrupoFk;

    /**
     * @var int
     *
     * @ORM\Column(name="usuario", type="string", nullable=true)
     */
    private $usuario;

    /**
     * @var int
     *
     * @ORM\Column(name="estado_solucionado", type="boolean")
     */
    private $estadoSolucionado = false;
    
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_categoria_fk", type="integer")
     */
    private $codigoCategoriaFk;
    
    /**
     * @var int
     *
     * @ORM\Column(name="usuario_asignado", type="integer", nullable=true)
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
     * @ORM\ManyToOne(targetEntity="Grupo", inversedBy="incidenciasGrupoRel")
     * @ORM\JoinColumn(name="codigo_grupo_fk", referencedColumnName="codigo_grupo_pk")
     */
    protected $grupoRel;
    
    /**
     * @ORM\OneToMany(targetEntity="Comentario", mappedBy="incidenciaRel")
     */
    
    protected $comentariosIncidenciaRel;

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
     * Set codigoGrupoFk
     *
     * @param integer $codigoGrupoFk
     *
     * @return Incidencia
     */
    public function setCodigoGrupoFk($codigoGrupoFk)
    {
        $this->codigoGrupoFk = $codigoGrupoFk;

        return $this;
    }

    /**
     * Get codigoGrupoFk
     *
     * @return integer
     */
    public function getCodigoGrupoFk()
    {
        return $this->codigoGrupoFk;
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
     * Set usuarioAsignado
     *
     * @param integer $usuarioAsignado
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
     * @return integer
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
     * Set grupoRel
     *
     * @param \AppBundle\Entity\Grupo $grupoRel
     *
     * @return Incidencia
     */
    public function setGrupoRel(\AppBundle\Entity\Grupo $grupoRel = null)
    {
        $this->grupoRel = $grupoRel;

        return $this;
    }

    /**
     * Get grupoRel
     *
     * @return \AppBundle\Entity\Grupo
     */
    public function getGrupoRel()
    {
        return $this->grupoRel;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comentariosIncidenciaRel = new \Doctrine\Common\Collections\ArrayCollection();
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
}
