<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OfAnnee
 *
 * @ORM\Table(name="of_annee", uniqueConstraints={@ORM\UniqueConstraint(name="of_annee_pk", columns={"ofa_id"})}, indexes={@ORM\Index(name="of_annee_ccif", columns={"ofa_commande"}), @ORM\Index(name="of_annee_ppif", columns={"ofa_programme"}), @ORM\Index(name="of_annee_ooif", columns={"ofa_offre"}), @ORM\Index(name="of_annee_rrif", columns={"ofa_reponse"})})
 * @ORM\Entity
 */
class OfAnnee
{
    /**
     * @var string
     *
     * @ORM\Column(name="ofa_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="of_annee_ofa_id_seq", allocationSize=1, initialValue=1)
     */
    private $ofaId;

    /**
     * @var string
     *
     * @ORM\Column(name="ofa_annee", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $ofaAnnee;

    /**
     * @var string
     *
     * @ORM\Column(name="ofa_hannuel", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $ofaHannuel;

    /**
     * @var string
     *
     * @ORM\Column(name="ofa_mntestime", type="decimal", precision=14, scale=2, nullable=false)
     */
    private $ofaMntestime;

    /**
     * @var string
     *
     * @ORM\Column(name="ofa_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $ofaAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ofa_datec", type="datetime", nullable=false)
     */
    private $ofaDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofa_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $ofaAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ofa_datem", type="datetime", nullable=true)
     */
    private $ofaDatem;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ofa_commande", referencedColumnName="cmd_id")
     * })
     */
    private $ofaCommande;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ofa_offre", referencedColumnName="off_id")
     * })
     */
    private $ofaOffre;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ofa_programme", referencedColumnName="prg_id")
     * })
     */
    private $ofaProgramme;

    /**
     * @var \Reponse
     *
     * @ORM\ManyToOne(targetEntity="Reponse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ofa_reponse", referencedColumnName="rep_id")
     * })
     */
    private $ofaReponse;

    public function getOfaId(): ?string
    {
        return $this->ofaId;
    }

    public function getOfaAnnee(): ?string
    {
        return $this->ofaAnnee;
    }

    public function setOfaAnnee(string $ofaAnnee): self
    {
        $this->ofaAnnee = $ofaAnnee;

        return $this;
    }

    public function getOfaHannuel(): ?string
    {
        return $this->ofaHannuel;
    }

    public function setOfaHannuel(string $ofaHannuel): self
    {
        $this->ofaHannuel = $ofaHannuel;

        return $this;
    }

    public function getOfaMntestime(): ?string
    {
        return $this->ofaMntestime;
    }

    public function setOfaMntestime(string $ofaMntestime): self
    {
        $this->ofaMntestime = $ofaMntestime;

        return $this;
    }

    public function getOfaAuteurc(): ?string
    {
        return $this->ofaAuteurc;
    }

    public function setOfaAuteurc(string $ofaAuteurc): self
    {
        $this->ofaAuteurc = $ofaAuteurc;

        return $this;
    }

    public function getOfaDatec(): ?\DateTimeInterface
    {
        return $this->ofaDatec;
    }

    public function setOfaDatec(\DateTimeInterface $ofaDatec): self
    {
        $this->ofaDatec = $ofaDatec;

        return $this;
    }

    public function getOfaAuteurm(): ?string
    {
        return $this->ofaAuteurm;
    }

    public function setOfaAuteurm(?string $ofaAuteurm): self
    {
        $this->ofaAuteurm = $ofaAuteurm;

        return $this;
    }

    public function getOfaDatem(): ?\DateTimeInterface
    {
        return $this->ofaDatem;
    }

    public function setOfaDatem(?\DateTimeInterface $ofaDatem): self
    {
        $this->ofaDatem = $ofaDatem;

        return $this;
    }

    public function getOfaCommande(): ?Commande
    {
        return $this->ofaCommande;
    }

    public function setOfaCommande(?Commande $ofaCommande): self
    {
        $this->ofaCommande = $ofaCommande;

        return $this;
    }

    public function getOfaOffre(): ?Offre
    {
        return $this->ofaOffre;
    }

    public function setOfaOffre(?Offre $ofaOffre): self
    {
        $this->ofaOffre = $ofaOffre;

        return $this;
    }

    public function getOfaProgramme(): ?Programme
    {
        return $this->ofaProgramme;
    }

    public function setOfaProgramme(?Programme $ofaProgramme): self
    {
        $this->ofaProgramme = $ofaProgramme;

        return $this;
    }

    public function getOfaReponse(): ?Reponse
    {
        return $this->ofaReponse;
    }

    public function setOfaReponse(?Reponse $ofaReponse): self
    {
        $this->ofaReponse = $ofaReponse;

        return $this;
    }


}
