<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AriCadrcpt
 *
 * @ORM\Table(name="ari_cadrcpt", uniqueConstraints={@ORM\UniqueConstraint(name="ari_cadrcpt_pk", columns={"aca_id"})})
 * @ORM\Entity
 */
class AriCadrcpt
{
    /**
     * @var string
     *
     * @ORM\Column(name="aca_id", type="decimal", precision=12, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ari_cadrcpt_aca_id_seq", allocationSize=1, initialValue=1)
     */
    private $acaId;

    /**
     * @var string
     *
     * @ORM\Column(name="aca_exbudget", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $acaExbudget;

    /**
     * @var string
     *
     * @ORM\Column(name="aca_codebudget", type="string", length=2, nullable=false)
     */
    private $acaCodebudget;

    /**
     * @var string
     *
     * @ORM\Column(name="aca_numenv", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $acaNumenv;

    /**
     * @var string
     *
     * @ORM\Column(name="aca_numchap", type="string", length=4, nullable=false)
     */
    private $acaNumchap;

    /**
     * @var string
     *
     * @ORM\Column(name="aca_numart", type="string", length=10, nullable=false)
     */
    private $acaNumart;

    /**
     * @var string
     *
     * @ORM\Column(name="aca_codesect", type="string", length=1, nullable=false)
     */
    private $acaCodesect;

    /**
     * @var string
     *
     * @ORM\Column(name="aca_libenv", type="string", length=80, nullable=false)
     */
    private $acaLibenv;

    /**
     * @var string
     *
     * @ORM\Column(name="aca_codutil", type="string", length=8, nullable=false)
     */
    private $acaCodutil;

    /**
     * @var string
     *
     * @ORM\Column(name="aca_affectap", type="string", length=1, nullable=false)
     */
    private $acaAffectap;

    /**
     * @var string
     *
     * @ORM\Column(name="aca_numprogap", type="string", length=10, nullable=false)
     */
    private $acaNumprogap;

    /**
     * @var string|null
     *
     * @ORM\Column(name="aca_milap", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $acaMilap;

    /**
     * @var string|null
     *
     * @ORM\Column(name="aca_numap", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $acaNumap;

    /**
     * @var string
     *
     * @ORM\Column(name="aca_entetem14", type="string", length=10, nullable=false)
     */
    private $acaEntetem14;

    /**
     * @var string|null
     *
     * @ORM\Column(name="aca_dateferm", type="decimal", precision=7, scale=0, nullable=true)
     */
    private $acaDateferm;

    public function getAcaId(): ?string
    {
        return $this->acaId;
    }

    public function getAcaExbudget(): ?string
    {
        return $this->acaExbudget;
    }

    public function setAcaExbudget(string $acaExbudget): self
    {
        $this->acaExbudget = $acaExbudget;

        return $this;
    }

    public function getAcaCodebudget(): ?string
    {
        return $this->acaCodebudget;
    }

    public function setAcaCodebudget(string $acaCodebudget): self
    {
        $this->acaCodebudget = $acaCodebudget;

        return $this;
    }

    public function getAcaNumenv(): ?string
    {
        return $this->acaNumenv;
    }

    public function setAcaNumenv(string $acaNumenv): self
    {
        $this->acaNumenv = $acaNumenv;

        return $this;
    }

    public function getAcaNumchap(): ?string
    {
        return $this->acaNumchap;
    }

    public function setAcaNumchap(string $acaNumchap): self
    {
        $this->acaNumchap = $acaNumchap;

        return $this;
    }

    public function getAcaNumart(): ?string
    {
        return $this->acaNumart;
    }

    public function setAcaNumart(string $acaNumart): self
    {
        $this->acaNumart = $acaNumart;

        return $this;
    }

    public function getAcaCodesect(): ?string
    {
        return $this->acaCodesect;
    }

    public function setAcaCodesect(string $acaCodesect): self
    {
        $this->acaCodesect = $acaCodesect;

        return $this;
    }

    public function getAcaLibenv(): ?string
    {
        return $this->acaLibenv;
    }

    public function setAcaLibenv(string $acaLibenv): self
    {
        $this->acaLibenv = $acaLibenv;

        return $this;
    }

    public function getAcaCodutil(): ?string
    {
        return $this->acaCodutil;
    }

    public function setAcaCodutil(string $acaCodutil): self
    {
        $this->acaCodutil = $acaCodutil;

        return $this;
    }

    public function getAcaAffectap(): ?string
    {
        return $this->acaAffectap;
    }

    public function setAcaAffectap(string $acaAffectap): self
    {
        $this->acaAffectap = $acaAffectap;

        return $this;
    }

    public function getAcaNumprogap(): ?string
    {
        return $this->acaNumprogap;
    }

    public function setAcaNumprogap(string $acaNumprogap): self
    {
        $this->acaNumprogap = $acaNumprogap;

        return $this;
    }

    public function getAcaMilap(): ?string
    {
        return $this->acaMilap;
    }

    public function setAcaMilap(?string $acaMilap): self
    {
        $this->acaMilap = $acaMilap;

        return $this;
    }

    public function getAcaNumap(): ?string
    {
        return $this->acaNumap;
    }

    public function setAcaNumap(?string $acaNumap): self
    {
        $this->acaNumap = $acaNumap;

        return $this;
    }

    public function getAcaEntetem14(): ?string
    {
        return $this->acaEntetem14;
    }

    public function setAcaEntetem14(string $acaEntetem14): self
    {
        $this->acaEntetem14 = $acaEntetem14;

        return $this;
    }

    public function getAcaDateferm(): ?string
    {
        return $this->acaDateferm;
    }

    public function setAcaDateferm(?string $acaDateferm): self
    {
        $this->acaDateferm = $acaDateferm;

        return $this;
    }


}
