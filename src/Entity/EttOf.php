<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EttOf
 *
 * @ORM\Table(name="ett_of", uniqueConstraints={@ORM\UniqueConstraint(name="ett_of_pk", columns={"eof_id"})})
 * @ORM\Entity
 */
class EttOf
{
    /**
     * @var string
     *
     * @ORM\Column(name="eof_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ett_of_eof_id_seq", allocationSize=1, initialValue=1)
     */
    private $eofId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eof_agremnt", type="string", length=10, nullable=true)
     */
    private $eofAgremnt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eof_ca", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eofCa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eof_cafpc", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eofCafpc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eof_cacr", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $eofCacr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eof_nbhstg", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eofNbhstg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eof_nbhstgcr", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eofNbhstgcr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eof_nbhstgetat", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eofNbhstgetat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eof_nbhstgentp", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eofNbhstgentp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eof_personens", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eofPersonens;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eof_formcdi", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eofFormcdi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eof_formcdd", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eofFormcdd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eof_formocc", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $eofFormocc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eof_specialite", type="string", length=300, nullable=true)
     */
    private $eofSpecialite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eof_actautre", type="string", length=300, nullable=true)
     */
    private $eofActautre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eof_resto", type="string", length=300, nullable=true)
     */
    private $eofResto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eof_centredoc", type="string", length=300, nullable=true)
     */
    private $eofCentredoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eof_autoform", type="string", length=300, nullable=true)
     */
    private $eofAutoform;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eof_accompagn", type="string", length=300, nullable=true)
     */
    private $eofAccompagn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eof_tauxform", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $eofTauxform;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eof_tauxnform", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $eofTauxnform;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eof_nbform", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $eofNbform;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eof_nbnform", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $eofNbnform;

    public function getEofId(): ?string
    {
        return $this->eofId;
    }

    public function getEofAgremnt(): ?string
    {
        return $this->eofAgremnt;
    }

    public function setEofAgremnt(?string $eofAgremnt): self
    {
        $this->eofAgremnt = $eofAgremnt;

        return $this;
    }

    public function getEofCa(): ?string
    {
        return $this->eofCa;
    }

    public function setEofCa(?string $eofCa): self
    {
        $this->eofCa = $eofCa;

        return $this;
    }

    public function getEofCafpc(): ?string
    {
        return $this->eofCafpc;
    }

    public function setEofCafpc(?string $eofCafpc): self
    {
        $this->eofCafpc = $eofCafpc;

        return $this;
    }

    public function getEofCacr(): ?string
    {
        return $this->eofCacr;
    }

    public function setEofCacr(?string $eofCacr): self
    {
        $this->eofCacr = $eofCacr;

        return $this;
    }

    public function getEofNbhstg(): ?string
    {
        return $this->eofNbhstg;
    }

    public function setEofNbhstg(?string $eofNbhstg): self
    {
        $this->eofNbhstg = $eofNbhstg;

        return $this;
    }

    public function getEofNbhstgcr(): ?string
    {
        return $this->eofNbhstgcr;
    }

    public function setEofNbhstgcr(?string $eofNbhstgcr): self
    {
        $this->eofNbhstgcr = $eofNbhstgcr;

        return $this;
    }

    public function getEofNbhstgetat(): ?string
    {
        return $this->eofNbhstgetat;
    }

    public function setEofNbhstgetat(?string $eofNbhstgetat): self
    {
        $this->eofNbhstgetat = $eofNbhstgetat;

        return $this;
    }

    public function getEofNbhstgentp(): ?string
    {
        return $this->eofNbhstgentp;
    }

    public function setEofNbhstgentp(?string $eofNbhstgentp): self
    {
        $this->eofNbhstgentp = $eofNbhstgentp;

        return $this;
    }

    public function getEofPersonens(): ?string
    {
        return $this->eofPersonens;
    }

    public function setEofPersonens(?string $eofPersonens): self
    {
        $this->eofPersonens = $eofPersonens;

        return $this;
    }

    public function getEofFormcdi(): ?string
    {
        return $this->eofFormcdi;
    }

    public function setEofFormcdi(?string $eofFormcdi): self
    {
        $this->eofFormcdi = $eofFormcdi;

        return $this;
    }

    public function getEofFormcdd(): ?string
    {
        return $this->eofFormcdd;
    }

    public function setEofFormcdd(?string $eofFormcdd): self
    {
        $this->eofFormcdd = $eofFormcdd;

        return $this;
    }

    public function getEofFormocc(): ?string
    {
        return $this->eofFormocc;
    }

    public function setEofFormocc(?string $eofFormocc): self
    {
        $this->eofFormocc = $eofFormocc;

        return $this;
    }

    public function getEofSpecialite(): ?string
    {
        return $this->eofSpecialite;
    }

    public function setEofSpecialite(?string $eofSpecialite): self
    {
        $this->eofSpecialite = $eofSpecialite;

        return $this;
    }

    public function getEofActautre(): ?string
    {
        return $this->eofActautre;
    }

    public function setEofActautre(?string $eofActautre): self
    {
        $this->eofActautre = $eofActautre;

        return $this;
    }

    public function getEofResto(): ?string
    {
        return $this->eofResto;
    }

    public function setEofResto(?string $eofResto): self
    {
        $this->eofResto = $eofResto;

        return $this;
    }

    public function getEofCentredoc(): ?string
    {
        return $this->eofCentredoc;
    }

    public function setEofCentredoc(?string $eofCentredoc): self
    {
        $this->eofCentredoc = $eofCentredoc;

        return $this;
    }

    public function getEofAutoform(): ?string
    {
        return $this->eofAutoform;
    }

    public function setEofAutoform(?string $eofAutoform): self
    {
        $this->eofAutoform = $eofAutoform;

        return $this;
    }

    public function getEofAccompagn(): ?string
    {
        return $this->eofAccompagn;
    }

    public function setEofAccompagn(?string $eofAccompagn): self
    {
        $this->eofAccompagn = $eofAccompagn;

        return $this;
    }

    public function getEofTauxform(): ?string
    {
        return $this->eofTauxform;
    }

    public function setEofTauxform(?string $eofTauxform): self
    {
        $this->eofTauxform = $eofTauxform;

        return $this;
    }

    public function getEofTauxnform(): ?string
    {
        return $this->eofTauxnform;
    }

    public function setEofTauxnform(?string $eofTauxnform): self
    {
        $this->eofTauxnform = $eofTauxnform;

        return $this;
    }

    public function getEofNbform(): ?string
    {
        return $this->eofNbform;
    }

    public function setEofNbform(?string $eofNbform): self
    {
        $this->eofNbform = $eofNbform;

        return $this;
    }

    public function getEofNbnform(): ?string
    {
        return $this->eofNbnform;
    }

    public function setEofNbnform(?string $eofNbnform): self
    {
        $this->eofNbnform = $eofNbnform;

        return $this;
    }


}
