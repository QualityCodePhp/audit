<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statut
 *
 * @ORM\Table(name="statut", uniqueConstraints={@ORM\UniqueConstraint(name="statut_pk", columns={"stt_id"})})
 * @ORM\Entity
 */
class Statut
{
    /**
     * @var int
     *
     * @ORM\Column(name="stt_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="statut_stt_id_seq", allocationSize=1, initialValue=1)
     */
    private $sttId;

    /**
     * @var string
     *
     * @ORM\Column(name="stt_code", type="string", length=6, nullable=false)
     */
    private $sttCode;

    /**
     * @var string
     *
     * @ORM\Column(name="stt_libelle", type="string", length=50, nullable=false)
     */
    private $sttLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="stt_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $sttEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="stt_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $sttAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="stt_datec", type="datetime", nullable=false)
     */
    private $sttDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stt_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $sttAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="stt_datem", type="datetime", nullable=true)
     */
    private $sttDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stt_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $sttAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="stt_datea", type="datetime", nullable=true)
     */
    private $sttDatea;

    /**
     * @var string
     *
     * @ORM\Column(name="stt_type", type="string", length=1, nullable=false)
     */
    private $sttType;

    public function getSttId(): ?int
    {
        return $this->sttId;
    }

    public function getSttCode(): ?string
    {
        return $this->sttCode;
    }

    public function setSttCode(string $sttCode): self
    {
        $this->sttCode = $sttCode;

        return $this;
    }

    public function getSttLibelle(): ?string
    {
        return $this->sttLibelle;
    }

    public function setSttLibelle(string $sttLibelle): self
    {
        $this->sttLibelle = $sttLibelle;

        return $this;
    }

    public function getSttEtat(): ?string
    {
        return $this->sttEtat;
    }

    public function setSttEtat(string $sttEtat): self
    {
        $this->sttEtat = $sttEtat;

        return $this;
    }

    public function getSttAuteurc(): ?string
    {
        return $this->sttAuteurc;
    }

    public function setSttAuteurc(string $sttAuteurc): self
    {
        $this->sttAuteurc = $sttAuteurc;

        return $this;
    }

    public function getSttDatec(): ?\DateTimeInterface
    {
        return $this->sttDatec;
    }

    public function setSttDatec(\DateTimeInterface $sttDatec): self
    {
        $this->sttDatec = $sttDatec;

        return $this;
    }

    public function getSttAuteurm(): ?string
    {
        return $this->sttAuteurm;
    }

    public function setSttAuteurm(?string $sttAuteurm): self
    {
        $this->sttAuteurm = $sttAuteurm;

        return $this;
    }

    public function getSttDatem(): ?\DateTimeInterface
    {
        return $this->sttDatem;
    }

    public function setSttDatem(?\DateTimeInterface $sttDatem): self
    {
        $this->sttDatem = $sttDatem;

        return $this;
    }

    public function getSttAuteura(): ?string
    {
        return $this->sttAuteura;
    }

    public function setSttAuteura(?string $sttAuteura): self
    {
        $this->sttAuteura = $sttAuteura;

        return $this;
    }

    public function getSttDatea(): ?\DateTimeInterface
    {
        return $this->sttDatea;
    }

    public function setSttDatea(?\DateTimeInterface $sttDatea): self
    {
        $this->sttDatea = $sttDatea;

        return $this;
    }

    public function getSttType(): ?string
    {
        return $this->sttType;
    }

    public function setSttType(string $sttType): self
    {
        $this->sttType = $sttType;

        return $this;
    }


}
