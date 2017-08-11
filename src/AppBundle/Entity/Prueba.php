<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prueba
 *
 * @ORM\Table(name="prueba")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PruebaRepository")
 */
class Prueba
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_prueba_pk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoPruebaPk;
    
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_usuario_fk", type="integer")
     */
    private $codigoUsuarioFk;
    
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_tarea_fk", type="integer", nullable=true)
     */
    private $codigoTareaFk;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo_incidencia_fk", type="integer", nullable=true)
     */
    private $codigoIncidenciaFk;

    /**
     * @var string
     *
     * @ORM\Column(name="ruta", type="string", length=100, nullable=true)
     */
    private $ruta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var bool
     *
     * @ORM\Column(name="estado_prueba", type="boolean")
     */
    private $estadoPrueba = false;

    /**
     * @var bool
     *
     * @ORM\Column(name="estado_devuelto", type="boolean")
     */
    private $estadoDevuelto = false;

    /**
     * @var bool
     *
     * @ORM\Column(name="estado_finalizado", type="boolean")
     */
    private $estadoFinalizado = false;
    
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="solucion", type="text", nullable=true)
     */
    private $solucion;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="pruebasUsuarioAsignadoRel")
     * @ORM\JoinColumn(name="codigo_usuario_fk", referencedColumnName="codigo_usuario_pk")
     */
    protected $usuarioAsignadoRel;
    
    /**
     * @ORM\OneToOne(targetEntity="Incidencia", inversedBy="pruebaIncidenciaRel")
     * @ORM\JoinColumn(name="codigo_incidencia_fk", referencedColumnName="codigo_incidencia_pk")
     */
    protected $incidenciaRel;
    
    /**
     * @ORM\OneToOne(targetEntity="Tarea", inversedBy="pruebaTareaRel")
     * @ORM\JoinColumn(name="codigo_tarea_fk", referencedColumnName="codigo_tarea_pk")
     */
    protected $tareaRel;
    
    /**
     * @ORM\OneToMany(targetEntity="Comentario", mappedBy="pruebaRel")
     */
    protected $comentariosPruebaRel;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comentariosPruebaRel = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get codigoPruebaPk
     *
     * @return integer
     */
    public function getCodigoPruebaPk()
    {
        return $this->codigoPruebaPk;
    }

    /**
     * Set codigoUsuarioFk
     *
     * @param integer $codigoUsuarioFk
     *
     * @return Prueba
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
     * Set codigoTareaFk
     *
     * @param integer $codigoTareaFk
     *
     * @return Prueba
     */
    public function setCodigoTareaFk($codigoTareaFk)
    {
        $this->codigoTareaFk = $codigoTareaFk;

        return $this;
    }

    /**
     * Get codigoTareaFk
     *
     * @return integer
     */
    public function getCodigoTareaFk()
    {
        return $this->codigoTareaFk;
    }

    /**
     * Set codigoIncidenciaFk
     *
     * @param integer $codigoIncidenciaFk
     *
     * @return Prueba
     */
    public function setCodigoIncidenciaFk($codigoIncidenciaFk)
    {
        $this->codigoIncidenciaFk = $codigoIncidenciaFk;

        return $this;
    }

    /**
     * Get codigoIncidenciaFk
     *
     * @return integer
     */
    public function getCodigoIncidenciaFk()
    {
        return $this->codigoIncidenciaFk;
    }

    /**
     * Set ruta
     *
     * @param string $ruta
     *
     * @return Prueba
     */
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;

        return $this;
    }

    /**
     * Get ruta
     *
     * @return string
     */
    public function getRuta()
    {
        return $this->ruta;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Prueba
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set estadoPrueba
     *
     * @param boolean $estadoPrueba
     *
     * @return Prueba
     */
    public function setEstadoPrueba($estadoPrueba)
    {
        $this->estadoPrueba = $estadoPrueba;

        return $this;
    }

    /**
     * Get estadoPrueba
     *
     * @return boolean
     */
    public function getEstadoPrueba()
    {
        return $this->estadoPrueba;
    }

    /**
     * Set estadoDevuelto
     *
     * @param boolean $estadoDevuelto
     *
     * @return Prueba
     */
    public function setEstadoDevuelto($estadoDevuelto)
    {
        $this->estadoDevuelto = $estadoDevuelto;

        return $this;
    }

    /**
     * Get estadoDevuelto
     *
     * @return boolean
     */
    public function getEstadoDevuelto()
    {
        return $this->estadoDevuelto;
    }

    /**
     * Set estadoFinalizado
     *
     * @param boolean $estadoFinalizado
     *
     * @return Prueba
     */
    public function setEstadoFinalizado($estadoFinalizado)
    {
        $this->estadoFinalizado = $estadoFinalizado;

        return $this;
    }

    /**
     * Get estadoFinalizado
     *
     * @return boolean
     */
    public function getEstadoFinalizado()
    {
        return $this->estadoFinalizado;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Prueba
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
     * Set solucion
     *
     * @param string $solucion
     *
     * @return Prueba
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
     * Set usuarioAsignadoRel
     *
     * @param \AppBundle\Entity\User $usuarioAsignadoRel
     *
     * @return Prueba
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
     * Set incidenciaRel
     *
     * @param \AppBundle\Entity\Incidencia $incidenciaRel
     *
     * @return Prueba
     */
    public function setIncidenciaRel(\AppBundle\Entity\Incidencia $incidenciaRel = null)
    {
        $this->incidenciaRel = $incidenciaRel;

        return $this;
    }

    /**
     * Get incidenciaRel
     *
     * @return \AppBundle\Entity\Incidencia
     */
    public function getIncidenciaRel()
    {
        return $this->incidenciaRel;
    }

    /**
     * Add comentariosPruebaRel
     *
     * @param \AppBundle\Entity\Comentario $comentariosPruebaRel
     *
     * @return Prueba
     */
    public function addComentariosPruebaRel(\AppBundle\Entity\Comentario $comentariosPruebaRel)
    {
        $this->comentariosPruebaRel[] = $comentariosPruebaRel;

        return $this;
    }

    /**
     * Remove comentariosPruebaRel
     *
     * @param \AppBundle\Entity\Comentario $comentariosPruebaRel
     */
    public function removeComentariosPruebaRel(\AppBundle\Entity\Comentario $comentariosPruebaRel)
    {
        $this->comentariosPruebaRel->removeElement($comentariosPruebaRel);
    }

    /**
     * Get comentariosPruebaRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComentariosPruebaRel()
    {
        return $this->comentariosPruebaRel;
    }

    /**
     * Set tareaRel
     *
     * @param \AppBundle\Entity\Tarea $tareaRel
     *
     * @return Prueba
     */
    public function setTareaRel(\AppBundle\Entity\Tarea $tareaRel = null)
    {
        $this->tareaRel = $tareaRel;

        return $this;
    }

    /**
     * Get tareaRel
     *
     * @return \AppBundle\Entity\Tarea
     */
    public function getTareaRel()
    {
        return $this->tareaRel;
    }
}
