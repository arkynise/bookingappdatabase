<?php

namespace App\Entity;

use App\Repository\ProfilepubeventRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfilepubeventRepository::class)]
class Profilepubevent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'profilepubevents')]
    private ?pubevent $idPubEvent = null;

    #[ORM\ManyToOne(inversedBy: 'profilepubevents')]
    private ?profile $idProfile = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPubEvent(): ?pubevent
    {
        return $this->idPubEvent;
    }

    public function setIdPubEvent(?pubevent $idPubEvent): static
    {
        $this->idPubEvent = $idPubEvent;

        return $this;
    }

    public function getIdProfile(): ?profile
    {
        return $this->idProfile;
    }

    public function setIdProfile(?profile $idProfile): static
    {
        $this->idProfile = $idProfile;

        return $this;
    }
}
