<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Area
 *
 * @ORM\Table(name="area")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AreaRepository")
 */
class Area
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_area_pk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoAreaPk;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;
    
    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="areaRel")
     */
    protected $usuariosAreaRel;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuariosAreaRel = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get codigoAreaPk
     *
     * @return integer
     */
    public function getCodigoAreaPk()
    {
        return $this->codigoAreaPk;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Area
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
     * Add usuariosAreaRel
     *
     * @param \AppBundle\Entity\User $usuariosAreaRel
     *
     * @return Area
     */
    public function addUsuariosAreaRel(\AppBundle\Entity\User $usuariosAreaRel)
    {
        $this->usuariosAreaRel[] = $usuariosAreaRel;

        return $this;
    }

    /**
     * Remove usuariosAreaRel
     *
     * @param \AppBundle\Entity\User $usuariosAreaRel
     */
    public function removeUsuariosAreaRel(\AppBundle\Entity\User $usuariosAreaRel)
    {
        $this->usuariosAreaRel->removeElement($usuariosAreaRel);
    }

    /**
     * Get usuariosAreaRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuariosAreaRel()
    {
        return $this->usuariosAreaRel;
    }
}
