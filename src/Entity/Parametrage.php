<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametrage
 *
 * @ORM\Table(name="parametrage", uniqueConstraints={@ORM\UniqueConstraint(name="parametrage_pk", columns={"par_id"})}, indexes={@ORM\Index(name="parametrage_a_pour_type_fk", columns={"ref_id"})})
 * @ORM\Entity
 */
class Parametrage
{
    /**
     * @var int
     *
     * @ORM\Column(name="par_id", type="integer", nullable=false, options={"comment"="Identifiant unique du paramÃ©trage"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="parametrage_par_id_seq", allocationSize=1, initialValue=1)
     */
    private $parId;

    /**
     * @var string
     *
     * @ORM\Column(name="par_code", type="string", length=50, nullable=false, options={"comment"="Code du paramÃ©trage"})
     */
    private $parCode;

    /**
     * @var string
     *
     * @ORM\Column(name="par_libelle", type="string", length=200, nullable=false, options={"comment"="LibellÃ© du paramÃ©trage"})
     */
    private $parLibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="par_flg_dispo", type="decimal", precision=1, scale=0, nullable=true, options={"comment"="Flag dÃ©finissant si le paramÃ©trage est associable aux dispositifs"})
     */
    private $parFlgDispo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="par_flg_actif", type="decimal", precision=1, scale=0, nullable=true, options={"comment"="Flag dÃ©finissant si le paramÃ©trage est actif"})
     */
    private $parFlgActif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="par_valeur", type="string", length=200, nullable=true, options={"comment"="Valeur du paramÃ©trage"})
     */
    private $parValeur;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id", referencedColumnName="ref_id")
     * })
     */
    private $ref;

    public function getParId(): ?int
    {
        return $this->parId;
    }

    public function getParCode(): ?string
    {
        return $this->parCode;
    }

    public function setParCode(string $parCode): self
    {
        $this->parCode = $parCode;

        return $this;
    }

    public function getParLibelle(): ?string
    {
        return $this->parLibelle;
    }

    public function setParLibelle(string $parLibelle): self
    {
        $this->parLibelle = $parLibelle;

        return $this;
    }

    public function getParFlgDispo(): ?string
    {
        return $this->parFlgDispo;
    }

    public function setParFlgDispo(?string $parFlgDispo): self
    {
        $this->parFlgDispo = $parFlgDispo;

        return $this;
    }

    public function getParFlgActif(): ?string
    {
        return $this->parFlgActif;
    }

    public function setParFlgActif(?string $parFlgActif): self
    {
        $this->parFlgActif = $parFlgActif;

        return $this;
    }

    public function getParValeur(): ?string
    {
        return $this->parValeur;
    }

    public function setParValeur(?string $parValeur): self
    {
        $this->parValeur = $parValeur;

        return $this;
    }

    public function getRef(): ?Referentiel
    {
        return $this->ref;
    }

    public function setRef(?Referentiel $ref): self
    {
        $this->ref = $ref;

        return $this;
    }


}
