<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AffecTrt
 *
 * @ORM\Table(name="affec_trt", uniqueConstraints={@ORM\UniqueConstraint(name="affec_trt_pk", columns={"atr_id"})}, indexes={@ORM\Index(name="affec_trt_atr_ccif", columns={"atr_commande"}), @ORM\Index(name="affec_trt_atr_afsa_eeif", columns={"atr_afsa"}), @ORM\Index(name="affec_trt_atr_ggif", columns={"atr_grille"}), @ORM\Index(name="affec_trt_atr_ppif", columns={"atr_programme"}), @ORM\Index(name="affec_trt_atr_rfrif", columns={"atr_rfonc"}), @ORM\Index(name="affec_trt_atr_ccif2", columns={"atr_afclasse"}), @ORM\Index(name="affec_trt_atr_ggif2", columns={"atr_afgroupe"}), @ORM\Index(name="affec_trt_atr_uuif", columns={"atr_afutil"}), @ORM\Index(name="affec_trt_atr_ooif", columns={"atr_offre"})})
 * @ORM\Entity
 */
class AffecTrt
{
    /**
     * @var int
     *
     * @ORM\Column(name="atr_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="affec_trt_atr_id_seq", allocationSize=1, initialValue=1)
     */
    private $atrId;

    /**
     * @var string
     *
     * @ORM\Column(name="atr_origine", type="decimal", precision=1, scale=0, nullable=false, options={"comment"="1 = CrÃ©ation Commande, 2 = Gestion Droit, 3 = Instruction"})
     */
    private $atrOrigine;

    /**
     * @var string
     *
     * @ORM\Column(name="atr_type", type="string", length=2, nullable=false, options={"comment"="UT = Utilisateur, GR = Groupe, CL = Classe, SA = Structure d'Acceuil"})
     */
    private $atrType;

    /**
     * @var string
     *
     * @ORM\Column(name="atr_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $atrEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="atr_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $atrAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="atr_datec", type="datetime", nullable=false)
     */
    private $atrDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="atr_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $atrAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="atr_datem", type="datetime", nullable=true)
     */
    private $atrDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="atr_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $atrAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="atr_datea", type="datetime", nullable=true)
     */
    private $atrDatea;

    /**
     * @var \Classe
     *
     * @ORM\ManyToOne(targetEntity="Classe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="atr_afclasse", referencedColumnName="cls_id")
     * })
     */
    private $atrAfclasse;

    /**
     * @var \Groupe
     *
     * @ORM\ManyToOne(targetEntity="Groupe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="atr_afgroupe", referencedColumnName="grp_id")
     * })
     */
    private $atrAfgroupe;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="atr_afsa", referencedColumnName="ets_id")
     * })
     */
    private $atrAfsa;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="atr_afutil", referencedColumnName="uti_id")
     * })
     */
    private $atrAfutil;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="atr_commande", referencedColumnName="cmd_id")
     * })
     */
    private $atrCommande;

    /**
     * @var \Grille
     *
     * @ORM\ManyToOne(targetEntity="Grille")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="atr_grille", referencedColumnName="gri_id")
     * })
     */
    private $atrGrille;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="atr_offre", referencedColumnName="off_id")
     * })
     */
    private $atrOffre;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="atr_programme", referencedColumnName="prg_id")
     * })
     */
    private $atrProgramme;

    /**
     * @var \RegFonction
     *
     * @ORM\ManyToOne(targetEntity="RegFonction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="atr_rfonc", referencedColumnName="rfo_id")
     * })
     */
    private $atrRfonc;

    public function getAtrId(): ?int
    {
        return $this->atrId;
    }

    public function getAtrOrigine(): ?string
    {
        return $this->atrOrigine;
    }

    public function setAtrOrigine(string $atrOrigine): self
    {
        $this->atrOrigine = $atrOrigine;

        return $this;
    }

    public function getAtrType(): ?string
    {
        return $this->atrType;
    }

    public function setAtrType(string $atrType): self
    {
        $this->atrType = $atrType;

        return $this;
    }

    public function getAtrEtat(): ?string
    {
        return $this->atrEtat;
    }

    public function setAtrEtat(string $atrEtat): self
    {
        $this->atrEtat = $atrEtat;

        return $this;
    }

    public function getAtrAuteurc(): ?string
    {
        return $this->atrAuteurc;
    }

    public function setAtrAuteurc(string $atrAuteurc): self
    {
        $this->atrAuteurc = $atrAuteurc;

        return $this;
    }

    public function getAtrDatec(): ?\DateTimeInterface
    {
        return $this->atrDatec;
    }

    public function setAtrDatec(\DateTimeInterface $atrDatec): self
    {
        $this->atrDatec = $atrDatec;

        return $this;
    }

    public function getAtrAuteurm(): ?string
    {
        return $this->atrAuteurm;
    }

    public function setAtrAuteurm(?string $atrAuteurm): self
    {
        $this->atrAuteurm = $atrAuteurm;

        return $this;
    }

    public function getAtrDatem(): ?\DateTimeInterface
    {
        return $this->atrDatem;
    }

    public function setAtrDatem(?\DateTimeInterface $atrDatem): self
    {
        $this->atrDatem = $atrDatem;

        return $this;
    }

    public function getAtrAuteura(): ?string
    {
        return $this->atrAuteura;
    }

    public function setAtrAuteura(?string $atrAuteura): self
    {
        $this->atrAuteura = $atrAuteura;

        return $this;
    }

    public function getAtrDatea(): ?\DateTimeInterface
    {
        return $this->atrDatea;
    }

    public function setAtrDatea(?\DateTimeInterface $atrDatea): self
    {
        $this->atrDatea = $atrDatea;

        return $this;
    }

    public function getAtrAfclasse(): ?Classe
    {
        return $this->atrAfclasse;
    }

    public function setAtrAfclasse(?Classe $atrAfclasse): self
    {
        $this->atrAfclasse = $atrAfclasse;

        return $this;
    }

    public function getAtrAfgroupe(): ?Groupe
    {
        return $this->atrAfgroupe;
    }

    public function setAtrAfgroupe(?Groupe $atrAfgroupe): self
    {
        $this->atrAfgroupe = $atrAfgroupe;

        return $this;
    }

    public function getAtrAfsa(): ?Etablssmt
    {
        return $this->atrAfsa;
    }

    public function setAtrAfsa(?Etablssmt $atrAfsa): self
    {
        $this->atrAfsa = $atrAfsa;

        return $this;
    }

    public function getAtrAfutil(): ?Utilisateur
    {
        return $this->atrAfutil;
    }

    public function setAtrAfutil(?Utilisateur $atrAfutil): self
    {
        $this->atrAfutil = $atrAfutil;

        return $this;
    }

    public function getAtrCommande(): ?Commande
    {
        return $this->atrCommande;
    }

    public function setAtrCommande(?Commande $atrCommande): self
    {
        $this->atrCommande = $atrCommande;

        return $this;
    }

    public function getAtrGrille(): ?Grille
    {
        return $this->atrGrille;
    }

    public function setAtrGrille(?Grille $atrGrille): self
    {
        $this->atrGrille = $atrGrille;

        return $this;
    }

    public function getAtrOffre(): ?Offre
    {
        return $this->atrOffre;
    }

    public function setAtrOffre(?Offre $atrOffre): self
    {
        $this->atrOffre = $atrOffre;

        return $this;
    }

    public function getAtrProgramme(): ?Programme
    {
        return $this->atrProgramme;
    }

    public function setAtrProgramme(?Programme $atrProgramme): self
    {
        $this->atrProgramme = $atrProgramme;

        return $this;
    }

    public function getAtrRfonc(): ?RegFonction
    {
        return $this->atrRfonc;
    }

    public function setAtrRfonc(?RegFonction $atrRfonc): self
    {
        $this->atrRfonc = $atrRfonc;

        return $this;
    }


}
