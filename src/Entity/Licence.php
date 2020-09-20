<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Licence
 *
 * @ORM\Table(name="licence", uniqueConstraints={@ORM\UniqueConstraint(name="licence_pk", columns={"lic_id"})})
 * @ORM\Entity
 */
class Licence
{
    /**
     * @var string
     *
     * @ORM\Column(name="lic_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="licence_lic_id_seq", allocationSize=1, initialValue=1)
     */
    private $licId;

    /**
     * @var string
     *
     * @ORM\Column(name="lic_code", type="string", length=4, nullable=false)
     */
    private $licCode;

    /**
     * @var string
     *
     * @ORM\Column(name="lic_libelle", type="string", length=50, nullable=false)
     */
    private $licLibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lic_sigle", type="string", length=8, nullable=true)
     */
    private $licSigle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lic_immatricul", type="string", length=10, nullable=true)
     */
    private $licImmatricul;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lic_adrsimmeub", type="string", length=38, nullable=true)
     */
    private $licAdrsimmeub;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lic_nvoie", type="string", length=7, nullable=true)
     */
    private $licNvoie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lic_bister", type="string", length=1, nullable=true)
     */
    private $licBister;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lic_adr1", type="string", length=38, nullable=true)
     */
    private $licAdr1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lic_adr2", type="string", length=38, nullable=true)
     */
    private $licAdr2;

    /**
     * @var string
     *
     * @ORM\Column(name="lic_cpostal", type="string", length=5, nullable=false)
     */
    private $licCpostal;

    /**
     * @var string
     *
     * @ORM\Column(name="lic_ville", type="string", length=32, nullable=false)
     */
    private $licVille;

    /**
     * @var string
     *
     * @ORM\Column(name="lic_pays", type="string", length=38, nullable=false)
     */
    private $licPays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lic_tel", type="string", length=16, nullable=true)
     */
    private $licTel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lic_fax", type="string", length=16, nullable=true)
     */
    private $licFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lic_mail", type="string", length=60, nullable=true)
     */
    private $licMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lic_web", type="string", length=50, nullable=true)
     */
    private $licWeb;

    public function getLicId(): ?string
    {
        return $this->licId;
    }

    public function getLicCode(): ?string
    {
        return $this->licCode;
    }

    public function setLicCode(string $licCode): self
    {
        $this->licCode = $licCode;

        return $this;
    }

    public function getLicLibelle(): ?string
    {
        return $this->licLibelle;
    }

    public function setLicLibelle(string $licLibelle): self
    {
        $this->licLibelle = $licLibelle;

        return $this;
    }

    public function getLicSigle(): ?string
    {
        return $this->licSigle;
    }

    public function setLicSigle(?string $licSigle): self
    {
        $this->licSigle = $licSigle;

        return $this;
    }

    public function getLicImmatricul(): ?string
    {
        return $this->licImmatricul;
    }

    public function setLicImmatricul(?string $licImmatricul): self
    {
        $this->licImmatricul = $licImmatricul;

        return $this;
    }

    public function getLicAdrsimmeub(): ?string
    {
        return $this->licAdrsimmeub;
    }

    public function setLicAdrsimmeub(?string $licAdrsimmeub): self
    {
        $this->licAdrsimmeub = $licAdrsimmeub;

        return $this;
    }

    public function getLicNvoie(): ?string
    {
        return $this->licNvoie;
    }

    public function setLicNvoie(?string $licNvoie): self
    {
        $this->licNvoie = $licNvoie;

        return $this;
    }

    public function getLicBister(): ?string
    {
        return $this->licBister;
    }

    public function setLicBister(?string $licBister): self
    {
        $this->licBister = $licBister;

        return $this;
    }

    public function getLicAdr1(): ?string
    {
        return $this->licAdr1;
    }

    public function setLicAdr1(?string $licAdr1): self
    {
        $this->licAdr1 = $licAdr1;

        return $this;
    }

    public function getLicAdr2(): ?string
    {
        return $this->licAdr2;
    }

    public function setLicAdr2(?string $licAdr2): self
    {
        $this->licAdr2 = $licAdr2;

        return $this;
    }

    public function getLicCpostal(): ?string
    {
        return $this->licCpostal;
    }

    public function setLicCpostal(string $licCpostal): self
    {
        $this->licCpostal = $licCpostal;

        return $this;
    }

    public function getLicVille(): ?string
    {
        return $this->licVille;
    }

    public function setLicVille(string $licVille): self
    {
        $this->licVille = $licVille;

        return $this;
    }

    public function getLicPays(): ?string
    {
        return $this->licPays;
    }

    public function setLicPays(string $licPays): self
    {
        $this->licPays = $licPays;

        return $this;
    }

    public function getLicTel(): ?string
    {
        return $this->licTel;
    }

    public function setLicTel(?string $licTel): self
    {
        $this->licTel = $licTel;

        return $this;
    }

    public function getLicFax(): ?string
    {
        return $this->licFax;
    }

    public function setLicFax(?string $licFax): self
    {
        $this->licFax = $licFax;

        return $this;
    }

    public function getLicMail(): ?string
    {
        return $this->licMail;
    }

    public function setLicMail(?string $licMail): self
    {
        $this->licMail = $licMail;

        return $this;
    }

    public function getLicWeb(): ?string
    {
        return $this->licWeb;
    }

    public function setLicWeb(?string $licWeb): self
    {
        $this->licWeb = $licWeb;

        return $this;
    }


}
