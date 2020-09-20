<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SessionAcmTmp
 *
 * @ORM\Table(name="session_acm_tmp", uniqueConstraints={@ORM\UniqueConstraint(name="session_acm_tmp_pk", columns={"sestmp_id"})}, indexes={@ORM\Index(name="sestmp_sess_fk", columns={"sess_id"})})
 * @ORM\Entity
 */
class SessionAcmTmp
{
    /**
     * @var string
     *
     * @ORM\Column(name="sestmp_id", type="decimal", precision=8, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="session_acm_tmp_sestmp_id_seq", allocationSize=1, initialValue=1)
     */
    private $sestmpId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestmp_ldf_id", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $sestmpLdfId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestmp_ldf_adresse", type="string", length=200, nullable=true)
     */
    private $sestmpLdfAdresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestmp_ldf_code_postal", type="string", length=8, nullable=true)
     */
    private $sestmpLdfCodePostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestmp_ldf_ville", type="string", length=100, nullable=true)
     */
    private $sestmpLdfVille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sestmp_ldf_insee", type="string", length=50, nullable=true)
     */
    private $sestmpLdfInsee;

    /**
     * @var \SessionFormation
     *
     * @ORM\ManyToOne(targetEntity="SessionFormation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sess_id", referencedColumnName="sess_id")
     * })
     */
    private $sess;

    public function getSestmpId(): ?string
    {
        return $this->sestmpId;
    }

    public function getSestmpLdfId(): ?string
    {
        return $this->sestmpLdfId;
    }

    public function setSestmpLdfId(?string $sestmpLdfId): self
    {
        $this->sestmpLdfId = $sestmpLdfId;

        return $this;
    }

    public function getSestmpLdfAdresse(): ?string
    {
        return $this->sestmpLdfAdresse;
    }

    public function setSestmpLdfAdresse(?string $sestmpLdfAdresse): self
    {
        $this->sestmpLdfAdresse = $sestmpLdfAdresse;

        return $this;
    }

    public function getSestmpLdfCodePostal(): ?string
    {
        return $this->sestmpLdfCodePostal;
    }

    public function setSestmpLdfCodePostal(?string $sestmpLdfCodePostal): self
    {
        $this->sestmpLdfCodePostal = $sestmpLdfCodePostal;

        return $this;
    }

    public function getSestmpLdfVille(): ?string
    {
        return $this->sestmpLdfVille;
    }

    public function setSestmpLdfVille(?string $sestmpLdfVille): self
    {
        $this->sestmpLdfVille = $sestmpLdfVille;

        return $this;
    }

    public function getSestmpLdfInsee(): ?string
    {
        return $this->sestmpLdfInsee;
    }

    public function setSestmpLdfInsee(?string $sestmpLdfInsee): self
    {
        $this->sestmpLdfInsee = $sestmpLdfInsee;

        return $this;
    }

    public function getSess(): ?SessionFormation
    {
        return $this->sess;
    }

    public function setSess(?SessionFormation $sess): self
    {
        $this->sess = $sess;

        return $this;
    }


}
