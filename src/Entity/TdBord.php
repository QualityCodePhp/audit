<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TdBord
 *
 * @ORM\Table(name="td_bord", uniqueConstraints={@ORM\UniqueConstraint(name="td_bord_pk", columns={"tdb_id"})}, indexes={@ORM\Index(name="td_bord_tbtif", columns={"tdb_typerub"})})
 * @ORM\Entity
 */
class TdBord
{
    /**
     * @var string
     *
     * @ORM\Column(name="tdb_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="td_bord_tdb_id_seq", allocationSize=1, initialValue=1)
     */
    private $tdbId;

    /**
     * @var string
     *
     * @ORM\Column(name="tdb_code", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $tdbCode;

    /**
     * @var string
     *
     * @ORM\Column(name="tdb_libelle", type="string", length=50, nullable=false)
     */
    private $tdbLibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tdb_comment", type="string", length=300, nullable=true)
     */
    private $tdbComment;

    /**
     * @var string
     *
     * @ORM\Column(name="tdb_repet", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $tdbRepet;

    /**
     * @var \TrBord
     *
     * @ORM\ManyToOne(targetEntity="TrBord")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tdb_typerub", referencedColumnName="trb_id")
     * })
     */
    private $tdbTyperub;

    public function getTdbId(): ?string
    {
        return $this->tdbId;
    }

    public function getTdbCode(): ?string
    {
        return $this->tdbCode;
    }

    public function setTdbCode(string $tdbCode): self
    {
        $this->tdbCode = $tdbCode;

        return $this;
    }

    public function getTdbLibelle(): ?string
    {
        return $this->tdbLibelle;
    }

    public function setTdbLibelle(string $tdbLibelle): self
    {
        $this->tdbLibelle = $tdbLibelle;

        return $this;
    }

    public function getTdbComment(): ?string
    {
        return $this->tdbComment;
    }

    public function setTdbComment(?string $tdbComment): self
    {
        $this->tdbComment = $tdbComment;

        return $this;
    }

    public function getTdbRepet(): ?string
    {
        return $this->tdbRepet;
    }

    public function setTdbRepet(string $tdbRepet): self
    {
        $this->tdbRepet = $tdbRepet;

        return $this;
    }

    public function getTdbTyperub(): ?TrBord
    {
        return $this->tdbTyperub;
    }

    public function setTdbTyperub(?TrBord $tdbTyperub): self
    {
        $this->tdbTyperub = $tdbTyperub;

        return $this;
    }


}
