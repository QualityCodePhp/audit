<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffreModulePresta
 *
 * @ORM\Table(name="offre_module_presta", uniqueConstraints={@ORM\UniqueConstraint(name="offre_module_presta_pk", columns={"ofmoup_id"})}, indexes={@ORM\Index(name="association_556_fk", columns={"mpr_id"}), @ORM\Index(name="ofmou_ofmoup_fk", columns={"ofmou_id"})})
 * @ORM\Entity
 */
class OffreModulePresta
{
    /**
     * @var int
     *
     * @ORM\Column(name="ofmoup_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="offre_module_presta_ofmoup_id_seq", allocationSize=1, initialValue=1)
     */
    private $ofmoupId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmoup_libelle", type="string", length=100, nullable=true)
     */
    private $ofmoupLibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmoup_code", type="string", length=100, nullable=true)
     */
    private $ofmoupCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmoup_type", type="string", length=10, nullable=true)
     */
    private $ofmoupType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmoup_sous_type", type="string", length=10, nullable=true)
     */
    private $ofmoupSousType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmoup_flg_suppr", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $ofmoupFlgSuppr;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ofmoup_dt_creat", type="date", nullable=true)
     */
    private $ofmoupDtCreat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ofmoup_dt_der_modif", type="date", nullable=true)
     */
    private $ofmoupDtDerModif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmoup_parcours_moyen", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $ofmoupParcoursMoyen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmoup_parcours_maxi", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $ofmoupParcoursMaxi;

    /**
     * @var \RBordereau
     *
     * @ORM\ManyToOne(targetEntity="RBordereau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mpr_id", referencedColumnName="mpr_id")
     * })
     */
    private $mpr;

    /**
     * @var \OffreModule
     *
     * @ORM\ManyToOne(targetEntity="OffreModule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ofmou_id", referencedColumnName="ofmou_id")
     * })
     */
    private $ofmou;

    public function getOfmoupId(): ?int
    {
        return $this->ofmoupId;
    }

    public function getOfmoupLibelle(): ?string
    {
        return $this->ofmoupLibelle;
    }

    public function setOfmoupLibelle(?string $ofmoupLibelle): self
    {
        $this->ofmoupLibelle = $ofmoupLibelle;

        return $this;
    }

    public function getOfmoupCode(): ?string
    {
        return $this->ofmoupCode;
    }

    public function setOfmoupCode(?string $ofmoupCode): self
    {
        $this->ofmoupCode = $ofmoupCode;

        return $this;
    }

    public function getOfmoupType(): ?string
    {
        return $this->ofmoupType;
    }

    public function setOfmoupType(?string $ofmoupType): self
    {
        $this->ofmoupType = $ofmoupType;

        return $this;
    }

    public function getOfmoupSousType(): ?string
    {
        return $this->ofmoupSousType;
    }

    public function setOfmoupSousType(?string $ofmoupSousType): self
    {
        $this->ofmoupSousType = $ofmoupSousType;

        return $this;
    }

    public function getOfmoupFlgSuppr(): ?string
    {
        return $this->ofmoupFlgSuppr;
    }

    public function setOfmoupFlgSuppr(?string $ofmoupFlgSuppr): self
    {
        $this->ofmoupFlgSuppr = $ofmoupFlgSuppr;

        return $this;
    }

    public function getOfmoupDtCreat(): ?\DateTimeInterface
    {
        return $this->ofmoupDtCreat;
    }

    public function setOfmoupDtCreat(?\DateTimeInterface $ofmoupDtCreat): self
    {
        $this->ofmoupDtCreat = $ofmoupDtCreat;

        return $this;
    }

    public function getOfmoupDtDerModif(): ?\DateTimeInterface
    {
        return $this->ofmoupDtDerModif;
    }

    public function setOfmoupDtDerModif(?\DateTimeInterface $ofmoupDtDerModif): self
    {
        $this->ofmoupDtDerModif = $ofmoupDtDerModif;

        return $this;
    }

    public function getOfmoupParcoursMoyen(): ?string
    {
        return $this->ofmoupParcoursMoyen;
    }

    public function setOfmoupParcoursMoyen(?string $ofmoupParcoursMoyen): self
    {
        $this->ofmoupParcoursMoyen = $ofmoupParcoursMoyen;

        return $this;
    }

    public function getOfmoupParcoursMaxi(): ?string
    {
        return $this->ofmoupParcoursMaxi;
    }

    public function setOfmoupParcoursMaxi(?string $ofmoupParcoursMaxi): self
    {
        $this->ofmoupParcoursMaxi = $ofmoupParcoursMaxi;

        return $this;
    }

    public function getMpr(): ?RBordereau
    {
        return $this->mpr;
    }

    public function setMpr(?RBordereau $mpr): self
    {
        $this->mpr = $mpr;

        return $this;
    }

    public function getOfmou(): ?OffreModule
    {
        return $this->ofmou;
    }

    public function setOfmou(?OffreModule $ofmou): self
    {
        $this->ofmou = $ofmou;

        return $this;
    }


}
