<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Absence
 *
 * @ORM\Table(name="absence", uniqueConstraints={@ORM\UniqueConstraint(name="absence_pk", columns={"abs_id"})}, indexes={@ORM\Index(name="absence_abs_stagiaire_ssif", columns={"abs_stagiaire"}), @ORM\Index(name="absence_abs_offre_ofif", columns={"abs_offre"}), @ORM\Index(name="absence_abs_rbor_bmif", columns={"abs_rbordereau"}), @ORM\Index(name="absence_abs_motif_mmif", columns={"abs_motif"}), @ORM\Index(name="absence_abs_bordereau_bdif", columns={"abs_bordereau"}), @ORM\Index(name="absence_abs_auteurv_uuif", columns={"abs_auteurv"})})
 * @ORM\Entity
 */
class Absence
{
    /**
     * @var string
     *
     * @ORM\Column(name="abs_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="absence_abs_id_seq", allocationSize=1, initialValue=1)
     */
    private $absId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="abs_date", type="datetime", nullable=false)
     */
    private $absDate;

    /**
     * @var string
     *
     * @ORM\Column(name="abs_periode", type="string", length=1, nullable=false, options={"comment"="M = matin, A = apres midi"})
     */
    private $absPeriode;

    /**
     * @var string
     *
     * @ORM\Column(name="abs_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $absEtat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="abs_datev", type="datetime", nullable=true)
     */
    private $absDatev;

    /**
     * @var string
     *
     * @ORM\Column(name="abs_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $absAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="abs_datec", type="datetime", nullable=false)
     */
    private $absDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="abs_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $absAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="abs_datem", type="datetime", nullable=true)
     */
    private $absDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="abs_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $absAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="abs_datea", type="datetime", nullable=true)
     */
    private $absDatea;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="abs_auteurv", referencedColumnName="uti_id")
     * })
     */
    private $absAuteurv;

    /**
     * @var \Bordereau
     *
     * @ORM\ManyToOne(targetEntity="Bordereau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="abs_bordereau", referencedColumnName="bdp_id")
     * })
     */
    private $absBordereau;

    /**
     * @var \Motifsortie
     *
     * @ORM\ManyToOne(targetEntity="Motifsortie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="abs_motif", referencedColumnName="mot_id")
     * })
     */
    private $absMotif;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="abs_offre", referencedColumnName="off_id")
     * })
     */
    private $absOffre;

    /**
     * @var \RBordereau
     *
     * @ORM\ManyToOne(targetEntity="RBordereau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="abs_rbordereau", referencedColumnName="mpr_id")
     * })
     */
    private $absRbordereau;

    /**
     * @var \Stagiaire
     *
     * @ORM\ManyToOne(targetEntity="Stagiaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="abs_stagiaire", referencedColumnName="stg_id")
     * })
     */
    private $absStagiaire;

    public function getAbsId(): ?string
    {
        return $this->absId;
    }

    public function getAbsDate(): ?\DateTimeInterface
    {
        return $this->absDate;
    }

    public function setAbsDate(\DateTimeInterface $absDate): self
    {
        $this->absDate = $absDate;

        return $this;
    }

    public function getAbsPeriode(): ?string
    {
        return $this->absPeriode;
    }

    public function setAbsPeriode(string $absPeriode): self
    {
        $this->absPeriode = $absPeriode;

        return $this;
    }

    public function getAbsEtat(): ?string
    {
        return $this->absEtat;
    }

    public function setAbsEtat(string $absEtat): self
    {
        $this->absEtat = $absEtat;

        return $this;
    }

    public function getAbsDatev(): ?\DateTimeInterface
    {
        return $this->absDatev;
    }

    public function setAbsDatev(?\DateTimeInterface $absDatev): self
    {
        $this->absDatev = $absDatev;

        return $this;
    }

    public function getAbsAuteurc(): ?string
    {
        return $this->absAuteurc;
    }

    public function setAbsAuteurc(string $absAuteurc): self
    {
        $this->absAuteurc = $absAuteurc;

        return $this;
    }

    public function getAbsDatec(): ?\DateTimeInterface
    {
        return $this->absDatec;
    }

    public function setAbsDatec(\DateTimeInterface $absDatec): self
    {
        $this->absDatec = $absDatec;

        return $this;
    }

    public function getAbsAuteurm(): ?string
    {
        return $this->absAuteurm;
    }

    public function setAbsAuteurm(?string $absAuteurm): self
    {
        $this->absAuteurm = $absAuteurm;

        return $this;
    }

    public function getAbsDatem(): ?\DateTimeInterface
    {
        return $this->absDatem;
    }

    public function setAbsDatem(?\DateTimeInterface $absDatem): self
    {
        $this->absDatem = $absDatem;

        return $this;
    }

    public function getAbsAuteura(): ?string
    {
        return $this->absAuteura;
    }

    public function setAbsAuteura(?string $absAuteura): self
    {
        $this->absAuteura = $absAuteura;

        return $this;
    }

    public function getAbsDatea(): ?\DateTimeInterface
    {
        return $this->absDatea;
    }

    public function setAbsDatea(?\DateTimeInterface $absDatea): self
    {
        $this->absDatea = $absDatea;

        return $this;
    }

    public function getAbsAuteurv(): ?Utilisateur
    {
        return $this->absAuteurv;
    }

    public function setAbsAuteurv(?Utilisateur $absAuteurv): self
    {
        $this->absAuteurv = $absAuteurv;

        return $this;
    }

    public function getAbsBordereau(): ?Bordereau
    {
        return $this->absBordereau;
    }

    public function setAbsBordereau(?Bordereau $absBordereau): self
    {
        $this->absBordereau = $absBordereau;

        return $this;
    }

    public function getAbsMotif(): ?Motifsortie
    {
        return $this->absMotif;
    }

    public function setAbsMotif(?Motifsortie $absMotif): self
    {
        $this->absMotif = $absMotif;

        return $this;
    }

    public function getAbsOffre(): ?Offre
    {
        return $this->absOffre;
    }

    public function setAbsOffre(?Offre $absOffre): self
    {
        $this->absOffre = $absOffre;

        return $this;
    }

    public function getAbsRbordereau(): ?RBordereau
    {
        return $this->absRbordereau;
    }

    public function setAbsRbordereau(?RBordereau $absRbordereau): self
    {
        $this->absRbordereau = $absRbordereau;

        return $this;
    }

    public function getAbsStagiaire(): ?Stagiaire
    {
        return $this->absStagiaire;
    }

    public function setAbsStagiaire(?Stagiaire $absStagiaire): self
    {
        $this->absStagiaire = $absStagiaire;

        return $this;
    }


}
