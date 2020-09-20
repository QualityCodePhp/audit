<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmargosFeuilleEmargement
 *
 * @ORM\Table(name="emargos_feuille_emargement", uniqueConstraints={@ORM\UniqueConstraint(name="emargos_feuille_emargement_pk", columns={"emfem_id"})}, indexes={@ORM\Index(name="emargos_sequence_feuille_fk", columns={"emseq_id"}), @ORM\Index(name="emargos_feuille_etab_paye_fk", columns={"ets_id_paye"}), @ORM\Index(name="emargos_feuille_etab_resp_fk", columns={"ets_id_resp"})})
 * @ORM\Entity
 */
class EmargosFeuilleEmargement
{
    /**
     * @var string
     *
     * @ORM\Column(name="emfem_id", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="emargos_feuille_emargement_emfem_id_seq", allocationSize=1, initialValue=1)
     */
    private $emfemId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emfem_id_externe", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $emfemIdExterne;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="emfem_date_deb", type="date", nullable=true)
     */
    private $emfemDateDeb;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="emfem_date_fin", type="date", nullable=true)
     */
    private $emfemDateFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emfem_typesaisie", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $emfemTypesaisie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emfem_duree", type="string", length=5, nullable=true)
     */
    private $emfemDuree;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ets_id_paye", referencedColumnName="ets_id")
     * })
     */
    private $etsIdPaye;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ets_id_resp", referencedColumnName="ets_id")
     * })
     */
    private $etsIdResp;

    /**
     * @var \EmargosSequence
     *
     * @ORM\ManyToOne(targetEntity="EmargosSequence")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="emseq_id", referencedColumnName="emseq_id")
     * })
     */
    private $emseq;

    public function getEmfemId(): ?string
    {
        return $this->emfemId;
    }

    public function getEmfemIdExterne(): ?string
    {
        return $this->emfemIdExterne;
    }

    public function setEmfemIdExterne(?string $emfemIdExterne): self
    {
        $this->emfemIdExterne = $emfemIdExterne;

        return $this;
    }

    public function getEmfemDateDeb(): ?\DateTimeInterface
    {
        return $this->emfemDateDeb;
    }

    public function setEmfemDateDeb(?\DateTimeInterface $emfemDateDeb): self
    {
        $this->emfemDateDeb = $emfemDateDeb;

        return $this;
    }

    public function getEmfemDateFin(): ?\DateTimeInterface
    {
        return $this->emfemDateFin;
    }

    public function setEmfemDateFin(?\DateTimeInterface $emfemDateFin): self
    {
        $this->emfemDateFin = $emfemDateFin;

        return $this;
    }

    public function getEmfemTypesaisie(): ?string
    {
        return $this->emfemTypesaisie;
    }

    public function setEmfemTypesaisie(?string $emfemTypesaisie): self
    {
        $this->emfemTypesaisie = $emfemTypesaisie;

        return $this;
    }

    public function getEmfemDuree(): ?string
    {
        return $this->emfemDuree;
    }

    public function setEmfemDuree(?string $emfemDuree): self
    {
        $this->emfemDuree = $emfemDuree;

        return $this;
    }

    public function getEtsIdPaye(): ?Etablssmt
    {
        return $this->etsIdPaye;
    }

    public function setEtsIdPaye(?Etablssmt $etsIdPaye): self
    {
        $this->etsIdPaye = $etsIdPaye;

        return $this;
    }

    public function getEtsIdResp(): ?Etablssmt
    {
        return $this->etsIdResp;
    }

    public function setEtsIdResp(?Etablssmt $etsIdResp): self
    {
        $this->etsIdResp = $etsIdResp;

        return $this;
    }

    public function getEmseq(): ?EmargosSequence
    {
        return $this->emseq;
    }

    public function setEmseq(?EmargosSequence $emseq): self
    {
        $this->emseq = $emseq;

        return $this;
    }


}
