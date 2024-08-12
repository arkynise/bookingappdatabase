<?php

namespace App\Entity;

use App\Repository\SalarienoteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SalarienoteRepository::class)]
class Salarienote
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Libelle = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateCreation = null;

    #[ORM\ManyToOne(inversedBy: 'salarienotes')]
    private ?User $Ecritpar = null;

    #[ORM\ManyToOne(inversedBy: 'salarienotes')]
    private ?Salarie $IdSalarie = null;

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
        return $this->DateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $DateCreation): static
    {
        $this->DateCreation = $DateCreation;

        return $this;
    }

    public function getEcritpar(): ?User
    {
        return $this->Ecritpar;
    }

    public function setEcritpar(?User $Ecritpar): static
    {
        $this->Ecritpar = $Ecritpar;

        return $this;
    }

    public function getIdSalarie(): ?Salarie
    {
        return $this->IdSalarie;
    }

    public function setIdSalarie(?Salarie $IdSalarie): static
    {
        $this->IdSalarie = $IdSalarie;

        return $this;
    }
}
