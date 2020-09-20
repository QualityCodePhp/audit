<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZoneEmploi
 *
 * @ORM\Table(name="zone_emploi", uniqueConstraints={@ORM\UniqueConstraint(name="zone_emploi_pk", columns={"zoe_id"})})
 * @ORM\Entity
 */
class ZoneEmploi
{
    /**
     * @var string
     *
     * @ORM\Column(name="zoe_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="zone_emploi_zoe_id_seq", allocationSize=1, initialValue=1)
     */
    private $zoeId;

    /**
     * @var string
     *
     * @ORM\Column(name="zoe_etat", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $zoeEtat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zoe_codcom", type="string", length=5, nullable=true)
     */
    private $zoeCodcom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zoe_canton", type="decimal", precision=2, scale=0, nullable=true)
     */
    private $zoeCanton;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zoe_mfe", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $zoeMfe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zoe_anpe", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $zoeAnpe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zoe_cpos", type="string", length=5, nullable=true)
     */
    private $zoeCpos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zoe_numcom", type="string", length=3, nullable=true, options={"comment"="Dans le dÃ©partement"})
     */
    private $zoeNumcom;

    /**
     * @var string
     *
     * @ORM\Column(name="zoe_libpost", type="string", length=94, nullable=false)
     */
    private $zoeLibpost;

    /**
     * @var string
     *
     * @ORM\Column(name="zoe_libinsee", type="string", length=94, nullable=false)
     */
    private $zoeLibinsee;

    /**
     * @var string
     *
     * @ORM\Column(name="zoe_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $zoeAuteurc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="zoe_datec", type="datetime", nullable=false)
     */
    private $zoeDatec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zoe_auteurm", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $zoeAuteurm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="zoe_datem", type="datetime", nullable=true)
     */
    private $zoeDatem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zoe_auteura", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $zoeAuteura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="zoe_datea", type="datetime", nullable=true)
     */
    private $zoeDatea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zoe_refarianne", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $zoeRefarianne;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="zoe_dtfinvalid", type="datetime", nullable=true)
     */
    private $zoeDtfinvalid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zoe_codinsee_commune", type="string", length=5, nullable=true)
     */
    private $zoeCodinseeCommune;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="zoe_dtdebvalid", type="datetime", nullable=true)
     */
    private $zoeDtdebvalid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zoe_dept", type="string", length=3, nullable=true)
     */
    private $zoeDept;

    public function getZoeId(): ?string
    {
        return $this->zoeId;
    }

    public function getZoeEtat(): ?string
    {
        return $this->zoeEtat;
    }

    public function setZoeEtat(string $zoeEtat): self
    {
        $this->zoeEtat = $zoeEtat;

        return $this;
    }

    public function getZoeCodcom(): ?string
    {
        return $this->zoeCodcom;
    }

    public function setZoeCodcom(?string $zoeCodcom): self
    {
        $this->zoeCodcom = $zoeCodcom;

        return $this;
    }

    public function getZoeCanton(): ?string
    {
        return $this->zoeCanton;
    }

    public function setZoeCanton(?string $zoeCanton): self
    {
        $this->zoeCanton = $zoeCanton;

        return $this;
    }

    public function getZoeMfe(): ?string
    {
        return $this->zoeMfe;
    }

    public function setZoeMfe(?string $zoeMfe): self
    {
        $this->zoeMfe = $zoeMfe;

        return $this;
    }

    public function getZoeAnpe(): ?string
    {
        return $this->zoeAnpe;
    }

    public function setZoeAnpe(?string $zoeAnpe): self
    {
        $this->zoeAnpe = $zoeAnpe;

        return $this;
    }

    public function getZoeCpos(): ?string
    {
        return $this->zoeCpos;
    }

    public function setZoeCpos(?string $zoeCpos): self
    {
        $this->zoeCpos = $zoeCpos;

        return $this;
    }

    public function getZoeNumcom(): ?string
    {
        return $this->zoeNumcom;
    }

    public function setZoeNumcom(?string $zoeNumcom): self
    {
        $this->zoeNumcom = $zoeNumcom;

        return $this;
    }

    public function getZoeLibpost(): ?string
    {
        return $this->zoeLibpost;
    }

    public function setZoeLibpost(string $zoeLibpost): self
    {
        $this->zoeLibpost = $zoeLibpost;

        return $this;
    }

    public function getZoeLibinsee(): ?string
    {
        return $this->zoeLibinsee;
    }

    public function setZoeLibinsee(string $zoeLibinsee): self
    {
        $this->zoeLibinsee = $zoeLibinsee;

        return $this;
    }

    public function getZoeAuteurc(): ?string
    {
        return $this->zoeAuteurc;
    }

    public function setZoeAuteurc(string $zoeAuteurc): self
    {
        $this->zoeAuteurc = $zoeAuteurc;

        return $this;
    }

    public function getZoeDatec(): ?\DateTimeInterface
    {
        return $this->zoeDatec;
    }

    public function setZoeDatec(\DateTimeInterface $zoeDatec): self
    {
        $this->zoeDatec = $zoeDatec;

        return $this;
    }

    public function getZoeAuteurm(): ?string
    {
        return $this->zoeAuteurm;
    }

    public function setZoeAuteurm(?string $zoeAuteurm): self
    {
        $this->zoeAuteurm = $zoeAuteurm;

        return $this;
    }

    public function getZoeDatem(): ?\DateTimeInterface
    {
        return $this->zoeDatem;
    }

    public function setZoeDatem(?\DateTimeInterface $zoeDatem): self
    {
        $this->zoeDatem = $zoeDatem;

        return $this;
    }

    public function getZoeAuteura(): ?string
    {
        return $this->zoeAuteura;
    }

    public function setZoeAuteura(?string $zoeAuteura): self
    {
        $this->zoeAuteura = $zoeAuteura;

        return $this;
    }

    public function getZoeDatea(): ?\DateTimeInterface
    {
        return $this->zoeDatea;
    }

    public function setZoeDatea(?\DateTimeInterface $zoeDatea): self
    {
        $this->zoeDatea = $zoeDatea;

        return $this;
    }

    public function getZoeRefarianne(): ?string
    {
        return $this->zoeRefarianne;
    }

    public function setZoeRefarianne(?string $zoeRefarianne): self
    {
        $this->zoeRefarianne = $zoeRefarianne;

        return $this;
    }

    public function getZoeDtfinvalid(): ?\DateTimeInterface
    {
        return $this->zoeDtfinvalid;
    }

    public function setZoeDtfinvalid(?\DateTimeInterface $zoeDtfinvalid): self
    {
        $this->zoeDtfinvalid = $zoeDtfinvalid;

        return $this;
    }

    public function getZoeCodinseeCommune(): ?string
    {
        return $this->zoeCodinseeCommune;
    }

    public function setZoeCodinseeCommune(?string $zoeCodinseeCommune): self
    {
        $this->zoeCodinseeCommune = $zoeCodinseeCommune;

        return $this;
    }

    public function getZoeDtdebvalid(): ?\DateTimeInterface
    {
        return $this->zoeDtdebvalid;
    }

    public function setZoeDtdebvalid(?\DateTimeInterface $zoeDtdebvalid): self
    {
        $this->zoeDtdebvalid = $zoeDtdebvalid;

        return $this;
    }

    public function getZoeDept(): ?string
    {
        return $this->zoeDept;
    }

    public function setZoeDept(?string $zoeDept): self
    {
        $this->zoeDept = $zoeDept;

        return $this;
    }


}
