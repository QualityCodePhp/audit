<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitePrest
 *
 * @ORM\Table(name="unite_prest", uniqueConstraints={@ORM\UniqueConstraint(name="unite_prest_pk", columns={"unp_id"})})
 * @ORM\Entity
 */
class UnitePrest
{
    /**
     * @var string
     *
     * @ORM\Column(name="unp_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="unite_prest_unp_id_seq", allocationSize=1, initialValue=1)
     */
    private $unpId;

    /**
     * @var string
     *
     * @ORM\Column(name="unp_code", type="string", length=3, nullable=false)
     */
    private $unpCode;

    /**
     * @var string
     *
     * @ORM\Column(name="unp_libelle", type="string", length=50, nullable=false)
     */
    private $unpLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="unp_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $unpEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="unp_minmax", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $unpMinmax;

    /**
     * @var string
     *
     * @ORM\Column(name="unp_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $unpAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="unp_datec", type="datetime", nullable=false)
     */
    private $unpDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unp_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $unpAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="unp_datem", type="datetime", nullable=true)
     */
    private $unpDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unp_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $unpAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="unp_datea", type="datetime", nullable=true)
     */
    private $unpDatea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unp_limite", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $unpLimite;

    /**
     * @var string
     *
     * @ORM\Column(name="unp_tri", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $unpTri;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unp_codedev", type="string", length=10, nullable=true)
     */
    private $unpCodedev;

    public function getUnpId(): ?string
    {
        return $this->unpId;
    }

    public function getUnpCode(): ?string
    {
        return $this->unpCode;
    }

    public function setUnpCode(string $unpCode): self
    {
        $this->unpCode = $unpCode;

        return $this;
    }

    public function getUnpLibelle(): ?string
    {
        return $this->unpLibelle;
    }

    public function setUnpLibelle(string $unpLibelle): self
    {
        $this->unpLibelle = $unpLibelle;

        return $this;
    }

    public function getUnpEtat(): ?string
    {
        return $this->unpEtat;
    }

    public function setUnpEtat(string $unpEtat): self
    {
        $this->unpEtat = $unpEtat;

        return $this;
    }

    public function getUnpMinmax(): ?string
    {
        return $this->unpMinmax;
    }

    public function setUnpMinmax(string $unpMinmax): self
    {
        $this->unpMinmax = $unpMinmax;

        return $this;
    }

    public function getUnpAuteurc(): ?string
    {
        return $this->unpAuteurc;
    }

    public function setUnpAuteurc(string $unpAuteurc): self
    {
        $this->unpAuteurc = $unpAuteurc;

        return $this;
    }

    public function getUnpDatec(): ?\DateTimeInterface
    {
        return $this->unpDatec;
    }

    public function setUnpDatec(\DateTimeInterface $unpDatec): self
    {
        $this->unpDatec = $unpDatec;

        return $this;
    }

    public function getUnpAuteurm(): ?string
    {
        return $this->unpAuteurm;
    }

    public function setUnpAuteurm(?string $unpAuteurm): self
    {
        $this->unpAuteurm = $unpAuteurm;

        return $this;
    }

    public function getUnpDatem(): ?\DateTimeInterface
    {
        return $this->unpDatem;
    }

    public function setUnpDatem(?\DateTimeInterface $unpDatem): self
    {
        $this->unpDatem = $unpDatem;

        return $this;
    }

    public function getUnpAuteura(): ?string
    {
        return $this->unpAuteura;
    }

    public function setUnpAuteura(?string $unpAuteura): self
    {
        $this->unpAuteura = $unpAuteura;

        return $this;
    }

    public function getUnpDatea(): ?\DateTimeInterface
    {
        return $this->unpDatea;
    }

    public function setUnpDatea(?\DateTimeInterface $unpDatea): self
    {
        $this->unpDatea = $unpDatea;

        return $this;
    }

    public function getUnpLimite(): ?string
    {
        return $this->unpLimite;
    }

    public function setUnpLimite(?string $unpLimite): self
    {
        $this->unpLimite = $unpLimite;

        return $this;
    }

    public function getUnpTri(): ?string
    {
        return $this->unpTri;
    }

    public function setUnpTri(string $unpTri): self
    {
        $this->unpTri = $unpTri;

        return $this;
    }

    public function getUnpCodedev(): ?string
    {
        return $this->unpCodedev;
    }

    public function setUnpCodedev(?string $unpCodedev): self
    {
        $this->unpCodedev = $unpCodedev;

        return $this;
    }


}
