<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utiprofil
 *
 * @ORM\Table(name="utiprofil", uniqueConstraints={@ORM\UniqueConstraint(name="utiprofil_pk", columns={"upr_id"})}, indexes={@ORM\Index(name="utiprofil_ppif", columns={"upr_profil"}), @ORM\Index(name="utiprofil_uuif2", columns={"upr_utilisateur"})})
 * @ORM\Entity
 */
class Utiprofil
{
    /**
     * @var string
     *
     * @ORM\Column(name="upr_id", type="decimal", precision=12, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="utiprofil_upr_id_seq", allocationSize=1, initialValue=1)
     */
    private $uprId;

    /**
     * @var \Profil
     *
     * @ORM\ManyToOne(targetEntity="Profil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="upr_profil", referencedColumnName="prf_id")
     * })
     */
    private $uprProfil;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="upr_utilisateur", referencedColumnName="uti_id")
     * })
     */
    private $uprUtilisateur;

    public function getUprId(): ?string
    {
        return $this->uprId;
    }

    public function getUprProfil(): ?Profil
    {
        return $this->uprProfil;
    }

    public function setUprProfil(?Profil $uprProfil): self
    {
        $this->uprProfil = $uprProfil;

        return $this;
    }

    public function getUprUtilisateur(): ?Utilisateur
    {
        return $this->uprUtilisateur;
    }

    public function setUprUtilisateur(?Utilisateur $uprUtilisateur): self
    {
        $this->uprUtilisateur = $uprUtilisateur;

        return $this;
    }


}
