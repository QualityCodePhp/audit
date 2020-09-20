<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", uniqueConstraints={@ORM\UniqueConstraint(name="utilisateur_pk", columns={"uti_id"})}, indexes={@ORM\Index(name="utilisateur_aaif", columns={"uti_antenne"}), @ORM\Index(name="utilisateur_eeif", columns={"uti_etablssmt"}), @ORM\Index(name="utilisateur_ggif", columns={"uti_groupe"}), @ORM\Index(name="utilisateur_ffif", columns={"uti_fonction"}), @ORM\Index(name="utilisateur_ccif", columns={"uti_civilite"})})
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateurRepository")
 */
class Utilisateur implements UserInterface
{
    /**
     * @var string
     *
     * @ORM\Column(name="uti_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="seq_utilisateur", allocationSize=1, initialValue=1)
     */
    private $utiId;

    /**
     * @var string
     *
     * @ORM\Column(name="uti_type", type="decimal", precision=1, scale=0, nullable=false, options={"comment"="0=FO, 1=BO"})
     */
    private $utiType;

    /**
     * @var string
     *
     * @ORM\Column(name="uti_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $utiEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="uti_admin", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $utiAdmin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uti_nom", type="string", length=50, nullable=true)
     */
    private $utiNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uti_prenom", type="string", length=50, nullable=true)
     */
    private $utiPrenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uti_email", type="string", length=60, nullable=true)
     */
    private $utiEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uti_telephone", type="string", length=16, nullable=true)
     */
    private $utiTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="uti_referent", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $utiReferent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uti_estcontact", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $utiEstcontact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uti_login", type="string", length=256, nullable=true)
     */
    private $utiLogin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uti_password", type="string", length=100, nullable=true)
     */
    private $utiPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="uti_charte", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $utiCharte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uti_auteurc", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $utiAuteurc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="uti_datec", type="datetime", nullable=true)
     */
    private $utiDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uti_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $utiAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="uti_datem", type="datetime", nullable=true)
     */
    private $utiDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uti_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $utiAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="uti_datea", type="datetime", nullable=true)
     */
    private $utiDatea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uti_flg_active_qd_marche_notif", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $utiFlgActiveQdMarcheNotif;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="uti_dt_expiration_password", type="datetime", nullable=true)
     */
    private $utiDtExpirationPassword;


    /**
     * @var \Antenne
     *
     * @ORM\ManyToOne(targetEntity="Antenne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uti_antenne", referencedColumnName="ant_id")
     * })
     */
    private $utiAntenne;

    /**
     * @var \Civilite
     *
     * @ORM\ManyToOne(targetEntity="Civilite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uti_civilite", referencedColumnName="civ_id")
     * })
     */
    private $utiCivilite;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uti_etablssmt", referencedColumnName="ets_id")
     * })
     */
    private $utiEtablssmt;

    /**
     * @var \Fonction
     *
     * @ORM\ManyToOne(targetEntity="Fonction", fetch="EAGER")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uti_fonction", referencedColumnName="fct_id")
     * })
     */
    private $utiFonction;

    /**
     * @var \Groupe
     *
     * @ORM\ManyToOne(targetEntity="Groupe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uti_groupe", referencedColumnName="grp_id")
     * })
     */
    private $utiGroupe;


    public function __construct()
    {
        $this->toto = new ArrayCollection();
    }


    public function getUtiId(): ?string
    {
        return $this->utiId;
    }

    public function getUtiType(): ?string
    {
        return $this->utiType;
    }

    public function setUtiType(string $utiType): self
    {
        $this->utiType = $utiType;

        return $this;
    }

    public function getUtiEtat(): ?string
    {
        return $this->utiEtat;
    }

    public function setUtiEtat(string $utiEtat): self
    {
        $this->utiEtat = $utiEtat;

        return $this;
    }

    public function getUtiAdmin(): ?string
    {
        return $this->utiAdmin;
    }

    public function setUtiAdmin(string $utiAdmin): self
    {
        $this->utiAdmin = $utiAdmin;

        return $this;
    }

    public function getUtiNom(): ?string
    {
        return $this->utiNom;
    }

    public function setUtiNom(?string $utiNom): self
    {
        $this->utiNom = $utiNom;

        return $this;
    }

    public function getUtiPrenom(): ?string
    {
        return $this->utiPrenom;
    }

    public function setUtiPrenom(?string $utiPrenom): self
    {
        $this->utiPrenom = $utiPrenom;

        return $this;
    }

    public function getUtiEmail(): ?string
    {
        return $this->utiEmail;
    }

    public function setUtiEmail(?string $utiEmail): self
    {
        $this->utiEmail = $utiEmail;

        return $this;
    }

    public function getUtiTelephone(): ?string
    {
        return $this->utiTelephone;
    }

    public function setUtiTelephone(?string $utiTelephone): self
    {
        $this->utiTelephone = $utiTelephone;

        return $this;
    }

    public function getUtiReferent(): ?string
    {
        return $this->utiReferent;
    }

    public function setUtiReferent(string $utiReferent): self
    {
        $this->utiReferent = $utiReferent;

        return $this;
    }

    public function getUtiEstcontact(): ?string
    {
        return $this->utiEstcontact;
    }

    public function setUtiEstcontact(?string $utiEstcontact): self
    {
        $this->utiEstcontact = $utiEstcontact;

        return $this;
    }

    public function getUtiLogin(): ?string
    {
        return $this->utiLogin;
    }

    public function setUtiLogin(?string $utiLogin): self
    {
        $this->utiLogin = $utiLogin;

        return $this;
    }

    public function getUtiPassword(): ?string
    {
        return $this->utiPassword;
    }

    public function setUtiPassword(?string $utiPassword): self
    {
        $this->utiPassword = $utiPassword;

        return $this;
    }

    public function getUtiCharte(): ?string
    {
        return $this->utiCharte;
    }

    public function setUtiCharte(string $utiCharte): self
    {
        $this->utiCharte = $utiCharte;

        return $this;
    }

    public function getUtiAuteurc(): ?string
    {
        return $this->utiAuteurc;
    }

    public function setUtiAuteurc(?string $utiAuteurc): self
    {
        $this->utiAuteurc = $utiAuteurc;

        return $this;
    }

    public function getUtiDatec(): ?\DateTimeInterface
    {
        return $this->utiDatec;
    }

    public function setUtiDatec(?\DateTimeInterface $utiDatec): self
    {
        $this->utiDatec = $utiDatec;

        return $this;
    }

    public function getUtiAuteurm(): ?string
    {
        return $this->utiAuteurm;
    }

    public function setUtiAuteurm(?string $utiAuteurm): self
    {
        $this->utiAuteurm = $utiAuteurm;

        return $this;
    }

    public function getUtiDatem(): ?\DateTimeInterface
    {
        return $this->utiDatem;
    }

    public function setUtiDatem(?\DateTimeInterface $utiDatem): self
    {
        $this->utiDatem = $utiDatem;

        return $this;
    }

    public function getUtiAuteura(): ?string
    {
        return $this->utiAuteura;
    }

    public function setUtiAuteura(?string $utiAuteura): self
    {
        $this->utiAuteura = $utiAuteura;

        return $this;
    }

    public function getUtiDatea(): ?\DateTimeInterface
    {
        return $this->utiDatea;
    }

    public function setUtiDatea(?\DateTimeInterface $utiDatea): self
    {
        $this->utiDatea = $utiDatea;

        return $this;
    }

    public function getUtiFlgActiveQdMarcheNotif(): ?string
    {
        return $this->utiFlgActiveQdMarcheNotif;
    }

    public function setUtiFlgActiveQdMarcheNotif(?string $utiFlgActiveQdMarcheNotif): self
    {
        $this->utiFlgActiveQdMarcheNotif = $utiFlgActiveQdMarcheNotif;

        return $this;
    }

    public function getUtiDtExpirationPassword(): ?\DateTimeInterface
    {
        return $this->utiDtExpirationPassword;
    }

    public function setUtiDtExpirationPassword(?\DateTimeInterface $utiDtExpirationPassword): self
    {
        $this->utiDtExpirationPassword = $utiDtExpirationPassword;

        return $this;
    }

    public function getUtiAntenne(): ?Antenne
    {
        return $this->utiAntenne;
    }

    public function setUtiAntenne(?Antenne $utiAntenne): self
    {
        $this->utiAntenne = $utiAntenne;

        return $this;
    }

    public function getUtiCivilite(): ?Civilite
    {
        return $this->utiCivilite;
    }

    public function setUtiCivilite(?Civilite $utiCivilite): self
    {
        $this->utiCivilite = $utiCivilite;

        return $this;
    }

    public function getUtiEtablssmt(): ?Etablssmt
    {
        return $this->utiEtablssmt;
    }

    public function setUtiEtablssmt(?Etablssmt $utiEtablssmt): self
    {
        $this->utiEtablssmt = $utiEtablssmt;

        return $this;
    }

    public function getUtiFonction(): ?Fonction
    {
        return $this->utiFonction;
    }

    public function setUtiFonction(?Fonction $utiFonction): self
    {
        $this->utiFonction = $utiFonction;

        return $this;
    }

    public function getUtiGroupe(): ?Groupe
    {
        return $this->utiGroupe;
    }

    public function setUtiGroupe(?Groupe $utiGroupe): self
    {
        $this->utiGroupe = $utiGroupe;

        return $this;
    }


    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        // TODO: Implement getRoles() method.
    }

    /**
     * @inheritDoc
     */
    public function getPassword()
    {
        // TODO: Implement getPassword() method.
    }

    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    /**
     * @inheritDoc
     */
    public function getUsername()
    {
        // TODO: Implement getUsername() method.
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

}
