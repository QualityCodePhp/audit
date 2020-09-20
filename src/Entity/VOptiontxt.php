<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VOptiontxt
 *
 * @ORM\Table(name="v_optiontxt", uniqueConstraints={@ORM\UniqueConstraint(name="v_optiontxt_pk", columns={"vot_id"})}, indexes={@ORM\Index(name="reference_463_fk", columns={"off_off_id"}), @ORM\Index(name="v_optiontxt_vccif", columns={"vot_commande"}), @ORM\Index(name="v_optiontxt_totif", columns={"vot_opttxt"}), @ORM\Index(name="v_optiontxt_ooif", columns={"vot_offre"}), @ORM\Index(name="v_optiontxt_mpmif", columns={"vot_modafprog"})})
 * @ORM\Entity
 */
class VOptiontxt
{
    /**
     * @var string
     *
     * @ORM\Column(name="vot_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="v_optiontxt_vot_id_seq", allocationSize=1, initialValue=1)
     */
    private $votId;

    /**
     * @var string
     *
     * @ORM\Column(name="vot_codedev", type="string", length=10, nullable=false)
     */
    private $votCodedev;

    /**
     * @var string
     *
     * @ORM\Column(name="vot_quand", type="string", length=5, nullable=false, options={"comment"="MPROG, CONST, OFFRE"})
     */
    private $votQuand;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vot_text", type="string", length=3000, nullable=true)
     */
    private $votText;

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
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vot_commande", referencedColumnName="cmd_id")
     * })
     */
    private $votCommande;

    /**
     * @var \ModafProg
     *
     * @ORM\ManyToOne(targetEntity="ModafProg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vot_modafprog", referencedColumnName="mop_id")
     * })
     */
    private $votModafprog;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vot_offre", referencedColumnName="off_id")
     * })
     */
    private $votOffre;

    /**
     * @var \TxtOmafprog
     *
     * @ORM\ManyToOne(targetEntity="TxtOmafprog")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vot_opttxt", referencedColumnName="tmp_id")
     * })
     */
    private $votOpttxt;

    public function getVotId(): ?string
    {
        return $this->votId;
    }

    public function getVotCodedev(): ?string
    {
        return $this->votCodedev;
    }

    public function setVotCodedev(string $votCodedev): self
    {
        $this->votCodedev = $votCodedev;

        return $this;
    }

    public function getVotQuand(): ?string
    {
        return $this->votQuand;
    }

    public function setVotQuand(string $votQuand): self
    {
        $this->votQuand = $votQuand;

        return $this;
    }

    public function getVotText(): ?string
    {
        return $this->votText;
    }

    public function setVotText(?string $votText): self
    {
        $this->votText = $votText;

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

    public function getVotCommande(): ?Commande
    {
        return $this->votCommande;
    }

    public function setVotCommande(?Commande $votCommande): self
    {
        $this->votCommande = $votCommande;

        return $this;
    }

    public function getVotModafprog(): ?ModafProg
    {
        return $this->votModafprog;
    }

    public function setVotModafprog(?ModafProg $votModafprog): self
    {
        $this->votModafprog = $votModafprog;

        return $this;
    }

    public function getVotOffre(): ?Offre
    {
        return $this->votOffre;
    }

    public function setVotOffre(?Offre $votOffre): self
    {
        $this->votOffre = $votOffre;

        return $this;
    }

    public function getVotOpttxt(): ?TxtOmafprog
    {
        return $this->votOpttxt;
    }

    public function setVotOpttxt(?TxtOmafprog $votOpttxt): self
    {
        $this->votOpttxt = $votOpttxt;

        return $this;
    }


}
