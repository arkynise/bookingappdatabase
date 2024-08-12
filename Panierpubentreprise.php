<?php

namespace App\Entity;

use App\Repository\PanierpubentrepriseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PanierpubentrepriseRepository::class)]
class Panierpubentreprise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?bool $notifications = null;

    #[ORM\ManyToOne(inversedBy: 'panierpubentreprises')]
    private ?pubentreprise $idPub = null;

    #[ORM\ManyToOne(inversedBy: 'panierpubentreprises')]
    private ?salarie $idSalarie = null;

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

    public function getIdPub(): ?pubentreprise
    {
        return $this->idPub;
    }

    public function setIdPub(?pubentreprise $idPub): static
    {
        $this->idPub = $idPub;

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
}
