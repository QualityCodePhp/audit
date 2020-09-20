<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfoRmpDaresTab2
 *
 * @ORM\Table(name="info_rmp_dares_tab2", uniqueConstraints={@ORM\UniqueConstraint(name="info_rmp_dares_tab2_pk", columns={"darestab2_id"})})
 * @ORM\Entity
 */
class InfoRmpDaresTab2
{
    /**
     * @var string
     *
     * @ORM\Column(name="darestab2_id", type="decimal", precision=8, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="info_rmp_dares_tab2_darestab2_id_seq", allocationSize=1, initialValue=1)
     */
    private $darestab2Id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="darestab2_rang", type="decimal", precision=2, scale=0, nullable=true)
     */
    private $darestab2Rang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="darestab2_annee", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $darestab2Annee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="darestab2_cat_majeure", type="string", length=200, nullable=true)
     */
    private $darestab2CatMajeure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="darestab2_cat_mineure", type="string", length=200, nullable=true)
     */
    private $darestab2CatMineure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="darestab2_nb_total", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $darestab2NbTotal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="darestab2_nb_femmes", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $darestab2NbFemmes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="darestab2_nb_moins_26_ans", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $darestab2NbMoins26Ans;

    /**
     * @var string|null
     *
     * @ORM\Column(name="darestab2_nb_plus_45_ans", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $darestab2NbPlus45Ans;

    public function getDarestab2Id(): ?string
    {
        return $this->darestab2Id;
    }

    public function getDarestab2Rang(): ?string
    {
        return $this->darestab2Rang;
    }

    public function setDarestab2Rang(?string $darestab2Rang): self
    {
        $this->darestab2Rang = $darestab2Rang;

        return $this;
    }

    public function getDarestab2Annee(): ?string
    {
        return $this->darestab2Annee;
    }

    public function setDarestab2Annee(?string $darestab2Annee): self
    {
        $this->darestab2Annee = $darestab2Annee;

        return $this;
    }

    public function getDarestab2CatMajeure(): ?string
    {
        return $this->darestab2CatMajeure;
    }

    public function setDarestab2CatMajeure(?string $darestab2CatMajeure): self
    {
        $this->darestab2CatMajeure = $darestab2CatMajeure;

        return $this;
    }

    public function getDarestab2CatMineure(): ?string
    {
        return $this->darestab2CatMineure;
    }

    public function setDarestab2CatMineure(?string $darestab2CatMineure): self
    {
        $this->darestab2CatMineure = $darestab2CatMineure;

        return $this;
    }

    public function getDarestab2NbTotal(): ?string
    {
        return $this->darestab2NbTotal;
    }

    public function setDarestab2NbTotal(?string $darestab2NbTotal): self
    {
        $this->darestab2NbTotal = $darestab2NbTotal;

        return $this;
    }

    public function getDarestab2NbFemmes(): ?string
    {
        return $this->darestab2NbFemmes;
    }

    public function setDarestab2NbFemmes(?string $darestab2NbFemmes): self
    {
        $this->darestab2NbFemmes = $darestab2NbFemmes;

        return $this;
    }

    public function getDarestab2NbMoins26Ans(): ?string
    {
        return $this->darestab2NbMoins26Ans;
    }

    public function setDarestab2NbMoins26Ans(?string $darestab2NbMoins26Ans): self
    {
        $this->darestab2NbMoins26Ans = $darestab2NbMoins26Ans;

        return $this;
    }

    public function getDarestab2NbPlus45Ans(): ?string
    {
        return $this->darestab2NbPlus45Ans;
    }

    public function setDarestab2NbPlus45Ans(?string $darestab2NbPlus45Ans): self
    {
        $this->darestab2NbPlus45Ans = $darestab2NbPlus45Ans;

        return $this;
    }


}
