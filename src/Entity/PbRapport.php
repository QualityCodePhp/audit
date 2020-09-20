<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PbRapport
 *
 * @ORM\Table(name="pb_rapport", uniqueConstraints={@ORM\UniqueConstraint(name="pb_rapport_pk", columns={"pbr_id"})}, indexes={@ORM\Index(name="pb_rapport_iriif", columns={"pbr_item"}), @ORM\Index(name="pb_rapport_rpif", columns={"pbr_rapport"}), @ORM\Index(name="pb_rapport_trtif", columns={"pbr_trapport"})})
 * @ORM\Entity
 */
class PbRapport
{
    /**
     * @var string
     *
     * @ORM\Column(name="pbr_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="pb_rapport_pbr_id_seq", allocationSize=1, initialValue=1)
     */
    private $pbrId;

    /**
     * @var string
     *
     * @ORM\Column(name="pbr_typeitem", type="string", length=1, nullable=false, options={"comment"="T : item de type de rapport, R : item de rapport"})
     */
    private $pbrTypeitem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pbr_present", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $pbrPresent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pbr_detail", type="string", length=3000, nullable=true)
     */
    private $pbrDetail;

    /**
     * @var \IRapport
     *
     * @ORM\ManyToOne(targetEntity="IRapport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pbr_item", referencedColumnName="irp_id")
     * })
     */
    private $pbrItem;

    /**
     * @var \Rapport
     *
     * @ORM\ManyToOne(targetEntity="Rapport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pbr_rapport", referencedColumnName="rpt_id")
     * })
     */
    private $pbrRapport;

    /**
     * @var \TRapport
     *
     * @ORM\ManyToOne(targetEntity="TRapport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pbr_trapport", referencedColumnName="trp_id")
     * })
     */
    private $pbrTrapport;

    public function getPbrId(): ?string
    {
        return $this->pbrId;
    }

    public function getPbrTypeitem(): ?string
    {
        return $this->pbrTypeitem;
    }

    public function setPbrTypeitem(string $pbrTypeitem): self
    {
        $this->pbrTypeitem = $pbrTypeitem;

        return $this;
    }

    public function getPbrPresent(): ?string
    {
        return $this->pbrPresent;
    }

    public function setPbrPresent(?string $pbrPresent): self
    {
        $this->pbrPresent = $pbrPresent;

        return $this;
    }

    public function getPbrDetail(): ?string
    {
        return $this->pbrDetail;
    }

    public function setPbrDetail(?string $pbrDetail): self
    {
        $this->pbrDetail = $pbrDetail;

        return $this;
    }

    public function getPbrItem(): ?IRapport
    {
        return $this->pbrItem;
    }

    public function setPbrItem(?IRapport $pbrItem): self
    {
        $this->pbrItem = $pbrItem;

        return $this;
    }

    public function getPbrRapport(): ?Rapport
    {
        return $this->pbrRapport;
    }

    public function setPbrRapport(?Rapport $pbrRapport): self
    {
        $this->pbrRapport = $pbrRapport;

        return $this;
    }

    public function getPbrTrapport(): ?TRapport
    {
        return $this->pbrTrapport;
    }

    public function setPbrTrapport(?TRapport $pbrTrapport): self
    {
        $this->pbrTrapport = $pbrTrapport;

        return $this;
    }


}
