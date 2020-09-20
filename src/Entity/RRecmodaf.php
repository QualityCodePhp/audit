<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RRecmodaf
 *
 * @ORM\Table(name="r_recmodaf", uniqueConstraints={@ORM\UniqueConstraint(name="r_recmodaf_pk", columns={"ruc_id"})}, indexes={@ORM\Index(name="r_recmodaf_mamif", columns={"ruc_modaf"}), @ORM\Index(name="r_recmodaf_trtif", columns={"ruc_typrrub"})})
 * @ORM\Entity
 */
class RRecmodaf
{
    /**
     * @var int
     *
     * @ORM\Column(name="ruc_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="r_recmodaf_ruc_id_seq", allocationSize=1, initialValue=1)
     */
    private $rucId;

    /**
     * @var string
     *
     * @ORM\Column(name="ruc_rang", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $rucRang;

    /**
     * @var \ModeleAf
     *
     * @ORM\ManyToOne(targetEntity="ModeleAf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ruc_modaf", referencedColumnName="maf_id")
     * })
     */
    private $rucModaf;

    /**
     * @var \TrRecette
     *
     * @ORM\ManyToOne(targetEntity="TrRecette")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ruc_typrrub", referencedColumnName="trr_id")
     * })
     */
    private $rucTyprrub;

    public function getRucId(): ?int
    {
        return $this->rucId;
    }

    public function getRucRang(): ?string
    {
        return $this->rucRang;
    }

    public function setRucRang(string $rucRang): self
    {
        $this->rucRang = $rucRang;

        return $this;
    }

    public function getRucModaf(): ?ModeleAf
    {
        return $this->rucModaf;
    }

    public function setRucModaf(?ModeleAf $rucModaf): self
    {
        $this->rucModaf = $rucModaf;

        return $this;
    }

    public function getRucTyprrub(): ?TrRecette
    {
        return $this->rucTyprrub;
    }

    public function setRucTyprrub(?TrRecette $rucTyprrub): self
    {
        $this->rucTyprrub = $rucTyprrub;

        return $this;
    }


}
