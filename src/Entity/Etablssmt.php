<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etablssmt
 *
 * @ORM\Table(name="etablssmt", uniqueConstraints={@ORM\UniqueConstraint(name="etablssmt_pk", columns={"ets_id"})}, indexes={@ORM\Index(name="ets_nat_jur_fk", columns={"ref_id_nat_jur"}), @ORM\Index(name="etablssmt_njnif", columns={"ets_natjur"}), @ORM\Index(name="ets_ref_type_dares_fk", columns={"ref_id_type_dares"}), @ORM\Index(name="etablssmt_uuif", columns={"ets_resp"}), @ORM\Index(name="etablssmt_epeif", columns={"ets_ppid"}), @ORM\Index(name="etablssmt_eeeif", columns={"ets_entpid"}), @ORM\Index(name="etablssmt_uuif2", columns={"ets_referent"}), @ORM\Index(name="etablssmt_eoeif", columns={"ets_ofid"}), @ORM\Index(name="adr_ets_fk", columns={"adr_id"}), @ORM\Index(name="etablssmt_eseif", columns={"ets_said"})})
 * @ORM\Entity(repositoryClass="App\Repository\EtablssmtRepository")
 */
class Etablssmt
{
    /**
     * @var int
     *
     * @ORM\Column(name="ets_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="etablssmt_ets_id_seq", allocationSize=1, initialValue=1)
     */
    private $etsId;

    /**
     * @var string
     *
     * @ORM\Column(name="ets_libelle", type="string", length=120, nullable=false)
     */
    private $etsLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="ets_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $etsEtat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_sigle", type="string", length=80, nullable=true)
     */
    private $etsSigle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_siret", type="string", length=14, nullable=true)
     */
    private $etsSiret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_ape", type="string", length=4, nullable=true)
     */
    private $etsApe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_immatricul", type="string", length=10, nullable=true)
     */
    private $etsImmatricul;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_adrsimmeub", type="string", length=100, nullable=true)
     */
    private $etsAdrsimmeub;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_nvoie", type="string", length=7, nullable=true)
     */
    private $etsNvoie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_bister", type="string", length=1, nullable=true)
     */
    private $etsBister;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_adr1", type="string", length=100, nullable=true)
     */
    private $etsAdr1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_adr2", type="string", length=100, nullable=true)
     */
    private $etsAdr2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_cpostal", type="string", length=5, nullable=true)
     */
    private $etsCpostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_ville", type="string", length=100, nullable=true)
     */
    private $etsVille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_pays", type="string", length=100, nullable=true)
     */
    private $etsPays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_tel", type="string", length=16, nullable=true)
     */
    private $etsTel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_fax", type="string", length=16, nullable=true)
     */
    private $etsFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_mail", type="string", length=60, nullable=true)
     */
    private $etsMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_web", type="string", length=50, nullable=true)
     */
    private $etsWeb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_ctiers", type="string", length=7, nullable=true)
     */
    private $etsCtiers;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ets_dquarant", type="datetime", nullable=true)
     */
    private $etsDquarant;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ets_datedde", type="datetime", nullable=true)
     */
    private $etsDatedde;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_of", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $etsOf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_entp", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $etsEntp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_pp", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $etsPp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_sa", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $etsSa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_auteurc", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $etsAuteurc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ets_datec", type="datetime", nullable=true)
     */
    private $etsDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $etsAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ets_datem", type="datetime", nullable=true)
     */
    private $etsDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $etsAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ets_datea", type="datetime", nullable=true)
     */
    private $etsDatea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_ftiers", type="decimal", precision=7, scale=0, nullable=true)
     */
    private $etsFtiers;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_id_tus", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $etsIdTus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_flg_siege_social", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $etsFlgSiegeSocial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_code_interne_si", type="string", length=20, nullable=true)
     */
    private $etsCodeInterneSi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_id_finance", type="string", length=20, nullable=true)
     */
    private $etsIdFinance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_ref_externe_finance", type="string", length=10, nullable=true)
     */
    private $etsRefExterneFinance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_comm_interne_region", type="string", length=2000, nullable=true)
     */
    private $etsCommInterneRegion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_num_tva_intracom", type="string", length=13, nullable=true)
     */
    private $etsNumTvaIntracom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_mail_secours", type="string", length=60, nullable=true)
     */
    private $etsMailSecours;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_flg_chorus_hors_eos", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $etsFlgChorusHorsEos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_code_insee_commune", type="string", length=5, nullable=true)
     */
    private $etsCodeInseeCommune;

  /*  /**
     * @var string|null
     *
     * @ORM\Column(name="ets_id_externe", type="string", length=100, nullable=true)
     */
    //private $etsIdExterne;

    /*/**
     * @var string|null
     *
     * @ORM\Column(name="ets_flg_envoi_remu", type="decimal", precision=1, scale=0, nullable=true)
     */
    //private $etsFlgEnvoiRemu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_signataire_civilite", type="string", length=3, nullable=true)
     */
    private $etsSignataireCivilite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_signataire_qualite", type="string", length=100, nullable=true)
     */
    private $etsSignataireQualite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_signataire_nom", type="string", length=100, nullable=true)
     */
    private $etsSignataireNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ets_signataire_prenom", type="string", length=100, nullable=true)
     */
    private $etsSignatairePrenom;

    /**
     * @var \Adresse
     *
     * @ORM\ManyToOne(targetEntity="Adresse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="adr_id", referencedColumnName="adr_id")
     * })
     */
    private $adr;

    /**
     * @var \EttEntp
     *
     * @ORM\ManyToOne(targetEntity="EttEntp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ets_entpid", referencedColumnName="een_id")
     * })
     */
    private $etsEntpid;

    /**
     * @var \NatJur
     *
     * @ORM\ManyToOne(targetEntity="NatJur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ets_natjur", referencedColumnName="naj_id")
     * })
     */
    private $etsNatjur;

    /**
     * @var \EttOf
     *
     * @ORM\ManyToOne(targetEntity="EttOf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ets_ofid", referencedColumnName="eof_id")
     * })
     */
    private $etsOfid;

    /**
     * @var \EttPp
     *
     * @ORM\ManyToOne(targetEntity="EttPp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ets_ppid", referencedColumnName="epp_id")
     * })
     */
    private $etsPpid;

    /**
     * @var \EttSa
     *
     * @ORM\ManyToOne(targetEntity="EttSa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ets_said", referencedColumnName="esa_id")
     * })
     */
    private $etsSaid;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ets_resp", referencedColumnName="uti_id")
     * })
     */
    private $etsResp;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ets_referent", referencedColumnName="uti_id")
     * })
     */
    private $etsReferent;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_nat_jur", referencedColumnName="ref_id")
     * })
     */
    private $refIdNatJur;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_type_dares", referencedColumnName="ref_id")
     * })
     */
    private $refIdTypeDares;

    public function getEtsId(): ?int
    {
        return $this->etsId;
    }

    public function getEtsLibelle(): ?string
    {
        return $this->etsLibelle;
    }

    public function setEtsLibelle(string $etsLibelle): self
    {
        $this->etsLibelle = $etsLibelle;

        return $this;
    }

    public function getEtsEtat(): ?string
    {
        return $this->etsEtat;
    }

    public function setEtsEtat(string $etsEtat): self
    {
        $this->etsEtat = $etsEtat;

        return $this;
    }

    public function getEtsSigle(): ?string
    {
        return $this->etsSigle;
    }

    public function setEtsSigle(?string $etsSigle): self
    {
        $this->etsSigle = $etsSigle;

        return $this;
    }

    public function getEtsSiret(): ?string
    {
        return $this->etsSiret;
    }

    public function setEtsSiret(?string $etsSiret): self
    {
        $this->etsSiret = $etsSiret;

        return $this;
    }

    public function getEtsApe(): ?string
    {
        return $this->etsApe;
    }

    public function setEtsApe(?string $etsApe): self
    {
        $this->etsApe = $etsApe;

        return $this;
    }

    public function getEtsImmatricul(): ?string
    {
        return $this->etsImmatricul;
    }

    public function setEtsImmatricul(?string $etsImmatricul): self
    {
        $this->etsImmatricul = $etsImmatricul;

        return $this;
    }

    public function getEtsAdrsimmeub(): ?string
    {
        return $this->etsAdrsimmeub;
    }

    public function setEtsAdrsimmeub(?string $etsAdrsimmeub): self
    {
        $this->etsAdrsimmeub = $etsAdrsimmeub;

        return $this;
    }

    public function getEtsNvoie(): ?string
    {
        return $this->etsNvoie;
    }

    public function setEtsNvoie(?string $etsNvoie): self
    {
        $this->etsNvoie = $etsNvoie;

        return $this;
    }

    public function getEtsBister(): ?string
    {
        return $this->etsBister;
    }

    public function setEtsBister(?string $etsBister): self
    {
        $this->etsBister = $etsBister;

        return $this;
    }

    public function getEtsAdr1(): ?string
    {
        return $this->etsAdr1;
    }

    public function setEtsAdr1(?string $etsAdr1): self
    {
        $this->etsAdr1 = $etsAdr1;

        return $this;
    }

    public function getEtsAdr2(): ?string
    {
        return $this->etsAdr2;
    }

    public function setEtsAdr2(?string $etsAdr2): self
    {
        $this->etsAdr2 = $etsAdr2;

        return $this;
    }

    public function getEtsCpostal(): ?string
    {
        return $this->etsCpostal;
    }

    public function setEtsCpostal(?string $etsCpostal): self
    {
        $this->etsCpostal = $etsCpostal;

        return $this;
    }

    public function getEtsVille(): ?string
    {
        return $this->etsVille;
    }

    public function setEtsVille(?string $etsVille): self
    {
        $this->etsVille = $etsVille;

        return $this;
    }

    public function getEtsPays(): ?string
    {
        return $this->etsPays;
    }

    public function setEtsPays(?string $etsPays): self
    {
        $this->etsPays = $etsPays;

        return $this;
    }

    public function getEtsTel(): ?string
    {
        return $this->etsTel;
    }

    public function setEtsTel(?string $etsTel): self
    {
        $this->etsTel = $etsTel;

        return $this;
    }

    public function getEtsFax(): ?string
    {
        return $this->etsFax;
    }

    public function setEtsFax(?string $etsFax): self
    {
        $this->etsFax = $etsFax;

        return $this;
    }

    public function getEtsMail(): ?string
    {
        return $this->etsMail;
    }

    public function setEtsMail(?string $etsMail): self
    {
        $this->etsMail = $etsMail;

        return $this;
    }

    public function getEtsWeb(): ?string
    {
        return $this->etsWeb;
    }

    public function setEtsWeb(?string $etsWeb): self
    {
        $this->etsWeb = $etsWeb;

        return $this;
    }

    public function getEtsCtiers(): ?string
    {
        return $this->etsCtiers;
    }

    public function setEtsCtiers(?string $etsCtiers): self
    {
        $this->etsCtiers = $etsCtiers;

        return $this;
    }

    public function getEtsDquarant(): ?\DateTimeInterface
    {
        return $this->etsDquarant;
    }

    public function setEtsDquarant(?\DateTimeInterface $etsDquarant): self
    {
        $this->etsDquarant = $etsDquarant;

        return $this;
    }

    public function getEtsDatedde(): ?\DateTimeInterface
    {
        return $this->etsDatedde;
    }

    public function setEtsDatedde(?\DateTimeInterface $etsDatedde): self
    {
        $this->etsDatedde = $etsDatedde;

        return $this;
    }

    public function getEtsOf(): ?string
    {
        return $this->etsOf;
    }

    public function setEtsOf(?string $etsOf): self
    {
        $this->etsOf = $etsOf;

        return $this;
    }

    public function getEtsEntp(): ?string
    {
        return $this->etsEntp;
    }

    public function setEtsEntp(?string $etsEntp): self
    {
        $this->etsEntp = $etsEntp;

        return $this;
    }

    public function getEtsPp(): ?string
    {
        return $this->etsPp;
    }

    public function setEtsPp(?string $etsPp): self
    {
        $this->etsPp = $etsPp;

        return $this;
    }

    public function getEtsSa(): ?string
    {
        return $this->etsSa;
    }

    public function setEtsSa(?string $etsSa): self
    {
        $this->etsSa = $etsSa;

        return $this;
    }

    public function getEtsAuteurc(): ?string
    {
        return $this->etsAuteurc;
    }

    public function setEtsAuteurc(?string $etsAuteurc): self
    {
        $this->etsAuteurc = $etsAuteurc;

        return $this;
    }

    public function getEtsDatec(): ?\DateTimeInterface
    {
        return $this->etsDatec;
    }

    public function setEtsDatec(?\DateTimeInterface $etsDatec): self
    {
        $this->etsDatec = $etsDatec;

        return $this;
    }

    public function getEtsAuteurm(): ?string
    {
        return $this->etsAuteurm;
    }

    public function setEtsAuteurm(?string $etsAuteurm): self
    {
        $this->etsAuteurm = $etsAuteurm;

        return $this;
    }

    public function getEtsDatem(): ?\DateTimeInterface
    {
        return $this->etsDatem;
    }

    public function setEtsDatem(?\DateTimeInterface $etsDatem): self
    {
        $this->etsDatem = $etsDatem;

        return $this;
    }

    public function getEtsAuteura(): ?string
    {
        return $this->etsAuteura;
    }

    public function setEtsAuteura(?string $etsAuteura): self
    {
        $this->etsAuteura = $etsAuteura;

        return $this;
    }

    public function getEtsDatea(): ?\DateTimeInterface
    {
        return $this->etsDatea;
    }

    public function setEtsDatea(?\DateTimeInterface $etsDatea): self
    {
        $this->etsDatea = $etsDatea;

        return $this;
    }

    public function getEtsFtiers(): ?string
    {
        return $this->etsFtiers;
    }

    public function setEtsFtiers(?string $etsFtiers): self
    {
        $this->etsFtiers = $etsFtiers;

        return $this;
    }

    public function getEtsIdTus(): ?string
    {
        return $this->etsIdTus;
    }

    public function setEtsIdTus(?string $etsIdTus): self
    {
        $this->etsIdTus = $etsIdTus;

        return $this;
    }

    public function getEtsFlgSiegeSocial(): ?string
    {
        return $this->etsFlgSiegeSocial;
    }

    public function setEtsFlgSiegeSocial(?string $etsFlgSiegeSocial): self
    {
        $this->etsFlgSiegeSocial = $etsFlgSiegeSocial;

        return $this;
    }

    public function getEtsCodeInterneSi(): ?string
    {
        return $this->etsCodeInterneSi;
    }

    public function setEtsCodeInterneSi(?string $etsCodeInterneSi): self
    {
        $this->etsCodeInterneSi = $etsCodeInterneSi;

        return $this;
    }

    public function getEtsIdFinance(): ?string
    {
        return $this->etsIdFinance;
    }

    public function setEtsIdFinance(?string $etsIdFinance): self
    {
        $this->etsIdFinance = $etsIdFinance;

        return $this;
    }

    public function getEtsRefExterneFinance(): ?string
    {
        return $this->etsRefExterneFinance;
    }

    public function setEtsRefExterneFinance(?string $etsRefExterneFinance): self
    {
        $this->etsRefExterneFinance = $etsRefExterneFinance;

        return $this;
    }

    public function getEtsCommInterneRegion(): ?string
    {
        return $this->etsCommInterneRegion;
    }

    public function setEtsCommInterneRegion(?string $etsCommInterneRegion): self
    {
        $this->etsCommInterneRegion = $etsCommInterneRegion;

        return $this;
    }

    public function getEtsNumTvaIntracom(): ?string
    {
        return $this->etsNumTvaIntracom;
    }

    public function setEtsNumTvaIntracom(?string $etsNumTvaIntracom): self
    {
        $this->etsNumTvaIntracom = $etsNumTvaIntracom;

        return $this;
    }

    public function getEtsMailSecours(): ?string
    {
        return $this->etsMailSecours;
    }

    public function setEtsMailSecours(?string $etsMailSecours): self
    {
        $this->etsMailSecours = $etsMailSecours;

        return $this;
    }

    public function getEtsFlgChorusHorsEos(): ?string
    {
        return $this->etsFlgChorusHorsEos;
    }

    public function setEtsFlgChorusHorsEos(?string $etsFlgChorusHorsEos): self
    {
        $this->etsFlgChorusHorsEos = $etsFlgChorusHorsEos;

        return $this;
    }

    public function getEtsCodeInseeCommune(): ?string
    {
        return $this->etsCodeInseeCommune;
    }

    public function setEtsCodeInseeCommune(?string $etsCodeInseeCommune): self
    {
        $this->etsCodeInseeCommune = $etsCodeInseeCommune;

        return $this;
    }

    public function getEtsIdExterne(): ?string
    {
        return $this->etsIdExterne;
    }

    public function setEtsIdExterne(?string $etsIdExterne): self
    {
        $this->etsIdExterne = $etsIdExterne;

        return $this;
    }

    public function getEtsFlgEnvoiRemu(): ?string
    {
        return $this->etsFlgEnvoiRemu;
    }

    public function setEtsFlgEnvoiRemu(?string $etsFlgEnvoiRemu): self
    {
        $this->etsFlgEnvoiRemu = $etsFlgEnvoiRemu;

        return $this;
    }

    public function getEtsSignataireCivilite(): ?string
    {
        return $this->etsSignataireCivilite;
    }

    public function setEtsSignataireCivilite(?string $etsSignataireCivilite): self
    {
        $this->etsSignataireCivilite = $etsSignataireCivilite;

        return $this;
    }

    public function getEtsSignataireQualite(): ?string
    {
        return $this->etsSignataireQualite;
    }

    public function setEtsSignataireQualite(?string $etsSignataireQualite): self
    {
        $this->etsSignataireQualite = $etsSignataireQualite;

        return $this;
    }

    public function getEtsSignataireNom(): ?string
    {
        return $this->etsSignataireNom;
    }

    public function setEtsSignataireNom(?string $etsSignataireNom): self
    {
        $this->etsSignataireNom = $etsSignataireNom;

        return $this;
    }

    public function getEtsSignatairePrenom(): ?string
    {
        return $this->etsSignatairePrenom;
    }

    public function setEtsSignatairePrenom(?string $etsSignatairePrenom): self
    {
        $this->etsSignatairePrenom = $etsSignatairePrenom;

        return $this;
    }

    public function getAdr(): ?Adresse
    {
        return $this->adr;
    }

    public function setAdr(?Adresse $adr): self
    {
        $this->adr = $adr;

        return $this;
    }

    public function getEtsEntpid(): ?EttEntp
    {
        return $this->etsEntpid;
    }

    public function setEtsEntpid(?EttEntp $etsEntpid): self
    {
        $this->etsEntpid = $etsEntpid;

        return $this;
    }

    public function getEtsNatjur(): ?NatJur
    {
        return $this->etsNatjur;
    }

    public function setEtsNatjur(?NatJur $etsNatjur): self
    {
        $this->etsNatjur = $etsNatjur;

        return $this;
    }

    public function getEtsOfid(): ?EttOf
    {
        return $this->etsOfid;
    }

    public function setEtsOfid(?EttOf $etsOfid): self
    {
        $this->etsOfid = $etsOfid;

        return $this;
    }

    public function getEtsPpid(): ?EttPp
    {
        return $this->etsPpid;
    }

    public function setEtsPpid(?EttPp $etsPpid): self
    {
        $this->etsPpid = $etsPpid;

        return $this;
    }

    public function getEtsSaid(): ?EttSa
    {
        return $this->etsSaid;
    }

    public function setEtsSaid(?EttSa $etsSaid): self
    {
        $this->etsSaid = $etsSaid;

        return $this;
    }

    public function getEtsResp(): ?Utilisateur
    {
        return $this->etsResp;
    }

    public function setEtsResp(?Utilisateur $etsResp): self
    {
        $this->etsResp = $etsResp;

        return $this;
    }

    public function getEtsReferent(): ?Utilisateur
    {
        return $this->etsReferent;
    }

    public function setEtsReferent(?Utilisateur $etsReferent): self
    {
        $this->etsReferent = $etsReferent;

        return $this;
    }

    public function getRefIdNatJur(): ?Referentiel
    {
        return $this->refIdNatJur;
    }

    public function setRefIdNatJur(?Referentiel $refIdNatJur): self
    {
        $this->refIdNatJur = $refIdNatJur;

        return $this;
    }

    public function getRefIdTypeDares(): ?Referentiel
    {
        return $this->refIdTypeDares;
    }

    public function setRefIdTypeDares(?Referentiel $refIdTypeDares): self
    {
        $this->refIdTypeDares = $refIdTypeDares;

        return $this;
    }


}
