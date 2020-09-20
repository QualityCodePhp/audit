<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AriLocal
 *
 * @ORM\Table(name="ari_local", uniqueConstraints={@ORM\UniqueConstraint(name="ari_local_pk", columns={"alo_id"})})
 * @ORM\Entity
 */
class AriLocal
{
    /**
     * @var string
     *
     * @ORM\Column(name="alo_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ari_local_alo_id_seq", allocationSize=1, initialValue=1)
     */
    private $aloId;

    /**
     * @var string
     *
     * @ORM\Column(name="alo_coll", type="string", length=5, nullable=false)
     */
    private $aloColl;

    /**
     * @var string
     *
     * @ORM\Column(name="alo_qual", type="string", length=10, nullable=false)
     */
    private $aloQual;

    /**
     * @var string
     *
     * @ORM\Column(name="alo_nomen", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $aloNomen;

    /**
     * @var string
     *
     * @ORM\Column(name="alo_libelle", type="string", length=40, nullable=false)
     */
    private $aloLibelle;

    public function getAloId(): ?string
    {
        return $this->aloId;
    }

    public function getAloColl(): ?string
    {
        return $this->aloColl;
    }

    public function setAloColl(string $aloColl): self
    {
        $this->aloColl = $aloColl;

        return $this;
    }

    public function getAloQual(): ?string
    {
        return $this->aloQual;
    }

    public function setAloQual(string $aloQual): self
    {
        $this->aloQual = $aloQual;

        return $this;
    }

    public function getAloNomen(): ?string
    {
        return $this->aloNomen;
    }

    public function setAloNomen(string $aloNomen): self
    {
        $this->aloNomen = $aloNomen;

        return $this;
    }

    public function getAloLibelle(): ?string
    {
        return $this->aloLibelle;
    }

    public function setAloLibelle(string $aloLibelle): self
    {
        $this->aloLibelle = $aloLibelle;

        return $this;
    }


}
