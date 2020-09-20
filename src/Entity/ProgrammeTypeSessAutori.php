<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProgrammeTypeSessAutori
 *
 * @ORM\Table(name="programme_type_sess_autori", uniqueConstraints={@ORM\UniqueConstraint(name="programme_type_sess_autori_pk", columns={"prgtsa_id"})}, indexes={@ORM\Index(name="prg_prg_type_sess_autor_fk", columns={"prg_id"}), @ORM\Index(name="ref_prg_type_sess_autor_fk", columns={"ref_id_type_sess_autor"})})
 * @ORM\Entity
 */
class ProgrammeTypeSessAutori
{
    /**
     * @var string
     *
     * @ORM\Column(name="prgtsa_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="programme_type_sess_autori_prgtsa_id_seq", allocationSize=1, initialValue=1)
     */
    private $prgtsaId;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prg_id", referencedColumnName="prg_id")
     * })
     */
    private $prg;

    /**
     * @var \Referentiel
     *
     * @ORM\ManyToOne(targetEntity="Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id_type_sess_autor", referencedColumnName="ref_id")
     * })
     */
    private $refIdTypeSessAutor;

    public function getPrgtsaId(): ?string
    {
        return $this->prgtsaId;
    }

    public function getPrg(): ?Programme
    {
        return $this->prg;
    }

    public function setPrg(?Programme $prg): self
    {
        $this->prg = $prg;

        return $this;
    }

    public function getRefIdTypeSessAutor(): ?Referentiel
    {
        return $this->refIdTypeSessAutor;
    }

    public function setRefIdTypeSessAutor(?Referentiel $refIdTypeSessAutor): self
    {
        $this->refIdTypeSessAutor = $refIdTypeSessAutor;

        return $this;
    }


}
