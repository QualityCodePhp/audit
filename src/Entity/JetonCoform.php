<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JetonCoform
 *
 * @ORM\Table(name="jeton_coform", uniqueConstraints={@ORM\UniqueConstraint(name="jeton_coform_pk", columns={"jtc_id"})}, indexes={@ORM\Index(name="jeton_coform_offre_fk", columns={"off_id"}), @ORM\Index(name="jeton_coform_utilisateur_fk", columns={"uti_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\JetonCoformRepository")
 */
class JetonCoform
{
    /**
     * @var string
     *
     * @ORM\Column(name="jtc_id", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="seq_jeton_coform", allocationSize=1, initialValue=1)
     */
    private $jtcId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="jtc_phpsessid", type="string", length=100, nullable=true)
     */
    private $jtcPhpsessid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="jtc_datec", type="datetime", nullable=true)
     */
    private $jtcDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="jtc_num_marche", type="string", length=18, nullable=true)
     */
    private $jtcNumMarche;

    /**
     * @var string|null
     *
     * @ORM\Column(name="jtc_typeutil", type="string", length=20, nullable=true)
     */
    private $jtcTypeutil;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="jtc_datem", type="datetime", nullable=true)
     */
    private $jtcDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="jtc_typeacces", type="string", length=50, nullable=true)
     */
    private $jtcTypeacces;

    /**
     * @var string|null
     *
     * @ORM\Column(name="jtc_type_demande", type="string", length=20, nullable=true)
     */
    private $jtcTypeDemande;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_id", referencedColumnName="off_id")
     * })
     */
    private $off;


    /**
     * @var string|null
     *
     * @ORM\Column(name="uti_id", type="integer",  nullable=true)
     */
    private $uti;

    public function getJtcId(): ?string
    {
        return $this->jtcId;
    }

    public function getJtcPhpsessid(): ?string
    {
        return $this->jtcPhpsessid;
    }

    public function setJtcPhpsessid(?string $jtcPhpsessid): self
    {
        $this->jtcPhpsessid = $jtcPhpsessid;

        return $this;
    }

    public function getJtcDatec(): ?\DateTimeInterface
    {
        return $this->jtcDatec;
    }

    public function setJtcDatec(?\DateTimeInterface $jtcDatec): self
    {
        $this->jtcDatec = $jtcDatec;

        return $this;
    }

    public function getJtcNumMarche(): ?string
    {
        return $this->jtcNumMarche;
    }

    public function setJtcNumMarche(?string $jtcNumMarche): self
    {
        $this->jtcNumMarche = $jtcNumMarche;

        return $this;
    }

    public function getJtcTypeutil(): ?string
    {
        return $this->jtcTypeutil;
    }

    public function setJtcTypeutil(?string $jtcTypeutil): self
    {
        $this->jtcTypeutil = $jtcTypeutil;

        return $this;
    }

    public function getJtcDatem(): ?\DateTimeInterface
    {
        return $this->jtcDatem;
    }

    public function setJtcDatem(?\DateTimeInterface $jtcDatem): self
    {
        $this->jtcDatem = $jtcDatem;

        return $this;
    }

    public function getJtcTypeacces(): ?string
    {
        return $this->jtcTypeacces;
    }

    public function setJtcTypeacces(?string $jtcTypeacces): self
    {
        $this->jtcTypeacces = $jtcTypeacces;

        return $this;
    }

    public function getJtcTypeDemande(): ?string
    {
        return $this->jtcTypeDemande;
    }

    public function setJtcTypeDemande(?string $jtcTypeDemande): self
    {
        $this->jtcTypeDemande = $jtcTypeDemande;

        return $this;
    }

    public function getOff(): ?Offre
    {
        return $this->off;
    }

    public function setOff(?Offre $off): self
    {
        $this->off = $off;

        return $this;
    }

    public function getUti(): ?int
    {
        return $this->uti;
    }

    public function setUti(?int $uti): self
    {
        $this->uti = $uti;

        return $this;
    }

}
