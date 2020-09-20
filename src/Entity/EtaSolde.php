<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtaSolde
 *
 * @ORM\Table(name="eta_solde", uniqueConstraints={@ORM\UniqueConstraint(name="eta_solde_pk", columns={"eso_id"})}, indexes={@ORM\Index(name="off_eso_fk", columns={"eso_offre"}), @ORM\Index(name="association_548_fk", columns={"eso_rbordereau"})})
 * @ORM\Entity
 */
class EtaSolde
{
    /**
     * @var string
     *
     * @ORM\Column(name="eso_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="eta_solde_eso_id_seq", allocationSize=1, initialValue=1)
     */
    private $esoId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eso_nbcom", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $esoNbcom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eso_nbrea", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $esoNbrea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eso_pourexe", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $esoPourexe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eso_lib", type="string", length=50, nullable=true)
     */
    private $esoLib;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eso_unite", type="string", length=3, nullable=true)
     */
    private $esoUnite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eso_nbunite_mini", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $esoNbuniteMini;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eso_nbunite_maxi", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $esoNbuniteMaxi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eso_mbcid", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $esoMbcid;

    /**
     * @var \RBordereau
     *
     * @ORM\ManyToOne(targetEntity="RBordereau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="eso_rbordereau", referencedColumnName="mpr_id")
     * })
     */
    private $esoRbordereau;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="eso_offre", referencedColumnName="off_id")
     * })
     */
    private $esoOffre;

    public function getEsoId(): ?string
    {
        return $this->esoId;
    }

    public function getEsoNbcom(): ?string
    {
        return $this->esoNbcom;
    }

    public function setEsoNbcom(?string $esoNbcom): self
    {
        $this->esoNbcom = $esoNbcom;

        return $this;
    }

    public function getEsoNbrea(): ?string
    {
        return $this->esoNbrea;
    }

    public function setEsoNbrea(?string $esoNbrea): self
    {
        $this->esoNbrea = $esoNbrea;

        return $this;
    }

    public function getEsoPourexe(): ?string
    {
        return $this->esoPourexe;
    }

    public function setEsoPourexe(?string $esoPourexe): self
    {
        $this->esoPourexe = $esoPourexe;

        return $this;
    }

    public function getEsoLib(): ?string
    {
        return $this->esoLib;
    }

    public function setEsoLib(?string $esoLib): self
    {
        $this->esoLib = $esoLib;

        return $this;
    }

    public function getEsoUnite(): ?string
    {
        return $this->esoUnite;
    }

    public function setEsoUnite(?string $esoUnite): self
    {
        $this->esoUnite = $esoUnite;

        return $this;
    }

    public function getEsoNbuniteMini(): ?string
    {
        return $this->esoNbuniteMini;
    }

    public function setEsoNbuniteMini(?string $esoNbuniteMini): self
    {
        $this->esoNbuniteMini = $esoNbuniteMini;

        return $this;
    }

    public function getEsoNbuniteMaxi(): ?string
    {
        return $this->esoNbuniteMaxi;
    }

    public function setEsoNbuniteMaxi(?string $esoNbuniteMaxi): self
    {
        $this->esoNbuniteMaxi = $esoNbuniteMaxi;

        return $this;
    }

    public function getEsoMbcid(): ?string
    {
        return $this->esoMbcid;
    }

    public function setEsoMbcid(?string $esoMbcid): self
    {
        $this->esoMbcid = $esoMbcid;

        return $this;
    }

    public function getEsoRbordereau(): ?RBordereau
    {
        return $this->esoRbordereau;
    }

    public function setEsoRbordereau(?RBordereau $esoRbordereau): self
    {
        $this->esoRbordereau = $esoRbordereau;

        return $this;
    }

    public function getEsoOffre(): ?Offre
    {
        return $this->esoOffre;
    }

    public function setEsoOffre(?Offre $esoOffre): self
    {
        $this->esoOffre = $esoOffre;

        return $this;
    }


}
