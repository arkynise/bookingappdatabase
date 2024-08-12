<?php

namespace App\Entity;

use App\Repository\PanierurgenceentrepriseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PanierurgenceentrepriseRepository::class)]
class Panierurgenceentreprise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?bool $notifications = null;

    #[ORM\ManyToOne(inversedBy: 'panierurgenceentreprises')]
    private ?salarie $idSalarie = null;

    #[ORM\ManyToOne(inversedBy: 'panierurgenceentreprises')]
    private ?urgenceentreprise $idUrgence = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdSalarie(): ?salarie
    {
        return $this->idSalarie;
    }

    public function setIdSalarie(?salarie $idSalarie): static
    {
        $this->idSalarie = $idSalarie;

        return $this;
    }

    public function getIdUrgence(): ?urgenceentreprise
    {
        return $this->idUrgence;
    }

    public function setIdUrgence(?urgenceentreprise $idUrgence): static
    {
        $this->idUrgence = $idUrgence;

        return $this;
    }
}
