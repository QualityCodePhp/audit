<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rythme
 *
 * @ORM\Table(name="rythme", uniqueConstraints={@ORM\UniqueConstraint(name="rythme_pk", columns={"ryt_id"})})
 * @ORM\Entity
 */
class Rythme
{
    /**
     * @var int
     *
     * @ORM\Column(name="ryt_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rythme_ryt_id_seq", allocationSize=1, initialValue=1)
     */
    private $rytId;

    /**
     * @var string
     *
     * @ORM\Column(name="ryt_code", type="string", length=3, nullable=false)
     */
    private $rytCode;

    /**
     * @var string
     *
     * @ORM\Column(name="ryt_libelle", type="string", length=50, nullable=false)
     */
    private $rytLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="ryt_maxhebdo", type="decimal", precision=4, scale=2, nullable=false)
     */
    private $rytMaxhebdo;

    /**
     * @var string
     *
     * @ORM\Column(name="ryt_codedev", type="string", length=10, nullable=false, options={"comment"="Donne le Sens du test (Donnee CodeDev MaxHbdo)"})
     */
    private $rytCodedev;

    public function getRytId(): ?int
    {
        return $this->rytId;
    }

    public function getRytCode(): ?string
    {
        return $this->rytCode;
    }

    public function setRytCode(string $rytCode): self
    {
        $this->rytCode = $rytCode;

        return $this;
    }

    public function getRytLibelle(): ?string
    {
        return $this->rytLibelle;
    }

    public function setRytLibelle(string $rytLibelle): self
    {
        $this->rytLibelle = $rytLibelle;

        return $this;
    }

    public function getRytMaxhebdo(): ?string
    {
        return $this->rytMaxhebdo;
    }

    public function setRytMaxhebdo(string $rytMaxhebdo): self
    {
        $this->rytMaxhebdo = $rytMaxhebdo;

        return $this;
    }

    public function getRytCodedev(): ?string
    {
        return $this->rytCodedev;
    }

    public function setRytCodedev(string $rytCodedev): self
    {
        $this->rytCodedev = $rytCodedev;

        return $this;
    }


}
