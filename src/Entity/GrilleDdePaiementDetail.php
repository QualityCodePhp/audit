<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrilleDdePaiementDetail
 *
 * @ORM\Table(name="grille_dde_paiement_detail", uniqueConstraints={@ORM\UniqueConstraint(name="grille_dde_paiement_detail_pk", columns={"gpd_id"})}, indexes={@ORM\Index(name="gpd_bdp_fk", columns={"bdp_id"}), @ORM\Index(name="gdp_mpr_fk", columns={"mpr_id"}), @ORM\Index(name="gdp_gpa_fk", columns={"gpa_id"})})
 * @ORM\Entity
 */
class GrilleDdePaiementDetail
{
    /**
     * @var int
     *
     * @ORM\Column(name="gpd_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="grille_dde_paiement_detail_gpd_id_seq", allocationSize=1, initialValue=1)
     */
    private $gpdId;

    /**
     * @var string
     *
     * @ORM\Column(name="gpd_mois", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $gpdMois;

    /**
     * @var string
     *
     * @ORM\Column(name="gpd_annee", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $gpdAnnee;

    /**
     * @var string
     *
     * @ORM\Column(name="gpd_prix", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $gpdPrix;

    /**
     * @var \GrilleDdePaiement
     *
     * @ORM\ManyToOne(targetEntity="GrilleDdePaiement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gpa_id", referencedColumnName="gpa_id")
     * })
     */
    private $gpa;

    /**
     * @var \RBordereau
     *
     * @ORM\ManyToOne(targetEntity="RBordereau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mpr_id", referencedColumnName="mpr_id")
     * })
     */
    private $mpr;

    /**
     * @var \Bordereau
     *
     * @ORM\ManyToOne(targetEntity="Bordereau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bdp_id", referencedColumnName="bdp_id")
     * })
     */
    private $bdp;

    public function getGpdId(): ?int
    {
        return $this->gpdId;
    }

    public function getGpdMois(): ?string
    {
        return $this->gpdMois;
    }

    public function setGpdMois(string $gpdMois): self
    {
        $this->gpdMois = $gpdMois;

        return $this;
    }

    public function getGpdAnnee(): ?string
    {
        return $this->gpdAnnee;
    }

    public function setGpdAnnee(string $gpdAnnee): self
    {
        $this->gpdAnnee = $gpdAnnee;

        return $this;
    }

    public function getGpdPrix(): ?string
    {
        return $this->gpdPrix;
    }

    public function setGpdPrix(string $gpdPrix): self
    {
        $this->gpdPrix = $gpdPrix;

        return $this;
    }

    public function getGpa(): ?GrilleDdePaiement
    {
        return $this->gpa;
    }

    public function setGpa(?GrilleDdePaiement $gpa): self
    {
        $this->gpa = $gpa;

        return $this;
    }

    public function getMpr(): ?RBordereau
    {
        return $this->mpr;
    }

    public function setMpr(?RBordereau $mpr): self
    {
        $this->mpr = $mpr;

        return $this;
    }

    public function getBdp(): ?Bordereau
    {
        return $this->bdp;
    }

    public function setBdp(?Bordereau $bdp): self
    {
        $this->bdp = $bdp;

        return $this;
    }


}
