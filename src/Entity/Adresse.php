<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresse
 *
 * @ORM\Table(name="adresse", uniqueConstraints={@ORM\UniqueConstraint(name="adresse_pk", columns={"adr_id"})}, indexes={@ORM\Index(name="ref_adr_nature_voie_fk", columns={"ref_id_nature_voie"}), @ORM\Index(name="ref_adr_indice_rep_fk", columns={"ref_id_indice_rep_voie"}), @ORM\Index(name="ref_adr_pays_fk", columns={"ref_id_pays"})})
 * @ORM\Entity
 */
class Adresse
{
    /**
     * @var string
     *
     * @ORM\Column(name="adr_id", type="decimal", precision=12, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="adresse_adr_id_seq", allocationSize=1, initialValue=1)
     */
    private $adrId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adr_ligne_2", type="string", length=38, nullable=true)
     */
    private $adrLigne2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adr_ligne_3", type="string", length=38, nullable=true)
     */
    private $adrLigne3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adr_num_voie", type="string", length=4, nullable=true)
     */
    private $adrNumVoie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adr_libelle_voie", type="string", length=30, nullable=true)
     */
    private $adrLibelleVoie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adr_ligne_5", type="string", length=38, nullable=true)
     */
    private $adrLigne5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adr_code_postal", type="string", length=5, nullable=true)
     */
    private $adrCodePostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adr_ville", type="string", length=94, nullable=true)
     */
    private $adrVille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adr_code_insee", type="string", length=5, nullable=true)
     */
    private $adrCodeInsee;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel", fetch="EAGER")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_indice_rep_voie", referencedColumnName="ref_id")
     * })
     */
    private $refIdIndiceRepVoie;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel", fetch="EAGER")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_nature_voie", referencedColumnName="ref_id")
     * })
     */
    private $refIdNatureVoie;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel", fetch="EAGER")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_pays", referencedColumnName="ref_id")
     * })
     */
    private $refIdPays;

    public function getAdrId(): ?string
    {
        return $this->adrId;
    }

    public function getAdrLigne2(): ?string
    {
        return $this->adrLigne2;
    }

    public function setAdrLigne2(?string $adrLigne2): self
    {
        $this->adrLigne2 = $adrLigne2;

        return $this;
    }

    public function getAdrLigne3(): ?string
    {
        return $this->adrLigne3;
    }

    public function setAdrLigne3(?string $adrLigne3): self
    {
        $this->adrLigne3 = $adrLigne3;

        return $this;
    }

    public function getAdrNumVoie(): ?string
    {
        return $this->adrNumVoie;
    }

    public function setAdrNumVoie(?string $adrNumVoie): self
    {
        $this->adrNumVoie = $adrNumVoie;

        return $this;
    }

    public function getAdrLibelleVoie(): ?string
    {
        return $this->adrLibelleVoie;
    }

    public function setAdrLibelleVoie(?string $adrLibelleVoie): self
    {
        $this->adrLibelleVoie = $adrLibelleVoie;

        return $this;
    }

    public function getAdrLigne5(): ?string
    {
        return $this->adrLigne5;
    }

    public function setAdrLigne5(?string $adrLigne5): self
    {
        $this->adrLigne5 = $adrLigne5;

        return $this;
    }

    public function getAdrCodePostal(): ?string
    {
        return $this->adrCodePostal;
    }

    public function setAdrCodePostal(?string $adrCodePostal): self
    {
        $this->adrCodePostal = $adrCodePostal;

        return $this;
    }

    public function getAdrVille(): ?string
    {
        return $this->adrVille;
    }

    public function setAdrVille(?string $adrVille): self
    {
        $this->adrVille = $adrVille;

        return $this;
    }

    public function getAdrCodeInsee(): ?string
    {
        return $this->adrCodeInsee;
    }

    public function setAdrCodeInsee(?string $adrCodeInsee): self
    {
        $this->adrCodeInsee = $adrCodeInsee;

        return $this;
    }

    public function getRefIdIndiceRepVoie(): ?Referentiel
    {
        return $this->refIdIndiceRepVoie;
    }

    public function setRefIdIndiceRepVoie(?Referentiel $refIdIndiceRepVoie): self
    {
        $this->refIdIndiceRepVoie = $refIdIndiceRepVoie;

        return $this;
    }

    public function getRefIdNatureVoie(): ?Referentiel
    {
        return $this->refIdNatureVoie;
    }

    public function setRefIdNatureVoie(?Referentiel $refIdNatureVoie): self
    {
        $this->refIdNatureVoie = $refIdNatureVoie;

        return $this;
    }

    public function getRefIdPays(): ?Referentiel
    {
        return $this->refIdPays;
    }

    public function setRefIdPays(?Referentiel $refIdPays): self
    {
        $this->refIdPays = $refIdPays;

        return $this;
    }


}
