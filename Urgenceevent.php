<?php

namespace App\Entity;

use App\Repository\UrgenceeventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UrgenceeventRepository::class)]
class Urgenceevent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'urgenceevents')]
    private ?groupeuser $groupe = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(nullable: true)]
    private ?int $idUserWrite = null;

    #[ORM\Column(nullable: true)]
    private ?bool $homme = null;

    #[ORM\Column(nullable: true)]
    private ?bool $femme = null;

    #[ORM\Column(nullable: true)]
    private ?bool $actif = null;

    #[ORM\Column(nullable: true)]
    private ?bool $notifications = null;

    #[ORM\ManyToOne(inversedBy: 'urgenceevents')]
    private ?event $idEvent = null;

    #[ORM\ManyToOne(inversedBy: 'urgenceevents')]
    private ?prestation $idPrest = null;

    #[ORM\ManyToOne(inversedBy: 'urgenceevents')]
    private ?panier $idPanier = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateRetrait = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prix = null;

    #[ORM\Column(nullable: true)]
    private ?bool $dltAffect = null;

    /**
     * @var Collection<int, Retoururgenceevent>
     */
    #[ORM\OneToMany(targetEntity: Retoururgenceevent::class, mappedBy: 'idUrgenceEvent')]
    private Collection $retoururgenceevents;

    /**
     * @var Collection<int, Panierurgence>
     */
    #[ORM\OneToMany(targetEntity: Panierurgence::class, mappedBy: 'idUrgence')]
    private Collection $panierurgences;

    public function __construct()
    {
        $this->retoururgenceevents = new ArrayCollection();
        $this->panierurgences = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGroupe(): ?groupeuser
    {
        return $this->groupe;
    }

    public function setGroupe(?groupeuser $groupe): static
    {
        $this->groupe = $groupe;

        return $this;
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
        return $this->idUserWrite;
    }

    public function setIdUserWrite(?int $idUserWrite): static
    {
        $this->idUserWrite = $idUserWrite;

        return $this;
    }

    public function isHomme(): ?bool
    {
        return $this->homme;
    }

    public function setHomme(?bool $homme): static
    {
        $this->homme = $homme;

        return $this;
    }

    public function isFemme(): ?bool
    {
        return $this->femme;
    }

    public function setFemme(?bool $femme): static
    {
        $this->femme = $femme;

        return $this;
    }

    public function isActif(): ?bool
    {
        return $this->actif;
    }

    public function setActif(?bool $actif): static
    {
        $this->actif = $actif;

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

    public function getIdEvent(): ?event
    {
        return $this->idEvent;
    }

    public function setIdEvent(?event $idEvent): static
    {
        $this->idEvent = $idEvent;

        return $this;
    }

    public function getIdPrest(): ?prestation
    {
        return $this->idPrest;
    }

    public function setIdPrest(?prestation $idPrest): static
    {
        $this->idPrest = $idPrest;

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

    public function getDateRetrait(): ?\DateTimeInterface
    {
        return $this->dateRetrait;
    }

    public function setDateRetrait(\DateTimeInterface $dateRetrait): static
    {
        $this->dateRetrait = $dateRetrait;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(?string $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function isDltAffect(): ?bool
    {
        return $this->dltAffect;
    }

    public function setDltAffect(?bool $dltAffect): static
    {
        $this->dltAffect = $dltAffect;

        return $this;
    }

    /**
     * @return Collection<int, Retoururgenceevent>
     */
    public function getRetoururgenceevents(): Collection
    {
        return $this->retoururgenceevents;
    }

    public function addRetoururgenceevent(Retoururgenceevent $retoururgenceevent): static
    {
        if (!$this->retoururgenceevents->contains($retoururgenceevent)) {
            $this->retoururgenceevents->add($retoururgenceevent);
            $retoururgenceevent->setIdUrgenceEvent($this);
        }

        return $this;
    }

    public function removeRetoururgenceevent(Retoururgenceevent $retoururgenceevent): static
    {
        if ($this->retoururgenceevents->removeElement($retoururgenceevent)) {
            // set the owning side to null (unless already changed)
            if ($retoururgenceevent->getIdUrgenceEvent() === $this) {
                $retoururgenceevent->setIdUrgenceEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Panierurgence>
     */
    public function getPanierurgences(): Collection
    {
        return $this->panierurgences;
    }

    public function addPanierurgence(Panierurgence $panierurgence): static
    {
        if (!$this->panierurgences->contains($panierurgence)) {
            $this->panierurgences->add($panierurgence);
            $panierurgence->setIdUrgence($this);
        }

        return $this;
    }

    public function removePanierurgence(Panierurgence $panierurgence): static
    {
        if ($this->panierurgences->removeElement($panierurgence)) {
            // set the owning side to null (unless already changed)
            if ($panierurgence->getIdUrgence() === $this) {
                $panierurgence->setIdUrgence(null);
            }
        }

        return $this;
    }
}
