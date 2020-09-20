<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Civilite
 *
 * @ORM\Table(name="civilite", uniqueConstraints={@ORM\UniqueConstraint(name="civilite_pk", columns={"civ_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\CiviliteRepository")
 */
class Civilite
{
    /**
     * @var int
     *
     * @ORM\Column(name="civ_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="civilite_civ_id_seq", allocationSize=1, initialValue=1)
     */
    private $civId;

    /**
     * @var string
     *
     * @ORM\Column(name="civ_code", type="string", length=3, nullable=false, options={"comment"="Permet de faire la liaison avec LDAP"})
     */
    private $civCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="civ_genre", type="string", length=20, nullable=true)
     */
    private $civGenre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="civ_genrea", type="string", length=7, nullable=true)
     */
    private $civGenrea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="civ_article", type="string", length=5, nullable=true)
     */
    private $civArticle;

    public function getCivId(): ?int
    {
        return $this->civId;
    }

    public function getCivCode(): ?string
    {
        return $this->civCode;
    }

    public function setCivCode(string $civCode): self
    {
        $this->civCode = $civCode;

        return $this;
    }

    public function getCivGenre(): ?string
    {
        return $this->civGenre;
    }

    public function setCivGenre(?string $civGenre): self
    {
        $this->civGenre = $civGenre;

        return $this;
    }

    public function getCivGenrea(): ?string
    {
        return $this->civGenrea;
    }

    public function setCivGenrea(?string $civGenrea): self
    {
        $this->civGenrea = $civGenrea;

        return $this;
    }

    public function getCivArticle(): ?string
    {
        return $this->civArticle;
    }

    public function setCivArticle(?string $civArticle): self
    {
        $this->civArticle = $civArticle;

        return $this;
    }


}
