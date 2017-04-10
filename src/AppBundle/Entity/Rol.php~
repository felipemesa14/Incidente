<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rol
 *
 * @ORM\Table(name="rol")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RolRepository")
 */
class Rol
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_rol_pk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoRolPk;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;
    
    /**
     * @ORM\OneToMany(targetEntity="Usuario", mappedBy="rolRel")
     */
    protected $usuariosRolRel;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuariosRolRel = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get codigoRolPk
     *
     * @return integer
     */
    public function getCodigoRolPk()
    {
        return $this->codigoRolPk;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Rol
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
     * Add usuariosRolRel
     *
     * @param \AppBundle\Entity\Usuario $usuariosRolRel
     *
     * @return Rol
     */
    public function addUsuariosRolRel(\AppBundle\Entity\Usuario $usuariosRolRel)
    {
        $this->usuariosRolRel[] = $usuariosRolRel;

        return $this;
    }

    /**
     * Remove usuariosRolRel
     *
     * @param \AppBundle\Entity\Usuario $usuariosRolRel
     */
    public function removeUsuariosRolRel(\AppBundle\Entity\Usuario $usuariosRolRel)
    {
        $this->usuariosRolRel->removeElement($usuariosRolRel);
    }

    /**
     * Get usuariosRolRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuariosRolRel()
    {
        return $this->usuariosRolRel;
    }
}
