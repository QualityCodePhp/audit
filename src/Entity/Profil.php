<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Profil
 *
 * @ORM\Table(name="profil", uniqueConstraints={@ORM\UniqueConstraint(name="profil_pk", columns={"prf_id"})})
 * @ORM\Entity
 */
class Profil
{
    /**
     * @var string
     *
     * @ORM\Column(name="prf_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="profil_prf_id_seq", allocationSize=1, initialValue=1)
     */
    private $prfId;

    /**
     * @var string
     *
     * @ORM\Column(name="prf_type", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $prfType;

    /**
     * @var string
     *
     * @ORM\Column(name="prf_code", type="string", length=15, nullable=false)
     */
    private $prfCode;

    /**
     * @var string
     *
     * @ORM\Column(name="prf_libelle", type="string", length=30, nullable=false)
     */
    private $prfLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="prf_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $prfEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prf_datec", type="datetime", nullable=false)
     */
    private $prfDatec;

    /**
     * @var string
     *
     * @ORM\Column(name="prf_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $prfAuteurc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prf_datem", type="datetime", nullable=true)
     */
    private $prfDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prf_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $prfAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prf_datea", type="datetime", nullable=true)
     */
    private $prfDatea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prf_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $prfAuteura;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prf_comment", type="string", length=300, nullable=true)
     */
    private $prfComment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Action", inversedBy="drtProfil")
     * @ORM\JoinTable(name="droit",
     *   joinColumns={
     *     @ORM\JoinColumn(name="drt_profil", referencedColumnName="prf_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="drt_action", referencedColumnName="act_id")
     *   }
     * )
     */
    private $drtAction;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->drtAction = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getPrfId(): ?string
    {
        return $this->prfId;
    }

    public function getPrfType(): ?string
    {
        return $this->prfType;
    }

    public function setPrfType(string $prfType): self
    {
        $this->prfType = $prfType;

        return $this;
    }

    public function getPrfCode(): ?string
    {
        return $this->prfCode;
    }

    public function setPrfCode(string $prfCode): self
    {
        $this->prfCode = $prfCode;

        return $this;
    }

    public function getPrfLibelle(): ?string
    {
        return $this->prfLibelle;
    }

    public function setPrfLibelle(string $prfLibelle): self
    {
        $this->prfLibelle = $prfLibelle;

        return $this;
    }

    public function getPrfEtat(): ?string
    {
        return $this->prfEtat;
    }

    public function setPrfEtat(string $prfEtat): self
    {
        $this->prfEtat = $prfEtat;

        return $this;
    }

    public function getPrfDatec(): ?\DateTimeInterface
    {
        return $this->prfDatec;
    }

    public function setPrfDatec(\DateTimeInterface $prfDatec): self
    {
        $this->prfDatec = $prfDatec;

        return $this;
    }

    public function getPrfAuteurc(): ?string
    {
        return $this->prfAuteurc;
    }

    public function setPrfAuteurc(string $prfAuteurc): self
    {
        $this->prfAuteurc = $prfAuteurc;

        return $this;
    }

    public function getPrfDatem(): ?\DateTimeInterface
    {
        return $this->prfDatem;
    }

    public function setPrfDatem(?\DateTimeInterface $prfDatem): self
    {
        $this->prfDatem = $prfDatem;

        return $this;
    }

    public function getPrfAuteurm(): ?string
    {
        return $this->prfAuteurm;
    }

    public function setPrfAuteurm(?string $prfAuteurm): self
    {
        $this->prfAuteurm = $prfAuteurm;

        return $this;
    }

    public function getPrfDatea(): ?\DateTimeInterface
    {
        return $this->prfDatea;
    }

    public function setPrfDatea(?\DateTimeInterface $prfDatea): self
    {
        $this->prfDatea = $prfDatea;

        return $this;
    }

    public function getPrfAuteura(): ?string
    {
        return $this->prfAuteura;
    }

    public function setPrfAuteura(?string $prfAuteura): self
    {
        $this->prfAuteura = $prfAuteura;

        return $this;
    }

    public function getPrfComment(): ?string
    {
        return $this->prfComment;
    }

    public function setPrfComment(?string $prfComment): self
    {
        $this->prfComment = $prfComment;

        return $this;
    }

    /**
     * @return Collection|Action[]
     */
    public function getDrtAction(): Collection
    {
        return $this->drtAction;
    }

    public function addDrtAction(Action $drtAction): self
    {
        if (!$this->drtAction->contains($drtAction)) {
            $this->drtAction[] = $drtAction;
        }

        return $this;
    }

    public function removeDrtAction(Action $drtAction): self
    {
        if ($this->drtAction->contains($drtAction)) {
            $this->drtAction->removeElement($drtAction);
        }

        return $this;
    }

}
