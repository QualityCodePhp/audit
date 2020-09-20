<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SessionFinanceurEnvoi
 *
 * @ORM\Table(name="session_financeur_envoi", uniqueConstraints={@ORM\UniqueConstraint(name="session_financeur_envoi_pk", columns={"sesfi_id"})}, indexes={@ORM\Index(name="sesenvfi_session_fk", columns={"seshis_id"}), @ORM\Index(name="sesenvfi_ref_financeur_fk", columns={"ref_id_financeur"})})
 * @ORM\Entity
 */
class SessionFinanceurEnvoi
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="seshfi_nb_place", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $seshfiNbPlace;

    /**
     * @var \SessionFinanceurHisto
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SessionFinanceurHisto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="seshfi_id", referencedColumnName="seshfi_id")
     * })
     */
    private $seshfi;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel", fetch="EAGER")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_financeur", referencedColumnName="ref_id")
     * })
     */
    private $refIdFinanceur;

    /**
     * @var \SessionFormationEnvoi
     *
     * @ORM\ManyToOne(targetEntity="SessionFormationEnvoi", inversedBy="sessionFinanceurEnvoi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="seshis_id", referencedColumnName="seshis_id")
     * })
     */
    private $seshis;

    public function getSeshfiNbPlace(): ?string
    {
        return $this->seshfiNbPlace;
    }

    public function setSeshfiNbPlace(?string $seshfiNbPlace): self
    {
        $this->seshfiNbPlace = $seshfiNbPlace;

        return $this;
    }

    public function getSeshfi(): ?SessionFinanceurHisto
    {
        return $this->sesfi;
    }

    public function setSeshfi(?SessionFinanceurHisto $sesfi): self
    {
        $this->sesfi = $sesfi;

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

    public function getSeshis(): ?SessionFormationEnvoi
    {
        return $this->seshis;
    }

    public function setSeshis(?SessionFormationEnvoi $seshis): self
    {
        $this->seshis = $seshis;

        return $this;
    }


}
