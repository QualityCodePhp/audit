<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dispositif
 *
 * @ORM\Table(name="dispositif", uniqueConstraints={@ORM\UniqueConstraint(name="dispositif_pk", columns={"dsp_id"})}, indexes={@ORM\Index(name="dispositif_mamif", columns={"dsp_mode"}), @ORM\Index(name="dsp_ref_mode_achat_fk", columns={"ref_id_mode_achat"})})
 * @ORM\Entity
 */
class Dispositif
{
    /**
     * @var int
     *
     * @ORM\Column(name="dsp_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dispositif_dsp_id_seq", allocationSize=1, initialValue=1)
     */
    private $dspId;

    /**
     * @var string
     *
     * @ORM\Column(name="dsp_code", type="string", length=10, nullable=false)
     */
    private $dspCode;

    /**
     * @var string
     *
     * @ORM\Column(name="dsp_libelle", type="string", length=50, nullable=false)
     */
    private $dspLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="dsp_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $dspEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="dsp_variante", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $dspVariante;

    /**
     * @var string
     *
     * @ORM\Column(name="dsp_negociee", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $dspNegociee;

    /**
     * @var string
     *
     * @ORM\Column(name="dsp_constr", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $dspConstr;

    /**
     * @var string
     *
     * @ORM\Column(name="dsp_engag", type="string", length=2, nullable=false, options={"comment"="AE = Autorisation Engagement - CF = CrÃ©dit de Fonctionnement"})
     */
    private $dspEngag;

    /**
     * @var string
     *
     * @ORM\Column(name="dsp_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $dspAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dsp_datec", type="datetime", nullable=false)
     */
    private $dspDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dsp_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $dspAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dsp_datem", type="datetime", nullable=true)
     */
    private $dspDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dsp_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $dspAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dsp_datea", type="datetime", nullable=true)
     */
    private $dspDatea;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dsp_datev", type="datetime", nullable=true)
     */
    private $dspDatev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dsp_auteurv", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $dspAuteurv;

    /**
     * @var \ModAch
     *
     * @ORM\ManyToOne(targetEntity="ModAch")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dsp_mode", referencedColumnName="mod_id")
     * })
     */
    private $dspMode;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_mode_achat", referencedColumnName="ref_id")
     * })
     */
    private $refIdModeAchat;

    public function getDspId(): ?int
    {
        return $this->dspId;
    }

    public function getDspCode(): ?string
    {
        return $this->dspCode;
    }

    public function setDspCode(string $dspCode): self
    {
        $this->dspCode = $dspCode;

        return $this;
    }

    public function getDspLibelle(): ?string
    {
        return $this->dspLibelle;
    }

    public function setDspLibelle(string $dspLibelle): self
    {
        $this->dspLibelle = $dspLibelle;

        return $this;
    }

    public function getDspEtat(): ?string
    {
        return $this->dspEtat;
    }

    public function setDspEtat(string $dspEtat): self
    {
        $this->dspEtat = $dspEtat;

        return $this;
    }

    public function getDspVariante(): ?string
    {
        return $this->dspVariante;
    }

    public function setDspVariante(string $dspVariante): self
    {
        $this->dspVariante = $dspVariante;

        return $this;
    }

    public function getDspNegociee(): ?string
    {
        return $this->dspNegociee;
    }

    public function setDspNegociee(string $dspNegociee): self
    {
        $this->dspNegociee = $dspNegociee;

        return $this;
    }

    public function getDspConstr(): ?string
    {
        return $this->dspConstr;
    }

    public function setDspConstr(string $dspConstr): self
    {
        $this->dspConstr = $dspConstr;

        return $this;
    }

    public function getDspEngag(): ?string
    {
        return $this->dspEngag;
    }

    public function setDspEngag(string $dspEngag): self
    {
        $this->dspEngag = $dspEngag;

        return $this;
    }

    public function getDspAuteurc(): ?string
    {
        return $this->dspAuteurc;
    }

    public function setDspAuteurc(string $dspAuteurc): self
    {
        $this->dspAuteurc = $dspAuteurc;

        return $this;
    }

    public function getDspDatec(): ?\DateTimeInterface
    {
        return $this->dspDatec;
    }

    public function setDspDatec(\DateTimeInterface $dspDatec): self
    {
        $this->dspDatec = $dspDatec;

        return $this;
    }

    public function getDspAuteurm(): ?string
    {
        return $this->dspAuteurm;
    }

    public function setDspAuteurm(?string $dspAuteurm): self
    {
        $this->dspAuteurm = $dspAuteurm;

        return $this;
    }

    public function getDspDatem(): ?\DateTimeInterface
    {
        return $this->dspDatem;
    }

    public function setDspDatem(?\DateTimeInterface $dspDatem): self
    {
        $this->dspDatem = $dspDatem;

        return $this;
    }

    public function getDspAuteura(): ?string
    {
        return $this->dspAuteura;
    }

    public function setDspAuteura(?string $dspAuteura): self
    {
        $this->dspAuteura = $dspAuteura;

        return $this;
    }

    public function getDspDatea(): ?\DateTimeInterface
    {
        return $this->dspDatea;
    }

    public function setDspDatea(?\DateTimeInterface $dspDatea): self
    {
        $this->dspDatea = $dspDatea;

        return $this;
    }

    public function getDspDatev(): ?\DateTimeInterface
    {
        return $this->dspDatev;
    }

    public function setDspDatev(?\DateTimeInterface $dspDatev): self
    {
        $this->dspDatev = $dspDatev;

        return $this;
    }

    public function getDspAuteurv(): ?string
    {
        return $this->dspAuteurv;
    }

    public function setDspAuteurv(?string $dspAuteurv): self
    {
        $this->dspAuteurv = $dspAuteurv;

        return $this;
    }

    public function getDspMode(): ?ModAch
    {
        return $this->dspMode;
    }

    public function setDspMode(?ModAch $dspMode): self
    {
        $this->dspMode = $dspMode;

        return $this;
    }

    public function getRefIdModeAchat(): ?Referentiel
    {
        return $this->refIdModeAchat;
    }

    public function setRefIdModeAchat(?Referentiel $refIdModeAchat): self
    {
        $this->refIdModeAchat = $refIdModeAchat;

        return $this;
    }


}
