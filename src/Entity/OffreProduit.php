<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffreProduit
 *
 * @ORM\Table(name="offre_produit", uniqueConstraints={@ORM\UniqueConstraint(name="offre_produit_pk", columns={"ofpdt_id"})}, indexes={@ORM\Index(name="ofpdt_off_fk", columns={"off_id"}), @ORM\Index(name="ofpdt_pdt_fk", columns={"pdt_id"})})
 * @ORM\Entity
 */
class OffreProduit
{
    /**
     * @var int
     *
     * @ORM\Column(name="ofpdt_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="offre_produit_ofpdt_id_seq", allocationSize=1, initialValue=1)
     */
    private $ofpdtId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofpdt_flg_suppr", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $ofpdtFlgSuppr;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_id", referencedColumnName="off_id")
     * })
     */
    private $off;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pdt_id", referencedColumnName="pdt_id")
     * })
     */
    private $pdt;

    public function getOfpdtId(): ?int
    {
        return $this->ofpdtId;
    }

    public function getOfpdtFlgSuppr(): ?string
    {
        return $this->ofpdtFlgSuppr;
    }

    public function setOfpdtFlgSuppr(?string $ofpdtFlgSuppr): self
    {
        $this->ofpdtFlgSuppr = $ofpdtFlgSuppr;

        return $this;
    }

    public function getOff(): ?Offre
    {
        return $this->off;
    }

    public function setOff(?Offre $off): self
    {
        $this->off = $off;

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
