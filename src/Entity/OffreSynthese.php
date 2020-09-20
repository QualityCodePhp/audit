<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffreSynthese
 *
 * @ORM\Table(name="offre_synthese", uniqueConstraints={@ORM\UniqueConstraint(name="offre_synthese_pk", columns={"ofs_id"})}, indexes={@ORM\Index(name="off_id_fk", columns={"off_id"})})
 * @ORM\Entity
 */
class OffreSynthese
{
    /**
     * @var int
     *
     * @ORM\Column(name="ofs_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="offre_synthese_ofs_id_seq", allocationSize=1, initialValue=1)
     */
    private $ofsId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ofs_dt_der_maj", type="date", nullable=false)
     */
    private $ofsDtDerMaj;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofs_dispositif", type="string", length=50, nullable=true)
     */
    private $ofsDispositif;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ofs_date_debut_af", type="datetime", nullable=true)
     */
    private $ofsDateDebutAf;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ofs_date_fin_af", type="datetime", nullable=true)
     */
    private $ofsDateFinAf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofs_libelle_mandataire", type="string", length=2000, nullable=true)
     */
    private $ofsLibelleMandataire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofs_libelle_cotraitant", type="string", length=2000, nullable=true)
     */
    private $ofsLibelleCotraitant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofs_ref_marche", type="string", length=200, nullable=true)
     */
    private $ofsRefMarche;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofs_type_offre", type="string", length=50, nullable=true)
     */
    private $ofsTypeOffre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofs_programme", type="string", length=50, nullable=true)
     */
    private $ofsProgramme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ofs_reconduction", type="string", length=10, nullable=true)
     */
    private $ofsReconduction;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_id", referencedColumnName="off_id")
     * })
     */
    private $off;

    public function getOfsId(): ?int
    {
        return $this->ofsId;
    }

    public function getOfsDtDerMaj(): ?\DateTimeInterface
    {
        return $this->ofsDtDerMaj;
    }

    public function setOfsDtDerMaj(\DateTimeInterface $ofsDtDerMaj): self
    {
        $this->ofsDtDerMaj = $ofsDtDerMaj;

        return $this;
    }

    public function getOfsDispositif(): ?string
    {
        return $this->ofsDispositif;
    }

    public function setOfsDispositif(?string $ofsDispositif): self
    {
        $this->ofsDispositif = $ofsDispositif;

        return $this;
    }

    public function getOfsDateDebutAf(): ?\DateTimeInterface
    {
        return $this->ofsDateDebutAf;
    }

    public function setOfsDateDebutAf(?\DateTimeInterface $ofsDateDebutAf): self
    {
        $this->ofsDateDebutAf = $ofsDateDebutAf;

        return $this;
    }

    public function getOfsDateFinAf(): ?\DateTimeInterface
    {
        return $this->ofsDateFinAf;
    }

    public function setOfsDateFinAf(?\DateTimeInterface $ofsDateFinAf): self
    {
        $this->ofsDateFinAf = $ofsDateFinAf;

        return $this;
    }

    public function getOfsLibelleMandataire(): ?string
    {
        return $this->ofsLibelleMandataire;
    }

    public function setOfsLibelleMandataire(?string $ofsLibelleMandataire): self
    {
        $this->ofsLibelleMandataire = $ofsLibelleMandataire;

        return $this;
    }

    public function getOfsLibelleCotraitant(): ?string
    {
        return $this->ofsLibelleCotraitant;
    }

    public function setOfsLibelleCotraitant(?string $ofsLibelleCotraitant): self
    {
        $this->ofsLibelleCotraitant = $ofsLibelleCotraitant;

        return $this;
    }

    public function getOfsRefMarche(): ?string
    {
        return $this->ofsRefMarche;
    }

    public function setOfsRefMarche(?string $ofsRefMarche): self
    {
        $this->ofsRefMarche = $ofsRefMarche;

        return $this;
    }

    public function getOfsTypeOffre(): ?string
    {
        return $this->ofsTypeOffre;
    }

    public function setOfsTypeOffre(?string $ofsTypeOffre): self
    {
        $this->ofsTypeOffre = $ofsTypeOffre;

        return $this;
    }

    public function getOfsProgramme(): ?string
    {
        return $this->ofsProgramme;
    }

    public function setOfsProgramme(?string $ofsProgramme): self
    {
        $this->ofsProgramme = $ofsProgramme;

        return $this;
    }

    public function getOfsReconduction(): ?string
    {
        return $this->ofsReconduction;
    }

    public function setOfsReconduction(?string $ofsReconduction): self
    {
        $this->ofsReconduction = $ofsReconduction;

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


}
