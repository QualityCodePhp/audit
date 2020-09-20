<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmargosLigneEmargement
 *
 * @ORM\Table(name="emargos_ligne_emargement", uniqueConstraints={@ORM\UniqueConstraint(name="emargos_ligne_emargement_pk", columns={"emlem_id"})}, indexes={@ORM\Index(name="emargos_ligne_em_type_abs_fk", columns={"mab_id"}), @ORM\Index(name="emargos_sestg_ligne_em_fk", columns={"sestg_id"}), @ORM\Index(name="emargos_feuille_ligne_em_fk", columns={"emfem_id"})})
 * @ORM\Entity
 */
class EmargosLigneEmargement
{
    /**
     * @var string
     *
     * @ORM\Column(name="emlem_id", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="emargos_ligne_emargement_emlem_id_seq", allocationSize=1, initialValue=1)
     */
    private $emlemId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emlem_id_externe", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $emlemIdExterne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lem_present", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $lemPresent;

    /**
     * @var \EmargosFeuilleEmargement
     *
     * @ORM\ManyToOne(targetEntity="EmargosFeuilleEmargement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="emfem_id", referencedColumnName="emfem_id")
     * })
     */
    private $emfem;

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
     * @var \SessionStagiaire
     *
     * @ORM\ManyToOne(targetEntity="SessionStagiaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sestg_id", referencedColumnName="sestg_id")
     * })
     */
    private $sestg;

    public function getEmlemId(): ?string
    {
        return $this->emlemId;
    }

    public function getEmlemIdExterne(): ?string
    {
        return $this->emlemIdExterne;
    }

    public function setEmlemIdExterne(?string $emlemIdExterne): self
    {
        $this->emlemIdExterne = $emlemIdExterne;

        return $this;
    }

    public function getLemPresent(): ?string
    {
        return $this->lemPresent;
    }

    public function setLemPresent(?string $lemPresent): self
    {
        $this->lemPresent = $lemPresent;

        return $this;
    }

    public function getEmfem(): ?EmargosFeuilleEmargement
    {
        return $this->emfem;
    }

    public function setEmfem(?EmargosFeuilleEmargement $emfem): self
    {
        $this->emfem = $emfem;

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

    public function getSestg(): ?SessionStagiaire
    {
        return $this->sestg;
    }

    public function setSestg(?SessionStagiaire $sestg): self
    {
        $this->sestg = $sestg;

        return $this;
    }


}
