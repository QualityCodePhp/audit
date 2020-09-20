<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", uniqueConstraints={@ORM\UniqueConstraint(name="produit_pk", columns={"pdt_id"})})
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="pdt_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="produit_pdt_id_seq", allocationSize=1, initialValue=1)
     */
    private $pdtId;

    /**
     * @var string
     *
     * @ORM\Column(name="pdt_lib", type="string", length=100, nullable=false)
     */
    private $pdtLib;

    /**
     * @var string
     *
     * @ORM\Column(name="pdt_flg_suppr", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $pdtFlgSuppr;

    public function getPdtId(): ?int
    {
        return $this->pdtId;
    }

    public function getPdtLib(): ?string
    {
        return $this->pdtLib;
    }

    public function setPdtLib(string $pdtLib): self
    {
        $this->pdtLib = $pdtLib;

        return $this;
    }

    public function getPdtFlgSuppr(): ?string
    {
        return $this->pdtFlgSuppr;
    }

    public function setPdtFlgSuppr(string $pdtFlgSuppr): self
    {
        $this->pdtFlgSuppr = $pdtFlgSuppr;

        return $this;
    }


}
