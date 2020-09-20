<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EttSa
 *
 * @ORM\Table(name="ett_sa", uniqueConstraints={@ORM\UniqueConstraint(name="ett_sa_pk", columns={"esa_id"})})
 * @ORM\Entity
 */
class EttSa
{
    /**
     * @var string
     *
     * @ORM\Column(name="esa_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ett_sa_esa_id_seq", allocationSize=1, initialValue=1)
     */
    private $esaId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="esa_prescripteur", type="string", length=10, nullable=true)
     */
    private $esaPrescripteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="esa_nbdea1", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $esaNbdea1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="esa_nbdeassedic", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $esaNbdeassedic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="esa_nbdeacc", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $esaNbdeacc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="esa_nbdeform", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $esaNbdeform;

    /**
     * @var string|null
     *
     * @ORM\Column(name="esa_nbdeformcr", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $esaNbdeformcr;

    public function getEsaId(): ?string
    {
        return $this->esaId;
    }

    public function getEsaPrescripteur(): ?string
    {
        return $this->esaPrescripteur;
    }

    public function setEsaPrescripteur(?string $esaPrescripteur): self
    {
        $this->esaPrescripteur = $esaPrescripteur;

        return $this;
    }

    public function getEsaNbdea1(): ?string
    {
        return $this->esaNbdea1;
    }

    public function setEsaNbdea1(?string $esaNbdea1): self
    {
        $this->esaNbdea1 = $esaNbdea1;

        return $this;
    }

    public function getEsaNbdeassedic(): ?string
    {
        return $this->esaNbdeassedic;
    }

    public function setEsaNbdeassedic(?string $esaNbdeassedic): self
    {
        $this->esaNbdeassedic = $esaNbdeassedic;

        return $this;
    }

    public function getEsaNbdeacc(): ?string
    {
        return $this->esaNbdeacc;
    }

    public function setEsaNbdeacc(?string $esaNbdeacc): self
    {
        $this->esaNbdeacc = $esaNbdeacc;

        return $this;
    }

    public function getEsaNbdeform(): ?string
    {
        return $this->esaNbdeform;
    }

    public function setEsaNbdeform(?string $esaNbdeform): self
    {
        $this->esaNbdeform = $esaNbdeform;

        return $this;
    }

    public function getEsaNbdeformcr(): ?string
    {
        return $this->esaNbdeformcr;
    }

    public function setEsaNbdeformcr(?string $esaNbdeformcr): self
    {
        $this->esaNbdeformcr = $esaNbdeformcr;

        return $this;
    }


}
