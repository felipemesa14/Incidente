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
     * @ORM\OneToMany(targetEntity="User", mappedBy="cargoRel")
     */
    protected $usuariosCargoRel;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuariosCargoRel = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add usuariosCargoRel
     *
     * @param \AppBundle\Entity\User $usuariosCargoRel
     *
     * @return Cargo
     */
    public function addUsuariosCargoRel(\AppBundle\Entity\User $usuariosCargoRel)
    {
        $this->usuariosCargoRel[] = $usuariosCargoRel;

        return $this;
    }

    /**
     * Remove usuariosCargoRel
     *
     * @param \AppBundle\Entity\User $usuariosCargoRel
     */
    public function removeUsuariosCargoRel(\AppBundle\Entity\User $usuariosCargoRel)
    {
        $this->usuariosCargoRel->removeElement($usuariosCargoRel);
    }

    /**
     * Get usuariosCargoRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuariosCargoRel()
    {
        return $this->usuariosCargoRel;
    }
}
