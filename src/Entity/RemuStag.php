<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RemuStag
 *
 * @ORM\Table(name="remu_stag", uniqueConstraints={@ORM\UniqueConstraint(name="remu_stag_pk", columns={"rst_id"})}, indexes={@ORM\Index(name="remu_stag_rst_af___af_afo_id_fk", columns={"rst_af"}), @ORM\Index(name="remu_ssif", columns={"rst_stagiaire"})})
 * @ORM\Entity
 */
class RemuStag
{
    /**
     * @var string
     *
     * @ORM\Column(name="rst_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="remu_stag_rst_id_seq", allocationSize=1, initialValue=1)
     */
    private $rstId;

    /**
     * @var string
     *
     * @ORM\Column(name="rst_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $rstEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="rst_mois", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $rstMois;

    /**
     * @var string
     *
     * @ORM\Column(name="rst_annee", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $rstAnnee;

    /**
     * @var string
     *
     * @ORM\Column(name="rst_nbhremu", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $rstNbhremu;

    /**
     * @var string
     *
     * @ORM\Column(name="rst_mntremu", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $rstMntremu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rst_mntfse", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $rstMntfse;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rst_datedimp", type="datetime", nullable=true)
     */
    private $rstDatedimp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rst_cotsoc", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $rstCotsoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rst_transport", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $rstTransport;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rst_heberg", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $rstHeberg;

    /**
     * @var \Af
     *
     * @ORM\ManyToOne(targetEntity="Af")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rst_af", referencedColumnName="afo_id")
     * })
     */
    private $rstAf;

    /**
     * @var \Stagiaire
     *
     * @ORM\ManyToOne(targetEntity="Stagiaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rst_stagiaire", referencedColumnName="stg_id")
     * })
     */
    private $rstStagiaire;

    public function getRstId(): ?string
    {
        return $this->rstId;
    }

    public function getRstEtat(): ?string
    {
        return $this->rstEtat;
    }

    public function setRstEtat(string $rstEtat): self
    {
        $this->rstEtat = $rstEtat;

        return $this;
    }

    public function getRstMois(): ?string
    {
        return $this->rstMois;
    }

    public function setRstMois(string $rstMois): self
    {
        $this->rstMois = $rstMois;

        return $this;
    }

    public function getRstAnnee(): ?string
    {
        return $this->rstAnnee;
    }

    public function setRstAnnee(string $rstAnnee): self
    {
        $this->rstAnnee = $rstAnnee;

        return $this;
    }

    public function getRstNbhremu(): ?string
    {
        return $this->rstNbhremu;
    }

    public function setRstNbhremu(string $rstNbhremu): self
    {
        $this->rstNbhremu = $rstNbhremu;

        return $this;
    }

    public function getRstMntremu(): ?string
    {
        return $this->rstMntremu;
    }

    public function setRstMntremu(string $rstMntremu): self
    {
        $this->rstMntremu = $rstMntremu;

        return $this;
    }

    public function getRstMntfse(): ?string
    {
        return $this->rstMntfse;
    }

    public function setRstMntfse(?string $rstMntfse): self
    {
        $this->rstMntfse = $rstMntfse;

        return $this;
    }

    public function getRstDatedimp(): ?\DateTimeInterface
    {
        return $this->rstDatedimp;
    }

    public function setRstDatedimp(?\DateTimeInterface $rstDatedimp): self
    {
        $this->rstDatedimp = $rstDatedimp;

        return $this;
    }

    public function getRstCotsoc(): ?string
    {
        return $this->rstCotsoc;
    }

    public function setRstCotsoc(?string $rstCotsoc): self
    {
        $this->rstCotsoc = $rstCotsoc;

        return $this;
    }

    public function getRstTransport(): ?string
    {
        return $this->rstTransport;
    }

    public function setRstTransport(?string $rstTransport): self
    {
        $this->rstTransport = $rstTransport;

        return $this;
    }

    public function getRstHeberg(): ?string
    {
        return $this->rstHeberg;
    }

    public function setRstHeberg(?string $rstHeberg): self
    {
        $this->rstHeberg = $rstHeberg;

        return $this;
    }

    public function getRstAf(): ?Af
    {
        return $this->rstAf;
    }

    public function setRstAf(?Af $rstAf): self
    {
        $this->rstAf = $rstAf;

        return $this;
    }

    public function getRstStagiaire(): ?Stagiaire
    {
        return $this->rstStagiaire;
    }

    public function setRstStagiaire(?Stagiaire $rstStagiaire): self
    {
        $this->rstStagiaire = $rstStagiaire;

        return $this;
    }


}
