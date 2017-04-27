<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoTarea
 *
 * @ORM\Table(name="tipo_tarea")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TipoTareaRepository")
 */
class TipoTarea
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_tipo_tarea_pk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoTipoTareaPk;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;
    
    /**
     * @ORM\OneToMany(targetEntity="Tarea", mappedBy="tipoTareaRel")
     */
    protected $tareasTipoTareaRel;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tareasTipoTareaRel = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get codigoTipoTareaPk
     *
     * @return integer
     */
    public function getCodigoTipoTareaPk()
    {
        return $this->codigoTipoTareaPk;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return TipoTarea
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
     * Add tareasTipoTareaRel
     *
     * @param \AppBundle\Entity\Tarea $tareasTipoTareaRel
     *
     * @return TipoTarea
     */
    public function addTareasTipoTareaRel(\AppBundle\Entity\Tarea $tareasTipoTareaRel)
    {
        $this->tareasTipoTareaRel[] = $tareasTipoTareaRel;

        return $this;
    }

    /**
     * Remove tareasTipoTareaRel
     *
     * @param \AppBundle\Entity\Tarea $tareasTipoTareaRel
     */
    public function removeTareasTipoTareaRel(\AppBundle\Entity\Tarea $tareasTipoTareaRel)
    {
        $this->tareasTipoTareaRel->removeElement($tareasTipoTareaRel);
    }

    /**
     * Get tareasTipoTareaRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTareasTipoTareaRel()
    {
        return $this->tareasTipoTareaRel;
    }
}
