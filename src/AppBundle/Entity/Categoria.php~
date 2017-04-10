<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 *
 * @ORM\Table(name="categoria")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoriaRepository")
 */
class Categoria
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_categoria_pk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoCategoriaPk;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=true)
     */
    private $nombre;
    
    /**
     * @ORM\OneToMany(targetEntity="Incidencia", mappedBy="categoriaRel")
     */
    protected $incidenciasCategoriaRel;

    /**
     * Get codigoCategoriaPk
     *
     * @return integer
     */
    public function getCodigoCategoriaPk()
    {
        return $this->codigoCategoriaPk;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Categoria
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
        $this->incidenciasCategoriaRel = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add incidenciasCategoriaRel
     *
     * @param \AppBundle\Entity\Incidencia $incidenciasCategoriaRel
     *
     * @return Categoria
     */
    public function addIncidenciasCategoriaRel(\AppBundle\Entity\Incidencia $incidenciasCategoriaRel)
    {
        $this->incidenciasCategoriaRel[] = $incidenciasCategoriaRel;

        return $this;
    }

    /**
     * Remove incidenciasCategoriaRel
     *
     * @param \AppBundle\Entity\Incidencia $incidenciasCategoriaRel
     */
    public function removeIncidenciasCategoriaRel(\AppBundle\Entity\Incidencia $incidenciasCategoriaRel)
    {
        $this->incidenciasCategoriaRel->removeElement($incidenciasCategoriaRel);
    }

    /**
     * Get incidenciasCategoriaRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIncidenciasCategoriaRel()
    {
        return $this->incidenciasCategoriaRel;
    }
}
