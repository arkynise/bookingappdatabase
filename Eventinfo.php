<?php

namespace App\Entity;

use App\Repository\EventinfoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventinfoRepository::class)]
class Eventinfo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'eventinfos')]
    private ?event $idEvent = null;

    #[ORM\ManyToOne(inversedBy: 'eventinfos')]
    private ?eventcolor $idEventColor = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEvent(): ?event
    {
        return $this->idEvent;
    }

    public function setIdEvent(?event $idEvent): static
    {
        $this->idEvent = $idEvent;

        return $this;
    }

    public function getIdEventColor(): ?eventcolor
    {
        return $this->idEventColor;
    }

    public function setIdEventColor(?eventcolor $idEventColor): static
    {
        $this->idEventColor = $idEventColor;

        return $this;
    }
}
