<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mesure
 *
 * @ORM\Table(name="mesure", uniqueConstraints={@ORM\UniqueConstraint(name="mesure_pk", columns={"mes_id"})})
 * @ORM\Entity
 */
class Mesure
{
    /**
     * @var int
     *
     * @ORM\Column(name="mes_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mesure_mes_id_seq", allocationSize=1, initialValue=1)
     */
    private $mesId;

    /**
     * @var string
     *
     * @ORM\Column(name="mes_code", type="string", length=4, nullable=false)
     */
    private $mesCode;

    /**
     * @var string
     *
     * @ORM\Column(name="mes_libelle", type="string", length=50, nullable=false)
     */
    private $mesLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="mes_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $mesEtat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mes_comment", type="string", length=300, nullable=true)
     */
    private $mesComment;

    /**
     * @var string
     *
     * @ORM\Column(name="mes_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $mesAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mes_datec", type="datetime", nullable=false)
     */
    private $mesDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mes_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $mesAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="mes_datem", type="datetime", nullable=true)
     */
    private $mesDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mes_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $mesAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="mes_datea", type="datetime", nullable=true)
     */
    private $mesDatea;

    /**
     * @var string
     *
     * @ORM\Column(name="mes_defaut", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $mesDefaut;

    public function getMesId(): ?int
    {
        return $this->mesId;
    }

    public function getMesCode(): ?string
    {
        return $this->mesCode;
    }

    public function setMesCode(string $mesCode): self
    {
        $this->mesCode = $mesCode;

        return $this;
    }

    public function getMesLibelle(): ?string
    {
        return $this->mesLibelle;
    }

    public function setMesLibelle(string $mesLibelle): self
    {
        $this->mesLibelle = $mesLibelle;

        return $this;
    }

    public function getMesEtat(): ?string
    {
        return $this->mesEtat;
    }

    public function setMesEtat(string $mesEtat): self
    {
        $this->mesEtat = $mesEtat;

        return $this;
    }

    public function getMesComment(): ?string
    {
        return $this->mesComment;
    }

    public function setMesComment(?string $mesComment): self
    {
        $this->mesComment = $mesComment;

        return $this;
    }

    public function getMesAuteurc(): ?string
    {
        return $this->mesAuteurc;
    }

    public function setMesAuteurc(string $mesAuteurc): self
    {
        $this->mesAuteurc = $mesAuteurc;

        return $this;
    }

    public function getMesDatec(): ?\DateTimeInterface
    {
        return $this->mesDatec;
    }

    public function setMesDatec(\DateTimeInterface $mesDatec): self
    {
        $this->mesDatec = $mesDatec;

        return $this;
    }

    public function getMesAuteurm(): ?string
    {
        return $this->mesAuteurm;
    }

    public function setMesAuteurm(?string $mesAuteurm): self
    {
        $this->mesAuteurm = $mesAuteurm;

        return $this;
    }

    public function getMesDatem(): ?\DateTimeInterface
    {
        return $this->mesDatem;
    }

    public function setMesDatem(?\DateTimeInterface $mesDatem): self
    {
        $this->mesDatem = $mesDatem;

        return $this;
    }

    public function getMesAuteura(): ?string
    {
        return $this->mesAuteura;
    }

    public function setMesAuteura(?string $mesAuteura): self
    {
        $this->mesAuteura = $mesAuteura;

        return $this;
    }

    public function getMesDatea(): ?\DateTimeInterface
    {
        return $this->mesDatea;
    }

    public function setMesDatea(?\DateTimeInterface $mesDatea): self
    {
        $this->mesDatea = $mesDatea;

        return $this;
    }

    public function getMesDefaut(): ?string
    {
        return $this->mesDefaut;
    }

    public function setMesDefaut(string $mesDefaut): self
    {
        $this->mesDefaut = $mesDefaut;

        return $this;
    }


}
