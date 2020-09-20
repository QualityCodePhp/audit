<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XmlLib
 *
 * @ORM\Table(name="xml_lib", uniqueConstraints={@ORM\UniqueConstraint(name="xml_lib_pk", columns={"xml_codedev"})})
 * @ORM\Entity
 */
class XmlLib
{
    /**
     * @var string
     *
     * @ORM\Column(name="xml_codedev", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="xml_lib_xml_codedev_seq", allocationSize=1, initialValue=1)
     */
    private $xmlCodedev;

    /**
     * @var string
     *
     * @ORM\Column(name="xml_libelle", type="string", length=3000, nullable=false)
     */
    private $xmlLibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="xml_comment", type="string", length=3000, nullable=true)
     */
    private $xmlComment;

    public function getXmlCodedev(): ?string
    {
        return $this->xmlCodedev;
    }

    public function getXmlLibelle(): ?string
    {
        return $this->xmlLibelle;
    }

    public function setXmlLibelle(string $xmlLibelle): self
    {
        $this->xmlLibelle = $xmlLibelle;

        return $this;
    }

    public function getXmlComment(): ?string
    {
        return $this->xmlComment;
    }

    public function setXmlComment(?string $xmlComment): self
    {
        $this->xmlComment = $xmlComment;

        return $this;
    }


}
