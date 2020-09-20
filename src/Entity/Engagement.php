<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Engagement
 *
 * @ORM\Table(name="engagement", uniqueConstraints={@ORM\UniqueConstraint(name="engagement_pk", columns={"egg_id"})}, indexes={@ORM\Index(name="engagement_coif", columns={"egg_opercper"}), @ORM\Index(name="engagement_cpcif2", columns={"egg_phasecper"}), @ORM\Index(name="engagement_cpcif", columns={"egg_phasehcper"}), @ORM\Index(name="engagement_cocif", columns={"egg_operhcper"}), @ORM\Index(name="engagement_prpif", columns={"egg_periode"}), @ORM\Index(name="engagement_rrif", columns={"egg_reponse"})})
 * @ORM\Entity
 */
class Engagement
{
    /**
     * @var string
     *
     * @ORM\Column(name="egg_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="engagement_egg_id_seq", allocationSize=1, initialValue=1)
     */
    private $eggId;

    /**
     * @var string
     *
     * @ORM\Column(name="egg_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $eggEtat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="egg_ref", type="string", length=4, nullable=true)
     */
    private $eggRef;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="egg_dateengagt", type="datetime", nullable=true)
     */
    private $eggDateengagt;

    /**
     * @var string
     *
     * @ORM\Column(name="egg_mntengage", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $eggMntengage;

    /**
     * @var string
     *
     * @ORM\Column(name="egg_nbengage", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $eggNbengage;

    /**
     * @var string
     *
     * @ORM\Column(name="egg_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $eggAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="egg_datec", type="datetime", nullable=false)
     */
    private $eggDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="egg_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eggAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="egg_datem", type="datetime", nullable=true)
     */
    private $eggDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="egg_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eggAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="egg_datea", type="datetime", nullable=true)
     */
    private $eggDatea;

    /**
     * @var \CperOpera
     *
     * @ORM\ManyToOne(targetEntity="CperOpera")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="egg_operhcper", referencedColumnName="cop_id")
     * })
     */
    private $eggOperhcper;

    /**
     * @var \CperOpera
     *
     * @ORM\ManyToOne(targetEntity="CperOpera")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="egg_opercper", referencedColumnName="cop_id")
     * })
     */
    private $eggOpercper;

    /**
     * @var \CperPhase
     *
     * @ORM\ManyToOne(targetEntity="CperPhase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="egg_phasehcper", referencedColumnName="cph_id")
     * })
     */
    private $eggPhasehcper;

    /**
     * @var \CperPhase
     *
     * @ORM\ManyToOne(targetEntity="CperPhase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="egg_phasecper", referencedColumnName="cph_id")
     * })
     */
    private $eggPhasecper;

    /**
     * @var \PerReponse
     *
     * @ORM\ManyToOne(targetEntity="PerReponse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="egg_periode", referencedColumnName="prp_id")
     * })
     */
    private $eggPeriode;

    /**
     * @var \Reponse
     *
     * @ORM\ManyToOne(targetEntity="Reponse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="egg_reponse", referencedColumnName="rep_id")
     * })
     */
    private $eggReponse;

    public function getEggId(): ?string
    {
        return $this->eggId;
    }

    public function getEggEtat(): ?string
    {
        return $this->eggEtat;
    }

    public function setEggEtat(string $eggEtat): self
    {
        $this->eggEtat = $eggEtat;

        return $this;
    }

    public function getEggRef(): ?string
    {
        return $this->eggRef;
    }

    public function setEggRef(?string $eggRef): self
    {
        $this->eggRef = $eggRef;

        return $this;
    }

    public function getEggDateengagt(): ?\DateTimeInterface
    {
        return $this->eggDateengagt;
    }

    public function setEggDateengagt(?\DateTimeInterface $eggDateengagt): self
    {
        $this->eggDateengagt = $eggDateengagt;

        return $this;
    }

    public function getEggMntengage(): ?string
    {
        return $this->eggMntengage;
    }

    public function setEggMntengage(string $eggMntengage): self
    {
        $this->eggMntengage = $eggMntengage;

        return $this;
    }

    public function getEggNbengage(): ?string
    {
        return $this->eggNbengage;
    }

    public function setEggNbengage(string $eggNbengage): self
    {
        $this->eggNbengage = $eggNbengage;

        return $this;
    }

    public function getEggAuteurc(): ?string
    {
        return $this->eggAuteurc;
    }

    public function setEggAuteurc(string $eggAuteurc): self
    {
        $this->eggAuteurc = $eggAuteurc;

        return $this;
    }

    public function getEggDatec(): ?\DateTimeInterface
    {
        return $this->eggDatec;
    }

    public function setEggDatec(\DateTimeInterface $eggDatec): self
    {
        $this->eggDatec = $eggDatec;

        return $this;
    }

    public function getEggAuteurm(): ?string
    {
        return $this->eggAuteurm;
    }

    public function setEggAuteurm(?string $eggAuteurm): self
    {
        $this->eggAuteurm = $eggAuteurm;

        return $this;
    }

    public function getEggDatem(): ?\DateTimeInterface
    {
        return $this->eggDatem;
    }

    public function setEggDatem(?\DateTimeInterface $eggDatem): self
    {
        $this->eggDatem = $eggDatem;

        return $this;
    }

    public function getEggAuteura(): ?string
    {
        return $this->eggAuteura;
    }

    public function setEggAuteura(?string $eggAuteura): self
    {
        $this->eggAuteura = $eggAuteura;

        return $this;
    }

    public function getEggDatea(): ?\DateTimeInterface
    {
        return $this->eggDatea;
    }

    public function setEggDatea(?\DateTimeInterface $eggDatea): self
    {
        $this->eggDatea = $eggDatea;

        return $this;
    }

    public function getEggOperhcper(): ?CperOpera
    {
        return $this->eggOperhcper;
    }

    public function setEggOperhcper(?CperOpera $eggOperhcper): self
    {
        $this->eggOperhcper = $eggOperhcper;

        return $this;
    }

    public function getEggOpercper(): ?CperOpera
    {
        return $this->eggOpercper;
    }

    public function setEggOpercper(?CperOpera $eggOpercper): self
    {
        $this->eggOpercper = $eggOpercper;

        return $this;
    }

    public function getEggPhasehcper(): ?CperPhase
    {
        return $this->eggPhasehcper;
    }

    public function setEggPhasehcper(?CperPhase $eggPhasehcper): self
    {
        $this->eggPhasehcper = $eggPhasehcper;

        return $this;
    }

    public function getEggPhasecper(): ?CperPhase
    {
        return $this->eggPhasecper;
    }

    public function setEggPhasecper(?CperPhase $eggPhasecper): self
    {
        $this->eggPhasecper = $eggPhasecper;

        return $this;
    }

    public function getEggPeriode(): ?PerReponse
    {
        return $this->eggPeriode;
    }

    public function setEggPeriode(?PerReponse $eggPeriode): self
    {
        $this->eggPeriode = $eggPeriode;

        return $this;
    }

    public function getEggReponse(): ?Reponse
    {
        return $this->eggReponse;
    }

    public function setEggReponse(?Reponse $eggReponse): self
    {
        $this->eggReponse = $eggReponse;

        return $this;
    }


}
