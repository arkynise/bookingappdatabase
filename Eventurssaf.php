<?php

namespace App\Entity;

use App\Repository\EventurssafRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventurssafRepository::class)]
class Eventurssaf
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'eventurssafs')]
    private ?user $id_user = null;

    #[ORM\ManyToOne(inversedBy: 'eventurssafs')]
    private ?event $id_event = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?user
    {
        return $this->id_user;
    }

    public function setIdUser(?user $id_user): static
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getIdEvent(): ?event
    {
        return $this->id_event;
    }

    public function setIdEvent(?event $id_event): static
    {
        $this->id_event = $id_event;

        return $this;
    }
}
