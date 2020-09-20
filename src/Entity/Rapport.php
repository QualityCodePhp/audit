<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rapport
 *
 * @ORM\Table(name="rapport", uniqueConstraints={@ORM\UniqueConstraint(name="rapport_pk", columns={"rpt_id"})}, indexes={@ORM\Index(name="rapport_eeif", columns={"rpt_ets"}), @ORM\Index(name="rapport_srsif", columns={"rpt_suite"}), @ORM\Index(name="rapport_ooif", columns={"rpt_offre"}), @ORM\Index(name="rapport_trtif", columns={"rpt_type"})})
 * @ORM\Entity
 */
class Rapport
{
    /**
     * @var string
     *
     * @ORM\Column(name="rpt_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rapport_rpt_id_seq", allocationSize=1, initialValue=1)
     */
    private $rptId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rpt_libelle", type="string", length=100, nullable=true)
     */
    private $rptLibelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rpt_date", type="datetime", nullable=false)
     */
    private $rptDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rpt_lien", type="string", length=100, nullable=true)
     */
    private $rptLien;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rpt_comment", type="string", length=3000, nullable=true)
     */
    private $rptComment;

    /**
     * @var string
     *
     * @ORM\Column(name="rpt_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $rptAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rpt_datec", type="datetime", nullable=false)
     */
    private $rptDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rpt_flg_visible_of", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $rptFlgVisibleOf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rpt_etat", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $rptEtat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rpt_flg_tt_marche_confondu", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $rptFlgTtMarcheConfondu;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rpt_ets", referencedColumnName="ets_id")
     * })
     */
    private $rptEts;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rpt_offre", referencedColumnName="off_id")
     * })
     */
    private $rptOffre;

    /**
     * @var \SRapport
     *
     * @ORM\ManyToOne(targetEntity="SRapport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rpt_suite", referencedColumnName="srp_id")
     * })
     */
    private $rptSuite;

    /**
     * @var \TRapport
     *
     * @ORM\ManyToOne(targetEntity="TRapport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rpt_type", referencedColumnName="trp_id")
     * })
     */
    private $rptType;

    public function getRptId(): ?string
    {
        return $this->rptId;
    }

    public function getRptLibelle(): ?string
    {
        return $this->rptLibelle;
    }

    public function setRptLibelle(?string $rptLibelle): self
    {
        $this->rptLibelle = $rptLibelle;

        return $this;
    }

    public function getRptDate(): ?\DateTimeInterface
    {
        return $this->rptDate;
    }

    public function setRptDate(\DateTimeInterface $rptDate): self
    {
        $this->rptDate = $rptDate;

        return $this;
    }

    public function getRptLien(): ?string
    {
        return $this->rptLien;
    }

    public function setRptLien(?string $rptLien): self
    {
        $this->rptLien = $rptLien;

        return $this;
    }

    public function getRptComment(): ?string
    {
        return $this->rptComment;
    }

    public function setRptComment(?string $rptComment): self
    {
        $this->rptComment = $rptComment;

        return $this;
    }

    public function getRptAuteurc(): ?string
    {
        return $this->rptAuteurc;
    }

    public function setRptAuteurc(string $rptAuteurc): self
    {
        $this->rptAuteurc = $rptAuteurc;

        return $this;
    }

    public function getRptDatec(): ?\DateTimeInterface
    {
        return $this->rptDatec;
    }

    public function setRptDatec(\DateTimeInterface $rptDatec): self
    {
        $this->rptDatec = $rptDatec;

        return $this;
    }

    public function getRptFlgVisibleOf(): ?string
    {
        return $this->rptFlgVisibleOf;
    }

    public function setRptFlgVisibleOf(?string $rptFlgVisibleOf): self
    {
        $this->rptFlgVisibleOf = $rptFlgVisibleOf;

        return $this;
    }

    public function getRptEtat(): ?string
    {
        return $this->rptEtat;
    }

    public function setRptEtat(?string $rptEtat): self
    {
        $this->rptEtat = $rptEtat;

        return $this;
    }

    public function getRptFlgTtMarcheConfondu(): ?string
    {
        return $this->rptFlgTtMarcheConfondu;
    }

    public function setRptFlgTtMarcheConfondu(?string $rptFlgTtMarcheConfondu): self
    {
        $this->rptFlgTtMarcheConfondu = $rptFlgTtMarcheConfondu;

        return $this;
    }

    public function getRptEts(): ?Etablssmt
    {
        return $this->rptEts;
    }

    public function setRptEts(?Etablssmt $rptEts): self
    {
        $this->rptEts = $rptEts;

        return $this;
    }

    public function getRptOffre(): ?Offre
    {
        return $this->rptOffre;
    }

    public function setRptOffre(?Offre $rptOffre): self
    {
        $this->rptOffre = $rptOffre;

        return $this;
    }

    public function getRptSuite(): ?SRapport
    {
        return $this->rptSuite;
    }

    public function setRptSuite(?SRapport $rptSuite): self
    {
        $this->rptSuite = $rptSuite;

        return $this;
    }

    public function getRptType(): ?TRapport
    {
        return $this->rptType;
    }

    public function setRptType(?TRapport $rptType): self
    {
        $this->rptType = $rptType;

        return $this;
    }


}
