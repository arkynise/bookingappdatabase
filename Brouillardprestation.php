<?php

namespace App\Entity;

use App\Repository\BrouillardprestationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BrouillardprestationRepository::class)]
class Brouillardprestation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'NaturePrest',nullable: true)]
    private ?int $NaturePrest = null;

    #[ORM\Column(name:'idBrouillard',nullable: true)]
    private ?int $idBrouillard = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(name:'dateCreation',type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(name:'heureD',length: 255, nullable: true)]
    private ?string $heureD = null;

    #[ORM\Column(name:'heureF',length: 255, nullable: true)]
    private ?string $heureF = null;

    #[ORM\Column(name:'heureTravaille',length: 255, nullable: true)]
    private ?string $heureTravaille = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $profile = null;

    #[ORM\Column(name:'profileId',nullable: true)]
    private ?int $profileId = null;

    #[ORM\Column(name:'SalarieId',nullable: true)]
    private ?string $SalarieId = null;

    #[ORM\Column(name:'SalarieInfo',length: 255, nullable: true)]
    private ?string $SalarieInfo = null;

    #[ORM\Column(name:'Affectation',length: 255, nullable: true)]
    private ?string $Affectation = null;

    #[ORM\Column(name:'SalBrut',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $SalBrut = null;

    #[ORM\Column(nullable: true)]
    private ?int $repas = null;

    #[ORM\Column(name:'Prime',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $Prime = null;

    #[ORM\Column(name:'ForfaitVendu',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $ForfaitVendu = null;

    #[ORM\Column(name:'ForfaitDiversRm',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $ForfaitDiversRm = null;

    #[ORM\Column(name:'ForfaitDiversFact',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $ForfaitDiversFact = null;

    #[ORM\Column(name:'TaxiR',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $TaxiR = null;

    #[ORM\Column(name:'TaxiF',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $TaxiF = null;

    #[ORM\Column(name:'KMR',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $KMR = null;

    #[ORM\Column(name:'KMF',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $KMF = null;

    #[ORM\Column(name:'QteJP',length: 255, nullable: true)]
    private ?string $QteJP = null;

    #[ORM\Column(name:'MontantJP',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $MontantJP = null;

    #[ORM\Column(name:'QteJF',length: 255, nullable: true)]
    private ?string $QteJF = null;

    #[ORM\Column(name:'MontantJF',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $MontantJF = null;

    #[ORM\Column(name:'QteNP',length: 255, nullable: true)]
    private ?string $QteNP = null;

    #[ORM\Column(name:'MontantNP',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $MontantNP = null;

    #[ORM\Column(name:'QteNF',length: 255, nullable: true)]
    private ?string $QteNF = null;

    #[ORM\Column(name:'MontantNF',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $MontantNF = null;

    #[ORM\Column(name:'observation',length: 255, nullable: true)]
    private ?string $observation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $grilles = null;

    #[ORM\Column(name:'grilleClient',length: 255, nullable: true)]
    private ?string $grilleClient = null;

    #[ORM\Column(name:'grilleSurnom',length: 255, nullable: true)]
    private ?string $grilleSurnom = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNaturePrest(): ?int
    {
        return $this->NaturePrest;
    }

    public function setNaturePrest(?int $NaturePrest): static
    {
        $this->NaturePrest = $NaturePrest;

        return $this;
    }

    public function getIdBrouillard(): ?int
    {
        return $this->idBrouillard;
    }

    public function setIdBrouillard(?int $idBrouillard): static
    {
        $this->idBrouillard = $idBrouillard;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): static
    {
        $this->date = $date;

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

    public function getHeureD(): ?string
    {
        return $this->heureD;
    }

    public function setHeureD(?string $heureD): static
    {
        $this->heureD = $heureD;

        return $this;
    }

    public function getHeureF(): ?string
    {
        return $this->heureF;
    }

    public function setHeureF(?string $heureF): static
    {
        $this->heureF = $heureF;

        return $this;
    }

    public function getHeureTravaille(): ?string
    {
        return $this->heureTravaille;
    }

    public function setHeureTravaille(?string $heureTravaille): static
    {
        $this->heureTravaille = $heureTravaille;

        return $this;
    }

    public function getProfile(): ?string
    {
        return $this->profile;
    }

    public function setProfile(?string $profile): static
    {
        $this->profile = $profile;

        return $this;
    }

    public function getProfileId(): ?int
    {
        return $this->profileId;
    }

    public function setProfileId(?int $profileId): static
    {
        $this->profileId = $profileId;

        return $this;
    }

    public function getSalarieId(): ?int
    {
        return $this->SalarieId;
    }

    public function setSalarieId(int $SalarieId): static
    {
        $this->SalarieId = $SalarieId;

        return $this;
    }

    public function getSalarieInfo(): ?string
    {
        return $this->SalarieInfo;
    }

    public function setSalarieInfo(?string $SalarieInfo): static
    {
        $this->SalarieInfo = $SalarieInfo;

        return $this;
    }

    public function getAffectation(): ?string
    {
        return $this->Affectation;
    }

    public function setAffectation(?string $Affectation): static
    {
        $this->Affectation = $Affectation;

        return $this;
    }

    public function getSalBrut(): ?string
    {
        return $this->SalBrut;
    }

    public function setSalBrut(?string $SalBrut): static
    {
        $this->SalBrut = $SalBrut;

        return $this;
    }

    public function getRepas(): ?int
    {
        return $this->repas;
    }

    public function setRepas(?int $repas): static
    {
        $this->repas = $repas;

        return $this;
    }

    public function getPrime(): ?string
    {
        return $this->Prime;
    }

    public function setPrime(?string $Prime): static
    {
        $this->Prime = $Prime;

        return $this;
    }

    public function getForfaitVendu(): ?string
    {
        return $this->ForfaitVendu;
    }

    public function setForfaitVendu(?string $ForfaitVendu): static
    {
        $this->ForfaitVendu = $ForfaitVendu;

        return $this;
    }

    public function getForfaitDiversRm(): ?string
    {
        return $this->ForfaitDiversRm;
    }

    public function setForfaitDiversRm(?string $ForfaitDiversRm): static
    {
        $this->ForfaitDiversRm = $ForfaitDiversRm;

        return $this;
    }

    public function getForfaitDiversFact(): ?string
    {
        return $this->ForfaitDiversFact;
    }

    public function setForfaitDiversFact(?string $ForfaitDiversFact): static
    {
        $this->ForfaitDiversFact = $ForfaitDiversFact;

        return $this;
    }

    public function getTaxiR(): ?string
    {
        return $this->TaxiR;
    }

    public function setTaxiR(?string $TaxiR): static
    {
        $this->TaxiR = $TaxiR;

        return $this;
    }

    public function getTaxiF(): ?string
    {
        return $this->TaxiF;
    }

    public function setTaxiF(?string $TaxiF): static
    {
        $this->TaxiF = $TaxiF;

        return $this;
    }

    public function getKMR(): ?string
    {
        return $this->KMR;
    }

    public function setKMR(?string $KMR): static
    {
        $this->KMR = $KMR;

        return $this;
    }

    public function getKMF(): ?string
    {
        return $this->KMF;
    }

    public function setKMF(?string $KMF): static
    {
        $this->KMF = $KMF;

        return $this;
    }

    public function getQteJP(): ?string
    {
        return $this->QteJP;
    }

    public function setQteJP(?string $QteJP): static
    {
        $this->QteJP = $QteJP;

        return $this;
    }

    public function getMontantJP(): ?string
    {
        return $this->MontantJP;
    }

    public function setMontantJP(?string $MontantJP): static
    {
        $this->MontantJP = $MontantJP;

        return $this;
    }

    public function getQteJF(): ?string
    {
        return $this->QteJF;
    }

    public function setQteJF(?string $QteJF): static
    {
        $this->QteJF = $QteJF;

        return $this;
    }

    public function getMontantJF(): ?string
    {
        return $this->MontantJF;
    }

    public function setMontantJF(?string $MontantJF): static
    {
        $this->MontantJF = $MontantJF;

        return $this;
    }

    public function getQteNP(): ?string
    {
        return $this->QteNP;
    }

    public function setQteNP(?string $QteNP): static
    {
        $this->QteNP = $QteNP;

        return $this;
    }

    public function getMontantNP(): ?string
    {
        return $this->MontantNP;
    }

    public function setMontantNP(?string $MontantNP): static
    {
        $this->MontantNP = $MontantNP;

        return $this;
    }

    public function getQteNF(): ?string
    {
        return $this->QteNF;
    }

    public function setQteNF(?string $QteNF): static
    {
        $this->QteNF = $QteNF;

        return $this;
    }

    public function getMontantNF(): ?string
    {
        return $this->MontantNF;
    }

    public function setMontantNF(?string $MontantNF): static
    {
        $this->MontantNF = $MontantNF;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(?string $observation): static
    {
        $this->observation = $observation;

        return $this;
    }

    public function getGrilles(): ?string
    {
        return $this->grilles;
    }

    public function setGrilles(?string $grilles): static
    {
        $this->grilles = $grilles;

        return $this;
    }

    public function getGrilleClient(): ?string
    {
        return $this->grilleClient;
    }

    public function setGrilleClient(?string $grilleClient): static
    {
        $this->grilleClient = $grilleClient;

        return $this;
    }

    public function getGrilleSurnom(): ?string
    {
        return $this->grilleSurnom;
    }

    public function setGrilleSurnom(?string $grilleSurnom): static
    {
        $this->grilleSurnom = $grilleSurnom;

        return $this;
    }
}
