<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClienteRepository")
 */
class Cliente
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_cliente_pk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoClientePk;
    
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_ciudad_fk", type="integer")
     */
    private $codigoCiudadFk;   

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=100, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=10, nullable=true)
     */
    private $telefono; 
    
    /**
     * @ORM\OneToMany(targetEntity="Incidencia", mappedBy="clienteRel")
     */
    
    protected $incidenciasClienteRel; 
    
    /**
     * @ORM\ManyToOne(targetEntity="Ciudad", inversedBy="clientesCiudadRel")
     * @ORM\JoinColumn(name="codigo_ciudad_fk", referencedColumnName="codigo_ciudad_pk")
     */
    protected $ciudadRel;
    
    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="clienteRel")
     */
    protected $usuariosClienteRel; 
    /**
     * @ORM\OneToMany(targetEntity="Llamada", mappedBy="clienteRel")
     */
    protected $llamadaClienteRel; 

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->incidenciasClienteRel = new \Doctrine\Common\Collections\ArrayCollection();
        $this->usuariosClienteRel = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get codigoClientePk
     *
     * @return integer
     */
    public function getCodigoClientePk()
    {
        return $this->codigoClientePk;
    }

    /**
     * Set codigoCiudadFk
     *
     * @param integer $codigoCiudadFk
     *
     * @return Cliente
     */
    public function setCodigoCiudadFk($codigoCiudadFk)
    {
        $this->codigoCiudadFk = $codigoCiudadFk;

        return $this;
    }

    /**
     * Get codigoCiudadFk
     *
     * @return integer
     */
    public function getCodigoCiudadFk()
    {
        return $this->codigoCiudadFk;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Cliente
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
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Cliente
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Cliente
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Add incidenciasClienteRel
     *
     * @param \AppBundle\Entity\Incidencia $incidenciasClienteRel
     *
     * @return Cliente
     */
    public function addIncidenciasClienteRel(\AppBundle\Entity\Incidencia $incidenciasClienteRel)
    {
        $this->incidenciasClienteRel[] = $incidenciasClienteRel;

        return $this;
    }

    /**
     * Remove incidenciasClienteRel
     *
     * @param \AppBundle\Entity\Incidencia $incidenciasClienteRel
     */
    public function removeIncidenciasClienteRel(\AppBundle\Entity\Incidencia $incidenciasClienteRel)
    {
        $this->incidenciasClienteRel->removeElement($incidenciasClienteRel);
    }

    /**
     * Get incidenciasClienteRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIncidenciasClienteRel()
    {
        return $this->incidenciasClienteRel;
    }

    /**
     * Set ciudadRel
     *
     * @param \AppBundle\Entity\Ciudad $ciudadRel
     *
     * @return Cliente
     */
    public function setCiudadRel(\AppBundle\Entity\Ciudad $ciudadRel = null)
    {
        $this->ciudadRel = $ciudadRel;

        return $this;
    }

    /**
     * Get ciudadRel
     *
     * @return \AppBundle\Entity\Ciudad
     */
    public function getCiudadRel()
    {
        return $this->ciudadRel;
    }

    /**
     * Add usuariosClienteRel
     *
     * @param \AppBundle\Entity\User $usuariosClienteRel
     *
     * @return Cliente
     */
    public function addUsuariosClienteRel(\AppBundle\Entity\User $usuariosClienteRel)
    {
        $this->usuariosClienteRel[] = $usuariosClienteRel;

        return $this;
    }

    /**
     * Remove usuariosClienteRel
     *
     * @param \AppBundle\Entity\User $usuariosClienteRel
     */
    public function removeUsuariosClienteRel(\AppBundle\Entity\User $usuariosClienteRel)
    {
        $this->usuariosClienteRel->removeElement($usuariosClienteRel);
    }

    /**
     * Get usuariosClienteRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuariosClienteRel()
    {
        return $this->usuariosClienteRel;
    }

    /**
     * Add llamadaClienteRel
     *
     * @param \AppBundle\Entity\Llamada $llamadaClienteRel
     *
     * @return Cliente
     */
    public function addLlamadaClienteRel(\AppBundle\Entity\Llamada $llamadaClienteRel)
    {
        $this->llamadaClienteRel[] = $llamadaClienteRel;

        return $this;
    }

    /**
     * Remove llamadaClienteRel
     *
     * @param \AppBundle\Entity\Llamada $llamadaClienteRel
     */
    public function removeLlamadaClienteRel(\AppBundle\Entity\Llamada $llamadaClienteRel)
    {
        $this->llamadaClienteRel->removeElement($llamadaClienteRel);
    }

    /**
     * Get llamadaClienteRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLlamadaClienteRel()
    {
        return $this->llamadaClienteRel;
    }
}
