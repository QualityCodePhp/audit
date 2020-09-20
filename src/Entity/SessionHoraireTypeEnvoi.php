<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SessionHoraireTypeEnvoi
 *
 * @ORM\Table(name="session_horaire_type_envoi", uniqueConstraints={@ORM\UniqueConstraint(name="session_horaire_type_envoi_pk", columns={"seshthis_id"})}, indexes={@ORM\Index(name="seshtenv_ref_jour_sem_fk", columns={"ref_id_jour_sem"}), @ORM\Index(name="seshtenv_ref_type_presta_fk", columns={"ref_id_type_prestation"}), @ORM\Index(name="seshtenv_ref_jour_type_fk", columns={"ref_id_jour_type"}), @ORM\Index(name="seshtenv_sesenv_fk", columns={"seshis_id"}), @ORM\Index(name="seshtenv_sess_fk", columns={"sess_id"})})
 * @ORM\Entity
 */
class SessionHoraireTypeEnvoi
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="seshthis_flg_non_travaille", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $seshthisFlgNonTravaille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshthis_heure_debut", type="string", length=5, nullable=true)
     */
    private $seshthisHeureDebut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshthis_heure_fin", type="string", length=5, nullable=true)
     */
    private $seshthisHeureFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seshthis_duree", type="string", length=5, nullable=true)
     */
    private $seshthisDuree;

    /**
     * @var \SessionHoraireType
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SessionHoraireType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="seshthis_id", referencedColumnName="sesht_id")
     * })
     */
    private $seshthis;

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

    public function getSeshthisFlgNonTravaille(): ?string
    {
        return $this->seshthisFlgNonTravaille;
    }

    public function setSeshthisFlgNonTravaille(?string $seshthisFlgNonTravaille): self
    {
        $this->seshthisFlgNonTravaille = $seshthisFlgNonTravaille;

        return $this;
    }

    public function getSeshthisHeureDebut(): ?string
    {
        return $this->seshthisHeureDebut;
    }

    public function setSeshthisHeureDebut(?string $seshthisHeureDebut): self
    {
        $this->seshthisHeureDebut = $seshthisHeureDebut;

        return $this;
    }

    public function getSeshthisHeureFin(): ?string
    {
        return $this->seshthisHeureFin;
    }

    public function setSeshthisHeureFin(?string $seshthisHeureFin): self
    {
        $this->seshthisHeureFin = $seshthisHeureFin;

        return $this;
    }

    public function getSeshthisDuree(): ?string
    {
        return $this->seshthisDuree;
    }

    public function setSeshthisDuree(?string $seshthisDuree): self
    {
        $this->seshthisDuree = $seshthisDuree;

        return $this;
    }

    public function getSeshthis(): ?SessionHoraireType
    {
        return $this->seshthis;
    }

    public function setSeshthis(?SessionHoraireType $seshthis): self
    {
        $this->seshthis = $seshthis;

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
