<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sessionp
 *
 * @ORM\Table(name="sessionp", uniqueConstraints={@ORM\UniqueConstraint(name="sessionp_pk", columns={"sep_id"})}, indexes={@ORM\Index(name="sep_rep_fk", columns={"rep_id"}), @ORM\Index(name="sessionp_rbmif", columns={"sep_rbordereau"}), @ORM\Index(name="sessionp_bbif", columns={"sep_bordereau"}), @ORM\Index(name="sessionp_ofif", columns={"sep_offre"})})
 * @ORM\Entity
 */
class Sessionp
{
    /**
     * @var string
     *
     * @ORM\Column(name="sep_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sessionp_sep_id_seq", allocationSize=1, initialValue=1)
     */
    private $sepId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sep_date", type="datetime", nullable=false)
     */
    private $sepDate;

    /**
     * @var string
     *
     * @ORM\Column(name="sep_periode", type="decimal", precision=6, scale=0, nullable=false, options={"comment"="1 : Matin / 2 : AprÃ©s midi / 3 : Soir"})
     */
    private $sepPeriode;

    /**
     * @var string
     *
     * @ORM\Column(name="sep_nbheure", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $sepNbheure;

    /**
     * @var \Reponse
     *
     * @ORM\ManyToOne(targetEntity="Reponse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_id", referencedColumnName="rep_id")
     * })
     */
    private $rep;

    /**
     * @var \Bordereau
     *
     * @ORM\ManyToOne(targetEntity="Bordereau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sep_bordereau", referencedColumnName="bdp_id")
     * })
     */
    private $sepBordereau;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sep_offre", referencedColumnName="off_id")
     * })
     */
    private $sepOffre;

    /**
     * @var \RRecette
     *
     * @ORM\ManyToOne(targetEntity="RRecette")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sep_rbordereau", referencedColumnName="rmp_id")
     * })
     */
    private $sepRbordereau;

    public function getSepId(): ?string
    {
        return $this->sepId;
    }

    public function getSepDate(): ?\DateTimeInterface
    {
        return $this->sepDate;
    }

    public function setSepDate(\DateTimeInterface $sepDate): self
    {
        $this->sepDate = $sepDate;

        return $this;
    }

    public function getSepPeriode(): ?string
    {
        return $this->sepPeriode;
    }

    public function setSepPeriode(string $sepPeriode): self
    {
        $this->sepPeriode = $sepPeriode;

        return $this;
    }

    public function getSepNbheure(): ?string
    {
        return $this->sepNbheure;
    }

    public function setSepNbheure(string $sepNbheure): self
    {
        $this->sepNbheure = $sepNbheure;

        return $this;
    }

    public function getRep(): ?Reponse
    {
        return $this->rep;
    }

    public function setRep(?Reponse $rep): self
    {
        $this->rep = $rep;

        return $this;
    }

    public function getSepBordereau(): ?Bordereau
    {
        return $this->sepBordereau;
    }

    public function setSepBordereau(?Bordereau $sepBordereau): self
    {
        $this->sepBordereau = $sepBordereau;

        return $this;
    }

    public function getSepOffre(): ?Offre
    {
        return $this->sepOffre;
    }

    public function setSepOffre(?Offre $sepOffre): self
    {
        $this->sepOffre = $sepOffre;

        return $this;
    }

    public function getSepRbordereau(): ?RRecette
    {
        return $this->sepRbordereau;
    }

    public function setSepRbordereau(?RRecette $sepRbordereau): self
    {
        $this->sepRbordereau = $sepRbordereau;

        return $this;
    }


}
