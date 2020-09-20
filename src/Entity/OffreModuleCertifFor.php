<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffreModuleCertifFor
 *
 * @ORM\Table(name="offre_module_certif_for", uniqueConstraints={@ORM\UniqueConstraint(name="offre_module_certif_for_pk", columns={"cerfor_id"})}, indexes={@ORM\Index(name="cer_cerfor_fk", columns={"cer_id"})})
 * @ORM\Entity
 */
class OffreModuleCertifFor
{
    /**
     * @var string
     *
     * @ORM\Column(name="cerfor_id", type="decimal", precision=12, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="offre_module_certif_for_cerfor_id_seq", allocationSize=1, initialValue=1)
     */
    private $cerforId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cerfor_code_formacode", type="string", length=10, nullable=true)
     */
    private $cerforCodeFormacode;

    /**
     * @var \OffreModuleCertif
     *
     * @ORM\ManyToOne(targetEntity="OffreModuleCertif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cer_id", referencedColumnName="cer_id")
     * })
     */
    private $cer;

    public function getCerforId(): ?string
    {
        return $this->cerforId;
    }

    public function getCerforCodeFormacode(): ?string
    {
        return $this->cerforCodeFormacode;
    }

    public function setCerforCodeFormacode(?string $cerforCodeFormacode): self
    {
        $this->cerforCodeFormacode = $cerforCodeFormacode;

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
