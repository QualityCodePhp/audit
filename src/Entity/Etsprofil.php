<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etsprofil
 *
 * @ORM\Table(name="etsprofil", uniqueConstraints={@ORM\UniqueConstraint(name="etsprofil_pk", columns={"epr_id"})}, indexes={@ORM\Index(name="etsprofil_ppif", columns={"epr_profil"}), @ORM\Index(name="etsprofil_eeif2", columns={"epr_etablssmt"})})
 * @ORM\Entity
 */
class Etsprofil
{
    /**
     * @var string
     *
     * @ORM\Column(name="epr_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="etsprofil_epr_id_seq", allocationSize=1, initialValue=1)
     */
    private $eprId;

    /**
     * @var string
     *
     * @ORM\Column(name="epr_affectant", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $eprAffectant;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="epr_etablssmt", referencedColumnName="ets_id")
     * })
     */
    private $eprEtablssmt;

    /**
     * @var \Profil
     *
     * @ORM\ManyToOne(targetEntity="Profil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="epr_profil", referencedColumnName="prf_id")
     * })
     */
    private $eprProfil;

    public function getEprId(): ?string
    {
        return $this->eprId;
    }

    public function getEprAffectant(): ?string
    {
        return $this->eprAffectant;
    }

    public function setEprAffectant(string $eprAffectant): self
    {
        $this->eprAffectant = $eprAffectant;

        return $this;
    }

    public function getEprEtablssmt(): ?Etablssmt
    {
        return $this->eprEtablssmt;
    }

    public function setEprEtablssmt(?Etablssmt $eprEtablssmt): self
    {
        $this->eprEtablssmt = $eprEtablssmt;

        return $this;
    }

    public function getEprProfil(): ?Profil
    {
        return $this->eprProfil;
    }

    public function setEprProfil(?Profil $eprProfil): self
    {
        $this->eprProfil = $eprProfil;

        return $this;
    }


}
