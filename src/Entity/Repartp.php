<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Repartp
 *
 * @ORM\Table(name="repartp", uniqueConstraints={@ORM\UniqueConstraint(name="repartp_pk", columns={"rpp_id"})}, indexes={@ORM\Index(name="repartp_mmif", columns={"rpp_mesure"}), @ORM\Index(name="repartp_ppif2", columns={"rpp_public"}), @ORM\Index(name="repartp_ppif", columns={"rpp_programme"})})
 * @ORM\Entity
 */
class Repartp
{
    /**
     * @var string
     *
     * @ORM\Column(name="rpp_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="repartp_rpp_id_seq", allocationSize=1, initialValue=1)
     */
    private $rppId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rpp_pourcentage", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $rppPourcentage;

    /**
     * @var \Mesure
     *
     * @ORM\ManyToOne(targetEntity="Mesure")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rpp_mesure", referencedColumnName="mes_id")
     * })
     */
    private $rppMesure;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rpp_programme", referencedColumnName="prg_id")
     * })
     */
    private $rppProgramme;

    /**
     * @var \Publics
     *
     * @ORM\ManyToOne(targetEntity="Publics")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rpp_public", referencedColumnName="pub_id")
     * })
     */
    private $rppPublic;

    public function getRppId(): ?string
    {
        return $this->rppId;
    }

    public function getRppPourcentage(): ?string
    {
        return $this->rppPourcentage;
    }

    public function setRppPourcentage(?string $rppPourcentage): self
    {
        $this->rppPourcentage = $rppPourcentage;

        return $this;
    }

    public function getRppMesure(): ?Mesure
    {
        return $this->rppMesure;
    }

    public function setRppMesure(?Mesure $rppMesure): self
    {
        $this->rppMesure = $rppMesure;

        return $this;
    }

    public function getRppProgramme(): ?Programme
    {
        return $this->rppProgramme;
    }

    public function setRppProgramme(?Programme $rppProgramme): self
    {
        $this->rppProgramme = $rppProgramme;

        return $this;
    }

    public function getRppPublic(): ?Publics
    {
        return $this->rppPublic;
    }

    public function setRppPublic(?Publics $rppPublic): self
    {
        $this->rppPublic = $rppPublic;

        return $this;
    }


}
