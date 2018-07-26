<?php
namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\OneToMany(targetEntity="App\Entity\ImageAnes", mappedBy="anes", orphanRemoval=true)
     */
    private $image;

    public function __construct()
    {
        $this->image = new ArrayCollection();
    }

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

    /**
     * @return Collection|ImageAnes[]
     */
    public function getImage(): Collection
    {
        return $this->image;
    }

    public function addImage(ImageAnes $image): self
    {
        if (!$this->image->contains($image)) {
            $this->image[] = $image;
            $image->setAnes($this);
        }

        return $this;
    }

    public function removeImage(ImageAnes $image): self
    {
        if ($this->image->contains($image)) {
            $this->image->removeElement($image);
            // set the owning side to null (unless already changed)
            if ($image->getAnes() === $this) {
                $image->setAnes(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->nom;
    }
}