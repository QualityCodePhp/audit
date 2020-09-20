<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MbcRpresta
 *
 * @ORM\Table(name="mbc_rpresta", uniqueConstraints={@ORM\UniqueConstraint(name="mbc_rpresta_pk", columns={"mbr_id"})})
 * @ORM\Entity
 */
class MbcRpresta
{
    /**
     * @var string
     *
     * @ORM\Column(name="mbr_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mbc_rpresta_mbr_id_seq", allocationSize=1, initialValue=1)
     */
    private $mbrId;

    /**
     * @var string
     *
     * @ORM\Column(name="mbr_rbordereau", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $mbrRbordereau;

    /**
     * @var string
     *
     * @ORM\Column(name="mbr_mbcid", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $mbrMbcid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mbr_libpresta", type="string", length=50, nullable=true)
     */
    private $mbrLibpresta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mbr_pxunite", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $mbrPxunite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mbr_nbunite", type="decimal", precision=9, scale=2, nullable=true)
     */
    private $mbrNbunite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mbr_montant", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $mbrMontant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mbr_nbmini", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $mbrNbmini;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mbr_nbmaxi", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $mbrNbmaxi;

    public function getMbrId(): ?string
    {
        return $this->mbrId;
    }

    public function getMbrRbordereau(): ?string
    {
        return $this->mbrRbordereau;
    }

    public function setMbrRbordereau(string $mbrRbordereau): self
    {
        $this->mbrRbordereau = $mbrRbordereau;

        return $this;
    }

    public function getMbrMbcid(): ?string
    {
        return $this->mbrMbcid;
    }

    public function setMbrMbcid(string $mbrMbcid): self
    {
        $this->mbrMbcid = $mbrMbcid;

        return $this;
    }

    public function getMbrLibpresta(): ?string
    {
        return $this->mbrLibpresta;
    }

    public function setMbrLibpresta(?string $mbrLibpresta): self
    {
        $this->mbrLibpresta = $mbrLibpresta;

        return $this;
    }

    public function getMbrPxunite(): ?string
    {
        return $this->mbrPxunite;
    }

    public function setMbrPxunite(?string $mbrPxunite): self
    {
        $this->mbrPxunite = $mbrPxunite;

        return $this;
    }

    public function getMbrNbunite(): ?string
    {
        return $this->mbrNbunite;
    }

    public function setMbrNbunite(?string $mbrNbunite): self
    {
        $this->mbrNbunite = $mbrNbunite;

        return $this;
    }

    public function getMbrMontant(): ?string
    {
        return $this->mbrMontant;
    }

    public function setMbrMontant(?string $mbrMontant): self
    {
        $this->mbrMontant = $mbrMontant;

        return $this;
    }

    public function getMbrNbmini(): ?string
    {
        return $this->mbrNbmini;
    }

    public function setMbrNbmini(?string $mbrNbmini): self
    {
        $this->mbrNbmini = $mbrNbmini;

        return $this;
    }

    public function getMbrNbmaxi(): ?string
    {
        return $this->mbrNbmaxi;
    }

    public function setMbrNbmaxi(?string $mbrNbmaxi): self
    {
        $this->mbrNbmaxi = $mbrNbmaxi;

        return $this;
    }


}
