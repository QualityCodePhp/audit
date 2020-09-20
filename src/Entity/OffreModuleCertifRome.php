<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffreModuleCertifRome
 *
 * @ORM\Table(name="offre_module_certif_rome", uniqueConstraints={@ORM\UniqueConstraint(name="offre_module_certif_rome_pk", columns={"cerrom_id"})}, indexes={@ORM\Index(name="cer_cerrom_fk", columns={"cer_id"})})
 * @ORM\Entity
 */
class OffreModuleCertifRome
{
    /**
     * @var string
     *
     * @ORM\Column(name="cerrom_id", type="decimal", precision=12, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="offre_module_certif_rome_cerrom_id_seq", allocationSize=1, initialValue=1)
     */
    private $cerromId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cerrom_code_rome", type="string", length=10, nullable=true)
     */
    private $cerromCodeRome;

    /**
     * @var \OffreModuleCertif
     *
     * @ORM\ManyToOne(targetEntity="OffreModuleCertif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cer_id", referencedColumnName="cer_id")
     * })
     */
    private $cer;

    public function getCerromId(): ?string
    {
        return $this->cerromId;
    }

    public function getCerromCodeRome(): ?string
    {
        return $this->cerromCodeRome;
    }

    public function setCerromCodeRome(?string $cerromCodeRome): self
    {
        $this->cerromCodeRome = $cerromCodeRome;

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
