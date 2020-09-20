<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EttPpa
 *
 * @ORM\Table(name="ett_ppa", uniqueConstraints={@ORM\UniqueConstraint(name="ett_ppa_pk", columns={"epa_id"})}, indexes={@ORM\Index(name="ett_ppa_epeif", columns={"epa_porteur"})})
 * @ORM\Entity
 */
class EttPpa
{
    /**
     * @var string
     *
     * @ORM\Column(name="epa_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ett_ppa_epa_id_seq", allocationSize=1, initialValue=1)
     */
    private $epaId;

    /**
     * @var string
     *
     * @ORM\Column(name="epa_indice", type="decimal", precision=1, scale=0, nullable=false, options={"comment"="NÂ° colonne correspondant Ã  l''annÃ©e N-1 Ã  N-3"})
     */
    private $epaIndice;

    /**
     * @var string
     *
     * @ORM\Column(name="epa_annee", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $epaAnnee;

    /**
     * @var string
     *
     * @ORM\Column(name="epa_budget", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $epaBudget;

    /**
     * @var \EttPp
     *
     * @ORM\ManyToOne(targetEntity="EttPp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="epa_porteur", referencedColumnName="epp_id")
     * })
     */
    private $epaPorteur;

    public function getEpaId(): ?string
    {
        return $this->epaId;
    }

    public function getEpaIndice(): ?string
    {
        return $this->epaIndice;
    }

    public function setEpaIndice(string $epaIndice): self
    {
        $this->epaIndice = $epaIndice;

        return $this;
    }

    public function getEpaAnnee(): ?string
    {
        return $this->epaAnnee;
    }

    public function setEpaAnnee(string $epaAnnee): self
    {
        $this->epaAnnee = $epaAnnee;

        return $this;
    }

    public function getEpaBudget(): ?string
    {
        return $this->epaBudget;
    }

    public function setEpaBudget(string $epaBudget): self
    {
        $this->epaBudget = $epaBudget;

        return $this;
    }

    public function getEpaPorteur(): ?EttPp
    {
        return $this->epaPorteur;
    }

    public function setEpaPorteur(?EttPp $epaPorteur): self
    {
        $this->epaPorteur = $epaPorteur;

        return $this;
    }


}
