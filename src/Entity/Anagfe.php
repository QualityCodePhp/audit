<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anagfe
 *
 * @ORM\Table(name="anagfe", uniqueConstraints={@ORM\UniqueConstraint(name="anagfe_pk", columns={"ang_id"})}, indexes={@ORM\Index(name="anagfe_ang_zezif", columns={"ang_zoemploi"}), @ORM\Index(name="anagfe_ang_co_ccif", columns={"ang_commande"}), @ORM\Index(name="anagfe_ang_ets_eeif", columns={"ang_ets"}), @ORM\Index(name="anagfe_ang_gfe___gfe_gfe_id_fk", columns={"ang_gfe"}), @ORM\Index(name="anagfe_ang_pro_ppif", columns={"ang_programme"})})
 * @ORM\Entity
 */
class Anagfe
{
    /**
     * @var string
     *
     * @ORM\Column(name="ang_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="anagfe_ang_id_seq", allocationSize=1, initialValue=1)
     */
    private $angId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ang_mnttotal", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $angMnttotal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ang_htotal", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $angHtotal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ang_etshtotal", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $angEtshtotal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ang_etshremu", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $angEtshremu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ang_etsmntremu", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $angEtsmntremu;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ang_commande", referencedColumnName="cmd_id")
     * })
     */
    private $angCommande;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ang_ets", referencedColumnName="ets_id")
     * })
     */
    private $angEts;

    /**
     * @var \Gfe
     *
     * @ORM\ManyToOne(targetEntity="Gfe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ang_gfe", referencedColumnName="gfe_id")
     * })
     */
    private $angGfe;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ang_programme", referencedColumnName="prg_id")
     * })
     */
    private $angProgramme;

    /**
     * @var \ZoneEmploi
     *
     * @ORM\ManyToOne(targetEntity="ZoneEmploi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ang_zoemploi", referencedColumnName="zoe_id")
     * })
     */
    private $angZoemploi;

    public function getAngId(): ?string
    {
        return $this->angId;
    }

    public function getAngMnttotal(): ?string
    {
        return $this->angMnttotal;
    }

    public function setAngMnttotal(?string $angMnttotal): self
    {
        $this->angMnttotal = $angMnttotal;

        return $this;
    }

    public function getAngHtotal(): ?string
    {
        return $this->angHtotal;
    }

    public function setAngHtotal(?string $angHtotal): self
    {
        $this->angHtotal = $angHtotal;

        return $this;
    }

    public function getAngEtshtotal(): ?string
    {
        return $this->angEtshtotal;
    }

    public function setAngEtshtotal(?string $angEtshtotal): self
    {
        $this->angEtshtotal = $angEtshtotal;

        return $this;
    }

    public function getAngEtshremu(): ?string
    {
        return $this->angEtshremu;
    }

    public function setAngEtshremu(?string $angEtshremu): self
    {
        $this->angEtshremu = $angEtshremu;

        return $this;
    }

    public function getAngEtsmntremu(): ?string
    {
        return $this->angEtsmntremu;
    }

    public function setAngEtsmntremu(?string $angEtsmntremu): self
    {
        $this->angEtsmntremu = $angEtsmntremu;

        return $this;
    }

    public function getAngCommande(): ?Commande
    {
        return $this->angCommande;
    }

    public function setAngCommande(?Commande $angCommande): self
    {
        $this->angCommande = $angCommande;

        return $this;
    }

    public function getAngEts(): ?Etablssmt
    {
        return $this->angEts;
    }

    public function setAngEts(?Etablssmt $angEts): self
    {
        $this->angEts = $angEts;

        return $this;
    }

    public function getAngGfe(): ?Gfe
    {
        return $this->angGfe;
    }

    public function setAngGfe(?Gfe $angGfe): self
    {
        $this->angGfe = $angGfe;

        return $this;
    }

    public function getAngProgramme(): ?Programme
    {
        return $this->angProgramme;
    }

    public function setAngProgramme(?Programme $angProgramme): self
    {
        $this->angProgramme = $angProgramme;

        return $this;
    }

    public function getAngZoemploi(): ?ZoneEmploi
    {
        return $this->angZoemploi;
    }

    public function setAngZoemploi(?ZoneEmploi $angZoemploi): self
    {
        $this->angZoemploi = $angZoemploi;

        return $this;
    }


}
