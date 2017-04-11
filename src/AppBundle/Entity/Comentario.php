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
     * @ORM\Column(name="codigo_incidencia_fk", type="integer")
     */
    private $codigoIncidenciaFk;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=255)
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
}
