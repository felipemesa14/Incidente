<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImplementacionConcepto
 *
 * @ORM\Table(name="implementacion_concepto")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ImplementacionConceptoRepository")
 */
class ImplementacionConcepto
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_implementacion_concepto_pk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoImplementacionConceptoPk;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=true)
     */
    private $nombre;
    
    /**
     * @ORM\OneToMany(targetEntity="ClienteImplementacion", mappedBy="implementacionConceptoRel")
     */
    protected $clienteImplementacionRel;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->clienteImplementacionRel = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get codigoImplementacionConceptoPk
     *
     * @return integer
     */
    public function getCodigoImplementacionConceptoPk()
    {
        return $this->codigoImplementacionConceptoPk;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return ImplementacionConcepto
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
     * Add clienteImplementacionRel
     *
     * @param \AppBundle\Entity\ClienteImplementacion $clienteImplementacionRel
     *
     * @return ImplementacionConcepto
     */
    public function addClienteImplementacionRel(\AppBundle\Entity\ClienteImplementacion $clienteImplementacionRel)
    {
        $this->clienteImplementacionRel[] = $clienteImplementacionRel;

        return $this;
    }

    /**
     * Remove clienteImplementacionRel
     *
     * @param \AppBundle\Entity\ClienteImplementacion $clienteImplementacionRel
     */
    public function removeClienteImplementacionRel(\AppBundle\Entity\ClienteImplementacion $clienteImplementacionRel)
    {
        $this->clienteImplementacionRel->removeElement($clienteImplementacionRel);
    }

    /**
     * Get clienteImplementacionRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClienteImplementacionRel()
    {
        return $this->clienteImplementacionRel;
    }
}
