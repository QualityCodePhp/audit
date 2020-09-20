<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EBormodaf
 *
 * @ORM\Table(name="e_bormodaf", uniqueConstraints={@ORM\UniqueConstraint(name="e_bormodaf_pk", columns={"etb_id"})}, indexes={@ORM\Index(name="e_bormodaf_uuif", columns={"etb_auteurv"}), @ORM\Index(name="e_bormodaf_mamif", columns={"etb_modaf"})})
 * @ORM\Entity
 */
class EBormodaf
{
    /**
     * @var int
     *
     * @ORM\Column(name="etb_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_bormodaf_etb_id_seq", allocationSize=1, initialValue=1)
     */
    private $etbId;

    /**
     * @var string
     *
     * @ORM\Column(name="etb_code", type="string", length=4, nullable=false)
     */
    private $etbCode;

    /**
     * @var string
     *
     * @ORM\Column(name="etb_libelle", type="string", length=50, nullable=false)
     */
    private $etbLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="etb_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $etbEtat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="etb_datev", type="datetime", nullable=true)
     */
    private $etbDatev;

    /**
     * @var string
     *
     * @ORM\Column(name="etb_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $etbAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="etb_datec", type="datetime", nullable=false)
     */
    private $etbDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etb_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $etbAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="etb_datem", type="datetime", nullable=true)
     */
    private $etbDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etb_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $etbAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="etb_datea", type="datetime", nullable=true)
     */
    private $etbDatea;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="etb_auteurv", referencedColumnName="uti_id")
     * })
     */
    private $etbAuteurv;

    /**
     * @var \ModeleAf
     *
     * @ORM\ManyToOne(targetEntity="ModeleAf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="etb_modaf", referencedColumnName="maf_id")
     * })
     */
    private $etbModaf;

    public function getEtbId(): ?int
    {
        return $this->etbId;
    }

    public function getEtbCode(): ?string
    {
        return $this->etbCode;
    }

    public function setEtbCode(string $etbCode): self
    {
        $this->etbCode = $etbCode;

        return $this;
    }

    public function getEtbLibelle(): ?string
    {
        return $this->etbLibelle;
    }

    public function setEtbLibelle(string $etbLibelle): self
    {
        $this->etbLibelle = $etbLibelle;

        return $this;
    }

    public function getEtbEtat(): ?string
    {
        return $this->etbEtat;
    }

    public function setEtbEtat(string $etbEtat): self
    {
        $this->etbEtat = $etbEtat;

        return $this;
    }

    public function getEtbDatev(): ?\DateTimeInterface
    {
        return $this->etbDatev;
    }

    public function setEtbDatev(?\DateTimeInterface $etbDatev): self
    {
        $this->etbDatev = $etbDatev;

        return $this;
    }

    public function getEtbAuteurc(): ?string
    {
        return $this->etbAuteurc;
    }

    public function setEtbAuteurc(string $etbAuteurc): self
    {
        $this->etbAuteurc = $etbAuteurc;

        return $this;
    }

    public function getEtbDatec(): ?\DateTimeInterface
    {
        return $this->etbDatec;
    }

    public function setEtbDatec(\DateTimeInterface $etbDatec): self
    {
        $this->etbDatec = $etbDatec;

        return $this;
    }

    public function getEtbAuteurm(): ?string
    {
        return $this->etbAuteurm;
    }

    public function setEtbAuteurm(?string $etbAuteurm): self
    {
        $this->etbAuteurm = $etbAuteurm;

        return $this;
    }

    public function getEtbDatem(): ?\DateTimeInterface
    {
        return $this->etbDatem;
    }

    public function setEtbDatem(?\DateTimeInterface $etbDatem): self
    {
        $this->etbDatem = $etbDatem;

        return $this;
    }

    public function getEtbAuteura(): ?string
    {
        return $this->etbAuteura;
    }

    public function setEtbAuteura(?string $etbAuteura): self
    {
        $this->etbAuteura = $etbAuteura;

        return $this;
    }

    public function getEtbDatea(): ?\DateTimeInterface
    {
        return $this->etbDatea;
    }

    public function setEtbDatea(?\DateTimeInterface $etbDatea): self
    {
        $this->etbDatea = $etbDatea;

        return $this;
    }

    public function getEtbAuteurv(): ?Utilisateur
    {
        return $this->etbAuteurv;
    }

    public function setEtbAuteurv(?Utilisateur $etbAuteurv): self
    {
        $this->etbAuteurv = $etbAuteurv;

        return $this;
    }

    public function getEtbModaf(): ?ModeleAf
    {
        return $this->etbModaf;
    }

    public function setEtbModaf(?ModeleAf $etbModaf): self
    {
        $this->etbModaf = $etbModaf;

        return $this;
    }


}
