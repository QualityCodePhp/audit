<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecRecond
 *
 * @ORM\Table(name="rec_recond", uniqueConstraints={@ORM\UniqueConstraint(name="rec_recond_pk", columns={"rrd_id"})})
 * @ORM\Entity
 */
class RecRecond
{
    /**
     * @var string
     *
     * @ORM\Column(name="rrd_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rec_recond_rrd_id_seq", allocationSize=1, initialValue=1)
     */
    private $rrdId;

    /**
     * @var string
     *
     * @ORM\Column(name="rrd_codedev", type="string", length=10, nullable=false)
     */
    private $rrdCodedev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rrd_origine", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $rrdOrigine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rrd_destin", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $rrdDestin;

    /**
     * @var string
     *
     * @ORM\Column(name="rrd_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $rrdAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rrd_datec", type="datetime", nullable=false)
     */
    private $rrdDatec;

    public function getRrdId(): ?string
    {
        return $this->rrdId;
    }

    public function getRrdCodedev(): ?string
    {
        return $this->rrdCodedev;
    }

    public function setRrdCodedev(string $rrdCodedev): self
    {
        $this->rrdCodedev = $rrdCodedev;

        return $this;
    }

    public function getRrdOrigine(): ?string
    {
        return $this->rrdOrigine;
    }

    public function setRrdOrigine(?string $rrdOrigine): self
    {
        $this->rrdOrigine = $rrdOrigine;

        return $this;
    }

    public function getRrdDestin(): ?string
    {
        return $this->rrdDestin;
    }

    public function setRrdDestin(?string $rrdDestin): self
    {
        $this->rrdDestin = $rrdDestin;

        return $this;
    }

    public function getRrdAuteurc(): ?string
    {
        return $this->rrdAuteurc;
    }

    public function setRrdAuteurc(string $rrdAuteurc): self
    {
        $this->rrdAuteurc = $rrdAuteurc;

        return $this;
    }

    public function getRrdDatec(): ?\DateTimeInterface
    {
        return $this->rrdDatec;
    }

    public function setRrdDatec(\DateTimeInterface $rrdDatec): self
    {
        $this->rrdDatec = $rrdDatec;

        return $this;
    }


}
