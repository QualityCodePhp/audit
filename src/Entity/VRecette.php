<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VRecette
 *
 * @ORM\Table(name="v_recette", uniqueConstraints={@ORM\UniqueConstraint(name="v_recette_pk", columns={"vre_id"})}, indexes={@ORM\Index(name="v_recette_rrrif", columns={"vre_rrecette"}), @ORM\Index(name="v_recette_drdif", columns={"vre_drecette"}), @ORM\Index(name="v_recette_ooif", columns={"vre_offre"})})
 * @ORM\Entity
 */
class VRecette
{
    /**
     * @var string
     *
     * @ORM\Column(name="vre_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="v_recette_vre_id_seq", allocationSize=1, initialValue=1)
     */
    private $vreId;

    /**
     * @var string
     *
     * @ORM\Column(name="vre_montant", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $vreMontant;

    /**
     * @var \DRecette
     *
     * @ORM\ManyToOne(targetEntity="DRecette")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vre_drecette", referencedColumnName="dmp_id")
     * })
     */
    private $vreDrecette;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vre_offre", referencedColumnName="off_id")
     * })
     */
    private $vreOffre;

    /**
     * @var \RRecette
     *
     * @ORM\ManyToOne(targetEntity="RRecette")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vre_rrecette", referencedColumnName="rmp_id")
     * })
     */
    private $vreRrecette;

    public function getVreId(): ?string
    {
        return $this->vreId;
    }

    public function getVreMontant(): ?string
    {
        return $this->vreMontant;
    }

    public function setVreMontant(string $vreMontant): self
    {
        $this->vreMontant = $vreMontant;

        return $this;
    }

    public function getVreDrecette(): ?DRecette
    {
        return $this->vreDrecette;
    }

    public function setVreDrecette(?DRecette $vreDrecette): self
    {
        $this->vreDrecette = $vreDrecette;

        return $this;
    }

    public function getVreOffre(): ?Offre
    {
        return $this->vreOffre;
    }

    public function setVreOffre(?Offre $vreOffre): self
    {
        $this->vreOffre = $vreOffre;

        return $this;
    }

    public function getVreRrecette(): ?RRecette
    {
        return $this->vreRrecette;
    }

    public function setVreRrecette(?RRecette $vreRrecette): self
    {
        $this->vreRrecette = $vreRrecette;

        return $this;
    }


}
