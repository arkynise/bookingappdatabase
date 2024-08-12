<?php

namespace App\Entity;

use App\Repository\BrouillardfraisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BrouillardfraisRepository::class)]
class Brouillardfrais
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'NatureFrais',nullable: true)]
    private ?int $NatureFrais = null;

    #[ORM\Column(name:'idBrouillard',nullable: true)]
    private ?int $idBrouillard = null;

    #[ORM\Column(name:'nomFrais',length: 255)]
    private ?string $nomFrais = null;

    #[ORM\Column]
    private ?int $qte = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $prix = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $total = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $observation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNatureFrais(): ?int
    {
        return $this->NatureFrais;
    }

    public function setNatureFrais(?int $NatureFrais): static
    {
        $this->NatureFrais = $NatureFrais;

        return $this;
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

    public function getNomFrais(): ?string
    {
        return $this->nomFrais;
    }

    public function setNomFrais(string $nomFrais): static
    {
        $this->nomFrais = $nomFrais;

        return $this;
    }

    public function getQte(): ?int
    {
        return $this->qte;
    }

    public function setQte(int $qte): static
    {
        $this->qte = $qte;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(string $total): static
    {
        $this->total = $total;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(?string $observation): static
    {
        $this->observation = $observation;

        return $this;
    }
}
