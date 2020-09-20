<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Para
 *
 * @ORM\Table(name="para", uniqueConstraints={@ORM\UniqueConstraint(name="para_pk", columns={"par_code"})})
 * @ORM\Entity
 */
class Para
{
    /**
     * @var string
     *
     * @ORM\Column(name="par_code", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="para_par_code_seq", allocationSize=1, initialValue=1)
     */
    private $parCode;

    /**
     * @var string
     *
     * @ORM\Column(name="par_libelle", type="string", length=50, nullable=false)
     */
    private $parLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="par_valeur", type="string", length=200, nullable=false)
     */
    private $parValeur;

    public function getParCode(): ?string
    {
        return $this->parCode;
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

    public function getParValeur(): ?string
    {
        return $this->parValeur;
    }

    public function setParValeur(string $parValeur): self
    {
        $this->parValeur = $parValeur;

        return $this;
    }


}
