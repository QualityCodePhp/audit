<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParametreAlerte
 *
 * @ORM\Table(name="parametre_alerte", uniqueConstraints={@ORM\UniqueConstraint(name="parametre_alerte_pk", columns={"paa_id"})}, indexes={@ORM\Index(name="paa_ref_mode_alerte_fk", columns={"ref_mode_alerte"}), @ORM\Index(name="paa_ref_type_alerte_fk", columns={"ref_type_alerte"})})
 * @ORM\Entity
 */
class ParametreAlerte
{
    /**
     * @var string
     *
     * @ORM\Column(name="paa_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="parametre_alerte_paa_id_seq", allocationSize=1, initialValue=1)
     */
    private $paaId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="paa_bofo", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $paaBofo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="paa_requete", type="text", nullable=true)
     */
    private $paaRequete;

    /**
     * @var string|null
     *
     * @ORM\Column(name="paa_url_consult", type="string", length=300, nullable=true)
     */
    private $paaUrlConsult;

    /**
     * @var string|null
     *
     * @ORM\Column(name="paa_libelle_action", type="string", length=100, nullable=true)
     */
    private $paaLibelleAction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="paa_url_action", type="string", length=300, nullable=true)
     */
    private $paaUrlAction;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_mode_alerte", referencedColumnName="ref_id")
     * })
     */
    private $refModeAlerte;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_type_alerte", referencedColumnName="ref_id")
     * })
     */
    private $refTypeAlerte;

    public function getPaaId(): ?string
    {
        return $this->paaId;
    }

    public function getPaaBofo(): ?string
    {
        return $this->paaBofo;
    }

    public function setPaaBofo(?string $paaBofo): self
    {
        $this->paaBofo = $paaBofo;

        return $this;
    }

    public function getPaaRequete(): ?string
    {
        return $this->paaRequete;
    }

    public function setPaaRequete(?string $paaRequete): self
    {
        $this->paaRequete = $paaRequete;

        return $this;
    }

    public function getPaaUrlConsult(): ?string
    {
        return $this->paaUrlConsult;
    }

    public function setPaaUrlConsult(?string $paaUrlConsult): self
    {
        $this->paaUrlConsult = $paaUrlConsult;

        return $this;
    }

    public function getPaaLibelleAction(): ?string
    {
        return $this->paaLibelleAction;
    }

    public function setPaaLibelleAction(?string $paaLibelleAction): self
    {
        $this->paaLibelleAction = $paaLibelleAction;

        return $this;
    }

    public function getPaaUrlAction(): ?string
    {
        return $this->paaUrlAction;
    }

    public function setPaaUrlAction(?string $paaUrlAction): self
    {
        $this->paaUrlAction = $paaUrlAction;

        return $this;
    }

    public function getRefModeAlerte(): ?Referentiel
    {
        return $this->refModeAlerte;
    }

    public function setRefModeAlerte(?Referentiel $refModeAlerte): self
    {
        $this->refModeAlerte = $refModeAlerte;

        return $this;
    }

    public function getRefTypeAlerte(): ?Referentiel
    {
        return $this->refTypeAlerte;
    }

    public function setRefTypeAlerte(?Referentiel $refTypeAlerte): self
    {
        $this->refTypeAlerte = $refTypeAlerte;

        return $this;
    }


}
