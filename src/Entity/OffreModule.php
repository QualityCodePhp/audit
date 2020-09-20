<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * OffreModule
 *
 * @ORM\Table(name="offre_module", uniqueConstraints={@ORM\UniqueConstraint(name="offre_module_pk", columns={"ofmou_id"})}, indexes={@ORM\Index(name="off_ofm_fk", columns={"off_id"}), @ORM\Index(name="ofmou_faplong_fk", columns={"ref_id_fap_long"})})
 * @ORM\Entity
 */
class OffreModule
{
    /**
     * @var int
     *
     * @ORM\Column(name="ofmou_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="offre_module_ofmou_id_seq", allocationSize=1, initialValue=1)
     */
    private $ofmouId;

    /**
     * @var string
     *
     * @ORM\Column(name="ofmou_flg_suppr", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $ofmouFlgSuppr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmou_numero", type="decimal", precision=5, scale=0, nullable=true)
     */
    private $ofmouNumero;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmou_lib", type="string", length=200, nullable=true)
     */
    private $ofmouLib;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmou_acm_reference", type="string", length=50, nullable=true)
     */
    private $ofmouAcmReference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmou_acm_flg_creation", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $ofmouAcmFlgCreation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmou_aire_de_recrutement", type="string", length=2000, nullable=true)
     */
    private $ofmouAireDeRecrutement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmou_effectif_vise_session", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $ofmouEffectifViseSession;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmou_effectif_session_pe", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $ofmouEffectifSessionPe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmou_effectif_session_region", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $ofmouEffectifSessionRegion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmou_code_finalite_sprf", type="string", length=20, nullable=true)
     */
    private $ofmouCodeFinaliteSprf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmou_parcours_moy_cent", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $ofmouParcoursMoyCent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmou_parcours_moy_ent", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $ofmouParcoursMoyEnt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmou_duree_hebdo", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $ofmouDureeHebdo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmou_code_rythme", type="string", length=20, nullable=true)
     */
    private $ofmouCodeRythme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmou_code_niv_sortie", type="string", length=20, nullable=true)
     */
    private $ofmouCodeNivSortie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmou_code_nat_agrem", type="string", length=20, nullable=true)
     */
    private $ofmouCodeNatAgrem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmou_code", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $ofmouCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmou_code_mesure", type="string", length=20, nullable=true)
     */
    private $ofmouCodeMesure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmou_objectifs", type="string", length=2000, nullable=true)
     */
    private $ofmouObjectifs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmou_flg_certifiant", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $ofmouFlgCertifiant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmou_ref_code_modalite", type="string", length=20, nullable=true)
     */
    private $ofmouRefCodeModalite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmou_contenu", type="string", length=2000, nullable=true)
     */
    private $ofmouContenu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmou_diplome", type="string", length=200, nullable=true)
     */
    private $ofmouDiplome;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre", inversedBy="offmou")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_id", referencedColumnName="off_id")
     * })
     */
    private $off;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_fap_long", referencedColumnName="ref_id")
     * })
     */
    private $refIdFapLong;


    /**
     * @var \SessionFormation
     *
     * @ORM\OneToMany(targetEntity="SessionFormation", mappedBy="ofmou")
     */
    private $sessionsFormation;


    public function __construct() {
        $this->sessionsFormation = new ArrayCollection();
    }

    public function getOfmouId(): ?int
    {
        return $this->ofmouId;
    }

    public function getOfmouFlgSuppr(): ?string
    {
        return $this->ofmouFlgSuppr;
    }

    public function setOfmouFlgSuppr(string $ofmouFlgSuppr): self
    {
        $this->ofmouFlgSuppr = $ofmouFlgSuppr;

        return $this;
    }

    public function getOfmouNumero(): ?string
    {
        return $this->ofmouNumero;
    }

    public function setOfmouNumero(?string $ofmouNumero): self
    {
        $this->ofmouNumero = $ofmouNumero;

        return $this;
    }

    public function getOfmouLib(): ?string
    {
        return $this->ofmouLib;
    }

    public function setOfmouLib(?string $ofmouLib): self
    {
        $this->ofmouLib = $ofmouLib;

        return $this;
    }

    public function getOfmouAcmReference(): ?string
    {
        return $this->ofmouAcmReference;
    }

    public function setOfmouAcmReference(?string $ofmouAcmReference): self
    {
        $this->ofmouAcmReference = $ofmouAcmReference;

        return $this;
    }

    public function getOfmouAcmFlgCreation(): ?string
    {
        return $this->ofmouAcmFlgCreation;
    }

    public function setOfmouAcmFlgCreation(?string $ofmouAcmFlgCreation): self
    {
        $this->ofmouAcmFlgCreation = $ofmouAcmFlgCreation;

        return $this;
    }

    public function getOfmouAireDeRecrutement(): ?string
    {
        return $this->ofmouAireDeRecrutement;
    }

    public function setOfmouAireDeRecrutement(?string $ofmouAireDeRecrutement): self
    {
        $this->ofmouAireDeRecrutement = $ofmouAireDeRecrutement;

        return $this;
    }

    public function getOfmouEffectifViseSession(): ?string
    {
        return $this->ofmouEffectifViseSession;
    }

    public function setOfmouEffectifViseSession(?string $ofmouEffectifViseSession): self
    {
        $this->ofmouEffectifViseSession = $ofmouEffectifViseSession;

        return $this;
    }

    public function getOfmouEffectifSessionPe(): ?string
    {
        return $this->ofmouEffectifSessionPe;
    }

    public function setOfmouEffectifSessionPe(?string $ofmouEffectifSessionPe): self
    {
        $this->ofmouEffectifSessionPe = $ofmouEffectifSessionPe;

        return $this;
    }

    public function getOfmouEffectifSessionRegion(): ?string
    {
        return $this->ofmouEffectifSessionRegion;
    }

    public function setOfmouEffectifSessionRegion(?string $ofmouEffectifSessionRegion): self
    {
        $this->ofmouEffectifSessionRegion = $ofmouEffectifSessionRegion;

        return $this;
    }

    public function getOfmouCodeFinaliteSprf(): ?string
    {
        return $this->ofmouCodeFinaliteSprf;
    }

    public function setOfmouCodeFinaliteSprf(?string $ofmouCodeFinaliteSprf): self
    {
        $this->ofmouCodeFinaliteSprf = $ofmouCodeFinaliteSprf;

        return $this;
    }

    public function getOfmouParcoursMoyCent(): ?string
    {
        return $this->ofmouParcoursMoyCent;
    }

    public function setOfmouParcoursMoyCent(?string $ofmouParcoursMoyCent): self
    {
        $this->ofmouParcoursMoyCent = $ofmouParcoursMoyCent;

        return $this;
    }

    public function getOfmouParcoursMoyEnt(): ?string
    {
        return $this->ofmouParcoursMoyEnt;
    }

    public function setOfmouParcoursMoyEnt(?string $ofmouParcoursMoyEnt): self
    {
        $this->ofmouParcoursMoyEnt = $ofmouParcoursMoyEnt;

        return $this;
    }

    public function getOfmouDureeHebdo(): ?string
    {
        return $this->ofmouDureeHebdo;
    }

    public function setOfmouDureeHebdo(?string $ofmouDureeHebdo): self
    {
        $this->ofmouDureeHebdo = $ofmouDureeHebdo;

        return $this;
    }

    public function getOfmouCodeRythme(): ?string
    {
        return $this->ofmouCodeRythme;
    }

    public function setOfmouCodeRythme(?string $ofmouCodeRythme): self
    {
        $this->ofmouCodeRythme = $ofmouCodeRythme;

        return $this;
    }

    public function getOfmouCodeNivSortie(): ?string
    {
        return $this->ofmouCodeNivSortie;
    }

    public function setOfmouCodeNivSortie(?string $ofmouCodeNivSortie): self
    {
        $this->ofmouCodeNivSortie = $ofmouCodeNivSortie;

        return $this;
    }

    public function getOfmouCodeNatAgrem(): ?string
    {
        return $this->ofmouCodeNatAgrem;
    }

    public function setOfmouCodeNatAgrem(?string $ofmouCodeNatAgrem): self
    {
        $this->ofmouCodeNatAgrem = $ofmouCodeNatAgrem;

        return $this;
    }

    public function getOfmouCode(): ?string
    {
        return $this->ofmouCode;
    }

    public function setOfmouCode(?string $ofmouCode): self
    {
        $this->ofmouCode = $ofmouCode;

        return $this;
    }

    public function getOfmouCodeMesure(): ?string
    {
        return $this->ofmouCodeMesure;
    }

    public function setOfmouCodeMesure(?string $ofmouCodeMesure): self
    {
        $this->ofmouCodeMesure = $ofmouCodeMesure;

        return $this;
    }

    public function getOfmouObjectifs(): ?string
    {
        return $this->ofmouObjectifs;
    }

    public function setOfmouObjectifs(?string $ofmouObjectifs): self
    {
        $this->ofmouObjectifs = $ofmouObjectifs;

        return $this;
    }

    public function getOfmouFlgCertifiant(): ?string
    {
        return $this->ofmouFlgCertifiant;
    }

    public function setOfmouFlgCertifiant(?string $ofmouFlgCertifiant): self
    {
        $this->ofmouFlgCertifiant = $ofmouFlgCertifiant;

        return $this;
    }

    public function getOfmouRefCodeModalite(): ?string
    {
        return $this->ofmouRefCodeModalite;
    }

    public function setOfmouRefCodeModalite(?string $ofmouRefCodeModalite): self
    {
        $this->ofmouRefCodeModalite = $ofmouRefCodeModalite;

        return $this;
    }

    public function getOfmouContenu(): ?string
    {
        return $this->ofmouContenu;
    }

    public function setOfmouContenu(?string $ofmouContenu): self
    {
        $this->ofmouContenu = $ofmouContenu;

        return $this;
    }

    public function getOfmouDiplome(): ?string
    {
        return $this->ofmouDiplome;
    }

    public function setOfmouDiplome(?string $ofmouDiplome): self
    {
        $this->ofmouDiplome = $ofmouDiplome;

        return $this;
    }

    public function getOff(): ?Offre
    {
        return $this->off;
    }

    public function setOff(?Offre $off): self
    {
        $this->off = $off;

        return $this;
    }

    public function getRefIdFapLong(): ?Referentiel
    {
        return $this->refIdFapLong;
    }

    public function setRefIdFapLong(?Referentiel $refIdFapLong): self
    {
        $this->refIdFapLong = $refIdFapLong;

        return $this;
    }

    /**
     * @return Collection|SessionFormation[]
     */
    public function getSessionsFormation(): Collection
    {
        return $this->sessionsFormation;
    }

    public function addCvt(SessionFormation $sessionsFormation): self
    {
        if (!$this->sessionsFormation->contains($sessionsFormation)) {
            $this->sessionsFormation[] = $sessionsFormation;
            $sessionsFormation->setOfmou($this);
        }
        return $this;
    }

    public function removeCvt(SessionFormation $sessionsFormation): self
    {
        if ($this->sessionsFormation->contains($sessionsFormation)) {
            $this->sessionsFormation->removeElement($sessionsFormation);
            if ($sessionsFormation->getOfmou() === $this) {
                $sessionsFormation->setOfmou(null);
            }
        }
        return $this;
    }
}
