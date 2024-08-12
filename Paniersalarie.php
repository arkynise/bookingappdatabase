<?php

namespace App\Entity;

use App\Repository\PaniersalarieRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaniersalarieRepository::class)]
class Paniersalarie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\ManyToOne(inversedBy: 'paniersalaries')]
    private ?panier $idPanier = null;

    #[ORM\ManyToOne(inversedBy: 'paniersalaries')]
    private ?salarie $idSalarie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Etat = null;

    #[ORM\Column(nullable: true)]
    private ?bool $notifications = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $dateCreation): static
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getIdPanier(): ?panier
    {
        return $this->idPanier;
    }

    public function setIdPanier(?panier $idPanier): static
    {
        $this->idPanier = $idPanier;

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

    public function getEtat(): ?string
    {
        return $this->Etat;
    }

    public function setEtat(?string $Etat): static
    {
        $this->Etat = $Etat;

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
