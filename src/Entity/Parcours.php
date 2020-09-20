<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parcours
 *
 * @ORM\Table(name="parcours", uniqueConstraints={@ORM\UniqueConstraint(name="parcours_pk", columns={"parc_id"})}, indexes={@ORM\Index(name="ind_parc_fk", columns={"ind_id"})})
 * @ORM\Entity
 */
class Parcours
{
    /**
     * @var string
     *
     * @ORM\Column(name="parc_id", type="decimal", precision=12, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="parcours_parc_id_seq", allocationSize=1, initialValue=1)
     */
    private $parcId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parc_libelle", type="string", length=500, nullable=true)
     */
    private $parcLibelle;

    /**
     * @var \Individu
     *
     * @ORM\ManyToOne(targetEntity="Individu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ind_id", referencedColumnName="ind_id")
     * })
     */
    private $ind;

    public function getParcId(): ?string
    {
        return $this->parcId;
    }

    public function getParcLibelle(): ?string
    {
        return $this->parcLibelle;
    }

    public function setParcLibelle(?string $parcLibelle): self
    {
        $this->parcLibelle = $parcLibelle;

        return $this;
    }

    public function getInd(): ?Individu
    {
        return $this->ind;
    }

    public function setInd(?Individu $ind): self
    {
        $this->ind = $ind;

        return $this;
    }


}
