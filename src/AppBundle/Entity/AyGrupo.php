<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AyGrupo
 *
 * @ORM\Table(name="ay_grupo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AyGrupoRepository")
 */
class AyGrupo
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
     * @var int
     *
     * @ORM\Column(name="codigo_modulo_fk", type="integer", nullable=true)
     */
    private $codigoModuloFk;

    /**
     * @var int
     *
     * @ORM\Column(name="condigo_funcion_fk", type="integer", nullable=true)
     */
    private $condigoFuncionFk;

    /**
     * @var string
     *
     * @ORM\Column(name="orden", type="integer", nullable=true)
     */
    private $orden;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;
    
    /**
     * @ORM\ManyToOne(targetEntity="AyModulo", inversedBy="gruposModuloRel")
     * @ORM\JoinColumn(name="codigo_modulo_fk", referencedColumnName="codigo_modulo_pk")
     */
    protected $moduloRel;
    
    /**
     * @ORM\ManyToOne(targetEntity="AyFuncion", inversedBy="gruposFuncionRel")
     * @ORM\JoinColumn(name="codigo_funcion_fk", referencedColumnName="codigo_funcion_pk")
     */
    protected $funcionRel;
    
    /**
     * @ORM\OneToMany(targetEntity="AyTema", mappedBy="$moduloRel")
     */
    protected $temasModuloRel;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->temasModuloRel = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set codigoModuloFk
     *
     * @param integer $codigoModuloFk
     *
     * @return AyGrupo
     */
    public function setCodigoModuloFk($codigoModuloFk)
    {
        $this->codigoModuloFk = $codigoModuloFk;

        return $this;
    }

    /**
     * Get codigoModuloFk
     *
     * @return integer
     */
    public function getCodigoModuloFk()
    {
        return $this->codigoModuloFk;
    }

    /**
     * Set condigoFuncionFk
     *
     * @param integer $condigoFuncionFk
     *
     * @return AyGrupo
     */
    public function setCondigoFuncionFk($condigoFuncionFk)
    {
        $this->condigoFuncionFk = $condigoFuncionFk;

        return $this;
    }

    /**
     * Get condigoFuncionFk
     *
     * @return integer
     */
    public function getCondigoFuncionFk()
    {
        return $this->condigoFuncionFk;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     *
     * @return AyGrupo
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return AyGrupo
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
     * Set moduloRel
     *
     * @param \AppBundle\Entity\AyModulo $moduloRel
     *
     * @return AyGrupo
     */
    public function setModuloRel(\AppBundle\Entity\AyModulo $moduloRel = null)
    {
        $this->moduloRel = $moduloRel;

        return $this;
    }

    /**
     * Get moduloRel
     *
     * @return \AppBundle\Entity\AyModulo
     */
    public function getModuloRel()
    {
        return $this->moduloRel;
    }

    /**
     * Set funcionRel
     *
     * @param \AppBundle\Entity\AyFuncion $funcionRel
     *
     * @return AyGrupo
     */
    public function setFuncionRel(\AppBundle\Entity\AyFuncion $funcionRel = null)
    {
        $this->funcionRel = $funcionRel;

        return $this;
    }

    /**
     * Get funcionRel
     *
     * @return \AppBundle\Entity\AyFuncion
     */
    public function getFuncionRel()
    {
        return $this->funcionRel;
    }

    /**
     * Add temasModuloRel
     *
     * @param \AppBundle\Entity\AyTema $temasModuloRel
     *
     * @return AyGrupo
     */
    public function addTemasModuloRel(\AppBundle\Entity\AyTema $temasModuloRel)
    {
        $this->temasModuloRel[] = $temasModuloRel;

        return $this;
    }

    /**
     * Remove temasModuloRel
     *
     * @param \AppBundle\Entity\AyTema $temasModuloRel
     */
    public function removeTemasModuloRel(\AppBundle\Entity\AyTema $temasModuloRel)
    {
        $this->temasModuloRel->removeElement($temasModuloRel);
    }

    /**
     * Get temasModuloRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTemasModuloRel()
    {
        return $this->temasModuloRel;
    }
}
