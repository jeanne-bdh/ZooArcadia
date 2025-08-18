<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;

#[MongoDB\Document(collection: "contact")]
class Contact
{
    #[MongoDB\Id]
    private ?string $id = null;

    #[MongoDB\Field(type : 'string')]
    #[Assert\Length(min: 5, max: 50, minMessage: "Veuillez entrer un titre ayant au moins {{ limit }} caractères")]
    private ?string $title = null;

    #[MongoDB\Field(type: 'string')]
    #[Assert\Length(min: 20, minMessage: "Veuillez entrer un message ayant au moins {{ limit }} caractères")]
    private ?string $message = null;

    #[MongoDB\Field(type : 'string')]
    #[Assert\Email(message: "Veuillez entrer une adresse e-mail valide")]
    private ?string $email = null;

    #[MongoDB\Field(type: 'date')]
    private ?\DateTimeInterface $dateContact = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getDateContact(): ?\DateTimeInterface
    {
        return $this->dateContact;
    }

    public function setDateContact(\DateTimeInterface $dateContact): static
    {
        $this->dateContact = $dateContact;

        return $this;
    }
}
