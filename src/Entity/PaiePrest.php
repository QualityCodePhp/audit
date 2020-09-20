<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaiePrest
 *
 * @ORM\Table(name="paie_prest", uniqueConstraints={@ORM\UniqueConstraint(name="paie_prest_pk", columns={"pai_id"})}, indexes={@ORM\Index(name="paie_prest_dpdif", columns={"pai_ddepaiement"}), @ORM\Index(name="paie_prest_upuif", columns={"pai_unite"}), @ORM\Index(name="paie_prest_rrif", columns={"pai_realisation"})})
 * @ORM\Entity
 */
class PaiePrest
{
    /**
     * @var string
     *
     * @ORM\Column(name="pai_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="paie_prest_pai_id_seq", allocationSize=1, initialValue=1)
     */
    private $paiId;

    /**
     * @var string
     *
     * @ORM\Column(name="pai_nbpaye", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $paiNbpaye;

    /**
     * @var string
     *
     * @ORM\Column(name="pai_mntpaye", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $paiMntpaye;

    /**
     * @var \DdePaiement
     *
     * @ORM\ManyToOne(targetEntity="DdePaiement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pai_ddepaiement", referencedColumnName="ddp_id")
     * })
     */
    private $paiDdepaiement;

    /**
     * @var \Realisation
     *
     * @ORM\ManyToOne(targetEntity="Realisation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pai_realisation", referencedColumnName="rea_id")
     * })
     */
    private $paiRealisation;

    /**
     * @var \UnitePrest
     *
     * @ORM\ManyToOne(targetEntity="UnitePrest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pai_unite", referencedColumnName="unp_id")
     * })
     */
    private $paiUnite;

    public function getPaiId(): ?string
    {
        return $this->paiId;
    }

    public function getPaiNbpaye(): ?string
    {
        return $this->paiNbpaye;
    }

    public function setPaiNbpaye(string $paiNbpaye): self
    {
        $this->paiNbpaye = $paiNbpaye;

        return $this;
    }

    public function getPaiMntpaye(): ?string
    {
        return $this->paiMntpaye;
    }

    public function setPaiMntpaye(string $paiMntpaye): self
    {
        $this->paiMntpaye = $paiMntpaye;

        return $this;
    }

    public function getPaiDdepaiement(): ?DdePaiement
    {
        return $this->paiDdepaiement;
    }

    public function setPaiDdepaiement(?DdePaiement $paiDdepaiement): self
    {
        $this->paiDdepaiement = $paiDdepaiement;

        return $this;
    }

    public function getPaiRealisation(): ?Realisation
    {
        return $this->paiRealisation;
    }

    public function setPaiRealisation(?Realisation $paiRealisation): self
    {
        $this->paiRealisation = $paiRealisation;

        return $this;
    }

    public function getPaiUnite(): ?UnitePrest
    {
        return $this->paiUnite;
    }

    public function setPaiUnite(?UnitePrest $paiUnite): self
    {
        $this->paiUnite = $paiUnite;

        return $this;
    }


}
