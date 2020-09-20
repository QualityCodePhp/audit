<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParDispo
 *
 * @ORM\Table(name="par_dispo", uniqueConstraints={@ORM\UniqueConstraint(name="par_dispo_pk", columns={"pdi_id"})}, indexes={@ORM\Index(name="association_698_fk", columns={"dsp_id"}), @ORM\Index(name="association_697_fk", columns={"par_id"})})
 * @ORM\Entity
 */
class ParDispo
{
    /**
     * @var int
     *
     * @ORM\Column(name="pdi_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="par_dispo_pdi_id_seq", allocationSize=1, initialValue=1)
     */
    private $pdiId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pdi_valeur", type="string", length=200, nullable=true)
     */
    private $pdiValeur;

    /**
     * @var \Parametrage
     *
     * @ORM\ManyToOne(targetEntity="Parametrage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="par_id", referencedColumnName="par_id")
     * })
     */
    private $par;

    /**
     * @var \Dispositif
     *
     * @ORM\ManyToOne(targetEntity="Dispositif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dsp_id", referencedColumnName="dsp_id")
     * })
     */
    private $dsp;

    public function getPdiId(): ?int
    {
        return $this->pdiId;
    }

    public function getPdiValeur(): ?string
    {
        return $this->pdiValeur;
    }

    public function setPdiValeur(?string $pdiValeur): self
    {
        $this->pdiValeur = $pdiValeur;

        return $this;
    }

    public function getPar(): ?Parametrage
    {
        return $this->par;
    }

    public function setPar(?Parametrage $par): self
    {
        $this->par = $par;

        return $this;
    }

    public function getDsp(): ?Dispositif
    {
        return $this->dsp;
    }

    public function setDsp(?Dispositif $dsp): self
    {
        $this->dsp = $dsp;

        return $this;
    }


}
