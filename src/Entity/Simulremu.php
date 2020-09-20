<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Simulremu
 *
 * @ORM\Table(name="simulremu", uniqueConstraints={@ORM\UniqueConstraint(name="simulremu_pk", columns={"srm_id"})}, indexes={@ORM\Index(name="simulremu_ccif", columns={"srm_commande"}), @ORM\Index(name="simulremu_mmif", columns={"srm_mesure"}), @ORM\Index(name="simulremu_ppif", columns={"srm_programme"})})
 * @ORM\Entity
 */
class Simulremu
{
    /**
     * @var string
     *
     * @ORM\Column(name="srm_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="simulremu_srm_id_seq", allocationSize=1, initialValue=1)
     */
    private $srmId;

    /**
     * @var string
     *
     * @ORM\Column(name="srm_total", type="string", length=1, nullable=false, options={"comment"="P : total Programme / M : total Mesure / A : total AF"})
     */
    private $srmTotal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="srm_remu", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $srmRemu;

    /**
     * @var string
     *
     * @ORM\Column(name="srm_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $srmEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="srm_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $srmAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="srm_datec", type="datetime", nullable=false)
     */
    private $srmDatec;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="srm_datee", type="datetime", nullable=false)
     */
    private $srmDatee;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="srm_commande", referencedColumnName="cmd_id")
     * })
     */
    private $srmCommande;

    /**
     * @var \Mesure
     *
     * @ORM\ManyToOne(targetEntity="Mesure")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="srm_mesure", referencedColumnName="mes_id")
     * })
     */
    private $srmMesure;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="srm_programme", referencedColumnName="prg_id")
     * })
     */
    private $srmProgramme;

    public function getSrmId(): ?string
    {
        return $this->srmId;
    }

    public function getSrmTotal(): ?string
    {
        return $this->srmTotal;
    }

    public function setSrmTotal(string $srmTotal): self
    {
        $this->srmTotal = $srmTotal;

        return $this;
    }

    public function getSrmRemu(): ?string
    {
        return $this->srmRemu;
    }

    public function setSrmRemu(?string $srmRemu): self
    {
        $this->srmRemu = $srmRemu;

        return $this;
    }

    public function getSrmEtat(): ?string
    {
        return $this->srmEtat;
    }

    public function setSrmEtat(string $srmEtat): self
    {
        $this->srmEtat = $srmEtat;

        return $this;
    }

    public function getSrmAuteurc(): ?string
    {
        return $this->srmAuteurc;
    }

    public function setSrmAuteurc(string $srmAuteurc): self
    {
        $this->srmAuteurc = $srmAuteurc;

        return $this;
    }

    public function getSrmDatec(): ?\DateTimeInterface
    {
        return $this->srmDatec;
    }

    public function setSrmDatec(\DateTimeInterface $srmDatec): self
    {
        $this->srmDatec = $srmDatec;

        return $this;
    }

    public function getSrmDatee(): ?\DateTimeInterface
    {
        return $this->srmDatee;
    }

    public function setSrmDatee(\DateTimeInterface $srmDatee): self
    {
        $this->srmDatee = $srmDatee;

        return $this;
    }

    public function getSrmCommande(): ?Commande
    {
        return $this->srmCommande;
    }

    public function setSrmCommande(?Commande $srmCommande): self
    {
        $this->srmCommande = $srmCommande;

        return $this;
    }

    public function getSrmMesure(): ?Mesure
    {
        return $this->srmMesure;
    }

    public function setSrmMesure(?Mesure $srmMesure): self
    {
        $this->srmMesure = $srmMesure;

        return $this;
    }

    public function getSrmProgramme(): ?Programme
    {
        return $this->srmProgramme;
    }

    public function setSrmProgramme(?Programme $srmProgramme): self
    {
        $this->srmProgramme = $srmProgramme;

        return $this;
    }


}
