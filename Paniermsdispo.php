<?php

namespace App\Entity;

use App\Repository\PaniermsdispoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaniermsdispoRepository::class)]
class Paniermsdispo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'paniermsdispos')]
    private ?Missiondispo $idMsDispo = null;

    #[ORM\ManyToOne(inversedBy: 'paniermsdispos')]
    private ?Salarie $idSalarie = null;

    #[ORM\Column(nullable: true)]
    private ?bool $notifications = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdMsDispo(): ?Missiondispo
    {
        return $this->idMsDispo;
    }

    public function setIdMsDispo(?Missiondispo $idMsDispo): static
    {
        $this->idMsDispo = $idMsDispo;

        return $this;
    }

    public function getIdSalarie(): ?Salarie
    {
        return $this->idSalarie;
    }

    public function setIdSalarie(?Salarie $idSalarie): static
    {
        $this->idSalarie = $idSalarie;

        return $this;
    }

    public function isNotifications(): ?bool
    {
        return $this->notifications;
    }

    public function setNotifications(?bool $notifications): static
    {
        $this->notifications = $notifications;

        return $this;
    }
}
