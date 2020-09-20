<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrilleDdePaiement
 *
 * @ORM\Table(name="grille_dde_paiement", uniqueConstraints={@ORM\UniqueConstraint(name="grille_dde_paiement_pk", columns={"gpa_id"})}, indexes={@ORM\Index(name="gpa_ddp_prec_fk", columns={"ddp_id_prec"}), @ORM\Index(name="gpa_ddp_en_cours_fk", columns={"ddp_id"})})
 * @ORM\Entity
 */
class GrilleDdePaiement
{
    /**
     * @var int
     *
     * @ORM\Column(name="gpa_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="grille_dde_paiement_gpa_id_seq", allocationSize=1, initialValue=1)
     */
    private $gpaId;

    /**
     * @var \DdePaiement
     *
     * @ORM\ManyToOne(targetEntity="DdePaiement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ddp_id", referencedColumnName="ddp_id")
     * })
     */
    private $ddp;

    /**
     * @var \DdePaiement
     *
     * @ORM\ManyToOne(targetEntity="DdePaiement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ddp_id_prec", referencedColumnName="ddp_id")
     * })
     */
    private $ddpIdPrec;

    public function getGpaId(): ?int
    {
        return $this->gpaId;
    }

    public function getDdp(): ?DdePaiement
    {
        return $this->ddp;
    }

    public function setDdp(?DdePaiement $ddp): self
    {
        $this->ddp = $ddp;

        return $this;
    }

    public function getDdpIdPrec(): ?DdePaiement
    {
        return $this->ddpIdPrec;
    }

    public function setDdpIdPrec(?DdePaiement $ddpIdPrec): self
    {
        $this->ddpIdPrec = $ddpIdPrec;

        return $this;
    }


}
