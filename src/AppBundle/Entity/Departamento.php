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
    protected $usuariosDepartamentoRel;

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
     * Constructor
     */
    public function __construct()
    {
        $this->usuariosDepartamentoRel = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add usuariosDepartamentoRel
     *
     * @param \AppBundle\Entity\Ciudad $usuariosDepartamentoRel
     *
     * @return Departamento
     */
    public function addUsuariosDepartamentoRel(\AppBundle\Entity\Ciudad $usuariosDepartamentoRel)
    {
        $this->usuariosDepartamentoRel[] = $usuariosDepartamentoRel;

        return $this;
    }

    /**
     * Remove usuariosDepartamentoRel
     *
     * @param \AppBundle\Entity\Ciudad $usuariosDepartamentoRel
     */
    public function removeUsuariosDepartamentoRel(\AppBundle\Entity\Ciudad $usuariosDepartamentoRel)
    {
        $this->usuariosDepartamentoRel->removeElement($usuariosDepartamentoRel);
    }

    /**
     * Get usuariosDepartamentoRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuariosDepartamentoRel()
    {
        return $this->usuariosDepartamentoRel;
    }
}
