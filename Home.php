<?php

namespace App\Entity;

use App\Repository\HomeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HomeRepository::class)]
class Home
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'homes')]
    private ?Media $imageHome = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImageHome(): ?Media
    {
        return $this->imageHome;
    }

    public function setImageHome(?Media $imageHome): static
    {
        $this->imageHome = $imageHome;

        return $this;
    }
}
