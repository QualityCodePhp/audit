<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Simulfse
 *
 * @ORM\Table(name="simulfse", uniqueConstraints={@ORM\UniqueConstraint(name="simulfse_pk", columns={"sim_id"})}, indexes={@ORM\Index(name="simulfse_ccif", columns={"sim_commande"}), @ORM\Index(name="simulfse_fdfif", columns={"sim_fsedispo"}), @ORM\Index(name="simulfse_ppif", columns={"sim_programme"})})
 * @ORM\Entity
 */
class Simulfse
{
    /**
     * @var string
     *
     * @ORM\Column(name="sim_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="simulfse_sim_id_seq", allocationSize=1, initialValue=1)
     */
    private $simId;

    /**
     * @var string
     *
     * @ORM\Column(name="sim_type", type="string", length=1, nullable=false, options={"comment"="'S' : simulation / 'P' : Programmation"})
     */
    private $simType;

    /**
     * @var string
     *
     * @ORM\Column(name="sim_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $simEtat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sim_htotal", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $simHtotal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sim_mnttotal", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $simMnttotal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sim_nbstagelig", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $simNbstagelig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sim_nbhelig", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $simNbhelig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sim_mntprelig", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $simMntprelig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sim_remuelig", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $simRemuelig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sim_mnttotelig", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $simMnttotelig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sim_mntprfse", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $simMntprfse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sim_remufse", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $simRemufse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sim_mnttotfse", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $simMnttotfse;

    /**
     * @var string
     *
     * @ORM\Column(name="sim_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $simAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sim_datec", type="datetime", nullable=false)
     */
    private $simDatec;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sim_datee", type="datetime", nullable=false)
     */
    private $simDatee;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sim_commande", referencedColumnName="cmd_id")
     * })
     */
    private $simCommande;

    /**
     * @var \FseDispo
     *
     * @ORM\ManyToOne(targetEntity="FseDispo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sim_fsedispo", referencedColumnName="fsi_id")
     * })
     */
    private $simFsedispo;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sim_programme", referencedColumnName="prg_id")
     * })
     */
    private $simProgramme;

    public function getSimId(): ?string
    {
        return $this->simId;
    }

    public function getSimType(): ?string
    {
        return $this->simType;
    }

    public function setSimType(string $simType): self
    {
        $this->simType = $simType;

        return $this;
    }

    public function getSimEtat(): ?string
    {
        return $this->simEtat;
    }

    public function setSimEtat(string $simEtat): self
    {
        $this->simEtat = $simEtat;

        return $this;
    }

    public function getSimHtotal(): ?string
    {
        return $this->simHtotal;
    }

    public function setSimHtotal(?string $simHtotal): self
    {
        $this->simHtotal = $simHtotal;

        return $this;
    }

    public function getSimMnttotal(): ?string
    {
        return $this->simMnttotal;
    }

    public function setSimMnttotal(?string $simMnttotal): self
    {
        $this->simMnttotal = $simMnttotal;

        return $this;
    }

    public function getSimNbstagelig(): ?string
    {
        return $this->simNbstagelig;
    }

    public function setSimNbstagelig(?string $simNbstagelig): self
    {
        $this->simNbstagelig = $simNbstagelig;

        return $this;
    }

    public function getSimNbhelig(): ?string
    {
        return $this->simNbhelig;
    }

    public function setSimNbhelig(?string $simNbhelig): self
    {
        $this->simNbhelig = $simNbhelig;

        return $this;
    }

    public function getSimMntprelig(): ?string
    {
        return $this->simMntprelig;
    }

    public function setSimMntprelig(?string $simMntprelig): self
    {
        $this->simMntprelig = $simMntprelig;

        return $this;
    }

    public function getSimRemuelig(): ?string
    {
        return $this->simRemuelig;
    }

    public function setSimRemuelig(?string $simRemuelig): self
    {
        $this->simRemuelig = $simRemuelig;

        return $this;
    }

    public function getSimMnttotelig(): ?string
    {
        return $this->simMnttotelig;
    }

    public function setSimMnttotelig(?string $simMnttotelig): self
    {
        $this->simMnttotelig = $simMnttotelig;

        return $this;
    }

    public function getSimMntprfse(): ?string
    {
        return $this->simMntprfse;
    }

    public function setSimMntprfse(?string $simMntprfse): self
    {
        $this->simMntprfse = $simMntprfse;

        return $this;
    }

    public function getSimRemufse(): ?string
    {
        return $this->simRemufse;
    }

    public function setSimRemufse(?string $simRemufse): self
    {
        $this->simRemufse = $simRemufse;

        return $this;
    }

    public function getSimMnttotfse(): ?string
    {
        return $this->simMnttotfse;
    }

    public function setSimMnttotfse(?string $simMnttotfse): self
    {
        $this->simMnttotfse = $simMnttotfse;

        return $this;
    }

    public function getSimAuteurc(): ?string
    {
        return $this->simAuteurc;
    }

    public function setSimAuteurc(string $simAuteurc): self
    {
        $this->simAuteurc = $simAuteurc;

        return $this;
    }

    public function getSimDatec(): ?\DateTimeInterface
    {
        return $this->simDatec;
    }

    public function setSimDatec(\DateTimeInterface $simDatec): self
    {
        $this->simDatec = $simDatec;

        return $this;
    }

    public function getSimDatee(): ?\DateTimeInterface
    {
        return $this->simDatee;
    }

    public function setSimDatee(\DateTimeInterface $simDatee): self
    {
        $this->simDatee = $simDatee;

        return $this;
    }

    public function getSimCommande(): ?Commande
    {
        return $this->simCommande;
    }

    public function setSimCommande(?Commande $simCommande): self
    {
        $this->simCommande = $simCommande;

        return $this;
    }

    public function getSimFsedispo(): ?FseDispo
    {
        return $this->simFsedispo;
    }

    public function setSimFsedispo(?FseDispo $simFsedispo): self
    {
        $this->simFsedispo = $simFsedispo;

        return $this;
    }

    public function getSimProgramme(): ?Programme
    {
        return $this->simProgramme;
    }

    public function setSimProgramme(?Programme $simProgramme): self
    {
        $this->simProgramme = $simProgramme;

        return $this;
    }


}
