<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NomenInt
 *
 * @ORM\Table(name="nomen_int", uniqueConstraints={@ORM\UniqueConstraint(name="nomen_int_pk", columns={"nin_id"})})
 * @ORM\Entity
 */
class NomenInt
{
    /**
     * @var string
     *
     * @ORM\Column(name="nin_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="nomen_int_nin_id_seq", allocationSize=1, initialValue=1)
     */
    private $ninId;

    /**
     * @var string
     *
     * @ORM\Column(name="nin_code", type="string", length=5, nullable=false)
     */
    private $ninCode;

    /**
     * @var string
     *
     * @ORM\Column(name="nin_libelle", type="string", length=100, nullable=false)
     */
    private $ninLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="nin_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $ninEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="nin_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $ninAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="nin_datec", type="datetime", nullable=false)
     */
    private $ninDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nin_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $ninAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="nin_datem", type="datetime", nullable=true)
     */
    private $ninDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nin_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $ninAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="nin_datea", type="datetime", nullable=true)
     */
    private $ninDatea;

    public function getNinId(): ?string
    {
        return $this->ninId;
    }

    public function getNinCode(): ?string
    {
        return $this->ninCode;
    }

    public function setNinCode(string $ninCode): self
    {
        $this->ninCode = $ninCode;

        return $this;
    }

    public function getNinLibelle(): ?string
    {
        return $this->ninLibelle;
    }

    public function setNinLibelle(string $ninLibelle): self
    {
        $this->ninLibelle = $ninLibelle;

        return $this;
    }

    public function getNinEtat(): ?string
    {
        return $this->ninEtat;
    }

    public function setNinEtat(string $ninEtat): self
    {
        $this->ninEtat = $ninEtat;

        return $this;
    }

    public function getNinAuteurc(): ?string
    {
        return $this->ninAuteurc;
    }

    public function setNinAuteurc(string $ninAuteurc): self
    {
        $this->ninAuteurc = $ninAuteurc;

        return $this;
    }

    public function getNinDatec(): ?\DateTimeInterface
    {
        return $this->ninDatec;
    }

    public function setNinDatec(\DateTimeInterface $ninDatec): self
    {
        $this->ninDatec = $ninDatec;

        return $this;
    }

    public function getNinAuteurm(): ?string
    {
        return $this->ninAuteurm;
    }

    public function setNinAuteurm(?string $ninAuteurm): self
    {
        $this->ninAuteurm = $ninAuteurm;

        return $this;
    }

    public function getNinDatem(): ?\DateTimeInterface
    {
        return $this->ninDatem;
    }

    public function setNinDatem(?\DateTimeInterface $ninDatem): self
    {
        $this->ninDatem = $ninDatem;

        return $this;
    }

    public function getNinAuteura(): ?string
    {
        return $this->ninAuteura;
    }

    public function setNinAuteura(?string $ninAuteura): self
    {
        $this->ninAuteura = $ninAuteura;

        return $this;
    }

    public function getNinDatea(): ?\DateTimeInterface
    {
        return $this->ninDatea;
    }

    public function setNinDatea(?\DateTimeInterface $ninDatea): self
    {
        $this->ninDatea = $ninDatea;

        return $this;
    }


}
