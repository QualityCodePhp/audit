<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametre
 *
 * @ORM\Table(name="parametre", uniqueConstraints={@ORM\UniqueConstraint(name="parametre_pk", columns={"prm_nom"})})
 * @ORM\Entity
 */
class Parametre
{
    /**
     * @var string
     *
     * @ORM\Column(name="prm_nom", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="parametre_prm_nom_seq", allocationSize=1, initialValue=1)
     */
    private $prmNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prm_description", type="string", length=200, nullable=true)
     */
    private $prmDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prm_valeur", type="string", length=2000, nullable=true)
     */
    private $prmValeur;

    public function getPrmNom(): ?string
    {
        return $this->prmNom;
    }

    public function getPrmDescription(): ?string
    {
        return $this->prmDescription;
    }

    public function setPrmDescription(?string $prmDescription): self
    {
        $this->prmDescription = $prmDescription;

        return $this;
    }

    public function getPrmValeur(): ?string
    {
        return $this->prmValeur;
    }

    public function setPrmValeur(?string $prmValeur): self
    {
        $this->prmValeur = $prmValeur;

        return $this;
    }


}
