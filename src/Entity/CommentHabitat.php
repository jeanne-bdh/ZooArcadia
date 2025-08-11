<?php

namespace App\Entity;

use App\Repository\CommentHabitatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentHabitatRepository::class)]
class CommentHabitat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $commentHabitat = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateCommenthabitat = null;

    #[ORM\ManyToOne(inversedBy: 'commentHabitats')]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'commentHabitats')]
    private ?Habitat $habitat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommentHabitat(): ?string
    {
        return $this->commentHabitat;
    }

    public function setCommentHabitat(string $commentHabitat): static
    {
        $this->commentHabitat = $commentHabitat;

        return $this;
    }

    public function getDateCommenthabitat(): ?\DateTime
    {
        return $this->dateCommenthabitat;
    }

    public function setDateCommenthabitat(\DateTime $dateCommenthabitat): static
    {
        $this->dateCommenthabitat = $dateCommenthabitat;

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

    public function getHabitat(): ?Habitat
    {
        return $this->habitat;
    }

    public function setHabitat(?Habitat $habitat): static
    {
        $this->habitat = $habitat;

        return $this;
    }
}
