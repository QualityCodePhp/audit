<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TGroupement
 *
 * @ORM\Table(name="t_groupement", uniqueConstraints={@ORM\UniqueConstraint(name="t_groupement_pk", columns={"tgr_id"})}, indexes={@ORM\Index(name="t_groupement_mamif", columns={"tgr_mode"})})
 * @ORM\Entity
 */
class TGroupement
{
    /**
     * @var string
     *
     * @ORM\Column(name="tgr_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="t_groupement_tgr_id_seq", allocationSize=1, initialValue=1)
     */
    private $tgrId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tgr_code", type="string", length=3, nullable=true)
     */
    private $tgrCode;

    /**
     * @var string
     *
     * @ORM\Column(name="tgr_libelle", type="string", length=50, nullable=false)
     */
    private $tgrLibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tgr_tituloblig", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $tgrTituloblig;

    /**
     * @var string
     *
     * @ORM\Column(name="tgr_sstraitoblig", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $tgrSstraitoblig;

    /**
     * @var string
     *
     * @ORM\Column(name="tgr_cotraitoblig", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $tgrCotraitoblig;

    /**
     * @var string
     *
     * @ORM\Column(name="tgr_tri", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $tgrTri;

    /**
     * @var \ModAch
     *
     * @ORM\ManyToOne(targetEntity="ModAch")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tgr_mode", referencedColumnName="mod_id")
     * })
     */
    private $tgrMode;

    public function getTgrId(): ?string
    {
        return $this->tgrId;
    }

    public function getTgrCode(): ?string
    {
        return $this->tgrCode;
    }

    public function setTgrCode(?string $tgrCode): self
    {
        $this->tgrCode = $tgrCode;

        return $this;
    }

    public function getTgrLibelle(): ?string
    {
        return $this->tgrLibelle;
    }

    public function setTgrLibelle(string $tgrLibelle): self
    {
        $this->tgrLibelle = $tgrLibelle;

        return $this;
    }

    public function getTgrTituloblig(): ?string
    {
        return $this->tgrTituloblig;
    }

    public function setTgrTituloblig(?string $tgrTituloblig): self
    {
        $this->tgrTituloblig = $tgrTituloblig;

        return $this;
    }

    public function getTgrSstraitoblig(): ?string
    {
        return $this->tgrSstraitoblig;
    }

    public function setTgrSstraitoblig(string $tgrSstraitoblig): self
    {
        $this->tgrSstraitoblig = $tgrSstraitoblig;

        return $this;
    }

    public function getTgrCotraitoblig(): ?string
    {
        return $this->tgrCotraitoblig;
    }

    public function setTgrCotraitoblig(string $tgrCotraitoblig): self
    {
        $this->tgrCotraitoblig = $tgrCotraitoblig;

        return $this;
    }

    public function getTgrTri(): ?string
    {
        return $this->tgrTri;
    }

    public function setTgrTri(string $tgrTri): self
    {
        $this->tgrTri = $tgrTri;

        return $this;
    }

    public function getTgrMode(): ?ModAch
    {
        return $this->tgrMode;
    }

    public function setTgrMode(?ModAch $tgrMode): self
    {
        $this->tgrMode = $tgrMode;

        return $this;
    }


}
