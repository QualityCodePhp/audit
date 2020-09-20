<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormaAf
 *
 * @ORM\Table(name="forma_af", uniqueConstraints={@ORM\UniqueConstraint(name="forma_af_pk", columns={"faf_id"})}, indexes={@ORM\Index(name="formacode_de_l_af2_fk", columns={"faf_af"}), @ORM\Index(name="forma_af_faf_ffif", columns={"faf_formacode"})})
 * @ORM\Entity
 */
class FormaAf
{
    /**
     * @var string
     *
     * @ORM\Column(name="faf_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="forma_af_faf_id_seq", allocationSize=1, initialValue=1)
     */
    private $fafId;

    /**
     * @var string
     *
     * @ORM\Column(name="faf_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $fafEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="faf_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $fafAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="faf_datec", type="date", nullable=false)
     */
    private $fafDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="faf_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $fafAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="faf_datea", type="datetime", nullable=true)
     */
    private $fafDatea;

    /**
     * @var \Af
     *
     * @ORM\ManyToOne(targetEntity="Af")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="faf_af", referencedColumnName="afo_id")
     * })
     */
    private $fafAf;

    /**
     * @var \Formacode
     *
     * @ORM\ManyToOne(targetEntity="Formacode")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="faf_formacode", referencedColumnName="fmc_id")
     * })
     */
    private $fafFormacode;

    public function getFafId(): ?string
    {
        return $this->fafId;
    }

    public function getFafEtat(): ?string
    {
        return $this->fafEtat;
    }

    public function setFafEtat(string $fafEtat): self
    {
        $this->fafEtat = $fafEtat;

        return $this;
    }

    public function getFafAuteurc(): ?string
    {
        return $this->fafAuteurc;
    }

    public function setFafAuteurc(string $fafAuteurc): self
    {
        $this->fafAuteurc = $fafAuteurc;

        return $this;
    }

    public function getFafDatec(): ?\DateTimeInterface
    {
        return $this->fafDatec;
    }

    public function setFafDatec(\DateTimeInterface $fafDatec): self
    {
        $this->fafDatec = $fafDatec;

        return $this;
    }

    public function getFafAuteura(): ?string
    {
        return $this->fafAuteura;
    }

    public function setFafAuteura(?string $fafAuteura): self
    {
        $this->fafAuteura = $fafAuteura;

        return $this;
    }

    public function getFafDatea(): ?\DateTimeInterface
    {
        return $this->fafDatea;
    }

    public function setFafDatea(?\DateTimeInterface $fafDatea): self
    {
        $this->fafDatea = $fafDatea;

        return $this;
    }

    public function getFafAf(): ?Af
    {
        return $this->fafAf;
    }

    public function setFafAf(?Af $fafAf): self
    {
        $this->fafAf = $fafAf;

        return $this;
    }

    public function getFafFormacode(): ?Formacode
    {
        return $this->fafFormacode;
    }

    public function setFafFormacode(?Formacode $fafFormacode): self
    {
        $this->fafFormacode = $fafFormacode;

        return $this;
    }


}
