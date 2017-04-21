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
     * @ORM\OneToMany(targetEntity="Incidencia", mappedBy="areaRel")
     */
    protected $incidenciasAreaRel;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->incidenciasAreaRel = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add incidenciasAreaRel
     *
     * @param \AppBundle\Entity\Incidencia $incidenciasAreaRel
     *
     * @return Area
     */
    public function addIncidenciasAreaRel(\AppBundle\Entity\Incidencia $incidenciasAreaRel)
    {
        $this->incidenciasAreaRel[] = $incidenciasAreaRel;

        return $this;
    }

    /**
     * Remove incidenciasAreaRel
     *
     * @param \AppBundle\Entity\Incidencia $incidenciasAreaRel
     */
    public function removeIncidenciasAreaRel(\AppBundle\Entity\Incidencia $incidenciasAreaRel)
    {
        $this->incidenciasAreaRel->removeElement($incidenciasAreaRel);
    }

    /**
     * Get incidenciasAreaRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIncidenciasAreaRel()
    {
        return $this->incidenciasAreaRel;
    }
}
