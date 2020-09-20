<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GfMessage
 *
 * @ORM\Table(name="gf_message", uniqueConstraints={@ORM\UniqueConstraint(name="gf_message_pk", columns={"gfm_id"})})
 * @ORM\Entity
 */
class GfMessage
{
    /**
     * @var string
     *
     * @ORM\Column(name="gfm_id", type="decimal", precision=6, scale=0, nullable=false, options={"comment"="Identifiant"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gf_message_gfm_id_seq", allocationSize=1, initialValue=1)
     */
    private $gfmId;

    /**
     * @var string
     *
     * @ORM\Column(name="gfm_offre", type="decimal", precision=6, scale=0, nullable=false, options={"comment"="Identifiant du dossier dÂ¿offre"})
     */
    private $gfmOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="gfm_contxt", type="string", length=20, nullable=false, options={"comment"="Nom du contexte"})
     */
    private $gfmContxt;

    /**
     * @var string
     *
     * @ORM\Column(name="gfm_api", type="string", length=20, nullable=false, options={"comment"="Nom de l'API"})
     */
    private $gfmApi;

    /**
     * @var string
     *
     * @ORM\Column(name="gfm_utilisateur", type="decimal", precision=6, scale=0, nullable=false, options={"comment"="Identifiant Utilisateur"})
     */
    private $gfmUtilisateur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gfm_date", type="datetime", nullable=false, options={"comment"="Date lancement"})
     */
    private $gfmDate;

    /**
     * @var string
     *
     * @ORM\Column(name="gfm_message", type="string", length=400, nullable=false, options={"comment"="Messages dÂ¿erreur"})
     */
    private $gfmMessage;

    public function getGfmId(): ?string
    {
        return $this->gfmId;
    }

    public function getGfmOffre(): ?string
    {
        return $this->gfmOffre;
    }

    public function setGfmOffre(string $gfmOffre): self
    {
        $this->gfmOffre = $gfmOffre;

        return $this;
    }

    public function getGfmContxt(): ?string
    {
        return $this->gfmContxt;
    }

    public function setGfmContxt(string $gfmContxt): self
    {
        $this->gfmContxt = $gfmContxt;

        return $this;
    }

    public function getGfmApi(): ?string
    {
        return $this->gfmApi;
    }

    public function setGfmApi(string $gfmApi): self
    {
        $this->gfmApi = $gfmApi;

        return $this;
    }

    public function getGfmUtilisateur(): ?string
    {
        return $this->gfmUtilisateur;
    }

    public function setGfmUtilisateur(string $gfmUtilisateur): self
    {
        $this->gfmUtilisateur = $gfmUtilisateur;

        return $this;
    }

    public function getGfmDate(): ?\DateTimeInterface
    {
        return $this->gfmDate;
    }

    public function setGfmDate(\DateTimeInterface $gfmDate): self
    {
        $this->gfmDate = $gfmDate;

        return $this;
    }

    public function getGfmMessage(): ?string
    {
        return $this->gfmMessage;
    }

    public function setGfmMessage(string $gfmMessage): self
    {
        $this->gfmMessage = $gfmMessage;

        return $this;
    }


}
