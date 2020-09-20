<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SessionPlageFermEnvoi
 *
 * @ORM\Table(name="session_plage_ferm_envoi", uniqueConstraints={@ORM\UniqueConstraint(name="session_plage_ferm_envoi_pk", columns={"sespfhis_id"})}, indexes={@ORM\Index(name="sespfenv_sess_fk", columns={"sess_id"}), @ORM\Index(name="sespfenv_sesenv_fk", columns={"seshis_id"})})
 * @ORM\Entity
 */
class SessionPlageFermEnvoi
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
     * @var \SessionPlageFerm
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SessionPlageFerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sespfhis_id", referencedColumnName="sespf_id")
     * })
     */
    private $sespfhis;

    /**
     * @var \SessionFormationEnvoi
     *
     * @ORM\ManyToOne(targetEntity="SessionFormationEnvoi")
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

    public function getSespfhis(): ?SessionPlageFerm
    {
        return $this->sespfhis;
    }

    public function setSespfhis(?SessionPlageFerm $sespfhis): self
    {
        $this->sespfhis = $sespfhis;

        return $this;
    }

    public function getSeshis(): ?SessionFormationEnvoi
    {
        return $this->seshis;
    }

    public function setSeshis(?SessionFormationEnvoi $seshis): self
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
