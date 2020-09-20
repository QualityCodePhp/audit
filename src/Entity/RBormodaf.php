<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RBormodaf
 *
 * @ORM\Table(name="r_bormodaf", uniqueConstraints={@ORM\UniqueConstraint(name="r_bormodaf_pk", columns={"rub_id"})}, indexes={@ORM\Index(name="r_bormodaf_upuif", columns={"rub_unite"}), @ORM\Index(name="r_bormodaf_ebeif", columns={"rub_entete"}), @ORM\Index(name="r_bormodaf_tbtif", columns={"rub_typerub"})})
 * @ORM\Entity
 */
class RBormodaf
{
    /**
     * @var int
     *
     * @ORM\Column(name="rub_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="r_bormodaf_rub_id_seq", allocationSize=1, initialValue=1)
     */
    private $rubId;

    /**
     * @var string
     *
     * @ORM\Column(name="rub_rang", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $rubRang;

    /**
     * @var string
     *
     * @ORM\Column(name="rub_libelle", type="string", length=50, nullable=false)
     */
    private $rubLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="rub_saisiemnt", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $rubSaisiemnt;

    /**
     * @var string
     *
     * @ORM\Column(name="rub_mntoblig", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $rubMntoblig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rub_comment", type="string", length=300, nullable=true)
     */
    private $rubComment;

    /**
     * @var string
     *
     * @ORM\Column(name="rub_info", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $rubInfo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rub_pxoblig", type="decimal", precision=1, scale=0, nullable=true, options={"comment"="Saisie du prix unitaire"})
     */
    private $rubPxoblig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rub_typrix", type="string", length=1, nullable=true, options={"comment"="Type de prix F-Forfaitaire U-Unitaire"})
     */
    private $rubTyprix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rub_nbtranche", type="decimal", precision=1, scale=0, nullable=true, options={"comment"="Nombre de tranches"})
     */
    private $rubNbtranche;

    /**
     * @var \EBormodaf
     *
     * @ORM\ManyToOne(targetEntity="EBormodaf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rub_entete", referencedColumnName="etb_id")
     * })
     */
    private $rubEntete;

    /**
     * @var \TrBord
     *
     * @ORM\ManyToOne(targetEntity="TrBord")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rub_typerub", referencedColumnName="trb_id")
     * })
     */
    private $rubTyperub;

    /**
     * @var \UnitePrest
     *
     * @ORM\ManyToOne(targetEntity="UnitePrest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rub_unite", referencedColumnName="unp_id")
     * })
     */
    private $rubUnite;

    public function getRubId(): ?int
    {
        return $this->rubId;
    }

    public function getRubRang(): ?string
    {
        return $this->rubRang;
    }

    public function setRubRang(string $rubRang): self
    {
        $this->rubRang = $rubRang;

        return $this;
    }

    public function getRubLibelle(): ?string
    {
        return $this->rubLibelle;
    }

    public function setRubLibelle(string $rubLibelle): self
    {
        $this->rubLibelle = $rubLibelle;

        return $this;
    }

    public function getRubSaisiemnt(): ?string
    {
        return $this->rubSaisiemnt;
    }

    public function setRubSaisiemnt(string $rubSaisiemnt): self
    {
        $this->rubSaisiemnt = $rubSaisiemnt;

        return $this;
    }

    public function getRubMntoblig(): ?string
    {
        return $this->rubMntoblig;
    }

    public function setRubMntoblig(string $rubMntoblig): self
    {
        $this->rubMntoblig = $rubMntoblig;

        return $this;
    }

    public function getRubComment(): ?string
    {
        return $this->rubComment;
    }

    public function setRubComment(?string $rubComment): self
    {
        $this->rubComment = $rubComment;

        return $this;
    }

    public function getRubInfo(): ?string
    {
        return $this->rubInfo;
    }

    public function setRubInfo(string $rubInfo): self
    {
        $this->rubInfo = $rubInfo;

        return $this;
    }

    public function getRubPxoblig(): ?string
    {
        return $this->rubPxoblig;
    }

    public function setRubPxoblig(?string $rubPxoblig): self
    {
        $this->rubPxoblig = $rubPxoblig;

        return $this;
    }

    public function getRubTyprix(): ?string
    {
        return $this->rubTyprix;
    }

    public function setRubTyprix(?string $rubTyprix): self
    {
        $this->rubTyprix = $rubTyprix;

        return $this;
    }

    public function getRubNbtranche(): ?string
    {
        return $this->rubNbtranche;
    }

    public function setRubNbtranche(?string $rubNbtranche): self
    {
        $this->rubNbtranche = $rubNbtranche;

        return $this;
    }

    public function getRubEntete(): ?EBormodaf
    {
        return $this->rubEntete;
    }

    public function setRubEntete(?EBormodaf $rubEntete): self
    {
        $this->rubEntete = $rubEntete;

        return $this;
    }

    public function getRubTyperub(): ?TrBord
    {
        return $this->rubTyperub;
    }

    public function setRubTyperub(?TrBord $rubTyperub): self
    {
        $this->rubTyperub = $rubTyperub;

        return $this;
    }

    public function getRubUnite(): ?UnitePrest
    {
        return $this->rubUnite;
    }

    public function setRubUnite(?UnitePrest $rubUnite): self
    {
        $this->rubUnite = $rubUnite;

        return $this;
    }


}
