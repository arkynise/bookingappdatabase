<?php

namespace App\Entity;

use App\Repository\SalexperienceoldRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SalexperienceoldRepository::class)]
class Salexperienceold
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $infoExp = null;

    #[ORM\ManyToOne(inversedBy: 'salexperienceolds')]
    private ?salarie $idSalarie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInfoExp(): ?string
    {
        return $this->infoExp;
    }

    public function setInfoExp(?string $infoExp): static
    {
        $this->infoExp = $infoExp;

        return $this;
    }

    public function getIdSalarie(): ?salarie
    {
        return $this->idSalarie;
    }

    public function setIdSalarie(?salarie $idSalarie): static
    {
        $this->idSalarie = $idSalarie;

        return $this;
    }
}
