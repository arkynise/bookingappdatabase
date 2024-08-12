<?php

namespace App\Entity;

use App\Repository\CatalogueexperienceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CatalogueexperienceRepository::class)]
class Catalogueexperience
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelle = null;

    #[ORM\ManyToOne(inversedBy: 'catalogueexperiences')]
    private ?Cataloguesalarie $idCatSal = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): static
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getIdCatSal(): ?Cataloguesalarie
    {
        return $this->idCatSal;
    }

    public function setIdCatSal(?Cataloguesalarie $idCatSal): static
    {
        $this->idCatSal = $idCatSal;

        return $this;
    }
}
