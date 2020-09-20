<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RealSession
 *
 * @ORM\Table(name="real_session", uniqueConstraints={@ORM\UniqueConstraint(name="real_session_pk", columns={"rse_id"})}, indexes={@ORM\Index(name="real_session_ssif", columns={"rse_stagiaire"}), @ORM\Index(name="real_session_ssif2", columns={"rse_session"})})
 * @ORM\Entity
 */
class RealSession
{
    /**
     * @var string
     *
     * @ORM\Column(name="rse_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="real_session_rse_id_seq", allocationSize=1, initialValue=1)
     */
    private $rseId;

    /**
     * @var string
     *
     * @ORM\Column(name="rse_presence", type="decimal", precision=1, scale=0, nullable=false, options={"comment"="1 : prÃ©sent"})
     */
    private $rsePresence;

    /**
     * @var string
     *
     * @ORM\Column(name="rse_typesaisie", type="decimal", precision=1, scale=0, nullable=false, options={"comment"="1 : saisie / 2 : regul / 3 : CRE"})
     */
    private $rseTypesaisie;

    /**
     * @var \Sessionp
     *
     * @ORM\ManyToOne(targetEntity="Sessionp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rse_session", referencedColumnName="sep_id")
     * })
     */
    private $rseSession;

    /**
     * @var \Stagiaire
     *
     * @ORM\ManyToOne(targetEntity="Stagiaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rse_stagiaire", referencedColumnName="stg_id")
     * })
     */
    private $rseStagiaire;

    public function getRseId(): ?string
    {
        return $this->rseId;
    }

    public function getRsePresence(): ?string
    {
        return $this->rsePresence;
    }

    public function setRsePresence(string $rsePresence): self
    {
        $this->rsePresence = $rsePresence;

        return $this;
    }

    public function getRseTypesaisie(): ?string
    {
        return $this->rseTypesaisie;
    }

    public function setRseTypesaisie(string $rseTypesaisie): self
    {
        $this->rseTypesaisie = $rseTypesaisie;

        return $this;
    }

    public function getRseSession(): ?Sessionp
    {
        return $this->rseSession;
    }

    public function setRseSession(?Sessionp $rseSession): self
    {
        $this->rseSession = $rseSession;

        return $this;
    }

    public function getRseStagiaire(): ?Stagiaire
    {
        return $this->rseStagiaire;
    }

    public function setRseStagiaire(?Stagiaire $rseStagiaire): self
    {
        $this->rseStagiaire = $rseStagiaire;

        return $this;
    }


}
