<?php

namespace App\Entity;

use App\Repository\RetoururgenceentrepriseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RetoururgenceentrepriseRepository::class)]
class Retoururgenceentreprise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateReponse = null;

    #[ORM\Column(nullable: true)]
    private ?bool $repSal = null;

    #[ORM\ManyToOne(inversedBy: 'retoururgenceentreprises')]
    private ?urgenceentreprise $idUrgenceEntreprise = null;

    #[ORM\ManyToOne(inversedBy: 'retoururgenceentreprises')]
    private ?salarie $idSalarie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateReponse(): ?\DateTimeInterface
    {
        return $this->dateReponse;
    }

    public function setDateReponse(\DateTimeInterface $dateReponse): static
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

    public function getIdUrgenceEntreprise(): ?urgenceentreprise
    {
        return $this->idUrgenceEntreprise;
    }

    public function setIdUrgenceEntreprise(?urgenceentreprise $idUrgenceEntreprise): static
    {
        $this->idUrgenceEntreprise = $idUrgenceEntreprise;

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
