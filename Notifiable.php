<?php

namespace App\Entity;

use App\Repository\NotifiableRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NotifiableRepository::class)]
class Notifiable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $notifiable = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $class = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNotifiable(): ?string
    {
        return $this->notifiable;
    }

    public function setNotifiable(?string $notifiable): static
    {
        $this->notifiable = $notifiable;

        return $this;
    }

    public function getClass(): ?string
    {
        return $this->class;
    }

    public function setClass(?string $class): static
    {
        $this->class = $class;

        return $this;
    }
}
