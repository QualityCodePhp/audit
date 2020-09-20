<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitepProg
 *
 * @ORM\Table(name="unitep_prog", uniqueConstraints={@ORM\UniqueConstraint(name="unitep_prog_pk", columns={"upg_id"})}, indexes={@ORM\Index(name="unitep_prog_ppif", columns={"upg_programme"}), @ORM\Index(name="unitep_prog_upuif", columns={"upg_unitep"})})
 * @ORM\Entity
 */
class UnitepProg
{
    /**
     * @var string
     *
     * @ORM\Column(name="upg_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="unitep_prog_upg_id_seq", allocationSize=1, initialValue=1)
     */
    private $upgId;

    /**
     * @var string
     *
     * @ORM\Column(name="upg_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $upgEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="upg_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $upgAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="upg_datec", type="datetime", nullable=false)
     */
    private $upgDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="upg_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $upgAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="upg_datem", type="datetime", nullable=true)
     */
    private $upgDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="upg_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $upgAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="upg_datea", type="datetime", nullable=true)
     */
    private $upgDatea;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="upg_programme", referencedColumnName="prg_id")
     * })
     */
    private $upgProgramme;

    /**
     * @var \UnitePrest
     *
     * @ORM\ManyToOne(targetEntity="UnitePrest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="upg_unitep", referencedColumnName="unp_id")
     * })
     */
    private $upgUnitep;

    public function getUpgId(): ?string
    {
        return $this->upgId;
    }

    public function getUpgEtat(): ?string
    {
        return $this->upgEtat;
    }

    public function setUpgEtat(string $upgEtat): self
    {
        $this->upgEtat = $upgEtat;

        return $this;
    }

    public function getUpgAuteurc(): ?string
    {
        return $this->upgAuteurc;
    }

    public function setUpgAuteurc(string $upgAuteurc): self
    {
        $this->upgAuteurc = $upgAuteurc;

        return $this;
    }

    public function getUpgDatec(): ?\DateTimeInterface
    {
        return $this->upgDatec;
    }

    public function setUpgDatec(\DateTimeInterface $upgDatec): self
    {
        $this->upgDatec = $upgDatec;

        return $this;
    }

    public function getUpgAuteurm(): ?string
    {
        return $this->upgAuteurm;
    }

    public function setUpgAuteurm(?string $upgAuteurm): self
    {
        $this->upgAuteurm = $upgAuteurm;

        return $this;
    }

    public function getUpgDatem(): ?\DateTimeInterface
    {
        return $this->upgDatem;
    }

    public function setUpgDatem(?\DateTimeInterface $upgDatem): self
    {
        $this->upgDatem = $upgDatem;

        return $this;
    }

    public function getUpgAuteura(): ?string
    {
        return $this->upgAuteura;
    }

    public function setUpgAuteura(?string $upgAuteura): self
    {
        $this->upgAuteura = $upgAuteura;

        return $this;
    }

    public function getUpgDatea(): ?\DateTimeInterface
    {
        return $this->upgDatea;
    }

    public function setUpgDatea(?\DateTimeInterface $upgDatea): self
    {
        $this->upgDatea = $upgDatea;

        return $this;
    }

    public function getUpgProgramme(): ?Programme
    {
        return $this->upgProgramme;
    }

    public function setUpgProgramme(?Programme $upgProgramme): self
    {
        $this->upgProgramme = $upgProgramme;

        return $this;
    }

    public function getUpgUnitep(): ?UnitePrest
    {
        return $this->upgUnitep;
    }

    public function setUpgUnitep(?UnitePrest $upgUnitep): self
    {
        $this->upgUnitep = $upgUnitep;

        return $this;
    }


}
