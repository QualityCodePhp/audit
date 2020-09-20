<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grille
 *
 * @ORM\Table(name="grille", uniqueConstraints={@ORM\UniqueConstraint(name="grille_pk", columns={"gri_id"})}, indexes={@ORM\Index(name="grille_egeif", columns={"gri_egrille"}), @ORM\Index(name="grille_ooif", columns={"gri_offre"}), @ORM\Index(name="grille_uuif", columns={"gri_auteurv"})})
 * @ORM\Entity
 */
class Grille
{
    /**
     * @var int
     *
     * @ORM\Column(name="gri_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="grille_gri_id_seq", allocationSize=1, initialValue=1)
     */
    private $griId;

    /**
     * @var string
     *
     * @ORM\Column(name="gri_libelle", type="string", length=50, nullable=false)
     */
    private $griLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="gri_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $griEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="gri_nature", type="string", length=1, nullable=false, options={"comment"="T = Technique, A = Administrative"})
     */
    private $griNature;

    /**
     * @var string
     *
     * @ORM\Column(name="gri_type", type="string", length=1, nullable=false, options={"comment"="P = Principal, S = Secondaire"})
     */
    private $griType;

    /**
     * @var string
     *
     * @ORM\Column(name="gri_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $griAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gri_datec", type="datetime", nullable=false)
     */
    private $griDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gri_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $griAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="gri_datem", type="datetime", nullable=true)
     */
    private $griDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gri_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $griAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="gri_datea", type="datetime", nullable=true)
     */
    private $griDatea;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="gri_datev", type="datetime", nullable=true)
     */
    private $griDatev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gri_comment", type="string", length=300, nullable=true)
     */
    private $griComment;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gri_auteurv", referencedColumnName="uti_id")
     * })
     */
    private $griAuteurv;

    /**
     * @var \EGrille
     *
     * @ORM\ManyToOne(targetEntity="EGrille")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gri_egrille", referencedColumnName="etg_id")
     * })
     */
    private $griEgrille;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gri_offre", referencedColumnName="off_id")
     * })
     */
    private $griOffre;

    public function getGriId(): ?int
    {
        return $this->griId;
    }

    public function getGriLibelle(): ?string
    {
        return $this->griLibelle;
    }

    public function setGriLibelle(string $griLibelle): self
    {
        $this->griLibelle = $griLibelle;

        return $this;
    }

    public function getGriEtat(): ?string
    {
        return $this->griEtat;
    }

    public function setGriEtat(string $griEtat): self
    {
        $this->griEtat = $griEtat;

        return $this;
    }

    public function getGriNature(): ?string
    {
        return $this->griNature;
    }

    public function setGriNature(string $griNature): self
    {
        $this->griNature = $griNature;

        return $this;
    }

    public function getGriType(): ?string
    {
        return $this->griType;
    }

    public function setGriType(string $griType): self
    {
        $this->griType = $griType;

        return $this;
    }

    public function getGriAuteurc(): ?string
    {
        return $this->griAuteurc;
    }

    public function setGriAuteurc(string $griAuteurc): self
    {
        $this->griAuteurc = $griAuteurc;

        return $this;
    }

    public function getGriDatec(): ?\DateTimeInterface
    {
        return $this->griDatec;
    }

    public function setGriDatec(\DateTimeInterface $griDatec): self
    {
        $this->griDatec = $griDatec;

        return $this;
    }

    public function getGriAuteurm(): ?string
    {
        return $this->griAuteurm;
    }

    public function setGriAuteurm(?string $griAuteurm): self
    {
        $this->griAuteurm = $griAuteurm;

        return $this;
    }

    public function getGriDatem(): ?\DateTimeInterface
    {
        return $this->griDatem;
    }

    public function setGriDatem(?\DateTimeInterface $griDatem): self
    {
        $this->griDatem = $griDatem;

        return $this;
    }

    public function getGriAuteura(): ?string
    {
        return $this->griAuteura;
    }

    public function setGriAuteura(?string $griAuteura): self
    {
        $this->griAuteura = $griAuteura;

        return $this;
    }

    public function getGriDatea(): ?\DateTimeInterface
    {
        return $this->griDatea;
    }

    public function setGriDatea(?\DateTimeInterface $griDatea): self
    {
        $this->griDatea = $griDatea;

        return $this;
    }

    public function getGriDatev(): ?\DateTimeInterface
    {
        return $this->griDatev;
    }

    public function setGriDatev(?\DateTimeInterface $griDatev): self
    {
        $this->griDatev = $griDatev;

        return $this;
    }

    public function getGriComment(): ?string
    {
        return $this->griComment;
    }

    public function setGriComment(?string $griComment): self
    {
        $this->griComment = $griComment;

        return $this;
    }

    public function getGriAuteurv(): ?Utilisateur
    {
        return $this->griAuteurv;
    }

    public function setGriAuteurv(?Utilisateur $griAuteurv): self
    {
        $this->griAuteurv = $griAuteurv;

        return $this;
    }

    public function getGriEgrille(): ?EGrille
    {
        return $this->griEgrille;
    }

    public function setGriEgrille(?EGrille $griEgrille): self
    {
        $this->griEgrille = $griEgrille;

        return $this;
    }

    public function getGriOffre(): ?Offre
    {
        return $this->griOffre;
    }

    public function setGriOffre(?Offre $griOffre): self
    {
        $this->griOffre = $griOffre;

        return $this;
    }


}
