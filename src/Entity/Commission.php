<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commission
 *
 * @ORM\Table(name="commission", uniqueConstraints={@ORM\UniqueConstraint(name="commission_pk", columns={"com_id"})}, indexes={@ORM\Index(name="commission_tctif", columns={"com_typecom"})})
 * @ORM\Entity(repositoryClass="App\Repository\CommissionRepository")
 */
class Commission
{
    /**
     * @var string
     *
     * @ORM\Column(name="com_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="seq_commission", allocationSize=1, initialValue=1)
     */
    private $comId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="com_datecom", type="datetime", nullable=false)
     */
    private $comDatecom;

    /**
     * @var string
     *
     * @ORM\Column(name="com_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $comEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="com_datec", type="datetime", nullable=false)
     */
    private $comDatec;

    /**
     * @var string
     *
     * @ORM\Column(name="com_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $comAuteurc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="com_datem", type="datetime", nullable=true)
     */
    private $comDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="com_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $comAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="com_datea", type="datetime", nullable=true)
     */
    private $comDatea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="com_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $comAuteura;

    /**
     * @var string|null
     *
     * @ORM\Column(name="com_comment", type="string", length=300, nullable=true)
     */
    private $comComment;

    /**
     * @var \TCommission
     *
     * @ORM\ManyToOne(targetEntity="TCommission")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="com_typecom", referencedColumnName="tco_id")
     * })
     */
    private $comTypecom;

    public function getComId(): ?string
    {
        return $this->comId;
    }

    public function getComDatecom(): ?\DateTimeInterface
    {
        return $this->comDatecom;
    }

    public function setComDatecom(\DateTimeInterface $comDatecom): self
    {
        $this->comDatecom = $comDatecom;

        return $this;
    }

    public function getComEtat(): ?string
    {
        return $this->comEtat;
    }

    public function setComEtat(string $comEtat): self
    {
        $this->comEtat = $comEtat;

        return $this;
    }

    public function getComDatec(): ?\DateTimeInterface
    {
        return $this->comDatec;
    }

    public function setComDatec(\DateTimeInterface $comDatec): self
    {
        $this->comDatec = $comDatec;

        return $this;
    }

    public function getComAuteurc(): ?string
    {
        return $this->comAuteurc;
    }

    public function setComAuteurc(string $comAuteurc): self
    {
        $this->comAuteurc = $comAuteurc;

        return $this;
    }

    public function getComDatem(): ?\DateTimeInterface
    {
        return $this->comDatem;
    }

    public function setComDatem(?\DateTimeInterface $comDatem): self
    {
        $this->comDatem = $comDatem;

        return $this;
    }

    public function getComAuteurm(): ?string
    {
        return $this->comAuteurm;
    }

    public function setComAuteurm(?string $comAuteurm): self
    {
        $this->comAuteurm = $comAuteurm;

        return $this;
    }

    public function getComDatea(): ?\DateTimeInterface
    {
        return $this->comDatea;
    }

    public function setComDatea(?\DateTimeInterface $comDatea): self
    {
        $this->comDatea = $comDatea;

        return $this;
    }

    public function getComAuteura(): ?string
    {
        return $this->comAuteura;
    }

    public function setComAuteura(?string $comAuteura): self
    {
        $this->comAuteura = $comAuteura;

        return $this;
    }

    public function getComComment(): ?string
    {
        return $this->comComment;
    }

    public function setComComment(?string $comComment): self
    {
        $this->comComment = $comComment;

        return $this;
    }

    public function getComTypecom(): ?TCommission
    {
        return $this->comTypecom;
    }

    public function setComTypecom(?TCommission $comTypecom): self
    {
        $this->comTypecom = $comTypecom;

        return $this;
    }


}
