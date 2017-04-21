<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Novedad
 *
 * @ORM\Table(name="novedad")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AreaRepository")
 */
class Novedad
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_novedad_pk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoNovedadPk;
    
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_tipo_novedad_fk", type="integer")
     */
    private $codigoTipoNovedadFk;
    
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_modulo_fk", type="integer")
     */
    private $codigoModuloFk;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;
    
    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=255)
     */
    private $comentario;
    
    /**
     * @ORM\ManyToOne(targetEntity="TipoNovedad", inversedBy="mejorasTipoNovedadRel")
     * @ORM\JoinColumn(name="codigo_tipo_novedad_fk", referencedColumnName="codigo_tipo_novedad_pk")
     */
    protected $tipoNovedadRel;
    
    /**
     * @ORM\ManyToOne(targetEntity="Modulo", inversedBy="mejorasModuloRel")
     * @ORM\JoinColumn(name="codigo_modulo_fk", referencedColumnName="codigo_modulo_pk")
     */
    protected $moduloRel;
    

    /**
     * Get codigoNovedadPk
     *
     * @return integer
     */
    public function getCodigoNovedadPk()
    {
        return $this->codigoNovedadPk;
    }

    /**
     * Set codigoTipoNovedadFk
     *
     * @param integer $codigoTipoNovedadFk
     *
     * @return Novedad
     */
    public function setCodigoTipoNovedadFk($codigoTipoNovedadFk)
    {
        $this->codigoTipoNovedadFk = $codigoTipoNovedadFk;

        return $this;
    }

    /**
     * Get codigoTipoNovedadFk
     *
     * @return integer
     */
    public function getCodigoTipoNovedadFk()
    {
        return $this->codigoTipoNovedadFk;
    }

    /**
     * Set codigoModuloFk
     *
     * @param integer $codigoModuloFk
     *
     * @return Novedad
     */
    public function setCodigoModuloFk($codigoModuloFk)
    {
        $this->codigoModuloFk = $codigoModuloFk;

        return $this;
    }

    /**
     * Get codigoModuloFk
     *
     * @return integer
     */
    public function getCodigoModuloFk()
    {
        return $this->codigoModuloFk;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Novedad
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
     * Set comentario
     *
     * @param string $comentario
     *
     * @return Novedad
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
     * Set tipoNovedadRel
     *
     * @param \AppBundle\Entity\TipoNovedad $tipoNovedadRel
     *
     * @return Novedad
     */
    public function setTipoNovedadRel(\AppBundle\Entity\TipoNovedad $tipoNovedadRel = null)
    {
        $this->tipoNovedadRel = $tipoNovedadRel;

        return $this;
    }

    /**
     * Get tipoNovedadRel
     *
     * @return \AppBundle\Entity\TipoNovedad
     */
    public function getTipoNovedadRel()
    {
        return $this->tipoNovedadRel;
    }

    /**
     * Set moduloRel
     *
     * @param \AppBundle\Entity\Modulo $moduloRel
     *
     * @return Novedad
     */
    public function setModuloRel(\AppBundle\Entity\Modulo $moduloRel = null)
    {
        $this->moduloRel = $moduloRel;

        return $this;
    }

    /**
     * Get moduloRel
     *
     * @return \AppBundle\Entity\Modulo
     */
    public function getModuloRel()
    {
        return $this->moduloRel;
    }
}
