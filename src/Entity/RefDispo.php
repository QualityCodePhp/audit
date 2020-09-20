<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefDispo
 *
 * @ORM\Table(name="ref_dispo", uniqueConstraints={@ORM\UniqueConstraint(name="ref_dispo_pk", columns={"rdi_id"})}, indexes={@ORM\Index(name="association_696_fk", columns={"dsp_id"}), @ORM\Index(name="association_695_fk", columns={"ref_id"})})
 * @ORM\Entity
 */
class RefDispo
{
    /**
     * @var string
     *
     * @ORM\Column(name="rdi_id", type="decimal", precision=12, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ref_dispo_rdi_id_seq", allocationSize=1, initialValue=1)
     */
    private $rdiId;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id", referencedColumnName="ref_id")
     * })
     */
    private $ref;

    /**
     * @var \Dispositif
     *
     * @ORM\ManyToOne(targetEntity="Dispositif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dsp_id", referencedColumnName="dsp_id")
     * })
     */
    private $dsp;

    public function getRdiId(): ?string
    {
        return $this->rdiId;
    }

    public function getRef(): ?Referentiel
    {
        return $this->ref;
    }

    public function setRef(?Referentiel $ref): self
    {
        $this->ref = $ref;

        return $this;
    }

    public function getDsp(): ?Dispositif
    {
        return $this->dsp;
    }

    public function setDsp(?Dispositif $dsp): self
    {
        $this->dsp = $dsp;

        return $this;
    }


}
