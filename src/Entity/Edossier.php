<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Edossier
 *
 * @ORM\Table(name="edossier", uniqueConstraints={@ORM\UniqueConstraint(name="edossier_pk", columns={"edo_id"})}, indexes={@ORM\Index(name="edossier_tmtif", columns={"edo_typecour"}), @ORM\Index(name="edossier_ppif", columns={"edo_programme"}), @ORM\Index(name="edossier_ddif", columns={"edo_dispositif"}), @ORM\Index(name="edossier_ooif", columns={"edo_offre"}), @ORM\Index(name="edossier_odmif", columns={"edo_modelecour"}), @ORM\Index(name="edossier_ccif", columns={"edo_commande"})})
 * @ORM\Entity
 */
class Edossier
{
    /**
     * @var string
     *
     * @ORM\Column(name="edo_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="edossier_edo_id_seq", allocationSize=1, initialValue=1)
     */
    private $edoId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="edo_auteurc", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $edoAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="edo_datec", type="datetime", nullable=false)
     */
    private $edoDatec;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="edo_datee", type="datetime", nullable=true)
     */
    private $edoDatee;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="edo_commande", referencedColumnName="cmd_id")
     * })
     */
    private $edoCommande;

    /**
     * @var \Dispositif
     *
     * @ORM\ManyToOne(targetEntity="Dispositif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="edo_dispositif", referencedColumnName="dsp_id")
     * })
     */
    private $edoDispositif;

    /**
     * @var \CourDispo
     *
     * @ORM\ManyToOne(targetEntity="CourDispo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="edo_modelecour", referencedColumnName="mcd_id")
     * })
     */
    private $edoModelecour;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="edo_offre", referencedColumnName="off_id")
     * })
     */
    private $edoOffre;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="edo_programme", referencedColumnName="prg_id")
     * })
     */
    private $edoProgramme;

    /**
     * @var \TModelecour
     *
     * @ORM\ManyToOne(targetEntity="TModelecour")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="edo_typecour", referencedColumnName="tmc_id")
     * })
     */
    private $edoTypecour;

    public function getEdoId(): ?string
    {
        return $this->edoId;
    }

    public function getEdoAuteurc(): ?string
    {
        return $this->edoAuteurc;
    }

    public function setEdoAuteurc(?string $edoAuteurc): self
    {
        $this->edoAuteurc = $edoAuteurc;

        return $this;
    }

    public function getEdoDatec(): ?\DateTimeInterface
    {
        return $this->edoDatec;
    }

    public function setEdoDatec(\DateTimeInterface $edoDatec): self
    {
        $this->edoDatec = $edoDatec;

        return $this;
    }

    public function getEdoDatee(): ?\DateTimeInterface
    {
        return $this->edoDatee;
    }

    public function setEdoDatee(?\DateTimeInterface $edoDatee): self
    {
        $this->edoDatee = $edoDatee;

        return $this;
    }

    public function getEdoCommande(): ?Commande
    {
        return $this->edoCommande;
    }

    public function setEdoCommande(?Commande $edoCommande): self
    {
        $this->edoCommande = $edoCommande;

        return $this;
    }

    public function getEdoDispositif(): ?Dispositif
    {
        return $this->edoDispositif;
    }

    public function setEdoDispositif(?Dispositif $edoDispositif): self
    {
        $this->edoDispositif = $edoDispositif;

        return $this;
    }

    public function getEdoModelecour(): ?CourDispo
    {
        return $this->edoModelecour;
    }

    public function setEdoModelecour(?CourDispo $edoModelecour): self
    {
        $this->edoModelecour = $edoModelecour;

        return $this;
    }

    public function getEdoOffre(): ?Offre
    {
        return $this->edoOffre;
    }

    public function setEdoOffre(?Offre $edoOffre): self
    {
        $this->edoOffre = $edoOffre;

        return $this;
    }

    public function getEdoProgramme(): ?Programme
    {
        return $this->edoProgramme;
    }

    public function setEdoProgramme(?Programme $edoProgramme): self
    {
        $this->edoProgramme = $edoProgramme;

        return $this;
    }

    public function getEdoTypecour(): ?TModelecour
    {
        return $this->edoTypecour;
    }

    public function setEdoTypecour(?TModelecour $edoTypecour): self
    {
        $this->edoTypecour = $edoTypecour;

        return $this;
    }


}
