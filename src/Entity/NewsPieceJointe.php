<?php

namespace App\Entity;

use App\Repository\NewsPieceJointeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NewsPieceJointeRepository::class)
 */
class NewsPieceJointe
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="seq_news_piece_jointe", allocationSize=1, initialValue=1)
     * @ORM\Column(type="integer")
     */
    private $npjId;

    /**
     * @ORM\ManyToOne(targetEntity=News::class, inversedBy="newsPieceJointes")
     * @ORM\JoinColumn(nullable=true, name="news_id", referencedColumnName="news_id")
     */
    private $news;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $npjNomReel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $npjNomStockage;

    /**
     * @return mixed
     */
    public function getNpjId()
    {
        return $this->npjId;
    }


    public function getNews(): ?News
    {
        return $this->news;
    }

    public function setNews(?News $news): self
    {
        $this->news = $news;

        return $this;
    }

    public function getNpjNomReel(): ?string
    {
        return $this->npjNomReel;
    }

    public function setNpjNomReel(string $npjNomReel): self
    {
        $this->npjNomReel = $npjNomReel;

        return $this;
    }

    public function getNpjNomStockage(): ?string
    {
        return $this->npjNomStockage;
    }

    public function setNpjNomStockage(string $npjNomStockage): self
    {
        $this->npjNomStockage = $npjNomStockage;

        return $this;
    }
}
