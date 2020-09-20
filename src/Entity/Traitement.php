<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Traitement
 *
 * @ORM\Table(name="traitement", uniqueConstraints={@ORM\UniqueConstraint(name="traitement_pk", columns={"trt_id"})}, indexes={@ORM\Index(name="trt_ref_fk", columns={"ref_id"})})
 * @ORM\Entity
 */
class Traitement
{
    /**
     * @var int
     *
     * @ORM\Column(name="trt_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="traitement_trt_id_seq", allocationSize=1, initialValue=1)
     */
    private $trtId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="trt_date_debut", type="datetime", nullable=false)
     */
    private $trtDateDebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="trt_date_fin", type="datetime", nullable=true)
     */
    private $trtDateFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trt_code_gravite", type="string", length=5, nullable=true)
     */
    private $trtCodeGravite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trt_resume", type="string", length=300, nullable=true)
     */
    private $trtResume;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id", referencedColumnName="ref_id")
     * })
     */
    private $ref;

    public function getTrtId(): ?int
    {
        return $this->trtId;
    }

    public function getTrtDateDebut(): ?\DateTimeInterface
    {
        return $this->trtDateDebut;
    }

    public function setTrtDateDebut(\DateTimeInterface $trtDateDebut): self
    {
        $this->trtDateDebut = $trtDateDebut;

        return $this;
    }

    public function getTrtDateFin(): ?\DateTimeInterface
    {
        return $this->trtDateFin;
    }

    public function setTrtDateFin(?\DateTimeInterface $trtDateFin): self
    {
        $this->trtDateFin = $trtDateFin;

        return $this;
    }

    public function getTrtCodeGravite(): ?string
    {
        return $this->trtCodeGravite;
    }

    public function setTrtCodeGravite(?string $trtCodeGravite): self
    {
        $this->trtCodeGravite = $trtCodeGravite;

        return $this;
    }

    public function getTrtResume(): ?string
    {
        return $this->trtResume;
    }

    public function setTrtResume(?string $trtResume): self
    {
        $this->trtResume = $trtResume;

        return $this;
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


}
