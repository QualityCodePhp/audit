<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EttEntp
 *
 * @ORM\Table(name="ett_entp", uniqueConstraints={@ORM\UniqueConstraint(name="ett_entp_pk", columns={"een_id"})})
 * @ORM\Entity
 */
class EttEntp
{
    /**
     * @var string
     *
     * @ORM\Column(name="een_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ett_entp_een_id_seq", allocationSize=1, initialValue=1)
     */
    private $eenId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="een_groupe", type="string", length=50, nullable=true)
     */
    private $eenGroupe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="een_nbsalgrp", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eenNbsalgrp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="een_partcaptl", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $eenPartcaptl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="een_autreets", type="string", length=3000, nullable=true)
     */
    private $eenAutreets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="een_anneep", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $eenAnneep;

    /**
     * @var string|null
     *
     * @ORM\Column(name="een_caanneep", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eenCaanneep;

    /**
     * @var string|null
     *
     * @ORM\Column(name="een_bilananneep", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eenBilananneep;

    /**
     * @var string|null
     *
     * @ORM\Column(name="een_efentp", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eenEfentp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="een_efprojet", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eenEfprojet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="een_effemme", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eenEffemme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="een_effeprojet", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eenEffeprojet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="een_eftpartiel", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eenEftpartiel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="een_eftpprojet", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eenEftpprojet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="een_efouvrier", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eenEfouvrier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="een_efouprojet", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eenEfouprojet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="een_efcdi", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eenEfcdi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="een_efcdiprojet", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eenEfcdiprojet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="een_efsenior", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eenEfsenior;

    /**
     * @var string|null
     *
     * @ORM\Column(name="een_efsenprojet", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eenEfsenprojet;

    public function getEenId(): ?string
    {
        return $this->eenId;
    }

    public function getEenGroupe(): ?string
    {
        return $this->eenGroupe;
    }

    public function setEenGroupe(?string $eenGroupe): self
    {
        $this->eenGroupe = $eenGroupe;

        return $this;
    }

    public function getEenNbsalgrp(): ?string
    {
        return $this->eenNbsalgrp;
    }

    public function setEenNbsalgrp(?string $eenNbsalgrp): self
    {
        $this->eenNbsalgrp = $eenNbsalgrp;

        return $this;
    }

    public function getEenPartcaptl(): ?string
    {
        return $this->eenPartcaptl;
    }

    public function setEenPartcaptl(?string $eenPartcaptl): self
    {
        $this->eenPartcaptl = $eenPartcaptl;

        return $this;
    }

    public function getEenAutreets(): ?string
    {
        return $this->eenAutreets;
    }

    public function setEenAutreets(?string $eenAutreets): self
    {
        $this->eenAutreets = $eenAutreets;

        return $this;
    }

    public function getEenAnneep(): ?string
    {
        return $this->eenAnneep;
    }

    public function setEenAnneep(?string $eenAnneep): self
    {
        $this->eenAnneep = $eenAnneep;

        return $this;
    }

    public function getEenCaanneep(): ?string
    {
        return $this->eenCaanneep;
    }

    public function setEenCaanneep(?string $eenCaanneep): self
    {
        $this->eenCaanneep = $eenCaanneep;

        return $this;
    }

    public function getEenBilananneep(): ?string
    {
        return $this->eenBilananneep;
    }

    public function setEenBilananneep(?string $eenBilananneep): self
    {
        $this->eenBilananneep = $eenBilananneep;

        return $this;
    }

    public function getEenEfentp(): ?string
    {
        return $this->eenEfentp;
    }

    public function setEenEfentp(?string $eenEfentp): self
    {
        $this->eenEfentp = $eenEfentp;

        return $this;
    }

    public function getEenEfprojet(): ?string
    {
        return $this->eenEfprojet;
    }

    public function setEenEfprojet(?string $eenEfprojet): self
    {
        $this->eenEfprojet = $eenEfprojet;

        return $this;
    }

    public function getEenEffemme(): ?string
    {
        return $this->eenEffemme;
    }

    public function setEenEffemme(?string $eenEffemme): self
    {
        $this->eenEffemme = $eenEffemme;

        return $this;
    }

    public function getEenEffeprojet(): ?string
    {
        return $this->eenEffeprojet;
    }

    public function setEenEffeprojet(?string $eenEffeprojet): self
    {
        $this->eenEffeprojet = $eenEffeprojet;

        return $this;
    }

    public function getEenEftpartiel(): ?string
    {
        return $this->eenEftpartiel;
    }

    public function setEenEftpartiel(?string $eenEftpartiel): self
    {
        $this->eenEftpartiel = $eenEftpartiel;

        return $this;
    }

    public function getEenEftpprojet(): ?string
    {
        return $this->eenEftpprojet;
    }

    public function setEenEftpprojet(?string $eenEftpprojet): self
    {
        $this->eenEftpprojet = $eenEftpprojet;

        return $this;
    }

    public function getEenEfouvrier(): ?string
    {
        return $this->eenEfouvrier;
    }

    public function setEenEfouvrier(?string $eenEfouvrier): self
    {
        $this->eenEfouvrier = $eenEfouvrier;

        return $this;
    }

    public function getEenEfouprojet(): ?string
    {
        return $this->eenEfouprojet;
    }

    public function setEenEfouprojet(?string $eenEfouprojet): self
    {
        $this->eenEfouprojet = $eenEfouprojet;

        return $this;
    }

    public function getEenEfcdi(): ?string
    {
        return $this->eenEfcdi;
    }

    public function setEenEfcdi(?string $eenEfcdi): self
    {
        $this->eenEfcdi = $eenEfcdi;

        return $this;
    }

    public function getEenEfcdiprojet(): ?string
    {
        return $this->eenEfcdiprojet;
    }

    public function setEenEfcdiprojet(?string $eenEfcdiprojet): self
    {
        $this->eenEfcdiprojet = $eenEfcdiprojet;

        return $this;
    }

    public function getEenEfsenior(): ?string
    {
        return $this->eenEfsenior;
    }

    public function setEenEfsenior(?string $eenEfsenior): self
    {
        $this->eenEfsenior = $eenEfsenior;

        return $this;
    }

    public function getEenEfsenprojet(): ?string
    {
        return $this->eenEfsenprojet;
    }

    public function setEenEfsenprojet(?string $eenEfsenprojet): self
    {
        $this->eenEfsenprojet = $eenEfsenprojet;

        return $this;
    }


}
