<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MesDispo
 *
 * @ORM\Table(name="mes_dispo", uniqueConstraints={@ORM\UniqueConstraint(name="mes_dispo_pk", columns={"mdp_id"})}, indexes={@ORM\Index(name="mes_dispo_ddif", columns={"mdp_dispo"}), @ORM\Index(name="mes_dispo_mmif", columns={"mdp_mesure"})})
 * @ORM\Entity
 */
class MesDispo
{
    /**
     * @var int
     *
     * @ORM\Column(name="mdp_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mes_dispo_mdp_id_seq", allocationSize=1, initialValue=1)
     */
    private $mdpId;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $mdpEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $mdpAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mdp_datec", type="datetime", nullable=false)
     */
    private $mdpDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mdp_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $mdpAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="mdp_datem", type="datetime", nullable=true)
     */
    private $mdpDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mdp_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $mdpAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="mdp_datea", type="datetime", nullable=true)
     */
    private $mdpDatea;

    /**
     * @var \Dispositif
     *
     * @ORM\ManyToOne(targetEntity="Dispositif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mdp_dispo", referencedColumnName="dsp_id")
     * })
     */
    private $mdpDispo;

    /**
     * @var \Mesure
     *
     * @ORM\ManyToOne(targetEntity="Mesure")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mdp_mesure", referencedColumnName="mes_id")
     * })
     */
    private $mdpMesure;

    public function getMdpId(): ?int
    {
        return $this->mdpId;
    }

    public function getMdpEtat(): ?string
    {
        return $this->mdpEtat;
    }

    public function setMdpEtat(string $mdpEtat): self
    {
        $this->mdpEtat = $mdpEtat;

        return $this;
    }

    public function getMdpAuteurc(): ?string
    {
        return $this->mdpAuteurc;
    }

    public function setMdpAuteurc(string $mdpAuteurc): self
    {
        $this->mdpAuteurc = $mdpAuteurc;

        return $this;
    }

    public function getMdpDatec(): ?\DateTimeInterface
    {
        return $this->mdpDatec;
    }

    public function setMdpDatec(\DateTimeInterface $mdpDatec): self
    {
        $this->mdpDatec = $mdpDatec;

        return $this;
    }

    public function getMdpAuteurm(): ?string
    {
        return $this->mdpAuteurm;
    }

    public function setMdpAuteurm(?string $mdpAuteurm): self
    {
        $this->mdpAuteurm = $mdpAuteurm;

        return $this;
    }

    public function getMdpDatem(): ?\DateTimeInterface
    {
        return $this->mdpDatem;
    }

    public function setMdpDatem(?\DateTimeInterface $mdpDatem): self
    {
        $this->mdpDatem = $mdpDatem;

        return $this;
    }

    public function getMdpAuteura(): ?string
    {
        return $this->mdpAuteura;
    }

    public function setMdpAuteura(?string $mdpAuteura): self
    {
        $this->mdpAuteura = $mdpAuteura;

        return $this;
    }

    public function getMdpDatea(): ?\DateTimeInterface
    {
        return $this->mdpDatea;
    }

    public function setMdpDatea(?\DateTimeInterface $mdpDatea): self
    {
        $this->mdpDatea = $mdpDatea;

        return $this;
    }

    public function getMdpDispo(): ?Dispositif
    {
        return $this->mdpDispo;
    }

    public function setMdpDispo(?Dispositif $mdpDispo): self
    {
        $this->mdpDispo = $mdpDispo;

        return $this;
    }

    public function getMdpMesure(): ?Mesure
    {
        return $this->mdpMesure;
    }

    public function setMdpMesure(?Mesure $mdpMesure): self
    {
        $this->mdpMesure = $mdpMesure;

        return $this;
    }


}
