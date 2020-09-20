<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TraitementMessage
 *
 * @ORM\Table(name="traitement_message", uniqueConstraints={@ORM\UniqueConstraint(name="traitement_message_pk", columns={"tmg_id"})}, indexes={@ORM\Index(name="trt_tmg_fk", columns={"trt_id"})})
 * @ORM\Entity
 */
class TraitementMessage
{
    /**
     * @var int
     *
     * @ORM\Column(name="tmg_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="traitement_message_tmg_id_seq", allocationSize=1, initialValue=1)
     */
    private $tmgId;

    /**
     * @var string
     *
     * @ORM\Column(name="tmg_code_gravite", type="string", length=5, nullable=false)
     */
    private $tmgCodeGravite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tmg_date_du_message", type="date", nullable=false)
     */
    private $tmgDateDuMessage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tmg_message", type="string", length=300, nullable=true)
     */
    private $tmgMessage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tmg_categorie", type="string", length=200, nullable=true)
     */
    private $tmgCategorie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tmg_info_comp", type="string", length=4000, nullable=true)
     */
    private $tmgInfoComp;

    /**
     * @var \Traitement
     *
     * @ORM\ManyToOne(targetEntity="Traitement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="trt_id", referencedColumnName="trt_id")
     * })
     */
    private $trt;

    public function getTmgId(): ?int
    {
        return $this->tmgId;
    }

    public function getTmgCodeGravite(): ?string
    {
        return $this->tmgCodeGravite;
    }

    public function setTmgCodeGravite(string $tmgCodeGravite): self
    {
        $this->tmgCodeGravite = $tmgCodeGravite;

        return $this;
    }

    public function getTmgDateDuMessage(): ?\DateTimeInterface
    {
        return $this->tmgDateDuMessage;
    }

    public function setTmgDateDuMessage(\DateTimeInterface $tmgDateDuMessage): self
    {
        $this->tmgDateDuMessage = $tmgDateDuMessage;

        return $this;
    }

    public function getTmgMessage(): ?string
    {
        return $this->tmgMessage;
    }

    public function setTmgMessage(?string $tmgMessage): self
    {
        $this->tmgMessage = $tmgMessage;

        return $this;
    }

    public function getTmgCategorie(): ?string
    {
        return $this->tmgCategorie;
    }

    public function setTmgCategorie(?string $tmgCategorie): self
    {
        $this->tmgCategorie = $tmgCategorie;

        return $this;
    }

    public function getTmgInfoComp(): ?string
    {
        return $this->tmgInfoComp;
    }

    public function setTmgInfoComp(?string $tmgInfoComp): self
    {
        $this->tmgInfoComp = $tmgInfoComp;

        return $this;
    }

    public function getTrt(): ?Traitement
    {
        return $this->trt;
    }

    public function setTrt(?Traitement $trt): self
    {
        $this->trt = $trt;

        return $this;
    }


}
