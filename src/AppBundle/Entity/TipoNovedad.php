<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoNovedad
 *
 * @ORM\Table(name="tipo_novedad")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AreaRepository")
 */
class TipoNovedad
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_tipo_novedad_pk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoTipoNovedadPk;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;
    
    /**
     * @ORM\OneToMany(targetEntity="Novedad", mappedBy="tipoNovedadRel")
     */
    protected $novedadesTipoNovedadRel;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->novedadesTipoNovedadRel = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get codigoTipoNovedadPk
     *
     * @return integer
     */
    public function getCodigoTipoNovedadPk()
    {
        return $this->codigoTipoNovedadPk;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return TipoNovedad
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Add novedadesTipoNovedadRel
     *
     * @param \AppBundle\Entity\Novedad $novedadesTipoNovedadRel
     *
     * @return TipoNovedad
     */
    public function addNovedadesTipoNovedadRel(\AppBundle\Entity\Novedad $novedadesTipoNovedadRel)
    {
        $this->novedadesTipoNovedadRel[] = $novedadesTipoNovedadRel;

        return $this;
    }

    /**
     * Remove novedadesTipoNovedadRel
     *
     * @param \AppBundle\Entity\Novedad $novedadesTipoNovedadRel
     */
    public function removeNovedadesTipoNovedadRel(\AppBundle\Entity\Novedad $novedadesTipoNovedadRel)
    {
        $this->novedadesTipoNovedadRel->removeElement($novedadesTipoNovedadRel);
    }

    /**
     * Get novedadesTipoNovedadRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNovedadesTipoNovedadRel()
    {
        return $this->novedadesTipoNovedadRel;
    }
}
