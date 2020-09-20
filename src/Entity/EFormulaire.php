<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EFormulaire
 *
 * @ORM\Table(name="e_formulaire", uniqueConstraints={@ORM\UniqueConstraint(name="e_formulaire_pk", columns={"etf_id"})}, indexes={@ORM\Index(name="e_formulaire_ddif", columns={"etf_dispo"}), @ORM\Index(name="e_formulaire_uuif", columns={"etf_auteurv"})})
 * @ORM\Entity
 */
class EFormulaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="etf_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_formulaire_etf_id_seq", allocationSize=1, initialValue=1)
     */
    private $etfId;

    /**
     * @var string
     *
     * @ORM\Column(name="etf_code", type="string", length=10, nullable=false)
     */
    private $etfCode;

    /**
     * @var string
     *
     * @ORM\Column(name="etf_libelle", type="string", length=50, nullable=false)
     */
    private $etfLibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etf_etat", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $etfEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="etf_prest", type="decimal", precision=1, scale=0, nullable=false, options={"comment"="0 = Formulaire autre, 1 = Formulaire Ets Prestataire"})
     */
    private $etfPrest;

    /**
     * @var string
     *
     * @ORM\Column(name="etf_titulaire", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $etfTitulaire;

    /**
     * @var string
     *
     * @ORM\Column(name="etf_sstrait", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $etfSstrait;

    /**
     * @var string
     *
     * @ORM\Column(name="etf_cotrait", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $etfCotrait;

    /**
     * @var string
     *
     * @ORM\Column(name="etf_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $etfAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="etf_datec", type="datetime", nullable=false)
     */
    private $etfDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etf_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $etfAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="etf_datem", type="datetime", nullable=true)
     */
    private $etfDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etf_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $etfAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="etf_datea", type="datetime", nullable=true)
     */
    private $etfDatea;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="etf_datev", type="datetime", nullable=true)
     */
    private $etfDatev;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="etf_auteurv", referencedColumnName="uti_id")
     * })
     */
    private $etfAuteurv;

    /**
     * @var \Dispositif
     *
     * @ORM\ManyToOne(targetEntity="Dispositif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="etf_dispo", referencedColumnName="dsp_id")
     * })
     */
    private $etfDispo;

    public function getEtfId(): ?int
    {
        return $this->etfId;
    }

    public function getEtfCode(): ?string
    {
        return $this->etfCode;
    }

    public function setEtfCode(string $etfCode): self
    {
        $this->etfCode = $etfCode;

        return $this;
    }

    public function getEtfLibelle(): ?string
    {
        return $this->etfLibelle;
    }

    public function setEtfLibelle(string $etfLibelle): self
    {
        $this->etfLibelle = $etfLibelle;

        return $this;
    }

    public function getEtfEtat(): ?string
    {
        return $this->etfEtat;
    }

    public function setEtfEtat(?string $etfEtat): self
    {
        $this->etfEtat = $etfEtat;

        return $this;
    }

    public function getEtfPrest(): ?string
    {
        return $this->etfPrest;
    }

    public function setEtfPrest(string $etfPrest): self
    {
        $this->etfPrest = $etfPrest;

        return $this;
    }

    public function getEtfTitulaire(): ?string
    {
        return $this->etfTitulaire;
    }

    public function setEtfTitulaire(string $etfTitulaire): self
    {
        $this->etfTitulaire = $etfTitulaire;

        return $this;
    }

    public function getEtfSstrait(): ?string
    {
        return $this->etfSstrait;
    }

    public function setEtfSstrait(string $etfSstrait): self
    {
        $this->etfSstrait = $etfSstrait;

        return $this;
    }

    public function getEtfCotrait(): ?string
    {
        return $this->etfCotrait;
    }

    public function setEtfCotrait(string $etfCotrait): self
    {
        $this->etfCotrait = $etfCotrait;

        return $this;
    }

    public function getEtfAuteurc(): ?string
    {
        return $this->etfAuteurc;
    }

    public function setEtfAuteurc(string $etfAuteurc): self
    {
        $this->etfAuteurc = $etfAuteurc;

        return $this;
    }

    public function getEtfDatec(): ?\DateTimeInterface
    {
        return $this->etfDatec;
    }

    public function setEtfDatec(\DateTimeInterface $etfDatec): self
    {
        $this->etfDatec = $etfDatec;

        return $this;
    }

    public function getEtfAuteurm(): ?string
    {
        return $this->etfAuteurm;
    }

    public function setEtfAuteurm(?string $etfAuteurm): self
    {
        $this->etfAuteurm = $etfAuteurm;

        return $this;
    }

    public function getEtfDatem(): ?\DateTimeInterface
    {
        return $this->etfDatem;
    }

    public function setEtfDatem(?\DateTimeInterface $etfDatem): self
    {
        $this->etfDatem = $etfDatem;

        return $this;
    }

    public function getEtfAuteura(): ?string
    {
        return $this->etfAuteura;
    }

    public function setEtfAuteura(?string $etfAuteura): self
    {
        $this->etfAuteura = $etfAuteura;

        return $this;
    }

    public function getEtfDatea(): ?\DateTimeInterface
    {
        return $this->etfDatea;
    }

    public function setEtfDatea(?\DateTimeInterface $etfDatea): self
    {
        $this->etfDatea = $etfDatea;

        return $this;
    }

    public function getEtfDatev(): ?\DateTimeInterface
    {
        return $this->etfDatev;
    }

    public function setEtfDatev(?\DateTimeInterface $etfDatev): self
    {
        $this->etfDatev = $etfDatev;

        return $this;
    }

    public function getEtfAuteurv(): ?Utilisateur
    {
        return $this->etfAuteurv;
    }

    public function setEtfAuteurv(?Utilisateur $etfAuteurv): self
    {
        $this->etfAuteurv = $etfAuteurv;

        return $this;
    }

    public function getEtfDispo(): ?Dispositif
    {
        return $this->etfDispo;
    }

    public function setEtfDispo(?Dispositif $etfDispo): self
    {
        $this->etfDispo = $etfDispo;

        return $this;
    }


}
