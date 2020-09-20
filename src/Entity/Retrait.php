<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Retrait
 *
 * @ORM\Table(name="retrait", uniqueConstraints={@ORM\UniqueConstraint(name="retrait_pk", columns={"ret_id"})}, indexes={@ORM\Index(name="retrait_aaif", columns={"ret_antao"}), @ORM\Index(name="retrait_uuif", columns={"ret_respao"}), @ORM\Index(name="retrait_ddif", columns={"ret_dispositif"}), @ORM\Index(name="retrait_ppif", columns={"ret_programme"}), @ORM\Index(name="retrait_eeif", columns={"ret_ets"}), @ORM\Index(name="retrait_ffif", columns={"ret_fonctionao"})})
 * @ORM\Entity
 */
class Retrait
{
    /**
     * @var string
     *
     * @ORM\Column(name="ret_id", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="retrait_ret_id_seq", allocationSize=1, initialValue=1)
     */
    private $retId;

    /**
     * @var string
     *
     * @ORM\Column(name="ret_maj", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $retMaj;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ret_datec", type="datetime", nullable=false)
     */
    private $retDatec;

    /**
     * @var string
     *
     * @ORM\Column(name="ret_auteurc", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $retAuteurc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ret_datear", type="datetime", nullable=true)
     */
    private $retDatear;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ret_nomao", type="string", length=50, nullable=true)
     */
    private $retNomao;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ret_prenomao", type="string", length=50, nullable=true)
     */
    private $retPrenomao;

    /**
     * @var string
     *
     * @ORM\Column(name="ret_mailao", type="string", length=60, nullable=false)
     */
    private $retMailao;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ret_libantao", type="string", length=50, nullable=true)
     */
    private $retLibantao;

    /**
     * @var \Antenne
     *
     * @ORM\ManyToOne(targetEntity="Antenne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ret_antao", referencedColumnName="ant_id")
     * })
     */
    private $retAntao;

    /**
     * @var \Dispositif
     *
     * @ORM\ManyToOne(targetEntity="Dispositif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ret_dispositif", referencedColumnName="dsp_id")
     * })
     */
    private $retDispositif;

    /**
     * @var \Etablssmt
     *
     * @ORM\ManyToOne(targetEntity="Etablssmt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ret_ets", referencedColumnName="ets_id")
     * })
     */
    private $retEts;

    /**
     * @var \Fonction
     *
     * @ORM\ManyToOne(targetEntity="Fonction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ret_fonctionao", referencedColumnName="fct_id")
     * })
     */
    private $retFonctionao;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ret_programme", referencedColumnName="prg_id")
     * })
     */
    private $retProgramme;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ret_respao", referencedColumnName="uti_id")
     * })
     */
    private $retRespao;

    public function getRetId(): ?string
    {
        return $this->retId;
    }

    public function getRetMaj(): ?string
    {
        return $this->retMaj;
    }

    public function setRetMaj(string $retMaj): self
    {
        $this->retMaj = $retMaj;

        return $this;
    }

    public function getRetDatec(): ?\DateTimeInterface
    {
        return $this->retDatec;
    }

    public function setRetDatec(\DateTimeInterface $retDatec): self
    {
        $this->retDatec = $retDatec;

        return $this;
    }

    public function getRetAuteurc(): ?string
    {
        return $this->retAuteurc;
    }

    public function setRetAuteurc(string $retAuteurc): self
    {
        $this->retAuteurc = $retAuteurc;

        return $this;
    }

    public function getRetDatear(): ?\DateTimeInterface
    {
        return $this->retDatear;
    }

    public function setRetDatear(?\DateTimeInterface $retDatear): self
    {
        $this->retDatear = $retDatear;

        return $this;
    }

    public function getRetNomao(): ?string
    {
        return $this->retNomao;
    }

    public function setRetNomao(?string $retNomao): self
    {
        $this->retNomao = $retNomao;

        return $this;
    }

    public function getRetPrenomao(): ?string
    {
        return $this->retPrenomao;
    }

    public function setRetPrenomao(?string $retPrenomao): self
    {
        $this->retPrenomao = $retPrenomao;

        return $this;
    }

    public function getRetMailao(): ?string
    {
        return $this->retMailao;
    }

    public function setRetMailao(string $retMailao): self
    {
        $this->retMailao = $retMailao;

        return $this;
    }

    public function getRetLibantao(): ?string
    {
        return $this->retLibantao;
    }

    public function setRetLibantao(?string $retLibantao): self
    {
        $this->retLibantao = $retLibantao;

        return $this;
    }

    public function getRetAntao(): ?Antenne
    {
        return $this->retAntao;
    }

    public function setRetAntao(?Antenne $retAntao): self
    {
        $this->retAntao = $retAntao;

        return $this;
    }

    public function getRetDispositif(): ?Dispositif
    {
        return $this->retDispositif;
    }

    public function setRetDispositif(?Dispositif $retDispositif): self
    {
        $this->retDispositif = $retDispositif;

        return $this;
    }

    public function getRetEts(): ?Etablssmt
    {
        return $this->retEts;
    }

    public function setRetEts(?Etablssmt $retEts): self
    {
        $this->retEts = $retEts;

        return $this;
    }

    public function getRetFonctionao(): ?Fonction
    {
        return $this->retFonctionao;
    }

    public function setRetFonctionao(?Fonction $retFonctionao): self
    {
        $this->retFonctionao = $retFonctionao;

        return $this;
    }

    public function getRetProgramme(): ?Programme
    {
        return $this->retProgramme;
    }

    public function setRetProgramme(?Programme $retProgramme): self
    {
        $this->retProgramme = $retProgramme;

        return $this;
    }

    public function getRetRespao(): ?Utilisateur
    {
        return $this->retRespao;
    }

    public function setRetRespao(?Utilisateur $retRespao): self
    {
        $this->retRespao = $retRespao;

        return $this;
    }


}
