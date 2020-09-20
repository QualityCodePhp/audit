<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Antprofil
 *
 * @ORM\Table(name="antprofil", uniqueConstraints={@ORM\UniqueConstraint(name="antprofil_pk", columns={"apr_id"})}, indexes={@ORM\Index(name="antprofil_apr_aaif", columns={"apr_antenne"}), @ORM\Index(name="antprofil_eeif", columns={"apr_etsprofil"})})
 * @ORM\Entity
 */
class Antprofil
{
    /**
     * @var string
     *
     * @ORM\Column(name="apr_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="antprofil_apr_id_seq", allocationSize=1, initialValue=1)
     */
    private $aprId;

    /**
     * @var \Antenne
     *
     * @ORM\ManyToOne(targetEntity="Antenne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="apr_antenne", referencedColumnName="ant_id")
     * })
     */
    private $aprAntenne;

    /**
     * @var \Etsprofil
     *
     * @ORM\ManyToOne(targetEntity="Etsprofil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="apr_etsprofil", referencedColumnName="epr_id")
     * })
     */
    private $aprEtsprofil;

    public function getAprId(): ?string
    {
        return $this->aprId;
    }

    public function getAprAntenne(): ?Antenne
    {
        return $this->aprAntenne;
    }

    public function setAprAntenne(?Antenne $aprAntenne): self
    {
        $this->aprAntenne = $aprAntenne;

        return $this;
    }

    public function getAprEtsprofil(): ?Etsprofil
    {
        return $this->aprEtsprofil;
    }

    public function setAprEtsprofil(?Etsprofil $aprEtsprofil): self
    {
        $this->aprEtsprofil = $aprEtsprofil;

        return $this;
    }


}
