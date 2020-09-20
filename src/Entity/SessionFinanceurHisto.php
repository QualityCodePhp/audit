<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SessionFinanceurHisto
 *
 * @ORM\Table(name="session_financeur_histo", uniqueConstraints={@ORM\UniqueConstraint(name="session_financeur_histo_pk", columns={"sesfi_id"})}, indexes={@ORM\Index(name="association_552_fk", columns={"ref_id_financeur"}), @ORM\Index(name="association_551_fk", columns={"seshis_id"})})
 * @ORM\Entity
 */
class SessionFinanceurHisto
{
    /**
     * @var string
     *
     * @ORM\Column(name="seshfi_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="session_financeur_histo_sesfi_id_seq", allocationSize=1, initialValue=1)
     */
    private $seshfiId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshfi_nb_place", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $seshfiNbPlace;

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
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_financeur", referencedColumnName="ref_id")
     * })
     */
    private $refIdFinanceur;

    public function getSeshfiId(): ?string
    {
        return $this->sesfiId;
    }

    public function getSeshfiNbPlace(): ?string
    {
        return $this->seshfiNbPlace;
    }

    public function setSeshfiNbPlace(?string $seshfiNbPlace): self
    {
        $this->seshfiNbPlace = $seshfiNbPlace;

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
