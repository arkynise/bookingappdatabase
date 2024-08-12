<?php

namespace App\Entity;

use App\Repository\InfogrilleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InfogrilleRepository::class)]
class Infogrille
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NomGrille = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Surnom = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomGrille(): ?string
    {
        return $this->NomGrille;
    }

    public function setNomGrille(?string $NomGrille): static
    {
        $this->NomGrille = $NomGrille;

        return $this;
    }

    public function getSurnom(): ?string
    {
        return $this->Surnom;
    }

    public function setSurnom(?string $Surnom): static
    {
        $this->Surnom = $Surnom;

        return $this;
    }
}
