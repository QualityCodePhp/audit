<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PEcheancier
 *
 * @ORM\Table(name="p_echeancier", uniqueConstraints={@ORM\UniqueConstraint(name="p_echeancier_pk", columns={"pec_id"})}, indexes={@ORM\Index(name="p_echeancier_ffif", columns={"pec_freqacpt"})})
 * @ORM\Entity
 */
class PEcheancier
{
    /**
     * @var int
     *
     * @ORM\Column(name="pec_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="p_echeancier_pec_id_seq", allocationSize=1, initialValue=1)
     */
    private $pecId;

    /**
     * @var string
     *
     * @ORM\Column(name="pec_saisie_mens", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $pecSaisieMens;

    /**
     * @var string
     *
     * @ORM\Column(name="pec_saisiecr", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $pecSaisiecr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_spaiemtdst", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $pecSpaiemtdst;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_spaiemtdct", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $pecSpaiemtdct;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_sminipaiemt", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $pecSminipaiemt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_minihrgrp", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $pecMinihrgrp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_maxihrgrp", type="decimal", precision=5, scale=0, nullable=true)
     */
    private $pecMaxihrgrp;

    /**
     * @var string
     *
     * @ORM\Column(name="pec_avforf", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $pecAvforf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_pavforf", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $pecPavforf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_mntseuilav", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $pecMntseuilav;

    /**
     * @var string
     *
     * @ORM\Column(name="pec_avfacult", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $pecAvfacult;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_maxavance", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $pecMaxavance;

    /**
     * @var string
     *
     * @ORM\Column(name="pec_recupa", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $pecRecupa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_pdebrecupa", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $pecPdebrecupa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_pfinrecupa", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $pecPfinrecupa;

    /**
     * @var string
     *
     * @ORM\Column(name="pec_avmodif", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $pecAvmodif;

    /**
     * @var string
     *
     * @ORM\Column(name="pec_capnonav", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $pecCapnonav;

    /**
     * @var string
     *
     * @ORM\Column(name="pec_acpte", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $pecAcpte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_acptefixe", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $pecAcptefixe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_nbacpt", type="decimal", precision=2, scale=0, nullable=true)
     */
    private $pecNbacpt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_freqacptm", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $pecFreqacptm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_plafacpt", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $pecPlafacpt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_mntacptm", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $pecMntacptm;

    /**
     * @var string
     *
     * @ORM\Column(name="pec_pmargesolde", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $pecPmargesolde;

    /**
     * @var string
     *
     * @ORM\Column(name="pec_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $pecAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pec_datec", type="datetime", nullable=false)
     */
    private $pecDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $pecAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="pec_datem", type="datetime", nullable=true)
     */
    private $pecDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_avdebreal", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $pecAvdebreal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_dureeseuil", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $pecDureeseuil;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_dureemini", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $pecDureemini;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_flg_recuptvasstrait", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $pecFlgRecuptvasstrait;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_flg_calcultvasstrait", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $pecFlgCalcultvasstrait;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_flg_remu_stag_oblig", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $pecFlgRemuStagOblig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_flg_pas_vol_heure", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $pecFlgPasVolHeure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_flg_modalite_paiement", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $pecFlgModalitePaiement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec_flg_bdp_sstrait_dyn", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $pecFlgBdpSstraitDyn;

    /**
     * @var \Frequence
     *
     * @ORM\ManyToOne(targetEntity="Frequence")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pec_freqacpt", referencedColumnName="frq_id")
     * })
     */
    private $pecFreqacpt;

    public function getPecId(): ?int
    {
        return $this->pecId;
    }

    public function getPecSaisieMens(): ?string
    {
        return $this->pecSaisieMens;
    }

    public function setPecSaisieMens(string $pecSaisieMens): self
    {
        $this->pecSaisieMens = $pecSaisieMens;

        return $this;
    }

    public function getPecSaisiecr(): ?string
    {
        return $this->pecSaisiecr;
    }

    public function setPecSaisiecr(string $pecSaisiecr): self
    {
        $this->pecSaisiecr = $pecSaisiecr;

        return $this;
    }

    public function getPecSpaiemtdst(): ?string
    {
        return $this->pecSpaiemtdst;
    }

    public function setPecSpaiemtdst(?string $pecSpaiemtdst): self
    {
        $this->pecSpaiemtdst = $pecSpaiemtdst;

        return $this;
    }

    public function getPecSpaiemtdct(): ?string
    {
        return $this->pecSpaiemtdct;
    }

    public function setPecSpaiemtdct(?string $pecSpaiemtdct): self
    {
        $this->pecSpaiemtdct = $pecSpaiemtdct;

        return $this;
    }

    public function getPecSminipaiemt(): ?string
    {
        return $this->pecSminipaiemt;
    }

    public function setPecSminipaiemt(?string $pecSminipaiemt): self
    {
        $this->pecSminipaiemt = $pecSminipaiemt;

        return $this;
    }

    public function getPecMinihrgrp(): ?string
    {
        return $this->pecMinihrgrp;
    }

    public function setPecMinihrgrp(?string $pecMinihrgrp): self
    {
        $this->pecMinihrgrp = $pecMinihrgrp;

        return $this;
    }

    public function getPecMaxihrgrp(): ?string
    {
        return $this->pecMaxihrgrp;
    }

    public function setPecMaxihrgrp(?string $pecMaxihrgrp): self
    {
        $this->pecMaxihrgrp = $pecMaxihrgrp;

        return $this;
    }

    public function getPecAvforf(): ?string
    {
        return $this->pecAvforf;
    }

    public function setPecAvforf(string $pecAvforf): self
    {
        $this->pecAvforf = $pecAvforf;

        return $this;
    }

    public function getPecPavforf(): ?string
    {
        return $this->pecPavforf;
    }

    public function setPecPavforf(?string $pecPavforf): self
    {
        $this->pecPavforf = $pecPavforf;

        return $this;
    }

    public function getPecMntseuilav(): ?string
    {
        return $this->pecMntseuilav;
    }

    public function setPecMntseuilav(?string $pecMntseuilav): self
    {
        $this->pecMntseuilav = $pecMntseuilav;

        return $this;
    }

    public function getPecAvfacult(): ?string
    {
        return $this->pecAvfacult;
    }

    public function setPecAvfacult(string $pecAvfacult): self
    {
        $this->pecAvfacult = $pecAvfacult;

        return $this;
    }

    public function getPecMaxavance(): ?string
    {
        return $this->pecMaxavance;
    }

    public function setPecMaxavance(?string $pecMaxavance): self
    {
        $this->pecMaxavance = $pecMaxavance;

        return $this;
    }

    public function getPecRecupa(): ?string
    {
        return $this->pecRecupa;
    }

    public function setPecRecupa(string $pecRecupa): self
    {
        $this->pecRecupa = $pecRecupa;

        return $this;
    }

    public function getPecPdebrecupa(): ?string
    {
        return $this->pecPdebrecupa;
    }

    public function setPecPdebrecupa(?string $pecPdebrecupa): self
    {
        $this->pecPdebrecupa = $pecPdebrecupa;

        return $this;
    }

    public function getPecPfinrecupa(): ?string
    {
        return $this->pecPfinrecupa;
    }

    public function setPecPfinrecupa(?string $pecPfinrecupa): self
    {
        $this->pecPfinrecupa = $pecPfinrecupa;

        return $this;
    }

    public function getPecAvmodif(): ?string
    {
        return $this->pecAvmodif;
    }

    public function setPecAvmodif(string $pecAvmodif): self
    {
        $this->pecAvmodif = $pecAvmodif;

        return $this;
    }

    public function getPecCapnonav(): ?string
    {
        return $this->pecCapnonav;
    }

    public function setPecCapnonav(string $pecCapnonav): self
    {
        $this->pecCapnonav = $pecCapnonav;

        return $this;
    }

    public function getPecAcpte(): ?string
    {
        return $this->pecAcpte;
    }

    public function setPecAcpte(string $pecAcpte): self
    {
        $this->pecAcpte = $pecAcpte;

        return $this;
    }

    public function getPecAcptefixe(): ?string
    {
        return $this->pecAcptefixe;
    }

    public function setPecAcptefixe(?string $pecAcptefixe): self
    {
        $this->pecAcptefixe = $pecAcptefixe;

        return $this;
    }

    public function getPecNbacpt(): ?string
    {
        return $this->pecNbacpt;
    }

    public function setPecNbacpt(?string $pecNbacpt): self
    {
        $this->pecNbacpt = $pecNbacpt;

        return $this;
    }

    public function getPecFreqacptm(): ?string
    {
        return $this->pecFreqacptm;
    }

    public function setPecFreqacptm(?string $pecFreqacptm): self
    {
        $this->pecFreqacptm = $pecFreqacptm;

        return $this;
    }

    public function getPecPlafacpt(): ?string
    {
        return $this->pecPlafacpt;
    }

    public function setPecPlafacpt(?string $pecPlafacpt): self
    {
        $this->pecPlafacpt = $pecPlafacpt;

        return $this;
    }

    public function getPecMntacptm(): ?string
    {
        return $this->pecMntacptm;
    }

    public function setPecMntacptm(?string $pecMntacptm): self
    {
        $this->pecMntacptm = $pecMntacptm;

        return $this;
    }

    public function getPecPmargesolde(): ?string
    {
        return $this->pecPmargesolde;
    }

    public function setPecPmargesolde(string $pecPmargesolde): self
    {
        $this->pecPmargesolde = $pecPmargesolde;

        return $this;
    }

    public function getPecAuteurc(): ?string
    {
        return $this->pecAuteurc;
    }

    public function setPecAuteurc(string $pecAuteurc): self
    {
        $this->pecAuteurc = $pecAuteurc;

        return $this;
    }

    public function getPecDatec(): ?\DateTimeInterface
    {
        return $this->pecDatec;
    }

    public function setPecDatec(\DateTimeInterface $pecDatec): self
    {
        $this->pecDatec = $pecDatec;

        return $this;
    }

    public function getPecAuteurm(): ?string
    {
        return $this->pecAuteurm;
    }

    public function setPecAuteurm(?string $pecAuteurm): self
    {
        $this->pecAuteurm = $pecAuteurm;

        return $this;
    }

    public function getPecDatem(): ?\DateTimeInterface
    {
        return $this->pecDatem;
    }

    public function setPecDatem(?\DateTimeInterface $pecDatem): self
    {
        $this->pecDatem = $pecDatem;

        return $this;
    }

    public function getPecAvdebreal(): ?string
    {
        return $this->pecAvdebreal;
    }

    public function setPecAvdebreal(?string $pecAvdebreal): self
    {
        $this->pecAvdebreal = $pecAvdebreal;

        return $this;
    }

    public function getPecDureeseuil(): ?string
    {
        return $this->pecDureeseuil;
    }

    public function setPecDureeseuil(?string $pecDureeseuil): self
    {
        $this->pecDureeseuil = $pecDureeseuil;

        return $this;
    }

    public function getPecDureemini(): ?string
    {
        return $this->pecDureemini;
    }

    public function setPecDureemini(?string $pecDureemini): self
    {
        $this->pecDureemini = $pecDureemini;

        return $this;
    }

    public function getPecFlgRecuptvasstrait(): ?string
    {
        return $this->pecFlgRecuptvasstrait;
    }

    public function setPecFlgRecuptvasstrait(?string $pecFlgRecuptvasstrait): self
    {
        $this->pecFlgRecuptvasstrait = $pecFlgRecuptvasstrait;

        return $this;
    }

    public function getPecFlgCalcultvasstrait(): ?string
    {
        return $this->pecFlgCalcultvasstrait;
    }

    public function setPecFlgCalcultvasstrait(?string $pecFlgCalcultvasstrait): self
    {
        $this->pecFlgCalcultvasstrait = $pecFlgCalcultvasstrait;

        return $this;
    }

    public function getPecFlgRemuStagOblig(): ?string
    {
        return $this->pecFlgRemuStagOblig;
    }

    public function setPecFlgRemuStagOblig(?string $pecFlgRemuStagOblig): self
    {
        $this->pecFlgRemuStagOblig = $pecFlgRemuStagOblig;

        return $this;
    }

    public function getPecFlgPasVolHeure(): ?string
    {
        return $this->pecFlgPasVolHeure;
    }

    public function setPecFlgPasVolHeure(?string $pecFlgPasVolHeure): self
    {
        $this->pecFlgPasVolHeure = $pecFlgPasVolHeure;

        return $this;
    }

    public function getPecFlgModalitePaiement(): ?string
    {
        return $this->pecFlgModalitePaiement;
    }

    public function setPecFlgModalitePaiement(?string $pecFlgModalitePaiement): self
    {
        $this->pecFlgModalitePaiement = $pecFlgModalitePaiement;

        return $this;
    }

    public function getPecFlgBdpSstraitDyn(): ?string
    {
        return $this->pecFlgBdpSstraitDyn;
    }

    public function setPecFlgBdpSstraitDyn(?string $pecFlgBdpSstraitDyn): self
    {
        $this->pecFlgBdpSstraitDyn = $pecFlgBdpSstraitDyn;

        return $this;
    }

    public function getPecFreqacpt(): ?Frequence
    {
        return $this->pecFreqacpt;
    }

    public function setPecFreqacpt(?Frequence $pecFreqacpt): self
    {
        $this->pecFreqacpt = $pecFreqacpt;

        return $this;
    }


}
