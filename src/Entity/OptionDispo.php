<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OptionDispo
 *
 * @ORM\Table(name="option_dispo", uniqueConstraints={@ORM\UniqueConstraint(name="option_dispo_pk", columns={"opd_id"})}, indexes={@ORM\Index(name="option_dispo8ddif", columns={"opd_dispo"}), @ORM\Index(name="option_dispo_cocif", columns={"opd_optiond"})})
 * @ORM\Entity
 */
class OptionDispo
{
    /**
     * @var string
     *
     * @ORM\Column(name="opd_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="option_dispo_opd_id_seq", allocationSize=1, initialValue=1)
     */
    private $opdId;

    /**
     * @var string
     *
     * @ORM\Column(name="opd_table", type="string", length=12, nullable=false)
     */
    private $opdTable;

    /**
     * @var string
     *
     * @ORM\Column(name="opd_rang", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $opdRang;

    /**
     * @var string
     *
     * @ORM\Column(name="opd_libelle", type="string", length=50, nullable=false)
     */
    private $opdLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="opd_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $opdEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="opd_oblig", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $opdOblig;

    /**
     * @var string
     *
     * @ORM\Column(name="opd_longmin", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $opdLongmin;

    /**
     * @var string
     *
     * @ORM\Column(name="opd_longmax", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $opdLongmax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="opd_comment", type="string", length=300, nullable=true)
     */
    private $opdComment;

    /**
     * @var string
     *
     * @ORM\Column(name="opd_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $opdAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="opd_datec", type="datetime", nullable=false)
     */
    private $opdDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="opd_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $opdAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="opd_datem", type="datetime", nullable=true)
     */
    private $opdDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="opd_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $opdAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="opd_datea", type="datetime", nullable=true)
     */
    private $opdDatea;

    /**
     * @var \Dispositif
     *
     * @ORM\ManyToOne(targetEntity="Dispositif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="opd_dispo", referencedColumnName="dsp_id")
     * })
     */
    private $opdDispo;

    /**
     * @var \COptiond
     *
     * @ORM\ManyToOne(targetEntity="COptiond")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="opd_optiond", referencedColumnName="cod_id")
     * })
     */
    private $opdOptiond;

    public function getOpdId(): ?string
    {
        return $this->opdId;
    }

    public function getOpdTable(): ?string
    {
        return $this->opdTable;
    }

    public function setOpdTable(string $opdTable): self
    {
        $this->opdTable = $opdTable;

        return $this;
    }

    public function getOpdRang(): ?string
    {
        return $this->opdRang;
    }

    public function setOpdRang(string $opdRang): self
    {
        $this->opdRang = $opdRang;

        return $this;
    }

    public function getOpdLibelle(): ?string
    {
        return $this->opdLibelle;
    }

    public function setOpdLibelle(string $opdLibelle): self
    {
        $this->opdLibelle = $opdLibelle;

        return $this;
    }

    public function getOpdEtat(): ?string
    {
        return $this->opdEtat;
    }

    public function setOpdEtat(string $opdEtat): self
    {
        $this->opdEtat = $opdEtat;

        return $this;
    }

    public function getOpdOblig(): ?string
    {
        return $this->opdOblig;
    }

    public function setOpdOblig(string $opdOblig): self
    {
        $this->opdOblig = $opdOblig;

        return $this;
    }

    public function getOpdLongmin(): ?string
    {
        return $this->opdLongmin;
    }

    public function setOpdLongmin(string $opdLongmin): self
    {
        $this->opdLongmin = $opdLongmin;

        return $this;
    }

    public function getOpdLongmax(): ?string
    {
        return $this->opdLongmax;
    }

    public function setOpdLongmax(string $opdLongmax): self
    {
        $this->opdLongmax = $opdLongmax;

        return $this;
    }

    public function getOpdComment(): ?string
    {
        return $this->opdComment;
    }

    public function setOpdComment(?string $opdComment): self
    {
        $this->opdComment = $opdComment;

        return $this;
    }

    public function getOpdAuteurc(): ?string
    {
        return $this->opdAuteurc;
    }

    public function setOpdAuteurc(string $opdAuteurc): self
    {
        $this->opdAuteurc = $opdAuteurc;

        return $this;
    }

    public function getOpdDatec(): ?\DateTimeInterface
    {
        return $this->opdDatec;
    }

    public function setOpdDatec(\DateTimeInterface $opdDatec): self
    {
        $this->opdDatec = $opdDatec;

        return $this;
    }

    public function getOpdAuteurm(): ?string
    {
        return $this->opdAuteurm;
    }

    public function setOpdAuteurm(?string $opdAuteurm): self
    {
        $this->opdAuteurm = $opdAuteurm;

        return $this;
    }

    public function getOpdDatem(): ?\DateTimeInterface
    {
        return $this->opdDatem;
    }

    public function setOpdDatem(?\DateTimeInterface $opdDatem): self
    {
        $this->opdDatem = $opdDatem;

        return $this;
    }

    public function getOpdAuteura(): ?string
    {
        return $this->opdAuteura;
    }

    public function setOpdAuteura(?string $opdAuteura): self
    {
        $this->opdAuteura = $opdAuteura;

        return $this;
    }

    public function getOpdDatea(): ?\DateTimeInterface
    {
        return $this->opdDatea;
    }

    public function setOpdDatea(?\DateTimeInterface $opdDatea): self
    {
        $this->opdDatea = $opdDatea;

        return $this;
    }

    public function getOpdDispo(): ?Dispositif
    {
        return $this->opdDispo;
    }

    public function setOpdDispo(?Dispositif $opdDispo): self
    {
        $this->opdDispo = $opdDispo;

        return $this;
    }

    public function getOpdOptiond(): ?COptiond
    {
        return $this->opdOptiond;
    }

    public function setOpdOptiond(?COptiond $opdOptiond): self
    {
        $this->opdOptiond = $opdOptiond;

        return $this;
    }


}
