<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarea
 *
 * @ORM\Table(name="tarea")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TareaRepository")
 */
class Tarea
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_tarea_pk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoTareaPk;
    
     /**
     * @var int
     *
     * @ORM\Column(name="codigo_usuario_fk", type="integer")
     */
    private $codigoUsuarioFk;
    
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_tipo_tarea_fk", type="integer")
     */
    private $codigoTipoTareaFk;
    
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_prioridad_fk", type="integer")
     */
    private $codigoPrioridadFk;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="datetime")
     */
    private $fechaInicio;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_final", type="datetime")
     */
    private $fechaFinal;
    
    /**
     * @var int
     *
     * @ORM\Column(name="porcentaje", type="integer", nullable=true)
     */
    private $porcentaje;
    
    /**
     * @var int
     *
     * @ORM\Column(name="finalizado", type="boolean")
     */
    private $finalizado = false;
    
    /**
     * @var int
     *
     * @ORM\Column(name="revisado", type="boolean")
     */
    private $revisado = false;
    
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=1000)
     */
    private $descripcion;
    
    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=1000, nullable=true)
     */
    private $comentario;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="tareasUsuarioAsignadoRel")
     * @ORM\JoinColumn(name="codigo_usuario_fk", referencedColumnName="codigo_usuario_pk")
     */
    protected $usuarioAsignadoRel;
    
    /**
     * @ORM\ManyToOne(targetEntity="Prioridad", inversedBy="tareasPrioridadRel")
     * @ORM\JoinColumn(name="codigo_prioridad_fk", referencedColumnName="codigo_prioridad_pk")
     */
    protected $prioridadRel;
    
    /**
     * @ORM\ManyToOne(targetEntity="TipoTarea", inversedBy="tareasTipoTareaRel")
     * @ORM\JoinColumn(name="codigo_tipo_tarea_fk", referencedColumnName="codigo_tipo_tarea_pk")
     */
    protected $tipoTareaRel;


    /**
     * Get codigoTareaPk
     *
     * @return integer
     */
    public function getCodigoTareaPk()
    {
        return $this->codigoTareaPk;
    }

    /**
     * Set codigoUsuarioFk
     *
     * @param integer $codigoUsuarioFk
     *
     * @return Tarea
     */
    public function setCodigoUsuarioFk($codigoUsuarioFk)
    {
        $this->codigoUsuarioFk = $codigoUsuarioFk;

        return $this;
    }

    /**
     * Get codigoUsuarioFk
     *
     * @return integer
     */
    public function getCodigoUsuarioFk()
    {
        return $this->codigoUsuarioFk;
    }

    /**
     * Set codigoTipoTareaFk
     *
     * @param integer $codigoTipoTareaFk
     *
     * @return Tarea
     */
    public function setCodigoTipoTareaFk($codigoTipoTareaFk)
    {
        $this->codigoTipoTareaFk = $codigoTipoTareaFk;

        return $this;
    }

    /**
     * Get codigoTipoTareaFk
     *
     * @return integer
     */
    public function getCodigoTipoTareaFk()
    {
        return $this->codigoTipoTareaFk;
    }

    /**
     * Set codigoPrioridadFk
     *
     * @param integer $codigoPrioridadFk
     *
     * @return Tarea
     */
    public function setCodigoPrioridadFk($codigoPrioridadFk)
    {
        $this->codigoPrioridadFk = $codigoPrioridadFk;

        return $this;
    }

    /**
     * Get codigoPrioridadFk
     *
     * @return integer
     */
    public function getCodigoPrioridadFk()
    {
        return $this->codigoPrioridadFk;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Tarea
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
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return Tarea
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFinal
     *
     * @param \DateTime $fechaFinal
     *
     * @return Tarea
     */
    public function setFechaFinal($fechaFinal)
    {
        $this->fechaFinal = $fechaFinal;

        return $this;
    }

    /**
     * Get fechaFinal
     *
     * @return \DateTime
     */
    public function getFechaFinal()
    {
        return $this->fechaFinal;
    }

    /**
     * Set porcentaje
     *
     * @param integer $porcentaje
     *
     * @return Tarea
     */
    public function setPorcentaje($porcentaje)
    {
        $this->porcentaje = $porcentaje;

        return $this;
    }

    /**
     * Get porcentaje
     *
     * @return integer
     */
    public function getPorcentaje()
    {
        return $this->porcentaje;
    }

    /**
     * Set finalizado
     *
     * @param boolean $finalizado
     *
     * @return Tarea
     */
    public function setFinalizado($finalizado)
    {
        $this->finalizado = $finalizado;

        return $this;
    }

    /**
     * Get finalizado
     *
     * @return boolean
     */
    public function getFinalizado()
    {
        return $this->finalizado;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Tarea
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
     * Set usuarioAsignadoRel
     *
     * @param \AppBundle\Entity\User $usuarioAsignadoRel
     *
     * @return Tarea
     */
    public function setUsuarioAsignadoRel(\AppBundle\Entity\User $usuarioAsignadoRel = null)
    {
        $this->usuarioAsignadoRel = $usuarioAsignadoRel;

        return $this;
    }

    /**
     * Get usuarioAsignadoRel
     *
     * @return \AppBundle\Entity\User
     */
    public function getUsuarioAsignadoRel()
    {
        return $this->usuarioAsignadoRel;
    }

    /**
     * Set prioridadRel
     *
     * @param \AppBundle\Entity\Prioridad $prioridadRel
     *
     * @return Tarea
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
     * Set tipoTareaRel
     *
     * @param \AppBundle\Entity\TipoTarea $tipoTareaRel
     *
     * @return Tarea
     */
    public function setTipoTareaRel(\AppBundle\Entity\TipoTarea $tipoTareaRel = null)
    {
        $this->tipoTareaRel = $tipoTareaRel;

        return $this;
    }

    /**
     * Get tipoTareaRel
     *
     * @return \AppBundle\Entity\TipoTarea
     */
    public function getTipoTareaRel()
    {
        return $this->tipoTareaRel;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     *
     * @return Tarea
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set revisado
     *
     * @param boolean $revisado
     *
     * @return Tarea
     */
    public function setRevisado($revisado)
    {
        $this->revisado = $revisado;

        return $this;
    }

    /**
     * Get revisado
     *
     * @return boolean
     */
    public function getRevisado()
    {
        return $this->revisado;
    }
}
