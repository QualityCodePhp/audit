<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PerReponse
 *
 * @ORM\Table(name="per_reponse", uniqueConstraints={@ORM\UniqueConstraint(name="per_reponse_pk", columns={"prp_id"})}, indexes={@ORM\Index(name="per_reponse_upuif", columns={"prp_uniteref"}), @ORM\Index(name="per_reponse_rrif", columns={"prp_reponse"})})
 * @ORM\Entity
 */
class PerReponse
{
    /**
     * @var int
     *
     * @ORM\Column(name="prp_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="per_reponse_prp_id_seq", allocationSize=1, initialValue=1)
     */
    private $prpId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prp_datedeb", type="datetime", nullable=false)
     */
    private $prpDatedeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prp_datefin", type="datetime", nullable=false)
     */
    private $prpDatefin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prp_nbhentrep", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $prpNbhentrep;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prp_nbhcentre", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $prpNbhcentre;

    /**
     * @var string
     *
     * @ORM\Column(name="prp_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $prpAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prp_datec", type="datetime", nullable=false)
     */
    private $prpDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prp_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $prpAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prp_datem", type="datetime", nullable=true)
     */
    private $prpDatem;

    /**
     * @var \Reponse
     *
     * @ORM\ManyToOne(targetEntity="Reponse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prp_reponse", referencedColumnName="rep_id")
     * })
     */
    private $prpReponse;

    /**
     * @var \UnitePrest
     *
     * @ORM\ManyToOne(targetEntity="UnitePrest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prp_uniteref", referencedColumnName="unp_id")
     * })
     */
    private $prpUniteref;

    public function getPrpId(): ?int
    {
        return $this->prpId;
    }

    public function getPrpDatedeb(): ?\DateTimeInterface
    {
        return $this->prpDatedeb;
    }

    public function setPrpDatedeb(\DateTimeInterface $prpDatedeb): self
    {
        $this->prpDatedeb = $prpDatedeb;

        return $this;
    }

    public function getPrpDatefin(): ?\DateTimeInterface
    {
        return $this->prpDatefin;
    }

    public function setPrpDatefin(\DateTimeInterface $prpDatefin): self
    {
        $this->prpDatefin = $prpDatefin;

        return $this;
    }

    public function getPrpNbhentrep(): ?string
    {
        return $this->prpNbhentrep;
    }

    public function setPrpNbhentrep(?string $prpNbhentrep): self
    {
        $this->prpNbhentrep = $prpNbhentrep;

        return $this;
    }

    public function getPrpNbhcentre(): ?string
    {
        return $this->prpNbhcentre;
    }

    public function setPrpNbhcentre(?string $prpNbhcentre): self
    {
        $this->prpNbhcentre = $prpNbhcentre;

        return $this;
    }

    public function getPrpAuteurc(): ?string
    {
        return $this->prpAuteurc;
    }

    public function setPrpAuteurc(string $prpAuteurc): self
    {
        $this->prpAuteurc = $prpAuteurc;

        return $this;
    }

    public function getPrpDatec(): ?\DateTimeInterface
    {
        return $this->prpDatec;
    }

    public function setPrpDatec(\DateTimeInterface $prpDatec): self
    {
        $this->prpDatec = $prpDatec;

        return $this;
    }

    public function getPrpAuteurm(): ?string
    {
        return $this->prpAuteurm;
    }

    public function setPrpAuteurm(?string $prpAuteurm): self
    {
        $this->prpAuteurm = $prpAuteurm;

        return $this;
    }

    public function getPrpDatem(): ?\DateTimeInterface
    {
        return $this->prpDatem;
    }

    public function setPrpDatem(?\DateTimeInterface $prpDatem): self
    {
        $this->prpDatem = $prpDatem;

        return $this;
    }

    public function getPrpReponse(): ?Reponse
    {
        return $this->prpReponse;
    }

    public function setPrpReponse(?Reponse $prpReponse): self
    {
        $this->prpReponse = $prpReponse;

        return $this;
    }

    public function getPrpUniteref(): ?UnitePrest
    {
        return $this->prpUniteref;
    }

    public function setPrpUniteref(?UnitePrest $prpUniteref): self
    {
        $this->prpUniteref = $prpUniteref;

        return $this;
    }


}
