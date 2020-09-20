<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deliberation
 *
 * @ORM\Table(name="deliberation", uniqueConstraints={@ORM\UniqueConstraint(name="deliberation_pk", columns={"dlb_id"})}, indexes={@ORM\Index(name="deliberation_ccif", columns={"dlb_commission"}), @ORM\Index(name="deliberation_ppif", columns={"dlb_programme"})})
 * @ORM\Entity
 */
class Deliberation
{
    /**
     * @var string
     *
     * @ORM\Column(name="dlb_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="deliberation_dlb_id_seq", allocationSize=1, initialValue=1)
     */
    private $dlbId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dlb_numero", type="string", length=15, nullable=true)
     */
    private $dlbNumero;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dlb_dateedg", type="datetime", nullable=true)
     */
    private $dlbDateedg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dlb_datec", type="datetime", nullable=false)
     */
    private $dlbDatec;

    /**
     * @var string
     *
     * @ORM\Column(name="dlb_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $dlbAuteurc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dlb_datem", type="datetime", nullable=true)
     */
    private $dlbDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dlb_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $dlbAuteurm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dlb_libelle", type="string", length=80, nullable=true)
     */
    private $dlbLibelle;

    /**
     * @var \Commission
     *
     * @ORM\ManyToOne(targetEntity="Commission")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dlb_commission", referencedColumnName="com_id")
     * })
     */
    private $dlbCommission;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dlb_programme", referencedColumnName="prg_id")
     * })
     */
    private $dlbProgramme;

    public function getDlbId(): ?string
    {
        return $this->dlbId;
    }

    public function getDlbNumero(): ?string
    {
        return $this->dlbNumero;
    }

    public function setDlbNumero(?string $dlbNumero): self
    {
        $this->dlbNumero = $dlbNumero;

        return $this;
    }

    public function getDlbDateedg(): ?\DateTimeInterface
    {
        return $this->dlbDateedg;
    }

    public function setDlbDateedg(?\DateTimeInterface $dlbDateedg): self
    {
        $this->dlbDateedg = $dlbDateedg;

        return $this;
    }

    public function getDlbDatec(): ?\DateTimeInterface
    {
        return $this->dlbDatec;
    }

    public function setDlbDatec(\DateTimeInterface $dlbDatec): self
    {
        $this->dlbDatec = $dlbDatec;

        return $this;
    }

    public function getDlbAuteurc(): ?string
    {
        return $this->dlbAuteurc;
    }

    public function setDlbAuteurc(string $dlbAuteurc): self
    {
        $this->dlbAuteurc = $dlbAuteurc;

        return $this;
    }

    public function getDlbDatem(): ?\DateTimeInterface
    {
        return $this->dlbDatem;
    }

    public function setDlbDatem(?\DateTimeInterface $dlbDatem): self
    {
        $this->dlbDatem = $dlbDatem;

        return $this;
    }

    public function getDlbAuteurm(): ?string
    {
        return $this->dlbAuteurm;
    }

    public function setDlbAuteurm(?string $dlbAuteurm): self
    {
        $this->dlbAuteurm = $dlbAuteurm;

        return $this;
    }

    public function getDlbLibelle(): ?string
    {
        return $this->dlbLibelle;
    }

    public function setDlbLibelle(?string $dlbLibelle): self
    {
        $this->dlbLibelle = $dlbLibelle;

        return $this;
    }

    public function getDlbCommission(): ?Commission
    {
        return $this->dlbCommission;
    }

    public function setDlbCommission(?Commission $dlbCommission): self
    {
        $this->dlbCommission = $dlbCommission;

        return $this;
    }

    public function getDlbProgramme(): ?Programme
    {
        return $this->dlbProgramme;
    }

    public function setDlbProgramme(?Programme $dlbProgramme): self
    {
        $this->dlbProgramme = $dlbProgramme;

        return $this;
    }


}
