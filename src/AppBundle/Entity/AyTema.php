<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * AyTema
 *
 * @ORM\Table(name="ay_tema")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AyTemaRepository")
 */
class AyTema {

    /**
     * @var int
     *
     * @ORM\Column(name="codigo_tema_pk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoTemaPk;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo_modulo_fk", type="integer", nullable=true)
     */
    private $codigoModuloFk;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo_funcion_fk", type="integer", nullable=true)
     */
    private $codigoFuncionFk;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo_grupo_fk", type="integer", nullable=true)
     */
    private $codigoGrupoFk;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     * @Assert\NotBlank(message="Este campo no puede estar vacio")
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="orden", type="integer", nullable=true)
     */
    private $orden;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=500, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="contenido", type="string", length=100000, nullable=true)
     */
    private $contenido;

    /**
     * @ORM\ManyToOne(targetEntity="AyModulo", inversedBy="temasModuloRel")
     * @ORM\JoinColumn(name="codigo_modulo_fk", referencedColumnName="codigo_modulo_pk")
     * @Assert\NotNull(message="Seleccione un elemento")
     */
    protected $moduloRel;

    /**
     * @ORM\ManyToOne(targetEntity="AyFuncion", inversedBy="temasFuncionRel")
     * @ORM\JoinColumn(name="codigo_funcion_fk", referencedColumnName="codigo_funcion_pk")
     * @Assert\NotNull(message="Seleccione un elemento")
     */
    protected $funcionRel;

    /**
     * @ORM\ManyToOne(targetEntity="AyGrupo", inversedBy="temasGrupoRel")
     * @ORM\JoinColumn(name="codigo_grupo_fk", referencedColumnName="codigo_grupo_pk")
     * @Assert\NotNull(message="Seleccione un elemento")
     */
    protected $grupoRel;

    /**
     * @ORM\OneToMany(targetEntity="Incidencia", mappedBy="temaRel")
     */
    protected $incidenciasTemaRel;

    /**
     * Get codigoTemaPk
     *
     * @return integer
     */
    public function getCodigoTemaPk() {
        return $this->codigoTemaPk;
    }

    /**
     * Set codigoModuloFk
     *
     * @param integer $codigoModuloFk
     *
     * @return AyTema
     */
    public function setCodigoModuloFk($codigoModuloFk) {
        $this->codigoModuloFk = $codigoModuloFk;

        return $this;
    }

    /**
     * Get codigoModuloFk
     *
     * @return integer
     */
    public function getCodigoModuloFk() {
        return $this->codigoModuloFk;
    }

    /**
     * Set codigoFuncionFk
     *
     * @param integer $codigoFuncionFk
     *
     * @return AyTema
     */
    public function setCodigoFuncionFk($codigoFuncionFk) {
        $this->codigoFuncionFk = $codigoFuncionFk;

        return $this;
    }

    /**
     * Get codigoFuncionFk
     *
     * @return integer
     */
    public function getCodigoFuncionFk() {
        return $this->codigoFuncionFk;
    }

    /**
     * Set codigoGrupoFk
     *
     * @param integer $codigoGrupoFk
     *
     * @return AyTema
     */
    public function setCodigoGrupoFk($codigoGrupoFk) {
        $this->codigoGrupoFk = $codigoGrupoFk;

        return $this;
    }

    /**
     * Get codigoGrupoFk
     *
     * @return integer
     */
    public function getCodigoGrupoFk() {
        return $this->codigoGrupoFk;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return AyTema
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     *
     * @return AyTema
     */
    public function setOrden($orden) {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer
     */
    public function getOrden() {
        return $this->orden;
    }

    /**
     * Set moduloRel
     *
     * @param \AppBundle\Entity\AyModulo $moduloRel
     *
     * @return AyTema
     */
    public function setModuloRel(\AppBundle\Entity\AyModulo $moduloRel = null) {
        $this->moduloRel = $moduloRel;

        return $this;
    }

    /**
     * Get moduloRel
     *
     * @return \AppBundle\Entity\AyModulo
     */
    public function getModuloRel() {
        return $this->moduloRel;
    }

    /**
     * Set funcionRel
     *
     * @param \AppBundle\Entity\AyFuncion $funcionRel
     *
     * @return AyTema
     */
    public function setFuncionRel(\AppBundle\Entity\AyFuncion $funcionRel = null) {
        $this->funcionRel = $funcionRel;

        return $this;
    }

    /**
     * Get funcionRel
     *
     * @return \AppBundle\Entity\AyFuncion
     */
    public function getFuncionRel() {
        return $this->funcionRel;
    }

    /**
     * Set grupoRel
     *
     * @param \AppBundle\Entity\AyGrupo $grupoRel
     *
     * @return AyTema
     */
    public function setGrupoRel(\AppBundle\Entity\AyGrupo $grupoRel = null) {
        $this->grupoRel = $grupoRel;

        return $this;
    }

    /**
     * Get grupoRel
     *
     * @return \AppBundle\Entity\AyGrupo
     */
    public function getGrupoRel() {
        return $this->grupoRel;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return AyTema
     */
    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion() {
        return $this->descripcion;
    }

    /**
     * Set contenido
     *
     * @param string $contenido
     *
     * @return AyTema
     */
    public function setContenido($contenido) {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return string
     */
    public function getContenido() {
        return $this->contenido;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->incidenciasTemaRel = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add incidenciasTemaRel
     *
     * @param \AppBundle\Entity\Incidencia $incidenciasTemaRel
     *
     * @return AyTema
     */
    public function addIncidenciasTemaRel(\AppBundle\Entity\Incidencia $incidenciasTemaRel)
    {
        $this->incidenciasTemaRel[] = $incidenciasTemaRel;

        return $this;
    }

    /**
     * Remove incidenciasTemaRel
     *
     * @param \AppBundle\Entity\Incidencia $incidenciasTemaRel
     */
    public function removeIncidenciasTemaRel(\AppBundle\Entity\Incidencia $incidenciasTemaRel)
    {
        $this->incidenciasTemaRel->removeElement($incidenciasTemaRel);
    }

    /**
     * Get incidenciasTemaRel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIncidenciasTemaRel()
    {
        return $this->incidenciasTemaRel;
    }
}
