<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
#[Vich\Uploadable]
class Service
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $serviceName = null;

    #[ORM\Column(type: 'text')]
    private ?string $serviceDescription = null;

    #[Vich\UploadableField(mapping: 'service', fileNameProperty: 'imageName', size: 'imageSize')]
    private ?File $imageFile = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName = null;

    #[ORM\Column(nullable: true)]
    private ?int $imageSize = null;

    #[Vich\UploadableField(mapping: 'service', fileNameProperty: 'iconName', size: 'iconSize')]
    private ?File $iconFile = null;

    #[ORM\Column(nullable: true)]
    private ?string $iconName = null;

    #[ORM\Column(nullable: true)]
    private ?int $iconSize = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getServiceName(): ?string
    {
        return $this->serviceName;
    }

    public function setServiceName(string $serviceName): static
    {
        $this->serviceName = $serviceName;

        return $this;
    }

    public function getServiceDescription(): ?string
    {
        return $this->serviceDescription;
    }

    public function setServiceDescription(string $serviceDescription): static
    {
        $this->serviceDescription = $serviceDescription;

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
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $iconFile
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

    public function setIconFile(?File $iconFile = null): void
    {
        $this->iconFile = $iconFile;

        if (null !== $iconFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getIconFile(): ?File
    {
        return $this->iconFile;
    }

    public function setIconName(?string $iconName): void
    {
        $this->iconName = $iconName;
    }

    public function getIconName(): ?string
    {
        return $this->iconName;
    }

    public function setIconSize(?int $iconSize): void
    {
        $this->iconSize = $iconSize;
    }

    public function getIconSize(): ?int
    {
        return $this->iconSize;
    }
}