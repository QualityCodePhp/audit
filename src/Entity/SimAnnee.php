<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SimAnnee
 *
 * @ORM\Table(name="sim_annee", uniqueConstraints={@ORM\UniqueConstraint(name="sim_annee_pk", columns={"sia_id"})}, indexes={@ORM\Index(name="sim_annee_ssif", columns={"sia_simulfse"})})
 * @ORM\Entity
 */
class SimAnnee
{
    /**
     * @var string
     *
     * @ORM\Column(name="sia_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sim_annee_sia_id_seq", allocationSize=1, initialValue=1)
     */
    private $siaId;

    /**
     * @var string
     *
     * @ORM\Column(name="sia_annee", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $siaAnnee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sia_hannuel", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $siaHannuel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sia_mntestime", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $siaMntestime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sia_remu", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $siaRemu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sia_nbhelig", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $siaNbhelig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sia_mntprelig", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $siaMntprelig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sia_remuelig", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $siaRemuelig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sia_mnttotelig", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $siaMnttotelig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sia_mntprfse", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $siaMntprfse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sia_remufse", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $siaRemufse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sia_mnttotfse", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $siaMnttotfse;

    /**
     * @var \Simulfse
     *
     * @ORM\ManyToOne(targetEntity="Simulfse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sia_simulfse", referencedColumnName="sim_id")
     * })
     */
    private $siaSimulfse;

    public function getSiaId(): ?string
    {
        return $this->siaId;
    }

    public function getSiaAnnee(): ?string
    {
        return $this->siaAnnee;
    }

    public function setSiaAnnee(string $siaAnnee): self
    {
        $this->siaAnnee = $siaAnnee;

        return $this;
    }

    public function getSiaHannuel(): ?string
    {
        return $this->siaHannuel;
    }

    public function setSiaHannuel(?string $siaHannuel): self
    {
        $this->siaHannuel = $siaHannuel;

        return $this;
    }

    public function getSiaMntestime(): ?string
    {
        return $this->siaMntestime;
    }

    public function setSiaMntestime(?string $siaMntestime): self
    {
        $this->siaMntestime = $siaMntestime;

        return $this;
    }

    public function getSiaRemu(): ?string
    {
        return $this->siaRemu;
    }

    public function setSiaRemu(?string $siaRemu): self
    {
        $this->siaRemu = $siaRemu;

        return $this;
    }

    public function getSiaNbhelig(): ?string
    {
        return $this->siaNbhelig;
    }

    public function setSiaNbhelig(?string $siaNbhelig): self
    {
        $this->siaNbhelig = $siaNbhelig;

        return $this;
    }

    public function getSiaMntprelig(): ?string
    {
        return $this->siaMntprelig;
    }

    public function setSiaMntprelig(?string $siaMntprelig): self
    {
        $this->siaMntprelig = $siaMntprelig;

        return $this;
    }

    public function getSiaRemuelig(): ?string
    {
        return $this->siaRemuelig;
    }

    public function setSiaRemuelig(?string $siaRemuelig): self
    {
        $this->siaRemuelig = $siaRemuelig;

        return $this;
    }

    public function getSiaMnttotelig(): ?string
    {
        return $this->siaMnttotelig;
    }

    public function setSiaMnttotelig(?string $siaMnttotelig): self
    {
        $this->siaMnttotelig = $siaMnttotelig;

        return $this;
    }

    public function getSiaMntprfse(): ?string
    {
        return $this->siaMntprfse;
    }

    public function setSiaMntprfse(?string $siaMntprfse): self
    {
        $this->siaMntprfse = $siaMntprfse;

        return $this;
    }

    public function getSiaRemufse(): ?string
    {
        return $this->siaRemufse;
    }

    public function setSiaRemufse(?string $siaRemufse): self
    {
        $this->siaRemufse = $siaRemufse;

        return $this;
    }

    public function getSiaMnttotfse(): ?string
    {
        return $this->siaMnttotfse;
    }

    public function setSiaMnttotfse(?string $siaMnttotfse): self
    {
        $this->siaMnttotfse = $siaMnttotfse;

        return $this;
    }

    public function getSiaSimulfse(): ?Simulfse
    {
        return $this->siaSimulfse;
    }

    public function setSiaSimulfse(?Simulfse $siaSimulfse): self
    {
        $this->siaSimulfse = $siaSimulfse;

        return $this;
    }


}
