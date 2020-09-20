<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement", uniqueConstraints={@ORM\UniqueConstraint(name="evenement_pk", columns={"evt_id"})}, indexes={@ORM\Index(name="evenement_ooif", columns={"evt_offre"}), @ORM\Index(name="evt_a_pour_type_fk", columns={"ref_id_groupe"}), @ORM\Index(name="evenement_ppif", columns={"evt_programme"}), @ORM\Index(name="evenement_ddif", columns={"evt_dispositif"})})
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="evt_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="evenement_evt_id_seq", allocationSize=1, initialValue=1)
     */
    private $evtId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="evt_datec", type="datetime", nullable=false)
     */
    private $evtDatec;

    /**
     * @var string
     *
     * @ORM\Column(name="evt_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $evtAuteurc;

    /**
     * @var string
     *
     * @ORM\Column(name="evt_objet", type="string", length=100, nullable=false)
     */
    private $evtObjet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="evt_comment", type="string", length=4000, nullable=true)
     */
    private $evtComment;

    /**
     * @var string
     *
     * @ORM\Column(name="evt_visiblefo", type="decimal", precision=1, scale=0, nullable=false, options={"comment"="0 = Non visible FO, 1 = Visible FO"})
     */
    private $evtVisiblefo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="evt_typevt", type="string", length=1, nullable=true, options={"comment"="A = Automatique, L = Libre, M = Message"})
     */
    private $evtTypevt;

    /**
     * @var \Dispositif
     *
     * @ORM\ManyToOne(targetEntity="Dispositif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="evt_dispositif", referencedColumnName="dsp_id")
     * })
     */
    private $evtDispositif;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="evt_offre", referencedColumnName="off_id")
     * })
     */
    private $evtOffre;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="evt_programme", referencedColumnName="prg_id")
     * })
     */
    private $evtProgramme;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_groupe", referencedColumnName="ref_id")
     * })
     */
    private $refIdGroupe;

    public function getEvtId(): ?int
    {
        return $this->evtId;
    }

    public function getEvtDatec(): ?\DateTimeInterface
    {
        return $this->evtDatec;
    }

    public function setEvtDatec(\DateTimeInterface $evtDatec): self
    {
        $this->evtDatec = $evtDatec;

        return $this;
    }

    public function getEvtAuteurc(): ?string
    {
        return $this->evtAuteurc;
    }

    public function setEvtAuteurc(string $evtAuteurc): self
    {
        $this->evtAuteurc = $evtAuteurc;

        return $this;
    }

    public function getEvtObjet(): ?string
    {
        return $this->evtObjet;
    }

    public function setEvtObjet(string $evtObjet): self
    {
        $this->evtObjet = $evtObjet;

        return $this;
    }

    public function getEvtComment(): ?string
    {
        return $this->evtComment;
    }

    public function setEvtComment(?string $evtComment): self
    {
        $this->evtComment = $evtComment;

        return $this;
    }

    public function getEvtVisiblefo(): ?string
    {
        return $this->evtVisiblefo;
    }

    public function setEvtVisiblefo(string $evtVisiblefo): self
    {
        $this->evtVisiblefo = $evtVisiblefo;

        return $this;
    }

    public function getEvtTypevt(): ?string
    {
        return $this->evtTypevt;
    }

    public function setEvtTypevt(?string $evtTypevt): self
    {
        $this->evtTypevt = $evtTypevt;

        return $this;
    }

    public function getEvtDispositif(): ?Dispositif
    {
        return $this->evtDispositif;
    }

    public function setEvtDispositif(?Dispositif $evtDispositif): self
    {
        $this->evtDispositif = $evtDispositif;

        return $this;
    }

    public function getEvtOffre(): ?Offre
    {
        return $this->evtOffre;
    }

    public function setEvtOffre(?Offre $evtOffre): self
    {
        $this->evtOffre = $evtOffre;

        return $this;
    }

    public function getEvtProgramme(): ?Programme
    {
        return $this->evtProgramme;
    }

    public function setEvtProgramme(?Programme $evtProgramme): self
    {
        $this->evtProgramme = $evtProgramme;

        return $this;
    }

    public function getRefIdGroupe(): ?Referentiel
    {
        return $this->refIdGroupe;
    }

    public function setRefIdGroupe(?Referentiel $refIdGroupe): self
    {
        $this->refIdGroupe = $refIdGroupe;

        return $this;
    }


}
