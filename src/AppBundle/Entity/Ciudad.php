<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciudad
 *
 * @ORM\Table(name="ciudad")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CiudadRepository")
 */
class Ciudad
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_ciudad_pk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoCiudadPk;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo_departamento_fk", type="integer")
     */
    private $codigo_departamento_fk;
    
    /**
     * @ORM\ManyToOne(targetEntity="Departamento", inversedBy="ciudadesDepartamentoRel")
     * @ORM\JoinColumn(name="codigo_departamento_fk", referencedColumnName="codigo_departamento_pk")
     */
    protected $departamentoRel;
    
    /**
     * @ORM\OneToMany(targetEntity="Cliente", mappedBy="ciudadRel")
     */
    protected $clientesCiudadRel; 
    
    /**
     * Get codigoCiudadPk
     *
     * @return integer
     */
    public function getCodigoCiudadPk()
    {
        return $this->codigoCiudadPk;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Ciudad
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
     * Set codigoDepartamentoFk
     *
     * @param integer $codigoDepartamentoFk
     *
     * @return Ciudad
     */
    public function setCodigoDepartamentoFk($codigoDepartamentoFk)
    {
        $this->codigo_departamento_fk = $codigoDepartamentoFk;

        return $this;
    }

    /**
     * Get codigoDepartamentoFk
     *
     * @return integer
     */
    public function getCodigoDepartamentoFk()
    {
        return $this->codigo_departamento_fk;
    }

    /**
     * Set departamentoRel
     *
     * @param \AppBundle\Entity\Departamento $departamentoRel
     *
     * @return Ciudad
     */
    public function setDepartamentoRel(\AppBundle\Entity\Departamento $departamentoRel = null)
    {
        $this->departamentoRel = $departamentoRel;

        return $this;
    }

    /**
     * Get departamentoRel
     *
     * @return \AppBundle\Entity\Departamento
     */
    public function getDepartamentoRel()
    {
        return $this->departamentoRel;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->clientesCiudadRel = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add clientesCiudadRel
     *
     * @param \AppBundle\Entity\Cliente $clientesCiudadRel
     *
     * @return Ciudad
     */
    public function addClientesCiudadRel(\AppBundle\Entity\Cliente $clientesCiudadRel)
    {
        $this->clientesCiudadRel[] = $clientesCiudadRel;

        return $this;
    }

    /**
     * Remove clientesCiudadRel
     *
     * @param \AppBundle\Entity\Cliente $clientesCiudadRel
     */
    public function removeClientesCiudadRel(\AppBundle\Entity\Cliente $clientesCiudadRel)
    {
        $this->clientesCiudadRel->removeElement($clientesCiudadRel);
    }

    /**
     * Get clientesCiudadRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClientesCiudadRel()
    {
        return $this->clientesCiudadRel;
    }
}
