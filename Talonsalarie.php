<?php

namespace App\Entity;

use App\Repository\TalonsalarieRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TalonsalarieRepository::class)]
class Talonsalarie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'dateCreation',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\ManyToOne(inversedBy: 'talonsalaries')]
    #[ORM\JoinColumn(name:"idSalarie", referencedColumnName:"id")]
    private ?salarie $idSalarie = null;

    #[ORM\ManyToOne(inversedBy: 'talonsalaries')]
    #[ORM\JoinColumn(name:"idTalon", referencedColumnName:"id")]
    private ?talon $idTalon = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $dateCreation): static
    {
        $this->dateCreation = $dateCreation;

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

    public function getIdTalon(): ?talon
    {
        return $this->idTalon;
    }

    public function setIdTalon(?talon $idTalon): static
    {
        $this->idTalon = $idTalon;

        return $this;
    }
}
