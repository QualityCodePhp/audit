<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Individu
 *
 * @ORM\Table(name="individu", uniqueConstraints={@ORM\UniqueConstraint(name="individu_pk", columns={"ind_id"})}, indexes={@ORM\Index(name="adr_ind_fk", columns={"adr_id"}), @ORM\Index(name="ind_utim_fk", columns={"uti_idc"}), @ORM\Index(name="ind_utic_fk", columns={"uti_idm"}), @ORM\Index(name="ind_civ_fk", columns={"civ_id"})})
 * @ORM\Entity
 */
class Individu
{
    /**
     * @var string
     *
     * @ORM\Column(name="ind_id", type="decimal", precision=8, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="individu_ind_id_seq", allocationSize=1, initialValue=1)
     */
    private $indId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ind_nom", type="string", length=50, nullable=true)
     */
    private $indNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ind_prenom", type="string", length=50, nullable=true)
     */
    private $indPrenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ind_sexe", type="string", length=1, nullable=true)
     */
    private $indSexe;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ind_datenaiss", type="datetime", nullable=true)
     */
    private $indDatenaiss;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ind_numvoie", type="string", length=7, nullable=true)
     */
    private $indNumvoie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ind_bister", type="string", length=1, nullable=true)
     */
    private $indBister;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ind_nomvoie", type="string", length=50, nullable=true)
     */
    private $indNomvoie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ind_adr1", type="string", length=100, nullable=true)
     */
    private $indAdr1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ind_adr2", type="string", length=100, nullable=true)
     */
    private $indAdr2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ind_cpostal", type="string", length=5, nullable=true)
     */
    private $indCpostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ind_ville", type="string", length=32, nullable=true)
     */
    private $indVille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ind_pays", type="string", length=38, nullable=true)
     */
    private $indPays;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ind_datec", type="date", nullable=true)
     */
    private $indDatec;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ind_datem", type="date", nullable=true)
     */
    private $indDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ind_flg_suppr", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $indFlgSuppr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ind_pr_numero", type="string", length=10, nullable=true)
     */
    private $indPrNumero;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ind_num_nir", type="string", length=13, nullable=true)
     */
    private $indNumNir;

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
     * @var \Civilite
     *
     * @ORM\ManyToOne(targetEntity="Civilite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="civ_id", referencedColumnName="civ_id")
     * })
     */
    private $civ;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uti_idm", referencedColumnName="uti_id")
     * })
     */
    private $utiIdm;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uti_idc", referencedColumnName="uti_id")
     * })
     */
    private $utiIdc;

    public function getIndId(): ?string
    {
        return $this->indId;
    }

    public function getIndNom(): ?string
    {
        return $this->indNom;
    }

    public function setIndNom(?string $indNom): self
    {
        $this->indNom = $indNom;

        return $this;
    }

    public function getIndPrenom(): ?string
    {
        return $this->indPrenom;
    }

    public function setIndPrenom(?string $indPrenom): self
    {
        $this->indPrenom = $indPrenom;

        return $this;
    }

    public function getIndSexe(): ?string
    {
        return $this->indSexe;
    }

    public function setIndSexe(?string $indSexe): self
    {
        $this->indSexe = $indSexe;

        return $this;
    }

    public function getIndDatenaiss(): ?\DateTimeInterface
    {
        return $this->indDatenaiss;
    }

    public function setIndDatenaiss(?\DateTimeInterface $indDatenaiss): self
    {
        $this->indDatenaiss = $indDatenaiss;

        return $this;
    }

    public function getIndNumvoie(): ?string
    {
        return $this->indNumvoie;
    }

    public function setIndNumvoie(?string $indNumvoie): self
    {
        $this->indNumvoie = $indNumvoie;

        return $this;
    }

    public function getIndBister(): ?string
    {
        return $this->indBister;
    }

    public function setIndBister(?string $indBister): self
    {
        $this->indBister = $indBister;

        return $this;
    }

    public function getIndNomvoie(): ?string
    {
        return $this->indNomvoie;
    }

    public function setIndNomvoie(?string $indNomvoie): self
    {
        $this->indNomvoie = $indNomvoie;

        return $this;
    }

    public function getIndAdr1(): ?string
    {
        return $this->indAdr1;
    }

    public function setIndAdr1(?string $indAdr1): self
    {
        $this->indAdr1 = $indAdr1;

        return $this;
    }

    public function getIndAdr2(): ?string
    {
        return $this->indAdr2;
    }

    public function setIndAdr2(?string $indAdr2): self
    {
        $this->indAdr2 = $indAdr2;

        return $this;
    }

    public function getIndCpostal(): ?string
    {
        return $this->indCpostal;
    }

    public function setIndCpostal(?string $indCpostal): self
    {
        $this->indCpostal = $indCpostal;

        return $this;
    }

    public function getIndVille(): ?string
    {
        return $this->indVille;
    }

    public function setIndVille(?string $indVille): self
    {
        $this->indVille = $indVille;

        return $this;
    }

    public function getIndPays(): ?string
    {
        return $this->indPays;
    }

    public function setIndPays(?string $indPays): self
    {
        $this->indPays = $indPays;

        return $this;
    }

    public function getIndDatec(): ?\DateTimeInterface
    {
        return $this->indDatec;
    }

    public function setIndDatec(?\DateTimeInterface $indDatec): self
    {
        $this->indDatec = $indDatec;

        return $this;
    }

    public function getIndDatem(): ?\DateTimeInterface
    {
        return $this->indDatem;
    }

    public function setIndDatem(?\DateTimeInterface $indDatem): self
    {
        $this->indDatem = $indDatem;

        return $this;
    }

    public function getIndFlgSuppr(): ?string
    {
        return $this->indFlgSuppr;
    }

    public function setIndFlgSuppr(?string $indFlgSuppr): self
    {
        $this->indFlgSuppr = $indFlgSuppr;

        return $this;
    }

    public function getIndPrNumero(): ?string
    {
        return $this->indPrNumero;
    }

    public function setIndPrNumero(?string $indPrNumero): self
    {
        $this->indPrNumero = $indPrNumero;

        return $this;
    }

    public function getIndNumNir(): ?string
    {
        return $this->indNumNir;
    }

    public function setIndNumNir(?string $indNumNir): self
    {
        $this->indNumNir = $indNumNir;

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

    public function getCiv(): ?Civilite
    {
        return $this->civ;
    }

    public function setCiv(?Civilite $civ): self
    {
        $this->civ = $civ;

        return $this;
    }

    public function getUtiIdm(): ?Utilisateur
    {
        return $this->utiIdm;
    }

    public function setUtiIdm(?Utilisateur $utiIdm): self
    {
        $this->utiIdm = $utiIdm;

        return $this;
    }

    public function getUtiIdc(): ?Utilisateur
    {
        return $this->utiIdc;
    }

    public function setUtiIdc(?Utilisateur $utiIdc): self
    {
        $this->utiIdc = $utiIdc;

        return $this;
    }


}
