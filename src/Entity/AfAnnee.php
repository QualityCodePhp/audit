<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AfAnnee
 *
 * @ORM\Table(name="af_annee", uniqueConstraints={@ORM\UniqueConstraint(name="af_annee_pk", columns={"afa_id"})}, indexes={@ORM\Index(name="af_annee_afa_af___af_afo_id_fk", columns={"afa_af"})})
 * @ORM\Entity
 */
class AfAnnee
{
    /**
     * @var int
     *
     * @ORM\Column(name="afa_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="af_annee_afa_id_seq", allocationSize=1, initialValue=1)
     */
    private $afaId;

    /**
     * @var string
     *
     * @ORM\Column(name="afa_annee", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $afaAnnee;

    /**
     * @var string
     *
     * @ORM\Column(name="afa_hannuel", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $afaHannuel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afa_mntestime", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $afaMntestime;

    /**
     * @var string
     *
     * @ORM\Column(name="afa_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $afaAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="afa_datec", type="datetime", nullable=false)
     */
    private $afaDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afa_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $afaAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="afa_datem", type="datetime", nullable=true)
     */
    private $afaDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="afa_mntannuel", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $afaMntannuel;

    /**
     * @var \Af
     *
     * @ORM\ManyToOne(targetEntity="Af")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="afa_af", referencedColumnName="afo_id")
     * })
     */
    private $afaAf;

    public function getAfaId(): ?int
    {
        return $this->afaId;
    }

    public function getAfaAnnee(): ?string
    {
        return $this->afaAnnee;
    }

    public function setAfaAnnee(string $afaAnnee): self
    {
        $this->afaAnnee = $afaAnnee;

        return $this;
    }

    public function getAfaHannuel(): ?string
    {
        return $this->afaHannuel;
    }

    public function setAfaHannuel(string $afaHannuel): self
    {
        $this->afaHannuel = $afaHannuel;

        return $this;
    }

    public function getAfaMntestime(): ?string
    {
        return $this->afaMntestime;
    }

    public function setAfaMntestime(?string $afaMntestime): self
    {
        $this->afaMntestime = $afaMntestime;

        return $this;
    }

    public function getAfaAuteurc(): ?string
    {
        return $this->afaAuteurc;
    }

    public function setAfaAuteurc(string $afaAuteurc): self
    {
        $this->afaAuteurc = $afaAuteurc;

        return $this;
    }

    public function getAfaDatec(): ?\DateTimeInterface
    {
        return $this->afaDatec;
    }

    public function setAfaDatec(\DateTimeInterface $afaDatec): self
    {
        $this->afaDatec = $afaDatec;

        return $this;
    }

    public function getAfaAuteurm(): ?string
    {
        return $this->afaAuteurm;
    }

    public function setAfaAuteurm(?string $afaAuteurm): self
    {
        $this->afaAuteurm = $afaAuteurm;

        return $this;
    }

    public function getAfaDatem(): ?\DateTimeInterface
    {
        return $this->afaDatem;
    }

    public function setAfaDatem(?\DateTimeInterface $afaDatem): self
    {
        $this->afaDatem = $afaDatem;

        return $this;
    }

    public function getAfaMntannuel(): ?string
    {
        return $this->afaMntannuel;
    }

    public function setAfaMntannuel(?string $afaMntannuel): self
    {
        $this->afaMntannuel = $afaMntannuel;

        return $this;
    }

    public function getAfaAf(): ?Af
    {
        return $this->afaAf;
    }

    public function setAfaAf(?Af $afaAf): self
    {
        $this->afaAf = $afaAf;

        return $this;
    }


}
