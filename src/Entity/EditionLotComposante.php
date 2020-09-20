<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EditionLotComposante
 *
 * @ORM\Table(name="edition_lot_composante", uniqueConstraints={@ORM\UniqueConstraint(name="edition_lot_composante_pk", columns={"compid"})}, indexes={@ORM\Index(name="association_541_fk", columns={"actid"})})
 * @ORM\Entity
 */
class EditionLotComposante
{
    /**
     * @var string
     *
     * @ORM\Column(name="compid", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="edition_lot_composante_compid_seq", allocationSize=1, initialValue=1)
     */
    private $compid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="complibelle", type="string", length=2000, nullable=true)
     */
    private $complibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="validation", type="string", length=2000, nullable=true)
     */
    private $validation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="niveausortie", type="string", length=200, nullable=true)
     */
    private $niveausortie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="planifsession", type="string", length=2000, nullable=true)
     */
    private $planifsession;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parcoursminimoyenmaxi", type="string", length=2000, nullable=true)
     */
    private $parcoursminimoyenmaxi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="compconditionacces", type="string", length=2000, nullable=true)
     */
    private $compconditionacces;

    /**
     * @var string|null
     *
     * @ORM\Column(name="compmodapedacommentaire", type="string", length=2000, nullable=true)
     */
    private $compmodapedacommentaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nbstagiaires", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $nbstagiaires;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nbsessions", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $nbsessions;

    /**
     * @var string|null
     *
     * @ORM\Column(name="heurescentretotal", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $heurescentretotal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="heuresentreprisetotal", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $heuresentreprisetotal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codesrome", type="string", length=2000, nullable=true)
     */
    private $codesrome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codesnsf", type="string", length=2000, nullable=true)
     */
    private $codesnsf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="actfid", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $actfid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="compobjectifs", type="string", length=2000, nullable=true)
     */
    private $compobjectifs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numlot", type="string", length=200, nullable=true)
     */
    private $numlot;

    /**
     * @var string|null
     *
     * @ORM\Column(name="detailcertification", type="string", length=2000, nullable=true)
     */
    private $detailcertification;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gfecomposante", type="string", length=2000, nullable=true)
     */
    private $gfecomposante;

    /**
     * @var string|null
     *
     * @ORM\Column(name="compsousgfe", type="string", length=2000, nullable=true)
     */
    private $compsousgfe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="compnbvent", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $compnbvent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="compnbhfcent", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $compnbhfcent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="compnbprest", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $compnbprest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="compnblic", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $compnblic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="compnbcert", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $compnbcert;

    /**
     * @var string|null
     *
     * @ORM\Column(name="compnbequip", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $compnbequip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="compmtforfait", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $compmtforfait;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comppublicvisecomposante", type="string", length=2000, nullable=true)
     */
    private $comppublicvisecomposante;

    /**
     * @var string|null
     *
     * @ORM\Column(name="compordreaff", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $compordreaff;

    /**
     * @var string|null
     *
     * @ORM\Column(name="modalite", type="string", length=500, nullable=true)
     */
    private $modalite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="compresultatattendu", type="string", length=2000, nullable=true)
     */
    private $compresultatattendu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="compsuiteparcqualifenvi", type="string", length=2000, nullable=true)
     */
    private $compsuiteparcqualifenvi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="niveauentree", type="string", length=2000, nullable=true)
     */
    private $niveauentree;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentairesession", type="string", length=2000, nullable=true)
     */
    private $commentairesession;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nbsites", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $nbsites;

    /**
     * @var string|null
     *
     * @ORM\Column(name="compcommparcours", type="string", length=2000, nullable=true)
     */
    private $compcommparcours;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rythme", type="string", length=500, nullable=true)
     */
    private $rythme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="compalternance", type="string", length=2000, nullable=true)
     */
    private $compalternance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dureemoycent", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $dureemoycent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dureemoyent", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $dureemoyent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domaineprof", type="string", length=500, nullable=true)
     */
    private $domaineprof;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelleco", type="string", length=500, nullable=true)
     */
    private $libelleco;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mesure", type="string", length=200, nullable=true)
     */
    private $mesure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libellepublicvisecomposante", type="string", length=500, nullable=true)
     */
    private $libellepublicvisecomposante;

    /**
     * @var \EditionLot
     *
     * @ORM\ManyToOne(targetEntity="EditionLot")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="actid", referencedColumnName="actid")
     * })
     */
    private $actid;

    public function getCompid(): ?string
    {
        return $this->compid;
    }

    public function getComplibelle(): ?string
    {
        return $this->complibelle;
    }

    public function setComplibelle(?string $complibelle): self
    {
        $this->complibelle = $complibelle;

        return $this;
    }

    public function getValidation(): ?string
    {
        return $this->validation;
    }

    public function setValidation(?string $validation): self
    {
        $this->validation = $validation;

        return $this;
    }

    public function getNiveausortie(): ?string
    {
        return $this->niveausortie;
    }

    public function setNiveausortie(?string $niveausortie): self
    {
        $this->niveausortie = $niveausortie;

        return $this;
    }

    public function getPlanifsession(): ?string
    {
        return $this->planifsession;
    }

    public function setPlanifsession(?string $planifsession): self
    {
        $this->planifsession = $planifsession;

        return $this;
    }

    public function getParcoursminimoyenmaxi(): ?string
    {
        return $this->parcoursminimoyenmaxi;
    }

    public function setParcoursminimoyenmaxi(?string $parcoursminimoyenmaxi): self
    {
        $this->parcoursminimoyenmaxi = $parcoursminimoyenmaxi;

        return $this;
    }

    public function getCompconditionacces(): ?string
    {
        return $this->compconditionacces;
    }

    public function setCompconditionacces(?string $compconditionacces): self
    {
        $this->compconditionacces = $compconditionacces;

        return $this;
    }

    public function getCompmodapedacommentaire(): ?string
    {
        return $this->compmodapedacommentaire;
    }

    public function setCompmodapedacommentaire(?string $compmodapedacommentaire): self
    {
        $this->compmodapedacommentaire = $compmodapedacommentaire;

        return $this;
    }

    public function getNbstagiaires(): ?string
    {
        return $this->nbstagiaires;
    }

    public function setNbstagiaires(?string $nbstagiaires): self
    {
        $this->nbstagiaires = $nbstagiaires;

        return $this;
    }

    public function getNbsessions(): ?string
    {
        return $this->nbsessions;
    }

    public function setNbsessions(?string $nbsessions): self
    {
        $this->nbsessions = $nbsessions;

        return $this;
    }

    public function getHeurescentretotal(): ?string
    {
        return $this->heurescentretotal;
    }

    public function setHeurescentretotal(?string $heurescentretotal): self
    {
        $this->heurescentretotal = $heurescentretotal;

        return $this;
    }

    public function getHeuresentreprisetotal(): ?string
    {
        return $this->heuresentreprisetotal;
    }

    public function setHeuresentreprisetotal(?string $heuresentreprisetotal): self
    {
        $this->heuresentreprisetotal = $heuresentreprisetotal;

        return $this;
    }

    public function getCodesrome(): ?string
    {
        return $this->codesrome;
    }

    public function setCodesrome(?string $codesrome): self
    {
        $this->codesrome = $codesrome;

        return $this;
    }

    public function getCodesnsf(): ?string
    {
        return $this->codesnsf;
    }

    public function setCodesnsf(?string $codesnsf): self
    {
        $this->codesnsf = $codesnsf;

        return $this;
    }

    public function getActfid(): ?string
    {
        return $this->actfid;
    }

    public function setActfid(?string $actfid): self
    {
        $this->actfid = $actfid;

        return $this;
    }

    public function getCompobjectifs(): ?string
    {
        return $this->compobjectifs;
    }

    public function setCompobjectifs(?string $compobjectifs): self
    {
        $this->compobjectifs = $compobjectifs;

        return $this;
    }

    public function getNumlot(): ?string
    {
        return $this->numlot;
    }

    public function setNumlot(?string $numlot): self
    {
        $this->numlot = $numlot;

        return $this;
    }

    public function getDetailcertification(): ?string
    {
        return $this->detailcertification;
    }

    public function setDetailcertification(?string $detailcertification): self
    {
        $this->detailcertification = $detailcertification;

        return $this;
    }

    public function getGfecomposante(): ?string
    {
        return $this->gfecomposante;
    }

    public function setGfecomposante(?string $gfecomposante): self
    {
        $this->gfecomposante = $gfecomposante;

        return $this;
    }

    public function getCompsousgfe(): ?string
    {
        return $this->compsousgfe;
    }

    public function setCompsousgfe(?string $compsousgfe): self
    {
        $this->compsousgfe = $compsousgfe;

        return $this;
    }

    public function getCompnbvent(): ?string
    {
        return $this->compnbvent;
    }

    public function setCompnbvent(?string $compnbvent): self
    {
        $this->compnbvent = $compnbvent;

        return $this;
    }

    public function getCompnbhfcent(): ?string
    {
        return $this->compnbhfcent;
    }

    public function setCompnbhfcent(?string $compnbhfcent): self
    {
        $this->compnbhfcent = $compnbhfcent;

        return $this;
    }

    public function getCompnbprest(): ?string
    {
        return $this->compnbprest;
    }

    public function setCompnbprest(?string $compnbprest): self
    {
        $this->compnbprest = $compnbprest;

        return $this;
    }

    public function getCompnblic(): ?string
    {
        return $this->compnblic;
    }

    public function setCompnblic(?string $compnblic): self
    {
        $this->compnblic = $compnblic;

        return $this;
    }

    public function getCompnbcert(): ?string
    {
        return $this->compnbcert;
    }

    public function setCompnbcert(?string $compnbcert): self
    {
        $this->compnbcert = $compnbcert;

        return $this;
    }

    public function getCompnbequip(): ?string
    {
        return $this->compnbequip;
    }

    public function setCompnbequip(?string $compnbequip): self
    {
        $this->compnbequip = $compnbequip;

        return $this;
    }

    public function getCompmtforfait(): ?string
    {
        return $this->compmtforfait;
    }

    public function setCompmtforfait(?string $compmtforfait): self
    {
        $this->compmtforfait = $compmtforfait;

        return $this;
    }

    public function getComppublicvisecomposante(): ?string
    {
        return $this->comppublicvisecomposante;
    }

    public function setComppublicvisecomposante(?string $comppublicvisecomposante): self
    {
        $this->comppublicvisecomposante = $comppublicvisecomposante;

        return $this;
    }

    public function getCompordreaff(): ?string
    {
        return $this->compordreaff;
    }

    public function setCompordreaff(?string $compordreaff): self
    {
        $this->compordreaff = $compordreaff;

        return $this;
    }

    public function getModalite(): ?string
    {
        return $this->modalite;
    }

    public function setModalite(?string $modalite): self
    {
        $this->modalite = $modalite;

        return $this;
    }

    public function getCompresultatattendu(): ?string
    {
        return $this->compresultatattendu;
    }

    public function setCompresultatattendu(?string $compresultatattendu): self
    {
        $this->compresultatattendu = $compresultatattendu;

        return $this;
    }

    public function getCompsuiteparcqualifenvi(): ?string
    {
        return $this->compsuiteparcqualifenvi;
    }

    public function setCompsuiteparcqualifenvi(?string $compsuiteparcqualifenvi): self
    {
        $this->compsuiteparcqualifenvi = $compsuiteparcqualifenvi;

        return $this;
    }

    public function getNiveauentree(): ?string
    {
        return $this->niveauentree;
    }

    public function setNiveauentree(?string $niveauentree): self
    {
        $this->niveauentree = $niveauentree;

        return $this;
    }

    public function getCommentairesession(): ?string
    {
        return $this->commentairesession;
    }

    public function setCommentairesession(?string $commentairesession): self
    {
        $this->commentairesession = $commentairesession;

        return $this;
    }

    public function getNbsites(): ?string
    {
        return $this->nbsites;
    }

    public function setNbsites(?string $nbsites): self
    {
        $this->nbsites = $nbsites;

        return $this;
    }

    public function getCompcommparcours(): ?string
    {
        return $this->compcommparcours;
    }

    public function setCompcommparcours(?string $compcommparcours): self
    {
        $this->compcommparcours = $compcommparcours;

        return $this;
    }

    public function getRythme(): ?string
    {
        return $this->rythme;
    }

    public function setRythme(?string $rythme): self
    {
        $this->rythme = $rythme;

        return $this;
    }

    public function getCompalternance(): ?string
    {
        return $this->compalternance;
    }

    public function setCompalternance(?string $compalternance): self
    {
        $this->compalternance = $compalternance;

        return $this;
    }

    public function getDureemoycent(): ?string
    {
        return $this->dureemoycent;
    }

    public function setDureemoycent(?string $dureemoycent): self
    {
        $this->dureemoycent = $dureemoycent;

        return $this;
    }

    public function getDureemoyent(): ?string
    {
        return $this->dureemoyent;
    }

    public function setDureemoyent(?string $dureemoyent): self
    {
        $this->dureemoyent = $dureemoyent;

        return $this;
    }

    public function getDomaineprof(): ?string
    {
        return $this->domaineprof;
    }

    public function setDomaineprof(?string $domaineprof): self
    {
        $this->domaineprof = $domaineprof;

        return $this;
    }

    public function getLibelleco(): ?string
    {
        return $this->libelleco;
    }

    public function setLibelleco(?string $libelleco): self
    {
        $this->libelleco = $libelleco;

        return $this;
    }

    public function getMesure(): ?string
    {
        return $this->mesure;
    }

    public function setMesure(?string $mesure): self
    {
        $this->mesure = $mesure;

        return $this;
    }

    public function getLibellepublicvisecomposante(): ?string
    {
        return $this->libellepublicvisecomposante;
    }

    public function setLibellepublicvisecomposante(?string $libellepublicvisecomposante): self
    {
        $this->libellepublicvisecomposante = $libellepublicvisecomposante;

        return $this;
    }

    public function getActid(): ?EditionLot
    {
        return $this->actid;
    }

    public function setActid(?EditionLot $actid): self
    {
        $this->actid = $actid;

        return $this;
    }


}
