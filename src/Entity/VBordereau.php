<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VBordereau
 *
 * @ORM\Table(name="v_bordereau", uniqueConstraints={@ORM\UniqueConstraint(name="v_bordereau_pk", columns={"vbp_id"})}, indexes={@ORM\Index(name="v_bordereau_rbmif", columns={"vbp_rbordereau"}), @ORM\Index(name="v_bordereau_bbif", columns={"vbp_bordereau"}), @ORM\Index(name="v_bordereau_dbmif", columns={"vbp_dbordereau"})})
 * @ORM\Entity
 */
class VBordereau
{
    /**
     * @var string
     *
     * @ORM\Column(name="vbp_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="v_bordereau_vbp_id_seq", allocationSize=1, initialValue=1)
     */
    private $vbpId;

    /**
     * @var string
     *
     * @ORM\Column(name="vbp_type", type="string", length=1, nullable=false, options={"comment"="R = Rubrique, D = DÃ©tail"})
     */
    private $vbpType;

    /**
     * @var string
     *
     * @ORM\Column(name="vbp_montant", type="decimal", precision=12, scale=2, nullable=false)
     */
    private $vbpMontant;

    /**
     * @var string
     *
     * @ORM\Column(name="vbp_nbunite", type="decimal", precision=12, scale=2, nullable=false)
     */
    private $vbpNbunite;

    /**
     * @var string
     *
     * @ORM\Column(name="vbp_codedev", type="string", length=3, nullable=false, options={"comment"="DEP = DÃ©pense, REC = Recette"})
     */
    private $vbpCodedev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vbp_mntrub", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $vbpMntrub;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vbp_pxunite", type="decimal", precision=10, scale=5, nullable=true, options={"comment"="Prix Unite"})
     */
    private $vbpPxunite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vbp_nbmini", type="decimal", precision=12, scale=2, nullable=true, options={"comment"="Nb unites mini"})
     */
    private $vbpNbmini;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vbp_nbmaxi", type="decimal", precision=12, scale=2, nullable=true, options={"comment"="Nb unites maxi"})
     */
    private $vbpNbmaxi;

    /**
     * @var \Bordereau
     *
     * @ORM\ManyToOne(targetEntity="Bordereau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vbp_bordereau", referencedColumnName="bdp_id")
     * })
     */
    private $vbpBordereau;

    /**
     * @var \DBordereau
     *
     * @ORM\ManyToOne(targetEntity="DBordereau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vbp_dbordereau", referencedColumnName="mpd_id")
     * })
     */
    private $vbpDbordereau;

    /**
     * @var \RBordereau
     *
     * @ORM\ManyToOne(targetEntity="RBordereau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vbp_rbordereau", referencedColumnName="mpr_id")
     * })
     */
    private $vbpRbordereau;

    public function getVbpId(): ?string
    {
        return $this->vbpId;
    }

    public function getVbpType(): ?string
    {
        return $this->vbpType;
    }

    public function setVbpType(string $vbpType): self
    {
        $this->vbpType = $vbpType;

        return $this;
    }

    public function getVbpMontant(): ?string
    {
        return $this->vbpMontant;
    }

    public function setVbpMontant(string $vbpMontant): self
    {
        $this->vbpMontant = $vbpMontant;

        return $this;
    }

    public function getVbpNbunite(): ?string
    {
        return $this->vbpNbunite;
    }

    public function setVbpNbunite(string $vbpNbunite): self
    {
        $this->vbpNbunite = $vbpNbunite;

        return $this;
    }

    public function getVbpCodedev(): ?string
    {
        return $this->vbpCodedev;
    }

    public function setVbpCodedev(string $vbpCodedev): self
    {
        $this->vbpCodedev = $vbpCodedev;

        return $this;
    }

    public function getVbpMntrub(): ?string
    {
        return $this->vbpMntrub;
    }

    public function setVbpMntrub(?string $vbpMntrub): self
    {
        $this->vbpMntrub = $vbpMntrub;

        return $this;
    }

    public function getVbpPxunite(): ?string
    {
        return $this->vbpPxunite;
    }

    public function setVbpPxunite(?string $vbpPxunite): self
    {
        $this->vbpPxunite = $vbpPxunite;

        return $this;
    }

    public function getVbpNbmini(): ?string
    {
        return $this->vbpNbmini;
    }

    public function setVbpNbmini(?string $vbpNbmini): self
    {
        $this->vbpNbmini = $vbpNbmini;

        return $this;
    }

    public function getVbpNbmaxi(): ?string
    {
        return $this->vbpNbmaxi;
    }

    public function setVbpNbmaxi(?string $vbpNbmaxi): self
    {
        $this->vbpNbmaxi = $vbpNbmaxi;

        return $this;
    }

    public function getVbpBordereau(): ?Bordereau
    {
        return $this->vbpBordereau;
    }

    public function setVbpBordereau(?Bordereau $vbpBordereau): self
    {
        $this->vbpBordereau = $vbpBordereau;

        return $this;
    }

    public function getVbpDbordereau(): ?DBordereau
    {
        return $this->vbpDbordereau;
    }

    public function setVbpDbordereau(?DBordereau $vbpDbordereau): self
    {
        $this->vbpDbordereau = $vbpDbordereau;

        return $this;
    }

    public function getVbpRbordereau(): ?RBordereau
    {
        return $this->vbpRbordereau;
    }

    public function setVbpRbordereau(?RBordereau $vbpRbordereau): self
    {
        $this->vbpRbordereau = $vbpRbordereau;

        return $this;
    }


}
