<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compteur
 *
 * @ORM\Table(name="compteur", uniqueConstraints={@ORM\UniqueConstraint(name="compteur_pk", columns={"cpt_id"})})
 * @ORM\Entity
 */
class Compteur
{
    /**
     * @var string
     *
     * @ORM\Column(name="cpt_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="compteur_cpt_id_seq", allocationSize=1, initialValue=1)
     */
    private $cptId;

    /**
     * @var string
     *
     * @ORM\Column(name="cpt_code", type="string", length=4, nullable=false)
     */
    private $cptCode;

    /**
     * @var string
     *
     * @ORM\Column(name="cpt_libelle", type="string", length=50, nullable=false)
     */
    private $cptLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="cpt_valeur", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $cptValeur;

    /**
     * @var string
     *
     * @ORM\Column(name="cpt_lmaxi", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $cptLmaxi;

    public function getCptId(): ?string
    {
        return $this->cptId;
    }

    public function getCptCode(): ?string
    {
        return $this->cptCode;
    }

    public function setCptCode(string $cptCode): self
    {
        $this->cptCode = $cptCode;

        return $this;
    }

    public function getCptLibelle(): ?string
    {
        return $this->cptLibelle;
    }

    public function setCptLibelle(string $cptLibelle): self
    {
        $this->cptLibelle = $cptLibelle;

        return $this;
    }

    public function getCptValeur(): ?string
    {
        return $this->cptValeur;
    }

    public function setCptValeur(string $cptValeur): self
    {
        $this->cptValeur = $cptValeur;

        return $this;
    }

    public function getCptLmaxi(): ?string
    {
        return $this->cptLmaxi;
    }

    public function setCptLmaxi(string $cptLmaxi): self
    {
        $this->cptLmaxi = $cptLmaxi;

        return $this;
    }


}
