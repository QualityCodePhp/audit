<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SessionHoraireType
 *
 * @ORM\Table(name="session_horaire_type", uniqueConstraints={@ORM\UniqueConstraint(name="session_horaire_type_pk", columns={"sesht_id"})}, indexes={@ORM\Index(name="sesht_ref_jour_sem_fk", columns={"ref_id_jour_sem"}), @ORM\Index(name="sesht_sess_id_fk", columns={"sess_id"}), @ORM\Index(name="sesht_ref_jour_type_fk", columns={"ref_id_jour_type"}), @ORM\Index(name="sesht_ref_type_presta_fk", columns={"ref_id_type_prestation"})})
 * @ORM\Entity
 */
class SessionHoraireType
{
    /**
     * @var string
     *
     * @ORM\Column(name="sesht_id", type="decimal", precision=12, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="session_horaire_type_sesht_id_seq", allocationSize=1, initialValue=1)
     */
    private $seshtId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sesht_flg_non_travaille", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $seshtFlgNonTravaille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sesht_heure_debut", type="string", length=5, nullable=true)
     */
    private $seshtHeureDebut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sesht_heure_fin", type="string", length=5, nullable=true)
     */
    private $seshtHeureFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sesht_duree", type="string", length=5, nullable=true)
     */
    private $seshtDuree;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_jour_sem", referencedColumnName="ref_id")
     * })
     */
    private $refIdJourSem;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_jour_type", referencedColumnName="ref_id")
     * })
     */
    private $refIdJourType;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_type_prestation", referencedColumnName="ref_id")
     * })
     */
    private $refIdTypePrestation;

    /**
     * @var \SessionFormation
     *
     * @ORM\ManyToOne(targetEntity="SessionFormation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sess_id", referencedColumnName="sess_id")
     * })
     */
    private $sess;

    public function getSeshtId(): ?string
    {
        return $this->seshtId;
    }

    public function getSeshtFlgNonTravaille(): ?string
    {
        return $this->seshtFlgNonTravaille;
    }

    public function setSeshtFlgNonTravaille(?string $seshtFlgNonTravaille): self
    {
        $this->seshtFlgNonTravaille = $seshtFlgNonTravaille;

        return $this;
    }

    public function getSeshtHeureDebut(): ?string
    {
        return $this->seshtHeureDebut;
    }

    public function setSeshtHeureDebut(?string $seshtHeureDebut): self
    {
        $this->seshtHeureDebut = $seshtHeureDebut;

        return $this;
    }

    public function getSeshtHeureFin(): ?string
    {
        return $this->seshtHeureFin;
    }

    public function setSeshtHeureFin(?string $seshtHeureFin): self
    {
        $this->seshtHeureFin = $seshtHeureFin;

        return $this;
    }

    public function getSeshtDuree(): ?string
    {
        return $this->seshtDuree;
    }

    public function setSeshtDuree(?string $seshtDuree): self
    {
        $this->seshtDuree = $seshtDuree;

        return $this;
    }

    public function getRefIdJourSem(): ?Referentiel
    {
        return $this->refIdJourSem;
    }

    public function setRefIdJourSem(?Referentiel $refIdJourSem): self
    {
        $this->refIdJourSem = $refIdJourSem;

        return $this;
    }

    public function getRefIdJourType(): ?Referentiel
    {
        return $this->refIdJourType;
    }

    public function setRefIdJourType(?Referentiel $refIdJourType): self
    {
        $this->refIdJourType = $refIdJourType;

        return $this;
    }

    public function getRefIdTypePrestation(): ?Referentiel
    {
        return $this->refIdTypePrestation;
    }

    public function setRefIdTypePrestation(?Referentiel $refIdTypePrestation): self
    {
        $this->refIdTypePrestation = $refIdTypePrestation;

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
