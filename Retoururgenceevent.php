<?php

namespace App\Entity;

use App\Repository\RetoururgenceeventRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RetoururgenceeventRepository::class)]
class Retoururgenceevent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'dateRetour',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateRetour = null;

    #[ORM\Column(nullable: true)]
    private ?bool $reponse = null;

    #[ORM\ManyToOne(inversedBy: 'retoururgenceevents')]
    #[ORM\JoinColumn(name:"idUrgenceEvent_id", referencedColumnName:"id")]
    private ?urgenceevent $idUrgenceEvent = null;

    #[ORM\ManyToOne(inversedBy: 'retoururgenceevents')]
    #[ORM\JoinColumn(name:"idSalarie", referencedColumnName:"id")]
    private ?salarie $idSalarie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateRetour(): ?\DateTimeInterface
    {
        return $this->dateRetour;
    }

    public function setDateRetour(?\DateTimeInterface $dateRetour): static
    {
        $this->dateRetour = $dateRetour;

        return $this;
    }

    public function isReponse(): ?bool
    {
        return $this->reponse;
    }

    public function setReponse(?bool $reponse): static
    {
        $this->reponse = $reponse;

        return $this;
    }

    public function getIdUrgenceEvent(): ?urgenceevent
    {
        return $this->idUrgenceEvent;
    }

    public function setIdUrgenceEvent(?urgenceevent $idUrgenceEvent): static
    {
        $this->idUrgenceEvent = $idUrgenceEvent;

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
