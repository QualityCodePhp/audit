<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffreModuleContractant
 *
 * @ORM\Table(name="offre_module_contractant", uniqueConstraints={@ORM\UniqueConstraint(name="offre_module_contractant_pk", columns={"ofmouc_id"})}, indexes={@ORM\Index(name="ofmou_ofmouc_fk", columns={"ofmou_id"})})
 * @ORM\Entity
 */
class OffreModuleContractant
{
    /**
     * @var int
     *
     * @ORM\Column(name="ofmouc_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="offre_module_contractant_ofmouc_id_seq", allocationSize=1, initialValue=1)
     */
    private $ofmoucId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofmouc_siret", type="string", length=20, nullable=true)
     */
    private $ofmoucSiret;

    /**
     * @var string
     *
     * @ORM\Column(name="ofmouc_flg_suppr", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $ofmoucFlgSuppr;

    /**
     * @var \OffreModule
     *
     * @ORM\ManyToOne(targetEntity="OffreModule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ofmou_id", referencedColumnName="ofmou_id")
     * })
     */
    private $ofmou;

    public function getOfmoucId(): ?int
    {
        return $this->ofmoucId;
    }

    public function getOfmoucSiret(): ?string
    {
        return $this->ofmoucSiret;
    }

    public function setOfmoucSiret(?string $ofmoucSiret): self
    {
        $this->ofmoucSiret = $ofmoucSiret;

        return $this;
    }

    public function getOfmoucFlgSuppr(): ?string
    {
        return $this->ofmoucFlgSuppr;
    }

    public function setOfmoucFlgSuppr(string $ofmoucFlgSuppr): self
    {
        $this->ofmoucFlgSuppr = $ofmoucFlgSuppr;

        return $this;
    }

    public function getOfmou(): ?OffreModule
    {
        return $this->ofmou;
    }

    public function setOfmou(?OffreModule $ofmou): self
    {
        $this->ofmou = $ofmou;

        return $this;
    }


}
