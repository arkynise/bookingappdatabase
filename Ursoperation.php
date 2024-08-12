<?php

namespace App\Entity;

use App\Repository\UrsoperationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UrsoperationRepository::class)]
class Ursoperation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateCreation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NumeroDevis = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Commercial = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateFin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Client = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Lieu = null;

    #[ORM\Column(nullable: true)]
    private ?bool $DpaeCree = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DpaeDate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateInsertion = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Prenom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $IdSalarie = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateNaissance = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NumSS = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $CleSS = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $CommuneNaissance = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $DepartementNaissance = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $DpaeCode = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $DpaeErreurCode = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $DpaeErreurMessage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NomFichier = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NumLot = null;

    #[ORM\Column(nullable: true)]
    private ?bool $ReceptionTraitee = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateEnvoi = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateReception = null;

    #[ORM\Column(nullable: true)]
    private ?int $DpaeNbErreurs = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateInsertionDpae = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $IdFlux = null;

    #[ORM\ManyToOne(inversedBy: 'ursoperations')]
    private ?Event $IdEvent = null;

    #[ORM\Column(nullable: true)]
    private ?int $Genre = null;

    /**
     * @var Collection<int, Fraffectation>
     */
    #[ORM\OneToMany(targetEntity: Fraffectation::class, mappedBy: 'IdUsrOperation')]
    private Collection $fraffectations;

    /**
     * @var Collection<int, Ursvacation>
     */
    #[ORM\OneToMany(targetEntity: Ursvacation::class, mappedBy: 'IdOperation')]
    private Collection $ursvacations;

    public function __construct()
    {
        $this->fraffectations = new ArrayCollection();
        $this->ursvacations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNumeroDevis(): ?string
    {
        return $this->NumeroDevis;
    }

    public function setNumeroDevis(?string $NumeroDevis): static
    {
        $this->NumeroDevis = $NumeroDevis;

        return $this;
    }

    public function getCommercial(): ?string
    {
        return $this->Commercial;
    }

    public function setCommercial(?string $Commercial): static
    {
        $this->Commercial = $Commercial;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->DateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $DateDebut): static
    {
        $this->DateDebut = $DateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->DateFin;
    }

    public function setDateFin(?\DateTimeInterface $DateFin): static
    {
        $this->DateFin = $DateFin;

        return $this;
    }

    public function getClient(): ?string
    {
        return $this->Client;
    }

    public function setClient(?string $Client): static
    {
        $this->Client = $Client;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->Lieu;
    }

    public function setLieu(?string $Lieu): static
    {
        $this->Lieu = $Lieu;

        return $this;
    }

    public function isDpaeCree(): ?bool
    {
        return $this->DpaeCree;
    }

    public function setDpaeCree(?bool $DpaeCree): static
    {
        $this->DpaeCree = $DpaeCree;

        return $this;
    }

    public function getDpaeDate(): ?\DateTimeInterface
    {
        return $this->DpaeDate;
    }

    public function setDpaeDate(?\DateTimeInterface $DpaeDate): static
    {
        $this->DpaeDate = $DpaeDate;

        return $this;
    }

    public function getDateInsertion(): ?\DateTimeInterface
    {
        return $this->DateInsertion;
    }

    public function setDateInsertion(?\DateTimeInterface $DateInsertion): static
    {
        $this->DateInsertion = $DateInsertion;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(?string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(?string $Prenom): static
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getIdSalarie(): ?string
    {
        return $this->IdSalarie;
    }

    public function setIdSalarie(?string $IdSalarie): static
    {
        $this->IdSalarie = $IdSalarie;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->DateNaissance;
    }

    public function setDateNaissance(?\DateTimeInterface $DateNaissance): static
    {
        $this->DateNaissance = $DateNaissance;

        return $this;
    }

    public function getNumSS(): ?string
    {
        return $this->NumSS;
    }

    public function setNumSS(?string $NumSS): static
    {
        $this->NumSS = $NumSS;

        return $this;
    }

    public function getCleSS(): ?string
    {
        return $this->CleSS;
    }

    public function setCleSS(?string $CleSS): static
    {
        $this->CleSS = $CleSS;

        return $this;
    }

    public function getCommuneNaissance(): ?string
    {
        return $this->CommuneNaissance;
    }

    public function setCommuneNaissance(?string $CommuneNaissance): static
    {
        $this->CommuneNaissance = $CommuneNaissance;

        return $this;
    }

    public function getDepartementNaissance(): ?string
    {
        return $this->DepartementNaissance;
    }

    public function setDepartementNaissance(?string $DepartementNaissance): static
    {
        $this->DepartementNaissance = $DepartementNaissance;

        return $this;
    }

    public function getDpaeCode(): ?string
    {
        return $this->DpaeCode;
    }

    public function setDpaeCode(?string $DpaeCode): static
    {
        $this->DpaeCode = $DpaeCode;

        return $this;
    }

    public function getDpaeErreurCode(): ?string
    {
        return $this->DpaeErreurCode;
    }

    public function setDpaeErreurCode(?string $DpaeErreurCode): static
    {
        $this->DpaeErreurCode = $DpaeErreurCode;

        return $this;
    }

    public function getDpaeErreurMessage(): ?string
    {
        return $this->DpaeErreurMessage;
    }

    public function setDpaeErreurMessage(?string $DpaeErreurMessage): static
    {
        $this->DpaeErreurMessage = $DpaeErreurMessage;

        return $this;
    }

    public function getNomFichier(): ?string
    {
        return $this->NomFichier;
    }

    public function setNomFichier(?string $NomFichier): static
    {
        $this->NomFichier = $NomFichier;

        return $this;
    }

    public function getNumLot(): ?string
    {
        return $this->NumLot;
    }

    public function setNumLot(?string $NumLot): static
    {
        $this->NumLot = $NumLot;

        return $this;
    }

    public function isReceptionTraitee(): ?bool
    {
        return $this->ReceptionTraitee;
    }

    public function setReceptionTraitee(?bool $ReceptionTraitee): static
    {
        $this->ReceptionTraitee = $ReceptionTraitee;

        return $this;
    }

    public function getDateEnvoi(): ?\DateTimeInterface
    {
        return $this->DateEnvoi;
    }

    public function setDateEnvoi(?\DateTimeInterface $DateEnvoi): static
    {
        $this->DateEnvoi = $DateEnvoi;

        return $this;
    }

    public function getDateReception(): ?\DateTimeInterface
    {
        return $this->DateReception;
    }

    public function setDateReception(?\DateTimeInterface $DateReception): static
    {
        $this->DateReception = $DateReception;

        return $this;
    }

    public function getDpaeNbErreurs(): ?int
    {
        return $this->DpaeNbErreurs;
    }

    public function setDpaeNbErreurs(?int $DpaeNbErreurs): static
    {
        $this->DpaeNbErreurs = $DpaeNbErreurs;

        return $this;
    }

    public function getDateInsertionDpae(): ?\DateTimeInterface
    {
        return $this->DateInsertionDpae;
    }

    public function setDateInsertionDpae(?\DateTimeInterface $DateInsertionDpae): static
    {
        $this->DateInsertionDpae = $DateInsertionDpae;

        return $this;
    }

    public function getIdFlux(): ?string
    {
        return $this->IdFlux;
    }

    public function setIdFlux(?string $IdFlux): static
    {
        $this->IdFlux = $IdFlux;

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

    public function getGenre(): ?int
    {
        return $this->Genre;
    }

    public function setGenre(?int $Genre): static
    {
        $this->Genre = $Genre;

        return $this;
    }

    /**
     * @return Collection<int, Fraffectation>
     */
    public function getFraffectations(): Collection
    {
        return $this->fraffectations;
    }

    public function addFraffectation(Fraffectation $fraffectation): static
    {
        if (!$this->fraffectations->contains($fraffectation)) {
            $this->fraffectations->add($fraffectation);
            $fraffectation->setIdUsrOperation($this);
        }

        return $this;
    }

    public function removeFraffectation(Fraffectation $fraffectation): static
    {
        if ($this->fraffectations->removeElement($fraffectation)) {
            // set the owning side to null (unless already changed)
            if ($fraffectation->getIdUsrOperation() === $this) {
                $fraffectation->setIdUsrOperation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Ursvacation>
     */
    public function getUrsvacations(): Collection
    {
        return $this->ursvacations;
    }

    public function addUrsvacation(Ursvacation $ursvacation): static
    {
        if (!$this->ursvacations->contains($ursvacation)) {
            $this->ursvacations->add($ursvacation);
            $ursvacation->setIdOperation($this);
        }

        return $this;
    }

    public function removeUrsvacation(Ursvacation $ursvacation): static
    {
        if ($this->ursvacations->removeElement($ursvacation)) {
            // set the owning side to null (unless already changed)
            if ($ursvacation->getIdOperation() === $this) {
                $ursvacation->setIdOperation(null);
            }
        }

        return $this;
    }
}
