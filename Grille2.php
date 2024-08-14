<?php

namespace App\Entity;

use App\Repository\Grille2Repository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Grille2Repository::class)]
class Grille2
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'heureDb',length: 255, nullable: true)]
    private ?string $heureDb = null;

    #[ORM\Column(name:'heureFin',length: 255, nullable: true)]
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

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $tarif8 = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $tarif9 = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $tarif10 = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $tarif11 = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $tarif12 = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $tarif13 = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $tarif14 = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $tarif15 = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $tarif16 = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $tarif17 = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $tarif18 = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $tarif19 = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $tarif20 = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $tarif21 = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $tarif22 = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $tarif23 = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $tarif24 = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $tarif25 = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $tarif26 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHeureDb(): ?string
    {
        return $this->heureDb;
    }

    public function setHeureDb(?string $heureDb): static
    {
        $this->heureDb = $heureDb;

        return $this;
    }

    public function getHeureFin(): ?string
    {
        return $this->heureFin;
    }

    public function setHeureFin(?string $heureFin): static
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
        return $this->tarif6;
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

    public function setTarif8(?string $tarif8): static
    {
        $this->tarif8 = $tarif8;

        return $this;
    }

    public function getTarif9(): ?string
    {
        return $this->tarif9;
    }

    public function setTarif9(?string $tarif9): static
    {
        $this->tarif9 = $tarif9;

        return $this;
    }

    public function getTarif10(): ?string
    {
        return $this->tarif10;
    }

    public function setTarif10(?string $tarif10): static
    {
        $this->tarif10 = $tarif10;

        return $this;
    }

    public function getTarif11(): ?string
    {
        return $this->tarif11;
    }

    public function setTarif11(?string $tarif11): static
    {
        $this->tarif11 = $tarif11;

        return $this;
    }

    public function getTarif12(): ?string
    {
        return $this->tarif12;
    }

    public function setTarif12(?string $tarif12): static
    {
        $this->tarif12 = $tarif12;

        return $this;
    }

    public function getTarif13(): ?string
    {
        return $this->tarif13;
    }

    public function setTarif13(?string $tarif13): static
    {
        $this->tarif13 = $tarif13;

        return $this;
    }

    public function getTarif14(): ?string
    {
        return $this->tarif14;
    }

    public function setTarif14(?string $tarif14): static
    {
        $this->tarif14 = $tarif14;

        return $this;
    }

    public function getTarif15(): ?string
    {
        return $this->tarif15;
    }

    public function setTarif15(?string $tarif15): static
    {
        $this->tarif15 = $tarif15;

        return $this;
    }

    public function getTarif16(): ?string
    {
        return $this->tarif16;
    }

    public function setTarif16(?string $tarif16): static
    {
        $this->tarif16 = $tarif16;

        return $this;
    }

    public function getTarif17(): ?string
    {
        return $this->tarif17;
    }

    public function setTarif17(?string $tarif17): static
    {
        $this->tarif17 = $tarif17;

        return $this;
    }

    public function getTarif18(): ?string
    {
        return $this->tarif18;
    }

    public function setTarif18(?string $tarif18): static
    {
        $this->tarif18 = $tarif18;

        return $this;
    }

    public function getTarif19(): ?string
    {
        return $this->tarif19;
    }

    public function setTarif19(?string $tarif19): static
    {
        $this->tarif19 = $tarif19;

        return $this;
    }

    public function getTarif20(): ?string
    {
        return $this->tarif20;
    }

    public function setTarif20(?string $tarif20): static
    {
        $this->tarif20 = $tarif20;

        return $this;
    }

    public function getTarif21(): ?string
    {
        return $this->tarif21;
    }

    public function setTarif21(?string $tarif21): static
    {
        $this->tarif21 = $tarif21;

        return $this;
    }

    public function getTarif22(): ?string
    {
        return $this->tarif22;
    }

    public function setTarif22(?string $tarif22): static
    {
        $this->tarif22 = $tarif22;

        return $this;
    }

    public function getTarif23(): ?string
    {
        return $this->tarif23;
    }

    public function setTarif23(?string $tarif23): static
    {
        $this->tarif23 = $tarif23;

        return $this;
    }

    public function getTarif24(): ?string
    {
        return $this->tarif24;
    }

    public function setTarif24(?string $tarif24): static
    {
        $this->tarif24 = $tarif24;

        return $this;
    }

    public function getTarif25(): ?string
    {
        return $this->tarif25;
    }

    public function setTarif25(?string $tarif25): static
    {
        $this->tarif25 = $tarif25;

        return $this;
    }

    public function getTarif26(): ?string
    {
        return $this->tarif26;
    }

    public function setTarif26(?string $tarif26): static
    {
        $this->tarif26 = $tarif26;

        return $this;
    }
}
