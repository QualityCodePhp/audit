<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Simultaux
 *
 * @ORM\Table(name="simultaux", uniqueConstraints={@ORM\UniqueConstraint(name="simultaux_pk", columns={"smt_id"})}, indexes={@ORM\Index(name="simultaux_ppif", columns={"smt_programme"})})
 * @ORM\Entity
 */
class Simultaux
{
    /**
     * @var string
     *
     * @ORM\Column(name="smt_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="simultaux_smt_id_seq", allocationSize=1, initialValue=1)
     */
    private $smtId;

    /**
     * @var string
     *
     * @ORM\Column(name="smt_taux", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $smtTaux;

    /**
     * @var string
     *
     * @ORM\Column(name="smt_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $smtEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="smt_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $smtAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="smt_datec", type="datetime", nullable=false)
     */
    private $smtDatec;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="smt_programme", referencedColumnName="prg_id")
     * })
     */
    private $smtProgramme;

    public function getSmtId(): ?string
    {
        return $this->smtId;
    }

    public function getSmtTaux(): ?string
    {
        return $this->smtTaux;
    }

    public function setSmtTaux(string $smtTaux): self
    {
        $this->smtTaux = $smtTaux;

        return $this;
    }

    public function getSmtEtat(): ?string
    {
        return $this->smtEtat;
    }

    public function setSmtEtat(string $smtEtat): self
    {
        $this->smtEtat = $smtEtat;

        return $this;
    }

    public function getSmtAuteurc(): ?string
    {
        return $this->smtAuteurc;
    }

    public function setSmtAuteurc(string $smtAuteurc): self
    {
        $this->smtAuteurc = $smtAuteurc;

        return $this;
    }

    public function getSmtDatec(): ?\DateTimeInterface
    {
        return $this->smtDatec;
    }

    public function setSmtDatec(\DateTimeInterface $smtDatec): self
    {
        $this->smtDatec = $smtDatec;

        return $this;
    }

    public function getSmtProgramme(): ?Programme
    {
        return $this->smtProgramme;
    }

    public function setSmtProgramme(?Programme $smtProgramme): self
    {
        $this->smtProgramme = $smtProgramme;

        return $this;
    }


}
