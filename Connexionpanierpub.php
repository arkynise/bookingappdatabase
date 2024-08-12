<?php

namespace App\Entity;

use App\Repository\ConnexionpanierpubRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConnexionpanierpubRepository::class)]
class Connexionpanierpub
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\ManyToOne(inversedBy: 'connexionpanierpubs')]
    private ?pubevent $IdPubEvent = null;

    #[ORM\ManyToOne(inversedBy: 'connexionpanierpubs')]
    private ?Event $IdEvent = null;

    #[ORM\ManyToOne(inversedBy: 'connexionpanierpubs')]
    private ?Panier $IdPanier = null;

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

    public function getIdPubEvent(): ?pubevent
    {
        return $this->IdPubEvent;
    }

    public function setIdPubEvent(?pubevent $IdPubEvent): static
    {
        $this->IdPubEvent = $IdPubEvent;

        return $this;
    }

    public function getIdEvent(): ?Event
    {
        return $this->IdEvent;
    }

    public function setIdEvent(?Event $IdEvent): static
    {
        $this->IdEvent = $IdEvent;

        return $this;
    }

    public function getIdPanier(): ?Panier
    {
        return $this->IdPanier;
    }

    public function setIdPanier(?Panier $IdPanier): static
    {
        $this->IdPanier = $IdPanier;

        return $this;
    }
}
