<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AyModulo
 *
 * @ORM\Table(name="ay_modulo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AyModuloRepository")
 */
class AyModulo
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
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;
    
    /**
     * @ORM\OneToMany(targetEntity="AyGrupo", mappedBy="moduloRel")
     */
    protected $gruposModuloRel;
    
    /**
     * @ORM\OneToMany(targetEntity="AyTema", mappedBy="moduloRel")
     */
    protected $temasModuloRel;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->gruposModuloRel = new \Doctrine\Common\Collections\ArrayCollection();
        $this->temasModuloRel = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return AyModulo
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
     * Add gruposModuloRel
     *
     * @param \AppBundle\Entity\AyGrupo $gruposModuloRel
     *
     * @return AyModulo
     */
    public function addGruposModuloRel(\AppBundle\Entity\AyGrupo $gruposModuloRel)
    {
        $this->gruposModuloRel[] = $gruposModuloRel;

        return $this;
    }

    /**
     * Remove gruposModuloRel
     *
     * @param \AppBundle\Entity\AyGrupo $gruposModuloRel
     */
    public function removeGruposModuloRel(\AppBundle\Entity\AyGrupo $gruposModuloRel)
    {
        $this->gruposModuloRel->removeElement($gruposModuloRel);
    }

    /**
     * Get gruposModuloRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGruposModuloRel()
    {
        return $this->gruposModuloRel;
    }

    /**
     * Add temasModuloRel
     *
     * @param \AppBundle\Entity\AyTema $temasModuloRel
     *
     * @return AyModulo
     */
    public function addTemasModuloRel(\AppBundle\Entity\AyTema $temasModuloRel)
    {
        $this->temasModuloRel[] = $temasModuloRel;

        return $this;
    }

    /**
     * Remove temasModuloRel
     *
     * @param \AppBundle\Entity\AyTema $temasModuloRel
     */
    public function removeTemasModuloRel(\AppBundle\Entity\AyTema $temasModuloRel)
    {
        $this->temasModuloRel->removeElement($temasModuloRel);
    }

    /**
     * Get temasModuloRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTemasModuloRel()
    {
        return $this->temasModuloRel;
    }
}
