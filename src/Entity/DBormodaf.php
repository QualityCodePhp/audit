<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DBormodaf
 *
 * @ORM\Table(name="d_bormodaf", uniqueConstraints={@ORM\UniqueConstraint(name="d_bormodaf_pk", columns={"deb_id"})}, indexes={@ORM\Index(name="d_bormodaf_upuif", columns={"deb_unite"}), @ORM\Index(name="d_bormodaf_rbrif", columns={"deb_rubrique"}), @ORM\Index(name="d_bormodaf_tbtif", columns={"deb_typedet"})})
 * @ORM\Entity
 */
class DBormodaf
{
    /**
     * @var int
     *
     * @ORM\Column(name="deb_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="d_bormodaf_deb_id_seq", allocationSize=1, initialValue=1)
     */
    private $debId;

    /**
     * @var string
     *
     * @ORM\Column(name="deb_code", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $debCode;

    /**
     * @var string
     *
     * @ORM\Column(name="deb_libelle", type="string", length=50, nullable=false)
     */
    private $debLibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="deb_comment", type="string", length=300, nullable=true)
     */
    private $debComment;

    /**
     * @var string
     *
     * @ORM\Column(name="deb_mntoblig", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $debMntoblig;

    /**
     * @var string
     *
     * @ORM\Column(name="deb_info", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $debInfo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="deb_prxoblig", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $debPrxoblig;

    /**
     * @var \RBormodaf
     *
     * @ORM\ManyToOne(targetEntity="RBormodaf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deb_rubrique", referencedColumnName="rub_id")
     * })
     */
    private $debRubrique;

    /**
     * @var \TdBord
     *
     * @ORM\ManyToOne(targetEntity="TdBord")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deb_typedet", referencedColumnName="tdb_id")
     * })
     */
    private $debTypedet;

    /**
     * @var \UnitePrest
     *
     * @ORM\ManyToOne(targetEntity="UnitePrest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deb_unite", referencedColumnName="unp_id")
     * })
     */
    private $debUnite;

    public function getDebId(): ?int
    {
        return $this->debId;
    }

    public function getDebCode(): ?string
    {
        return $this->debCode;
    }

    public function setDebCode(string $debCode): self
    {
        $this->debCode = $debCode;

        return $this;
    }

    public function getDebLibelle(): ?string
    {
        return $this->debLibelle;
    }

    public function setDebLibelle(string $debLibelle): self
    {
        $this->debLibelle = $debLibelle;

        return $this;
    }

    public function getDebComment(): ?string
    {
        return $this->debComment;
    }

    public function setDebComment(?string $debComment): self
    {
        $this->debComment = $debComment;

        return $this;
    }

    public function getDebMntoblig(): ?string
    {
        return $this->debMntoblig;
    }

    public function setDebMntoblig(string $debMntoblig): self
    {
        $this->debMntoblig = $debMntoblig;

        return $this;
    }

    public function getDebInfo(): ?string
    {
        return $this->debInfo;
    }

    public function setDebInfo(string $debInfo): self
    {
        $this->debInfo = $debInfo;

        return $this;
    }

    public function getDebPrxoblig(): ?string
    {
        return $this->debPrxoblig;
    }

    public function setDebPrxoblig(?string $debPrxoblig): self
    {
        $this->debPrxoblig = $debPrxoblig;

        return $this;
    }

    public function getDebRubrique(): ?RBormodaf
    {
        return $this->debRubrique;
    }

    public function setDebRubrique(?RBormodaf $debRubrique): self
    {
        $this->debRubrique = $debRubrique;

        return $this;
    }

    public function getDebTypedet(): ?TdBord
    {
        return $this->debTypedet;
    }

    public function setDebTypedet(?TdBord $debTypedet): self
    {
        $this->debTypedet = $debTypedet;

        return $this;
    }

    public function getDebUnite(): ?UnitePrest
    {
        return $this->debUnite;
    }

    public function setDebUnite(?UnitePrest $debUnite): self
    {
        $this->debUnite = $debUnite;

        return $this;
    }


}
