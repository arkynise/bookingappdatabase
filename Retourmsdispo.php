<?php

namespace App\Entity;

use App\Repository\RetourmsdispoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RetourmsdispoRepository::class)]
class Retourmsdispo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateReponse = null;

    #[ORM\Column(nullable: true)]
    private ?bool $repSal = null;

    #[ORM\Column]
    private ?bool $jourEntiere = null;

    #[ORM\ManyToOne(inversedBy: 'retourmsdispos')]
    private ?Salarie $idSalarie = null;

    #[ORM\ManyToOne(inversedBy: 'retourmsdispos')]
    private ?Missiondispo $idMsDispo = null;

    #[ORM\ManyToOne(inversedBy: 'retourmsdispos')]
    private ?Jourmsdispo $idJour = null;

    #[ORM\ManyToOne(inversedBy: 'retourmsdispos')]
    private ?Horairemsdispo $idHoraire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateReponse(): ?\DateTimeInterface
    {
        return $this->dateReponse;
    }

    public function setDateReponse(?\DateTimeInterface $dateReponse): static
    {
        $this->dateReponse = $dateReponse;

        return $this;
    }

    public function isRepSal(): ?bool
    {
        return $this->repSal;
    }

    public function setRepSal(?bool $repSal): static
    {
        $this->repSal = $repSal;

        return $this;
    }

    public function isJourEntiere(): ?bool
    {
        return $this->jourEntiere;
    }

    public function setJourEntiere(bool $jourEntiere): static
    {
        $this->jourEntiere = $jourEntiere;

        return $this;
    }

    public function getIdSalarie(): ?Salarie
    {
        return $this->idSalarie;
    }

    public function setIdSalarie(?Salarie $idSalarie): static
    {
        $this->idSalarie = $idSalarie;

        return $this;
    }

    public function getIdMsDispo(): ?Missiondispo
    {
        return $this->idMsDispo;
    }

    public function setIdMsDispo(?Missiondispo $idMsDispo): static
    {
        $this->idMsDispo = $idMsDispo;

        return $this;
    }

    public function getIdJour(): ?Jourmsdispo
    {
        return $this->idJour;
    }

    public function setIdJour(?Jourmsdispo $idJour): static
    {
        $this->idJour = $idJour;

        return $this;
    }

    public function getIdHoraire(): ?Horairemsdispo
    {
        return $this->idHoraire;
    }

    public function setIdHoraire(?Horairemsdispo $idHoraire): static
    {
        $this->idHoraire = $idHoraire;

        return $this;
    }
}
