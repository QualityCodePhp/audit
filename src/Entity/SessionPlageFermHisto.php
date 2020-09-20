<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SessionPlageFermHisto
 *
 * @ORM\Table(name="session_plage_ferm_histo", uniqueConstraints={@ORM\UniqueConstraint(name="session_plage_ferm_histo_pk", columns={"sespfhis_id"})}, indexes={@ORM\Index(name="sespfhis_seshis_fk", columns={"seshis_id"}), @ORM\Index(name="sespfhis_sess_fk", columns={"sess_id"})})
 * @ORM\Entity
 */
class SessionPlageFermHisto
{
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sespfhis_date_debut", type="datetime", nullable=true)
     */
    private $sespfhisDateDebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sespfhis_date_fin", type="datetime", nullable=true)
     */
    private $sespfhisDateFin;

    /**
     * @var \SessionPlageFermEnvoi
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SessionPlageFermEnvoi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sespfhis_id", referencedColumnName="sespfhis_id")
     * })
     */
    private $sespfhis;

    /**
     * @var \SessionFormationHisto
     *
     * @ORM\ManyToOne(targetEntity="SessionFormationHisto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="seshis_id", referencedColumnName="seshis_id")
     * })
     */
    private $seshis;

    /**
     * @var \SessionFormation
     *
     * @ORM\ManyToOne(targetEntity="SessionFormation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sess_id", referencedColumnName="sess_id")
     * })
     */
    private $sess;

    public function getSespfhisDateDebut(): ?\DateTimeInterface
    {
        return $this->sespfhisDateDebut;
    }

    public function setSespfhisDateDebut(?\DateTimeInterface $sespfhisDateDebut): self
    {
        $this->sespfhisDateDebut = $sespfhisDateDebut;

        return $this;
    }

    public function getSespfhisDateFin(): ?\DateTimeInterface
    {
        return $this->sespfhisDateFin;
    }

    public function setSespfhisDateFin(?\DateTimeInterface $sespfhisDateFin): self
    {
        $this->sespfhisDateFin = $sespfhisDateFin;

        return $this;
    }

    public function getSespfhis(): ?SessionPlageFermEnvoi
    {
        return $this->sespfhis;
    }

    public function setSespfhis(?SessionPlageFermEnvoi $sespfhis): self
    {
        $this->sespfhis = $sespfhis;

        return $this;
    }

    public function getSeshis(): ?SessionFormationHisto
    {
        return $this->seshis;
    }

    public function setSeshis(?SessionFormationHisto $seshis): self
    {
        $this->seshis = $seshis;

        return $this;
    }

    public function getSess(): ?SessionFormation
    {
        return $this->sess;
    }

    public function setSess(?SessionFormation $sess): self
    {
        $this->sess = $sess;

        return $this;
    }


}
