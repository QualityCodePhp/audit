<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfoRmpDaresTab1
 *
 * @ORM\Table(name="info_rmp_dares_tab1", uniqueConstraints={@ORM\UniqueConstraint(name="info_rmp_dares_tab1_pk", columns={"darestab1_id"})})
 * @ORM\Entity
 */
class InfoRmpDaresTab1
{
    /**
     * @var string
     *
     * @ORM\Column(name="darestab1_id", type="decimal", precision=8, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="info_rmp_dares_tab1_darestab1_id_seq", allocationSize=1, initialValue=1)
     */
    private $darestab1Id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="darestab1_rang", type="decimal", precision=2, scale=0, nullable=true)
     */
    private $darestab1Rang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="darestab1_annee", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $darestab1Annee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="darestab1_cat_majeure", type="string", length=200, nullable=true)
     */
    private $darestab1CatMajeure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="darestab1_cat_mineure", type="string", length=200, nullable=true)
     */
    private $darestab1CatMineure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="darestab1_nb_stag_entres", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $darestab1NbStagEntres;

    /**
     * @var string|null
     *
     * @ORM\Column(name="darestab1_nb_stag_remu", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $darestab1NbStagRemu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="darestab1_nb_h_form", type="decimal", precision=12, scale=0, nullable=true)
     */
    private $darestab1NbHForm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="darestab1_nb_eval_orient", type="decimal", precision=12, scale=0, nullable=true)
     */
    private $darestab1NbEvalOrient;

    public function getDarestab1Id(): ?string
    {
        return $this->darestab1Id;
    }

    public function getDarestab1Rang(): ?string
    {
        return $this->darestab1Rang;
    }

    public function setDarestab1Rang(?string $darestab1Rang): self
    {
        $this->darestab1Rang = $darestab1Rang;

        return $this;
    }

    public function getDarestab1Annee(): ?string
    {
        return $this->darestab1Annee;
    }

    public function setDarestab1Annee(?string $darestab1Annee): self
    {
        $this->darestab1Annee = $darestab1Annee;

        return $this;
    }

    public function getDarestab1CatMajeure(): ?string
    {
        return $this->darestab1CatMajeure;
    }

    public function setDarestab1CatMajeure(?string $darestab1CatMajeure): self
    {
        $this->darestab1CatMajeure = $darestab1CatMajeure;

        return $this;
    }

    public function getDarestab1CatMineure(): ?string
    {
        return $this->darestab1CatMineure;
    }

    public function setDarestab1CatMineure(?string $darestab1CatMineure): self
    {
        $this->darestab1CatMineure = $darestab1CatMineure;

        return $this;
    }

    public function getDarestab1NbStagEntres(): ?string
    {
        return $this->darestab1NbStagEntres;
    }

    public function setDarestab1NbStagEntres(?string $darestab1NbStagEntres): self
    {
        $this->darestab1NbStagEntres = $darestab1NbStagEntres;

        return $this;
    }

    public function getDarestab1NbStagRemu(): ?string
    {
        return $this->darestab1NbStagRemu;
    }

    public function setDarestab1NbStagRemu(?string $darestab1NbStagRemu): self
    {
        $this->darestab1NbStagRemu = $darestab1NbStagRemu;

        return $this;
    }

    public function getDarestab1NbHForm(): ?string
    {
        return $this->darestab1NbHForm;
    }

    public function setDarestab1NbHForm(?string $darestab1NbHForm): self
    {
        $this->darestab1NbHForm = $darestab1NbHForm;

        return $this;
    }

    public function getDarestab1NbEvalOrient(): ?string
    {
        return $this->darestab1NbEvalOrient;
    }

    public function setDarestab1NbEvalOrient(?string $darestab1NbEvalOrient): self
    {
        $this->darestab1NbEvalOrient = $darestab1NbEvalOrient;

        return $this;
    }


}
