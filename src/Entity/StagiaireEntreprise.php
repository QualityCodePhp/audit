<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StagiaireEntreprise
 *
 * @ORM\Table(name="stagiaire_entreprise", uniqueConstraints={@ORM\UniqueConstraint(name="stagiaire_entreprise_pk", columns={"stge_id"})}, indexes={@ORM\Index(name="adr_stge_fk", columns={"adr_id"}), @ORM\Index(name="stg_stge_fk", columns={"stg_id"}), @ORM\Index(name="a_pour_type_stge_fk", columns={"ref_id_type"})})
 * @ORM\Entity
 */
class StagiaireEntreprise
{
    /**
     * @var string
     *
     * @ORM\Column(name="stge_id", type="decimal", precision=8, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="stagiaire_entreprise_stge_id_seq", allocationSize=1, initialValue=1)
     */
    private $stgeId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stge_nom", type="string", length=100, nullable=true)
     */
    private $stgeNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stge_siret", type="string", length=14, nullable=true)
     */
    private $stgeSiret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stge_numvoie", type="string", length=7, nullable=true)
     */
    private $stgeNumvoie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stge_bistere", type="string", length=1, nullable=true)
     */
    private $stgeBistere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stge_nomvoie", type="string", length=100, nullable=true)
     */
    private $stgeNomvoie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stge_adr1", type="string", length=100, nullable=true)
     */
    private $stgeAdr1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stge_cpostal", type="string", length=5, nullable=true)
     */
    private $stgeCpostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stge_ville", type="string", length=100, nullable=true)
     */
    private $stgeVille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stge_pays", type="string", length=100, nullable=true)
     */
    private $stgePays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stge_poste_occupe", type="string", length=100, nullable=true)
     */
    private $stgePosteOccupe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stge_tuteur_nom", type="string", length=100, nullable=true)
     */
    private $stgeTuteurNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stge_tuteur_mail", type="string", length=100, nullable=true)
     */
    private $stgeTuteurMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stge_tuteur_tel", type="string", length=10, nullable=true)
     */
    private $stgeTuteurTel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stge_code_naf", type="string", length=6, nullable=true)
     */
    private $stgeCodeNaf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stge_adr2", type="string", length=100, nullable=true)
     */
    private $stgeAdr2;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="stge_date_deb", type="datetime", nullable=true)
     */
    private $stgeDateDeb;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="stge_date_fin", type="datetime", nullable=true)
     */
    private $stgeDateFin;

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
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_type", referencedColumnName="ref_id")
     * })
     */
    private $refIdType;

    /**
     * @var \Stagiaire
     *
     * @ORM\ManyToOne(targetEntity="Stagiaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stg_id", referencedColumnName="stg_id")
     * })
     */
    private $stg;

    public function getStgeId(): ?string
    {
        return $this->stgeId;
    }

    public function getStgeNom(): ?string
    {
        return $this->stgeNom;
    }

    public function setStgeNom(?string $stgeNom): self
    {
        $this->stgeNom = $stgeNom;

        return $this;
    }

    public function getStgeSiret(): ?string
    {
        return $this->stgeSiret;
    }

    public function setStgeSiret(?string $stgeSiret): self
    {
        $this->stgeSiret = $stgeSiret;

        return $this;
    }

    public function getStgeNumvoie(): ?string
    {
        return $this->stgeNumvoie;
    }

    public function setStgeNumvoie(?string $stgeNumvoie): self
    {
        $this->stgeNumvoie = $stgeNumvoie;

        return $this;
    }

    public function getStgeBistere(): ?string
    {
        return $this->stgeBistere;
    }

    public function setStgeBistere(?string $stgeBistere): self
    {
        $this->stgeBistere = $stgeBistere;

        return $this;
    }

    public function getStgeNomvoie(): ?string
    {
        return $this->stgeNomvoie;
    }

    public function setStgeNomvoie(?string $stgeNomvoie): self
    {
        $this->stgeNomvoie = $stgeNomvoie;

        return $this;
    }

    public function getStgeAdr1(): ?string
    {
        return $this->stgeAdr1;
    }

    public function setStgeAdr1(?string $stgeAdr1): self
    {
        $this->stgeAdr1 = $stgeAdr1;

        return $this;
    }

    public function getStgeCpostal(): ?string
    {
        return $this->stgeCpostal;
    }

    public function setStgeCpostal(?string $stgeCpostal): self
    {
        $this->stgeCpostal = $stgeCpostal;

        return $this;
    }

    public function getStgeVille(): ?string
    {
        return $this->stgeVille;
    }

    public function setStgeVille(?string $stgeVille): self
    {
        $this->stgeVille = $stgeVille;

        return $this;
    }

    public function getStgePays(): ?string
    {
        return $this->stgePays;
    }

    public function setStgePays(?string $stgePays): self
    {
        $this->stgePays = $stgePays;

        return $this;
    }

    public function getStgePosteOccupe(): ?string
    {
        return $this->stgePosteOccupe;
    }

    public function setStgePosteOccupe(?string $stgePosteOccupe): self
    {
        $this->stgePosteOccupe = $stgePosteOccupe;

        return $this;
    }

    public function getStgeTuteurNom(): ?string
    {
        return $this->stgeTuteurNom;
    }

    public function setStgeTuteurNom(?string $stgeTuteurNom): self
    {
        $this->stgeTuteurNom = $stgeTuteurNom;

        return $this;
    }

    public function getStgeTuteurMail(): ?string
    {
        return $this->stgeTuteurMail;
    }

    public function setStgeTuteurMail(?string $stgeTuteurMail): self
    {
        $this->stgeTuteurMail = $stgeTuteurMail;

        return $this;
    }

    public function getStgeTuteurTel(): ?string
    {
        return $this->stgeTuteurTel;
    }

    public function setStgeTuteurTel(?string $stgeTuteurTel): self
    {
        $this->stgeTuteurTel = $stgeTuteurTel;

        return $this;
    }

    public function getStgeCodeNaf(): ?string
    {
        return $this->stgeCodeNaf;
    }

    public function setStgeCodeNaf(?string $stgeCodeNaf): self
    {
        $this->stgeCodeNaf = $stgeCodeNaf;

        return $this;
    }

    public function getStgeAdr2(): ?string
    {
        return $this->stgeAdr2;
    }

    public function setStgeAdr2(?string $stgeAdr2): self
    {
        $this->stgeAdr2 = $stgeAdr2;

        return $this;
    }

    public function getStgeDateDeb(): ?\DateTimeInterface
    {
        return $this->stgeDateDeb;
    }

    public function setStgeDateDeb(?\DateTimeInterface $stgeDateDeb): self
    {
        $this->stgeDateDeb = $stgeDateDeb;

        return $this;
    }

    public function getStgeDateFin(): ?\DateTimeInterface
    {
        return $this->stgeDateFin;
    }

    public function setStgeDateFin(?\DateTimeInterface $stgeDateFin): self
    {
        $this->stgeDateFin = $stgeDateFin;

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

    public function getRefIdType(): ?Referentiel
    {
        return $this->refIdType;
    }

    public function setRefIdType(?Referentiel $refIdType): self
    {
        $this->refIdType = $refIdType;

        return $this;
    }

    public function getStg(): ?Stagiaire
    {
        return $this->stg;
    }

    public function setStg(?Stagiaire $stg): self
    {
        $this->stg = $stg;

        return $this;
    }


}
