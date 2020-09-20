<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DcGrille
 *
 * @ORM\Table(name="dc_grille", uniqueConstraints={@ORM\UniqueConstraint(name="dc_grille_pk", columns={"dcg_id"})})
 * @ORM\Entity
 */
class DcGrille
{
    /**
     * @var int
     *
     * @ORM\Column(name="dcg_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dc_grille_dcg_id_seq", allocationSize=1, initialValue=1)
     */
    private $dcgId;

    /**
     * @var string
     *
     * @ORM\Column(name="dcg_libelle", type="string", length=50, nullable=false)
     */
    private $dcgLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="dcg_formule", type="string", length=500, nullable=false)
     */
    private $dcgFormule;

    public function getDcgId(): ?int
    {
        return $this->dcgId;
    }

    public function getDcgLibelle(): ?string
    {
        return $this->dcgLibelle;
    }

    public function setDcgLibelle(string $dcgLibelle): self
    {
        $this->dcgLibelle = $dcgLibelle;

        return $this;
    }

    public function getDcgFormule(): ?string
    {
        return $this->dcgFormule;
    }

    public function setDcgFormule(string $dcgFormule): self
    {
        $this->dcgFormule = $dcgFormule;

        return $this;
    }


}
