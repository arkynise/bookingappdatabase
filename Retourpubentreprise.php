<?php

namespace App\Entity;

use App\Repository\RetourpubentrepriseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RetourpubentrepriseRepository::class)]
class Retourpubentreprise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'dateReponse',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateReponse = null;

    #[ORM\Column(name:'repSal',nullable: true)]
    private ?bool $repSal = null;

    #[ORM\ManyToOne(inversedBy: 'retourpubentreprises')]
    #[ORM\JoinColumn(name:"idPubEntreprise_id", referencedColumnName:"id")]
    private ?pubentreprise $idPubEntreprise = null;

    #[ORM\ManyToOne(inversedBy: 'retourpubentreprises')]
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

    public function getIdPubEntreprise(): ?pubentreprise
    {
        return $this->idPubEntreprise;
    }

    public function setIdPubEntreprise(?pubentreprise $idPubEntreprise): static
    {
        $this->idPubEntreprise = $idPubEntreprise;

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
