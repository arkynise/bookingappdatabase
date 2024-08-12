<?php

namespace App\Entity;

use App\Repository\DiffusionsalprestRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DiffusionsalprestRepository::class)]
class Diffusionsalprest
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(nullable: true)]
    private ?int $IdUserWrite = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $repSal = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $repBack = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $repSalFinal = null;

    

    #[ORM\ManyToOne(inversedBy: 'diffusionsalprests')]
    private ?Salarie $idSalarie = null;

    #[ORM\ManyToOne(inversedBy: 'diffusionsalprests')]
    private ?Event $IdEvent = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $notifications = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $nbResetEnAtt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateRetour = null;

    #[ORM\ManyToOne(inversedBy: 'diffusionsalprests')]
    private ?prestation $idPrestation = null;

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

    public function getRepSal(): ?int
    {
        return $this->repSal;
    }

    public function setRepSal(?int $repSal): static
    {
        $this->repSal = $repSal;

        return $this;
    }

    public function getRepBack(): ?int
    {
        return $this->repBack;
    }

    public function setRepBack(?int $repBack): static
    {
        $this->repBack = $repBack;

        return $this;
    }

    public function getRepSalFinal(): ?int
    {
        return $this->repSalFinal;
    }

    public function setRepSalFinal(?int $repSalFinal): static
    {
        $this->repSalFinal = $repSalFinal;

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

    public function getIdEvent(): ?Event
    {
        return $this->IdEvent;
    }

    public function setIdEvent(?Event $IdEvent): static
    {
        $this->IdEvent = $IdEvent;

        return $this;
    }

    public function getNotifications(): ?int
    {
        return $this->notifications;
    }

    public function setNotifications(?int $notifications): static
    {
        $this->notifications = $notifications;

        return $this;
    }

    public function getNbResetEnAtt(): ?int
    {
        return $this->nbResetEnAtt;
    }

    public function setNbResetEnAtt(?int $nbResetEnAtt): static
    {
        $this->nbResetEnAtt = $nbResetEnAtt;

        return $this;
    }

    public function getDateRetour(): ?\DateTimeInterface
    {
        return $this->dateRetour;
    }

    public function setDateRetour(?\DateTimeInterface $dateRetour): static
    {
        $this->dateRetour = $dateRetour;

        return $this;
    }

    public function getIdPrestation(): ?prestation
    {
        return $this->idPrestation;
    }

    public function setIdPrestation(?prestation $idPrestation): static
    {
        $this->idPrestation = $idPrestation;

        return $this;
    }
}
