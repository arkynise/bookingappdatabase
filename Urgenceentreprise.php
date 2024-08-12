<?php

namespace App\Entity;

use App\Repository\UrgenceentrepriseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UrgenceentrepriseRepository::class)]
class Urgenceentreprise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(nullable: true)]
    private ?int $idUserWrite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $titre = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $infoDate = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lieu = null;

    #[ORM\Column(nullable: true)]
    private ?bool $homme = null;

    #[ORM\Column(nullable: true)]
    private ?bool $femme = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateDbt = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateFin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mission = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $heureFin = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $heureDbt = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $infoHeure = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prix = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $infoPrix = null;

    #[ORM\Column(nullable: true)]
    private ?bool $actif = null;

    #[ORM\Column(nullable: true)]
    private ?bool $notifications = null;

    #[ORM\Column(nullable: true)]
    private ?int $groupe = null;

    /**
     * @var Collection<int, Retoururgenceentreprise>
     */
    #[ORM\OneToMany(targetEntity: Retoururgenceentreprise::class, mappedBy: 'idUrgenceEntreprise')]
    private Collection $retoururgenceentreprises;

    /**
     * @var Collection<int, Panierurgenceentreprise>
     */
    #[ORM\OneToMany(targetEntity: Panierurgenceentreprise::class, mappedBy: 'idUrgence')]
    private Collection $panierurgenceentreprises;

    public function __construct()
    {
        $this->retoururgenceentreprises = new ArrayCollection();
        $this->panierurgenceentreprises = new ArrayCollection();
    }

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
        return $this->idUserWrite;
    }

    public function setIdUserWrite(?int $idUserWrite): static
    {
        $this->idUserWrite = $idUserWrite;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getInfoDate(): ?string
    {
        return $this->infoDate;
    }

    public function setInfoDate(?string $infoDate): static
    {
        $this->infoDate = $infoDate;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): static
    {
        $this->lieu = $lieu;

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

    public function getDateDbt(): ?\DateTimeInterface
    {
        return $this->dateDbt;
    }

    public function setDateDbt(?\DateTimeInterface $dateDbt): static
    {
        $this->dateDbt = $dateDbt;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): static
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getMission(): ?string
    {
        return $this->mission;
    }

    public function setMission(?string $mission): static
    {
        $this->mission = $mission;

        return $this;
    }

    public function getHeureFin(): ?\DateTimeInterface
    {
        return $this->heureFin;
    }

    public function setHeureFin(?\DateTimeInterface $heureFin): static
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    public function getHeureDbt(): ?\DateTimeInterface
    {
        return $this->heureDbt;
    }

    public function setHeureDbt(?\DateTimeInterface $heureDbt): static
    {
        $this->heureDbt = $heureDbt;

        return $this;
    }

    public function getInfoHeure(): ?string
    {
        return $this->infoHeure;
    }

    public function setInfoHeure(?string $infoHeure): static
    {
        $this->infoHeure = $infoHeure;

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

    public function getInfoPrix(): ?string
    {
        return $this->infoPrix;
    }

    public function setInfoPrix(?string $infoPrix): static
    {
        $this->infoPrix = $infoPrix;

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

    public function getGroupe(): ?int
    {
        return $this->groupe;
    }

    public function setGroupe(?int $groupe): static
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * @return Collection<int, Retoururgenceentreprise>
     */
    public function getRetoururgenceentreprises(): Collection
    {
        return $this->retoururgenceentreprises;
    }

    public function addRetoururgenceentreprise(Retoururgenceentreprise $retoururgenceentreprise): static
    {
        if (!$this->retoururgenceentreprises->contains($retoururgenceentreprise)) {
            $this->retoururgenceentreprises->add($retoururgenceentreprise);
            $retoururgenceentreprise->setIdUrgenceEntreprise($this);
        }

        return $this;
    }

    public function removeRetoururgenceentreprise(Retoururgenceentreprise $retoururgenceentreprise): static
    {
        if ($this->retoururgenceentreprises->removeElement($retoururgenceentreprise)) {
            // set the owning side to null (unless already changed)
            if ($retoururgenceentreprise->getIdUrgenceEntreprise() === $this) {
                $retoururgenceentreprise->setIdUrgenceEntreprise(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Panierurgenceentreprise>
     */
    public function getPanierurgenceentreprises(): Collection
    {
        return $this->panierurgenceentreprises;
    }

    public function addPanierurgenceentreprise(Panierurgenceentreprise $panierurgenceentreprise): static
    {
        if (!$this->panierurgenceentreprises->contains($panierurgenceentreprise)) {
            $this->panierurgenceentreprises->add($panierurgenceentreprise);
            $panierurgenceentreprise->setIdUrgence($this);
        }

        return $this;
    }

    public function removePanierurgenceentreprise(Panierurgenceentreprise $panierurgenceentreprise): static
    {
        if ($this->panierurgenceentreprises->removeElement($panierurgenceentreprise)) {
            // set the owning side to null (unless already changed)
            if ($panierurgenceentreprise->getIdUrgence() === $this) {
                $panierurgenceentreprise->setIdUrgence(null);
            }
        }

        return $this;
    }
}
