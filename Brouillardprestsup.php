<?php

namespace App\Entity;

use App\Repository\BrouillardprestsupRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BrouillardprestsupRepository::class)]
class Brouillardprestsup
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'idBrouillard',nullable: true)]
    private ?int $idBrouillard = null;

    #[ORM\Column(name:'PrestSup',length: 255, nullable: true)]
    private ?string $PrestSup = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $total = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdBrouillard(): ?int
    {
        return $this->idBrouillard;
    }

    public function setIdBrouillard(?int $idBrouillard): static
    {
        $this->idBrouillard = $idBrouillard;

        return $this;
    }

    public function getPrestSup(): ?string
    {
        return $this->PrestSup;
    }

    public function setPrestSup(?string $PrestSup): static
    {
        $this->PrestSup = $PrestSup;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(?string $total): static
    {
        $this->total = $total;

        return $this;
    }
}
