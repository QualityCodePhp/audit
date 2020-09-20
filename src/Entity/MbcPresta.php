<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MbcPresta
 *
 * @ORM\Table(name="mbc_presta", uniqueConstraints={@ORM\UniqueConstraint(name="mbc_presta_pk", columns={"mbp_id"})}, indexes={@ORM\Index(name="association_573_fk", columns={"rep_id"})})
 * @ORM\Entity
 */
class MbcPresta
{
    /**
     * @var string
     *
     * @ORM\Column(name="mbp_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mbc_presta_mbp_id_seq", allocationSize=1, initialValue=1)
     */
    private $mbpId;

    /**
     * @var string
     *
     * @ORM\Column(name="mbp_offre", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $mbpOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="mbp_rbordereau", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $mbpRbordereau;

    /**
     * @var string
     *
     * @ORM\Column(name="mbp_mbcid", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $mbpMbcid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mbp_pxunite", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $mbpPxunite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mbp_nbunite", type="decimal", precision=9, scale=2, nullable=true)
     */
    private $mbpNbunite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mbp_montant", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $mbpMontant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mbp_nbmini", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $mbpNbmini;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mbp_nbmaxi", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $mbpNbmaxi;

    /**
     * @var \Reponse
     *
     * @ORM\ManyToOne(targetEntity="Reponse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_id", referencedColumnName="rep_id")
     * })
     */
    private $rep;

    public function getMbpId(): ?string
    {
        return $this->mbpId;
    }

    public function getMbpOffre(): ?string
    {
        return $this->mbpOffre;
    }

    public function setMbpOffre(string $mbpOffre): self
    {
        $this->mbpOffre = $mbpOffre;

        return $this;
    }

    public function getMbpRbordereau(): ?string
    {
        return $this->mbpRbordereau;
    }

    public function setMbpRbordereau(string $mbpRbordereau): self
    {
        $this->mbpRbordereau = $mbpRbordereau;

        return $this;
    }

    public function getMbpMbcid(): ?string
    {
        return $this->mbpMbcid;
    }

    public function setMbpMbcid(string $mbpMbcid): self
    {
        $this->mbpMbcid = $mbpMbcid;

        return $this;
    }

    public function getMbpPxunite(): ?string
    {
        return $this->mbpPxunite;
    }

    public function setMbpPxunite(?string $mbpPxunite): self
    {
        $this->mbpPxunite = $mbpPxunite;

        return $this;
    }

    public function getMbpNbunite(): ?string
    {
        return $this->mbpNbunite;
    }

    public function setMbpNbunite(?string $mbpNbunite): self
    {
        $this->mbpNbunite = $mbpNbunite;

        return $this;
    }

    public function getMbpMontant(): ?string
    {
        return $this->mbpMontant;
    }

    public function setMbpMontant(?string $mbpMontant): self
    {
        $this->mbpMontant = $mbpMontant;

        return $this;
    }

    public function getMbpNbmini(): ?string
    {
        return $this->mbpNbmini;
    }

    public function setMbpNbmini(?string $mbpNbmini): self
    {
        $this->mbpNbmini = $mbpNbmini;

        return $this;
    }

    public function getMbpNbmaxi(): ?string
    {
        return $this->mbpNbmaxi;
    }

    public function setMbpNbmaxi(?string $mbpNbmaxi): self
    {
        $this->mbpNbmaxi = $mbpNbmaxi;

        return $this;
    }

    public function getRep(): ?Reponse
    {
        return $this->rep;
    }

    public function setRep(?Reponse $rep): self
    {
        $this->rep = $rep;

        return $this;
    }


}
