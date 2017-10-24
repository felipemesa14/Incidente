<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClienteImplementacion
 *
 * @ORM\Table(name="cliente_implementacion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClienteImplementacionRepository")
 */
class ClienteImplementacion
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigo_cliente_implementacion_pk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoClienteImplementacionPk;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo_cliente_fk", type="integer", nullable=true)
     */
    private $codigoClienteFk;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo_implementacion_concepto_fk", type="integer", nullable=true)
     */
    private $codigoImplementacionConceptoFk;
    
    /**
     * @ORM\ManyToOne(targetEntity="ImplementacionConcepto", inversedBy="clienteImplementacionRel")
     * @ORM\JoinColumn(name="codigo_implementacion_concepto_fk", referencedColumnName="codigo_implementacion_concepto_pk")
     */
    protected $implementacionConceptoRel;

    /**
     * Get codigoClienteImplementacionPk
     *
     * @return integer
     */
    public function getCodigoClienteImplementacionPk()
    {
        return $this->codigoClienteImplementacionPk;
    }

    /**
     * Set codigoClienteFk
     *
     * @param integer $codigoClienteFk
     *
     * @return ClienteImplementacion
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
     * Set codigoImplementacionConceptoFk
     *
     * @param integer $codigoImplementacionConceptoFk
     *
     * @return ClienteImplementacion
     */
    public function setCodigoImplementacionConceptoFk($codigoImplementacionConceptoFk)
    {
        $this->codigoImplementacionConceptoFk = $codigoImplementacionConceptoFk;

        return $this;
    }

    /**
     * Get codigoImplementacionConceptoFk
     *
     * @return integer
     */
    public function getCodigoImplementacionConceptoFk()
    {
        return $this->codigoImplementacionConceptoFk;
    }

    /**
     * Set implementacionConceptoRel
     *
     * @param \AppBundle\Entity\ImplementacionConcepto $implementacionConceptoRel
     *
     * @return ClienteImplementacion
     */
    public function setImplementacionConceptoRel(\AppBundle\Entity\ImplementacionConcepto $implementacionConceptoRel = null)
    {
        $this->implementacionConceptoRel = $implementacionConceptoRel;

        return $this;
    }

    /**
     * Get implementacionConceptoRel
     *
     * @return \AppBundle\Entity\ImplementacionConcepto
     */
    public function getImplementacionConceptoRel()
    {
        return $this->implementacionConceptoRel;
    }
}
