<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EGrille
 *
 * @ORM\Table(name="e_grille", uniqueConstraints={@ORM\UniqueConstraint(name="e_grille_pk", columns={"etg_id"})}, indexes={@ORM\Index(name="e_grille_etg_ppif", columns={"etg_programme"})})
 * @ORM\Entity
 */
class EGrille
{
    /**
     * @var int
     *
     * @ORM\Column(name="etg_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_grille_etg_id_seq", allocationSize=1, initialValue=1)
     */
    private $etgId;

    /**
     * @var string
     *
     * @ORM\Column(name="etg_libelle", type="string", length=50, nullable=false)
     */
    private $etgLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="etg_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $etgEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="etg_nature", type="string", length=1, nullable=false, options={"comment"="(Technique, Administrative)"})
     */
    private $etgNature;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etg_noteseuil", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $etgNoteseuil;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etg_totalmaxi", type="decimal", precision=9, scale=0, nullable=true)
     */
    private $etgTotalmaxi;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="etg_datevl", type="datetime", nullable=true)
     */
    private $etgDatevl;

    /**
     * @var string
     *
     * @ORM\Column(name="etg_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $etgAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="etg_datec", type="datetime", nullable=false)
     */
    private $etgDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etg_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $etgAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="etg_datem", type="datetime", nullable=true)
     */
    private $etgDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etg_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $etgAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="etg_datea", type="datetime", nullable=true)
     */
    private $etgDatea;

    /**
     * @var string
     *
     * @ORM\Column(name="etg_code", type="string", length=10, nullable=false)
     */
    private $etgCode;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="etg_programme", referencedColumnName="prg_id")
     * })
     */
    private $etgProgramme;

    public function getEtgId(): ?int
    {
        return $this->etgId;
    }

    public function getEtgLibelle(): ?string
    {
        return $this->etgLibelle;
    }

    public function setEtgLibelle(string $etgLibelle): self
    {
        $this->etgLibelle = $etgLibelle;

        return $this;
    }

    public function getEtgEtat(): ?string
    {
        return $this->etgEtat;
    }

    public function setEtgEtat(string $etgEtat): self
    {
        $this->etgEtat = $etgEtat;

        return $this;
    }

    public function getEtgNature(): ?string
    {
        return $this->etgNature;
    }

    public function setEtgNature(string $etgNature): self
    {
        $this->etgNature = $etgNature;

        return $this;
    }

    public function getEtgNoteseuil(): ?string
    {
        return $this->etgNoteseuil;
    }

    public function setEtgNoteseuil(?string $etgNoteseuil): self
    {
        $this->etgNoteseuil = $etgNoteseuil;

        return $this;
    }

    public function getEtgTotalmaxi(): ?string
    {
        return $this->etgTotalmaxi;
    }

    public function setEtgTotalmaxi(?string $etgTotalmaxi): self
    {
        $this->etgTotalmaxi = $etgTotalmaxi;

        return $this;
    }

    public function getEtgDatevl(): ?\DateTimeInterface
    {
        return $this->etgDatevl;
    }

    public function setEtgDatevl(?\DateTimeInterface $etgDatevl): self
    {
        $this->etgDatevl = $etgDatevl;

        return $this;
    }

    public function getEtgAuteurc(): ?string
    {
        return $this->etgAuteurc;
    }

    public function setEtgAuteurc(string $etgAuteurc): self
    {
        $this->etgAuteurc = $etgAuteurc;

        return $this;
    }

    public function getEtgDatec(): ?\DateTimeInterface
    {
        return $this->etgDatec;
    }

    public function setEtgDatec(\DateTimeInterface $etgDatec): self
    {
        $this->etgDatec = $etgDatec;

        return $this;
    }

    public function getEtgAuteurm(): ?string
    {
        return $this->etgAuteurm;
    }

    public function setEtgAuteurm(?string $etgAuteurm): self
    {
        $this->etgAuteurm = $etgAuteurm;

        return $this;
    }

    public function getEtgDatem(): ?\DateTimeInterface
    {
        return $this->etgDatem;
    }

    public function setEtgDatem(?\DateTimeInterface $etgDatem): self
    {
        $this->etgDatem = $etgDatem;

        return $this;
    }

    public function getEtgAuteura(): ?string
    {
        return $this->etgAuteura;
    }

    public function setEtgAuteura(?string $etgAuteura): self
    {
        $this->etgAuteura = $etgAuteura;

        return $this;
    }

    public function getEtgDatea(): ?\DateTimeInterface
    {
        return $this->etgDatea;
    }

    public function setEtgDatea(?\DateTimeInterface $etgDatea): self
    {
        $this->etgDatea = $etgDatea;

        return $this;
    }

    public function getEtgCode(): ?string
    {
        return $this->etgCode;
    }

    public function setEtgCode(string $etgCode): self
    {
        $this->etgCode = $etgCode;

        return $this;
    }

    public function getEtgProgramme(): ?Programme
    {
        return $this->etgProgramme;
    }

    public function setEtgProgramme(?Programme $etgProgramme): self
    {
        $this->etgProgramme = $etgProgramme;

        return $this;
    }


}
