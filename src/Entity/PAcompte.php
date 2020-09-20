<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PAcompte
 *
 * @ORM\Table(name="p_acompte", uniqueConstraints={@ORM\UniqueConstraint(name="p_acompte_pk", columns={"pac_id"})}, indexes={@ORM\Index(name="p_acompte_pepif", columns={"pac_echeanc"})})
 * @ORM\Entity
 */
class PAcompte
{
    /**
     * @var string
     *
     * @ORM\Column(name="pac_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="p_acompte_pac_id_seq", allocationSize=1, initialValue=1)
     */
    private $pacId;

    /**
     * @var string
     *
     * @ORM\Column(name="pac_rang", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $pacRang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pac_pourc", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $pacPourc;

    /**
     * @var \PEcheancier
     *
     * @ORM\ManyToOne(targetEntity="PEcheancier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pac_echeanc", referencedColumnName="pec_id")
     * })
     */
    private $pacEcheanc;

    public function getPacId(): ?string
    {
        return $this->pacId;
    }

    public function getPacRang(): ?string
    {
        return $this->pacRang;
    }

    public function setPacRang(string $pacRang): self
    {
        $this->pacRang = $pacRang;

        return $this;
    }

    public function getPacPourc(): ?string
    {
        return $this->pacPourc;
    }

    public function setPacPourc(?string $pacPourc): self
    {
        $this->pacPourc = $pacPourc;

        return $this;
    }

    public function getPacEcheanc(): ?PEcheancier
    {
        return $this->pacEcheanc;
    }

    public function setPacEcheanc(?PEcheancier $pacEcheanc): self
    {
        $this->pacEcheanc = $pacEcheanc;

        return $this;
    }


}
