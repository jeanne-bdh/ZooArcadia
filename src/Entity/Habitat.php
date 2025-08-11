<?php

namespace App\Entity;

use App\Repository\HabitatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HabitatRepository::class)]
class Habitat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $habitatName = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $habitatDescription = null;

    /**
     * @var Collection<int, Animal>
     */
    #[ORM\OneToMany(targetEntity: Animal::class, mappedBy: 'habitat', orphanRemoval: true)]
    private Collection $animals;

    /**
     * @var Collection<int, CommentHabitat>
     */
    #[ORM\OneToMany(targetEntity: CommentHabitat::class, mappedBy: 'habitat')]
    private Collection $commentHabitats;

    public function __construct()
    {
        $this->animals = new ArrayCollection();
        $this->commentHabitats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHabitatName(): ?string
    {
        return $this->habitatName;
    }

    public function setHabitatName(string $habitatName): static
    {
        $this->habitatName = $habitatName;

        return $this;
    }

    public function getHabitatDescription(): ?string
    {
        return $this->habitatDescription;
    }

    public function setHabitatDescription(string $habitatDescription): static
    {
        $this->habitatDescription = $habitatDescription;

        return $this;
    }

    /**
     * @return Collection<int, Animal>
     */
    public function getAnimals(): Collection
    {
        return $this->animals;
    }

    public function addAnimal(Animal $animal): static
    {
        if (!$this->animals->contains($animal)) {
            $this->animals->add($animal);
            $animal->setHabitat($this);
        }

        return $this;
    }

    public function removeAnimal(Animal $animal): static
    {
        if ($this->animals->removeElement($animal)) {
            // set the owning side to null (unless already changed)
            if ($animal->getHabitat() === $this) {
                $animal->setHabitat(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, CommentHabitat>
     */
    public function getCommentHabitats(): Collection
    {
        return $this->commentHabitats;
    }

    public function addCommentHabitat(CommentHabitat $commentHabitat): static
    {
        if (!$this->commentHabitats->contains($commentHabitat)) {
            $this->commentHabitats->add($commentHabitat);
            $commentHabitat->setHabitat($this);
        }

        return $this;
    }

    public function removeCommentHabitat(CommentHabitat $commentHabitat): static
    {
        if ($this->commentHabitats->removeElement($commentHabitat)) {
            // set the owning side to null (unless already changed)
            if ($commentHabitat->getHabitat() === $this) {
                $commentHabitat->setHabitat(null);
            }
        }

        return $this;
    }
}
