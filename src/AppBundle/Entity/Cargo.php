<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cargo
 *
 * @ORM\Table(name="cargo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CargoRepository")
 */
class Cargo {

    /**
     * @var int
     *
     * @ORM\Column(name="codigo_cargo_pk", type="integer")
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
     * @ORM\OneToMany(targetEntity="Incidencia", mappedBy="cargoRel")
     */
    protected $incidenciasCargoRel;
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->incidenciasCargoRel = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Cargo
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
     * Add incidenciasCargoRel
     *
     * @param \AppBundle\Entity\Incidencia $incidenciasCargoRel
     *
     * @return Cargo
     */
    public function addIncidenciasCargoRel(\AppBundle\Entity\Incidencia $incidenciasCargoRel)
    {
        $this->incidenciasCargoRel[] = $incidenciasCargoRel;

        return $this;
    }

    /**
     * Remove incidenciasCargoRel
     *
     * @param \AppBundle\Entity\Incidencia $incidenciasCargoRel
     */
    public function removeIncidenciasCargoRel(\AppBundle\Entity\Incidencia $incidenciasCargoRel)
    {
        $this->incidenciasCargoRel->removeElement($incidenciasCargoRel);
    }

    /**
     * Get incidenciasCargoRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIncidenciasCargoRel()
    {
        return $this->incidenciasCargoRel;
    }
}
