<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CodRecondc
 *
 * @ORM\Table(name="cod_recondc", uniqueConstraints={@ORM\UniqueConstraint(name="cod_recondc_pk", columns={"crc_id"})}, indexes={@ORM\Index(name="cod_recondc_ddif", columns={"crc_cmdinitial"}), @ORM\Index(name="cod_recondc_ccif3", columns={"crc_idcmdres"}), @ORM\Index(name="cod_recondc_ccif2", columns={"crc_idcmdorig"})})
 * @ORM\Entity
 */
class CodRecondc
{
    /**
     * @var string
     *
     * @ORM\Column(name="crc_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cod_recondc_crc_id_seq", allocationSize=1, initialValue=1)
     */
    private $crcId;

    /**
     * @var string
     *
     * @ORM\Column(name="crc_ordre", type="decimal", precision=2, scale=0, nullable=false, options={"comment"="Permet de trier les codes rÃ©servÃ© dans l'ordre prÃ©vu des annÃ©es de reconduction"})
     */
    private $crcOrdre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crc_codcmdorig", type="string", length=4, nullable=true)
     */
    private $crcCodcmdorig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crc_codcmdres", type="string", length=4, nullable=true)
     */
    private $crcCodcmdres;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crc_codlotorig", type="string", length=2, nullable=true)
     */
    private $crcCodlotorig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crc_codlotres", type="string", length=2, nullable=true)
     */
    private $crcCodlotres;

    /**
     * @var string
     *
     * @ORM\Column(name="crc_traite", type="decimal", precision=3, scale=0, nullable=false, options={"comment"="0 = non utilisÃ© lors d''une reconduction, 13 = utilisÃ© lors d''une reconduction"})
     */
    private $crcTraite;

    /**
     * @var string
     *
     * @ORM\Column(name="crc_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $crcAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="crc_datec", type="datetime", nullable=false)
     */
    private $crcDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crc_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $crcAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="crc_datem", type="datetime", nullable=true)
     */
    private $crcDatem;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="crc_cmdinitial", referencedColumnName="cmd_id")
     * })
     */
    private $crcCmdinitial;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="crc_idcmdorig", referencedColumnName="cmd_id")
     * })
     */
    private $crcIdcmdorig;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="crc_idcmdres", referencedColumnName="cmd_id")
     * })
     */
    private $crcIdcmdres;

    public function getCrcId(): ?string
    {
        return $this->crcId;
    }

    public function getCrcOrdre(): ?string
    {
        return $this->crcOrdre;
    }

    public function setCrcOrdre(string $crcOrdre): self
    {
        $this->crcOrdre = $crcOrdre;

        return $this;
    }

    public function getCrcCodcmdorig(): ?string
    {
        return $this->crcCodcmdorig;
    }

    public function setCrcCodcmdorig(?string $crcCodcmdorig): self
    {
        $this->crcCodcmdorig = $crcCodcmdorig;

        return $this;
    }

    public function getCrcCodcmdres(): ?string
    {
        return $this->crcCodcmdres;
    }

    public function setCrcCodcmdres(?string $crcCodcmdres): self
    {
        $this->crcCodcmdres = $crcCodcmdres;

        return $this;
    }

    public function getCrcCodlotorig(): ?string
    {
        return $this->crcCodlotorig;
    }

    public function setCrcCodlotorig(?string $crcCodlotorig): self
    {
        $this->crcCodlotorig = $crcCodlotorig;

        return $this;
    }

    public function getCrcCodlotres(): ?string
    {
        return $this->crcCodlotres;
    }

    public function setCrcCodlotres(?string $crcCodlotres): self
    {
        $this->crcCodlotres = $crcCodlotres;

        return $this;
    }

    public function getCrcTraite(): ?string
    {
        return $this->crcTraite;
    }

    public function setCrcTraite(string $crcTraite): self
    {
        $this->crcTraite = $crcTraite;

        return $this;
    }

    public function getCrcAuteurc(): ?string
    {
        return $this->crcAuteurc;
    }

    public function setCrcAuteurc(string $crcAuteurc): self
    {
        $this->crcAuteurc = $crcAuteurc;

        return $this;
    }

    public function getCrcDatec(): ?\DateTimeInterface
    {
        return $this->crcDatec;
    }

    public function setCrcDatec(\DateTimeInterface $crcDatec): self
    {
        $this->crcDatec = $crcDatec;

        return $this;
    }

    public function getCrcAuteurm(): ?string
    {
        return $this->crcAuteurm;
    }

    public function setCrcAuteurm(?string $crcAuteurm): self
    {
        $this->crcAuteurm = $crcAuteurm;

        return $this;
    }

    public function getCrcDatem(): ?\DateTimeInterface
    {
        return $this->crcDatem;
    }

    public function setCrcDatem(?\DateTimeInterface $crcDatem): self
    {
        $this->crcDatem = $crcDatem;

        return $this;
    }

    public function getCrcCmdinitial(): ?Commande
    {
        return $this->crcCmdinitial;
    }

    public function setCrcCmdinitial(?Commande $crcCmdinitial): self
    {
        $this->crcCmdinitial = $crcCmdinitial;

        return $this;
    }

    public function getCrcIdcmdorig(): ?Commande
    {
        return $this->crcIdcmdorig;
    }

    public function setCrcIdcmdorig(?Commande $crcIdcmdorig): self
    {
        $this->crcIdcmdorig = $crcIdcmdorig;

        return $this;
    }

    public function getCrcIdcmdres(): ?Commande
    {
        return $this->crcIdcmdres;
    }

    public function setCrcIdcmdres(?Commande $crcIdcmdres): self
    {
        $this->crcIdcmdres = $crcIdcmdres;

        return $this;
    }


}
