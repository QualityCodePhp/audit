<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formulaire
 *
 * @ORM\Table(name="formulaire", uniqueConstraints={@ORM\UniqueConstraint(name="formulaire_pk", columns={"frm_id"})}, indexes={@ORM\Index(name="formulaire_rrif", columns={"frm_reponse"}), @ORM\Index(name="reference_460_fk", columns={"frm_offre"}), @ORM\Index(name="formulaire_fccif", columns={"frm_commande"}), @ORM\Index(name="formulaire_efeif", columns={"frm_entete"})})
 * @ORM\Entity
 */
class Formulaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="frm_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="formulaire_frm_id_seq", allocationSize=1, initialValue=1)
     */
    private $frmId;

    /**
     * @var string
     *
     * @ORM\Column(name="frm_quand", type="string", length=5, nullable=false, options={"comment"="OFFRE"})
     */
    private $frmQuand;

    /**
     * @var string
     *
     * @ORM\Column(name="frm_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $frmEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="frm_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $frmAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="frm_datec", type="datetime", nullable=false)
     */
    private $frmDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="frm_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $frmAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="frm_datem", type="datetime", nullable=true)
     */
    private $frmDatem;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="frm_commande", referencedColumnName="cmd_id")
     * })
     */
    private $frmCommande;

    /**
     * @var \EFormulaire
     *
     * @ORM\ManyToOne(targetEntity="EFormulaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="frm_entete", referencedColumnName="etf_id")
     * })
     */
    private $frmEntete;

    /**
     * @var \Reponse
     *
     * @ORM\ManyToOne(targetEntity="Reponse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="frm_reponse", referencedColumnName="rep_id")
     * })
     */
    private $frmReponse;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="frm_offre", referencedColumnName="off_id")
     * })
     */
    private $frmOffre;

    public function getFrmId(): ?int
    {
        return $this->frmId;
    }

    public function getFrmQuand(): ?string
    {
        return $this->frmQuand;
    }

    public function setFrmQuand(string $frmQuand): self
    {
        $this->frmQuand = $frmQuand;

        return $this;
    }

    public function getFrmEtat(): ?string
    {
        return $this->frmEtat;
    }

    public function setFrmEtat(string $frmEtat): self
    {
        $this->frmEtat = $frmEtat;

        return $this;
    }

    public function getFrmAuteurc(): ?string
    {
        return $this->frmAuteurc;
    }

    public function setFrmAuteurc(string $frmAuteurc): self
    {
        $this->frmAuteurc = $frmAuteurc;

        return $this;
    }

    public function getFrmDatec(): ?\DateTimeInterface
    {
        return $this->frmDatec;
    }

    public function setFrmDatec(\DateTimeInterface $frmDatec): self
    {
        $this->frmDatec = $frmDatec;

        return $this;
    }

    public function getFrmAuteurm(): ?string
    {
        return $this->frmAuteurm;
    }

    public function setFrmAuteurm(?string $frmAuteurm): self
    {
        $this->frmAuteurm = $frmAuteurm;

        return $this;
    }

    public function getFrmDatem(): ?\DateTimeInterface
    {
        return $this->frmDatem;
    }

    public function setFrmDatem(?\DateTimeInterface $frmDatem): self
    {
        $this->frmDatem = $frmDatem;

        return $this;
    }

    public function getFrmCommande(): ?Commande
    {
        return $this->frmCommande;
    }

    public function setFrmCommande(?Commande $frmCommande): self
    {
        $this->frmCommande = $frmCommande;

        return $this;
    }

    public function getFrmEntete(): ?EFormulaire
    {
        return $this->frmEntete;
    }

    public function setFrmEntete(?EFormulaire $frmEntete): self
    {
        $this->frmEntete = $frmEntete;

        return $this;
    }

    public function getFrmReponse(): ?Reponse
    {
        return $this->frmReponse;
    }

    public function setFrmReponse(?Reponse $frmReponse): self
    {
        $this->frmReponse = $frmReponse;

        return $this;
    }

    public function getFrmOffre(): ?Offre
    {
        return $this->frmOffre;
    }

    public function setFrmOffre(?Offre $frmOffre): self
    {
        $this->frmOffre = $frmOffre;

        return $this;
    }


}
