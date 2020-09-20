<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmargosAbsence
 *
 * @ORM\Table(name="emargos_absence", uniqueConstraints={@ORM\UniqueConstraint(name="emargos_absence_pk", columns={"emabs_id"})}, indexes={@ORM\Index(name="emargos_absence_type_absence_fk", columns={"mab_id"}), @ORM\Index(name="emargos_stagiaire_absence_fk", columns={"stg_id"})})
 * @ORM\Entity
 */
class EmargosAbsence
{
    /**
     * @var string
     *
     * @ORM\Column(name="emabs_id", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="emargos_absence_emabs_id_seq", allocationSize=1, initialValue=1)
     */
    private $emabsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emabs_id_externe", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $emabsIdExterne;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="emabs_dt_deb", type="datetime", nullable=true)
     */
    private $emabsDtDeb;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="emabs_dt_fin", type="datetime", nullable=true)
     */
    private $emabsDtFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emabs_portion_deb", type="string", length=2, nullable=true)
     */
    private $emabsPortionDeb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emabs_portion_fin", type="string", length=2, nullable=true)
     */
    private $emabsPortionFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emabs_type_saisie", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $emabsTypeSaisie;

    /**
     * @var \MotifAbsence
     *
     * @ORM\ManyToOne(targetEntity="MotifAbsence")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mab_id", referencedColumnName="mab_id")
     * })
     */
    private $mab;

    /**
     * @var \Stagiaire
     *
     * @ORM\ManyToOne(targetEntity="Stagiaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stg_id", referencedColumnName="stg_id")
     * })
     */
    private $stg;

    public function getEmabsId(): ?string
    {
        return $this->emabsId;
    }

    public function getEmabsIdExterne(): ?string
    {
        return $this->emabsIdExterne;
    }

    public function setEmabsIdExterne(?string $emabsIdExterne): self
    {
        $this->emabsIdExterne = $emabsIdExterne;

        return $this;
    }

    public function getEmabsDtDeb(): ?\DateTimeInterface
    {
        return $this->emabsDtDeb;
    }

    public function setEmabsDtDeb(?\DateTimeInterface $emabsDtDeb): self
    {
        $this->emabsDtDeb = $emabsDtDeb;

        return $this;
    }

    public function getEmabsDtFin(): ?\DateTimeInterface
    {
        return $this->emabsDtFin;
    }

    public function setEmabsDtFin(?\DateTimeInterface $emabsDtFin): self
    {
        $this->emabsDtFin = $emabsDtFin;

        return $this;
    }

    public function getEmabsPortionDeb(): ?string
    {
        return $this->emabsPortionDeb;
    }

    public function setEmabsPortionDeb(?string $emabsPortionDeb): self
    {
        $this->emabsPortionDeb = $emabsPortionDeb;

        return $this;
    }

    public function getEmabsPortionFin(): ?string
    {
        return $this->emabsPortionFin;
    }

    public function setEmabsPortionFin(?string $emabsPortionFin): self
    {
        $this->emabsPortionFin = $emabsPortionFin;

        return $this;
    }

    public function getEmabsTypeSaisie(): ?string
    {
        return $this->emabsTypeSaisie;
    }

    public function setEmabsTypeSaisie(?string $emabsTypeSaisie): self
    {
        $this->emabsTypeSaisie = $emabsTypeSaisie;

        return $this;
    }

    public function getMab(): ?MotifAbsence
    {
        return $this->mab;
    }

    public function setMab(?MotifAbsence $mab): self
    {
        $this->mab = $mab;

        return $this;
    }

    public function getStg(): ?Stagiaire
    {
        return $this->stg;
    }

    public function setStg(?Stagiaire $stg): self
    {
        $this->stg = $stg;

        return $this;
    }


}
