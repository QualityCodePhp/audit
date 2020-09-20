<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TModelecourAssoc
 *
 * @ORM\Table(name="t_modelecour_assoc", uniqueConstraints={@ORM\UniqueConstraint(name="t_modelecour_assoc_pk", columns={"tmca_id"})}, indexes={@ORM\Index(name="tmc_id_fk", columns={"tmc_id_modele"}), @ORM\Index(name="tmc_id_modele_fk", columns={"tmc_id"})})
 * @ORM\Entity
 */
class TModelecourAssoc
{
    /**
     * @var int
     *
     * @ORM\Column(name="tmca_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="t_modelecour_assoc_tmca_id_seq", allocationSize=1, initialValue=1)
     */
    private $tmcaId;

    /**
     * @var \TModelecour
     *
     * @ORM\ManyToOne(targetEntity="TModelecour")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tmc_id_modele", referencedColumnName="tmc_id")
     * })
     */
    private $tmcIdModele;

    /**
     * @var \TModelecour
     *
     * @ORM\ManyToOne(targetEntity="TModelecour")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tmc_id", referencedColumnName="tmc_id")
     * })
     */
    private $tmc;

    public function getTmcaId(): ?int
    {
        return $this->tmcaId;
    }

    public function getTmcIdModele(): ?TModelecour
    {
        return $this->tmcIdModele;
    }

    public function setTmcIdModele(?TModelecour $tmcIdModele): self
    {
        $this->tmcIdModele = $tmcIdModele;

        return $this;
    }

    public function getTmc(): ?TModelecour
    {
        return $this->tmc;
    }

    public function setTmc(?TModelecour $tmc): self
    {
        $this->tmc = $tmc;

        return $this;
    }


}
