<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DBordereau
 *
 * @ORM\Table(name="d_bordereau", uniqueConstraints={@ORM\UniqueConstraint(name="d_bordereau_pk", columns={"mpd_id"})}, indexes={@ORM\Index(name="d_bordereau_rbmif", columns={"mpd_rubrique"}), @ORM\Index(name="d_bordereau_upuif", columns={"mpd_unite"}), @ORM\Index(name="d_bordereau_tbtif", columns={"mpd_typedet"})})
 * @ORM\Entity
 */
class DBordereau
{
    /**
     * @var int
     *
     * @ORM\Column(name="mpd_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="d_bordereau_mpd_id_seq", allocationSize=1, initialValue=1)
     */
    private $mpdId;

    /**
     * @var string
     *
     * @ORM\Column(name="mpd_code", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $mpdCode;

    /**
     * @var string
     *
     * @ORM\Column(name="mpd_libelle", type="string", length=50, nullable=false)
     */
    private $mpdLibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mpd_comment", type="string", length=300, nullable=true)
     */
    private $mpdComment;

    /**
     * @var string
     *
     * @ORM\Column(name="mpd_mntoblig", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $mpdMntoblig;

    /**
     * @var string
     *
     * @ORM\Column(name="mpd_info", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $mpdInfo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mpd_prxoblig", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $mpdPrxoblig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mpd_trchmin", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $mpdTrchmin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mpd_trchmax", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $mpdTrchmax;

    /**
     * @var \RBordereau
     *
     * @ORM\ManyToOne(targetEntity="RBordereau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mpd_rubrique", referencedColumnName="mpr_id")
     * })
     */
    private $mpdRubrique;

    /**
     * @var \TdBord
     *
     * @ORM\ManyToOne(targetEntity="TdBord")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mpd_typedet", referencedColumnName="tdb_id")
     * })
     */
    private $mpdTypedet;

    /**
     * @var \UnitePrest
     *
     * @ORM\ManyToOne(targetEntity="UnitePrest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mpd_unite", referencedColumnName="unp_id")
     * })
     */
    private $mpdUnite;

    public function getMpdId(): ?int
    {
        return $this->mpdId;
    }

    public function getMpdCode(): ?string
    {
        return $this->mpdCode;
    }

    public function setMpdCode(string $mpdCode): self
    {
        $this->mpdCode = $mpdCode;

        return $this;
    }

    public function getMpdLibelle(): ?string
    {
        return $this->mpdLibelle;
    }

    public function setMpdLibelle(string $mpdLibelle): self
    {
        $this->mpdLibelle = $mpdLibelle;

        return $this;
    }

    public function getMpdComment(): ?string
    {
        return $this->mpdComment;
    }

    public function setMpdComment(?string $mpdComment): self
    {
        $this->mpdComment = $mpdComment;

        return $this;
    }

    public function getMpdMntoblig(): ?string
    {
        return $this->mpdMntoblig;
    }

    public function setMpdMntoblig(string $mpdMntoblig): self
    {
        $this->mpdMntoblig = $mpdMntoblig;

        return $this;
    }

    public function getMpdInfo(): ?string
    {
        return $this->mpdInfo;
    }

    public function setMpdInfo(string $mpdInfo): self
    {
        $this->mpdInfo = $mpdInfo;

        return $this;
    }

    public function getMpdPrxoblig(): ?string
    {
        return $this->mpdPrxoblig;
    }

    public function setMpdPrxoblig(?string $mpdPrxoblig): self
    {
        $this->mpdPrxoblig = $mpdPrxoblig;

        return $this;
    }

    public function getMpdTrchmin(): ?string
    {
        return $this->mpdTrchmin;
    }

    public function setMpdTrchmin(?string $mpdTrchmin): self
    {
        $this->mpdTrchmin = $mpdTrchmin;

        return $this;
    }

    public function getMpdTrchmax(): ?string
    {
        return $this->mpdTrchmax;
    }

    public function setMpdTrchmax(?string $mpdTrchmax): self
    {
        $this->mpdTrchmax = $mpdTrchmax;

        return $this;
    }

    public function getMpdRubrique(): ?RBordereau
    {
        return $this->mpdRubrique;
    }

    public function setMpdRubrique(?RBordereau $mpdRubrique): self
    {
        $this->mpdRubrique = $mpdRubrique;

        return $this;
    }

    public function getMpdTypedet(): ?TdBord
    {
        return $this->mpdTypedet;
    }

    public function setMpdTypedet(?TdBord $mpdTypedet): self
    {
        $this->mpdTypedet = $mpdTypedet;

        return $this;
    }

    public function getMpdUnite(): ?UnitePrest
    {
        return $this->mpdUnite;
    }

    public function setMpdUnite(?UnitePrest $mpdUnite): self
    {
        $this->mpdUnite = $mpdUnite;

        return $this;
    }


}
