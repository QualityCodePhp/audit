<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VOptiond
 *
 * @ORM\Table(name="v_optiond", uniqueConstraints={@ORM\UniqueConstraint(name="v_optiond_pk", columns={"vcl_id"})}, indexes={@ORM\Index(name="v_optiond_ccif", columns={"vcl_commande"}), @ORM\Index(name="reference_462_fk", columns={"vcl_offre"}), @ORM\Index(name="v_optiond_ooif", columns={"off_ofr_id"}), @ORM\Index(name="v_optiond_odoif", columns={"vcl_optiond"}), @ORM\Index(name="v_optiond_mpmif", columns={"vcl_modafprog"}), @ORM\Index(name="v_optiond_ssif", columns={"vcl_stagiaire"})})
 * @ORM\Entity
 */
class VOptiond
{
    /**
     * @var string
     *
     * @ORM\Column(name="vcl_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="v_optiond_vcl_id_seq", allocationSize=1, initialValue=1)
     */
    private $vclId;

    /**
     * @var string
     *
     * @ORM\Column(name="vcl_quand", type="string", length=5, nullable=false, options={"comment"="MPROG, CONST, OFFRE"})
     */
    private $vclQuand;

    /**
     * @var string
     *
     * @ORM\Column(name="vcl_format", type="string", length=2, nullable=false, options={"comment"="1=Texte, 2=NumÃ©rique"})
     */
    private $vclFormat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vcl_text", type="string", length=3000, nullable=true)
     */
    private $vclText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vcl_num", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $vclNum;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vcl_offre", referencedColumnName="off_id")
     * })
     */
    private $vclOffre;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vcl_commande", referencedColumnName="cmd_id")
     * })
     */
    private $vclCommande;

    /**
     * @var \ModafProg
     *
     * @ORM\ManyToOne(targetEntity="ModafProg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vcl_modafprog", referencedColumnName="mop_id")
     * })
     */
    private $vclModafprog;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_ofr_id", referencedColumnName="off_id")
     * })
     */
    private $offOfr;

    /**
     * @var \OptionDispo
     *
     * @ORM\ManyToOne(targetEntity="OptionDispo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vcl_optiond", referencedColumnName="opd_id")
     * })
     */
    private $vclOptiond;

    /**
     * @var \Stagiaire
     *
     * @ORM\ManyToOne(targetEntity="Stagiaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vcl_stagiaire", referencedColumnName="stg_id")
     * })
     */
    private $vclStagiaire;

    public function getVclId(): ?string
    {
        return $this->vclId;
    }

    public function getVclQuand(): ?string
    {
        return $this->vclQuand;
    }

    public function setVclQuand(string $vclQuand): self
    {
        $this->vclQuand = $vclQuand;

        return $this;
    }

    public function getVclFormat(): ?string
    {
        return $this->vclFormat;
    }

    public function setVclFormat(string $vclFormat): self
    {
        $this->vclFormat = $vclFormat;

        return $this;
    }

    public function getVclText(): ?string
    {
        return $this->vclText;
    }

    public function setVclText(?string $vclText): self
    {
        $this->vclText = $vclText;

        return $this;
    }

    public function getVclNum(): ?string
    {
        return $this->vclNum;
    }

    public function setVclNum(?string $vclNum): self
    {
        $this->vclNum = $vclNum;

        return $this;
    }

    public function getVclOffre(): ?Offre
    {
        return $this->vclOffre;
    }

    public function setVclOffre(?Offre $vclOffre): self
    {
        $this->vclOffre = $vclOffre;

        return $this;
    }

    public function getVclCommande(): ?Commande
    {
        return $this->vclCommande;
    }

    public function setVclCommande(?Commande $vclCommande): self
    {
        $this->vclCommande = $vclCommande;

        return $this;
    }

    public function getVclModafprog(): ?ModafProg
    {
        return $this->vclModafprog;
    }

    public function setVclModafprog(?ModafProg $vclModafprog): self
    {
        $this->vclModafprog = $vclModafprog;

        return $this;
    }

    public function getOffOfr(): ?Offre
    {
        return $this->offOfr;
    }

    public function setOffOfr(?Offre $offOfr): self
    {
        $this->offOfr = $offOfr;

        return $this;
    }

    public function getVclOptiond(): ?OptionDispo
    {
        return $this->vclOptiond;
    }

    public function setVclOptiond(?OptionDispo $vclOptiond): self
    {
        $this->vclOptiond = $vclOptiond;

        return $this;
    }

    public function getVclStagiaire(): ?Stagiaire
    {
        return $this->vclStagiaire;
    }

    public function setVclStagiaire(?Stagiaire $vclStagiaire): self
    {
        $this->vclStagiaire = $vclStagiaire;

        return $this;
    }


}
