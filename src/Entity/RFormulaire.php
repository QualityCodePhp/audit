<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RFormulaire
 *
 * @ORM\Table(name="r_formulaire", uniqueConstraints={@ORM\UniqueConstraint(name="r_formulaire_pk", columns={"ruf_id"})}, indexes={@ORM\Index(name="r_formulaire_efeif", columns={"ruf_entete"})})
 * @ORM\Entity
 */
class RFormulaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="ruf_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="r_formulaire_ruf_id_seq", allocationSize=1, initialValue=1)
     */
    private $rufId;

    /**
     * @var string
     *
     * @ORM\Column(name="ruf_rang", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $rufRang;

    /**
     * @var string
     *
     * @ORM\Column(name="ruf_type", type="string", length=1, nullable=false, options={"comment"="0=Normal, 1=Tableau"})
     */
    private $rufType;

    /**
     * @var string
     *
     * @ORM\Column(name="ruf_libelle", type="string", length=50, nullable=false)
     */
    private $rufLibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ruf_modif", type="decimal", precision=1, scale=0, nullable=true, options={"comment"="1-modifiable 0-autres"})
     */
    private $rufModif;

    /**
     * @var \EFormulaire
     *
     * @ORM\ManyToOne(targetEntity="EFormulaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ruf_entete", referencedColumnName="etf_id")
     * })
     */
    private $rufEntete;

    public function getRufId(): ?int
    {
        return $this->rufId;
    }

    public function getRufRang(): ?string
    {
        return $this->rufRang;
    }

    public function setRufRang(string $rufRang): self
    {
        $this->rufRang = $rufRang;

        return $this;
    }

    public function getRufType(): ?string
    {
        return $this->rufType;
    }

    public function setRufType(string $rufType): self
    {
        $this->rufType = $rufType;

        return $this;
    }

    public function getRufLibelle(): ?string
    {
        return $this->rufLibelle;
    }

    public function setRufLibelle(string $rufLibelle): self
    {
        $this->rufLibelle = $rufLibelle;

        return $this;
    }

    public function getRufModif(): ?string
    {
        return $this->rufModif;
    }

    public function setRufModif(?string $rufModif): self
    {
        $this->rufModif = $rufModif;

        return $this;
    }

    public function getRufEntete(): ?EFormulaire
    {
        return $this->rufEntete;
    }

    public function setRufEntete(?EFormulaire $rufEntete): self
    {
        $this->rufEntete = $rufEntete;

        return $this;
    }


}
