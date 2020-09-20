<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SessionFinanceur
 *
 * @ORM\Table(name="session_financeur", uniqueConstraints={@ORM\UniqueConstraint(name="session_financeur_pk", columns={"sesfi_id"})}, indexes={@ORM\Index(name="association_549_fk", columns={"ref_id_financeur"}), @ORM\Index(name="association_547_fk", columns={"sess_id"})})
 * @ORM\Entity
 */
class SessionFinanceur
{
    /**
     * @var string
     *
     * @ORM\Column(name="sesfi_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="session_financeur_sesfi_id_seq", allocationSize=1, initialValue=1)
     */
    private $sesfiId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sesfi_nb_place", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $sesfiNbPlace;

    /**
     * @var \SessionFormation
     *
     * @ORM\ManyToOne(targetEntity="SessionFormation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sess_id", referencedColumnName="sess_id")
     * })
     */
    private $sess;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_financeur", referencedColumnName="ref_id")
     * })
     */
    private $refIdFinanceur;

    public function getSesfiId(): ?string
    {
        return $this->sesfiId;
    }

    public function getSesfiNbPlace(): ?string
    {
        return $this->sesfiNbPlace;
    }

    public function setSesfiNbPlace(?string $sesfiNbPlace): self
    {
        $this->sesfiNbPlace = $sesfiNbPlace;

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

    public function getRefIdFinanceur(): ?Referentiel
    {
        return $this->refIdFinanceur;
    }

    public function setRefIdFinanceur(?Referentiel $refIdFinanceur): self
    {
        $this->refIdFinanceur = $refIdFinanceur;

        return $this;
    }


}
