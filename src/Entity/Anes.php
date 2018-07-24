<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnesRepository")
 */
class Anes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     */
    private $anneeNaissance;

    /**
     * @ORM\Column(type="text")
     */
    private $text;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image001;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image002;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image003;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image004;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image005;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image006;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image007;

    public function getId()
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAnneeNaissance(): ?int
    {
        return $this->anneeNaissance;
    }

    public function setAnneeNaissance(int $anneeNaissance): self
    {
        $this->anneeNaissance = $anneeNaissance;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getImage001(): ?string
    {
        return $this->image001;
    }

    public function setImage001(string $image001): self
    {
        $this->image001 = $image001;

        return $this;
    }

    public function getImage002(): ?string
    {
        return $this->image002;
    }

    public function setImage002(string $image002): self
    {
        $this->image002 = $image002;

        return $this;
    }

    public function getImage003(): ?string
    {
        return $this->image003;
    }

    public function setImage003(string $image003): self
    {
        $this->image003 = $image003;

        return $this;
    }

    public function getImage004(): ?string
    {
        return $this->image004;
    }

    public function setImage004(string $image004): self
    {
        $this->image004 = $image004;

        return $this;
    }

    public function getImage005(): ?string
    {
        return $this->image005;
    }

    public function setImage005(string $image005): self
    {
        $this->image005 = $image005;

        return $this;
    }

    public function getImage006(): ?string
    {
        return $this->image006;
    }

    public function setImage006(string $image006): self
    {
        $this->image006 = $image006;

        return $this;
    }

    public function getImage007(): ?string
    {
        return $this->image007;
    }

    public function setImage007(string $image007): self
    {
        $this->image007 = $image007;

        return $this;
    }
}
