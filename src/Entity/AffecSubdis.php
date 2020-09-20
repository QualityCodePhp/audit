<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AffecSubdis
 *
 * @ORM\Table(name="affec_subdis", uniqueConstraints={@ORM\UniqueConstraint(name="affec_subdis_pk", columns={"asd_id"})}, indexes={@ORM\Index(name="affec_subdis_asd_uuif", columns={"asd_afutil"}), @ORM\Index(name="affec_subdis_asd_eeif", columns={"asd_afsa"}), @ORM\Index(name="affec_subdis_asd_ggif", columns={"asd_afgroupe"}), @ORM\Index(name="affec_subdis_asd_ccif", columns={"asd_afclasse"}), @ORM\Index(name="affec_subdis_asd_sdsif", columns={"asd_subdispo"})})
 * @ORM\Entity
 */
class AffecSubdis
{
    /**
     * @var string
     *
     * @ORM\Column(name="asd_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="affec_subdis_asd_id_seq", allocationSize=1, initialValue=1)
     */
    private $asdId;

    /**
     * @var string
     *
     * @ORM\Column(name="asd_taffect", type="string", length=2, nullable=false, options={"comment"="UT = Utilisateur, GR = Groupe, CL = Classe, SA = Structure d''Acceuil"})
     */
    private $asdTaffect;

    /**
     * @var \Classe
     *
     * @ORM\ManyToOne(targetEntity="Classe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="asd_afclasse", referencedColumnName="cls_id")
     * })
     */
    private $asdAfclasse;

    /**
     * @var \Groupe
     *
     * @ORM\ManyToOne(targetEntity="Groupe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="asd_afgroupe", referencedColumnName="grp_id")
     * })
     */
    private $asdAfgroupe;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="asd_afsa", referencedColumnName="ets_id")
     * })
     */
    private $asdAfsa;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="asd_afutil", referencedColumnName="uti_id")
     * })
     */
    private $asdAfutil;

    /**
     * @var \SubdiDispo
     *
     * @ORM\ManyToOne(targetEntity="SubdiDispo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="asd_subdispo", referencedColumnName="sud_id")
     * })
     */
    private $asdSubdispo;

    public function getAsdId(): ?string
    {
        return $this->asdId;
    }

    public function getAsdTaffect(): ?string
    {
        return $this->asdTaffect;
    }

    public function setAsdTaffect(string $asdTaffect): self
    {
        $this->asdTaffect = $asdTaffect;

        return $this;
    }

    public function getAsdAfclasse(): ?Classe
    {
        return $this->asdAfclasse;
    }

    public function setAsdAfclasse(?Classe $asdAfclasse): self
    {
        $this->asdAfclasse = $asdAfclasse;

        return $this;
    }

    public function getAsdAfgroupe(): ?Groupe
    {
        return $this->asdAfgroupe;
    }

    public function setAsdAfgroupe(?Groupe $asdAfgroupe): self
    {
        $this->asdAfgroupe = $asdAfgroupe;

        return $this;
    }

    public function getAsdAfsa(): ?Etablssmt
    {
        return $this->asdAfsa;
    }

    public function setAsdAfsa(?Etablssmt $asdAfsa): self
    {
        $this->asdAfsa = $asdAfsa;

        return $this;
    }

    public function getAsdAfutil(): ?Utilisateur
    {
        return $this->asdAfutil;
    }

    public function setAsdAfutil(?Utilisateur $asdAfutil): self
    {
        $this->asdAfutil = $asdAfutil;

        return $this;
    }

    public function getAsdSubdispo(): ?SubdiDispo
    {
        return $this->asdSubdispo;
    }

    public function setAsdSubdispo(?SubdiDispo $asdSubdispo): self
    {
        $this->asdSubdispo = $asdSubdispo;

        return $this;
    }


}
