<?php

namespace App\Entity;

use App\Repository\ObssalRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ObssalRepository::class)]
class Obssal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name: 'Libelle', length: 255, nullable: true)]
    private ?string $Libelle = null;

    #[ORM\Column(name: 'dateCreation', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(name: 'IdSal', nullable: true)]
    private ?int $IdSal = null;

    #[ORM\Column(name: 'Ecritpar', nullable: true)]
    private ?int $Ecritpar = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->Libelle;
    }

    public function setLibelle(?string $Libelle): static
    {
        $this->Libelle = $Libelle;

        return $this;
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

    public function getIdSal(): ?int
    {
        return $this->IdSal;
    }

    public function setIdSal(?int $IdSal): static
    {
        $this->IdSal = $IdSal;

        return $this;
    }

    public function getEcritpar(): ?string
    {
        return $this->Ecritpar;
    }

    public function setEcritpar(?string $Ecritpar): static
    {
        $this->Ecritpar = $Ecritpar;

        return $this;
    }
}
