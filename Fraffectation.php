<?php

namespace App\Entity;

use App\Repository\FraffectationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FraffectationRepository::class)]
class Fraffectation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(nullable: true)]
    private ?int $IdUserWrite = null;

    #[ORM\Column(nullable: true)]
    private ?int $idMission = null;

    #[ORM\ManyToOne(inversedBy: 'fraffectations')]
    private ?Event $IdEvent = null;

    #[ORM\ManyToOne(inversedBy: 'fraffectations')]
    private ?Froute $IdFroute = null;

    #[ORM\ManyToOne(inversedBy: 'fraffectations')]
    private ?Salarie $idSalarie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Obs = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateM = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $debutM = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $finM = null;

    #[ORM\Column(nullable: true)]
    private ?int $idPrestEvent = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $profile = null;

    #[ORM\Column(nullable: true)]
    private ?int $idProfile = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mission = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $DebForfait = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $Salaire = null;

    #[ORM\Column(nullable: true)]
    private ?int $Repas = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $Facturer = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $hTrav = null;

    #[ORM\Column(nullable: true)]
    private ?int $IsNew = null;

    #[ORM\Column(nullable: true)]
    private ?int $pdfCtr = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $hDebOld = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $hFinOld = null;

    #[ORM\Column(nullable: true)]
    private ?bool $repModif = null;

    #[ORM\Column(nullable: true)]
    private ?bool $notifications = null;

    #[ORM\Column(nullable: true)]
    private ?bool $repFinal = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateAffectation = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateValabeAu = null;

    #[ORM\Column]
    private ?int $intD = null;

    #[ORM\Column(nullable: true)]
    private ?int $intF = null;

    #[ORM\Column(nullable: true)]
    private ?int $infoUrssaf = null;

    #[ORM\ManyToOne(inversedBy: 'fraffectations')]
    private ?Ursoperation $IdUsrOperation = null;

    #[ORM\Column(nullable: true)]
    private ?bool $salNewM = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $salVuLe = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $grilles = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $grilleClient = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $grilleSurnom = null;

    #[ORM\Column(nullable: true)]
    private ?bool $enTraitement = null;

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

    public function getIdMission(): ?int
    {
        return $this->idMission;
    }

    public function setIdMission(?int $idMission): static
    {
        $this->idMission = $idMission;

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

    public function getIdFroute(): ?Froute
    {
        return $this->IdFroute;
    }

    public function setIdFroute(?Froute $IdFroute): static
    {
        $this->IdFroute = $IdFroute;

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

    public function getObs(): ?string
    {
        return $this->Obs;
    }

    public function setObs(?string $Obs): static
    {
        $this->Obs = $Obs;

        return $this;
    }

    public function getDateM(): ?\DateTimeInterface
    {
        return $this->dateM;
    }

    public function setDateM(?\DateTimeInterface $dateM): static
    {
        $this->dateM = $dateM;

        return $this;
    }

    public function getDebutM(): ?string
    {
        return $this->debutM;
    }

    public function setDebutM(?string $debutM): static
    {
        $this->debutM = $debutM;

        return $this;
    }

    public function getFinM(): ?string
    {
        return $this->finM;
    }

    public function setFinM(?string $finM): static
    {
        $this->finM = $finM;

        return $this;
    }

    public function getIdPrestEvent(): ?int
    {
        return $this->idPrestEvent;
    }

    public function setIdPrestEvent(?int $idPrestEvent): static
    {
        $this->idPrestEvent = $idPrestEvent;

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

    public function getIdProfile(): ?int
    {
        return $this->idProfile;
    }

    public function setIdProfile(?int $idProfile): static
    {
        $this->idProfile = $idProfile;

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

    public function getDebForfait(): ?string
    {
        return $this->DebForfait;
    }

    public function setDebForfait(?string $DebForfait): static
    {
        $this->DebForfait = $DebForfait;

        return $this;
    }

    public function getSalaire(): ?string
    {
        return $this->Salaire;
    }

    public function setSalaire(string $Salaire): static
    {
        $this->Salaire = $Salaire;

        return $this;
    }

    public function getRepas(): ?int
    {
        return $this->Repas;
    }

    public function setRepas(?int $Repas): static
    {
        $this->Repas = $Repas;

        return $this;
    }

    public function getFacturer(): ?string
    {
        return $this->Facturer;
    }

    public function setFacturer(?string $Facturer): static
    {
        $this->Facturer = $Facturer;

        return $this;
    }

    public function getHTrav(): ?string
    {
        return $this->hTrav;
    }

    public function setHTrav(?string $hTrav): static
    {
        $this->hTrav = $hTrav;

        return $this;
    }

    public function getIsNew(): ?int
    {
        return $this->IsNew;
    }

    public function setIsNew(?int $IsNew): static
    {
        $this->IsNew = $IsNew;

        return $this;
    }

    public function getPdfCtr(): ?int
    {
        return $this->pdfCtr;
    }

    public function setPdfCtr(?int $pdfCtr): static
    {
        $this->pdfCtr = $pdfCtr;

        return $this;
    }

    public function getHDebOld(): ?string
    {
        return $this->hDebOld;
    }

    public function setHDebOld(?string $hDebOld): static
    {
        $this->hDebOld = $hDebOld;

        return $this;
    }

    public function getHFinOld(): ?string
    {
        return $this->hFinOld;
    }

    public function setHFinOld(?string $hFinOld): static
    {
        $this->hFinOld = $hFinOld;

        return $this;
    }

    public function isRepModif(): ?bool
    {
        return $this->repModif;
    }

    public function setRepModif(?bool $repModif): static
    {
        $this->repModif = $repModif;

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

    public function isRepFinal(): ?bool
    {
        return $this->repFinal;
    }

    public function setRepFinal(?bool $repFinal): static
    {
        $this->repFinal = $repFinal;

        return $this;
    }

    public function getDateAffectation(): ?\DateTimeInterface
    {
        return $this->dateAffectation;
    }

    public function setDateAffectation(?\DateTimeInterface $dateAffectation): static
    {
        $this->dateAffectation = $dateAffectation;

        return $this;
    }

    public function getDateValabeAu(): ?\DateTimeInterface
    {
        return $this->dateValabeAu;
    }

    public function setDateValabeAu(?\DateTimeInterface $dateValabeAu): static
    {
        $this->dateValabeAu = $dateValabeAu;

        return $this;
    }

    public function getIntD(): ?int
    {
        return $this->intD;
    }

    public function setIntD(int $intD): static
    {
        $this->intD = $intD;

        return $this;
    }

    public function getIntF(): ?int
    {
        return $this->intF;
    }

    public function setIntF(?int $intF): static
    {
        $this->intF = $intF;

        return $this;
    }

    public function getInfoUrssaf(): ?int
    {
        return $this->infoUrssaf;
    }

    public function setInfoUrssaf(?int $infoUrssaf): static
    {
        $this->infoUrssaf = $infoUrssaf;

        return $this;
    }

    public function getIdUsrOperation(): ?Ursoperation
    {
        return $this->IdUsrOperation;
    }

    public function setIdUsrOperation(?Ursoperation $IdUsrOperation): static
    {
        $this->IdUsrOperation = $IdUsrOperation;

        return $this;
    }

    public function isSalNewM(): ?bool
    {
        return $this->salNewM;
    }

    public function setSalNewM(?bool $salNewM): static
    {
        $this->salNewM = $salNewM;

        return $this;
    }

    public function getSalVuLe(): ?\DateTimeInterface
    {
        return $this->salVuLe;
    }

    public function setSalVuLe(?\DateTimeInterface $salVuLe): static
    {
        $this->salVuLe = $salVuLe;

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

    public function isEnTraitement(): ?bool
    {
        return $this->enTraitement;
    }

    public function setEnTraitement(?bool $enTraitement): static
    {
        $this->enTraitement = $enTraitement;

        return $this;
    }
}
