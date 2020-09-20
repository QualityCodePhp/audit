<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Validrealcre
 *
 * @ORM\Table(name="validrealcre", uniqueConstraints={@ORM\UniqueConstraint(name="validrealcre_pk", columns={"vrc_id"})})
 * @ORM\Entity
 */
class Validrealcre
{
    /**
     * @var string
     *
     * @ORM\Column(name="vrc_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="validrealcre_vrc_id_seq", allocationSize=1, initialValue=1)
     */
    private $vrcId;

    /**
     * @var string
     *
     * @ORM\Column(name="vrc_offre", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $vrcOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="vrc_bordereau", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $vrcBordereau;

    /**
     * @var string
     *
     * @ORM\Column(name="vrc_rbordereau", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $vrcRbordereau;

    /**
     * @var string
     *
     * @ORM\Column(name="vrc_reponse", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $vrcReponse;

    /**
     * @var string
     *
     * @ORM\Column(name="vrc_type", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $vrcType;

    /**
     * @var string
     *
     * @ORM\Column(name="vrc_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $vrcEtat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vrc_mois", type="decimal", precision=2, scale=0, nullable=true)
     */
    private $vrcMois;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vrc_annee", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $vrcAnnee;

    public function getVrcId(): ?string
    {
        return $this->vrcId;
    }

    public function getVrcOffre(): ?string
    {
        return $this->vrcOffre;
    }

    public function setVrcOffre(string $vrcOffre): self
    {
        $this->vrcOffre = $vrcOffre;

        return $this;
    }

    public function getVrcBordereau(): ?string
    {
        return $this->vrcBordereau;
    }

    public function setVrcBordereau(string $vrcBordereau): self
    {
        $this->vrcBordereau = $vrcBordereau;

        return $this;
    }

    public function getVrcRbordereau(): ?string
    {
        return $this->vrcRbordereau;
    }

    public function setVrcRbordereau(string $vrcRbordereau): self
    {
        $this->vrcRbordereau = $vrcRbordereau;

        return $this;
    }

    public function getVrcReponse(): ?string
    {
        return $this->vrcReponse;
    }

    public function setVrcReponse(string $vrcReponse): self
    {
        $this->vrcReponse = $vrcReponse;

        return $this;
    }

    public function getVrcType(): ?string
    {
        return $this->vrcType;
    }

    public function setVrcType(string $vrcType): self
    {
        $this->vrcType = $vrcType;

        return $this;
    }

    public function getVrcEtat(): ?string
    {
        return $this->vrcEtat;
    }

    public function setVrcEtat(string $vrcEtat): self
    {
        $this->vrcEtat = $vrcEtat;

        return $this;
    }

    public function getVrcMois(): ?string
    {
        return $this->vrcMois;
    }

    public function setVrcMois(?string $vrcMois): self
    {
        $this->vrcMois = $vrcMois;

        return $this;
    }

    public function getVrcAnnee(): ?string
    {
        return $this->vrcAnnee;
    }

    public function setVrcAnnee(?string $vrcAnnee): self
    {
        $this->vrcAnnee = $vrcAnnee;

        return $this;
    }


}
