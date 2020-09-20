<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffmouSessionsPrevues
 *
 * @ORM\Table(name="offmou_sessions_prevues", uniqueConstraints={@ORM\UniqueConstraint(name="offmou_sessions_prevues_pk", columns={"offmousp_id"})}, indexes={@ORM\Index(name="offmou_offmousp_fk", columns={"ofmou_id"})})
 * @ORM\Entity
 */
class OffmouSessionsPrevues
{
    /**
     * @var int
     *
     * @ORM\Column(name="offmousp_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="offmou_sessions_prevues_offmousp_id_seq", allocationSize=1, initialValue=1)
     */
    private $offmouspId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="offmousp_num_insee", type="string", length=10, nullable=true)
     */
    private $offmouspNumInsee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="offmousp_code_postal", type="string", length=6, nullable=true)
     */
    private $offmouspCodePostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="offmousp_siret", type="string", length=20, nullable=true)
     */
    private $offmouspSiret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="offmousp_nb_sess_prevues", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $offmouspNbSessPrevues;

    /**
     * @var string|null
     *
     * @ORM\Column(name="offmousp_nb_sess_optionnel", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $offmouspNbSessOptionnel;

    /**
     * @var string
     *
     * @ORM\Column(name="offmousp_flg_suppr", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $offmouspFlgSuppr;

    /**
     * @var \OffreModule
     *
     * @ORM\ManyToOne(targetEntity="OffreModule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ofmou_id", referencedColumnName="ofmou_id")
     * })
     */
    private $ofmou;

    public function getOffmouspId(): ?int
    {
        return $this->offmouspId;
    }

    public function getOffmouspNumInsee(): ?string
    {
        return $this->offmouspNumInsee;
    }

    public function setOffmouspNumInsee(?string $offmouspNumInsee): self
    {
        $this->offmouspNumInsee = $offmouspNumInsee;

        return $this;
    }

    public function getOffmouspCodePostal(): ?string
    {
        return $this->offmouspCodePostal;
    }

    public function setOffmouspCodePostal(?string $offmouspCodePostal): self
    {
        $this->offmouspCodePostal = $offmouspCodePostal;

        return $this;
    }

    public function getOffmouspSiret(): ?string
    {
        return $this->offmouspSiret;
    }

    public function setOffmouspSiret(?string $offmouspSiret): self
    {
        $this->offmouspSiret = $offmouspSiret;

        return $this;
    }

    public function getOffmouspNbSessPrevues(): ?string
    {
        return $this->offmouspNbSessPrevues;
    }

    public function setOffmouspNbSessPrevues(?string $offmouspNbSessPrevues): self
    {
        $this->offmouspNbSessPrevues = $offmouspNbSessPrevues;

        return $this;
    }

    public function getOffmouspNbSessOptionnel(): ?string
    {
        return $this->offmouspNbSessOptionnel;
    }

    public function setOffmouspNbSessOptionnel(?string $offmouspNbSessOptionnel): self
    {
        $this->offmouspNbSessOptionnel = $offmouspNbSessOptionnel;

        return $this;
    }

    public function getOffmouspFlgSuppr(): ?string
    {
        return $this->offmouspFlgSuppr;
    }

    public function setOffmouspFlgSuppr(string $offmouspFlgSuppr): self
    {
        $this->offmouspFlgSuppr = $offmouspFlgSuppr;

        return $this;
    }

    public function getOfmou(): ?OffreModule
    {
        return $this->ofmou;
    }

    public function setOfmou(?OffreModule $ofmou): self
    {
        $this->ofmou = $ofmou;

        return $this;
    }


}
