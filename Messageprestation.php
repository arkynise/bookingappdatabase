<?php

namespace App\Entity;

use App\Repository\MessageprestationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessageprestationRepository::class)]
class Messageprestation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'dateCreation',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\ManyToOne(inversedBy: 'messageprestations')]
    #[ORM\JoinColumn(name:"idPrestation", referencedColumnName:"id")]
    private ?prestation $idPrestation = null;

    #[ORM\ManyToOne(inversedBy: 'messageprestations')]
    #[ORM\JoinColumn(name:"idMsg", referencedColumnName:"id")]
    private ?message $idMsg = null;

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

    public function getIdPrestation(): ?prestation
    {
        return $this->idPrestation;
    }

    public function setIdPrestation(?prestation $idPrestation): static
    {
        $this->idPrestation = $idPrestation;

        return $this;
    }

    public function getIdMsg(): ?message
    {
        return $this->idMsg;
    }

    public function setIdMsg(?message $idMsg): static
    {
        $this->idMsg = $idMsg;

        return $this;
    }
}
