<?php

namespace App\Entity;

use App\Repository\Grille1Repository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Grille1Repository::class)]
class Grille1
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'heureDb',length: 255)]
    private ?string $heureDb = null;

    #[ORM\Column(name:'heureFin',length: 255)]
    private ?string $heureFin = null;

    #[ORM\Column]
    private ?int $repas = null;

    #[ORM\Column(name:'heureTravaille',length: 255)]
    private ?string $heureTravaille = null;

    #[ORM\Column(name:'intBrut',type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $intBrut = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $tarif = null;
    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $tarif1 = null;
    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $tarif2 = null;
    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $tarif3 = null;
    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $tarif4 = null;
    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $tarif5 = null;
    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $tarif6 = null;
    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $tarif7 = null;
    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $tarif8 = null;
    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $tarif9 = null;
    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $tarif10 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHeureDb(): ?string
    {
        return $this->heureDb;
    }

    public function setHeureDb(string $heureDb): static
    {
        $this->heureDb = $heureDb;

        return $this;
    }

    public function getHeureFin(): ?string
    {
        return $this->heureFin;
    }

    public function setHeureFin(string $heureFin): static
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    public function getRepas(): ?int
    {
        return $this->repas;
    }

    public function setRepas(int $repas): static
    {
        $this->repas = $repas;

        return $this;
    }

    public function getHeureTravaille(): ?string
    {
        return $this->heureTravaille;
    }

    public function setHeureTravaille(string $heureTravaille): static
    {
        $this->heureTravaille = $heureTravaille;

        return $this;
    }

    public function getIntBrut(): ?string
    {
        return $this->intBrut;
    }

    public function setIntBrut(string $intBrut): static
    {
        $this->intBrut = $intBrut;

        return $this;
    }

    public function getTarif(): ?string
    {
        return $this->tarif;
    }

    public function setTarif(string $tarif): static
    {
        $this->tarif = $tarif;

        return $this;
    }
    public function getTarif1(): ?string
    {
        return $this->tarif1;
    }

    public function setTarif1(string $tarif1): static
    {
        $this->tarif1 = $tarif1;

        return $this;
    }
    public function getTarif2(): ?string
    {
        return $this->tarif2;
    }

    public function setTarif2(string $tarif2): static
    {
        $this->tarif2 = $tarif2;

        return $this;
    }
    public function getTarif3(): ?string
    {
        return $this->tarif3;
    }

    public function setTarif3(string $tarif3): static
    {
        $this->tarif3 = $tarif3;

        return $this;
    }
    public function getTarif4(): ?string
    {
        return $this->tarif4;
    }

    public function setTarif4(string $tarif4): static
    {
        $this->tarif4 = $tarif4;

        return $this;
    }
    public function getTarif5(): ?string
    {
        return $this->tarif5;
    }

    public function setTarif5(string $tarif5): static
    {
        $this->tarif5 = $tarif5;

        return $this;
    }
    public function getTarif6(): ?string
    {
        return $this->tarif4;
    }

    public function setTarif6(string $tarif6): static
    {
        $this->tarif6 = $tarif6;

        return $this;
    }
    public function getTarif7(): ?string
    {
        return $this->tarif7;
    }

    public function setTarif7(string $tarif7): static
    {
        $this->tarif7 = $tarif7;

        return $this;
    }
    public function getTarif8(): ?string
    {
        return $this->tarif8;
    }

    public function setTarif8(string $tarif8): static
    {
        $this->tarif8 = $tarif8;

        return $this;
    }
    public function getTarif9(): ?string
    {
        return $this->tarif9;
    }

    public function setTarif9(string $tarif9): static
    {
        $this->tarif9 = $tarif9;

        return $this;
    }
    public function getTarif10(): ?string
    {
        return $this->tarif10;
    }

    public function setTarif10(string $tarif10): static
    {
        $this->tarif10 = $tarif10;

        return $this;
    }
}
