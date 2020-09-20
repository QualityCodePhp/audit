<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RBordereau
 *
 * @ORM\Table(name="r_bordereau", uniqueConstraints={@ORM\UniqueConstraint(name="r_bordereau_pk", columns={"mpr_id"})}, indexes={@ORM\Index(name="r_bordereau_tbtif", columns={"mpr_typerub"}), @ORM\Index(name="r_bordereau_masque_saisie_fk", columns={"ref_id_masque_saisie"}), @ORM\Index(name="r_bordereau_ref_type_presta_fk", columns={"ref_id_type_presta"}), @ORM\Index(name="r_bordereau_upuif", columns={"mpr_unite"}), @ORM\Index(name="r_bordereau_ebmif", columns={"mpr_entete"})})
 * @ORM\Entity
 */
class RBordereau
{
    /**
     * @var int
     *
     * @ORM\Column(name="mpr_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="r_bordereau_mpr_id_seq", allocationSize=1, initialValue=1)
     */
    private $mprId;

    /**
     * @var string
     *
     * @ORM\Column(name="mpr_rang", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $mprRang;

    /**
     * @var string
     *
     * @ORM\Column(name="mpr_libelle", type="string", length=200, nullable=false)
     */
    private $mprLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="mpr_saisiemnt", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $mprSaisiemnt;

    /**
     * @var string
     *
     * @ORM\Column(name="mpr_mntoblig", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $mprMntoblig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mpr_comment", type="string", length=300, nullable=true)
     */
    private $mprComment;

    /**
     * @var string
     *
     * @ORM\Column(name="mpr_info", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $mprInfo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mpr_pxoblig", type="decimal", precision=1, scale=0, nullable=true, options={"comment"="Saisie Prix unitaire"})
     */
    private $mprPxoblig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mpr_typrix", type="string", length=1, nullable=true, options={"comment"="Type de prix(unitaire/forfaitaire)"})
     */
    private $mprTyprix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mpr_nbtranche", type="decimal", precision=1, scale=0, nullable=true, options={"comment"="Nb de tranches"})
     */
    private $mprNbtranche;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mpr_flg_pas_dans_liste", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $mprFlgPasDansListe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmou_code", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $ofmouCode;

    /**
     * @var \EBordereau
     *
     * @ORM\ManyToOne(targetEntity="EBordereau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mpr_entete", referencedColumnName="mpe_id")
     * })
     */
    private $mprEntete;

    /**
     * @var \TrBord
     *
     * @ORM\ManyToOne(targetEntity="TrBord")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mpr_typerub", referencedColumnName="trb_id")
     * })
     */
    private $mprTyperub;

    /**
     * @var \UnitePrest
     *
     * @ORM\ManyToOne(targetEntity="UnitePrest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mpr_unite", referencedColumnName="unp_id")
     * })
     */
    private $mprUnite;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_masque_saisie", referencedColumnName="ref_id")
     * })
     */
    private $refIdMasqueSaisie;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_type_presta", referencedColumnName="ref_id")
     * })
     */
    private $refIdTypePresta;

    public function getMprId(): ?int
    {
        return $this->mprId;
    }

    public function getMprRang(): ?string
    {
        return $this->mprRang;
    }

    public function setMprRang(string $mprRang): self
    {
        $this->mprRang = $mprRang;

        return $this;
    }

    public function getMprLibelle(): ?string
    {
        return $this->mprLibelle;
    }

    public function setMprLibelle(string $mprLibelle): self
    {
        $this->mprLibelle = $mprLibelle;

        return $this;
    }

    public function getMprSaisiemnt(): ?string
    {
        return $this->mprSaisiemnt;
    }

    public function setMprSaisiemnt(string $mprSaisiemnt): self
    {
        $this->mprSaisiemnt = $mprSaisiemnt;

        return $this;
    }

    public function getMprMntoblig(): ?string
    {
        return $this->mprMntoblig;
    }

    public function setMprMntoblig(string $mprMntoblig): self
    {
        $this->mprMntoblig = $mprMntoblig;

        return $this;
    }

    public function getMprComment(): ?string
    {
        return $this->mprComment;
    }

    public function setMprComment(?string $mprComment): self
    {
        $this->mprComment = $mprComment;

        return $this;
    }

    public function getMprInfo(): ?string
    {
        return $this->mprInfo;
    }

    public function setMprInfo(string $mprInfo): self
    {
        $this->mprInfo = $mprInfo;

        return $this;
    }

    public function getMprPxoblig(): ?string
    {
        return $this->mprPxoblig;
    }

    public function setMprPxoblig(?string $mprPxoblig): self
    {
        $this->mprPxoblig = $mprPxoblig;

        return $this;
    }

    public function getMprTyprix(): ?string
    {
        return $this->mprTyprix;
    }

    public function setMprTyprix(?string $mprTyprix): self
    {
        $this->mprTyprix = $mprTyprix;

        return $this;
    }

    public function getMprNbtranche(): ?string
    {
        return $this->mprNbtranche;
    }

    public function setMprNbtranche(?string $mprNbtranche): self
    {
        $this->mprNbtranche = $mprNbtranche;

        return $this;
    }

    public function getMprFlgPasDansListe(): ?string
    {
        return $this->mprFlgPasDansListe;
    }

    public function setMprFlgPasDansListe(?string $mprFlgPasDansListe): self
    {
        $this->mprFlgPasDansListe = $mprFlgPasDansListe;

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

    public function getMprEntete(): ?EBordereau
    {
        return $this->mprEntete;
    }

    public function setMprEntete(?EBordereau $mprEntete): self
    {
        $this->mprEntete = $mprEntete;

        return $this;
    }

    public function getMprTyperub(): ?TrBord
    {
        return $this->mprTyperub;
    }

    public function setMprTyperub(?TrBord $mprTyperub): self
    {
        $this->mprTyperub = $mprTyperub;

        return $this;
    }

    public function getMprUnite(): ?UnitePrest
    {
        return $this->mprUnite;
    }

    public function setMprUnite(?UnitePrest $mprUnite): self
    {
        $this->mprUnite = $mprUnite;

        return $this;
    }

    public function getRefIdMasqueSaisie(): ?Referentiel
    {
        return $this->refIdMasqueSaisie;
    }

    public function setRefIdMasqueSaisie(?Referentiel $refIdMasqueSaisie): self
    {
        $this->refIdMasqueSaisie = $refIdMasqueSaisie;

        return $this;
    }

    public function getRefIdTypePresta(): ?Referentiel
    {
        return $this->refIdTypePresta;
    }

    public function setRefIdTypePresta(?Referentiel $refIdTypePresta): self
    {
        $this->refIdTypePresta = $refIdTypePresta;

        return $this;
    }


}
