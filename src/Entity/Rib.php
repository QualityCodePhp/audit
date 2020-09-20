<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rib
 *
 * @ORM\Table(name="rib", uniqueConstraints={@ORM\UniqueConstraint(name="rib_pk", columns={"rib_id"})}, indexes={@ORM\Index(name="rib_eeif", columns={"rib_etablssmt"}), @ORM\Index(name="rib_aaif", columns={"rib_antenne"})})
 * @ORM\Entity
 */
class Rib
{
    /**
     * @var int
     *
     * @ORM\Column(name="rib_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rib_rib_id_seq", allocationSize=1, initialValue=1)
     */
    private $ribId;

    /**
     * @var string
     *
     * @ORM\Column(name="rib_codebanque", type="string", length=6, nullable=false)
     */
    private $ribCodebanque;

    /**
     * @var string
     *
     * @ORM\Column(name="rib_codeguichet", type="string", length=6, nullable=false)
     */
    private $ribCodeguichet;

    /**
     * @var string
     *
     * @ORM\Column(name="rib_numcompte", type="string", length=12, nullable=false)
     */
    private $ribNumcompte;

    /**
     * @var string
     *
     * @ORM\Column(name="rib_clerib", type="string", length=3, nullable=false)
     */
    private $ribClerib;

    /**
     * @var string
     *
     * @ORM\Column(name="rib_titulaire", type="string", length=50, nullable=false)
     */
    private $ribTitulaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rib_banque", type="string", length=30, nullable=true)
     */
    private $ribBanque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rib_numrue", type="string", length=8, nullable=true)
     */
    private $ribNumrue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rib_nomrue", type="string", length=50, nullable=true)
     */
    private $ribNomrue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rib_codepostal", type="string", length=5, nullable=true)
     */
    private $ribCodepostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rib_ville", type="string", length=30, nullable=true)
     */
    private $ribVille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rib_pays", type="string", length=30, nullable=true)
     */
    private $ribPays;

    /**
     * @var string
     *
     * @ORM\Column(name="rib_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $ribAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rib_datec", type="datetime", nullable=false)
     */
    private $ribDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rib_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $ribAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rib_datem", type="datetime", nullable=true)
     */
    private $ribDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rib_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $ribAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rib_datea", type="datetime", nullable=true)
     */
    private $ribDatea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rib_rang", type="decimal", precision=2, scale=0, nullable=true)
     */
    private $ribRang;

    /**
     * @var string
     *
     * @ORM\Column(name="rib_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $ribEtat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rib_frang", type="decimal", precision=2, scale=0, nullable=true, options={"comment"="Reference Coriolis du numero de domiciliation"})
     */
    private $ribFrang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rib_iban_iso_pays", type="string", length=2, nullable=true)
     */
    private $ribIbanIsoPays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rib_iban_cle_controle", type="string", length=2, nullable=true)
     */
    private $ribIbanCleControle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rib_iban_zone_bban", type="string", length=30, nullable=true)
     */
    private $ribIbanZoneBban;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rib_iban_bic", type="string", length=11, nullable=true)
     */
    private $ribIbanBic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rib_iban_titulaire", type="string", length=50, nullable=true)
     */
    private $ribIbanTitulaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rib_iban_domiciliation", type="string", length=30, nullable=true)
     */
    private $ribIbanDomiciliation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rib_flg_est_rib", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $ribFlgEstRib;

    /**
     * @var \Antenne
     *
     * @ORM\ManyToOne(targetEntity="Antenne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rib_antenne", referencedColumnName="ant_id")
     * })
     */
    private $ribAntenne;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rib_etablssmt", referencedColumnName="ets_id")
     * })
     */
    private $ribEtablssmt;

    public function getRibId(): ?int
    {
        return $this->ribId;
    }

    public function getRibCodebanque(): ?string
    {
        return $this->ribCodebanque;
    }

    public function setRibCodebanque(string $ribCodebanque): self
    {
        $this->ribCodebanque = $ribCodebanque;

        return $this;
    }

    public function getRibCodeguichet(): ?string
    {
        return $this->ribCodeguichet;
    }

    public function setRibCodeguichet(string $ribCodeguichet): self
    {
        $this->ribCodeguichet = $ribCodeguichet;

        return $this;
    }

    public function getRibNumcompte(): ?string
    {
        return $this->ribNumcompte;
    }

    public function setRibNumcompte(string $ribNumcompte): self
    {
        $this->ribNumcompte = $ribNumcompte;

        return $this;
    }

    public function getRibClerib(): ?string
    {
        return $this->ribClerib;
    }

    public function setRibClerib(string $ribClerib): self
    {
        $this->ribClerib = $ribClerib;

        return $this;
    }

    public function getRibTitulaire(): ?string
    {
        return $this->ribTitulaire;
    }

    public function setRibTitulaire(string $ribTitulaire): self
    {
        $this->ribTitulaire = $ribTitulaire;

        return $this;
    }

    public function getRibBanque(): ?string
    {
        return $this->ribBanque;
    }

    public function setRibBanque(?string $ribBanque): self
    {
        $this->ribBanque = $ribBanque;

        return $this;
    }

    public function getRibNumrue(): ?string
    {
        return $this->ribNumrue;
    }

    public function setRibNumrue(?string $ribNumrue): self
    {
        $this->ribNumrue = $ribNumrue;

        return $this;
    }

    public function getRibNomrue(): ?string
    {
        return $this->ribNomrue;
    }

    public function setRibNomrue(?string $ribNomrue): self
    {
        $this->ribNomrue = $ribNomrue;

        return $this;
    }

    public function getRibCodepostal(): ?string
    {
        return $this->ribCodepostal;
    }

    public function setRibCodepostal(?string $ribCodepostal): self
    {
        $this->ribCodepostal = $ribCodepostal;

        return $this;
    }

    public function getRibVille(): ?string
    {
        return $this->ribVille;
    }

    public function setRibVille(?string $ribVille): self
    {
        $this->ribVille = $ribVille;

        return $this;
    }

    public function getRibPays(): ?string
    {
        return $this->ribPays;
    }

    public function setRibPays(?string $ribPays): self
    {
        $this->ribPays = $ribPays;

        return $this;
    }

    public function getRibAuteurc(): ?string
    {
        return $this->ribAuteurc;
    }

    public function setRibAuteurc(string $ribAuteurc): self
    {
        $this->ribAuteurc = $ribAuteurc;

        return $this;
    }

    public function getRibDatec(): ?\DateTimeInterface
    {
        return $this->ribDatec;
    }

    public function setRibDatec(\DateTimeInterface $ribDatec): self
    {
        $this->ribDatec = $ribDatec;

        return $this;
    }

    public function getRibAuteurm(): ?string
    {
        return $this->ribAuteurm;
    }

    public function setRibAuteurm(?string $ribAuteurm): self
    {
        $this->ribAuteurm = $ribAuteurm;

        return $this;
    }

    public function getRibDatem(): ?\DateTimeInterface
    {
        return $this->ribDatem;
    }

    public function setRibDatem(?\DateTimeInterface $ribDatem): self
    {
        $this->ribDatem = $ribDatem;

        return $this;
    }

    public function getRibAuteura(): ?string
    {
        return $this->ribAuteura;
    }

    public function setRibAuteura(?string $ribAuteura): self
    {
        $this->ribAuteura = $ribAuteura;

        return $this;
    }

    public function getRibDatea(): ?\DateTimeInterface
    {
        return $this->ribDatea;
    }

    public function setRibDatea(?\DateTimeInterface $ribDatea): self
    {
        $this->ribDatea = $ribDatea;

        return $this;
    }

    public function getRibRang(): ?string
    {
        return $this->ribRang;
    }

    public function setRibRang(?string $ribRang): self
    {
        $this->ribRang = $ribRang;

        return $this;
    }

    public function getRibEtat(): ?string
    {
        return $this->ribEtat;
    }

    public function setRibEtat(string $ribEtat): self
    {
        $this->ribEtat = $ribEtat;

        return $this;
    }

    public function getRibFrang(): ?string
    {
        return $this->ribFrang;
    }

    public function setRibFrang(?string $ribFrang): self
    {
        $this->ribFrang = $ribFrang;

        return $this;
    }

    public function getRibIbanIsoPays(): ?string
    {
        return $this->ribIbanIsoPays;
    }

    public function setRibIbanIsoPays(?string $ribIbanIsoPays): self
    {
        $this->ribIbanIsoPays = $ribIbanIsoPays;

        return $this;
    }

    public function getRibIbanCleControle(): ?string
    {
        return $this->ribIbanCleControle;
    }

    public function setRibIbanCleControle(?string $ribIbanCleControle): self
    {
        $this->ribIbanCleControle = $ribIbanCleControle;

        return $this;
    }

    public function getRibIbanZoneBban(): ?string
    {
        return $this->ribIbanZoneBban;
    }

    public function setRibIbanZoneBban(?string $ribIbanZoneBban): self
    {
        $this->ribIbanZoneBban = $ribIbanZoneBban;

        return $this;
    }

    public function getRibIbanBic(): ?string
    {
        return $this->ribIbanBic;
    }

    public function setRibIbanBic(?string $ribIbanBic): self
    {
        $this->ribIbanBic = $ribIbanBic;

        return $this;
    }

    public function getRibIbanTitulaire(): ?string
    {
        return $this->ribIbanTitulaire;
    }

    public function setRibIbanTitulaire(?string $ribIbanTitulaire): self
    {
        $this->ribIbanTitulaire = $ribIbanTitulaire;

        return $this;
    }

    public function getRibIbanDomiciliation(): ?string
    {
        return $this->ribIbanDomiciliation;
    }

    public function setRibIbanDomiciliation(?string $ribIbanDomiciliation): self
    {
        $this->ribIbanDomiciliation = $ribIbanDomiciliation;

        return $this;
    }

    public function getRibFlgEstRib(): ?string
    {
        return $this->ribFlgEstRib;
    }

    public function setRibFlgEstRib(?string $ribFlgEstRib): self
    {
        $this->ribFlgEstRib = $ribFlgEstRib;

        return $this;
    }

    public function getRibAntenne(): ?Antenne
    {
        return $this->ribAntenne;
    }

    public function setRibAntenne(?Antenne $ribAntenne): self
    {
        $this->ribAntenne = $ribAntenne;

        return $this;
    }

    public function getRibEtablssmt(): ?Etablssmt
    {
        return $this->ribEtablssmt;
    }

    public function setRibEtablssmt(?Etablssmt $ribEtablssmt): self
    {
        $this->ribEtablssmt = $ribEtablssmt;

        return $this;
    }


}
