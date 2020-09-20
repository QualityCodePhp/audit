<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Realisation
 *
 * @ORM\Table(name="realisation", uniqueConstraints={@ORM\UniqueConstraint(name="realisation_pk", columns={"rea_id"})}, indexes={@ORM\Index(name="realisation_uuif2", columns={"rea_auteurvcr"}), @ORM\Index(name="realisation_bbif", columns={"rea_bordereau"}), @ORM\Index(name="realisation_uuif", columns={"rea_auteurv"}), @ORM\Index(name="realisation_ooif", columns={"rea_offre"}), @ORM\Index(name="realisation_rbmif", columns={"rea_rbordereau"}), @ORM\Index(name="realisation_eeif", columns={"rea_etsv"}), @ORM\Index(name="sestg_rea_fk", columns={"sestg_id"}), @ORM\Index(name="realisation_ssif", columns={"rea_stagiaire"}), @ORM\Index(name="sess_rea_fk", columns={"sess_id"}), @ORM\Index(name="realisation_formateur_fk", columns={"uti_id_formateur"})})
 * @ORM\Entity
 */
class Realisation
{
    /**
     * @var string
     *
     * @ORM\Column(name="rea_id", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="realisation_rea_id_seq", allocationSize=1, initialValue=1)
     */
    private $reaId;

    /**
     * @var string
     *
     * @ORM\Column(name="rea_typesaisie", type="decimal", precision=1, scale=0, nullable=false, options={"comment"="1:Realisation/2:Regularisation/3:CRE"})
     */
    private $reaTypesaisie;

    /**
     * @var string
     *
     * @ORM\Column(name="rea_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $reaEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="rea_moisreal", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $reaMoisreal;

    /**
     * @var string
     *
     * @ORM\Column(name="rea_anneereal", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $reaAnneereal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rea_nbcent", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $reaNbcent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rea_nbent", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $reaNbent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rea_nbstag", type="decimal", precision=5, scale=0, nullable=true)
     */
    private $reaNbstag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rea_forfait", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $reaForfait;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rea_datev", type="datetime", nullable=true)
     */
    private $reaDatev;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rea_datevcr", type="datetime", nullable=true)
     */
    private $reaDatevcr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rea_typev", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $reaTypev;

    /**
     * @var string
     *
     * @ORM\Column(name="rea_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $reaAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rea_datec", type="datetime", nullable=false)
     */
    private $reaDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rea_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $reaAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rea_datem", type="datetime", nullable=true)
     */
    private $reaDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rea_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $reaAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rea_datea", type="datetime", nullable=true)
     */
    private $reaDatea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rea_nbabs", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $reaNbabs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rea_flg_a_traiter_emargos", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $reaFlgATraiterEmargos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rea_flg_retour_remu", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $reaFlgRetourRemu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rea_nbabs_depart_anticipe", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $reaNbabsDepartAnticipe;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uti_id_formateur", referencedColumnName="uti_id")
     * })
     */
    private $utiIdFormateur;

    /**
     * @var \Bordereau
     *
     * @ORM\ManyToOne(targetEntity="Bordereau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rea_bordereau", referencedColumnName="bdp_id")
     * })
     */
    private $reaBordereau;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rea_etsv", referencedColumnName="ets_id")
     * })
     */
    private $reaEtsv;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rea_offre", referencedColumnName="off_id")
     * })
     */
    private $reaOffre;

    /**
     * @var \RBordereau
     *
     * @ORM\ManyToOne(targetEntity="RBordereau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rea_rbordereau", referencedColumnName="mpr_id")
     * })
     */
    private $reaRbordereau;

    /**
     * @var \Stagiaire
     *
     * @ORM\ManyToOne(targetEntity="Stagiaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rea_stagiaire", referencedColumnName="stg_id")
     * })
     */
    private $reaStagiaire;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rea_auteurv", referencedColumnName="uti_id")
     * })
     */
    private $reaAuteurv;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rea_auteurvcr", referencedColumnName="uti_id")
     * })
     */
    private $reaAuteurvcr;

    /**
     * @var \SessionFormation
     *
     * @ORM\ManyToOne(targetEntity="SessionFormation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sess_id", referencedColumnName="sess_id")
     * })
     */
    private $sess;

    /**
     * @var \SessionStagiaire
     *
     * @ORM\ManyToOne(targetEntity="SessionStagiaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sestg_id", referencedColumnName="sestg_id")
     * })
     */
    private $sestg;

    public function getReaId(): ?string
    {
        return $this->reaId;
    }

    public function getReaTypesaisie(): ?string
    {
        return $this->reaTypesaisie;
    }

    public function setReaTypesaisie(string $reaTypesaisie): self
    {
        $this->reaTypesaisie = $reaTypesaisie;

        return $this;
    }

    public function getReaEtat(): ?string
    {
        return $this->reaEtat;
    }

    public function setReaEtat(string $reaEtat): self
    {
        $this->reaEtat = $reaEtat;

        return $this;
    }

    public function getReaMoisreal(): ?string
    {
        return $this->reaMoisreal;
    }

    public function setReaMoisreal(string $reaMoisreal): self
    {
        $this->reaMoisreal = $reaMoisreal;

        return $this;
    }

    public function getReaAnneereal(): ?string
    {
        return $this->reaAnneereal;
    }

    public function setReaAnneereal(string $reaAnneereal): self
    {
        $this->reaAnneereal = $reaAnneereal;

        return $this;
    }

    public function getReaNbcent(): ?string
    {
        return $this->reaNbcent;
    }

    public function setReaNbcent(?string $reaNbcent): self
    {
        $this->reaNbcent = $reaNbcent;

        return $this;
    }

    public function getReaNbent(): ?string
    {
        return $this->reaNbent;
    }

    public function setReaNbent(?string $reaNbent): self
    {
        $this->reaNbent = $reaNbent;

        return $this;
    }

    public function getReaNbstag(): ?string
    {
        return $this->reaNbstag;
    }

    public function setReaNbstag(?string $reaNbstag): self
    {
        $this->reaNbstag = $reaNbstag;

        return $this;
    }

    public function getReaForfait(): ?string
    {
        return $this->reaForfait;
    }

    public function setReaForfait(?string $reaForfait): self
    {
        $this->reaForfait = $reaForfait;

        return $this;
    }

    public function getReaDatev(): ?\DateTimeInterface
    {
        return $this->reaDatev;
    }

    public function setReaDatev(?\DateTimeInterface $reaDatev): self
    {
        $this->reaDatev = $reaDatev;

        return $this;
    }

    public function getReaDatevcr(): ?\DateTimeInterface
    {
        return $this->reaDatevcr;
    }

    public function setReaDatevcr(?\DateTimeInterface $reaDatevcr): self
    {
        $this->reaDatevcr = $reaDatevcr;

        return $this;
    }

    public function getReaTypev(): ?string
    {
        return $this->reaTypev;
    }

    public function setReaTypev(?string $reaTypev): self
    {
        $this->reaTypev = $reaTypev;

        return $this;
    }

    public function getReaAuteurc(): ?string
    {
        return $this->reaAuteurc;
    }

    public function setReaAuteurc(string $reaAuteurc): self
    {
        $this->reaAuteurc = $reaAuteurc;

        return $this;
    }

    public function getReaDatec(): ?\DateTimeInterface
    {
        return $this->reaDatec;
    }

    public function setReaDatec(\DateTimeInterface $reaDatec): self
    {
        $this->reaDatec = $reaDatec;

        return $this;
    }

    public function getReaAuteurm(): ?string
    {
        return $this->reaAuteurm;
    }

    public function setReaAuteurm(?string $reaAuteurm): self
    {
        $this->reaAuteurm = $reaAuteurm;

        return $this;
    }

    public function getReaDatem(): ?\DateTimeInterface
    {
        return $this->reaDatem;
    }

    public function setReaDatem(?\DateTimeInterface $reaDatem): self
    {
        $this->reaDatem = $reaDatem;

        return $this;
    }

    public function getReaAuteura(): ?string
    {
        return $this->reaAuteura;
    }

    public function setReaAuteura(?string $reaAuteura): self
    {
        $this->reaAuteura = $reaAuteura;

        return $this;
    }

    public function getReaDatea(): ?\DateTimeInterface
    {
        return $this->reaDatea;
    }

    public function setReaDatea(?\DateTimeInterface $reaDatea): self
    {
        $this->reaDatea = $reaDatea;

        return $this;
    }

    public function getReaNbabs(): ?string
    {
        return $this->reaNbabs;
    }

    public function setReaNbabs(?string $reaNbabs): self
    {
        $this->reaNbabs = $reaNbabs;

        return $this;
    }

    public function getReaFlgATraiterEmargos(): ?string
    {
        return $this->reaFlgATraiterEmargos;
    }

    public function setReaFlgATraiterEmargos(?string $reaFlgATraiterEmargos): self
    {
        $this->reaFlgATraiterEmargos = $reaFlgATraiterEmargos;

        return $this;
    }

    public function getReaFlgRetourRemu(): ?string
    {
        return $this->reaFlgRetourRemu;
    }

    public function setReaFlgRetourRemu(?string $reaFlgRetourRemu): self
    {
        $this->reaFlgRetourRemu = $reaFlgRetourRemu;

        return $this;
    }

    public function getReaNbabsDepartAnticipe(): ?string
    {
        return $this->reaNbabsDepartAnticipe;
    }

    public function setReaNbabsDepartAnticipe(?string $reaNbabsDepartAnticipe): self
    {
        $this->reaNbabsDepartAnticipe = $reaNbabsDepartAnticipe;

        return $this;
    }

    public function getUtiIdFormateur(): ?Utilisateur
    {
        return $this->utiIdFormateur;
    }

    public function setUtiIdFormateur(?Utilisateur $utiIdFormateur): self
    {
        $this->utiIdFormateur = $utiIdFormateur;

        return $this;
    }

    public function getReaBordereau(): ?Bordereau
    {
        return $this->reaBordereau;
    }

    public function setReaBordereau(?Bordereau $reaBordereau): self
    {
        $this->reaBordereau = $reaBordereau;

        return $this;
    }

    public function getReaEtsv(): ?Etablssmt
    {
        return $this->reaEtsv;
    }

    public function setReaEtsv(?Etablssmt $reaEtsv): self
    {
        $this->reaEtsv = $reaEtsv;

        return $this;
    }

    public function getReaOffre(): ?Offre
    {
        return $this->reaOffre;
    }

    public function setReaOffre(?Offre $reaOffre): self
    {
        $this->reaOffre = $reaOffre;

        return $this;
    }

    public function getReaRbordereau(): ?RBordereau
    {
        return $this->reaRbordereau;
    }

    public function setReaRbordereau(?RBordereau $reaRbordereau): self
    {
        $this->reaRbordereau = $reaRbordereau;

        return $this;
    }

    public function getReaStagiaire(): ?Stagiaire
    {
        return $this->reaStagiaire;
    }

    public function setReaStagiaire(?Stagiaire $reaStagiaire): self
    {
        $this->reaStagiaire = $reaStagiaire;

        return $this;
    }

    public function getReaAuteurv(): ?Utilisateur
    {
        return $this->reaAuteurv;
    }

    public function setReaAuteurv(?Utilisateur $reaAuteurv): self
    {
        $this->reaAuteurv = $reaAuteurv;

        return $this;
    }

    public function getReaAuteurvcr(): ?Utilisateur
    {
        return $this->reaAuteurvcr;
    }

    public function setReaAuteurvcr(?Utilisateur $reaAuteurvcr): self
    {
        $this->reaAuteurvcr = $reaAuteurvcr;

        return $this;
    }

    public function getSess(): ?SessionFormation
    {
        return $this->sess;
    }

    public function setSess(?SessionFormation $sess): self
    {
        $this->sess = $sess;

        return $this;
    }

    public function getSestg(): ?SessionStagiaire
    {
        return $this->sestg;
    }

    public function setSestg(?SessionStagiaire $sestg): self
    {
        $this->sestg = $sestg;

        return $this;
    }


}
