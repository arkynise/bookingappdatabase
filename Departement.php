<?php

namespace App\Entity;

use App\Repository\DepartementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DepartementRepository::class)]
class Departement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $deptCode = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $deptNom = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDeptCode(): ?string
    {
        return $this->deptCode;
    }

    public function setDeptCode(?string $deptCode): static
    {
        $this->deptCode = $deptCode;

        return $this;
    }

    public function getDeptNom(): ?string
    {
        return $this->deptNom;
    }

    public function setDeptNom(?string $deptNom): static
    {
        $this->deptNom = $deptNom;

        return $this;
    }
}
