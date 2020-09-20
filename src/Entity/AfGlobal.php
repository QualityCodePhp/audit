<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AfGlobal
 *
 * @ORM\Table(name="af_global", uniqueConstraints={@ORM\UniqueConstraint(name="af_global_pk", columns={"afg_id"})}, indexes={@ORM\Index(name="af_global_afg_ets_eeif", columns={"afg_ets"}), @ORM\Index(name="af_global_afg_ppif", columns={"afg_programme"})})
 * @ORM\Entity
 */
class AfGlobal
{
    /**
     * @var string
     *
     * @ORM\Column(name="afg_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="af_global_afg_id_seq", allocationSize=1, initialValue=1)
     */
    private $afgId;

    /**
     * @var string
     *
     * @ORM\Column(name="afg_libelle", type="string", length=50, nullable=false)
     */
    private $afgLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="afg_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $afgEtat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afg_comment", type="string", length=300, nullable=true)
     */
    private $afgComment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afg_codem", type="string", length=4, nullable=true)
     */
    private $afgCodem;

    /**
     * @var string
     *
     * @ORM\Column(name="afg_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $afgAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="afg_datec", type="datetime", nullable=false)
     */
    private $afgDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afg_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $afgAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="afg_datem", type="datetime", nullable=true)
     */
    private $afgDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afg_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $afgAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="afg_datea", type="datetime", nullable=true)
     */
    private $afgDatea;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="afg_ets", referencedColumnName="ets_id")
     * })
     */
    private $afgEts;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="afg_programme", referencedColumnName="prg_id")
     * })
     */
    private $afgProgramme;

    public function getAfgId(): ?string
    {
        return $this->afgId;
    }

    public function getAfgLibelle(): ?string
    {
        return $this->afgLibelle;
    }

    public function setAfgLibelle(string $afgLibelle): self
    {
        $this->afgLibelle = $afgLibelle;

        return $this;
    }

    public function getAfgEtat(): ?string
    {
        return $this->afgEtat;
    }

    public function setAfgEtat(string $afgEtat): self
    {
        $this->afgEtat = $afgEtat;

        return $this;
    }

    public function getAfgComment(): ?string
    {
        return $this->afgComment;
    }

    public function setAfgComment(?string $afgComment): self
    {
        $this->afgComment = $afgComment;

        return $this;
    }

    public function getAfgCodem(): ?string
    {
        return $this->afgCodem;
    }

    public function setAfgCodem(?string $afgCodem): self
    {
        $this->afgCodem = $afgCodem;

        return $this;
    }

    public function getAfgAuteurc(): ?string
    {
        return $this->afgAuteurc;
    }

    public function setAfgAuteurc(string $afgAuteurc): self
    {
        $this->afgAuteurc = $afgAuteurc;

        return $this;
    }

    public function getAfgDatec(): ?\DateTimeInterface
    {
        return $this->afgDatec;
    }

    public function setAfgDatec(\DateTimeInterface $afgDatec): self
    {
        $this->afgDatec = $afgDatec;

        return $this;
    }

    public function getAfgAuteurm(): ?string
    {
        return $this->afgAuteurm;
    }

    public function setAfgAuteurm(?string $afgAuteurm): self
    {
        $this->afgAuteurm = $afgAuteurm;

        return $this;
    }

    public function getAfgDatem(): ?\DateTimeInterface
    {
        return $this->afgDatem;
    }

    public function setAfgDatem(?\DateTimeInterface $afgDatem): self
    {
        $this->afgDatem = $afgDatem;

        return $this;
    }

    public function getAfgAuteura(): ?string
    {
        return $this->afgAuteura;
    }

    public function setAfgAuteura(?string $afgAuteura): self
    {
        $this->afgAuteura = $afgAuteura;

        return $this;
    }

    public function getAfgDatea(): ?\DateTimeInterface
    {
        return $this->afgDatea;
    }

    public function setAfgDatea(?\DateTimeInterface $afgDatea): self
    {
        $this->afgDatea = $afgDatea;

        return $this;
    }

    public function getAfgEts(): ?Etablssmt
    {
        return $this->afgEts;
    }

    public function setAfgEts(?Etablssmt $afgEts): self
    {
        $this->afgEts = $afgEts;

        return $this;
    }

    public function getAfgProgramme(): ?Programme
    {
        return $this->afgProgramme;
    }

    public function setAfgProgramme(?Programme $afgProgramme): self
    {
        $this->afgProgramme = $afgProgramme;

        return $this;
    }


}
