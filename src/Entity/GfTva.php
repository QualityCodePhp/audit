<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GfTva
 *
 * @ORM\Table(name="gf_tva", uniqueConstraints={@ORM\UniqueConstraint(name="gf_tva_pk", columns={"gft_id"})})
 * @ORM\Entity
 */
class GfTva
{
    /**
     * @var string
     *
     * @ORM\Column(name="gft_id", type="decimal", precision=12, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gf_tva_gft_id_seq", allocationSize=1, initialValue=1)
     */
    private $gftId;

    /**
     * @var string
     *
     * @ORM\Column(name="gft_code", type="decimal", precision=2, scale=0, nullable=false, options={"comment"="Code TVA"})
     */
    private $gftCode;

    /**
     * @var string
     *
     * @ORM\Column(name="gft_valeur", type="decimal", precision=6, scale=2, nullable=false, options={"comment"="Libelle TVA"})
     */
    private $gftValeur;

    public function getGftId(): ?string
    {
        return $this->gftId;
    }

    public function getGftCode(): ?string
    {
        return $this->gftCode;
    }

    public function setGftCode(string $gftCode): self
    {
        $this->gftCode = $gftCode;

        return $this;
    }

    public function getGftValeur(): ?string
    {
        return $this->gftValeur;
    }

    public function setGftValeur(string $gftValeur): self
    {
        $this->gftValeur = $gftValeur;

        return $this;
    }


}
