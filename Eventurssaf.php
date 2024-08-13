<?php

namespace App\Entity;

use App\Repository\EventurssafRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventurssafRepository::class)]
class Eventurssaf
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\ManyToOne(inversedBy: 'eventurssafs')]
    #[ORM\JoinColumn(name:"idEvent_id", referencedColumnName:"id")]
    private ?event $idEvent = null;

    #[ORM\Column(name:'dateCreation',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(name:'idUserWrite',nullable: true)]
    private ?int $idUserWrite = null;

    #[ORM\Column(name:'numUrssaf',length: 255, nullable: true)]
    private ?string $numUrssaf = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $statut = null;

    public function getId(): ?int
    {
        return $this->id;
    }




    public function getIdEvent(): ?event
    {
        return $this->idEvent;
    }

    public function setIdEvent(?event $idEvent): static
    {
        $this->idEvent = $idEvent;

        return $this;
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

    public function getIdUserWrite(): ?int
    {
        return $this->idUserWrite;
    }

    public function setIdUserWrite(?int $idUserWrite): static
    {
        $this->idUserWrite = $idUserWrite;

        return $this;
    }

    public function getNumUrssaf(): ?string
    {
        return $this->numUrssaf;
    }

    public function setNumUrssaf(?string $numUrssaf): static
    {
        $this->numUrssaf = $numUrssaf;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }
}
