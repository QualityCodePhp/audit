<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acompte
 *
 * @ORM\Table(name="acompte", uniqueConstraints={@ORM\UniqueConstraint(name="acompte_pk", columns={"acp_id"})}, indexes={@ORM\Index(name="acompte_acp_offre_ofif", columns={"acp_offre"}), @ORM\Index(name="acompte_acp_bordereau_bbif", columns={"acp_bordereau"}), @ORM\Index(name="acompte_acp_reponse_rrif", columns={"acp_reponse"})})
 * @ORM\Entity
 */
class Acompte
{
    /**
     * @var string
     *
     * @ORM\Column(name="acp_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="acompte_acp_id_seq", allocationSize=1, initialValue=1)
     */
    private $acpId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="acp_datedeb", type="datetime", nullable=false)
     */
    private $acpDatedeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="acp_datefin", type="datetime", nullable=false)
     */
    private $acpDatefin;

    /**
     * @var string
     *
     * @ORM\Column(name="acp_pourc", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $acpPourc;

    /**
     * @var \Bordereau
     *
     * @ORM\ManyToOne(targetEntity="Bordereau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="acp_bordereau", referencedColumnName="bdp_id")
     * })
     */
    private $acpBordereau;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="acp_offre", referencedColumnName="off_id")
     * })
     */
    private $acpOffre;

    /**
     * @var \Reponse
     *
     * @ORM\ManyToOne(targetEntity="Reponse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="acp_reponse", referencedColumnName="rep_id")
     * })
     */
    private $acpReponse;

    public function getAcpId(): ?string
    {
        return $this->acpId;
    }

    public function getAcpDatedeb(): ?\DateTimeInterface
    {
        return $this->acpDatedeb;
    }

    public function setAcpDatedeb(\DateTimeInterface $acpDatedeb): self
    {
        $this->acpDatedeb = $acpDatedeb;

        return $this;
    }

    public function getAcpDatefin(): ?\DateTimeInterface
    {
        return $this->acpDatefin;
    }

    public function setAcpDatefin(\DateTimeInterface $acpDatefin): self
    {
        $this->acpDatefin = $acpDatefin;

        return $this;
    }

    public function getAcpPourc(): ?string
    {
        return $this->acpPourc;
    }

    public function setAcpPourc(string $acpPourc): self
    {
        $this->acpPourc = $acpPourc;

        return $this;
    }

    public function getAcpBordereau(): ?Bordereau
    {
        return $this->acpBordereau;
    }

    public function setAcpBordereau(?Bordereau $acpBordereau): self
    {
        $this->acpBordereau = $acpBordereau;

        return $this;
    }

    public function getAcpOffre(): ?Offre
    {
        return $this->acpOffre;
    }

    public function setAcpOffre(?Offre $acpOffre): self
    {
        $this->acpOffre = $acpOffre;

        return $this;
    }

    public function getAcpReponse(): ?Reponse
    {
        return $this->acpReponse;
    }

    public function setAcpReponse(?Reponse $acpReponse): self
    {
        $this->acpReponse = $acpReponse;

        return $this;
    }


}
