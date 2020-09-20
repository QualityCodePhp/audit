<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe
 *
 * @ORM\Table(name="groupe", uniqueConstraints={@ORM\UniqueConstraint(name="groupe_pk", columns={"grp_id"})}, indexes={@ORM\Index(name="groupe_ccif", columns={"grp_classe"}), @ORM\Index(name="groupe_uuif", columns={"grp_contact"})})
 * @ORM\Entity
 */
class Groupe
{
    /**
     * @var int
     *
     * @ORM\Column(name="grp_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="groupe_grp_id_seq", allocationSize=1, initialValue=1)
     */
    private $grpId;

    /**
     * @var string
     *
     * @ORM\Column(name="grp_code", type="string", length=10, nullable=false)
     */
    private $grpCode;

    /**
     * @var string
     *
     * @ORM\Column(name="grp_libelle", type="string", length=50, nullable=false)
     */
    private $grpLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="grp_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $grpEtat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="grp_desc", type="string", length=100, nullable=true)
     */
    private $grpDesc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="grp_adrsimmeub", type="string", length=38, nullable=true)
     */
    private $grpAdrsimmeub;

    /**
     * @var string|null
     *
     * @ORM\Column(name="grp_nvoie", type="string", length=7, nullable=true)
     */
    private $grpNvoie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="grp_bister", type="string", length=1, nullable=true)
     */
    private $grpBister;

    /**
     * @var string|null
     *
     * @ORM\Column(name="grp_adr1", type="string", length=38, nullable=true)
     */
    private $grpAdr1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="grp_adr2", type="string", length=38, nullable=true)
     */
    private $grpAdr2;

    /**
     * @var string
     *
     * @ORM\Column(name="grp_cpostal", type="string", length=5, nullable=false)
     */
    private $grpCpostal;

    /**
     * @var string
     *
     * @ORM\Column(name="grp_ville", type="string", length=32, nullable=false)
     */
    private $grpVille;

    /**
     * @var string
     *
     * @ORM\Column(name="grp_pays", type="string", length=38, nullable=false)
     */
    private $grpPays;

    /**
     * @var string
     *
     * @ORM\Column(name="grp_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $grpAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="grp_datec", type="datetime", nullable=false)
     */
    private $grpDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="grp_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $grpAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="grp_datem", type="datetime", nullable=true)
     */
    private $grpDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="grp_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $grpAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="grp_datea", type="datetime", nullable=true)
     */
    private $grpDatea;

    /**
     * @var \Classe
     *
     * @ORM\ManyToOne(targetEntity="Classe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grp_classe", referencedColumnName="cls_id")
     * })
     */
    private $grpClasse;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grp_contact", referencedColumnName="uti_id")
     * })
     */
    private $grpContact;

    public function getGrpId(): ?int
    {
        return $this->grpId;
    }

    public function getGrpCode(): ?string
    {
        return $this->grpCode;
    }

    public function setGrpCode(string $grpCode): self
    {
        $this->grpCode = $grpCode;

        return $this;
    }

    public function getGrpLibelle(): ?string
    {
        return $this->grpLibelle;
    }

    public function setGrpLibelle(string $grpLibelle): self
    {
        $this->grpLibelle = $grpLibelle;

        return $this;
    }

    public function getGrpEtat(): ?string
    {
        return $this->grpEtat;
    }

    public function setGrpEtat(string $grpEtat): self
    {
        $this->grpEtat = $grpEtat;

        return $this;
    }

    public function getGrpDesc(): ?string
    {
        return $this->grpDesc;
    }

    public function setGrpDesc(?string $grpDesc): self
    {
        $this->grpDesc = $grpDesc;

        return $this;
    }

    public function getGrpAdrsimmeub(): ?string
    {
        return $this->grpAdrsimmeub;
    }

    public function setGrpAdrsimmeub(?string $grpAdrsimmeub): self
    {
        $this->grpAdrsimmeub = $grpAdrsimmeub;

        return $this;
    }

    public function getGrpNvoie(): ?string
    {
        return $this->grpNvoie;
    }

    public function setGrpNvoie(?string $grpNvoie): self
    {
        $this->grpNvoie = $grpNvoie;

        return $this;
    }

    public function getGrpBister(): ?string
    {
        return $this->grpBister;
    }

    public function setGrpBister(?string $grpBister): self
    {
        $this->grpBister = $grpBister;

        return $this;
    }

    public function getGrpAdr1(): ?string
    {
        return $this->grpAdr1;
    }

    public function setGrpAdr1(?string $grpAdr1): self
    {
        $this->grpAdr1 = $grpAdr1;

        return $this;
    }

    public function getGrpAdr2(): ?string
    {
        return $this->grpAdr2;
    }

    public function setGrpAdr2(?string $grpAdr2): self
    {
        $this->grpAdr2 = $grpAdr2;

        return $this;
    }

    public function getGrpCpostal(): ?string
    {
        return $this->grpCpostal;
    }

    public function setGrpCpostal(string $grpCpostal): self
    {
        $this->grpCpostal = $grpCpostal;

        return $this;
    }

    public function getGrpVille(): ?string
    {
        return $this->grpVille;
    }

    public function setGrpVille(string $grpVille): self
    {
        $this->grpVille = $grpVille;

        return $this;
    }

    public function getGrpPays(): ?string
    {
        return $this->grpPays;
    }

    public function setGrpPays(string $grpPays): self
    {
        $this->grpPays = $grpPays;

        return $this;
    }

    public function getGrpAuteurc(): ?string
    {
        return $this->grpAuteurc;
    }

    public function setGrpAuteurc(string $grpAuteurc): self
    {
        $this->grpAuteurc = $grpAuteurc;

        return $this;
    }

    public function getGrpDatec(): ?\DateTimeInterface
    {
        return $this->grpDatec;
    }

    public function setGrpDatec(\DateTimeInterface $grpDatec): self
    {
        $this->grpDatec = $grpDatec;

        return $this;
    }

    public function getGrpAuteurm(): ?string
    {
        return $this->grpAuteurm;
    }

    public function setGrpAuteurm(?string $grpAuteurm): self
    {
        $this->grpAuteurm = $grpAuteurm;

        return $this;
    }

    public function getGrpDatem(): ?\DateTimeInterface
    {
        return $this->grpDatem;
    }

    public function setGrpDatem(?\DateTimeInterface $grpDatem): self
    {
        $this->grpDatem = $grpDatem;

        return $this;
    }

    public function getGrpAuteura(): ?string
    {
        return $this->grpAuteura;
    }

    public function setGrpAuteura(?string $grpAuteura): self
    {
        $this->grpAuteura = $grpAuteura;

        return $this;
    }

    public function getGrpDatea(): ?\DateTimeInterface
    {
        return $this->grpDatea;
    }

    public function setGrpDatea(?\DateTimeInterface $grpDatea): self
    {
        $this->grpDatea = $grpDatea;

        return $this;
    }

    public function getGrpClasse(): ?Classe
    {
        return $this->grpClasse;
    }

    public function setGrpClasse(?Classe $grpClasse): self
    {
        $this->grpClasse = $grpClasse;

        return $this;
    }

    public function getGrpContact(): ?Utilisateur
    {
        return $this->grpContact;
    }

    public function setGrpContact(?Utilisateur $grpContact): self
    {
        $this->grpContact = $grpContact;

        return $this;
    }


}
