<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupo
 *
 * @ORM\Table(name="grupo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GrupoRepository")
 */
class Grupo
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_grupo_pk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoGrupoPk;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;
    
    /**
     * @ORM\OneToMany(targetEntity="Incidencia", mappedBy="grupoRel")
     */
    protected $incidenciasGrupoRel;


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
     * @return Grupo
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
        $this->incidenciasGrupoRel = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add incidenciasGrupoRel
     *
     * @param \AppBundle\Entity\Incidencia $incidenciasGrupoRel
     *
     * @return Grupo
     */
    public function addIncidenciasGrupoRel(\AppBundle\Entity\Incidencia $incidenciasGrupoRel)
    {
        $this->incidenciasGrupoRel[] = $incidenciasGrupoRel;

        return $this;
    }

    /**
     * Remove incidenciasGrupoRel
     *
     * @param \AppBundle\Entity\Incidencia $incidenciasGrupoRel
     */
    public function removeIncidenciasGrupoRel(\AppBundle\Entity\Incidencia $incidenciasGrupoRel)
    {
        $this->incidenciasGrupoRel->removeElement($incidenciasGrupoRel);
    }

    /**
     * Get incidenciasGrupoRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIncidenciasGrupoRel()
    {
        return $this->incidenciasGrupoRel;
    }
}
