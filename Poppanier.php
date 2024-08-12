<?php

namespace App\Entity;

use App\Repository\PoppanierRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PoppanierRepository::class)]
class Poppanier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'poppaniers')]
    private ?messagepop $idMsgPop = null;

    #[ORM\ManyToOne(inversedBy: 'poppaniers')]
    private ?salarie $idSalarie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdMsgPop(): ?messagepop
    {
        return $this->idMsgPop;
    }

    public function setIdMsgPop(?messagepop $idMsgPop): static
    {
        $this->idMsgPop = $idMsgPop;

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
