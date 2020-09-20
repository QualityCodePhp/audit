<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Page
 *
 * @ORM\Table(name="page", uniqueConstraints={@ORM\UniqueConstraint(name="page_pk", columns={"pge_id"})})
 * @ORM\Entity
 */
class Page
{
    /**
     * @var string
     *
     * @ORM\Column(name="pge_id", type="string", length=30, nullable=false, options={"comment"="Nom de la page"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="page_pge_id_seq", allocationSize=1, initialValue=1)
     */
    private $pgeId;

    /**
     * @var string
     *
     * @ORM\Column(name="pge_libelle", type="string", length=25, nullable=false)
     */
    private $pgeLibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pge_code", type="string", length=25, nullable=true)
     */
    private $pgeCode;

    /**
     * @var string
     *
     * @ORM\Column(name="pge_url", type="string", length=60, nullable=false)
     */
    private $pgeUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pge_goto", type="string", length=900, nullable=true)
     */
    private $pgeGoto;

    /**
     * @var string
     *
     * @ORM\Column(name="pge_navig", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $pgeNavig;

    /**
     * @var string
     *
     * @ORM\Column(name="pge_access", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $pgeAccess;

    /**
     * @var string
     *
     * @ORM\Column(name="pge_lib_long", type="string", length=50, nullable=false)
     */
    private $pgeLibLong;

    public function getPgeId(): ?string
    {
        return $this->pgeId;
    }

    public function getPgeLibelle(): ?string
    {
        return $this->pgeLibelle;
    }

    public function setPgeLibelle(string $pgeLibelle): self
    {
        $this->pgeLibelle = $pgeLibelle;

        return $this;
    }

    public function getPgeCode(): ?string
    {
        return $this->pgeCode;
    }

    public function setPgeCode(?string $pgeCode): self
    {
        $this->pgeCode = $pgeCode;

        return $this;
    }

    public function getPgeUrl(): ?string
    {
        return $this->pgeUrl;
    }

    public function setPgeUrl(string $pgeUrl): self
    {
        $this->pgeUrl = $pgeUrl;

        return $this;
    }

    public function getPgeGoto(): ?string
    {
        return $this->pgeGoto;
    }

    public function setPgeGoto(?string $pgeGoto): self
    {
        $this->pgeGoto = $pgeGoto;

        return $this;
    }

    public function getPgeNavig(): ?string
    {
        return $this->pgeNavig;
    }

    public function setPgeNavig(string $pgeNavig): self
    {
        $this->pgeNavig = $pgeNavig;

        return $this;
    }

    public function getPgeAccess(): ?string
    {
        return $this->pgeAccess;
    }

    public function setPgeAccess(string $pgeAccess): self
    {
        $this->pgeAccess = $pgeAccess;

        return $this;
    }

    public function getPgeLibLong(): ?string
    {
        return $this->pgeLibLong;
    }

    public function setPgeLibLong(string $pgeLibLong): self
    {
        $this->pgeLibLong = $pgeLibLong;

        return $this;
    }


}
