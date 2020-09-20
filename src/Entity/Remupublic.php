<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Remupublic
 *
 * @ORM\Table(name="remupublic", uniqueConstraints={@ORM\UniqueConstraint(name="remupublic_pk", columns={"rpu_id"})}, indexes={@ORM\Index(name="remupublic_ppif2", columns={"rpu_public"}), @ORM\Index(name="remupublic_ppif", columns={"rpu_programme"})})
 * @ORM\Entity
 */
class Remupublic
{
    /**
     * @var string
     *
     * @ORM\Column(name="rpu_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="remupublic_rpu_id_seq", allocationSize=1, initialValue=1)
     */
    private $rpuId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rpu_tplein", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $rpuTplein;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rpu_tpartiel", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $rpuTpartiel;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rpu_programme", referencedColumnName="prg_id")
     * })
     */
    private $rpuProgramme;

    /**
     * @var \Publics
     *
     * @ORM\ManyToOne(targetEntity="Publics")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rpu_public", referencedColumnName="pub_id")
     * })
     */
    private $rpuPublic;

    public function getRpuId(): ?string
    {
        return $this->rpuId;
    }

    public function getRpuTplein(): ?string
    {
        return $this->rpuTplein;
    }

    public function setRpuTplein(?string $rpuTplein): self
    {
        $this->rpuTplein = $rpuTplein;

        return $this;
    }

    public function getRpuTpartiel(): ?string
    {
        return $this->rpuTpartiel;
    }

    public function setRpuTpartiel(?string $rpuTpartiel): self
    {
        $this->rpuTpartiel = $rpuTpartiel;

        return $this;
    }

    public function getRpuProgramme(): ?Programme
    {
        return $this->rpuProgramme;
    }

    public function setRpuProgramme(?Programme $rpuProgramme): self
    {
        $this->rpuProgramme = $rpuProgramme;

        return $this;
    }

    public function getRpuPublic(): ?Publics
    {
        return $this->rpuPublic;
    }

    public function setRpuPublic(?Publics $rpuPublic): self
    {
        $this->rpuPublic = $rpuPublic;

        return $this;
    }


}
