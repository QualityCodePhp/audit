<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreListe
 *
 * @ORM\Table(name="cre_liste", uniqueConstraints={@ORM\UniqueConstraint(name="cre_liste_pk", columns={"cre_id"})})
 * @ORM\Entity
 */
class CreListe
{
    /**
     * @var string
     *
     * @ORM\Column(name="cre_id", type="decimal", precision=8, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cre_liste_cre_id_seq", allocationSize=1, initialValue=1)
     */
    private $creId;

    /**
     * @var string
     *
     * @ORM\Column(name="cre_offre", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $creOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="cre_stagiaire", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $creStagiaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cre_prenom", type="string", length=50, nullable=true)
     */
    private $crePrenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cre_nom", type="string", length=50, nullable=true)
     */
    private $creNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cre_sexe", type="string", length=1, nullable=true)
     */
    private $creSexe;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cre_datenais", type="datetime", nullable=true)
     */
    private $creDatenais;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cre_numvoie", type="string", length=7, nullable=true)
     */
    private $creNumvoie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cre_nomvoie", type="string", length=150, nullable=true)
     */
    private $creNomvoie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cre_ville", type="string", length=32, nullable=true)
     */
    private $creVille;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cre_dateentree", type="datetime", nullable=true)
     */
    private $creDateentree;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cre_datesortie", type="datetime", nullable=true)
     */
    private $creDatesortie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cre_orgaremu", type="string", length=50, nullable=true)
     */
    private $creOrgaremu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cre_unite", type="string", length=50, nullable=true)
     */
    private $creUnite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cre_nbunite", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $creNbunite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cre_libellepresta", type="string", length=50, nullable=true)
     */
    private $creLibellepresta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cre_rang", type="decimal", precision=5, scale=0, nullable=true)
     */
    private $creRang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cre_numsession", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $creNumsession;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cre_numcomposante", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $creNumcomposante;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cre_parcoursmax", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $creParcoursmax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cre_nbabs", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $creNbabs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cre_parcour_duree", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $creParcourDuree;

    public function getCreId(): ?string
    {
        return $this->creId;
    }

    public function getCreOffre(): ?string
    {
        return $this->creOffre;
    }

    public function setCreOffre(string $creOffre): self
    {
        $this->creOffre = $creOffre;

        return $this;
    }

    public function getCreStagiaire(): ?string
    {
        return $this->creStagiaire;
    }

    public function setCreStagiaire(string $creStagiaire): self
    {
        $this->creStagiaire = $creStagiaire;

        return $this;
    }

    public function getCrePrenom(): ?string
    {
        return $this->crePrenom;
    }

    public function setCrePrenom(?string $crePrenom): self
    {
        $this->crePrenom = $crePrenom;

        return $this;
    }

    public function getCreNom(): ?string
    {
        return $this->creNom;
    }

    public function setCreNom(?string $creNom): self
    {
        $this->creNom = $creNom;

        return $this;
    }

    public function getCreSexe(): ?string
    {
        return $this->creSexe;
    }

    public function setCreSexe(?string $creSexe): self
    {
        $this->creSexe = $creSexe;

        return $this;
    }

    public function getCreDatenais(): ?\DateTimeInterface
    {
        return $this->creDatenais;
    }

    public function setCreDatenais(?\DateTimeInterface $creDatenais): self
    {
        $this->creDatenais = $creDatenais;

        return $this;
    }

    public function getCreNumvoie(): ?string
    {
        return $this->creNumvoie;
    }

    public function setCreNumvoie(?string $creNumvoie): self
    {
        $this->creNumvoie = $creNumvoie;

        return $this;
    }

    public function getCreNomvoie(): ?string
    {
        return $this->creNomvoie;
    }

    public function setCreNomvoie(?string $creNomvoie): self
    {
        $this->creNomvoie = $creNomvoie;

        return $this;
    }

    public function getCreVille(): ?string
    {
        return $this->creVille;
    }

    public function setCreVille(?string $creVille): self
    {
        $this->creVille = $creVille;

        return $this;
    }

    public function getCreDateentree(): ?\DateTimeInterface
    {
        return $this->creDateentree;
    }

    public function setCreDateentree(?\DateTimeInterface $creDateentree): self
    {
        $this->creDateentree = $creDateentree;

        return $this;
    }

    public function getCreDatesortie(): ?\DateTimeInterface
    {
        return $this->creDatesortie;
    }

    public function setCreDatesortie(?\DateTimeInterface $creDatesortie): self
    {
        $this->creDatesortie = $creDatesortie;

        return $this;
    }

    public function getCreOrgaremu(): ?string
    {
        return $this->creOrgaremu;
    }

    public function setCreOrgaremu(?string $creOrgaremu): self
    {
        $this->creOrgaremu = $creOrgaremu;

        return $this;
    }

    public function getCreUnite(): ?string
    {
        return $this->creUnite;
    }

    public function setCreUnite(?string $creUnite): self
    {
        $this->creUnite = $creUnite;

        return $this;
    }

    public function getCreNbunite(): ?string
    {
        return $this->creNbunite;
    }

    public function setCreNbunite(?string $creNbunite): self
    {
        $this->creNbunite = $creNbunite;

        return $this;
    }

    public function getCreLibellepresta(): ?string
    {
        return $this->creLibellepresta;
    }

    public function setCreLibellepresta(?string $creLibellepresta): self
    {
        $this->creLibellepresta = $creLibellepresta;

        return $this;
    }

    public function getCreRang(): ?string
    {
        return $this->creRang;
    }

    public function setCreRang(?string $creRang): self
    {
        $this->creRang = $creRang;

        return $this;
    }

    public function getCreNumsession(): ?string
    {
        return $this->creNumsession;
    }

    public function setCreNumsession(?string $creNumsession): self
    {
        $this->creNumsession = $creNumsession;

        return $this;
    }

    public function getCreNumcomposante(): ?string
    {
        return $this->creNumcomposante;
    }

    public function setCreNumcomposante(?string $creNumcomposante): self
    {
        $this->creNumcomposante = $creNumcomposante;

        return $this;
    }

    public function getCreParcoursmax(): ?string
    {
        return $this->creParcoursmax;
    }

    public function setCreParcoursmax(?string $creParcoursmax): self
    {
        $this->creParcoursmax = $creParcoursmax;

        return $this;
    }

    public function getCreNbabs(): ?string
    {
        return $this->creNbabs;
    }

    public function setCreNbabs(?string $creNbabs): self
    {
        $this->creNbabs = $creNbabs;

        return $this;
    }

    public function getCreParcourDuree(): ?string
    {
        return $this->creParcourDuree;
    }

    public function setCreParcourDuree(?string $creParcourDuree): self
    {
        $this->creParcourDuree = $creParcourDuree;

        return $this;
    }


}
