<?php

namespace App\Entity;

use App\Repository\DevisRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DevisRepository::class)]
class Devis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $manifestation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $marque = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $grilleTarifaireSurnom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $infRetourClient = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $UserWrite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $commercial = null;

    #[ORM\Column(nullable: true)]
    private ?int $IdCommercial = null;

  

    #[ORM\Column(type: Types::DECIMAL, precision: 2, scale: 2, nullable: true)]
    private ?string $RepasPrix = null;

    #[ORM\Column(nullable: true)]
    private ?int $RepasQte = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $RepasTotal = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $RepasObservation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lieu = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $latitude = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $longitude = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_debut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $daet_fin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $heure_debut = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $heure_fin = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_devis = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $status = null;

    #[ORM\Column(length: 255)]
    private ?string $repas = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $accompte = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $booster = null;

    #[ORM\Column(nullable: true)]
    private ?float $remise = null;

    #[ORM\Column(nullable: true)]
    private ?int $NbDupliquer = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $totalPrestation = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $totalPrestationSansB = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $TotalFrais = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $TotalBrut = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $RemisA = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $RemisP = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $MasseSalarial = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $Tva = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $TvaA = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $TvaTotal = null;

    #[ORM\Column(nullable: true)]
    private ?int $ReglementFacture = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $TotalGeneralTTc = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $AcompteHT = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $AcompteP = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $total_general = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $coef_brut = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $coef_net = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NumeroDevis = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $DevisForfait = null;

    #[ORM\Column(nullable: true)]
    private ?int $IdBrouillard = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Groupe = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $UserAppart = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $infUniforme = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ClientChois = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Adress = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Adress2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Contact = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $version = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Contact2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $GrilleTarifaire = null;

    #[ORM\Column(nullable: true)]
    private ?int $RecherchClient = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $obsLieu = null;

    #[ORM\Column(nullable: true)]
    private ?int $IdUserWrite = null;

    /**
     * @var Collection<int, Devisuser>
     */
    #[ORM\OneToMany(targetEntity: Devisuser::class, mappedBy: 'Devis')]
    private Collection $devisusers;

    /**
     * @var Collection<int, Frais>
     */
    #[ORM\OneToMany(targetEntity: Frais::class, mappedBy: 'idDevis')]
    private Collection $frais;

    /**
     * @var Collection<int, Prestationdevis>
     */
    #[ORM\OneToMany(targetEntity: Prestationdevis::class, mappedBy: 'idDevis')]
    private Collection $prestationdevis;

    #[ORM\ManyToOne(inversedBy: 'devis')]
    private ?client $RechercheClient = null;

    public function __construct()
    {
        $this->devisusers = new ArrayCollection();
        $this->frais = new ArrayCollection();
        $this->prestationdevis = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getManifestation(): ?string
    {
        return $this->manifestation;
    }

    public function setManifestation(?string $manifestation): static
    {
        $this->manifestation = $manifestation;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(?string $marque): static
    {
        $this->marque = $marque;

        return $this;
    }

    public function getGrilleTarifaireSurnom(): ?string
    {
        return $this->grilleTarifaireSurnom;
    }

    public function setGrilleTarifaireSurnom(?string $grilleTarifaireSurnom): static
    {
        $this->grilleTarifaireSurnom = $grilleTarifaireSurnom;

        return $this;
    }

    public function getInfRetourClient(): ?string
    {
        return $this->infRetourClient;
    }

    public function setInfRetourClient(?string $infRetourClient): static
    {
        $this->infRetourClient = $infRetourClient;

        return $this;
    }

    public function getUserWrite(): ?string
    {
        return $this->UserWrite;
    }

    public function setUserWrite(?string $UserWrite): static
    {
        $this->UserWrite = $UserWrite;

        return $this;
    }

    public function getCommercial(): ?string
    {
        return $this->commercial;
    }

    public function setCommercial(?string $commercial): static
    {
        $this->commercial = $commercial;

        return $this;
    }

    public function getIdCommercial(): ?int
    {
        return $this->IdCommercial;
    }

    public function setIdCommercial(?int $IdCommercial): static
    {
        $this->IdCommercial = $IdCommercial;

        return $this;
    }

    

    public function getRepasPrix(): ?string
    {
        return $this->RepasPrix;
    }

    public function setRepasPrix(?string $RepasPrix): static
    {
        $this->RepasPrix = $RepasPrix;

        return $this;
    }

    public function getRepasQte(): ?int
    {
        return $this->RepasQte;
    }

    public function setRepasQte(?int $RepasQte): static
    {
        $this->RepasQte = $RepasQte;

        return $this;
    }

    public function getRepasTotal(): ?string
    {
        return $this->RepasTotal;
    }

    public function setRepasTotal(?string $RepasTotal): static
    {
        $this->RepasTotal = $RepasTotal;

        return $this;
    }

    public function getRepasObservation(): ?string
    {
        return $this->RepasObservation;
    }

    public function setRepasObservation(?string $RepasObservation): static
    {
        $this->RepasObservation = $RepasObservation;

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

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): static
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): static
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setDateDebut(?\DateTimeInterface $date_debut): static
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getDaetFin(): ?\DateTimeInterface
    {
        return $this->daet_fin;
    }

    public function setDaetFin(?\DateTimeInterface $daet_fin): static
    {
        $this->daet_fin = $daet_fin;

        return $this;
    }

    public function getHeureDebut(): ?string
    {
        return $this->heure_debut;
    }

    public function setHeureDebut(?string $heure_debut): static
    {
        $this->heure_debut = $heure_debut;

        return $this;
    }

    public function getHeureFin(): ?string
    {
        return $this->heure_fin;
    }

    public function setHeureFin(?string $heure_fin): static
    {
        $this->heure_fin = $heure_fin;

        return $this;
    }

    public function getDateDevis(): ?\DateTimeInterface
    {
        return $this->date_devis;
    }

    public function setDateDevis(\DateTimeInterface $date_devis): static
    {
        $this->date_devis = $date_devis;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getRepas(): ?string
    {
        return $this->repas;
    }

    public function setRepas(string $repas): static
    {
        $this->repas = $repas;

        return $this;
    }

    public function getAccompte(): ?string
    {
        return $this->accompte;
    }

    public function setAccompte(?string $accompte): static
    {
        $this->accompte = $accompte;

        return $this;
    }

    public function getBooster(): ?string
    {
        return $this->booster;
    }

    public function setBooster(?string $booster): static
    {
        $this->booster = $booster;

        return $this;
    }

    public function getRemise(): ?float
    {
        return $this->remise;
    }

    public function setRemise(?float $remise): static
    {
        $this->remise = $remise;

        return $this;
    }

    public function getNbDupliquer(): ?int
    {
        return $this->NbDupliquer;
    }

    public function setNbDupliquer(?int $NbDupliquer): static
    {
        $this->NbDupliquer = $NbDupliquer;

        return $this;
    }

    public function getTotalPrestation(): ?string
    {
        return $this->totalPrestation;
    }

    public function setTotalPrestation(?string $totalPrestation): static
    {
        $this->totalPrestation = $totalPrestation;

        return $this;
    }

    public function getTotalPrestationSansB(): ?string
    {
        return $this->totalPrestationSansB;
    }

    public function setTotalPrestationSansB(?string $totalPrestationSansB): static
    {
        $this->totalPrestationSansB = $totalPrestationSansB;

        return $this;
    }

    public function getTotalFrais(): ?string
    {
        return $this->TotalFrais;
    }

    public function setTotalFrais(string $TotalFrais): static
    {
        $this->TotalFrais = $TotalFrais;

        return $this;
    }

    public function getTotalBrut(): ?string
    {
        return $this->TotalBrut;
    }

    public function setTotalBrut(?string $TotalBrut): static
    {
        $this->TotalBrut = $TotalBrut;

        return $this;
    }

    public function getRemisA(): ?string
    {
        return $this->RemisA;
    }

    public function setRemisA(?string $RemisA): static
    {
        $this->RemisA = $RemisA;

        return $this;
    }

    public function getRemisP(): ?string
    {
        return $this->RemisP;
    }

    public function setRemisP(?string $RemisP): static
    {
        $this->RemisP = $RemisP;

        return $this;
    }

    public function getMasseSalarial(): ?string
    {
        return $this->MasseSalarial;
    }

    public function setMasseSalarial(?string $MasseSalarial): static
    {
        $this->MasseSalarial = $MasseSalarial;

        return $this;
    }

    public function getTva(): ?string
    {
        return $this->Tva;
    }

    public function setTva(?string $Tva): static
    {
        $this->Tva = $Tva;

        return $this;
    }

    public function getTvaA(): ?string
    {
        return $this->TvaA;
    }

    public function setTvaA(?string $TvaA): static
    {
        $this->TvaA = $TvaA;

        return $this;
    }

    public function getTvaTotal(): ?string
    {
        return $this->TvaTotal;
    }

    public function setTvaTotal(?string $TvaTotal): static
    {
        $this->TvaTotal = $TvaTotal;

        return $this;
    }

    public function getReglementFacture(): ?int
    {
        return $this->ReglementFacture;
    }

    public function setReglementFacture(?int $ReglementFacture): static
    {
        $this->ReglementFacture = $ReglementFacture;

        return $this;
    }

    public function getTotalGeneralTTc(): ?string
    {
        return $this->TotalGeneralTTc;
    }

    public function setTotalGeneralTTc(?string $TotalGeneralTTc): static
    {
        $this->TotalGeneralTTc = $TotalGeneralTTc;

        return $this;
    }

    public function getAcompteHT(): ?string
    {
        return $this->AcompteHT;
    }

    public function setAcompteHT(?string $AcompteHT): static
    {
        $this->AcompteHT = $AcompteHT;

        return $this;
    }

    public function getAcompteP(): ?string
    {
        return $this->AcompteP;
    }

    public function setAcompteP(?string $AcompteP): static
    {
        $this->AcompteP = $AcompteP;

        return $this;
    }

    public function getTotalGeneral(): ?string
    {
        return $this->total_general;
    }

    public function setTotalGeneral(?string $total_general): static
    {
        $this->total_general = $total_general;

        return $this;
    }

    public function getCoefBrut(): ?string
    {
        return $this->coef_brut;
    }

    public function setCoefBrut(?string $coef_brut): static
    {
        $this->coef_brut = $coef_brut;

        return $this;
    }

    public function getCoefNet(): ?string
    {
        return $this->coef_net;
    }

    public function setCoefNet(?string $coef_net): static
    {
        $this->coef_net = $coef_net;

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

    public function getDevisForfait(): ?string
    {
        return $this->DevisForfait;
    }

    public function setDevisForfait(?string $DevisForfait): static
    {
        $this->DevisForfait = $DevisForfait;

        return $this;
    }

    public function getIdBrouillard(): ?int
    {
        return $this->IdBrouillard;
    }

    public function setIdBrouillard(?int $IdBrouillard): static
    {
        $this->IdBrouillard = $IdBrouillard;

        return $this;
    }

    public function getGroupe(): ?string
    {
        return $this->Groupe;
    }

    public function setGroupe(?string $Groupe): static
    {
        $this->Groupe = $Groupe;

        return $this;
    }

    public function getUserAppart(): ?string
    {
        return $this->UserAppart;
    }

    public function setUserAppart(?string $UserAppart): static
    {
        $this->UserAppart = $UserAppart;

        return $this;
    }

    public function getInfUniforme(): ?string
    {
        return $this->infUniforme;
    }

    public function setInfUniforme(?string $infUniforme): static
    {
        $this->infUniforme = $infUniforme;

        return $this;
    }

    public function getClientChois(): ?string
    {
        return $this->ClientChois;
    }

    public function setClientChois(?string $ClientChois): static
    {
        $this->ClientChois = $ClientChois;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->Adress;
    }

    public function setAdress(?string $Adress): static
    {
        $this->Adress = $Adress;

        return $this;
    }

    public function getAdress2(): ?string
    {
        return $this->Adress2;
    }

    public function setAdress2(?string $Adress2): static
    {
        $this->Adress2 = $Adress2;

        return $this;
    }

    public function getContact(): ?string
    {
        return $this->Contact;
    }

    public function setContact(?string $Contact): static
    {
        $this->Contact = $Contact;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): static
    {
        $this->version = $version;

        return $this;
    }

    public function getContact2(): ?string
    {
        return $this->Contact2;
    }

    public function setContact2(?string $Contact2): static
    {
        $this->Contact2 = $Contact2;

        return $this;
    }

    public function getGrilleTarifaire(): ?string
    {
        return $this->GrilleTarifaire;
    }

    public function setGrilleTarifaire(?string $GrilleTarifaire): static
    {
        $this->GrilleTarifaire = $GrilleTarifaire;

        return $this;
    }

    public function getRecherchClient(): ?int
    {
        return $this->RecherchClient;
    }

    public function setRecherchClient(?int $RecherchClient): static
    {
        $this->RecherchClient = $RecherchClient;

        return $this;
    }

    public function getObsLieu(): ?string
    {
        return $this->obsLieu;
    }

    public function setObsLieu(?string $obsLieu): static
    {
        $this->obsLieu = $obsLieu;

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

    /**
     * @return Collection<int, Devisuser>
     */
    public function getDevisusers(): Collection
    {
        return $this->devisusers;
    }

    public function addDevisuser(Devisuser $devisuser): static
    {
        if (!$this->devisusers->contains($devisuser)) {
            $this->devisusers->add($devisuser);
            $devisuser->setDevis($this);
        }

        return $this;
    }

    public function removeDevisuser(Devisuser $devisuser): static
    {
        if ($this->devisusers->removeElement($devisuser)) {
            // set the owning side to null (unless already changed)
            if ($devisuser->getDevis() === $this) {
                $devisuser->setDevis(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Frais>
     */
    public function getFrais(): Collection
    {
        return $this->frais;
    }

    public function addFrai(Frais $frai): static
    {
        if (!$this->frais->contains($frai)) {
            $this->frais->add($frai);
            $frai->setIdDevis($this);
        }

        return $this;
    }

    public function removeFrai(Frais $frai): static
    {
        if ($this->frais->removeElement($frai)) {
            // set the owning side to null (unless already changed)
            if ($frai->getIdDevis() === $this) {
                $frai->setIdDevis(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Prestationdevis>
     */
    public function getPrestationdevis(): Collection
    {
        return $this->prestationdevis;
    }

    public function addPrestationdevi(Prestationdevis $prestationdevi): static
    {
        if (!$this->prestationdevis->contains($prestationdevi)) {
            $this->prestationdevis->add($prestationdevi);
            $prestationdevi->setIdDevis($this);
        }

        return $this;
    }

    public function removePrestationdevi(Prestationdevis $prestationdevi): static
    {
        if ($this->prestationdevis->removeElement($prestationdevi)) {
            // set the owning side to null (unless already changed)
            if ($prestationdevi->getIdDevis() === $this) {
                $prestationdevi->setIdDevis(null);
            }
        }

        return $this;
    }

    public function getRechercheClient(): ?client
    {
        return $this->RechercheClient;
    }

    public function setRechercheClient(?client $RechercheClient): static
    {
        $this->RechercheClient = $RechercheClient;

        return $this;
    }
}
