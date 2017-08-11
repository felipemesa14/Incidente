<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comentario
 *
 * @ORM\Table(name="comentario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ComentarioRepository")
 */
class Comentario
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_comentario_pk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo_incidencia_fk", type="integer", nullable=true)
     */
    private $codigoIncidenciaFk;
    
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_tarea_fk", type="integer", nullable=true)
     */
    private $codigoTareaFk;
    
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_prueba_fk", type="integer", nullable=true)
     */
    private $codigoPruebaFk;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=5000)
     */
    private $comentario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_registro", type="datetime")
     */
    private $fechaRegistro;
    
    /**
     * @var \string
     *
     * @ORM\Column(name="username", type="string")
     */
    private $username;
    
    /**
     * @ORM\ManyToOne(targetEntity="Incidencia", inversedBy="comentariosIncidenciaRel")
     * @ORM\JoinColumn(name="codigo_incidencia_fk", referencedColumnName="codigo_incidencia_pk")
     */
    protected $incidenciaRel;
    
    /**
     * @ORM\ManyToOne(targetEntity="Tarea", inversedBy="comentariosTareaRel")
     * @ORM\JoinColumn(name="codigo_tarea_fk", referencedColumnName="codigo_tarea_pk")
     */
    protected $tareaRel;
    
    /**
     * @ORM\ManyToOne(targetEntity="Prueba", inversedBy="comentariosPruebaRel")
     * @ORM\JoinColumn(name="codigo_prueba_fk", referencedColumnName="codigo_prueba_pk")
     */
    protected $pruebaRel;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codigoIncidenciaFk
     *
     * @param integer $codigoIncidenciaFk
     *
     * @return Comentario
     */
    public function setCodigoIncidenciaFk($codigoIncidenciaFk)
    {
        $this->codigoIncidenciaFk = $codigoIncidenciaFk;

        return $this;
    }

    /**
     * Get codigoIncidenciaFk
     *
     * @return int
     */
    public function getCodigoIncidenciaFk()
    {
        return $this->codigoIncidenciaFk;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     *
     * @return Comentario
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
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     *
     * @return Comentario
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
     * Set incidenciaRel
     *
     * @param \AppBundle\Entity\Incidencia $incidenciaRel
     *
     * @return Comentario
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
     * Set username
     *
     * @param string $username
     *
     * @return Comentario
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set codigoTareaFk
     *
     * @param integer $codigoTareaFk
     *
     * @return Comentario
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
     * Set codigoPruebaFk
     *
     * @param integer $codigoPruebaFk
     *
     * @return Comentario
     */
    public function setCodigoPruebaFk($codigoPruebaFk)
    {
        $this->codigoPruebaFk = $codigoPruebaFk;

        return $this;
    }

    /**
     * Get codigoPruebaFk
     *
     * @return integer
     */
    public function getCodigoPruebaFk()
    {
        return $this->codigoPruebaFk;
    }

    /**
     * Set tareaRel
     *
     * @param \AppBundle\Entity\Tarea $tareaRel
     *
     * @return Comentario
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

    /**
     * Set pruebaRel
     *
     * @param \AppBundle\Entity\Prueba $pruebaRel
     *
     * @return Comentario
     */
    public function setPruebaRel(\AppBundle\Entity\Prueba $pruebaRel = null)
    {
        $this->pruebaRel = $pruebaRel;

        return $this;
    }

    /**
     * Get pruebaRel
     *
     * @return \AppBundle\Entity\Prueba
     */
    public function getPruebaRel()
    {
        return $this->pruebaRel;
    }
}
