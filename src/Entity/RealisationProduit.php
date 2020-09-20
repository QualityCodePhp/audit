<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RealisationProduit
 *
 * @ORM\Table(name="realisation_produit", uniqueConstraints={@ORM\UniqueConstraint(name="realisation_produit_pk", columns={"reap_id"})}, indexes={@ORM\Index(name="reap_utic_fk", columns={"uti_idc"}), @ORM\Index(name="reap_utim_fk", columns={"uti_idm"}), @ORM\Index(name="reap_off_fk", columns={"off_id"}), @ORM\Index(name="reap_pdt_fk", columns={"pdt_id"}), @ORM\Index(name="stg_reap_fk", columns={"stg_id"})})
 * @ORM\Entity
 */
class RealisationProduit
{
    /**
     * @var string
     *
     * @ORM\Column(name="reap_id", type="decimal", precision=8, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="realisation_produit_reap_id_seq", allocationSize=1, initialValue=1)
     */
    private $reapId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reap_nb_heure", type="decimal", precision=9, scale=1, nullable=true)
     */
    private $reapNbHeure;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="reap_datec", type="date", nullable=true)
     */
    private $reapDatec;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="reap_datem", type="date", nullable=true)
     */
    private $reapDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reap_flg_suppr", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $reapFlgSuppr;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_id", referencedColumnName="off_id")
     * })
     */
    private $off;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pdt_id", referencedColumnName="pdt_id")
     * })
     */
    private $pdt;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uti_idc", referencedColumnName="uti_id")
     * })
     */
    private $utiIdc;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uti_idm", referencedColumnName="uti_id")
     * })
     */
    private $utiIdm;

    /**
     * @var \Stagiaire
     *
     * @ORM\ManyToOne(targetEntity="Stagiaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stg_id", referencedColumnName="stg_id")
     * })
     */
    private $stg;

    public function getReapId(): ?string
    {
        return $this->reapId;
    }

    public function getReapNbHeure(): ?string
    {
        return $this->reapNbHeure;
    }

    public function setReapNbHeure(?string $reapNbHeure): self
    {
        $this->reapNbHeure = $reapNbHeure;

        return $this;
    }

    public function getReapDatec(): ?\DateTimeInterface
    {
        return $this->reapDatec;
    }

    public function setReapDatec(?\DateTimeInterface $reapDatec): self
    {
        $this->reapDatec = $reapDatec;

        return $this;
    }

    public function getReapDatem(): ?\DateTimeInterface
    {
        return $this->reapDatem;
    }

    public function setReapDatem(?\DateTimeInterface $reapDatem): self
    {
        $this->reapDatem = $reapDatem;

        return $this;
    }

    public function getReapFlgSuppr(): ?string
    {
        return $this->reapFlgSuppr;
    }

    public function setReapFlgSuppr(?string $reapFlgSuppr): self
    {
        $this->reapFlgSuppr = $reapFlgSuppr;

        return $this;
    }

    public function getOff(): ?Offre
    {
        return $this->off;
    }

    public function setOff(?Offre $off): self
    {
        $this->off = $off;

        return $this;
    }

    public function getPdt(): ?Produit
    {
        return $this->pdt;
    }

    public function setPdt(?Produit $pdt): self
    {
        $this->pdt = $pdt;

        return $this;
    }

    public function getUtiIdc(): ?Utilisateur
    {
        return $this->utiIdc;
    }

    public function setUtiIdc(?Utilisateur $utiIdc): self
    {
        $this->utiIdc = $utiIdc;

        return $this;
    }

    public function getUtiIdm(): ?Utilisateur
    {
        return $this->utiIdm;
    }

    public function setUtiIdm(?Utilisateur $utiIdm): self
    {
        $this->utiIdm = $utiIdm;

        return $this;
    }

    public function getStg(): ?Stagiaire
    {
        return $this->stg;
    }

    public function setStg(?Stagiaire $stg): self
    {
        $this->stg = $stg;

        return $this;
    }


}
