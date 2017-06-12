<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AyFuncion
 *
 * @ORM\Table(name="ay_funcion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AyFuncionRepository")
 */
class AyFuncion
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_funcion_pk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoGrupoPk;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;
    
    /**
     * @ORM\OneToMany(targetEntity="AyGrupo", mappedBy="funcionRel")
     */
    protected $gruposFuncionRel;
    
    /**
     * @ORM\OneToMany(targetEntity="AyTema", mappedBy="funcionRel")
     */
    protected $temasFuncionRel;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->gruposFuncionRel = new \Doctrine\Common\Collections\ArrayCollection();
        $this->temasFuncionRel = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get codigoGrupoPk
     *
     * @return integer
     */
    public function getCodigoGrupoPk()
    {
        return $this->codigoGrupoPk;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return AyFuncion
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
     * Add gruposFuncionRel
     *
     * @param \AppBundle\Entity\AyGrupo $gruposFuncionRel
     *
     * @return AyFuncion
     */
    public function addGruposFuncionRel(\AppBundle\Entity\AyGrupo $gruposFuncionRel)
    {
        $this->gruposFuncionRel[] = $gruposFuncionRel;

        return $this;
    }

    /**
     * Remove gruposFuncionRel
     *
     * @param \AppBundle\Entity\AyGrupo $gruposFuncionRel
     */
    public function removeGruposFuncionRel(\AppBundle\Entity\AyGrupo $gruposFuncionRel)
    {
        $this->gruposFuncionRel->removeElement($gruposFuncionRel);
    }

    /**
     * Get gruposFuncionRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGruposFuncionRel()
    {
        return $this->gruposFuncionRel;
    }

    /**
     * Add temasFuncionRel
     *
     * @param \AppBundle\Entity\AyTema $temasFuncionRel
     *
     * @return AyFuncion
     */
    public function addTemasFuncionRel(\AppBundle\Entity\AyTema $temasFuncionRel)
    {
        $this->temasFuncionRel[] = $temasFuncionRel;

        return $this;
    }

    /**
     * Remove temasFuncionRel
     *
     * @param \AppBundle\Entity\AyTema $temasFuncionRel
     */
    public function removeTemasFuncionRel(\AppBundle\Entity\AyTema $temasFuncionRel)
    {
        $this->temasFuncionRel->removeElement($temasFuncionRel);
    }

    /**
     * Get temasFuncionRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTemasFuncionRel()
    {
        return $this->temasFuncionRel;
    }
}
