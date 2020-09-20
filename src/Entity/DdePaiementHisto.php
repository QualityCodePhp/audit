<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DdePaiementHisto
 *
 * @ORM\Table(name="dde_paiement_histo", uniqueConstraints={@ORM\UniqueConstraint(name="dde_paiement_histo_pk", columns={"ddh_id"})}, indexes={@ORM\Index(name="ddp_ddh_fk", columns={"ddp_id_histo"}), @ORM\Index(name="ddp_ddh_histo_fk", columns={"ddp_id"})})
 * @ORM\Entity
 */
class DdePaiementHisto
{
    /**
     * @var string
     *
     * @ORM\Column(name="ddh_id", type="decimal", precision=8, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dde_paiement_histo_ddh_id_seq", allocationSize=1, initialValue=1)
     */
    private $ddhId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddh_code", type="string", length=6, nullable=true)
     */
    private $ddhCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddh_nom_ets", type="string", length=100, nullable=true)
     */
    private $ddhNomEts;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddh_periode", type="string", length=100, nullable=true)
     */
    private $ddhPeriode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddh_objet", type="string", length=30, nullable=true)
     */
    private $ddhObjet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddh_pour_exe", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $ddhPourExe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddh_mt_av_recup", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddhMtAvRecup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddh_mt_paye_ht", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddhMtPayeHt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddh_mt_paye_ttc", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddhMtPayeTtc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddh_num_liq", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $ddhNumLiq;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddh_num_mandat", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $ddhNumMandat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ddh_dt_mandat", type="datetime", nullable=true)
     */
    private $ddhDtMandat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ddh_dt_paiement", type="datetime", nullable=true)
     */
    private $ddhDtPaiement;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ddh_datec", type="datetime", nullable=true)
     */
    private $ddhDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddh_montant_bc", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddhMontantBc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddh_taux_tva", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $ddhTauxTva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddh_montant_presta", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddhMontantPresta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddh_mt_real_paye_ht", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddhMtRealPayeHt;

    /**
     * @var \DdePaiement
     *
     * @ORM\ManyToOne(targetEntity="DdePaiement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ddp_id_histo", referencedColumnName="ddp_id")
     * })
     */
    private $ddpIdHisto;

    /**
     * @var \DdePaiement
     *
     * @ORM\ManyToOne(targetEntity="DdePaiement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ddp_id", referencedColumnName="ddp_id")
     * })
     */
    private $ddp;

    public function getDdhId(): ?string
    {
        return $this->ddhId;
    }

    public function getDdhCode(): ?string
    {
        return $this->ddhCode;
    }

    public function setDdhCode(?string $ddhCode): self
    {
        $this->ddhCode = $ddhCode;

        return $this;
    }

    public function getDdhNomEts(): ?string
    {
        return $this->ddhNomEts;
    }

    public function setDdhNomEts(?string $ddhNomEts): self
    {
        $this->ddhNomEts = $ddhNomEts;

        return $this;
    }

    public function getDdhPeriode(): ?string
    {
        return $this->ddhPeriode;
    }

    public function setDdhPeriode(?string $ddhPeriode): self
    {
        $this->ddhPeriode = $ddhPeriode;

        return $this;
    }

    public function getDdhObjet(): ?string
    {
        return $this->ddhObjet;
    }

    public function setDdhObjet(?string $ddhObjet): self
    {
        $this->ddhObjet = $ddhObjet;

        return $this;
    }

    public function getDdhPourExe(): ?string
    {
        return $this->ddhPourExe;
    }

    public function setDdhPourExe(?string $ddhPourExe): self
    {
        $this->ddhPourExe = $ddhPourExe;

        return $this;
    }

    public function getDdhMtAvRecup(): ?string
    {
        return $this->ddhMtAvRecup;
    }

    public function setDdhMtAvRecup(?string $ddhMtAvRecup): self
    {
        $this->ddhMtAvRecup = $ddhMtAvRecup;

        return $this;
    }

    public function getDdhMtPayeHt(): ?string
    {
        return $this->ddhMtPayeHt;
    }

    public function setDdhMtPayeHt(?string $ddhMtPayeHt): self
    {
        $this->ddhMtPayeHt = $ddhMtPayeHt;

        return $this;
    }

    public function getDdhMtPayeTtc(): ?string
    {
        return $this->ddhMtPayeTtc;
    }

    public function setDdhMtPayeTtc(?string $ddhMtPayeTtc): self
    {
        $this->ddhMtPayeTtc = $ddhMtPayeTtc;

        return $this;
    }

    public function getDdhNumLiq(): ?string
    {
        return $this->ddhNumLiq;
    }

    public function setDdhNumLiq(?string $ddhNumLiq): self
    {
        $this->ddhNumLiq = $ddhNumLiq;

        return $this;
    }

    public function getDdhNumMandat(): ?string
    {
        return $this->ddhNumMandat;
    }

    public function setDdhNumMandat(?string $ddhNumMandat): self
    {
        $this->ddhNumMandat = $ddhNumMandat;

        return $this;
    }

    public function getDdhDtMandat(): ?\DateTimeInterface
    {
        return $this->ddhDtMandat;
    }

    public function setDdhDtMandat(?\DateTimeInterface $ddhDtMandat): self
    {
        $this->ddhDtMandat = $ddhDtMandat;

        return $this;
    }

    public function getDdhDtPaiement(): ?\DateTimeInterface
    {
        return $this->ddhDtPaiement;
    }

    public function setDdhDtPaiement(?\DateTimeInterface $ddhDtPaiement): self
    {
        $this->ddhDtPaiement = $ddhDtPaiement;

        return $this;
    }

    public function getDdhDatec(): ?\DateTimeInterface
    {
        return $this->ddhDatec;
    }

    public function setDdhDatec(?\DateTimeInterface $ddhDatec): self
    {
        $this->ddhDatec = $ddhDatec;

        return $this;
    }

    public function getDdhMontantBc(): ?string
    {
        return $this->ddhMontantBc;
    }

    public function setDdhMontantBc(?string $ddhMontantBc): self
    {
        $this->ddhMontantBc = $ddhMontantBc;

        return $this;
    }

    public function getDdhTauxTva(): ?string
    {
        return $this->ddhTauxTva;
    }

    public function setDdhTauxTva(?string $ddhTauxTva): self
    {
        $this->ddhTauxTva = $ddhTauxTva;

        return $this;
    }

    public function getDdhMontantPresta(): ?string
    {
        return $this->ddhMontantPresta;
    }

    public function setDdhMontantPresta(?string $ddhMontantPresta): self
    {
        $this->ddhMontantPresta = $ddhMontantPresta;

        return $this;
    }

    public function getDdhMtRealPayeHt(): ?string
    {
        return $this->ddhMtRealPayeHt;
    }

    public function setDdhMtRealPayeHt(?string $ddhMtRealPayeHt): self
    {
        $this->ddhMtRealPayeHt = $ddhMtRealPayeHt;

        return $this;
    }

    public function getDdpIdHisto(): ?DdePaiement
    {
        return $this->ddpIdHisto;
    }

    public function setDdpIdHisto(?DdePaiement $ddpIdHisto): self
    {
        $this->ddpIdHisto = $ddpIdHisto;

        return $this;
    }

    public function getDdp(): ?DdePaiement
    {
        return $this->ddp;
    }

    public function setDdp(?DdePaiement $ddp): self
    {
        $this->ddp = $ddp;

        return $this;
    }


}
