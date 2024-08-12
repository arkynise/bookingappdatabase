<?php

namespace App\Entity;

use App\Repository\AvisnotationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvisnotationRepository::class)]
class Avisnotation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'dateCreation',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(name:'Avis',nullable: true)]
    private ?bool $Avis = null;

    #[ORM\Column(name:'IdUserWrite',nullable: true)]
    private ?int $IdUserWrite = null;

    #[ORM\ManyToOne(inversedBy: 'avisnotations')]
    #[ORM\JoinColumn(name:"IdCandidat_id", referencedColumnName:"id")]
    private ?Salarie $IdCandidat = null;

    #[ORM\Column(name:'IdBu',nullable: true)]
    private ?int $IdBu = null;

    #[ORM\Column(name:'BuLibelle',length: 255, nullable: true)]
    private ?string $BuLibelle = null;

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

    public function isAvis(): ?bool
    {
        return $this->Avis;
    }

    public function setAvis(?bool $Avis): static
    {
        $this->Avis = $Avis;

        return $this;
    }

    public function getIdUserWrite(): ?int
    {
        return $this->IdUserWrite;
    }

    public function setIdUserWrite(?int $IdUserWrite): static
    {
        $this->IdUserWrite = $IdUserWrite;

        return $this;
    }

    public function getIdCandidat(): ?Salarie
    {
        return $this->IdCandidat;
    }

    public function setIdCandidat(?Salarie $IdCandidat): static
    {
        $this->IdCandidat = $IdCandidat;

        return $this;
    }

    public function getIdBu(): ?int
    {
        return $this->IdBu;
    }

    public function setIdBu(?int $IdBu): static
    {
        $this->IdBu = $IdBu;

        return $this;
    }

    public function getBuLibelle(): ?string
    {
        return $this->BuLibelle;
    }

    public function setBuLibelle(?string $BuLibelle): static
    {
        $this->BuLibelle = $BuLibelle;

        return $this;
    }
}
