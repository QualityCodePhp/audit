<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffreAireRecrut
 *
 * @ORM\Table(name="offre_aire_recrut", uniqueConstraints={@ORM\UniqueConstraint(name="offre_aire_recrut_pk", columns={"offair_id"})}, indexes={@ORM\Index(name="ref_off_air_recrut_fk", columns={"ref_id_aire_recrut"}), @ORM\Index(name="off_off_aire_recrut_fk", columns={"off_id"})})
 * @ORM\Entity
 */
class OffreAireRecrut
{
    /**
     * @var string
     *
     * @ORM\Column(name="offair_id", type="decimal", precision=8, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="offre_aire_recrut_offair_id_seq", allocationSize=1, initialValue=1)
     */
    private $offairId;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_id", referencedColumnName="off_id")
     * })
     */
    private $off;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_aire_recrut", referencedColumnName="ref_id")
     * })
     */
    private $refIdAireRecrut;

    public function getOffairId(): ?string
    {
        return $this->offairId;
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

    public function getRefIdAireRecrut(): ?Referentiel
    {
        return $this->refIdAireRecrut;
    }

    public function setRefIdAireRecrut(?Referentiel $refIdAireRecrut): self
    {
        $this->refIdAireRecrut = $refIdAireRecrut;

        return $this;
    }


}
