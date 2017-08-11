<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departamento
 *
 * @ORM\Table(name="departamento")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DepartamentoRepository")
 */
class Departamento
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_departamento_pk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoDepartamentoPk;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;
    
    /**
     * @ORM\OneToMany(targetEntity="Ciudad", mappedBy="departamentoRel")
     */
    protected $ciudadesDepartamentoRel;

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ciudadesDepartamentoRel = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get codigoDepartamentoPk
     *
     * @return integer
     */
    public function getCodigoDepartamentoPk()
    {
        return $this->codigoDepartamentoPk;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Departamento
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
     * Add ciudadesDepartamentoRel
     *
     * @param \AppBundle\Entity\Ciudad $ciudadesDepartamentoRel
     *
     * @return Departamento
     */
    public function addCiudadesDepartamentoRel(\AppBundle\Entity\Ciudad $ciudadesDepartamentoRel)
    {
        $this->ciudadesDepartamentoRel[] = $ciudadesDepartamentoRel;

        return $this;
    }

    /**
     * Remove ciudadesDepartamentoRel
     *
     * @param \AppBundle\Entity\Ciudad $ciudadesDepartamentoRel
     */
    public function removeCiudadesDepartamentoRel(\AppBundle\Entity\Ciudad $ciudadesDepartamentoRel)
    {
        $this->ciudadesDepartamentoRel->removeElement($ciudadesDepartamentoRel);
    }

    /**
     * Get ciudadesDepartamentoRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCiudadesDepartamentoRel()
    {
        return $this->ciudadesDepartamentoRel;
    }
}
