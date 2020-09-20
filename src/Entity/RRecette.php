<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RRecette
 *
 * @ORM\Table(name="r_recette", uniqueConstraints={@ORM\UniqueConstraint(name="r_recette_pk", columns={"rmp_id"})}, indexes={@ORM\Index(name="r_recette_mpmif", columns={"rmp_modafprog"}), @ORM\Index(name="r_recette_trtif", columns={"rmp_typrrub"})})
 * @ORM\Entity
 */
class RRecette
{
    /**
     * @var int
     *
     * @ORM\Column(name="rmp_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="r_recette_rmp_id_seq", allocationSize=1, initialValue=1)
     */
    private $rmpId;

    /**
     * @var string
     *
     * @ORM\Column(name="rmp_rang", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $rmpRang;

    /**
     * @var \ModafProg
     *
     * @ORM\ManyToOne(targetEntity="ModafProg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rmp_modafprog", referencedColumnName="mop_id")
     * })
     */
    private $rmpModafprog;

    /**
     * @var \TrRecette
     *
     * @ORM\ManyToOne(targetEntity="TrRecette")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rmp_typrrub", referencedColumnName="trr_id")
     * })
     */
    private $rmpTyprrub;

    public function getRmpId(): ?int
    {
        return $this->rmpId;
    }

    public function getRmpRang(): ?string
    {
        return $this->rmpRang;
    }

    public function setRmpRang(string $rmpRang): self
    {
        $this->rmpRang = $rmpRang;

        return $this;
    }

    public function getRmpModafprog(): ?ModafProg
    {
        return $this->rmpModafprog;
    }

    public function setRmpModafprog(?ModafProg $rmpModafprog): self
    {
        $this->rmpModafprog = $rmpModafprog;

        return $this;
    }

    public function getRmpTyprrub(): ?TrRecette
    {
        return $this->rmpTyprrub;
    }

    public function setRmpTyprrub(?TrRecette $rmpTyprrub): self
    {
        $this->rmpTyprrub = $rmpTyprrub;

        return $this;
    }


}
