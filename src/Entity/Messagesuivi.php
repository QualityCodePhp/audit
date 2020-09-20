<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messagesuivi
 *
 * @ORM\Table(name="messagesuivi", uniqueConstraints={@ORM\UniqueConstraint(name="messagesuivi_pk", columns={"met_id"})}, indexes={@ORM\Index(name="messagesuivi_uuif", columns={"met_util"}), @ORM\Index(name="messagesuivi_mmif", columns={"met_message"})})
 * @ORM\Entity
 */
class Messagesuivi
{
    /**
     * @var string
     *
     * @ORM\Column(name="met_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="messagesuivi_met_id_seq", allocationSize=1, initialValue=1)
     */
    private $metId;

    /**
     * @var string
     *
     * @ORM\Column(name="met_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $metEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="met_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $metAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="met_datec", type="datetime", nullable=false)
     */
    private $metDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="met_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $metAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="met_datem", type="datetime", nullable=true)
     */
    private $metDatem;

    /**
     * @var \Message
     *
     * @ORM\ManyToOne(targetEntity="Message")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="met_message", referencedColumnName="mel_id")
     * })
     */
    private $metMessage;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="met_util", referencedColumnName="uti_id")
     * })
     */
    private $metUtil;

    public function getMetId(): ?string
    {
        return $this->metId;
    }

    public function getMetEtat(): ?string
    {
        return $this->metEtat;
    }

    public function setMetEtat(string $metEtat): self
    {
        $this->metEtat = $metEtat;

        return $this;
    }

    public function getMetAuteurc(): ?string
    {
        return $this->metAuteurc;
    }

    public function setMetAuteurc(string $metAuteurc): self
    {
        $this->metAuteurc = $metAuteurc;

        return $this;
    }

    public function getMetDatec(): ?\DateTimeInterface
    {
        return $this->metDatec;
    }

    public function setMetDatec(\DateTimeInterface $metDatec): self
    {
        $this->metDatec = $metDatec;

        return $this;
    }

    public function getMetAuteurm(): ?string
    {
        return $this->metAuteurm;
    }

    public function setMetAuteurm(?string $metAuteurm): self
    {
        $this->metAuteurm = $metAuteurm;

        return $this;
    }

    public function getMetDatem(): ?\DateTimeInterface
    {
        return $this->metDatem;
    }

    public function setMetDatem(?\DateTimeInterface $metDatem): self
    {
        $this->metDatem = $metDatem;

        return $this;
    }

    public function getMetMessage(): ?Message
    {
        return $this->metMessage;
    }

    public function setMetMessage(?Message $metMessage): self
    {
        $this->metMessage = $metMessage;

        return $this;
    }

    public function getMetUtil(): ?Utilisateur
    {
        return $this->metUtil;
    }

    public function setMetUtil(?Utilisateur $metUtil): self
    {
        $this->metUtil = $metUtil;

        return $this;
    }


}
