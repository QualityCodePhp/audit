<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Antenne
 *
 * @ORM\Table(name="antenne", uniqueConstraints={@ORM\UniqueConstraint(name="antenne_pk", columns={"ant_id"})}, indexes={@ORM\Index(name="antenne_ant_et_eeif", columns={"ant_etablssmt"}), @ORM\Index(name="adr_ant_fk", columns={"adr_id"})})
 * @ORM\Entity
 */
class Antenne
{
    /**
     * @var int
     *
     * @ORM\Column(name="ant_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="antenne_ant_id_seq", allocationSize=1, initialValue=1)
     */
    private $antId;

    /**
     * @var string
     *
     * @ORM\Column(name="ant_libelle", type="string", length=50, nullable=false)
     */
    private $antLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="ant_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $antEtat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ant_desc", type="string", length=100, nullable=true)
     */
    private $antDesc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ant_telephone", type="string", length=16, nullable=true)
     */
    private $antTelephone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ant_adrsimmeub", type="string", length=38, nullable=true)
     */
    private $antAdrsimmeub;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ant_nvoie", type="string", length=7, nullable=true)
     */
    private $antNvoie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ant_bister", type="string", length=1, nullable=true)
     */
    private $antBister;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ant_adr1", type="string", length=38, nullable=true)
     */
    private $antAdr1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ant_adr2", type="string", length=38, nullable=true)
     */
    private $antAdr2;

    /**
     * @var string
     *
     * @ORM\Column(name="ant_cpostal", type="string", length=5, nullable=false)
     */
    private $antCpostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ant_ville", type="string", length=32, nullable=false)
     */
    private $antVille;

    /**
     * @var string
     *
     * @ORM\Column(name="ant_pays", type="string", length=38, nullable=false)
     */
    private $antPays;

    /**
     * @var string
     *
     * @ORM\Column(name="ant_deleg", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $antDeleg;

    /**
     * @var string
     *
     * @ORM\Column(name="ant_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $antAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ant_datec", type="datetime", nullable=false)
     */
    private $antDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ant_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $antAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ant_datem", type="datetime", nullable=true)
     */
    private $antDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ant_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $antAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ant_datea", type="datetime", nullable=true)
     */
    private $antDatea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ant_nbsalarie", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $antNbsalarie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ant_nbconseil", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $antNbconseil;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ant_id_tus", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $antIdTus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ant_code_pere_interne_si", type="string", length=20, nullable=true)
     */
    private $antCodePereInterneSi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ant_id_passation", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $antIdPassation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ant_code_insee_commune", type="string", length=5, nullable=true)
     */
    private $antCodeInseeCommune;

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
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ant_etablssmt", referencedColumnName="ets_id")
     * })
     */
    private $antEtablssmt;

    public function getAntId(): ?int
    {
        return $this->antId;
    }

    public function getAntLibelle(): ?string
    {
        return $this->antLibelle;
    }

    public function setAntLibelle(string $antLibelle): self
    {
        $this->antLibelle = $antLibelle;

        return $this;
    }

    public function getAntEtat(): ?string
    {
        return $this->antEtat;
    }

    public function setAntEtat(string $antEtat): self
    {
        $this->antEtat = $antEtat;

        return $this;
    }

    public function getAntDesc(): ?string
    {
        return $this->antDesc;
    }

    public function setAntDesc(?string $antDesc): self
    {
        $this->antDesc = $antDesc;

        return $this;
    }

    public function getAntTelephone(): ?string
    {
        return $this->antTelephone;
    }

    public function setAntTelephone(?string $antTelephone): self
    {
        $this->antTelephone = $antTelephone;

        return $this;
    }

    public function getAntAdrsimmeub(): ?string
    {
        return $this->antAdrsimmeub;
    }

    public function setAntAdrsimmeub(?string $antAdrsimmeub): self
    {
        $this->antAdrsimmeub = $antAdrsimmeub;

        return $this;
    }

    public function getAntNvoie(): ?string
    {
        return $this->antNvoie;
    }

    public function setAntNvoie(?string $antNvoie): self
    {
        $this->antNvoie = $antNvoie;

        return $this;
    }

    public function getAntBister(): ?string
    {
        return $this->antBister;
    }

    public function setAntBister(?string $antBister): self
    {
        $this->antBister = $antBister;

        return $this;
    }

    public function getAntAdr1(): ?string
    {
        return $this->antAdr1;
    }

    public function setAntAdr1(?string $antAdr1): self
    {
        $this->antAdr1 = $antAdr1;

        return $this;
    }

    public function getAntAdr2(): ?string
    {
        return $this->antAdr2;
    }

    public function setAntAdr2(?string $antAdr2): self
    {
        $this->antAdr2 = $antAdr2;

        return $this;
    }

    public function getAntCpostal(): ?string
    {
        return $this->antCpostal;
    }

    public function setAntCpostal(string $antCpostal): self
    {
        $this->antCpostal = $antCpostal;

        return $this;
    }

    public function getAntVille(): ?string
    {
        return $this->antVille;
    }

    public function setAntVille(string $antVille): self
    {
        $this->antVille = $antVille;

        return $this;
    }

    public function getAntPays(): ?string
    {
        return $this->antPays;
    }

    public function setAntPays(string $antPays): self
    {
        $this->antPays = $antPays;

        return $this;
    }

    public function getAntDeleg(): ?string
    {
        return $this->antDeleg;
    }

    public function setAntDeleg(string $antDeleg): self
    {
        $this->antDeleg = $antDeleg;

        return $this;
    }

    public function getAntAuteurc(): ?string
    {
        return $this->antAuteurc;
    }

    public function setAntAuteurc(string $antAuteurc): self
    {
        $this->antAuteurc = $antAuteurc;

        return $this;
    }

    public function getAntDatec(): ?\DateTimeInterface
    {
        return $this->antDatec;
    }

    public function setAntDatec(\DateTimeInterface $antDatec): self
    {
        $this->antDatec = $antDatec;

        return $this;
    }

    public function getAntAuteurm(): ?string
    {
        return $this->antAuteurm;
    }

    public function setAntAuteurm(?string $antAuteurm): self
    {
        $this->antAuteurm = $antAuteurm;

        return $this;
    }

    public function getAntDatem(): ?\DateTimeInterface
    {
        return $this->antDatem;
    }

    public function setAntDatem(?\DateTimeInterface $antDatem): self
    {
        $this->antDatem = $antDatem;

        return $this;
    }

    public function getAntAuteura(): ?string
    {
        return $this->antAuteura;
    }

    public function setAntAuteura(?string $antAuteura): self
    {
        $this->antAuteura = $antAuteura;

        return $this;
    }

    public function getAntDatea(): ?\DateTimeInterface
    {
        return $this->antDatea;
    }

    public function setAntDatea(?\DateTimeInterface $antDatea): self
    {
        $this->antDatea = $antDatea;

        return $this;
    }

    public function getAntNbsalarie(): ?string
    {
        return $this->antNbsalarie;
    }

    public function setAntNbsalarie(?string $antNbsalarie): self
    {
        $this->antNbsalarie = $antNbsalarie;

        return $this;
    }

    public function getAntNbconseil(): ?string
    {
        return $this->antNbconseil;
    }

    public function setAntNbconseil(?string $antNbconseil): self
    {
        $this->antNbconseil = $antNbconseil;

        return $this;
    }

    public function getAntIdTus(): ?string
    {
        return $this->antIdTus;
    }

    public function setAntIdTus(?string $antIdTus): self
    {
        $this->antIdTus = $antIdTus;

        return $this;
    }

    public function getAntCodePereInterneSi(): ?string
    {
        return $this->antCodePereInterneSi;
    }

    public function setAntCodePereInterneSi(?string $antCodePereInterneSi): self
    {
        $this->antCodePereInterneSi = $antCodePereInterneSi;

        return $this;
    }

    public function getAntIdPassation(): ?string
    {
        return $this->antIdPassation;
    }

    public function setAntIdPassation(?string $antIdPassation): self
    {
        $this->antIdPassation = $antIdPassation;

        return $this;
    }

    public function getAntCodeInseeCommune(): ?string
    {
        return $this->antCodeInseeCommune;
    }

    public function setAntCodeInseeCommune(?string $antCodeInseeCommune): self
    {
        $this->antCodeInseeCommune = $antCodeInseeCommune;

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

    public function getAntEtablssmt(): ?Etablssmt
    {
        return $this->antEtablssmt;
    }

    public function setAntEtablssmt(?Etablssmt $antEtablssmt): self
    {
        $this->antEtablssmt = $antEtablssmt;

        return $this;
    }


}
