<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AffecProg
 *
 * @ORM\Table(name="affec_prog", uniqueConstraints={@ORM\UniqueConstraint(name="affec_prog_pk", columns={"apg_id"})}, indexes={@ORM\Index(name="affec_prog_apg_uuif", columns={"apg_afutil"}), @ORM\Index(name="affec_prog_ar_rfrif", columns={"apg_rfonc"}), @ORM\Index(name="affec_prog_apg_ppif", columns={"apg_prog"}), @ORM\Index(name="affec_prog_apg_eeif", columns={"apg_afsa"}), @ORM\Index(name="affec_prog_apg_ccif", columns={"apg_afclasse"}), @ORM\Index(name="affec_prog_apg_ggif", columns={"apg_afgroupe"})})
 * @ORM\Entity
 */
class AffecProg
{
    /**
     * @var string
     *
     * @ORM\Column(name="apg_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="affec_prog_apg_id_seq", allocationSize=1, initialValue=1)
     */
    private $apgId;

    /**
     * @var string
     *
     * @ORM\Column(name="apg_taffect", type="string", length=2, nullable=false, options={"comment"="UT = Utilisateur, GR = Groupe, CL = Classe, SA = Structure d'Acceuil"})
     */
    private $apgTaffect;

    /**
     * @var string
     *
     * @ORM\Column(name="apg_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $apgEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="apg_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $apgAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="apg_datec", type="datetime", nullable=false)
     */
    private $apgDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="apg_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $apgAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="apg_datem", type="datetime", nullable=true)
     */
    private $apgDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="apg_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $apgAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="apg_datea", type="datetime", nullable=true)
     */
    private $apgDatea;

    /**
     * @var \Classe
     *
     * @ORM\ManyToOne(targetEntity="Classe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="apg_afclasse", referencedColumnName="cls_id")
     * })
     */
    private $apgAfclasse;

    /**
     * @var \Groupe
     *
     * @ORM\ManyToOne(targetEntity="Groupe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="apg_afgroupe", referencedColumnName="grp_id")
     * })
     */
    private $apgAfgroupe;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="apg_afsa", referencedColumnName="ets_id")
     * })
     */
    private $apgAfsa;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="apg_afutil", referencedColumnName="uti_id")
     * })
     */
    private $apgAfutil;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="apg_prog", referencedColumnName="prg_id")
     * })
     */
    private $apgProg;

    /**
     * @var \RegFonction
     *
     * @ORM\ManyToOne(targetEntity="RegFonction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="apg_rfonc", referencedColumnName="rfo_id")
     * })
     */
    private $apgRfonc;

    public function getApgId(): ?string
    {
        return $this->apgId;
    }

    public function getApgTaffect(): ?string
    {
        return $this->apgTaffect;
    }

    public function setApgTaffect(string $apgTaffect): self
    {
        $this->apgTaffect = $apgTaffect;

        return $this;
    }

    public function getApgEtat(): ?string
    {
        return $this->apgEtat;
    }

    public function setApgEtat(string $apgEtat): self
    {
        $this->apgEtat = $apgEtat;

        return $this;
    }

    public function getApgAuteurc(): ?string
    {
        return $this->apgAuteurc;
    }

    public function setApgAuteurc(string $apgAuteurc): self
    {
        $this->apgAuteurc = $apgAuteurc;

        return $this;
    }

    public function getApgDatec(): ?\DateTimeInterface
    {
        return $this->apgDatec;
    }

    public function setApgDatec(\DateTimeInterface $apgDatec): self
    {
        $this->apgDatec = $apgDatec;

        return $this;
    }

    public function getApgAuteurm(): ?string
    {
        return $this->apgAuteurm;
    }

    public function setApgAuteurm(?string $apgAuteurm): self
    {
        $this->apgAuteurm = $apgAuteurm;

        return $this;
    }

    public function getApgDatem(): ?\DateTimeInterface
    {
        return $this->apgDatem;
    }

    public function setApgDatem(?\DateTimeInterface $apgDatem): self
    {
        $this->apgDatem = $apgDatem;

        return $this;
    }

    public function getApgAuteura(): ?string
    {
        return $this->apgAuteura;
    }

    public function setApgAuteura(?string $apgAuteura): self
    {
        $this->apgAuteura = $apgAuteura;

        return $this;
    }

    public function getApgDatea(): ?\DateTimeInterface
    {
        return $this->apgDatea;
    }

    public function setApgDatea(?\DateTimeInterface $apgDatea): self
    {
        $this->apgDatea = $apgDatea;

        return $this;
    }

    public function getApgAfclasse(): ?Classe
    {
        return $this->apgAfclasse;
    }

    public function setApgAfclasse(?Classe $apgAfclasse): self
    {
        $this->apgAfclasse = $apgAfclasse;

        return $this;
    }

    public function getApgAfgroupe(): ?Groupe
    {
        return $this->apgAfgroupe;
    }

    public function setApgAfgroupe(?Groupe $apgAfgroupe): self
    {
        $this->apgAfgroupe = $apgAfgroupe;

        return $this;
    }

    public function getApgAfsa(): ?Etablssmt
    {
        return $this->apgAfsa;
    }

    public function setApgAfsa(?Etablssmt $apgAfsa): self
    {
        $this->apgAfsa = $apgAfsa;

        return $this;
    }

    public function getApgAfutil(): ?Utilisateur
    {
        return $this->apgAfutil;
    }

    public function setApgAfutil(?Utilisateur $apgAfutil): self
    {
        $this->apgAfutil = $apgAfutil;

        return $this;
    }

    public function getApgProg(): ?Programme
    {
        return $this->apgProg;
    }

    public function setApgProg(?Programme $apgProg): self
    {
        $this->apgProg = $apgProg;

        return $this;
    }

    public function getApgRfonc(): ?RegFonction
    {
        return $this->apgRfonc;
    }

    public function setApgRfonc(?RegFonction $apgRfonc): self
    {
        $this->apgRfonc = $apgRfonc;

        return $this;
    }


}
