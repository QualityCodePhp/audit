<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EvenProg
 *
 * @ORM\Table(name="even_prog", uniqueConstraints={@ORM\UniqueConstraint(name="even_prog_pk", columns={"evp_id"})}, indexes={@ORM\Index(name="even_prog_ppif", columns={"evp_programme"}), @ORM\Index(name="even_prog_ddif", columns={"evp_dispositif"})})
 * @ORM\Entity
 */
class EvenProg
{
    /**
     * @var string
     *
     * @ORM\Column(name="evp_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="even_prog_evp_id_seq", allocationSize=1, initialValue=1)
     */
    private $evpId;

    /**
     * @var string
     *
     * @ORM\Column(name="evp_objet", type="string", length=30, nullable=false)
     */
    private $evpObjet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="evp_comment", type="string", length=300, nullable=true)
     */
    private $evpComment;

    /**
     * @var string
     *
     * @ORM\Column(name="evp_type", type="string", length=1, nullable=false, options={"comment"="A = Automatique, L = Libre, M = Message"})
     */
    private $evpType;

    /**
     * @var string
     *
     * @ORM\Column(name="evp_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $evpAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="evp_datec", type="datetime", nullable=false)
     */
    private $evpDatec;

    /**
     * @var \Dispositif
     *
     * @ORM\ManyToOne(targetEntity="Dispositif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="evp_dispositif", referencedColumnName="dsp_id")
     * })
     */
    private $evpDispositif;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="evp_programme", referencedColumnName="prg_id")
     * })
     */
    private $evpProgramme;

    public function getEvpId(): ?string
    {
        return $this->evpId;
    }

    public function getEvpObjet(): ?string
    {
        return $this->evpObjet;
    }

    public function setEvpObjet(string $evpObjet): self
    {
        $this->evpObjet = $evpObjet;

        return $this;
    }

    public function getEvpComment(): ?string
    {
        return $this->evpComment;
    }

    public function setEvpComment(?string $evpComment): self
    {
        $this->evpComment = $evpComment;

        return $this;
    }

    public function getEvpType(): ?string
    {
        return $this->evpType;
    }

    public function setEvpType(string $evpType): self
    {
        $this->evpType = $evpType;

        return $this;
    }

    public function getEvpAuteurc(): ?string
    {
        return $this->evpAuteurc;
    }

    public function setEvpAuteurc(string $evpAuteurc): self
    {
        $this->evpAuteurc = $evpAuteurc;

        return $this;
    }

    public function getEvpDatec(): ?\DateTimeInterface
    {
        return $this->evpDatec;
    }

    public function setEvpDatec(\DateTimeInterface $evpDatec): self
    {
        $this->evpDatec = $evpDatec;

        return $this;
    }

    public function getEvpDispositif(): ?Dispositif
    {
        return $this->evpDispositif;
    }

    public function setEvpDispositif(?Dispositif $evpDispositif): self
    {
        $this->evpDispositif = $evpDispositif;

        return $this;
    }

    public function getEvpProgramme(): ?Programme
    {
        return $this->evpProgramme;
    }

    public function setEvpProgramme(?Programme $evpProgramme): self
    {
        $this->evpProgramme = $evpProgramme;

        return $this;
    }


}
