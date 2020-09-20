<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmargosSequence
 *
 * @ORM\Table(name="emargos_sequence", uniqueConstraints={@ORM\UniqueConstraint(name="emargos_sequence_pk", columns={"emseq_id"})}, indexes={@ORM\Index(name="emargos_sequence_etab_fk", columns={"ets_id"}), @ORM\Index(name="emargos_sequence_session_fk", columns={"sess_id"}), @ORM\Index(name="emseq_r_bordereau_fk", columns={"mpr_id"})})
 * @ORM\Entity
 */
class EmargosSequence
{
    /**
     * @var string
     *
     * @ORM\Column(name="emseq_id", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="emargos_sequence_emseq_id_seq", allocationSize=1, initialValue=1)
     */
    private $emseqId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emseq_id_externe", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $emseqIdExterne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="refpr_code", type="string", length=20, nullable=true)
     */
    private $refprCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emseq_libelle_nature", type="string", length=150, nullable=true)
     */
    private $emseqLibelleNature;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="emseq_dt_heure_deb", type="date", nullable=true)
     */
    private $emseqDtHeureDeb;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="emseq_dt_heure_fin", type="date", nullable=true)
     */
    private $emseqDtHeureFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emseq_duree", type="string", length=5, nullable=true)
     */
    private $emseqDuree;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ets_id", referencedColumnName="ets_id")
     * })
     */
    private $ets;

    /**
     * @var \SessionFormation
     *
     * @ORM\ManyToOne(targetEntity="SessionFormation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sess_id", referencedColumnName="sess_id")
     * })
     */
    private $sess;

    /**
     * @var \RBordereau
     *
     * @ORM\ManyToOne(targetEntity="RBordereau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mpr_id", referencedColumnName="mpr_id")
     * })
     */
    private $mpr;

    public function getEmseqId(): ?string
    {
        return $this->emseqId;
    }

    public function getEmseqIdExterne(): ?string
    {
        return $this->emseqIdExterne;
    }

    public function setEmseqIdExterne(?string $emseqIdExterne): self
    {
        $this->emseqIdExterne = $emseqIdExterne;

        return $this;
    }

    public function getRefprCode(): ?string
    {
        return $this->refprCode;
    }

    public function setRefprCode(?string $refprCode): self
    {
        $this->refprCode = $refprCode;

        return $this;
    }

    public function getEmseqLibelleNature(): ?string
    {
        return $this->emseqLibelleNature;
    }

    public function setEmseqLibelleNature(?string $emseqLibelleNature): self
    {
        $this->emseqLibelleNature = $emseqLibelleNature;

        return $this;
    }

    public function getEmseqDtHeureDeb(): ?\DateTimeInterface
    {
        return $this->emseqDtHeureDeb;
    }

    public function setEmseqDtHeureDeb(?\DateTimeInterface $emseqDtHeureDeb): self
    {
        $this->emseqDtHeureDeb = $emseqDtHeureDeb;

        return $this;
    }

    public function getEmseqDtHeureFin(): ?\DateTimeInterface
    {
        return $this->emseqDtHeureFin;
    }

    public function setEmseqDtHeureFin(?\DateTimeInterface $emseqDtHeureFin): self
    {
        $this->emseqDtHeureFin = $emseqDtHeureFin;

        return $this;
    }

    public function getEmseqDuree(): ?string
    {
        return $this->emseqDuree;
    }

    public function setEmseqDuree(?string $emseqDuree): self
    {
        $this->emseqDuree = $emseqDuree;

        return $this;
    }

    public function getEts(): ?Etablssmt
    {
        return $this->ets;
    }

    public function setEts(?Etablssmt $ets): self
    {
        $this->ets = $ets;

        return $this;
    }

    public function getSess(): ?SessionFormation
    {
        return $this->sess;
    }

    public function setSess(?SessionFormation $sess): self
    {
        $this->sess = $sess;

        return $this;
    }

    public function getMpr(): ?RBordereau
    {
        return $this->mpr;
    }

    public function setMpr(?RBordereau $mpr): self
    {
        $this->mpr = $mpr;

        return $this;
    }


}
