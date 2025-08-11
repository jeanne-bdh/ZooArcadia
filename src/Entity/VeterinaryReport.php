<?php

namespace App\Entity;

use App\Repository\VeterinaryReportRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VeterinaryReportRepository::class)]
class VeterinaryReport
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $datePassage = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $detailAnimal = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $observation = null;

    #[ORM\Column]
    private ?int $quantity = null;

    #[ORM\ManyToOne(inversedBy: 'veterinaryReports')]
    private ?Animal $animal = null;

    #[ORM\ManyToOne(inversedBy: 'veterinaryReports')]
    #[ORM\JoinColumn(nullable: false)]
    private ?State $state = null;

    #[ORM\ManyToOne(inversedBy: 'veterinaryReports')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'veterinaryReports')]
    #[ORM\JoinColumn(nullable: false)]
    private ?foodType $foodType = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatePassage(): ?\DateTime
    {
        return $this->datePassage;
    }

    public function setDatePassage(\DateTime $datePassage): static
    {
        $this->datePassage = $datePassage;

        return $this;
    }

    public function getDetailAnimal(): ?string
    {
        return $this->detailAnimal;
    }

    public function setDetailAnimal(string $detailAnimal): static
    {
        $this->detailAnimal = $detailAnimal;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(string $observation): static
    {
        $this->observation = $observation;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getAnimal(): ?Animal
    {
        return $this->animal;
    }

    public function setAnimal(?Animal $animal): static
    {
        $this->animal = $animal;

        return $this;
    }

    public function getState(): ?State
    {
        return $this->state;
    }

    public function setState(?State $state): static
    {
        $this->state = $state;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getFoodType(): ?foodType
    {
        return $this->foodType;
    }

    public function setFoodType(?foodType $foodType): static
    {
        $this->foodType = $foodType;

        return $this;
    }
}
