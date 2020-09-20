<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VOptionlst
 *
 * @ORM\Table(name="v_optionlst", uniqueConstraints={@ORM\UniqueConstraint(name="v_optionlst_pk", columns={"vol_id"})}, indexes={@ORM\Index(name="v_optionlst_mpmif", columns={"vol_modafprog"}), @ORM\Index(name="v_optionlst_ccif", columns={"vol_commande"}), @ORM\Index(name="v_optionlst_ooif", columns={"off_off_id"}), @ORM\Index(name="reference_464_fk", columns={"vol_offre"}), @ORM\Index(name="v_optionlst_totif", columns={"vol_optlst"})})
 * @ORM\Entity
 */
class VOptionlst
{
    /**
     * @var string
     *
     * @ORM\Column(name="vol_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="v_optionlst_vol_id_seq", allocationSize=1, initialValue=1)
     */
    private $volId;

    /**
     * @var string
     *
     * @ORM\Column(name="vol_codedev", type="string", length=10, nullable=false)
     */
    private $volCodedev;

    /**
     * @var string
     *
     * @ORM\Column(name="vol_quand", type="string", length=5, nullable=false, options={"comment"="MPROG, CONST, OFFRE"})
     */
    private $volQuand;

    /**
     * @var string
     *
     * @ORM\Column(name="vol_num", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $volNum;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vol_offre", referencedColumnName="off_id")
     * })
     */
    private $volOffre;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vol_commande", referencedColumnName="cmd_id")
     * })
     */
    private $volCommande;

    /**
     * @var \ModafProg
     *
     * @ORM\ManyToOne(targetEntity="ModafProg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vol_modafprog", referencedColumnName="mop_id")
     * })
     */
    private $volModafprog;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_off_id", referencedColumnName="off_id")
     * })
     */
    private $offOff;

    /**
     * @var \LstOmafprog
     *
     * @ORM\ManyToOne(targetEntity="LstOmafprog")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vol_optlst", referencedColumnName="lmp_id")
     * })
     */
    private $volOptlst;

    public function getVolId(): ?string
    {
        return $this->volId;
    }

    public function getVolCodedev(): ?string
    {
        return $this->volCodedev;
    }

    public function setVolCodedev(string $volCodedev): self
    {
        $this->volCodedev = $volCodedev;

        return $this;
    }

    public function getVolQuand(): ?string
    {
        return $this->volQuand;
    }

    public function setVolQuand(string $volQuand): self
    {
        $this->volQuand = $volQuand;

        return $this;
    }

    public function getVolNum(): ?string
    {
        return $this->volNum;
    }

    public function setVolNum(string $volNum): self
    {
        $this->volNum = $volNum;

        return $this;
    }

    public function getVolOffre(): ?Offre
    {
        return $this->volOffre;
    }

    public function setVolOffre(?Offre $volOffre): self
    {
        $this->volOffre = $volOffre;

        return $this;
    }

    public function getVolCommande(): ?Commande
    {
        return $this->volCommande;
    }

    public function setVolCommande(?Commande $volCommande): self
    {
        $this->volCommande = $volCommande;

        return $this;
    }

    public function getVolModafprog(): ?ModafProg
    {
        return $this->volModafprog;
    }

    public function setVolModafprog(?ModafProg $volModafprog): self
    {
        $this->volModafprog = $volModafprog;

        return $this;
    }

    public function getOffOff(): ?Offre
    {
        return $this->offOff;
    }

    public function setOffOff(?Offre $offOff): self
    {
        $this->offOff = $offOff;

        return $this;
    }

    public function getVolOptlst(): ?LstOmafprog
    {
        return $this->volOptlst;
    }

    public function setVolOptlst(?LstOmafprog $volOptlst): self
    {
        $this->volOptlst = $volOptlst;

        return $this;
    }


}
