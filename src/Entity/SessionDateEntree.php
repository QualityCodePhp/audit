<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SessionDateEntree
 *
 * @ORM\Table(name="session_date_entree", uniqueConstraints={@ORM\UniqueConstraint(name="session_date_entree_pk", columns={"sesent_id"})}, indexes={@ORM\Index(name="relation_26_fk", columns={"sess_id"})})
 * @ORM\Entity
 */
class SessionDateEntree
{
    /**
     * @var string
     *
     * @ORM\Column(name="sesent_id", type="decimal", precision=12, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="session_date_entree_sesent_id_seq", allocationSize=1, initialValue=1)
     */
    private $sesentId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sesent_date_entree", type="datetime", nullable=true)
     */
    private $sesentDateEntree;

    /**
     * @var \SessionFormation
     *
     * @ORM\ManyToOne(targetEntity="SessionFormation", inversedBy="sessionsDateEntree")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sess_id", referencedColumnName="sess_id")
     * })
     */
    private $sess;

    public function getSesentId(): ?string
    {
        return $this->sesentId;
    }

    public function getSesentDateEntree(): ?\DateTimeInterface
    {
        return $this->sesentDateEntree;
    }

    public function setSesentDateEntree(?\DateTimeInterface $sesentDateEntree): self
    {
        $this->sesentDateEntree = $sesentDateEntree;

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
