<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffreModuleProduit
 *
 * @ORM\Table(name="offre_module_produit", uniqueConstraints={@ORM\UniqueConstraint(name="offre_module_produit_pk", columns={"ofmoupdt_id"})}, indexes={@ORM\Index(name="off_module_prd_fk", columns={"pdt_id"}), @ORM\Index(name="association_493_fk", columns={"ofmou_id"})})
 * @ORM\Entity
 */
class OffreModuleProduit
{
    /**
     * @var int
     *
     * @ORM\Column(name="ofmoupdt_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="offre_module_produit_ofmoupdt_id_seq", allocationSize=1, initialValue=1)
     */
    private $ofmoupdtId;

    /**
     * @var string
     *
     * @ORM\Column(name="ofmoupdt_flg_suppr", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $ofmoupdtFlgSuppr;

    /**
     * @var \OffreModule
     *
     * @ORM\ManyToOne(targetEntity="OffreModule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ofmou_id", referencedColumnName="ofmou_id")
     * })
     */
    private $ofmou;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pdt_id", referencedColumnName="pdt_id")
     * })
     */
    private $pdt;

    public function getOfmoupdtId(): ?int
    {
        return $this->ofmoupdtId;
    }

    public function getOfmoupdtFlgSuppr(): ?string
    {
        return $this->ofmoupdtFlgSuppr;
    }

    public function setOfmoupdtFlgSuppr(string $ofmoupdtFlgSuppr): self
    {
        $this->ofmoupdtFlgSuppr = $ofmoupdtFlgSuppr;

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

    public function getPdt(): ?Produit
    {
        return $this->pdt;
    }

    public function setPdt(?Produit $pdt): self
    {
        $this->pdt = $pdt;

        return $this;
    }


}
