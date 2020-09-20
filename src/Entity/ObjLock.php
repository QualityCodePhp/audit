<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObjLock
 *
 * @ORM\Table(name="obj_lock", uniqueConstraints={@ORM\UniqueConstraint(name="obj_lock_pk", columns={"obj_id"})}, indexes={@ORM\Index(name="obj_lock_uuif", columns={"obj_auteurl"})})
 * @ORM\Entity
 */
class ObjLock
{
    /**
     * @var string
     *
     * @ORM\Column(name="obj_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="obj_lock_obj_id_seq", allocationSize=1, initialValue=1)
     */
    private $objId;

    /**
     * @var string
     *
     * @ORM\Column(name="obj_libtable", type="string", length=50, nullable=false)
     */
    private $objLibtable;

    /**
     * @var string
     *
     * @ORM\Column(name="obj_objet", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $objObjet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="obj_datel", type="datetime", nullable=false)
     */
    private $objDatel;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="obj_auteurl", referencedColumnName="uti_id")
     * })
     */
    private $objAuteurl;

    public function getObjId(): ?string
    {
        return $this->objId;
    }

    public function getObjLibtable(): ?string
    {
        return $this->objLibtable;
    }

    public function setObjLibtable(string $objLibtable): self
    {
        $this->objLibtable = $objLibtable;

        return $this;
    }

    public function getObjObjet(): ?string
    {
        return $this->objObjet;
    }

    public function setObjObjet(string $objObjet): self
    {
        $this->objObjet = $objObjet;

        return $this;
    }

    public function getObjDatel(): ?\DateTimeInterface
    {
        return $this->objDatel;
    }

    public function setObjDatel(\DateTimeInterface $objDatel): self
    {
        $this->objDatel = $objDatel;

        return $this;
    }

    public function getObjAuteurl(): ?Utilisateur
    {
        return $this->objAuteurl;
    }

    public function setObjAuteurl(?Utilisateur $objAuteurl): self
    {
        $this->objAuteurl = $objAuteurl;

        return $this;
    }


}
