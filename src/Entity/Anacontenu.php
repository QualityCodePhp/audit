<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anacontenu
 *
 * @ORM\Table(name="anacontenu", uniqueConstraints={@ORM\UniqueConstraint(name="anacontenu_pk", columns={"anc_id"})}, indexes={@ORM\Index(name="anacontenu_anc_ccif", columns={"anc_commande"}), @ORM\Index(name="anacontenu_anc_ppif", columns={"anc_programme"})})
 * @ORM\Entity
 */
class Anacontenu
{
    /**
     * @var string
     *
     * @ORM\Column(name="anc_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="anacontenu_anc_id_seq", allocationSize=1, initialValue=1)
     */
    private $ancId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="anc_gfe", type="string", length=100, nullable=true)
     */
    private $ancGfe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="anc_poidsgfe", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $ancPoidsgfe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="anc_mesure", type="string", length=50, nullable=true)
     */
    private $ancMesure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="anc_poidsmes", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $ancPoidsmes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="anc_mnttotal", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $ancMnttotal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="anc_htotal", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $ancHtotal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="anc_hremu", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $ancHremu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="anc_mntremu", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $ancMntremu;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="anc_commande", referencedColumnName="cmd_id")
     * })
     */
    private $ancCommande;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="anc_programme", referencedColumnName="prg_id")
     * })
     */
    private $ancProgramme;

    public function getAncId(): ?string
    {
        return $this->ancId;
    }

    public function getAncGfe(): ?string
    {
        return $this->ancGfe;
    }

    public function setAncGfe(?string $ancGfe): self
    {
        $this->ancGfe = $ancGfe;

        return $this;
    }

    public function getAncPoidsgfe(): ?string
    {
        return $this->ancPoidsgfe;
    }

    public function setAncPoidsgfe(?string $ancPoidsgfe): self
    {
        $this->ancPoidsgfe = $ancPoidsgfe;

        return $this;
    }

    public function getAncMesure(): ?string
    {
        return $this->ancMesure;
    }

    public function setAncMesure(?string $ancMesure): self
    {
        $this->ancMesure = $ancMesure;

        return $this;
    }

    public function getAncPoidsmes(): ?string
    {
        return $this->ancPoidsmes;
    }

    public function setAncPoidsmes(?string $ancPoidsmes): self
    {
        $this->ancPoidsmes = $ancPoidsmes;

        return $this;
    }

    public function getAncMnttotal(): ?string
    {
        return $this->ancMnttotal;
    }

    public function setAncMnttotal(?string $ancMnttotal): self
    {
        $this->ancMnttotal = $ancMnttotal;

        return $this;
    }

    public function getAncHtotal(): ?string
    {
        return $this->ancHtotal;
    }

    public function setAncHtotal(?string $ancHtotal): self
    {
        $this->ancHtotal = $ancHtotal;

        return $this;
    }

    public function getAncHremu(): ?string
    {
        return $this->ancHremu;
    }

    public function setAncHremu(?string $ancHremu): self
    {
        $this->ancHremu = $ancHremu;

        return $this;
    }

    public function getAncMntremu(): ?string
    {
        return $this->ancMntremu;
    }

    public function setAncMntremu(?string $ancMntremu): self
    {
        $this->ancMntremu = $ancMntremu;

        return $this;
    }

    public function getAncCommande(): ?Commande
    {
        return $this->ancCommande;
    }

    public function setAncCommande(?Commande $ancCommande): self
    {
        $this->ancCommande = $ancCommande;

        return $this;
    }

    public function getAncProgramme(): ?Programme
    {
        return $this->ancProgramme;
    }

    public function setAncProgramme(?Programme $ancProgramme): self
    {
        $this->ancProgramme = $ancProgramme;

        return $this;
    }


}
