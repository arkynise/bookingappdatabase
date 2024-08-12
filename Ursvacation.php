<?php

namespace App\Entity;

use App\Repository\UrsvacationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UrsvacationRepository::class)]
class Ursvacation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Poste = null;

    #[ORM\Column(nullable: true)]
    private ?int $NbRepas = null;

    #[ORM\Column(nullable: true,type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $MontantRepas = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $HeureDebut = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $HeureFin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Duree = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $SalaireBrut = null;

    #[ORM\ManyToOne(inversedBy: 'ursvacations')]
    private ?Ursoperation $IdOperation = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPoste(): ?string
    {
        return $this->Poste;
    }

    public function setPoste(?string $Poste): static
    {
        $this->Poste = $Poste;

        return $this;
    }

    public function getNbRepas(): ?int
    {
        return $this->NbRepas;
    }

    public function setNbRepas(?int $NbRepas): static
    {
        $this->NbRepas = $NbRepas;

        return $this;
    }

    public function getMontantRepas(): ?string
    {
        return $this->MontantRepas;
    }

    public function setMontantRepas(string $MontantRepas): static
    {
        $this->MontantRepas = $MontantRepas;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(?\DateTimeInterface $Date): static
    {
        $this->Date = $Date;

        return $this;
    }

    public function getHeureDebut(): ?string
    {
        return $this->HeureDebut;
    }

    public function setHeureDebut(?string $HeureDebut): static
    {
        $this->HeureDebut = $HeureDebut;

        return $this;
    }

    public function getHeureFin(): ?string
    {
        return $this->HeureFin;
    }

    public function setHeureFin(?string $HeureFin): static
    {
        $this->HeureFin = $HeureFin;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->Duree;
    }

    public function setDuree(?string $Duree): static
    {
        $this->Duree = $Duree;

        return $this;
    }

    public function getSalaireBrut(): ?string
    {
        return $this->SalaireBrut;
    }

    public function setSalaireBrut(?string $SalaireBrut): static
    {
        $this->SalaireBrut = $SalaireBrut;

        return $this;
    }

    public function getIdOperation(): ?Ursoperation
    {
        return $this->IdOperation;
    }

    public function setIdOperation(?Ursoperation $IdOperation): static
    {
        $this->IdOperation = $IdOperation;

        return $this;
    }

   
}
