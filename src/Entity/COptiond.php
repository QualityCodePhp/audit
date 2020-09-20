<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * COptiond
 *
 * @ORM\Table(name="c_optiond", uniqueConstraints={@ORM\UniqueConstraint(name="c_optiond_pk", columns={"cod_id"})})
 * @ORM\Entity
 */
class COptiond
{
    /**
     * @var string
     *
     * @ORM\Column(name="cod_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="c_optiond_cod_id_seq", allocationSize=1, initialValue=1)
     */
    private $codId;

    /**
     * @var string
     *
     * @ORM\Column(name="cod_codet", type="string", length=16, nullable=false)
     */
    private $codCodet;

    /**
     * @var string
     *
     * @ORM\Column(name="cod_table", type="string", length=12, nullable=false)
     */
    private $codTable;

    /**
     * @var string
     *
     * @ORM\Column(name="cod_longmax", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $codLongmax;

    /**
     * @var string
     *
     * @ORM\Column(name="cod_tabldestin", type="string", length=12, nullable=false)
     */
    private $codTabldestin;

    /**
     * @var string
     *
     * @ORM\Column(name="cod_chdestin", type="string", length=16, nullable=false)
     */
    private $codChdestin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cod_gestdestin", type="string", length=15, nullable=true, options={"comment"="IDENTIFIANT"})
     */
    private $codGestdestin;

    /**
     * @var string
     *
     * @ORM\Column(name="cod_format", type="string", length=2, nullable=false, options={"comment"="1=Texte, 2=NumÃ©rique"})
     */
    private $codFormat;

    public function getCodId(): ?string
    {
        return $this->codId;
    }

    public function getCodCodet(): ?string
    {
        return $this->codCodet;
    }

    public function setCodCodet(string $codCodet): self
    {
        $this->codCodet = $codCodet;

        return $this;
    }

    public function getCodTable(): ?string
    {
        return $this->codTable;
    }

    public function setCodTable(string $codTable): self
    {
        $this->codTable = $codTable;

        return $this;
    }

    public function getCodLongmax(): ?string
    {
        return $this->codLongmax;
    }

    public function setCodLongmax(string $codLongmax): self
    {
        $this->codLongmax = $codLongmax;

        return $this;
    }

    public function getCodTabldestin(): ?string
    {
        return $this->codTabldestin;
    }

    public function setCodTabldestin(string $codTabldestin): self
    {
        $this->codTabldestin = $codTabldestin;

        return $this;
    }

    public function getCodChdestin(): ?string
    {
        return $this->codChdestin;
    }

    public function setCodChdestin(string $codChdestin): self
    {
        $this->codChdestin = $codChdestin;

        return $this;
    }

    public function getCodGestdestin(): ?string
    {
        return $this->codGestdestin;
    }

    public function setCodGestdestin(?string $codGestdestin): self
    {
        $this->codGestdestin = $codGestdestin;

        return $this;
    }

    public function getCodFormat(): ?string
    {
        return $this->codFormat;
    }

    public function setCodFormat(string $codFormat): self
    {
        $this->codFormat = $codFormat;

        return $this;
    }


}
