<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CodRecondp
 *
 * @ORM\Table(name="cod_recondp", uniqueConstraints={@ORM\UniqueConstraint(name="cod_recondp_pk", columns={"crp_id"})}, indexes={@ORM\Index(name="cod_recondp_ppif2", columns={"crp_idprgres"}), @ORM\Index(name="cod_recondp_ppif", columns={"crp_idprgorig"})})
 * @ORM\Entity
 */
class CodRecondp
{
    /**
     * @var string
     *
     * @ORM\Column(name="crp_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cod_recondp_crp_id_seq", allocationSize=1, initialValue=1)
     */
    private $crpId;

    /**
     * @var string
     *
     * @ORM\Column(name="crp_ordre", type="decimal", precision=2, scale=0, nullable=false, options={"comment"="Permet de trier les codes rÃ©servÃ© dans l'ordre prÃ©vu des annÃ©es de reconduction"})
     */
    private $crpOrdre;

    /**
     * @var string
     *
     * @ORM\Column(name="crp_codprgorig", type="string", length=20, nullable=false)
     */
    private $crpCodprgorig;

    /**
     * @var string
     *
     * @ORM\Column(name="crp_codprgres", type="string", length=20, nullable=false)
     */
    private $crpCodprgres;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crp_prginitial", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $crpPrginitial;

    /**
     * @var string
     *
     * @ORM\Column(name="crp_traite", type="decimal", precision=3, scale=0, nullable=false, options={"comment"="0 = non utilisÃ© lors d''une reconduction, 13 = utilisÃ© lors d''une reconduction"})
     */
    private $crpTraite;

    /**
     * @var string
     *
     * @ORM\Column(name="crp_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $crpAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="crp_datec", type="datetime", nullable=false)
     */
    private $crpDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crp_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $crpAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="crp_datem", type="datetime", nullable=true)
     */
    private $crpDatem;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="crp_idprgorig", referencedColumnName="prg_id")
     * })
     */
    private $crpIdprgorig;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="crp_idprgres", referencedColumnName="prg_id")
     * })
     */
    private $crpIdprgres;

    public function getCrpId(): ?string
    {
        return $this->crpId;
    }

    public function getCrpOrdre(): ?string
    {
        return $this->crpOrdre;
    }

    public function setCrpOrdre(string $crpOrdre): self
    {
        $this->crpOrdre = $crpOrdre;

        return $this;
    }

    public function getCrpCodprgorig(): ?string
    {
        return $this->crpCodprgorig;
    }

    public function setCrpCodprgorig(string $crpCodprgorig): self
    {
        $this->crpCodprgorig = $crpCodprgorig;

        return $this;
    }

    public function getCrpCodprgres(): ?string
    {
        return $this->crpCodprgres;
    }

    public function setCrpCodprgres(string $crpCodprgres): self
    {
        $this->crpCodprgres = $crpCodprgres;

        return $this;
    }

    public function getCrpPrginitial(): ?string
    {
        return $this->crpPrginitial;
    }

    public function setCrpPrginitial(?string $crpPrginitial): self
    {
        $this->crpPrginitial = $crpPrginitial;

        return $this;
    }

    public function getCrpTraite(): ?string
    {
        return $this->crpTraite;
    }

    public function setCrpTraite(string $crpTraite): self
    {
        $this->crpTraite = $crpTraite;

        return $this;
    }

    public function getCrpAuteurc(): ?string
    {
        return $this->crpAuteurc;
    }

    public function setCrpAuteurc(string $crpAuteurc): self
    {
        $this->crpAuteurc = $crpAuteurc;

        return $this;
    }

    public function getCrpDatec(): ?\DateTimeInterface
    {
        return $this->crpDatec;
    }

    public function setCrpDatec(\DateTimeInterface $crpDatec): self
    {
        $this->crpDatec = $crpDatec;

        return $this;
    }

    public function getCrpAuteurm(): ?string
    {
        return $this->crpAuteurm;
    }

    public function setCrpAuteurm(?string $crpAuteurm): self
    {
        $this->crpAuteurm = $crpAuteurm;

        return $this;
    }

    public function getCrpDatem(): ?\DateTimeInterface
    {
        return $this->crpDatem;
    }

    public function setCrpDatem(?\DateTimeInterface $crpDatem): self
    {
        $this->crpDatem = $crpDatem;

        return $this;
    }

    public function getCrpIdprgorig(): ?Programme
    {
        return $this->crpIdprgorig;
    }

    public function setCrpIdprgorig(?Programme $crpIdprgorig): self
    {
        $this->crpIdprgorig = $crpIdprgorig;

        return $this;
    }

    public function getCrpIdprgres(): ?Programme
    {
        return $this->crpIdprgres;
    }

    public function setCrpIdprgres(?Programme $crpIdprgres): self
    {
        $this->crpIdprgres = $crpIdprgres;

        return $this;
    }


}
