<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prioridad
 *
 * @ORM\Table(name="prioridad")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PrioridadRepository")
 */
class Prioridad
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_prioridad_pk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;
    
    /**
     * @ORM\OneToMany(targetEntity="Incidencia", mappedBy="prioridadRel")
     */
    protected $incidenciasPrioridadRel; 


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Prioridad
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
     * Constructor
     */
    public function __construct()
    {
        $this->incidenciasPrioridadRel = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add incidenciasPrioridadRel
     *
     * @param \AppBundle\Entity\Incidencia $incidenciasPrioridadRel
     *
     * @return Prioridad
     */
    public function addIncidenciasPrioridadRel(\AppBundle\Entity\Incidencia $incidenciasPrioridadRel)
    {
        $this->incidenciasPrioridadRel[] = $incidenciasPrioridadRel;

        return $this;
    }

    /**
     * Remove incidenciasPrioridadRel
     *
     * @param \AppBundle\Entity\Incidencia $incidenciasPrioridadRel
     */
    public function removeIncidenciasPrioridadRel(\AppBundle\Entity\Incidencia $incidenciasPrioridadRel)
    {
        $this->incidenciasPrioridadRel->removeElement($incidenciasPrioridadRel);
    }

    /**
     * Get incidenciasPrioridadRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIncidenciasPrioridadRel()
    {
        return $this->incidenciasPrioridadRel;
    }
}
