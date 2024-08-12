<?php

namespace App\Entity;

use App\Repository\TabheuresupRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TabheuresupRepository::class)]
class Tabheuresup
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Profile = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $HSupJP = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $HSupJF = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $HSupNP = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $HSupNF = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProfile(): ?string
    {
        return $this->Profile;
    }

    public function setProfile(?string $Profile): static
    {
        $this->Profile = $Profile;

        return $this;
    }

    public function getHSupJP(): ?string
    {
        return $this->HSupJP;
    }

    public function setHSupJP(?string $HSupJP): static
    {
        $this->HSupJP = $HSupJP;

        return $this;
    }

    public function getHSupJF(): ?string
    {
        return $this->HSupJF;
    }

    public function setHSupJF(string $HSupJF): static
    {
        $this->HSupJF = $HSupJF;

        return $this;
    }

    public function getHSupNP(): ?string
    {
        return $this->HSupNP;
    }

    public function setHSupNP(string $HSupNP): static
    {
        $this->HSupNP = $HSupNP;

        return $this;
    }

    public function getHSupNF(): ?string
    {
        return $this->HSupNF;
    }

    public function setHSupNF(string $HSupNF): static
    {
        $this->HSupNF = $HSupNF;

        return $this;
    }
}
