<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Validreal
 *
 * @ORM\Table(name="validreal", uniqueConstraints={@ORM\UniqueConstraint(name="validreal_pk", columns={"vre_id"})}, indexes={@ORM\Index(name="validreal_uuif4", columns={"vre_auteurdp"}), @ORM\Index(name="validreal_bbif", columns={"vre_bordereau"}), @ORM\Index(name="validreal_uuif3", columns={"vre_auteurxp"}), @ORM\Index(name="vre_rep_fk", columns={"rep_id"}), @ORM\Index(name="validreal_ooif", columns={"vre_offre"}), @ORM\Index(name="vre_ddp_fk", columns={"ddp_id"}), @ORM\Index(name="validreal_uuif", columns={"vre_auteurcl"}), @ORM\Index(name="validreal_rbmif", columns={"vre_rbordereau"}), @ORM\Index(name="validreal_uuif2", columns={"vre_auteurv"})})
 * @ORM\Entity
 */
class Validreal
{
    /**
     * @var string
     *
     * @ORM\Column(name="vre_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="validreal_vre_id_seq", allocationSize=1, initialValue=1)
     */
    private $vreId;

    /**
     * @var string
     *
     * @ORM\Column(name="vre_mois", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $vreMois;

    /**
     * @var string
     *
     * @ORM\Column(name="vre_annee", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $vreAnnee;

    /**
     * @var string
     *
     * @ORM\Column(name="vre_typesaisie", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $vreTypesaisie;

    /**
     * @var string
     *
     * @ORM\Column(name="vre_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $vreEtat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="vre_datecl", type="datetime", nullable=true)
     */
    private $vreDatecl;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="vre_datev", type="datetime", nullable=true)
     */
    private $vreDatev;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="vre_datexp", type="datetime", nullable=true)
     */
    private $vreDatexp;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="vre_datedp", type="datetime", nullable=true)
     */
    private $vreDatedp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vre_fexport", type="string", length=50, nullable=true)
     */
    private $vreFexport;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vre_flg_retour_remu", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $vreFlgRetourRemu;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vre_auteurcl", referencedColumnName="uti_id")
     * })
     */
    private $vreAuteurcl;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vre_auteurv", referencedColumnName="uti_id")
     * })
     */
    private $vreAuteurv;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vre_auteurxp", referencedColumnName="uti_id")
     * })
     */
    private $vreAuteurxp;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vre_auteurdp", referencedColumnName="uti_id")
     * })
     */
    private $vreAuteurdp;

    /**
     * @var \Bordereau
     *
     * @ORM\ManyToOne(targetEntity="Bordereau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vre_bordereau", referencedColumnName="bdp_id")
     * })
     */
    private $vreBordereau;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vre_offre", referencedColumnName="off_id")
     * })
     */
    private $vreOffre;

    /**
     * @var \RBordereau
     *
     * @ORM\ManyToOne(targetEntity="RBordereau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vre_rbordereau", referencedColumnName="mpr_id")
     * })
     */
    private $vreRbordereau;

    /**
     * @var \DdePaiement
     *
     * @ORM\ManyToOne(targetEntity="DdePaiement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ddp_id", referencedColumnName="ddp_id")
     * })
     */
    private $ddp;

    /**
     * @var \Reponse
     *
     * @ORM\ManyToOne(targetEntity="Reponse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_id", referencedColumnName="rep_id")
     * })
     */
    private $rep;

    public function getVreId(): ?string
    {
        return $this->vreId;
    }

    public function getVreMois(): ?string
    {
        return $this->vreMois;
    }

    public function setVreMois(string $vreMois): self
    {
        $this->vreMois = $vreMois;

        return $this;
    }

    public function getVreAnnee(): ?string
    {
        return $this->vreAnnee;
    }

    public function setVreAnnee(string $vreAnnee): self
    {
        $this->vreAnnee = $vreAnnee;

        return $this;
    }

    public function getVreTypesaisie(): ?string
    {
        return $this->vreTypesaisie;
    }

    public function setVreTypesaisie(string $vreTypesaisie): self
    {
        $this->vreTypesaisie = $vreTypesaisie;

        return $this;
    }

    public function getVreEtat(): ?string
    {
        return $this->vreEtat;
    }

    public function setVreEtat(string $vreEtat): self
    {
        $this->vreEtat = $vreEtat;

        return $this;
    }

    public function getVreDatecl(): ?\DateTimeInterface
    {
        return $this->vreDatecl;
    }

    public function setVreDatecl(?\DateTimeInterface $vreDatecl): self
    {
        $this->vreDatecl = $vreDatecl;

        return $this;
    }

    public function getVreDatev(): ?\DateTimeInterface
    {
        return $this->vreDatev;
    }

    public function setVreDatev(?\DateTimeInterface $vreDatev): self
    {
        $this->vreDatev = $vreDatev;

        return $this;
    }

    public function getVreDatexp(): ?\DateTimeInterface
    {
        return $this->vreDatexp;
    }

    public function setVreDatexp(?\DateTimeInterface $vreDatexp): self
    {
        $this->vreDatexp = $vreDatexp;

        return $this;
    }

    public function getVreDatedp(): ?\DateTimeInterface
    {
        return $this->vreDatedp;
    }

    public function setVreDatedp(?\DateTimeInterface $vreDatedp): self
    {
        $this->vreDatedp = $vreDatedp;

        return $this;
    }

    public function getVreFexport(): ?string
    {
        return $this->vreFexport;
    }

    public function setVreFexport(?string $vreFexport): self
    {
        $this->vreFexport = $vreFexport;

        return $this;
    }

    public function getVreFlgRetourRemu(): ?string
    {
        return $this->vreFlgRetourRemu;
    }

    public function setVreFlgRetourRemu(?string $vreFlgRetourRemu): self
    {
        $this->vreFlgRetourRemu = $vreFlgRetourRemu;

        return $this;
    }

    public function getVreAuteurcl(): ?Utilisateur
    {
        return $this->vreAuteurcl;
    }

    public function setVreAuteurcl(?Utilisateur $vreAuteurcl): self
    {
        $this->vreAuteurcl = $vreAuteurcl;

        return $this;
    }

    public function getVreAuteurv(): ?Utilisateur
    {
        return $this->vreAuteurv;
    }

    public function setVreAuteurv(?Utilisateur $vreAuteurv): self
    {
        $this->vreAuteurv = $vreAuteurv;

        return $this;
    }

    public function getVreAuteurxp(): ?Utilisateur
    {
        return $this->vreAuteurxp;
    }

    public function setVreAuteurxp(?Utilisateur $vreAuteurxp): self
    {
        $this->vreAuteurxp = $vreAuteurxp;

        return $this;
    }

    public function getVreAuteurdp(): ?Utilisateur
    {
        return $this->vreAuteurdp;
    }

    public function setVreAuteurdp(?Utilisateur $vreAuteurdp): self
    {
        $this->vreAuteurdp = $vreAuteurdp;

        return $this;
    }

    public function getVreBordereau(): ?Bordereau
    {
        return $this->vreBordereau;
    }

    public function setVreBordereau(?Bordereau $vreBordereau): self
    {
        $this->vreBordereau = $vreBordereau;

        return $this;
    }

    public function getVreOffre(): ?Offre
    {
        return $this->vreOffre;
    }

    public function setVreOffre(?Offre $vreOffre): self
    {
        $this->vreOffre = $vreOffre;

        return $this;
    }

    public function getVreRbordereau(): ?RBordereau
    {
        return $this->vreRbordereau;
    }

    public function setVreRbordereau(?RBordereau $vreRbordereau): self
    {
        $this->vreRbordereau = $vreRbordereau;

        return $this;
    }

    public function getDdp(): ?DdePaiement
    {
        return $this->ddp;
    }

    public function setDdp(?DdePaiement $ddp): self
    {
        $this->ddp = $ddp;

        return $this;
    }

    public function getRep(): ?Reponse
    {
        return $this->rep;
    }

    public function setRep(?Reponse $rep): self
    {
        $this->rep = $rep;

        return $this;
    }


}
