<?php

namespace App\Entity;

use App\Repository\PaysRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaysRepository::class)]
class Pays
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $code = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $alpha2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $alpha3 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomAnglais = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomFrancais = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(?int $code): static
    {
        $this->code = $code;

        return $this;
    }

    public function getAlpha2(): ?string
    {
        return $this->alpha2;
    }

    public function setAlpha2(?string $alpha2): static
    {
        $this->alpha2 = $alpha2;

        return $this;
    }

    public function getAlpha3(): ?string
    {
        return $this->alpha3;
    }

    public function setAlpha3(?string $alpha3): static
    {
        $this->alpha3 = $alpha3;

        return $this;
    }

    public function getNomAnglais(): ?string
    {
        return $this->nomAnglais;
    }

    public function setNomAnglais(?string $nomAnglais): static
    {
        $this->nomAnglais = $nomAnglais;

        return $this;
    }

    public function getNomFrancais(): ?string
    {
        return $this->nomFrancais;
    }

    public function setNomFrancais(?string $nomFrancais): static
    {
        $this->nomFrancais = $nomFrancais;

        return $this;
    }
}
