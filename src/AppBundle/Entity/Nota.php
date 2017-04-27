<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nota
 *
 * @ORM\Table(name="nota")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NotaRepository")
 */
class Nota
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_nota_pk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoNotaPk;
    
     /**
     * @var int
     *
     * @ORM\Column(name="codigo_usuario_fk", type="integer")
     */
    private $codigoUsuarioFk;
    
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=500)
     */
    private $descripcion;
    
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50)
     */
    private $username;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="notasUsuarioAsignadoRel")
     * @ORM\JoinColumn(name="codigo_usuario_fk", referencedColumnName="codigo_usuario_pk")
     */
    protected $usuarioAsignadoRel;


    /**
     * Get codigoNotaPk
     *
     * @return integer
     */
    public function getCodigoNotaPk()
    {
        return $this->codigoNotaPk;
    }

    /**
     * Set codigoUsuarioFk
     *
     * @param integer $codigoUsuarioFk
     *
     * @return Nota
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Nota
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
     * Set username
     *
     * @param string $username
     *
     * @return Nota
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set usuarioAsignadoRel
     *
     * @param \AppBundle\Entity\User $usuarioAsignadoRel
     *
     * @return Nota
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
}
