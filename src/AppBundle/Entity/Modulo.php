<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Area
 *
 * @ORM\Table(name="modulo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AreaRepository")
 */
class Modulo
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_modulo_pk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoModuloPk;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;
    
    /**
     * @ORM\OneToMany(targetEntity="Novedad", mappedBy="novedadRel")
     */
    protected $novedadesModuloRel;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->novedadesModuloRel = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get codigoModuloPk
     *
     * @return integer
     */
    public function getCodigoModuloPk()
    {
        return $this->codigoModuloPk;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Modulo
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
     * Add novedadesModuloRel
     *
     * @param \AppBundle\Entity\Novedad $novedadesModuloRel
     *
     * @return Modulo
     */
    public function addNovedadesModuloRel(\AppBundle\Entity\Novedad $novedadesModuloRel)
    {
        $this->novedadesModuloRel[] = $novedadesModuloRel;

        return $this;
    }

    /**
     * Remove novedadesModuloRel
     *
     * @param \AppBundle\Entity\Novedad $novedadesModuloRel
     */
    public function removeNovedadesModuloRel(\AppBundle\Entity\Novedad $novedadesModuloRel)
    {
        $this->novedadesModuloRel->removeElement($novedadesModuloRel);
    }

    /**
     * Get novedadesModuloRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNovedadesModuloRel()
    {
        return $this->novedadesModuloRel;
    }
}
