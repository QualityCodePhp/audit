<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffreModuleCertif
 *
 * @ORM\Table(name="offre_module_certif", uniqueConstraints={@ORM\UniqueConstraint(name="offre_module_certif_pk", columns={"cer_id"})}, indexes={@ORM\Index(name="ofmou_cer_fk", columns={"ofmou_id"})})
 * @ORM\Entity
 */
class OffreModuleCertif
{
    /**
     * @var string
     *
     * @ORM\Column(name="cer_id", type="decimal", precision=12, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="offre_module_certif_cer_id_seq", allocationSize=1, initialValue=1)
     */
    private $cerId;

    /**
     * @var string
     *
     * @ORM\Column(name="cer_code_diplome", type="string", length=20, nullable=false)
     */
    private $cerCodeDiplome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cer_code_nsf", type="string", length=10, nullable=true)
     */
    private $cerCodeNsf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cer_intitule_diplome", type="string", length=250, nullable=true)
     */
    private $cerIntituleDiplome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cer_code_niveau", type="string", length=10, nullable=true)
     */
    private $cerCodeNiveau;

    /**
     * @var \OffreModule
     *
     * @ORM\ManyToOne(targetEntity="OffreModule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ofmou_id", referencedColumnName="ofmou_id")
     * })
     */
    private $ofmou;

    public function getCerId(): ?string
    {
        return $this->cerId;
    }

    public function getCerCodeDiplome(): ?string
    {
        return $this->cerCodeDiplome;
    }

    public function setCerCodeDiplome(string $cerCodeDiplome): self
    {
        $this->cerCodeDiplome = $cerCodeDiplome;

        return $this;
    }

    public function getCerCodeNsf(): ?string
    {
        return $this->cerCodeNsf;
    }

    public function setCerCodeNsf(?string $cerCodeNsf): self
    {
        $this->cerCodeNsf = $cerCodeNsf;

        return $this;
    }

    public function getCerIntituleDiplome(): ?string
    {
        return $this->cerIntituleDiplome;
    }

    public function setCerIntituleDiplome(?string $cerIntituleDiplome): self
    {
        $this->cerIntituleDiplome = $cerIntituleDiplome;

        return $this;
    }

    public function getCerCodeNiveau(): ?string
    {
        return $this->cerCodeNiveau;
    }

    public function setCerCodeNiveau(?string $cerCodeNiveau): self
    {
        $this->cerCodeNiveau = $cerCodeNiveau;

        return $this;
    }

    public function getOfmou(): ?OffreModule
    {
        return $this->ofmou;
    }

    public function setOfmou(?OffreModule $ofmou): self
    {
        $this->ofmou = $ofmou;

        return $this;
    }


}
