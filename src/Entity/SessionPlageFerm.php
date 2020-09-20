<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SessionPlageFerm
 *
 * @ORM\Table(name="session_plage_ferm", uniqueConstraints={@ORM\UniqueConstraint(name="session_plage_ferm_pk", columns={"sespf_id"})}, indexes={@ORM\Index(name="sespf_sess_id_fk", columns={"sess_id"})})
 * @ORM\Entity
 */
class SessionPlageFerm
{
    /**
     * @var string
     *
     * @ORM\Column(name="sespf_id", type="decimal", precision=12, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="session_plage_ferm_sespf_id_seq", allocationSize=1, initialValue=1)
     */
    private $sespfId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sespf_date_debut", type="datetime", nullable=true)
     */
    private $sespfDateDebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sespf_date_fin", type="datetime", nullable=true)
     */
    private $sespfDateFin;

    /**
     * @var \SessionFormation
     *
     * @ORM\ManyToOne(targetEntity="SessionFormation", inversedBy="sessionPlageFermeture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sess_id", referencedColumnName="sess_id")
     * })
     */
    private $sess;

    public function getSespfId(): ?string
    {
        return $this->sespfId;
    }

    public function getSespfDateDebut(): ?\DateTimeInterface
    {
        return $this->sespfDateDebut;
    }

    public function setSespfDateDebut(?\DateTimeInterface $sespfDateDebut): self
    {
        $this->sespfDateDebut = $sespfDateDebut;

        return $this;
    }

    public function getSespfDateFin(): ?\DateTimeInterface
    {
        return $this->sespfDateFin;
    }

    public function setSespfDateFin(?\DateTimeInterface $sespfDateFin): self
    {
        $this->sespfDateFin = $sespfDateFin;

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
