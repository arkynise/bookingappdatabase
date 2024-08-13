<?php

namespace App\Entity;

use App\Repository\RetourpubeventRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RetourpubeventRepository::class)]
class Retourpubevent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'dateReponse',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateReponse = null;

    #[ORM\Column(name:'repSal',nullable: true)]
    private ?bool $repSal = null;

    #[ORM\ManyToOne(inversedBy: 'retourpubevents')]
    #[ORM\JoinColumn(name:"idPubEvent_id", referencedColumnName:"id")]
    private ?pubevent $idPubEvent = null;

    #[ORM\ManyToOne(inversedBy: 'retourpubevents')]
    #[ORM\JoinColumn(name:"idSalarie", referencedColumnName:"id")]
    private ?salarie $idSalarie = null;

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

    public function getIdPubEvent(): ?pubevent
    {
        return $this->idPubEvent;
    }

    public function setIdPubEvent(?pubevent $idPubEvent): static
    {
        $this->idPubEvent = $idPubEvent;

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
