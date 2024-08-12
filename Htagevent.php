<?php

namespace App\Entity;

use App\Repository\HtageventRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HtageventRepository::class)]
class Htagevent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'htagevents')]
    private ?htag $idHtag = null;

    #[ORM\ManyToOne(inversedBy: 'htagevents')]
    private ?event $idEvent = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdHtag(): ?htag
    {
        return $this->idHtag;
    }

    public function setIdHtag(?htag $idHtag): static
    {
        $this->idHtag = $idHtag;

        return $this;
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
}
