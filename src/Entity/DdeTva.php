<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DdeTva
 *
 * @ORM\Table(name="dde_tva", uniqueConstraints={@ORM\UniqueConstraint(name="dde_tva_pk", columns={"ddt_id"})})
 * @ORM\Entity
 */
class DdeTva
{
    /**
     * @var string
     *
     * @ORM\Column(name="ddt_id", type="decimal", precision=6, scale=0, nullable=false, options={"comment"="Identifiant du detail de TVA"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dde_tva_ddt_id_seq", allocationSize=1, initialValue=1)
     */
    private $ddtId;

    /**
     * @var string
     *
     * @ORM\Column(name="ddt_paiement", type="decimal", precision=6, scale=0, nullable=false, options={"comment"="Demande Paiement_ID (Identifiant de la table DDE_PAIEMENT)"})
     */
    private $ddtPaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="ddt_offre", type="decimal", precision=6, scale=0, nullable=false, options={"comment"="Offre_ID (Identifiant de la table OFFRE)"})
     */
    private $ddtOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="ddt_reponse", type="decimal", precision=6, scale=0, nullable=false, options={"comment"="Reponse_ID (Identifiant de la table REPONSE)"})
     */
    private $ddtReponse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddt_taux1", type="decimal", precision=6, scale=2, nullable=true, options={"comment"="Memorisation du taux de TVA 1"})
     */
    private $ddtTaux1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddt_base1", type="decimal", precision=8, scale=2, nullable=true, options={"comment"="Base de la TVA 1"})
     */
    private $ddtBase1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddt_mnttva1", type="decimal", precision=8, scale=2, nullable=true, options={"comment"="Montant TVA 1"})
     */
    private $ddtMnttva1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddt_taux2", type="decimal", precision=6, scale=2, nullable=true, options={"comment"="Memorisation du taux de TVA 2"})
     */
    private $ddtTaux2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddt_base2", type="decimal", precision=8, scale=2, nullable=true, options={"comment"="Base de la TVA 2"})
     */
    private $ddtBase2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddt_mnttva2", type="decimal", precision=8, scale=2, nullable=true, options={"comment"="Montant TVA 2"})
     */
    private $ddtMnttva2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddt_taux3", type="decimal", precision=6, scale=2, nullable=true, options={"comment"="Memorisation du taux de TVA 3"})
     */
    private $ddtTaux3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddt_base3", type="decimal", precision=8, scale=2, nullable=true, options={"comment"="Base de la TVA 3"})
     */
    private $ddtBase3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddt_mnttva3", type="decimal", precision=8, scale=2, nullable=true, options={"comment"="Montant TVA 3"})
     */
    private $ddtMnttva3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddt_taux4", type="decimal", precision=6, scale=2, nullable=true, options={"comment"="Memorisation du taux de TVA 4"})
     */
    private $ddtTaux4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddt_base4", type="decimal", precision=8, scale=2, nullable=true, options={"comment"="Base de la TVA 4"})
     */
    private $ddtBase4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddt_mnttva4", type="decimal", precision=8, scale=2, nullable=true, options={"comment"="Montant TVA 4"})
     */
    private $ddtMnttva4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddt_taux5", type="decimal", precision=6, scale=2, nullable=true, options={"comment"="Memorisation du taux de TVA 5"})
     */
    private $ddtTaux5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddt_base5", type="decimal", precision=8, scale=2, nullable=true, options={"comment"="Base de la TVA 5"})
     */
    private $ddtBase5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddt_mnttva5", type="decimal", precision=8, scale=2, nullable=true, options={"comment"="Montant TVA 5"})
     */
    private $ddtMnttva5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddt_total", type="decimal", precision=8, scale=2, nullable=true, options={"comment"="Montant TTC Global"})
     */
    private $ddtTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="ddt_auteurc", type="decimal", precision=6, scale=0, nullable=false, options={"comment"="Auteur Creation_ID"})
     */
    private $ddtAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ddt_datec", type="datetime", nullable=false, options={"comment"="Date Creation"})
     */
    private $ddtDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ddt_auteurm", type="decimal", precision=6, scale=0, nullable=true, options={"comment"="Auteur Modification_ID"})
     */
    private $ddtAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ddt_datem", type="datetime", nullable=true, options={"comment"="Date Modification"})
     */
    private $ddtDatem;

    public function getDdtId(): ?string
    {
        return $this->ddtId;
    }

    public function getDdtPaiement(): ?string
    {
        return $this->ddtPaiement;
    }

    public function setDdtPaiement(string $ddtPaiement): self
    {
        $this->ddtPaiement = $ddtPaiement;

        return $this;
    }

    public function getDdtOffre(): ?string
    {
        return $this->ddtOffre;
    }

    public function setDdtOffre(string $ddtOffre): self
    {
        $this->ddtOffre = $ddtOffre;

        return $this;
    }

    public function getDdtReponse(): ?string
    {
        return $this->ddtReponse;
    }

    public function setDdtReponse(string $ddtReponse): self
    {
        $this->ddtReponse = $ddtReponse;

        return $this;
    }

    public function getDdtTaux1(): ?string
    {
        return $this->ddtTaux1;
    }

    public function setDdtTaux1(?string $ddtTaux1): self
    {
        $this->ddtTaux1 = $ddtTaux1;

        return $this;
    }

    public function getDdtBase1(): ?string
    {
        return $this->ddtBase1;
    }

    public function setDdtBase1(?string $ddtBase1): self
    {
        $this->ddtBase1 = $ddtBase1;

        return $this;
    }

    public function getDdtMnttva1(): ?string
    {
        return $this->ddtMnttva1;
    }

    public function setDdtMnttva1(?string $ddtMnttva1): self
    {
        $this->ddtMnttva1 = $ddtMnttva1;

        return $this;
    }

    public function getDdtTaux2(): ?string
    {
        return $this->ddtTaux2;
    }

    public function setDdtTaux2(?string $ddtTaux2): self
    {
        $this->ddtTaux2 = $ddtTaux2;

        return $this;
    }

    public function getDdtBase2(): ?string
    {
        return $this->ddtBase2;
    }

    public function setDdtBase2(?string $ddtBase2): self
    {
        $this->ddtBase2 = $ddtBase2;

        return $this;
    }

    public function getDdtMnttva2(): ?string
    {
        return $this->ddtMnttva2;
    }

    public function setDdtMnttva2(?string $ddtMnttva2): self
    {
        $this->ddtMnttva2 = $ddtMnttva2;

        return $this;
    }

    public function getDdtTaux3(): ?string
    {
        return $this->ddtTaux3;
    }

    public function setDdtTaux3(?string $ddtTaux3): self
    {
        $this->ddtTaux3 = $ddtTaux3;

        return $this;
    }

    public function getDdtBase3(): ?string
    {
        return $this->ddtBase3;
    }

    public function setDdtBase3(?string $ddtBase3): self
    {
        $this->ddtBase3 = $ddtBase3;

        return $this;
    }

    public function getDdtMnttva3(): ?string
    {
        return $this->ddtMnttva3;
    }

    public function setDdtMnttva3(?string $ddtMnttva3): self
    {
        $this->ddtMnttva3 = $ddtMnttva3;

        return $this;
    }

    public function getDdtTaux4(): ?string
    {
        return $this->ddtTaux4;
    }

    public function setDdtTaux4(?string $ddtTaux4): self
    {
        $this->ddtTaux4 = $ddtTaux4;

        return $this;
    }

    public function getDdtBase4(): ?string
    {
        return $this->ddtBase4;
    }

    public function setDdtBase4(?string $ddtBase4): self
    {
        $this->ddtBase4 = $ddtBase4;

        return $this;
    }

    public function getDdtMnttva4(): ?string
    {
        return $this->ddtMnttva4;
    }

    public function setDdtMnttva4(?string $ddtMnttva4): self
    {
        $this->ddtMnttva4 = $ddtMnttva4;

        return $this;
    }

    public function getDdtTaux5(): ?string
    {
        return $this->ddtTaux5;
    }

    public function setDdtTaux5(?string $ddtTaux5): self
    {
        $this->ddtTaux5 = $ddtTaux5;

        return $this;
    }

    public function getDdtBase5(): ?string
    {
        return $this->ddtBase5;
    }

    public function setDdtBase5(?string $ddtBase5): self
    {
        $this->ddtBase5 = $ddtBase5;

        return $this;
    }

    public function getDdtMnttva5(): ?string
    {
        return $this->ddtMnttva5;
    }

    public function setDdtMnttva5(?string $ddtMnttva5): self
    {
        $this->ddtMnttva5 = $ddtMnttva5;

        return $this;
    }

    public function getDdtTotal(): ?string
    {
        return $this->ddtTotal;
    }

    public function setDdtTotal(?string $ddtTotal): self
    {
        $this->ddtTotal = $ddtTotal;

        return $this;
    }

    public function getDdtAuteurc(): ?string
    {
        return $this->ddtAuteurc;
    }

    public function setDdtAuteurc(string $ddtAuteurc): self
    {
        $this->ddtAuteurc = $ddtAuteurc;

        return $this;
    }

    public function getDdtDatec(): ?\DateTimeInterface
    {
        return $this->ddtDatec;
    }

    public function setDdtDatec(\DateTimeInterface $ddtDatec): self
    {
        $this->ddtDatec = $ddtDatec;

        return $this;
    }

    public function getDdtAuteurm(): ?string
    {
        return $this->ddtAuteurm;
    }

    public function setDdtAuteurm(?string $ddtAuteurm): self
    {
        $this->ddtAuteurm = $ddtAuteurm;

        return $this;
    }

    public function getDdtDatem(): ?\DateTimeInterface
    {
        return $this->ddtDatem;
    }

    public function setDdtDatem(?\DateTimeInterface $ddtDatem): self
    {
        $this->ddtDatem = $ddtDatem;

        return $this;
    }


}
