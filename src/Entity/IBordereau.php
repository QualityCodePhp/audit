<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IBordereau
 *
 * @ORM\Table(name="i_bordereau", uniqueConstraints={@ORM\UniqueConstraint(name="i_bordereau_pk", columns={"ibp_id"})}, indexes={@ORM\Index(name="i_bordereau_bbif", columns={"ibp_bordereau"}), @ORM\Index(name="i_bordereau_dbmif", columns={"ibp_dbordereau"}), @ORM\Index(name="i_bordereau_rbmif", columns={"ibp_rbordereau"})})
 * @ORM\Entity
 */
class IBordereau
{
    /**
     * @var string
     *
     * @ORM\Column(name="ibp_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="i_bordereau_ibp_id_seq", allocationSize=1, initialValue=1)
     */
    private $ibpId;

    /**
     * @var string
     *
     * @ORM\Column(name="ibp_type", type="string", length=1, nullable=false, options={"comment"="R = Rubrique, D = DÃ©tail"})
     */
    private $ibpType;

    /**
     * @var string
     *
     * @ORM\Column(name="ibp_montant", type="decimal", precision=12, scale=2, nullable=false)
     */
    private $ibpMontant;

    /**
     * @var string
     *
     * @ORM\Column(name="ibp_nbunite", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $ibpNbunite;

    /**
     * @var string
     *
     * @ORM\Column(name="ibp_codedev", type="string", length=3, nullable=false, options={"comment"="DEP = DÃ©pense, REC = Recette"})
     */
    private $ibpCodedev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ibp_mntrub", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ibpMntrub;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ibp_pxunite", type="decimal", precision=7, scale=2, nullable=true, options={"comment"="Prix Unite"})
     */
    private $ibpPxunite;

    /**
     * @var \Bordereau
     *
     * @ORM\ManyToOne(targetEntity="Bordereau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ibp_bordereau", referencedColumnName="bdp_id")
     * })
     */
    private $ibpBordereau;

    /**
     * @var \DBormodaf
     *
     * @ORM\ManyToOne(targetEntity="DBormodaf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ibp_dbordereau", referencedColumnName="deb_id")
     * })
     */
    private $ibpDbordereau;

    /**
     * @var \RBordereau
     *
     * @ORM\ManyToOne(targetEntity="RBordereau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ibp_rbordereau", referencedColumnName="mpr_id")
     * })
     */
    private $ibpRbordereau;

    public function getIbpId(): ?string
    {
        return $this->ibpId;
    }

    public function getIbpType(): ?string
    {
        return $this->ibpType;
    }

    public function setIbpType(string $ibpType): self
    {
        $this->ibpType = $ibpType;

        return $this;
    }

    public function getIbpMontant(): ?string
    {
        return $this->ibpMontant;
    }

    public function setIbpMontant(string $ibpMontant): self
    {
        $this->ibpMontant = $ibpMontant;

        return $this;
    }

    public function getIbpNbunite(): ?string
    {
        return $this->ibpNbunite;
    }

    public function setIbpNbunite(string $ibpNbunite): self
    {
        $this->ibpNbunite = $ibpNbunite;

        return $this;
    }

    public function getIbpCodedev(): ?string
    {
        return $this->ibpCodedev;
    }

    public function setIbpCodedev(string $ibpCodedev): self
    {
        $this->ibpCodedev = $ibpCodedev;

        return $this;
    }

    public function getIbpMntrub(): ?string
    {
        return $this->ibpMntrub;
    }

    public function setIbpMntrub(?string $ibpMntrub): self
    {
        $this->ibpMntrub = $ibpMntrub;

        return $this;
    }

    public function getIbpPxunite(): ?string
    {
        return $this->ibpPxunite;
    }

    public function setIbpPxunite(?string $ibpPxunite): self
    {
        $this->ibpPxunite = $ibpPxunite;

        return $this;
    }

    public function getIbpBordereau(): ?Bordereau
    {
        return $this->ibpBordereau;
    }

    public function setIbpBordereau(?Bordereau $ibpBordereau): self
    {
        $this->ibpBordereau = $ibpBordereau;

        return $this;
    }

    public function getIbpDbordereau(): ?DBormodaf
    {
        return $this->ibpDbordereau;
    }

    public function setIbpDbordereau(?DBormodaf $ibpDbordereau): self
    {
        $this->ibpDbordereau = $ibpDbordereau;

        return $this;
    }

    public function getIbpRbordereau(): ?RBordereau
    {
        return $this->ibpRbordereau;
    }

    public function setIbpRbordereau(?RBordereau $ibpRbordereau): self
    {
        $this->ibpRbordereau = $ibpRbordereau;

        return $this;
    }


}
