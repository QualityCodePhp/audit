<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PerSession
 *
 * @ORM\Table(name="per_session", uniqueConstraints={@ORM\UniqueConstraint(name="per_session_pk", columns={"pps_id"})})
 * @ORM\Entity
 */
class PerSession
{
    /**
     * @var int
     *
     * @ORM\Column(name="pps_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="per_session_pps_id_seq", allocationSize=1, initialValue=1)
     */
    private $ppsId;

    /**
     * @var string
     *
     * @ORM\Column(name="pps_code", type="string", length=2, nullable=false)
     */
    private $ppsCode;

    /**
     * @var string
     *
     * @ORM\Column(name="pps_libelle", type="string", length=50, nullable=false)
     */
    private $ppsLibelle;

    public function getPpsId(): ?int
    {
        return $this->ppsId;
    }

    public function getPpsCode(): ?string
    {
        return $this->ppsCode;
    }

    public function setPpsCode(string $ppsCode): self
    {
        $this->ppsCode = $ppsCode;

        return $this;
    }

    public function getPpsLibelle(): ?string
    {
        return $this->ppsLibelle;
    }

    public function setPpsLibelle(string $ppsLibelle): self
    {
        $this->ppsLibelle = $ppsLibelle;

        return $this;
    }


}
