<?php

namespace App\Entity;

use App\Repository\PanierurgenceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PanierurgenceRepository::class)]
class Panierurgence
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?bool $notifications = null;

    #[ORM\ManyToOne(inversedBy: 'panierurgences')]
    #[ORM\JoinColumn(name:"idSalarie", referencedColumnName:"id")]
    private ?salarie $idSalarie = null;

    #[ORM\ManyToOne(inversedBy: 'panierurgences')]
    #[ORM\JoinColumn(name:"idUrgence_id", referencedColumnName:"id")]
    private ?urgenceevent $idUrgence = null;

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

    public function getIdUrgence(): ?urgenceevent
    {
        return $this->idUrgence;
    }

    public function setIdUrgence(?urgenceevent $idUrgence): static
    {
        $this->idUrgence = $idUrgence;

        return $this;
    }
}
