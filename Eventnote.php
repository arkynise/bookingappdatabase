<?php

namespace App\Entity;

use App\Repository\EventnoteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventnoteRepository::class)]
class Eventnote
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'Libelle',type: Types::TEXT, nullable: true)]
    private ?string $Libelle = null;

    #[ORM\Column(name:'DateCreation',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateCreation = null;

    #[ORM\ManyToOne(inversedBy: 'eventnotes')]
    #[ORM\JoinColumn(name:"Ecritpar_id", referencedColumnName:"id")]
    private ?User $Ecritpar = null;

    #[ORM\ManyToOne(inversedBy: 'eventnotes')]
    #[ORM\JoinColumn(name:"IdEvent_id", referencedColumnName:"id")]
    private ?Event $IdEvent = null;

    #[ORM\ManyToOne(inversedBy: 'eventnotes')]
    #[ORM\JoinColumn(name:"idType", referencedColumnName:"id")]
    private ?typenote $idType = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->Libelle;
    }

    public function setLibelle(?string $Libelle): static
    {
        $this->Libelle = $Libelle;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->DateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $DateCreation): static
    {
        $this->DateCreation = $DateCreation;

        return $this;
    }

    public function getEcritpar(): ?User
    {
        return $this->Ecritpar;
    }

    public function setEcritpar(?User $Ecritpar): static
    {
        $this->Ecritpar = $Ecritpar;

        return $this;
    }

    public function getIdEvent(): ?Event
    {
        return $this->IdEvent;
    }

    public function setIdEvent(?Event $IdEvent): static
    {
        $this->IdEvent = $IdEvent;

        return $this;
    }

    public function getIdType(): ?typenote
    {
        return $this->idType;
    }

    public function setIdType(?typenote $idType): static
    {
        $this->idType = $idType;

        return $this;
    }
}
