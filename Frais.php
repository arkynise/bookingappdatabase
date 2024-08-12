<?php

namespace App\Entity;

use App\Repository\FraisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FraisRepository::class)]
class Frais
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomFrais = null;

    #[ORM\Column]
    private ?int $qte = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $prix = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $total = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $observation = null;

    #[ORM\ManyToOne(inversedBy: 'frais')]
    private ?devis $idDevis = null;

    #[ORM\ManyToOne(inversedBy: 'frais')]
    private ?fraisligne $fraisLignes = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdDevis(): ?devis
    {
        return $this->idDevis;
    }

    public function setIdDevis(?devis $idDevis): static
    {
        $this->idDevis = $idDevis;

        return $this;
    }

    public function getFraisLignes(): ?fraisligne
    {
        return $this->fraisLignes;
    }

    public function setFraisLignes(?fraisligne $fraisLignes): static
    {
        $this->fraisLignes = $fraisLignes;

        return $this;
    }
}
