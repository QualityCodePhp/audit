<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VGrille
 *
 * @ORM\Table(name="v_grille", uniqueConstraints={@ORM\UniqueConstraint(name="v_grille_pk", columns={"vgi_id"})}, indexes={@ORM\Index(name="association_111_fk", columns={"vgi_rgrille"}), @ORM\Index(name="v_grille_ggif", columns={"vgi_grille"}), @ORM\Index(name="v_grille_dgdif", columns={"vgi_dgrille"})})
 * @ORM\Entity
 */
class VGrille
{
    /**
     * @var string
     *
     * @ORM\Column(name="vgi_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="v_grille_vgi_id_seq", allocationSize=1, initialValue=1)
     */
    private $vgiId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vgi_valeur", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $vgiValeur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vgi_comment", type="string", length=300, nullable=true)
     */
    private $vgiComment;

    /**
     * @var \RGrille
     *
     * @ORM\ManyToOne(targetEntity="RGrille")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vgi_rgrille", referencedColumnName="rug_id")
     * })
     */
    private $vgiRgrille;

    /**
     * @var \DGrille
     *
     * @ORM\ManyToOne(targetEntity="DGrille")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vgi_dgrille", referencedColumnName="deg_id")
     * })
     */
    private $vgiDgrille;

    /**
     * @var \Grille
     *
     * @ORM\ManyToOne(targetEntity="Grille")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vgi_grille", referencedColumnName="gri_id")
     * })
     */
    private $vgiGrille;

    public function getVgiId(): ?string
    {
        return $this->vgiId;
    }

    public function getVgiValeur(): ?string
    {
        return $this->vgiValeur;
    }

    public function setVgiValeur(?string $vgiValeur): self
    {
        $this->vgiValeur = $vgiValeur;

        return $this;
    }

    public function getVgiComment(): ?string
    {
        return $this->vgiComment;
    }

    public function setVgiComment(?string $vgiComment): self
    {
        $this->vgiComment = $vgiComment;

        return $this;
    }

    public function getVgiRgrille(): ?RGrille
    {
        return $this->vgiRgrille;
    }

    public function setVgiRgrille(?RGrille $vgiRgrille): self
    {
        $this->vgiRgrille = $vgiRgrille;

        return $this;
    }

    public function getVgiDgrille(): ?DGrille
    {
        return $this->vgiDgrille;
    }

    public function setVgiDgrille(?DGrille $vgiDgrille): self
    {
        $this->vgiDgrille = $vgiDgrille;

        return $this;
    }

    public function getVgiGrille(): ?Grille
    {
        return $this->vgiGrille;
    }

    public function setVgiGrille(?Grille $vgiGrille): self
    {
        $this->vgiGrille = $vgiGrille;

        return $this;
    }


}
