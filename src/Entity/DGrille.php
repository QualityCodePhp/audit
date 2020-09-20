<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DGrille
 *
 * @ORM\Table(name="d_grille", uniqueConstraints={@ORM\UniqueConstraint(name="d_grille_pk", columns={"deg_id"})}, indexes={@ORM\Index(name="d_grille_rgrif", columns={"deg_r_grille"}), @ORM\Index(name="d_grille_dgdif", columns={"deg_dc_grille"})})
 * @ORM\Entity
 */
class DGrille
{
    /**
     * @var int
     *
     * @ORM\Column(name="deg_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="d_grille_deg_id_seq", allocationSize=1, initialValue=1)
     */
    private $degId;

    /**
     * @var string
     *
     * @ORM\Column(name="deg_rang", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $degRang;

    /**
     * @var string
     *
     * @ORM\Column(name="deg_libelle", type="string", length=50, nullable=false)
     */
    private $degLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="deg_type", type="string", length=2, nullable=false, options={"comment"="CC =  Case Ã  cocher, EC = Echelle, FC = Formule de Calcul"})
     */
    private $degType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="deg_notemaxi", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $degNotemaxi;

    /**
     * @var string
     *
     * @ORM\Column(name="deg_pond", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $degPond;

    /**
     * @var string|null
     *
     * @ORM\Column(name="deg_comment", type="string", length=300, nullable=true)
     */
    private $degComment;

    /**
     * @var \DcGrille
     *
     * @ORM\ManyToOne(targetEntity="DcGrille")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deg_dc_grille", referencedColumnName="dcg_id")
     * })
     */
    private $degDcGrille;

    /**
     * @var \RGrille
     *
     * @ORM\ManyToOne(targetEntity="RGrille")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deg_r_grille", referencedColumnName="rug_id")
     * })
     */
    private $degRGrille;

    public function getDegId(): ?int
    {
        return $this->degId;
    }

    public function getDegRang(): ?string
    {
        return $this->degRang;
    }

    public function setDegRang(string $degRang): self
    {
        $this->degRang = $degRang;

        return $this;
    }

    public function getDegLibelle(): ?string
    {
        return $this->degLibelle;
    }

    public function setDegLibelle(string $degLibelle): self
    {
        $this->degLibelle = $degLibelle;

        return $this;
    }

    public function getDegType(): ?string
    {
        return $this->degType;
    }

    public function setDegType(string $degType): self
    {
        $this->degType = $degType;

        return $this;
    }

    public function getDegNotemaxi(): ?string
    {
        return $this->degNotemaxi;
    }

    public function setDegNotemaxi(?string $degNotemaxi): self
    {
        $this->degNotemaxi = $degNotemaxi;

        return $this;
    }

    public function getDegPond(): ?string
    {
        return $this->degPond;
    }

    public function setDegPond(string $degPond): self
    {
        $this->degPond = $degPond;

        return $this;
    }

    public function getDegComment(): ?string
    {
        return $this->degComment;
    }

    public function setDegComment(?string $degComment): self
    {
        $this->degComment = $degComment;

        return $this;
    }

    public function getDegDcGrille(): ?DcGrille
    {
        return $this->degDcGrille;
    }

    public function setDegDcGrille(?DcGrille $degDcGrille): self
    {
        $this->degDcGrille = $degDcGrille;

        return $this;
    }

    public function getDegRGrille(): ?RGrille
    {
        return $this->degRGrille;
    }

    public function setDegRGrille(?RGrille $degRGrille): self
    {
        $this->degRGrille = $degRGrille;

        return $this;
    }


}
