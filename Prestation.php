<?php

namespace App\Entity;

use App\Repository\PrestationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PrestationRepository::class)]
class Prestation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $mission = null;

    #[ORM\Column(name:'idDevis',nullable: true)]
    private ?int $idDevis = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $uniforme = null;

    #[ORM\Column(name:'DebForfait',length: 255, nullable: true)]
    private ?string $DebForfait = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $accessoire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $observation = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    private ?int $effectif = null;

    #[ORM\Column(length: 255)]
    private ?string $profile = null;

    #[ORM\Column(name:'IdProfile',nullable: true)]
    private ?int $IdProfile = null;

    #[ORM\Column(name:'NbRepas',nullable: true)]
    private ?int $NbRepas = null;

    #[ORM\Column(name:'Xtra',nullable: true)]
    private ?int $Xtra = null;

    #[ORM\Column(name:'TotalRepas',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $TotalRepas = null;

    #[ORM\Column(name:'heureTravaille',length: 255, nullable: true)]
    private ?string $heureTravaille = null;

    #[ORM\Column(name:'heureD',length: 255)]
    private ?string $heureD = null;

    #[ORM\Column(name:'heureF',length: 255)]
    private ?string $heureF = null;

    #[ORM\Column(name:'totalPSansB',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $totalPSansB = null;

    #[ORM\Column(name:'totalP',type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $totalP = null;

    #[ORM\Column(name:'$totalBrut',type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $totalBrut = null;

    #[ORM\Column(name:'intBrut',type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $intBrut = null;

    #[ORM\Column(name:'tarifPrestation',type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $tarifPrestation = null;

    #[ORM\Column(name:'tarifPrestationSansB',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $tarifPrestationSansB = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $grilles = null;

    #[ORM\Column(name:'grilleClient',length: 255, nullable: true)]
    private ?string $grilleClient = null;

    #[ORM\ManyToOne(inversedBy: 'prestations')]
    #[ORM\JoinColumn(name:"profilePrestation", referencedColumnName:"id")]
    private ?profile $profilePrestation = null;

    #[ORM\ManyToOne(inversedBy: 'prestations')]
    #[ORM\JoinColumn(name:"idEvent", referencedColumnName:"id")]
    private ?event $idEvent = null;

    #[ORM\Column(name:'IdMission',nullable: true)]
    private ?int $IdMission = null;

    #[ORM\Column(name:'idPrestDevis',nullable: true)]
    private ?int $idPrestDevis = null;

    #[ORM\Column(name:'IsNew',nullable: true)]
    private ?bool $IsNew = null;

    #[ORM\Column(name:'intD',nullable: true)]
    private ?int $intD = null;

    #[ORM\Column(name:'intF',nullable: true)]
    private ?int $intF = null;

    #[ORM\Column(name:'grilleSurnom',length: 255)]
    private ?string $grilleSurnom = null;

    #[ORM\ManyToOne(inversedBy: 'prestations')]
    #[ORM\JoinColumn(name:"missionPrestation", referencedColumnName:"id")]
    private ?mission $missionPrestation = null;

    /**
     * @var Collection<int, Diffusionsalprest>
     */
    #[ORM\OneToMany(targetEntity: Diffusionsalprest::class, mappedBy: 'idPrestation')]
    private Collection $diffusionsalprests;

    /**
     * @var Collection<int, Messageprestation>
     */
    #[ORM\OneToMany(targetEntity: Messageprestation::class, mappedBy: 'idPrestation')]
    private Collection $messageprestations;

    /**
     * @var Collection<int, Urgenceevent>
     */
    #[ORM\OneToMany(targetEntity: Urgenceevent::class, mappedBy: 'idPrest')]
    private Collection $urgenceevents;

    public function __construct()
    {
        $this->diffusionsalprests = new ArrayCollection();
        $this->messageprestations = new ArrayCollection();
        $this->urgenceevents = new ArrayCollection();
    }

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

    public function getIdDevis(): ?int
    {
        return $this->idDevis;
    }

    public function setIdDevis(?int $idDevis): static
    {
        $this->idDevis = $idDevis;

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

    public function getProfile(): ?string
    {
        return $this->profile;
    }

    public function setProfile(string $profile): static
    {
        $this->profile = $profile;

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

    public function getProfilePrestation(): ?profile
    {
        return $this->profilePrestation;
    }

    public function setProfilePrestation(?profile $profilePrestation): static
    {
        $this->profilePrestation = $profilePrestation;

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

    public function getIdMission(): ?int
    {
        return $this->IdMission;
    }

    public function setIdMission(?int $IdMission): static
    {
        $this->IdMission = $IdMission;

        return $this;
    }

    public function getIdPrestDevis(): ?int
    {
        return $this->idPrestDevis;
    }

    public function setIdPrestDevis(?int $idPrestDevis): static
    {
        $this->idPrestDevis = $idPrestDevis;

        return $this;
    }

    public function isNew(): ?bool
    {
        return $this->IsNew;
    }

    public function setNew(?bool $IsNew): static
    {
        $this->IsNew = $IsNew;

        return $this;
    }

    public function getIntD(): ?int
    {
        return $this->intD;
    }

    public function setIntD(?int $intD): static
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

    public function getGrilleSurnom(): ?string
    {
        return $this->grilleSurnom;
    }

    public function setGrilleSurnom(string $grilleSurnom): static
    {
        $this->grilleSurnom = $grilleSurnom;

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

    /**
     * @return Collection<int, Diffusionsalprest>
     */
    public function getDiffusionsalprests(): Collection
    {
        return $this->diffusionsalprests;
    }

    public function addDiffusionsalprest(Diffusionsalprest $diffusionsalprest): static
    {
        if (!$this->diffusionsalprests->contains($diffusionsalprest)) {
            $this->diffusionsalprests->add($diffusionsalprest);
            $diffusionsalprest->setIdPrestation($this);
        }

        return $this;
    }

    public function removeDiffusionsalprest(Diffusionsalprest $diffusionsalprest): static
    {
        if ($this->diffusionsalprests->removeElement($diffusionsalprest)) {
            // set the owning side to null (unless already changed)
            if ($diffusionsalprest->getIdPrestation() === $this) {
                $diffusionsalprest->setIdPrestation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Messageprestation>
     */
    public function getMessageprestations(): Collection
    {
        return $this->messageprestations;
    }

    public function addMessageprestation(Messageprestation $messageprestation): static
    {
        if (!$this->messageprestations->contains($messageprestation)) {
            $this->messageprestations->add($messageprestation);
            $messageprestation->setIdPrestation($this);
        }

        return $this;
    }

    public function removeMessageprestation(Messageprestation $messageprestation): static
    {
        if ($this->messageprestations->removeElement($messageprestation)) {
            // set the owning side to null (unless already changed)
            if ($messageprestation->getIdPrestation() === $this) {
                $messageprestation->setIdPrestation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Urgenceevent>
     */
    public function getUrgenceevents(): Collection
    {
        return $this->urgenceevents;
    }

    public function addUrgenceevent(Urgenceevent $urgenceevent): static
    {
        if (!$this->urgenceevents->contains($urgenceevent)) {
            $this->urgenceevents->add($urgenceevent);
            $urgenceevent->setIdPrest($this);
        }

        return $this;
    }

    public function removeUrgenceevent(Urgenceevent $urgenceevent): static
    {
        if ($this->urgenceevents->removeElement($urgenceevent)) {
            // set the owning side to null (unless already changed)
            if ($urgenceevent->getIdPrest() === $this) {
                $urgenceevent->setIdPrest(null);
            }
        }

        return $this;
    }
}
