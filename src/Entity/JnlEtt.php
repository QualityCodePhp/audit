<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JnlEtt
 *
 * @ORM\Table(name="jnl_ett", uniqueConstraints={@ORM\UniqueConstraint(name="jnl_ett_pk", columns={"jne_id"})}, indexes={@ORM\Index(name="jnl_ett_uuif", columns={"jne_auteurm"}), @ORM\Index(name="jnl_ett_eeif", columns={"jne_etablssmt"})})
 * @ORM\Entity
 */
class JnlEtt
{
    /**
     * @var string
     *
     * @ORM\Column(name="jne_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="jnl_ett_jne_id_seq", allocationSize=1, initialValue=1)
     */
    private $jneId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="jne_datem", type="datetime", nullable=false)
     */
    private $jneDatem;

    /**
     * @var string
     *
     * @ORM\Column(name="jne_typem", type="string", length=1, nullable=false)
     */
    private $jneTypem;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="jne_datevu", type="datetime", nullable=true)
     */
    private $jneDatevu;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="jne_auteurm", referencedColumnName="uti_id")
     * })
     */
    private $jneAuteurm;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="jne_etablssmt", referencedColumnName="ets_id")
     * })
     */
    private $jneEtablssmt;

    public function getJneId(): ?string
    {
        return $this->jneId;
    }

    public function getJneDatem(): ?\DateTimeInterface
    {
        return $this->jneDatem;
    }

    public function setJneDatem(\DateTimeInterface $jneDatem): self
    {
        $this->jneDatem = $jneDatem;

        return $this;
    }

    public function getJneTypem(): ?string
    {
        return $this->jneTypem;
    }

    public function setJneTypem(string $jneTypem): self
    {
        $this->jneTypem = $jneTypem;

        return $this;
    }

    public function getJneDatevu(): ?\DateTimeInterface
    {
        return $this->jneDatevu;
    }

    public function setJneDatevu(?\DateTimeInterface $jneDatevu): self
    {
        $this->jneDatevu = $jneDatevu;

        return $this;
    }

    public function getJneAuteurm(): ?Utilisateur
    {
        return $this->jneAuteurm;
    }

    public function setJneAuteurm(?Utilisateur $jneAuteurm): self
    {
        $this->jneAuteurm = $jneAuteurm;

        return $this;
    }

    public function getJneEtablssmt(): ?Etablssmt
    {
        return $this->jneEtablssmt;
    }

    public function setJneEtablssmt(?Etablssmt $jneEtablssmt): self
    {
        $this->jneEtablssmt = $jneEtablssmt;

        return $this;
    }


}
