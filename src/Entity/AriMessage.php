<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AriMessage
 *
 * @ORM\Table(name="ari_message", uniqueConstraints={@ORM\UniqueConstraint(name="ari_message_pk", columns={"ams_id"})}, indexes={@ORM\Index(name="ari_message_ams_offre_fk", columns={"ams_offre"}), @ORM\Index(name="ari_message_uuif", columns={"ams_utilisateur"})})
 * @ORM\Entity
 */
class AriMessage
{
    /**
     * @var string
     *
     * @ORM\Column(name="ams_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ari_message_ams_id_seq", allocationSize=1, initialValue=1)
     */
    private $amsId;

    /**
     * @var string
     *
     * @ORM\Column(name="ams_proc", type="string", length=30, nullable=false)
     */
    private $amsProc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ams_date", type="datetime", nullable=false)
     */
    private $amsDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ams_message", type="string", length=200, nullable=false)
     */
    private $amsMessage;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ams_offre", referencedColumnName="off_id")
     * })
     */
    private $amsOffre;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ams_utilisateur", referencedColumnName="uti_id")
     * })
     */
    private $amsUtilisateur;

    public function getAmsId(): ?string
    {
        return $this->amsId;
    }

    public function getAmsProc(): ?string
    {
        return $this->amsProc;
    }

    public function setAmsProc(string $amsProc): self
    {
        $this->amsProc = $amsProc;

        return $this;
    }

    public function getAmsDate(): ?\DateTimeInterface
    {
        return $this->amsDate;
    }

    public function setAmsDate(\DateTimeInterface $amsDate): self
    {
        $this->amsDate = $amsDate;

        return $this;
    }

    public function getAmsMessage(): ?string
    {
        return $this->amsMessage;
    }

    public function setAmsMessage(string $amsMessage): self
    {
        $this->amsMessage = $amsMessage;

        return $this;
    }

    public function getAmsOffre(): ?Offre
    {
        return $this->amsOffre;
    }

    public function setAmsOffre(?Offre $amsOffre): self
    {
        $this->amsOffre = $amsOffre;

        return $this;
    }

    public function getAmsUtilisateur(): ?Utilisateur
    {
        return $this->amsUtilisateur;
    }

    public function setAmsUtilisateur(?Utilisateur $amsUtilisateur): self
    {
        $this->amsUtilisateur = $amsUtilisateur;

        return $this;
    }


}
