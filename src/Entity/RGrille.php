<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RGrille
 *
 * @ORM\Table(name="r_grille", uniqueConstraints={@ORM\UniqueConstraint(name="r_grille_pk", columns={"rug_id"})}, indexes={@ORM\Index(name="r_grille_egeif", columns={"rug_e_grille"})})
 * @ORM\Entity
 */
class RGrille
{
    /**
     * @var int
     *
     * @ORM\Column(name="rug_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="r_grille_rug_id_seq", allocationSize=1, initialValue=1)
     */
    private $rugId;

    /**
     * @var string
     *
     * @ORM\Column(name="rug_rang", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $rugRang;

    /**
     * @var string
     *
     * @ORM\Column(name="rug_totalmaxi", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $rugTotalmaxi;

    /**
     * @var string
     *
     * @ORM\Column(name="rug_libelle", type="string", length=50, nullable=false)
     */
    private $rugLibelle;

    /**
     * @var \EGrille
     *
     * @ORM\ManyToOne(targetEntity="EGrille")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rug_e_grille", referencedColumnName="etg_id")
     * })
     */
    private $rugEGrille;

    public function getRugId(): ?int
    {
        return $this->rugId;
    }

    public function getRugRang(): ?string
    {
        return $this->rugRang;
    }

    public function setRugRang(string $rugRang): self
    {
        $this->rugRang = $rugRang;

        return $this;
    }

    public function getRugTotalmaxi(): ?string
    {
        return $this->rugTotalmaxi;
    }

    public function setRugTotalmaxi(string $rugTotalmaxi): self
    {
        $this->rugTotalmaxi = $rugTotalmaxi;

        return $this;
    }

    public function getRugLibelle(): ?string
    {
        return $this->rugLibelle;
    }

    public function setRugLibelle(string $rugLibelle): self
    {
        $this->rugLibelle = $rugLibelle;

        return $this;
    }

    public function getRugEGrille(): ?EGrille
    {
        return $this->rugEGrille;
    }

    public function setRugEGrille(?EGrille $rugEGrille): self
    {
        $this->rugEGrille = $rugEGrille;

        return $this;
    }


}
