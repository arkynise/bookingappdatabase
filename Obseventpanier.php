<?php

namespace App\Entity;

use App\Repository\ObseventpanierRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ObseventpanierRepository::class)]
class Obseventpanier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'obseventpaniers')]
    #[ORM\JoinColumn(name:"idObsEvent_id", referencedColumnName:"id")]
    private ?Obsevent $idObsEvent = null;

    #[ORM\ManyToOne(inversedBy: 'obseventpaniers')]
    #[ORM\JoinColumn(name:"IdSalarie_id", referencedColumnName:"id")]
    private ?Salarie $IdSalarie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdObsEvent(): ?Obsevent
    {
        return $this->idObsEvent;
    }

    public function setIdObsEvent(?Obsevent $idObsEvent): static
    {
        $this->idObsEvent = $idObsEvent;

        return $this;
    }

    public function getIdSalarie(): ?Salarie
    {
        return $this->IdSalarie;
    }

    public function setIdSalarie(?Salarie $IdSalarie): static
    {
        $this->IdSalarie = $IdSalarie;

        return $this;
    }
}
