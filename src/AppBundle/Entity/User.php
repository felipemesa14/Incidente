<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User implements UserInterface {

    /**
     * @var int
     *
     * @ORM\Column(name="codigo_usuario_pk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoUsuarioPk;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo_rol_fk", type="integer")
     */
    private $codigoRolFk;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo_cliente_fk", type="integer")
     */
    private $codigoClienteFk;    

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50 , unique=true)
     */
    private $username;
    
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=4096)
     */
    private $plainPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=64)
     */
    private $password;

    /**
     * @ORM\ManyToOne(targetEntity="Rol", inversedBy="usuariosRolRel")
     * @ORM\JoinColumn(name="codigo_rol_fk", referencedColumnName="codigo_rol_pk")
     */
    protected $rolRel;

    /**
     * @ORM\ManyToOne(targetEntity="Cliente", inversedBy="usuariosClienteRel")
     * @ORM\JoinColumn(name="codigo_cliente_fk", referencedColumnName="codigo_cliente_pk")
     */
    protected $clienteRel;
    
    /**
     * @ORM\OneToMany(targetEntity="Tarea", mappedBy="usuarioAsignadoRel")
     */
    protected $tareasUsuarioAsignadoRel;
    
    /**
     * @ORM\OneToMany(targetEntity="Prueba", mappedBy="usuarioAsignadoRel")
     */
    protected $pruebasUsuarioAsignadoRel;
    
    /**
     * @ORM\OneToMany(targetEntity="Nota", mappedBy="usuarioAsignadoRel")
     */
    protected $notasUsuarioAsignadoRel;
    
    /**
     * @ORM\OneToMany(targetEntity="Llamada", mappedBy="usuarioAsignadoRel")
     */
    protected $llamadaUsuarioAsignadoRel;
    

    /**
     * Get codigoUsuarioPk
     *
     * @return integer
     */
    public function getCodigoUsuarioPk()
    {
        return $this->codigoUsuarioPk;
    }

    /**
     * Set codigoRolFk
     *
     * @param integer $codigoRolFk
     *
     * @return User
     */
    public function setCodigoRolFk($codigoRolFk)
    {
        $this->codigoRolFk = $codigoRolFk;

        return $this;
    }

    /**
     * Get codigoRolFk
     *
     * @return integer
     */
    public function getCodigoRolFk()
    {
        return $this->codigoRolFk;
    }

    /**
     * Set codigoClienteFk
     *
     * @param integer $codigoClienteFk
     *
     * @return User
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
     * Set username
     *
     * @param string $username
     *
     * @return User
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
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set rolRel
     *
     * @param \AppBundle\Entity\Rol $rolRel
     *
     * @return User
     */
    public function setRolRel(\AppBundle\Entity\Rol $rolRel = null)
    {
        $this->rolRel = $rolRel;

        return $this;
    }

    /**
     * Get rolRel
     *
     * @return \AppBundle\Entity\Rol
     */
    public function getRolRel()
    {
        return $this->rolRel;
    }

    /**
     * Set clienteRel
     *
     * @param \AppBundle\Entity\Cliente $clienteRel
     *
     * @return User
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
    
    public function eraseCredentials() {
        
    }

    /** @see \Serializable::serialize() */
    public function serialize() {
        return serialize(array(
            $this->codigoUsuarioPk,
            $this->username,
            $this->password,
                // see section on salt below
                // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized) {
        list (
                $this->codigoUsuarioPk,
                $this->username,
                $this->password,
                // see section on salt below
                // $this->salt
                ) = unserialize($serialized);
    }

    public function getSalt() {
        // The bcrypt algorithm doesn't require a separate salt.
        // You *may* need a real salt if you choose a different encoder.
        return null;
    }

    /**
     * Set roles
     *
     * @param string $roles
     *
     * @return User
     */
    public function setRoles($roles) {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return string
     */
    public function getRoles() {
        return array($this->getRolRel()->getNombre());
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tareasUsuarioAsignadoRel = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tareasUsuarioAsignadoRel
     *
     * @param \AppBundle\Entity\Tarea $tareasUsuarioAsignadoRel
     *
     * @return User
     */
    public function addTareasUsuarioAsignadoRel(\AppBundle\Entity\Tarea $tareasUsuarioAsignadoRel)
    {
        $this->tareasUsuarioAsignadoRel[] = $tareasUsuarioAsignadoRel;

        return $this;
    }

    /**
     * Remove tareasUsuarioAsignadoRel
     *
     * @param \AppBundle\Entity\Tarea $tareasUsuarioAsignadoRel
     */
    public function removeTareasUsuarioAsignadoRel(\AppBundle\Entity\Tarea $tareasUsuarioAsignadoRel)
    {
        $this->tareasUsuarioAsignadoRel->removeElement($tareasUsuarioAsignadoRel);
    }

    /**
     * Get tareasUsuarioAsignadoRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTareasUsuarioAsignadoRel()
    {
        return $this->tareasUsuarioAsignadoRel;
    }

    /**
     * Add notasUsuarioAsignadoRel
     *
     * @param \AppBundle\Entity\Tarea $notasUsuarioAsignadoRel
     *
     * @return User
     */
    public function addNotasUsuarioAsignadoRel(\AppBundle\Entity\Tarea $notasUsuarioAsignadoRel)
    {
        $this->notasUsuarioAsignadoRel[] = $notasUsuarioAsignadoRel;

        return $this;
    }

    /**
     * Remove notasUsuarioAsignadoRel
     *
     * @param \AppBundle\Entity\Tarea $notasUsuarioAsignadoRel
     */
    public function removeNotasUsuarioAsignadoRel(\AppBundle\Entity\Tarea $notasUsuarioAsignadoRel)
    {
        $this->notasUsuarioAsignadoRel->removeElement($notasUsuarioAsignadoRel);
    }

    /**
     * Get notasUsuarioAsignadoRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNotasUsuarioAsignadoRel()
    {
        return $this->notasUsuarioAsignadoRel;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Add pruebasUsuarioAsignadoRel
     *
     * @param \AppBundle\Entity\Prueba $pruebasUsuarioAsignadoRel
     *
     * @return User
     */
    public function addPruebasUsuarioAsignadoRel(\AppBundle\Entity\Prueba $pruebasUsuarioAsignadoRel)
    {
        $this->pruebasUsuarioAsignadoRel[] = $pruebasUsuarioAsignadoRel;

        return $this;
    }

    /**
     * Remove pruebasUsuarioAsignadoRel
     *
     * @param \AppBundle\Entity\Prueba $pruebasUsuarioAsignadoRel
     */
    public function removePruebasUsuarioAsignadoRel(\AppBundle\Entity\Prueba $pruebasUsuarioAsignadoRel)
    {
        $this->pruebasUsuarioAsignadoRel->removeElement($pruebasUsuarioAsignadoRel);
    }

    /**
     * Get pruebasUsuarioAsignadoRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPruebasUsuarioAsignadoRel()
    {
        return $this->pruebasUsuarioAsignadoRel;
    }

    /**
     * Add llamadaUsuarioAsignadoRel
     *
     * @param \AppBundle\Entity\Llamada $llamadaUsuarioAsignadoRel
     *
     * @return User
     */
    public function addLlamadaUsuarioAsignadoRel(\AppBundle\Entity\Llamada $llamadaUsuarioAsignadoRel)
    {
        $this->llamadaUsuarioAsignadoRel[] = $llamadaUsuarioAsignadoRel;

        return $this;
    }

    /**
     * Remove llamadaUsuarioAsignadoRel
     *
     * @param \AppBundle\Entity\Llamada $llamadaUsuarioAsignadoRel
     */
    public function removeLlamadaUsuarioAsignadoRel(\AppBundle\Entity\Llamada $llamadaUsuarioAsignadoRel)
    {
        $this->llamadaUsuarioAsignadoRel->removeElement($llamadaUsuarioAsignadoRel);
    }

    /**
     * Get llamadaUsuarioAsignadoRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLlamadaUsuarioAsignadoRel()
    {
        return $this->llamadaUsuarioAsignadoRel;
    }
}
