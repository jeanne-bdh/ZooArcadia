<?php

namespace App\Entity;

use App\Repository\HabitatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: HabitatRepository::class)]
#[Vich\Uploadable]
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

    #[Vich\UploadableField(mapping: 'habitat', fileNameProperty: 'imageName', size: 'imageSize')]
    private ?File $imageFile = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName = null;

    #[ORM\Column(nullable: true)]
    private ?int $imageSize = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

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
        if ($this->animals->removeElement($animal) && ($animal->getHabitat() === $this)) {
            // set the owning side to null (unless already changed)
                $animal->setHabitat(null);
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
        if ($this->commentHabitats->removeElement($commentHabitat) && ($commentHabitat->getHabitat() === $this)) {
            // set the owning side to null (unless already changed)
                $commentHabitat->setHabitat(null);
            }

        return $this;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile
     */
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageName(?string $imageName): void
    {
        $this->imageName = $imageName;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageSize(?int $imageSize): void
    {
        $this->imageSize = $imageSize;
    }

    public function getImageSize(): ?int
    {
        return $this->imageSize;
    }
}
