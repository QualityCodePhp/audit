<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffreModuleCertifGfe
 *
 * @ORM\Table(name="offre_module_certif_gfe", uniqueConstraints={@ORM\UniqueConstraint(name="offre_module_certif_gfe_pk", columns={"cergfe_id"})}, indexes={@ORM\Index(name="cer_cergfe_fk", columns={"cer_id"})})
 * @ORM\Entity
 */
class OffreModuleCertifGfe
{
    /**
     * @var string
     *
     * @ORM\Column(name="cergfe_id", type="decimal", precision=12, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="offre_module_certif_gfe_cergfe_id_seq", allocationSize=1, initialValue=1)
     */
    private $cergfeId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cergfe_code_gfe", type="string", length=10, nullable=true)
     */
    private $cergfeCodeGfe;

    /**
     * @var \OffreModuleCertif
     *
     * @ORM\ManyToOne(targetEntity="OffreModuleCertif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cer_id", referencedColumnName="cer_id")
     * })
     */
    private $cer;

    public function getCergfeId(): ?string
    {
        return $this->cergfeId;
    }

    public function getCergfeCodeGfe(): ?string
    {
        return $this->cergfeCodeGfe;
    }

    public function setCergfeCodeGfe(?string $cergfeCodeGfe): self
    {
        $this->cergfeCodeGfe = $cergfeCodeGfe;

        return $this;
    }

    public function getCer(): ?OffreModuleCertif
    {
        return $this->cer;
    }

    public function setCer(?OffreModuleCertif $cer): self
    {
        $this->cer = $cer;

        return $this;
    }


}
