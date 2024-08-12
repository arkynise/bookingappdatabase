<?php

namespace App\Entity;

use App\Repository\DiffusionsalprestRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DiffusionsalprestRepository::class)]
class Diffusionsalprest
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'dateCreation',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(name:'IdUserWrite',nullable: true)]
    private ?int $IdUserWrite = null;

    #[ORM\Column(name:'repSal',nullable: true)]
    private ?bool $repSal = null;

    #[ORM\Column(name:'repBack',nullable: true)]
    private ?bool $repBack = null;

    #[ORM\Column(name:'repSalFinal',nullable: true)]
    private ?bool $repSalFinal = null;

    

    #[ORM\ManyToOne(inversedBy: 'diffusionsalprests')]
    #[ORM\JoinColumn(name:"idSalarie", referencedColumnName:"id")]
    private ?Salarie $idSalarie = null;

    #[ORM\ManyToOne(inversedBy: 'diffusionsalprests')]
    #[ORM\JoinColumn(name:"IdEvent_id", referencedColumnName:"id")]
    private ?Event $IdEvent = null;

    #[ORM\Column(nullable: true)]
    private ?bool $notifications = null;

    #[ORM\Column(name:'nbResetEnAtt',type: Types::SMALLINT, nullable: true)]
    private ?int $nbResetEnAtt = null;

    #[ORM\Column(name:'dateRetour',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateRetour = null;

    #[ORM\ManyToOne(inversedBy: 'diffusionsalprests')]
    #[ORM\JoinColumn(name:"idPrestation", referencedColumnName:"id")]
    private ?prestation $idPrestation = null;

    #[ORM\ManyToOne(inversedBy: 'diffusionsalprests')]
    #[ORM\JoinColumn(name:"idPanier", referencedColumnName:"id")]
    private ?panier $idPanier = null;

    #[ORM\ManyToOne(inversedBy: 'diffusionsalprests')]
    #[ORM\JoinColumn(name:"idMessage", referencedColumnName:"id")]
    private ?message $idMessage = null;

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

    public function getIdUserWrite(): ?int
    {
        return $this->IdUserWrite;
    }

    public function setIdUserWrite(?int $IdUserWrite): static
    {
        $this->IdUserWrite = $IdUserWrite;

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

    public function isRepBack(): ?bool
    {
        return $this->repBack;
    }

    public function setRepBack(?bool $repBack): static
    {
        $this->repBack = $repBack;

        return $this;
    }

    public function isRepSalFinal(): ?bool
    {
        return $this->repSalFinal;
    }

    public function setRepSalFinal(?bool $repSalFinal): static
    {
        $this->repSalFinal = $repSalFinal;

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

    public function getIdEvent(): ?Event
    {
        return $this->IdEvent;
    }

    public function setIdEvent(?Event $IdEvent): static
    {
        $this->IdEvent = $IdEvent;

        return $this;
    }

    public function isNotifications(): ?bool
    {
        return $this->notifications;
    }

    public function setNotifications(?bool $notifications): static
    {
        $this->notifications = $notifications;

        return $this;
    }

    public function getNbResetEnAtt(): ?int
    {
        return $this->nbResetEnAtt;
    }

    public function setNbResetEnAtt(?int $nbResetEnAtt): static
    {
        $this->nbResetEnAtt = $nbResetEnAtt;

        return $this;
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

    public function getIdPrestation(): ?prestation
    {
        return $this->idPrestation;
    }

    public function setIdPrestation(?prestation $idPrestation): static
    {
        $this->idPrestation = $idPrestation;

        return $this;
    }

    public function getIdPanier(): ?panier
    {
        return $this->idPanier;
    }

    public function setIdPanier(?panier $idPanier): static
    {
        $this->idPanier = $idPanier;

        return $this;
    }

    public function getIdMessage(): ?message
    {
        return $this->idMessage;
    }

    public function setIdMessage(?message $idMessage): static
    {
        $this->idMessage = $idMessage;

        return $this;
    }
}
