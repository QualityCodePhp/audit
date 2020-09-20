<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DispoComm
 *
 * @ORM\Table(name="dispo_comm", uniqueConstraints={@ORM\UniqueConstraint(name="dispo_comm_pk", columns={"dsc_id"})}, indexes={@ORM\Index(name="dispo_comm_uuif", columns={"dsc_auteurc"}), @ORM\Index(name="dispo_comm_ddif", columns={"dsc_dispo"})})
 * @ORM\Entity
 */
class DispoComm
{
    /**
     * @var string
     *
     * @ORM\Column(name="dsc_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dispo_comm_dsc_id_seq", allocationSize=1, initialValue=1)
     */
    private $dscId;

    /**
     * @var string
     *
     * @ORM\Column(name="dsc_objet", type="decimal", precision=1, scale=0, nullable=false, options={"comment"="0=Commentaire, 1=Validation, 2=DÃ©validation"})
     */
    private $dscObjet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dsc_datec", type="datetime", nullable=false)
     */
    private $dscDatec;

    /**
     * @var string
     *
     * @ORM\Column(name="dsc_comment", type="string", length=3000, nullable=false)
     */
    private $dscComment;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dsc_auteurc", referencedColumnName="uti_id")
     * })
     */
    private $dscAuteurc;

    /**
     * @var \Dispositif
     *
     * @ORM\ManyToOne(targetEntity="Dispositif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dsc_dispo", referencedColumnName="dsp_id")
     * })
     */
    private $dscDispo;

    public function getDscId(): ?string
    {
        return $this->dscId;
    }

    public function getDscObjet(): ?string
    {
        return $this->dscObjet;
    }

    public function setDscObjet(string $dscObjet): self
    {
        $this->dscObjet = $dscObjet;

        return $this;
    }

    public function getDscDatec(): ?\DateTimeInterface
    {
        return $this->dscDatec;
    }

    public function setDscDatec(\DateTimeInterface $dscDatec): self
    {
        $this->dscDatec = $dscDatec;

        return $this;
    }

    public function getDscComment(): ?string
    {
        return $this->dscComment;
    }

    public function setDscComment(string $dscComment): self
    {
        $this->dscComment = $dscComment;

        return $this;
    }

    public function getDscAuteurc(): ?Utilisateur
    {
        return $this->dscAuteurc;
    }

    public function setDscAuteurc(?Utilisateur $dscAuteurc): self
    {
        $this->dscAuteurc = $dscAuteurc;

        return $this;
    }

    public function getDscDispo(): ?Dispositif
    {
        return $this->dscDispo;
    }

    public function setDscDispo(?Dispositif $dscDispo): self
    {
        $this->dscDispo = $dscDispo;

        return $this;
    }


}
