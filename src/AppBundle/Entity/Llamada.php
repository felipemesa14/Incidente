<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Llamada
 *
 * @ORM\Table(name="llamada")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LlamadaRepository")
 */
class Llamada
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_llamada_pk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoLlamadaPk;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo_cliente_fk", type="integer")
     */
    private $codigoClienteFk;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo_usuario_fk", type="integer")
     */
    private $codigoUsuarioFk;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto", type="string", length=255, nullable=true)
     */
    private $contacto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora", type="time")
     */
    private $hora;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="llamadaUsuarioAsignadoRel")
     * @ORM\JoinColumn(name="codigo_usuario_fk", referencedColumnName="codigo_usuario_pk")
     */
    protected $usuarioAsignadoRel;
    
    /**
     * @ORM\ManyToOne(targetEntity="Cliente", inversedBy="llamadaClienteRel")
     * @ORM\JoinColumn(name="codigo_cliente_fk", referencedColumnName="codigo_cliente_pk")
     */
    protected $clienteRel;

    /**
     * Get codigoLlamadaPk
     *
     * @return integer
     */
    public function getCodigoLlamadaPk()
    {
        return $this->codigoLlamadaPk;
    }

    /**
     * Set codigoClienteFk
     *
     * @param integer $codigoClienteFk
     *
     * @return Llamada
     */
    public function setCodigoClienteFk($codigoClienteFk)
    {
        $this->codigoClienteFk = $codigoClienteFk;

        return $this;
    }

    /**
     * Get codigoClienteFk
     *
     * @return integer
     */
    public function getCodigoClienteFk()
    {
        return $this->codigoClienteFk;
    }

    /**
     * Set codigoUsuarioFk
     *
     * @param integer $codigoUsuarioFk
     *
     * @return Llamada
     */
    public function setCodigoUsuarioFk($codigoUsuarioFk)
    {
        $this->codigoUsuarioFk = $codigoUsuarioFk;

        return $this;
    }

    /**
     * Get codigoUsuarioFk
     *
     * @return integer
     */
    public function getCodigoUsuarioFk()
    {
        return $this->codigoUsuarioFk;
    }

    /**
     * Set contacto
     *
     * @param string $contacto
     *
     * @return Llamada
     */
    public function setContacto($contacto)
    {
        $this->contacto = $contacto;

        return $this;
    }

    /**
     * Get contacto
     *
     * @return string
     */
    public function getContacto()
    {
        return $this->contacto;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Llamada
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set hora
     *
     * @param \DateTime $hora
     *
     * @return Llamada
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return \DateTime
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Llamada
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set usuarioAsignadoRel
     *
     * @param \AppBundle\Entity\User $usuarioAsignadoRel
     *
     * @return Llamada
     */
    public function setUsuarioAsignadoRel(\AppBundle\Entity\User $usuarioAsignadoRel = null)
    {
        $this->usuarioAsignadoRel = $usuarioAsignadoRel;

        return $this;
    }

    /**
     * Get usuarioAsignadoRel
     *
     * @return \AppBundle\Entity\User
     */
    public function getUsuarioAsignadoRel()
    {
        return $this->usuarioAsignadoRel;
    }

    /**
     * Set clienteRel
     *
     * @param \AppBundle\Entity\Cliente $clienteRel
     *
     * @return Llamada
     */
    public function setClienteRel(\AppBundle\Entity\Cliente $clienteRel = null)
    {
        $this->clienteRel = $clienteRel;

        return $this;
    }

    /**
     * Get clienteRel
     *
     * @return \AppBundle\Entity\Cliente
     */
    public function getClienteRel()
    {
        return $this->clienteRel;
    }
}
