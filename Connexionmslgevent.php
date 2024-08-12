<?php

namespace App\Entity;

use App\Repository\ConnexionmslgeventRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConnexionmslgeventRepository::class)]
class Connexionmslgevent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'dateCreation',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(name:'IdUserWrite',nullable: true)]
    private ?int $IdUserWrite = null;

    #[ORM\ManyToOne(inversedBy: 'connexionmslgevents')]
    #[ORM\JoinColumn(name:"IdMslg_id", referencedColumnName:"id")]
    private ?Missiondispo $IdMslg = null;

    #[ORM\ManyToOne(inversedBy: 'connexionmslgevents')]
    #[ORM\JoinColumn(name:"IdEvent_id", referencedColumnName:"id")]
    private ?Event $IdEvent = null;

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

    public function getIdUserWrite(): ?int
    {
        return $this->IdUserWrite;
    }

    public function setIdUserWrite(?int $IdUserWrite): static
    {
        $this->IdUserWrite = $IdUserWrite;

        return $this;
    }

    public function getIdMslg(): ?Missiondispo
    {
        return $this->IdMslg;
    }

    public function setIdMslg(?Missiondispo $IdMslg): static
    {
        $this->IdMslg = $IdMslg;

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
}
