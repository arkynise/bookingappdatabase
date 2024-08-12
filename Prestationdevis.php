<?php

namespace App\Entity;

use App\Repository\PrestationdevisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PrestationdevisRepository::class)]
class Prestationdevis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $mission = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $uniforme = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $DebForfait = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $accessoire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $observation = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    private ?int $effectif = null;

    #[ORM\Column(nullable: true)]
    private ?int $IdProfile = null;

    #[ORM\Column(nullable: true)]
    private ?int $NbRepas = null;

    #[ORM\Column(nullable: true)]
    private ?int $Xtra = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $TotalRepas = null;

    #[ORM\Column(length: 255)]
    private ?string $profile = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $heureTravaille = null;

    #[ORM\Column(length: 255)]
    private ?string $heureD = null;

    #[ORM\Column(length: 255)]
    private ?string $heureF = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $totalPSansB = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $totalP = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $totalBrut = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $intBrut = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $tarifPrestation = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $tarifPrestationSansB = null;

    #[ORM\Column(length: 255)]
    private ?string $grilles = null;

    #[ORM\Column(length: 255)]
    private ?string $grilleClient = null;

    #[ORM\Column(length: 255)]
    private ?string $grilleSurnom = null;

    #[ORM\ManyToOne(inversedBy: 'prestationdevis')]
    private ?devis $idDevis = null;

    #[ORM\ManyToOne(inversedBy: 'prestationdevis')]
    private ?mission $missionPrestation = null;

    #[ORM\ManyToOne(inversedBy: 'prestationdevis')]
    private ?profile $profilePrestation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMission(): ?string
    {
        return $this->mission;
    }

    public function setMission(string $mission): static
    {
        $this->mission = $mission;

        return $this;
    }

    public function getUniforme(): ?string
    {
        return $this->uniforme;
    }

    public function setUniforme(?string $uniforme): static
    {
        $this->uniforme = $uniforme;

        return $this;
    }

    public function getDebForfait(): ?string
    {
        return $this->DebForfait;
    }

    public function setDebForfait(?string $DebForfait): static
    {
        $this->DebForfait = $DebForfait;

        return $this;
    }

    public function getAccessoire(): ?string
    {
        return $this->accessoire;
    }

    public function setAccessoire(?string $accessoire): static
    {
        $this->accessoire = $accessoire;

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getEffectif(): ?int
    {
        return $this->effectif;
    }

    public function setEffectif(int $effectif): static
    {
        $this->effectif = $effectif;

        return $this;
    }

    public function getIdProfile(): ?int
    {
        return $this->IdProfile;
    }

    public function setIdProfile(?int $IdProfile): static
    {
        $this->IdProfile = $IdProfile;

        return $this;
    }

    public function getNbRepas(): ?int
    {
        return $this->NbRepas;
    }

    public function setNbRepas(?int $NbRepas): static
    {
        $this->NbRepas = $NbRepas;

        return $this;
    }

    public function getXtra(): ?int
    {
        return $this->Xtra;
    }

    public function setXtra(?int $Xtra): static
    {
        $this->Xtra = $Xtra;

        return $this;
    }

    public function getTotalRepas(): ?string
    {
        return $this->TotalRepas;
    }

    public function setTotalRepas(?string $TotalRepas): static
    {
        $this->TotalRepas = $TotalRepas;

        return $this;
    }

    public function getProfile(): ?string
    {
        return $this->profile;
    }

    public function setProfile(string $profile): static
    {
        $this->profile = $profile;

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

    public function getHeureD(): ?string
    {
        return $this->heureD;
    }

    public function setHeureD(string $heureD): static
    {
        $this->heureD = $heureD;

        return $this;
    }

    public function getHeureF(): ?string
    {
        return $this->heureF;
    }

    public function setHeureF(string $heureF): static
    {
        $this->heureF = $heureF;

        return $this;
    }

    public function getTotalPSansB(): ?string
    {
        return $this->totalPSansB;
    }

    public function setTotalPSansB(?string $totalPSansB): static
    {
        $this->totalPSansB = $totalPSansB;

        return $this;
    }

    public function getTotalP(): ?string
    {
        return $this->totalP;
    }

    public function setTotalP(string $totalP): static
    {
        $this->totalP = $totalP;

        return $this;
    }

    public function getTotalBrut(): ?string
    {
        return $this->totalBrut;
    }

    public function setTotalBrut(string $totalBrut): static
    {
        $this->totalBrut = $totalBrut;

        return $this;
    }

    public function getIntBrut(): ?string
    {
        return $this->intBrut;
    }

    public function setIntBrut(string $intBrut): static
    {
        $this->intBrut = $intBrut;

        return $this;
    }

    public function getTarifPrestation(): ?string
    {
        return $this->tarifPrestation;
    }

    public function setTarifPrestation(string $tarifPrestation): static
    {
        $this->tarifPrestation = $tarifPrestation;

        return $this;
    }

    public function getTarifPrestationSansB(): ?string
    {
        return $this->tarifPrestationSansB;
    }

    public function setTarifPrestationSansB(?string $tarifPrestationSansB): static
    {
        $this->tarifPrestationSansB = $tarifPrestationSansB;

        return $this;
    }

    public function getGrilles(): ?string
    {
        return $this->grilles;
    }

    public function setGrilles(string $grilles): static
    {
        $this->grilles = $grilles;

        return $this;
    }

    public function getGrilleClient(): ?string
    {
        return $this->grilleClient;
    }

    public function setGrilleClient(string $grilleClient): static
    {
        $this->grilleClient = $grilleClient;

        return $this;
    }

    public function getGrilleSurnom(): ?string
    {
        return $this->grilleSurnom;
    }

    public function setGrilleSurnom(string $grilleSurnom): static
    {
        $this->grilleSurnom = $grilleSurnom;

        return $this;
    }

    public function getIdDevis(): ?devis
    {
        return $this->idDevis;
    }

    public function setIdDevis(?devis $idDevis): static
    {
        $this->idDevis = $idDevis;

        return $this;
    }

    public function getMissionPrestation(): ?mission
    {
        return $this->missionPrestation;
    }

    public function setMissionPrestation(?mission $missionPrestation): static
    {
        $this->missionPrestation = $missionPrestation;

        return $this;
    }

    public function getProfilePrestation(): ?profile
    {
        return $this->profilePrestation;
    }

    public function setProfilePrestation(?profile $profilePrestation): static
    {
        $this->profilePrestation = $profilePrestation;

        return $this;
    }
}
