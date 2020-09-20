<?php

namespace App\Entity;

use App\Repository\NewsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=NewsRepository::class)
 */
class News
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="seq_news", allocationSize=1, initialValue=1)
     * @ORM\Column(type="integer")
     */
    private $newsId;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    private $newsTitre;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    private $newsContenu;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank
     * @Assert\DateTime
     * @var string A "Y-m-d H:i:s" formatted value
     */
    private $newsDateDebValid;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank
     * @Assert\DateTime
     * @var string A "Y-m-d H:i:s" formatted value
     */
     private $newsDateFinValid;


    /**
     * @ORM\ManyToOne(targetEntity=Referentiel::class)
     * @ORM\JoinColumn(nullable=false,name="ref_id_priorite", referencedColumnName="ref_id")
     * @Assert\NotBlank
     */
    private $refIdPriorite;

    /**
     *  @ORM\ManyToOne(targetEntity=Referentiel::class)
     *  @ORM\JoinColumn(nullable=false,name="ref_id_visibilite", referencedColumnName="ref_id")
     *  @Assert\NotBlank
     */
    private $refIdVisibilite;

    /**
     * @ORM\OneToMany(targetEntity=NewsPieceJointe::class, mappedBy="news", cascade={"persist"})
     */
    private $newsPieceJointes;

    /**
     * @ORM\ManyToOne(targetEntity=Referentiel::class)
     * @ORM\JoinColumn(nullable=false, name="ref_id_type", referencedColumnName="ref_id")
     * @Assert\NotBlank
     */
    private $refIdType;

    public function __construct()
    {

        $this->newsPieceJointes = new ArrayCollection();
    }

   /**
     * @return mixed
     */
    public function getNewsId()
    {
        return $this->newsId;
    }

    /**
     * @return mixed
     */
    public function getNewsTitre()
    {
        return $this->newsTitre;
    }

    /**
     * @param mixed $newsTitre
     */
    public function setNewsTitre($newsTitre): void
    {
        $this->newsTitre = $newsTitre;
    }

    /**
     * @return mixed
     */
    public function getNewsContenu()
    {
        return $this->newsContenu;
    }

    /**
     * @param mixed $newsContenu
     */
    public function setNewsContenu($newsContenu): void
    {
        $this->newsContenu = $newsContenu;
    }

    /**
     * @return mixed
     */
    public function getNewsDateDebValid()
    {
        return $this->newsDateDebValid;
    }

    /**
     * @param mixed $newsDateDebValid
     */
    public function setNewsDateDebValid($newsDateDebValid): void
    {
        $this->newsDateDebValid = $newsDateDebValid;
    }

    /**
     * @return mixed
     */
    public function getNewsDateFinValid()
    {
        return $this->newsDateFinValid;
    }

    /**
     * @param mixed $newsDateFinValid
     */
    public function setNewsDateFinValid($newsDateFinValid): void
    {
        $this->newsDateFinValid = $newsDateFinValid;
    }

    /**
     * @return mixed
     */
    public function getRefIdPriorite(): ?Referentiel
    {
        return $this->refIdPriorite;
    }

    /**
     * @param mixed $refIdPriorite
     */
    public function setRefIdPriorite(Referentiel $refIdPriorite): void
    {
        $this->refIdPriorite = $refIdPriorite;
    }

    /**
     * @return mixed
     */
    public function getRefIdVisibilite(): ?Referentiel
    {
        return $this->refIdVisibilite;
    }

    /**
     * @param mixed $refIdVisibilite
     */
    public function setRefIdVisibilite(Referentiel $refIdVisibilite): void
    {
        $this->refIdVisibilite = $refIdVisibilite;
    }

    /**
     * @return Collection|NewsPieceJointe[]
     */
    public function getNewsPieceJointes(): Collection
    {
        return $this->newsPieceJointes;
    }

    public function addNewsPieceJointe(NewsPieceJointe $newsPieceJointe): self
    {
        if (!$this->newsPieceJointes->contains($newsPieceJointe)) {
            $this->newsPieceJointes[] = $newsPieceJointe;
            $newsPieceJointe->setNews($this);
        }

        return $this;
    }

    public function removeNewsPieceJointe(NewsPieceJointe $newsPieceJointe): self
    {
        if ($this->newsPieceJointes->contains($newsPieceJointe)) {
            $this->newsPieceJointes->removeElement($newsPieceJointe);
            // set the owning side to null (unless already changed)
            if ($newsPieceJointe->getNews() === $this) {
                $newsPieceJointe->setNews(null);
            }
        }

        return $this;
    }

    public function getRefIdType(): ?Referentiel
    {
        return $this->refIdType;
    }

    public function setRefIdType(?Referentiel $refIdType): self
    {
        $this->refIdType = $refIdType;

        return $this;
    }


}
