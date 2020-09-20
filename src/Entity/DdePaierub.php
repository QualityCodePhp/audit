<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DdePaierub
 *
 * @ORM\Table(name="dde_paierub", uniqueConstraints={@ORM\UniqueConstraint(name="dde_paierub_pk", columns={"ddr_id"})}, indexes={@ORM\Index(name="ddr_ddp_sstraitant_fk", columns={"ddp_id_sstraitant"})})
 * @ORM\Entity
 */
class DdePaierub
{
    /**
     * @var string
     *
     * @ORM\Column(name="ddr_id", type="decimal", precision=12, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dde_paierub_ddr_id_seq", allocationSize=1, initialValue=1)
     */
    private $ddrId;

    /**
     * @var string
     *
     * @ORM\Column(name="ddr_paiement", type="decimal", precision=6, scale=0, nullable=false, options={"comment"="Identifiant de la table DDE_PAIEMENT"})
     */
    private $ddrPaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="ddr_offre", type="decimal", precision=6, scale=0, nullable=false, options={"comment"="Identifiant de la table OFFRE"})
     */
    private $ddrOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="ddr_rep", type="decimal", precision=6, scale=0, nullable=false, options={"comment"="Identifiant de la table REPONSE"})
     */
    private $ddrRep;

    /**
     * @var string
     *
     * @ORM\Column(name="ddr_bordereau", type="decimal", precision=6, scale=0, nullable=false, options={"comment"="Identifiant de la table BORDEREAU"})
     */
    private $ddrBordereau;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddr_rubrique", type="decimal", precision=6, scale=0, nullable=true, options={"comment"="Identifiant de la table R_BORDEREAU"})
     */
    private $ddrRubrique;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddr_etat", type="decimal", precision=3, scale=0, nullable=true, options={"comment"="Etat"})
     */
    private $ddrEtat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddr_moisd", type="decimal", precision=2, scale=0, nullable=true, options={"comment"="Mois de dÃ©but PÃ©riode"})
     */
    private $ddrMoisd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddr_anneed", type="decimal", precision=4, scale=0, nullable=true, options={"comment"="AnnÃ©e de dÃ©but PÃ©riode"})
     */
    private $ddrAnneed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddr_moisf", type="decimal", precision=2, scale=0, nullable=true, options={"comment"="Mois de fin PÃ©riode"})
     */
    private $ddrMoisf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddr_anneef", type="decimal", precision=4, scale=0, nullable=true, options={"comment"="AnnÃ©e de fin PÃ©riode"})
     */
    private $ddrAnneef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddr_untreal", type="decimal", precision=8, scale=2, nullable=true, options={"comment"="Nombre unitÃ©s rÃ©alisÃ©es"})
     */
    private $ddrUntreal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddr_mtpaye", type="decimal", precision=12, scale=2, nullable=true, options={"comment"="Montant Ã  payer"})
     */
    private $ddrMtpaye;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddr_cumuntreal", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $ddrCumuntreal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddr_pourexe", type="decimal", precision=6, scale=2, nullable=true, options={"comment"="% execution"})
     */
    private $ddrPourexe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddr_mtregulpaye", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddrMtregulpaye;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddr_untregul", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $ddrUntregul;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddr_mtcrepaye", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddrMtcrepaye;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddr_untcre", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $ddrUntcre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddr_pourexeregul", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $ddrPourexeregul;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddr_pourexecre", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $ddrPourexecre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddr_type", type="decimal", precision=2, scale=0, nullable=true)
     */
    private $ddrType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddr_pxunite", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $ddrPxunite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddr_untprev", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $ddrUntprev;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ddr_date", type="datetime", nullable=true)
     */
    private $ddrDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddr_sstype", type="string", length=50, nullable=true)
     */
    private $ddrSstype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddr_objet", type="string", length=2000, nullable=true)
     */
    private $ddrObjet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddr_mtinitial", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $ddrMtinitial;

    /**
     * @var \DdePaiement
     *
     * @ORM\ManyToOne(targetEntity="DdePaiement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ddp_id_sstraitant", referencedColumnName="ddp_id")
     * })
     */
    private $ddpIdSstraitant;

    public function getDdrId(): ?string
    {
        return $this->ddrId;
    }

    public function getDdrPaiement(): ?string
    {
        return $this->ddrPaiement;
    }

    public function setDdrPaiement(string $ddrPaiement): self
    {
        $this->ddrPaiement = $ddrPaiement;

        return $this;
    }

    public function getDdrOffre(): ?string
    {
        return $this->ddrOffre;
    }

    public function setDdrOffre(string $ddrOffre): self
    {
        $this->ddrOffre = $ddrOffre;

        return $this;
    }

    public function getDdrRep(): ?string
    {
        return $this->ddrRep;
    }

    public function setDdrRep(string $ddrRep): self
    {
        $this->ddrRep = $ddrRep;

        return $this;
    }

    public function getDdrBordereau(): ?string
    {
        return $this->ddrBordereau;
    }

    public function setDdrBordereau(string $ddrBordereau): self
    {
        $this->ddrBordereau = $ddrBordereau;

        return $this;
    }

    public function getDdrRubrique(): ?string
    {
        return $this->ddrRubrique;
    }

    public function setDdrRubrique(?string $ddrRubrique): self
    {
        $this->ddrRubrique = $ddrRubrique;

        return $this;
    }

    public function getDdrEtat(): ?string
    {
        return $this->ddrEtat;
    }

    public function setDdrEtat(?string $ddrEtat): self
    {
        $this->ddrEtat = $ddrEtat;

        return $this;
    }

    public function getDdrMoisd(): ?string
    {
        return $this->ddrMoisd;
    }

    public function setDdrMoisd(?string $ddrMoisd): self
    {
        $this->ddrMoisd = $ddrMoisd;

        return $this;
    }

    public function getDdrAnneed(): ?string
    {
        return $this->ddrAnneed;
    }

    public function setDdrAnneed(?string $ddrAnneed): self
    {
        $this->ddrAnneed = $ddrAnneed;

        return $this;
    }

    public function getDdrMoisf(): ?string
    {
        return $this->ddrMoisf;
    }

    public function setDdrMoisf(?string $ddrMoisf): self
    {
        $this->ddrMoisf = $ddrMoisf;

        return $this;
    }

    public function getDdrAnneef(): ?string
    {
        return $this->ddrAnneef;
    }

    public function setDdrAnneef(?string $ddrAnneef): self
    {
        $this->ddrAnneef = $ddrAnneef;

        return $this;
    }

    public function getDdrUntreal(): ?string
    {
        return $this->ddrUntreal;
    }

    public function setDdrUntreal(?string $ddrUntreal): self
    {
        $this->ddrUntreal = $ddrUntreal;

        return $this;
    }

    public function getDdrMtpaye(): ?string
    {
        return $this->ddrMtpaye;
    }

    public function setDdrMtpaye(?string $ddrMtpaye): self
    {
        $this->ddrMtpaye = $ddrMtpaye;

        return $this;
    }

    public function getDdrCumuntreal(): ?string
    {
        return $this->ddrCumuntreal;
    }

    public function setDdrCumuntreal(?string $ddrCumuntreal): self
    {
        $this->ddrCumuntreal = $ddrCumuntreal;

        return $this;
    }

    public function getDdrPourexe(): ?string
    {
        return $this->ddrPourexe;
    }

    public function setDdrPourexe(?string $ddrPourexe): self
    {
        $this->ddrPourexe = $ddrPourexe;

        return $this;
    }

    public function getDdrMtregulpaye(): ?string
    {
        return $this->ddrMtregulpaye;
    }

    public function setDdrMtregulpaye(?string $ddrMtregulpaye): self
    {
        $this->ddrMtregulpaye = $ddrMtregulpaye;

        return $this;
    }

    public function getDdrUntregul(): ?string
    {
        return $this->ddrUntregul;
    }

    public function setDdrUntregul(?string $ddrUntregul): self
    {
        $this->ddrUntregul = $ddrUntregul;

        return $this;
    }

    public function getDdrMtcrepaye(): ?string
    {
        return $this->ddrMtcrepaye;
    }

    public function setDdrMtcrepaye(?string $ddrMtcrepaye): self
    {
        $this->ddrMtcrepaye = $ddrMtcrepaye;

        return $this;
    }

    public function getDdrUntcre(): ?string
    {
        return $this->ddrUntcre;
    }

    public function setDdrUntcre(?string $ddrUntcre): self
    {
        $this->ddrUntcre = $ddrUntcre;

        return $this;
    }

    public function getDdrPourexeregul(): ?string
    {
        return $this->ddrPourexeregul;
    }

    public function setDdrPourexeregul(?string $ddrPourexeregul): self
    {
        $this->ddrPourexeregul = $ddrPourexeregul;

        return $this;
    }

    public function getDdrPourexecre(): ?string
    {
        return $this->ddrPourexecre;
    }

    public function setDdrPourexecre(?string $ddrPourexecre): self
    {
        $this->ddrPourexecre = $ddrPourexecre;

        return $this;
    }

    public function getDdrType(): ?string
    {
        return $this->ddrType;
    }

    public function setDdrType(?string $ddrType): self
    {
        $this->ddrType = $ddrType;

        return $this;
    }

    public function getDdrPxunite(): ?string
    {
        return $this->ddrPxunite;
    }

    public function setDdrPxunite(?string $ddrPxunite): self
    {
        $this->ddrPxunite = $ddrPxunite;

        return $this;
    }

    public function getDdrUntprev(): ?string
    {
        return $this->ddrUntprev;
    }

    public function setDdrUntprev(?string $ddrUntprev): self
    {
        $this->ddrUntprev = $ddrUntprev;

        return $this;
    }

    public function getDdrDate(): ?\DateTimeInterface
    {
        return $this->ddrDate;
    }

    public function setDdrDate(?\DateTimeInterface $ddrDate): self
    {
        $this->ddrDate = $ddrDate;

        return $this;
    }

    public function getDdrSstype(): ?string
    {
        return $this->ddrSstype;
    }

    public function setDdrSstype(?string $ddrSstype): self
    {
        $this->ddrSstype = $ddrSstype;

        return $this;
    }

    public function getDdrObjet(): ?string
    {
        return $this->ddrObjet;
    }

    public function setDdrObjet(?string $ddrObjet): self
    {
        $this->ddrObjet = $ddrObjet;

        return $this;
    }

    public function getDdrMtinitial(): ?string
    {
        return $this->ddrMtinitial;
    }

    public function setDdrMtinitial(?string $ddrMtinitial): self
    {
        $this->ddrMtinitial = $ddrMtinitial;

        return $this;
    }

    public function getDdpIdSstraitant(): ?DdePaiement
    {
        return $this->ddpIdSstraitant;
    }

    public function setDdpIdSstraitant(?DdePaiement $ddpIdSstraitant): self
    {
        $this->ddpIdSstraitant = $ddpIdSstraitant;

        return $this;
    }


}
