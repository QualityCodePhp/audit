<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FusionEts
 *
 * @ORM\Table(name="fusion_ets", uniqueConstraints={@ORM\UniqueConstraint(name="fusion_ets_pk", columns={"fet_id"})}, indexes={@ORM\Index(name="fusion_eeif2", columns={"fet_etsdestin"}), @ORM\Index(name="fusion_eeif", columns={"fet_etsorigine"})})
 * @ORM\Entity
 */
class FusionEts
{
    /**
     * @var string
     *
     * @ORM\Column(name="fet_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fusion_ets_fet_id_seq", allocationSize=1, initialValue=1)
     */
    private $fetId;

    /**
     * @var string
     *
     * @ORM\Column(name="fet_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $fetAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fet_datec", type="datetime", nullable=false)
     */
    private $fetDatec;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fet_etsorigine", referencedColumnName="ets_id")
     * })
     */
    private $fetEtsorigine;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fet_etsdestin", referencedColumnName="ets_id")
     * })
     */
    private $fetEtsdestin;

    public function getFetId(): ?string
    {
        return $this->fetId;
    }

    public function getFetAuteurc(): ?string
    {
        return $this->fetAuteurc;
    }

    public function setFetAuteurc(string $fetAuteurc): self
    {
        $this->fetAuteurc = $fetAuteurc;

        return $this;
    }

    public function getFetDatec(): ?\DateTimeInterface
    {
        return $this->fetDatec;
    }

    public function setFetDatec(\DateTimeInterface $fetDatec): self
    {
        $this->fetDatec = $fetDatec;

        return $this;
    }

    public function getFetEtsorigine(): ?Etablssmt
    {
        return $this->fetEtsorigine;
    }

    public function setFetEtsorigine(?Etablssmt $fetEtsorigine): self
    {
        $this->fetEtsorigine = $fetEtsorigine;

        return $this;
    }

    public function getFetEtsdestin(): ?Etablssmt
    {
        return $this->fetEtsdestin;
    }

    public function setFetEtsdestin(?Etablssmt $fetEtsdestin): self
    {
        $this->fetEtsdestin = $fetEtsdestin;

        return $this;
    }


}
