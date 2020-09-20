<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeHistoAvenants
 *
 * @ORM\Table(name="de_histo_avenants", uniqueConstraints={@ORM\UniqueConstraint(name="de_histo_avenants_pk", columns={"dha_id"})}, indexes={@ORM\Index(name="relation_27_fk", columns={"off_id"})})
 * @ORM\Entity
 */
class DeHistoAvenants
{
    /**
     * @var string
     *
     * @ORM\Column(name="dha_id", type="decimal", precision=12, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="de_histo_avenants_dha_id_seq", allocationSize=1, initialValue=1)
     */
    private $dhaId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dha_datev", type="date", nullable=true)
     */
    private $dhaDatev;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_id", referencedColumnName="off_id")
     * })
     */
    private $off;

    public function getDhaId(): ?string
    {
        return $this->dhaId;
    }

    public function getDhaDatev(): ?\DateTimeInterface
    {
        return $this->dhaDatev;
    }

    public function setDhaDatev(?\DateTimeInterface $dhaDatev): self
    {
        $this->dhaDatev = $dhaDatev;

        return $this;
    }

    public function getOff(): ?Offre
    {
        return $this->off;
    }

    public function setOff(?Offre $off): self
    {
        $this->off = $off;

        return $this;
    }


}
