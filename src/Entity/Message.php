<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message", uniqueConstraints={@ORM\UniqueConstraint(name="message_pk", columns={"mel_id"})}, indexes={@ORM\Index(name="message_uuif", columns={"mel_destinataire"}), @ORM\Index(name="message_ccif", columns={"mel_commande"}), @ORM\Index(name="message_uuif2", columns={"mel_expediteur"}), @ORM\Index(name="message_ofif", columns={"mel_offre"})})
 * @ORM\Entity
 */
class Message
{
    /**
     * @var string
     *
     * @ORM\Column(name="mel_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="message_mel_id_seq", allocationSize=1, initialValue=1)
     */
    private $melId;

    /**
     * @var string
     *
     * @ORM\Column(name="mel_typedestin", type="string", length=2, nullable=false, options={"comment"="CL = Classe, GR = Groupe, UT = Utilisateur, ET = Etablissement, AN = Antenne"})
     */
    private $melTypedestin;

    /**
     * @var string
     *
     * @ORM\Column(name="mel_typedossier", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $melTypedossier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mel_objet", type="string", length=200, nullable=true)
     */
    private $melObjet;

    /**
     * @var string
     *
     * @ORM\Column(name="mel_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $melEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="mel_traite", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $melTraite;

    /**
     * @var string
     *
     * @ORM\Column(name="mel_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $melAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mel_datec", type="datetime", nullable=false)
     */
    private $melDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mel_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $melAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="mel_datem", type="datetime", nullable=true)
     */
    private $melDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mel_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $melAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="mel_datea", type="datetime", nullable=true)
     */
    private $melDatea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mel_texte", type="string", length=4000, nullable=true)
     */
    private $melTexte;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mel_commande", referencedColumnName="cmd_id")
     * })
     */
    private $melCommande;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mel_offre", referencedColumnName="off_id")
     * })
     */
    private $melOffre;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mel_destinataire", referencedColumnName="uti_id")
     * })
     */
    private $melDestinataire;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mel_expediteur", referencedColumnName="uti_id")
     * })
     */
    private $melExpediteur;

    public function getMelId(): ?string
    {
        return $this->melId;
    }

    public function getMelTypedestin(): ?string
    {
        return $this->melTypedestin;
    }

    public function setMelTypedestin(string $melTypedestin): self
    {
        $this->melTypedestin = $melTypedestin;

        return $this;
    }

    public function getMelTypedossier(): ?string
    {
        return $this->melTypedossier;
    }

    public function setMelTypedossier(string $melTypedossier): self
    {
        $this->melTypedossier = $melTypedossier;

        return $this;
    }

    public function getMelObjet(): ?string
    {
        return $this->melObjet;
    }

    public function setMelObjet(?string $melObjet): self
    {
        $this->melObjet = $melObjet;

        return $this;
    }

    public function getMelEtat(): ?string
    {
        return $this->melEtat;
    }

    public function setMelEtat(string $melEtat): self
    {
        $this->melEtat = $melEtat;

        return $this;
    }

    public function getMelTraite(): ?string
    {
        return $this->melTraite;
    }

    public function setMelTraite(string $melTraite): self
    {
        $this->melTraite = $melTraite;

        return $this;
    }

    public function getMelAuteurc(): ?string
    {
        return $this->melAuteurc;
    }

    public function setMelAuteurc(string $melAuteurc): self
    {
        $this->melAuteurc = $melAuteurc;

        return $this;
    }

    public function getMelDatec(): ?\DateTimeInterface
    {
        return $this->melDatec;
    }

    public function setMelDatec(\DateTimeInterface $melDatec): self
    {
        $this->melDatec = $melDatec;

        return $this;
    }

    public function getMelAuteurm(): ?string
    {
        return $this->melAuteurm;
    }

    public function setMelAuteurm(?string $melAuteurm): self
    {
        $this->melAuteurm = $melAuteurm;

        return $this;
    }

    public function getMelDatem(): ?\DateTimeInterface
    {
        return $this->melDatem;
    }

    public function setMelDatem(?\DateTimeInterface $melDatem): self
    {
        $this->melDatem = $melDatem;

        return $this;
    }

    public function getMelAuteura(): ?string
    {
        return $this->melAuteura;
    }

    public function setMelAuteura(?string $melAuteura): self
    {
        $this->melAuteura = $melAuteura;

        return $this;
    }

    public function getMelDatea(): ?\DateTimeInterface
    {
        return $this->melDatea;
    }

    public function setMelDatea(?\DateTimeInterface $melDatea): self
    {
        $this->melDatea = $melDatea;

        return $this;
    }

    public function getMelTexte(): ?string
    {
        return $this->melTexte;
    }

    public function setMelTexte(?string $melTexte): self
    {
        $this->melTexte = $melTexte;

        return $this;
    }

    public function getMelCommande(): ?Commande
    {
        return $this->melCommande;
    }

    public function setMelCommande(?Commande $melCommande): self
    {
        $this->melCommande = $melCommande;

        return $this;
    }

    public function getMelOffre(): ?Offre
    {
        return $this->melOffre;
    }

    public function setMelOffre(?Offre $melOffre): self
    {
        $this->melOffre = $melOffre;

        return $this;
    }

    public function getMelDestinataire(): ?Utilisateur
    {
        return $this->melDestinataire;
    }

    public function setMelDestinataire(?Utilisateur $melDestinataire): self
    {
        $this->melDestinataire = $melDestinataire;

        return $this;
    }

    public function getMelExpediteur(): ?Utilisateur
    {
        return $this->melExpediteur;
    }

    public function setMelExpediteur(?Utilisateur $melExpediteur): self
    {
        $this->melExpediteur = $melExpediteur;

        return $this;
    }


}
