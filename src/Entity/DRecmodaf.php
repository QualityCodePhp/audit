<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DRecmodaf
 *
 * @ORM\Table(name="d_recmodaf", uniqueConstraints={@ORM\UniqueConstraint(name="d_recmodaf_pk", columns={"der_id"})}, indexes={@ORM\Index(name="d_recmodaf_trtif2", columns={"der_typrdet"}), @ORM\Index(name="d_recmodaf_rrrif", columns={"der_rubrique"})})
 * @ORM\Entity
 */
class DRecmodaf
{
    /**
     * @var int
     *
     * @ORM\Column(name="der_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="d_recmodaf_der_id_seq", allocationSize=1, initialValue=1)
     */
    private $derId;

    /**
     * @var \RRecmodaf
     *
     * @ORM\ManyToOne(targetEntity="RRecmodaf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="der_rubrique", referencedColumnName="ruc_id")
     * })
     */
    private $derRubrique;

    /**
     * @var \TdRecette
     *
     * @ORM\ManyToOne(targetEntity="TdRecette")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="der_typrdet", referencedColumnName="tdr_id")
     * })
     */
    private $derTyprdet;

    public function getDerId(): ?int
    {
        return $this->derId;
    }

    public function getDerRubrique(): ?RRecmodaf
    {
        return $this->derRubrique;
    }

    public function setDerRubrique(?RRecmodaf $derRubrique): self
    {
        $this->derRubrique = $derRubrique;

        return $this;
    }

    public function getDerTyprdet(): ?TdRecette
    {
        return $this->derTyprdet;
    }

    public function setDerTyprdet(?TdRecette $derTyprdet): self
    {
        $this->derTyprdet = $derTyprdet;

        return $this;
    }


}
