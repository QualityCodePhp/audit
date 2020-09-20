<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FseMes
 *
 * @ORM\Table(name="fse_mes", uniqueConstraints={@ORM\UniqueConstraint(name="fse_mes_pk", columns={"fsm_id"})}, indexes={@ORM\Index(name="fse_mes_ffofif", columns={"fsm_objectif"}), @ORM\Index(name="fse_mes_fafif", columns={"fsm_axe"})})
 * @ORM\Entity
 */
class FseMes
{
    /**
     * @var int
     *
     * @ORM\Column(name="fsm_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fse_mes_fsm_id_seq", allocationSize=1, initialValue=1)
     */
    private $fsmId;

    /**
     * @var string
     *
     * @ORM\Column(name="fsm_code", type="string", length=2, nullable=false)
     */
    private $fsmCode;

    /**
     * @var string
     *
     * @ORM\Column(name="fsm_libelle", type="string", length=60, nullable=false)
     */
    private $fsmLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="fsm_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $fsmEtat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fsm_pourc", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $fsmPourc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fsm_eligstag", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $fsmEligstag;

    /**
     * @var string
     *
     * @ORM\Column(name="fsm_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $fsmAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fsm_datec", type="datetime", nullable=false)
     */
    private $fsmDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fsm_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $fsmAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fsm_datem", type="datetime", nullable=true)
     */
    private $fsmDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fsm_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $fsmAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fsm_datea", type="datetime", nullable=true)
     */
    private $fsmDatea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fsm_refarianne", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $fsmRefarianne;

    /**
     * @var \FseAxe
     *
     * @ORM\ManyToOne(targetEntity="FseAxe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fsm_axe", referencedColumnName="fsa_id")
     * })
     */
    private $fsmAxe;

    /**
     * @var \FseObj
     *
     * @ORM\ManyToOne(targetEntity="FseObj")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fsm_objectif", referencedColumnName="fso_id")
     * })
     */
    private $fsmObjectif;

    public function getFsmId(): ?int
    {
        return $this->fsmId;
    }

    public function getFsmCode(): ?string
    {
        return $this->fsmCode;
    }

    public function setFsmCode(string $fsmCode): self
    {
        $this->fsmCode = $fsmCode;

        return $this;
    }

    public function getFsmLibelle(): ?string
    {
        return $this->fsmLibelle;
    }

    public function setFsmLibelle(string $fsmLibelle): self
    {
        $this->fsmLibelle = $fsmLibelle;

        return $this;
    }

    public function getFsmEtat(): ?string
    {
        return $this->fsmEtat;
    }

    public function setFsmEtat(string $fsmEtat): self
    {
        $this->fsmEtat = $fsmEtat;

        return $this;
    }

    public function getFsmPourc(): ?string
    {
        return $this->fsmPourc;
    }

    public function setFsmPourc(?string $fsmPourc): self
    {
        $this->fsmPourc = $fsmPourc;

        return $this;
    }

    public function getFsmEligstag(): ?string
    {
        return $this->fsmEligstag;
    }

    public function setFsmEligstag(?string $fsmEligstag): self
    {
        $this->fsmEligstag = $fsmEligstag;

        return $this;
    }

    public function getFsmAuteurc(): ?string
    {
        return $this->fsmAuteurc;
    }

    public function setFsmAuteurc(string $fsmAuteurc): self
    {
        $this->fsmAuteurc = $fsmAuteurc;

        return $this;
    }

    public function getFsmDatec(): ?\DateTimeInterface
    {
        return $this->fsmDatec;
    }

    public function setFsmDatec(\DateTimeInterface $fsmDatec): self
    {
        $this->fsmDatec = $fsmDatec;

        return $this;
    }

    public function getFsmAuteurm(): ?string
    {
        return $this->fsmAuteurm;
    }

    public function setFsmAuteurm(?string $fsmAuteurm): self
    {
        $this->fsmAuteurm = $fsmAuteurm;

        return $this;
    }

    public function getFsmDatem(): ?\DateTimeInterface
    {
        return $this->fsmDatem;
    }

    public function setFsmDatem(?\DateTimeInterface $fsmDatem): self
    {
        $this->fsmDatem = $fsmDatem;

        return $this;
    }

    public function getFsmAuteura(): ?string
    {
        return $this->fsmAuteura;
    }

    public function setFsmAuteura(?string $fsmAuteura): self
    {
        $this->fsmAuteura = $fsmAuteura;

        return $this;
    }

    public function getFsmDatea(): ?\DateTimeInterface
    {
        return $this->fsmDatea;
    }

    public function setFsmDatea(?\DateTimeInterface $fsmDatea): self
    {
        $this->fsmDatea = $fsmDatea;

        return $this;
    }

    public function getFsmRefarianne(): ?string
    {
        return $this->fsmRefarianne;
    }

    public function setFsmRefarianne(?string $fsmRefarianne): self
    {
        $this->fsmRefarianne = $fsmRefarianne;

        return $this;
    }

    public function getFsmAxe(): ?FseAxe
    {
        return $this->fsmAxe;
    }

    public function setFsmAxe(?FseAxe $fsmAxe): self
    {
        $this->fsmAxe = $fsmAxe;

        return $this;
    }

    public function getFsmObjectif(): ?FseObj
    {
        return $this->fsmObjectif;
    }

    public function setFsmObjectif(?FseObj $fsmObjectif): self
    {
        $this->fsmObjectif = $fsmObjectif;

        return $this;
    }


}
