<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreStagiaire
 *
 * @ORM\Table(name="cre_stagiaire", uniqueConstraints={@ORM\UniqueConstraint(name="cre_stagiaire_pk", columns={"crs_id"})})
 * @ORM\Entity
 */
class CreStagiaire
{
    /**
     * @var string
     *
     * @ORM\Column(name="crs_id", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cre_stagiaire_crs_id_seq", allocationSize=1, initialValue=1)
     */
    private $crsId;

    /**
     * @var string
     *
     * @ORM\Column(name="crs_offre", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $crsOffre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_rang", type="decimal", precision=5, scale=0, nullable=true)
     */
    private $crsRang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_nom", type="string", length=100, nullable=true)
     */
    private $crsNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_prenom", type="string", length=50, nullable=true)
     */
    private $crsPrenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_code", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $crsCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_remunere", type="string", length=1, nullable=true)
     */
    private $crsRemunere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_duree", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $crsDuree;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_motif", type="string", length=50, nullable=true)
     */
    private $crsMotif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_prrechempdepmois", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $crsPrrechempdepmois;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_hrsent", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $crsHrsent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_nbmexper", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $crsNbmexper;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_resultat", type="string", length=50, nullable=true)
     */
    private $crsResultat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_statutdeb", type="string", length=50, nullable=true)
     */
    private $crsStatutdeb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_statutfin", type="string", length=50, nullable=true)
     */
    private $crsStatutfin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_adequa", type="string", length=1, nullable=true)
     */
    private $crsAdequa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_eligiblefse", type="string", length=1, nullable=true)
     */
    private $crsEligiblefse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_nome", type="string", length=100, nullable=true)
     */
    private $crsNome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_numvoiee", type="string", length=7, nullable=true)
     */
    private $crsNumvoiee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_bistere", type="string", length=1, nullable=true)
     */
    private $crsBistere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_adr1e", type="string", length=100, nullable=true)
     */
    private $crsAdr1e;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_adr2e", type="string", length=100, nullable=true)
     */
    private $crsAdr2e;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_cpostale", type="string", length=5, nullable=true)
     */
    private $crsCpostale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_payse", type="string", length=100, nullable=true)
     */
    private $crsPayse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_villee", type="string", length=100, nullable=true)
     */
    private $crsVillee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_apesp", type="string", length=5, nullable=true)
     */
    private $crsApesp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_villesp", type="string", length=100, nullable=true)
     */
    private $crsVillesp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_nomsp", type="string", length=100, nullable=true)
     */
    private $crsNomsp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_flg_echantillon", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $crsFlgEchantillon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crs_action", type="string", length=200, nullable=true)
     */
    private $crsAction;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="crs_dateentree", type="datetime", nullable=true)
     */
    private $crsDateentree;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="crs_datesortie", type="datetime", nullable=true)
     */
    private $crsDatesortie;

    public function getCrsId(): ?string
    {
        return $this->crsId;
    }

    public function getCrsOffre(): ?string
    {
        return $this->crsOffre;
    }

    public function setCrsOffre(string $crsOffre): self
    {
        $this->crsOffre = $crsOffre;

        return $this;
    }

    public function getCrsRang(): ?string
    {
        return $this->crsRang;
    }

    public function setCrsRang(?string $crsRang): self
    {
        $this->crsRang = $crsRang;

        return $this;
    }

    public function getCrsNom(): ?string
    {
        return $this->crsNom;
    }

    public function setCrsNom(?string $crsNom): self
    {
        $this->crsNom = $crsNom;

        return $this;
    }

    public function getCrsPrenom(): ?string
    {
        return $this->crsPrenom;
    }

    public function setCrsPrenom(?string $crsPrenom): self
    {
        $this->crsPrenom = $crsPrenom;

        return $this;
    }

    public function getCrsCode(): ?string
    {
        return $this->crsCode;
    }

    public function setCrsCode(?string $crsCode): self
    {
        $this->crsCode = $crsCode;

        return $this;
    }

    public function getCrsRemunere(): ?string
    {
        return $this->crsRemunere;
    }

    public function setCrsRemunere(?string $crsRemunere): self
    {
        $this->crsRemunere = $crsRemunere;

        return $this;
    }

    public function getCrsDuree(): ?string
    {
        return $this->crsDuree;
    }

    public function setCrsDuree(?string $crsDuree): self
    {
        $this->crsDuree = $crsDuree;

        return $this;
    }

    public function getCrsMotif(): ?string
    {
        return $this->crsMotif;
    }

    public function setCrsMotif(?string $crsMotif): self
    {
        $this->crsMotif = $crsMotif;

        return $this;
    }

    public function getCrsPrrechempdepmois(): ?string
    {
        return $this->crsPrrechempdepmois;
    }

    public function setCrsPrrechempdepmois(?string $crsPrrechempdepmois): self
    {
        $this->crsPrrechempdepmois = $crsPrrechempdepmois;

        return $this;
    }

    public function getCrsHrsent(): ?string
    {
        return $this->crsHrsent;
    }

    public function setCrsHrsent(?string $crsHrsent): self
    {
        $this->crsHrsent = $crsHrsent;

        return $this;
    }

    public function getCrsNbmexper(): ?string
    {
        return $this->crsNbmexper;
    }

    public function setCrsNbmexper(?string $crsNbmexper): self
    {
        $this->crsNbmexper = $crsNbmexper;

        return $this;
    }

    public function getCrsResultat(): ?string
    {
        return $this->crsResultat;
    }

    public function setCrsResultat(?string $crsResultat): self
    {
        $this->crsResultat = $crsResultat;

        return $this;
    }

    public function getCrsStatutdeb(): ?string
    {
        return $this->crsStatutdeb;
    }

    public function setCrsStatutdeb(?string $crsStatutdeb): self
    {
        $this->crsStatutdeb = $crsStatutdeb;

        return $this;
    }

    public function getCrsStatutfin(): ?string
    {
        return $this->crsStatutfin;
    }

    public function setCrsStatutfin(?string $crsStatutfin): self
    {
        $this->crsStatutfin = $crsStatutfin;

        return $this;
    }

    public function getCrsAdequa(): ?string
    {
        return $this->crsAdequa;
    }

    public function setCrsAdequa(?string $crsAdequa): self
    {
        $this->crsAdequa = $crsAdequa;

        return $this;
    }

    public function getCrsEligiblefse(): ?string
    {
        return $this->crsEligiblefse;
    }

    public function setCrsEligiblefse(?string $crsEligiblefse): self
    {
        $this->crsEligiblefse = $crsEligiblefse;

        return $this;
    }

    public function getCrsNome(): ?string
    {
        return $this->crsNome;
    }

    public function setCrsNome(?string $crsNome): self
    {
        $this->crsNome = $crsNome;

        return $this;
    }

    public function getCrsNumvoiee(): ?string
    {
        return $this->crsNumvoiee;
    }

    public function setCrsNumvoiee(?string $crsNumvoiee): self
    {
        $this->crsNumvoiee = $crsNumvoiee;

        return $this;
    }

    public function getCrsBistere(): ?string
    {
        return $this->crsBistere;
    }

    public function setCrsBistere(?string $crsBistere): self
    {
        $this->crsBistere = $crsBistere;

        return $this;
    }

    public function getCrsAdr1e(): ?string
    {
        return $this->crsAdr1e;
    }

    public function setCrsAdr1e(?string $crsAdr1e): self
    {
        $this->crsAdr1e = $crsAdr1e;

        return $this;
    }

    public function getCrsAdr2e(): ?string
    {
        return $this->crsAdr2e;
    }

    public function setCrsAdr2e(?string $crsAdr2e): self
    {
        $this->crsAdr2e = $crsAdr2e;

        return $this;
    }

    public function getCrsCpostale(): ?string
    {
        return $this->crsCpostale;
    }

    public function setCrsCpostale(?string $crsCpostale): self
    {
        $this->crsCpostale = $crsCpostale;

        return $this;
    }

    public function getCrsPayse(): ?string
    {
        return $this->crsPayse;
    }

    public function setCrsPayse(?string $crsPayse): self
    {
        $this->crsPayse = $crsPayse;

        return $this;
    }

    public function getCrsVillee(): ?string
    {
        return $this->crsVillee;
    }

    public function setCrsVillee(?string $crsVillee): self
    {
        $this->crsVillee = $crsVillee;

        return $this;
    }

    public function getCrsApesp(): ?string
    {
        return $this->crsApesp;
    }

    public function setCrsApesp(?string $crsApesp): self
    {
        $this->crsApesp = $crsApesp;

        return $this;
    }

    public function getCrsVillesp(): ?string
    {
        return $this->crsVillesp;
    }

    public function setCrsVillesp(?string $crsVillesp): self
    {
        $this->crsVillesp = $crsVillesp;

        return $this;
    }

    public function getCrsNomsp(): ?string
    {
        return $this->crsNomsp;
    }

    public function setCrsNomsp(?string $crsNomsp): self
    {
        $this->crsNomsp = $crsNomsp;

        return $this;
    }

    public function getCrsFlgEchantillon(): ?string
    {
        return $this->crsFlgEchantillon;
    }

    public function setCrsFlgEchantillon(?string $crsFlgEchantillon): self
    {
        $this->crsFlgEchantillon = $crsFlgEchantillon;

        return $this;
    }

    public function getCrsAction(): ?string
    {
        return $this->crsAction;
    }

    public function setCrsAction(?string $crsAction): self
    {
        $this->crsAction = $crsAction;

        return $this;
    }

    public function getCrsDateentree(): ?\DateTimeInterface
    {
        return $this->crsDateentree;
    }

    public function setCrsDateentree(?\DateTimeInterface $crsDateentree): self
    {
        $this->crsDateentree = $crsDateentree;

        return $this;
    }

    public function getCrsDatesortie(): ?\DateTimeInterface
    {
        return $this->crsDatesortie;
    }

    public function setCrsDatesortie(?\DateTimeInterface $crsDatesortie): self
    {
        $this->crsDatesortie = $crsDatesortie;

        return $this;
    }


}
