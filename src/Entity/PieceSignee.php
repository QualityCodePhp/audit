<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PieceSignee
 *
 * @ORM\Table(name="piece_signee", uniqueConstraints={@ORM\UniqueConstraint(name="piece_signee_pk", columns={"psig_id"})}, indexes={@ORM\Index(name="fk_psig_uti_id_create_fk", columns={"uti_id_create"}), @ORM\Index(name="fk_psig_ref_id_type_fk", columns={"ref_id_type_piece"})})
 * @ORM\Entity
 */
class PieceSignee
{
    /**
     * @var string
     *
     * @ORM\Column(name="psig_id", type="decimal", precision=8, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="piece_signee_psig_id_seq", allocationSize=1, initialValue=1)
     */
    private $psigId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="psig_taille", type="decimal", precision=12, scale=0, nullable=true)
     */
    private $psigTaille;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="psig_datec", type="datetime", nullable=true)
     */
    private $psigDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="psig_flg_suppr", type="decimal", precision=1, scale=0, nullable=true)
     */
    private $psigFlgSuppr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="psig_contenu", type="blob", nullable=true)
     */
    private $psigContenu;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_type_piece", referencedColumnName="ref_id")
     * })
     */
    private $refIdTypePiece;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uti_id_create", referencedColumnName="uti_id")
     * })
     */
    private $utiIdCreate;

    public function getPsigId(): ?string
    {
        return $this->psigId;
    }

    public function getPsigTaille(): ?string
    {
        return $this->psigTaille;
    }

    public function setPsigTaille(?string $psigTaille): self
    {
        $this->psigTaille = $psigTaille;

        return $this;
    }

    public function getPsigDatec(): ?\DateTimeInterface
    {
        return $this->psigDatec;
    }

    public function setPsigDatec(?\DateTimeInterface $psigDatec): self
    {
        $this->psigDatec = $psigDatec;

        return $this;
    }

    public function getPsigFlgSuppr(): ?string
    {
        return $this->psigFlgSuppr;
    }

    public function setPsigFlgSuppr(?string $psigFlgSuppr): self
    {
        $this->psigFlgSuppr = $psigFlgSuppr;

        return $this;
    }

    public function getPsigContenu()
    {
        return $this->psigContenu;
    }

    public function setPsigContenu($psigContenu): self
    {
        $this->psigContenu = $psigContenu;

        return $this;
    }

    public function getRefIdTypePiece(): ?Referentiel
    {
        return $this->refIdTypePiece;
    }

    public function setRefIdTypePiece(?Referentiel $refIdTypePiece): self
    {
        $this->refIdTypePiece = $refIdTypePiece;

        return $this;
    }

    public function getUtiIdCreate(): ?Utilisateur
    {
        return $this->utiIdCreate;
    }

    public function setUtiIdCreate(?Utilisateur $utiIdCreate): self
    {
        $this->utiIdCreate = $utiIdCreate;

        return $this;
    }


}
