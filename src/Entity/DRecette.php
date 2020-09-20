<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DRecette
 *
 * @ORM\Table(name="d_recette", uniqueConstraints={@ORM\UniqueConstraint(name="d_recette_pk", columns={"dmp_id"})}, indexes={@ORM\Index(name="d_recette_rrrif", columns={"dmp_rubrique"}), @ORM\Index(name="d_recette_trtif", columns={"dmp_typrdet"})})
 * @ORM\Entity
 */
class DRecette
{
    /**
     * @var int
     *
     * @ORM\Column(name="dmp_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="d_recette_dmp_id_seq", allocationSize=1, initialValue=1)
     */
    private $dmpId;

    /**
     * @var \RRecette
     *
     * @ORM\ManyToOne(targetEntity="RRecette")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dmp_rubrique", referencedColumnName="rmp_id")
     * })
     */
    private $dmpRubrique;

    /**
     * @var \TdRecette
     *
     * @ORM\ManyToOne(targetEntity="TdRecette")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dmp_typrdet", referencedColumnName="tdr_id")
     * })
     */
    private $dmpTyprdet;

    public function getDmpId(): ?int
    {
        return $this->dmpId;
    }

    public function getDmpRubrique(): ?RRecette
    {
        return $this->dmpRubrique;
    }

    public function setDmpRubrique(?RRecette $dmpRubrique): self
    {
        $this->dmpRubrique = $dmpRubrique;

        return $this;
    }

    public function getDmpTyprdet(): ?TdRecette
    {
        return $this->dmpTyprdet;
    }

    public function setDmpTyprdet(?TdRecette $dmpTyprdet): self
    {
        $this->dmpTyprdet = $dmpTyprdet;

        return $this;
    }


}
