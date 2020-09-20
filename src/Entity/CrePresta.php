<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrePresta
 *
 * @ORM\Table(name="cre_presta", uniqueConstraints={@ORM\UniqueConstraint(name="cre_presta_pk", columns={"crr_id"})})
 * @ORM\Entity
 */
class CrePresta
{
    /**
     * @var string
     *
     * @ORM\Column(name="crr_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cre_presta_crr_id_seq", allocationSize=1, initialValue=1)
     */
    private $crrId;

    /**
     * @var string
     *
     * @ORM\Column(name="crr_offre", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $crrOffre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crr_bordereau", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $crrBordereau;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crr_unite", type="string", length=50, nullable=true)
     */
    private $crrUnite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crr_prev", type="decimal", precision=9, scale=2, nullable=true)
     */
    private $crrPrev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crr_real", type="decimal", precision=9, scale=2, nullable=true)
     */
    private $crrReal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crr_libellepresta", type="string", length=50, nullable=true)
     */
    private $crrLibellepresta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crr_rang", type="decimal", precision=5, scale=0, nullable=true)
     */
    private $crrRang;

    public function getCrrId(): ?string
    {
        return $this->crrId;
    }

    public function getCrrOffre(): ?string
    {
        return $this->crrOffre;
    }

    public function setCrrOffre(string $crrOffre): self
    {
        $this->crrOffre = $crrOffre;

        return $this;
    }

    public function getCrrBordereau(): ?string
    {
        return $this->crrBordereau;
    }

    public function setCrrBordereau(?string $crrBordereau): self
    {
        $this->crrBordereau = $crrBordereau;

        return $this;
    }

    public function getCrrUnite(): ?string
    {
        return $this->crrUnite;
    }

    public function setCrrUnite(?string $crrUnite): self
    {
        $this->crrUnite = $crrUnite;

        return $this;
    }

    public function getCrrPrev(): ?string
    {
        return $this->crrPrev;
    }

    public function setCrrPrev(?string $crrPrev): self
    {
        $this->crrPrev = $crrPrev;

        return $this;
    }

    public function getCrrReal(): ?string
    {
        return $this->crrReal;
    }

    public function setCrrReal(?string $crrReal): self
    {
        $this->crrReal = $crrReal;

        return $this;
    }

    public function getCrrLibellepresta(): ?string
    {
        return $this->crrLibellepresta;
    }

    public function setCrrLibellepresta(?string $crrLibellepresta): self
    {
        $this->crrLibellepresta = $crrLibellepresta;

        return $this;
    }

    public function getCrrRang(): ?string
    {
        return $this->crrRang;
    }

    public function setCrrRang(?string $crrRang): self
    {
        $this->crrRang = $crrRang;

        return $this;
    }


}
