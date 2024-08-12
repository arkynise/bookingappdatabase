<?php

namespace App\Entity;

use App\Repository\BrouillardRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BrouillardRepository::class)]
class Brouillard
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'IdDevis',nullable: true)]
    private ?int $IdDevis = null;

    #[ORM\Column(name:'NDevis',length: 255, nullable: true)]
    private ?string $NDevis = null;

    #[ORM\Column(name:'NFact',length: 255, nullable: true)]
    private ?string $NFact = null;

    #[ORM\Column(name:'Client',length: 255, nullable: true)]
    private ?string $Client = null;

    #[ORM\Column(name:'ClientFact',length: 255, nullable: true)]
    private ?string $ClientFact = null;

    #[ORM\Column(name:'ContactFact',length: 255, nullable: true)]
    private ?string $ContactFact = null;

    #[ORM\Column(name:'GsmFact',length: 255, nullable: true)]
    private ?string $GsmFact = null;

    #[ORM\Column(name:'TelFact',length: 255, nullable: true)]
    private ?string $TelFact = null;

    #[ORM\Column(name:'MailFact',length: 255, nullable: true)]
    private ?string $MailFact = null;

    #[ORM\Column(name:'ContactCom',length: 255, nullable: true)]
    private ?string $ContactCom = null;

    #[ORM\Column(name:'GsmCom',length: 255, nullable: true)]
    private ?string $GsmCom = null;

    #[ORM\Column(name:'TelCom',length: 255, nullable: true)]
    private ?string $TelCom = null;

    #[ORM\Column(name:'MailCom',length: 255, nullable: true)]
    private ?string $MailCom = null;

    #[ORM\Column(name:'ContactOrdre',length: 255, nullable: true)]
    private ?string $ContactOrdre = null;

    #[ORM\Column(name:'GsmOrdre',length: 255, nullable: true)]
    private ?string $GsmOrdre = null;

    #[ORM\Column(name:'TelOrdre',length: 255, nullable: true)]
    private ?string $TelOrdre = null;

    #[ORM\Column(name:'MailOrdre',length: 255, nullable: true)]
    private ?string $MailOrdre = null;

    #[ORM\Column(name:'AdrCom',length: 255, nullable: true)]
    private ?string $AdrCom = null;

    #[ORM\Column(name:'AdrFact',length: 255, nullable: true)]
    private ?string $AdrFact = null;

    #[ORM\Column(name:'Operation',length: 255, nullable: true)]
    private ?string $Operation = null;

    #[ORM\Column(name:'Marque',length: 255, nullable: true)]
    private ?string $Marque = null;

    #[ORM\Column(name:'Obs',length: 255, nullable: true)]
    private ?string $Obs = null;

    #[ORM\Column(name:'NFactAcompte',length: 255, nullable: true)]
    private ?string $NFactAcompte = null;

    #[ORM\Column(name:'grilleDevis',length: 255, nullable: true)]
    private ?string $grilleDevis = null;

    #[ORM\Column(name:'grilleSurnomDevis',length: 255, nullable: true)]
    private ?string $grilleSurnomDevis = null;

    #[ORM\Column(name:'grilleFact',length: 255, nullable: true)]
    private ?string $grilleFact = null;

    #[ORM\Column(name:'grilleSurnomFact',length: 255, nullable: true)]
    private ?string $grilleSurnomFact = null;

    #[ORM\Column(name:'IdUserWrite',length: 255, nullable: true)]
    private ?string $IdUserWrite = null;

    #[ORM\Column(name:'IdUserModification',nullable: true)]
    private ?int $IdUserModification = null;

    #[ORM\Column(name:'IdClientFact',nullable: true)]
    private ?int $IdClientFact = null;

    #[ORM\Column(name:'IdContactFact',nullable: true)]
    private ?int $IdContactFact = null;

    #[ORM\Column(name:'IdAdresseFact',nullable: true)]
    private ?int $IdAdresseFact = null;

    #[ORM\Column(name:'NbHsj',nullable: true)]
    private ?int $NbHsj = null;

    #[ORM\Column(name:'NbHsn',nullable: true)]
    private ?int $NbHsn = null;

    #[ORM\Column(name:'ConditionPaie',nullable: true)]
    private ?int $ConditionPaie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $statut = null;

    #[ORM\Column(name:'UserWrite',length: 255, nullable: true)]
    private ?string $UserWrite = null;

    #[ORM\Column(name:'DateModification',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateModification = null;

    #[ORM\Column(name:'dateCreation',type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(name:'DateDebut',type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateDebut = null;

    #[ORM\Column(name:'DateFin',type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateFin = null;

    #[ORM\Column(name:'MontantGlobal',type: Types::DECIMAL, precision: 2, scale: 2, nullable: true)]
    private ?string $MontantGlobal = null;

    #[ORM\Column(name:'PrestaETSup',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $PrestaETSup = null;

    #[ORM\Column(name:'HeureVendu',length: 255, nullable: true)]
    private ?string $HeureVendu = null;

    #[ORM\Column(name:'TotalStaffPlus',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $TotalStaffPlus = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $hsj = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $hsn = null;

    #[ORM\Column(name:'HSupFact',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $HSupFact = null;

    #[ORM\Column(name:'TotalTaxi',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $TotalTaxi = null;

    #[ORM\Column(name:'TotalFraisKm',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $TotalFraisKm = null;

    #[ORM\Column(name:'TotalFraisDivers',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $TotalFraisDivers = null;

    #[ORM\Column(name:'TotalFrais',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $TotalFrais = null;

    #[ORM\Column(name:'TotalPrimes',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $TotalPrimes = null;

    #[ORM\Column(name:'TotalFraisDevis',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $TotalFraisDevis = null;

    #[ORM\Column(name:'TotalPrestSup',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $TotalPrestSup = null;

    #[ORM\Column(name:'TotalPrestDevis',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $TotalPrestDevis = null;

    #[ORM\Column(name:'TotalDevis',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $TotalDevis = null;

    #[ORM\Column(name:'CoefDevis',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $CoefDevis = null;

    #[ORM\Column(name:'CoefFact',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $CoefFact = null;

    #[ORM\Column(name:'MasseSalDevis',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $MasseSalDevis = null;

    #[ORM\Column(name:'MasseSalFact',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $MasseSalFact = null;

    #[ORM\Column(name:'BoostDevis',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $BoostDevis = null;

    #[ORM\Column(name:'RemiseDevis',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $RemiseDevis = null;

    #[ORM\Column(name:'RemiseFact',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $RemiseFact = null;

    #[ORM\Column(name:'RemiseA',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $RemiseA = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $RemiseP = null;

    #[ORM\Column(name:'ObsRemise',length: 255, nullable: true)]
    private ?string $ObsRemise = null;

    #[ORM\Column(name:'Groupe',length: 255, nullable: true)]
    private ?string $Groupe = null;

    #[ORM\Column(name:'MontantAcompte',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $MontantAcompte = null;

    #[ORM\Column(name:'MontantAcompteRecue',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $MontantAcompteRecue = null;


    #[ORM\Column(name:'moisBr',type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $moisBr = null;

    #[ORM\ManyToOne(inversedBy: 'brouillards')]
    #[ORM\JoinColumn(name:"idEvent", referencedColumnName:"id")]
    private ?event $idEvent = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdDevis(): ?int
    {
        return $this->IdDevis;
    }

    public function setIdDevis(?int $IdDevis): static
    {
        $this->IdDevis = $IdDevis;

        return $this;
    }

    public function getNDevis(): ?string
    {
        return $this->NDevis;
    }

    public function setNDevis(?string $NDevis): static
    {
        $this->NDevis = $NDevis;

        return $this;
    }

    public function getNFact(): ?string
    {
        return $this->NFact;
    }

    public function setNFact(?string $NFact): static
    {
        $this->NFact = $NFact;

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

    public function getClientFact(): ?string
    {
        return $this->ClientFact;
    }

    public function setClientFact(?string $ClientFact): static
    {
        $this->ClientFact = $ClientFact;

        return $this;
    }

    public function getContactFact(): ?string
    {
        return $this->ContactFact;
    }

    public function setContactFact(?string $ContactFact): static
    {
        $this->ContactFact = $ContactFact;

        return $this;
    }

    public function getGsmFact(): ?string
    {
        return $this->GsmFact;
    }

    public function setGsmFact(?string $GsmFact): static
    {
        $this->GsmFact = $GsmFact;

        return $this;
    }

    public function getTelFact(): ?string
    {
        return $this->TelFact;
    }

    public function setTelFact(?string $TelFact): static
    {
        $this->TelFact = $TelFact;

        return $this;
    }

    public function getMailFact(): ?string
    {
        return $this->MailFact;
    }

    public function setMailFact(?string $MailFact): static
    {
        $this->MailFact = $MailFact;

        return $this;
    }

    public function getContactCom(): ?string
    {
        return $this->ContactCom;
    }

    public function setContactCom(?string $ContactCom): static
    {
        $this->ContactCom = $ContactCom;

        return $this;
    }

    public function getGsmCom(): ?string
    {
        return $this->GsmCom;
    }

    public function setGsmCom(?string $GsmCom): static
    {
        $this->GsmCom = $GsmCom;

        return $this;
    }

    public function getTelCom(): ?string
    {
        return $this->TelCom;
    }

    public function setTelCom(?string $TelCom): static
    {
        $this->TelCom = $TelCom;

        return $this;
    }

    public function getMailCom(): ?string
    {
        return $this->MailCom;
    }

    public function setMailCom(?string $MailCom): static
    {
        $this->MailCom = $MailCom;

        return $this;
    }

    public function getContactOrdre(): ?string
    {
        return $this->ContactOrdre;
    }

    public function setContactOrdre(?string $ContactOrdre): static
    {
        $this->ContactOrdre = $ContactOrdre;

        return $this;
    }

    public function getGsmOrdre(): ?string
    {
        return $this->GsmOrdre;
    }

    public function setGsmOrdre(?string $GsmOrdre): static
    {
        $this->GsmOrdre = $GsmOrdre;

        return $this;
    }

    public function getTelOrdre(): ?string
    {
        return $this->TelOrdre;
    }

    public function setTelOrdre(?string $TelOrdre): static
    {
        $this->TelOrdre = $TelOrdre;

        return $this;
    }

    public function getMailOrdre(): ?string
    {
        return $this->MailOrdre;
    }

    public function setMailOrdre(?string $MailOrdre): static
    {
        $this->MailOrdre = $MailOrdre;

        return $this;
    }

    public function getAdrCom(): ?string
    {
        return $this->AdrCom;
    }

    public function setAdrCom(?string $AdrCom): static
    {
        $this->AdrCom = $AdrCom;

        return $this;
    }

    public function getAdrFact(): ?string
    {
        return $this->AdrFact;
    }

    public function setAdrFact(?string $AdrFact): static
    {
        $this->AdrFact = $AdrFact;

        return $this;
    }

    public function getOperation(): ?string
    {
        return $this->Operation;
    }

    public function setOperation(?string $Operation): static
    {
        $this->Operation = $Operation;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->Marque;
    }

    public function setMarque(?string $Marque): static
    {
        $this->Marque = $Marque;

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

    public function getNFactAcompte(): ?string
    {
        return $this->NFactAcompte;
    }

    public function setNFactAcompte(?string $NFactAcompte): static
    {
        $this->NFactAcompte = $NFactAcompte;

        return $this;
    }

    public function getGrilleDevis(): ?string
    {
        return $this->grilleDevis;
    }

    public function setGrilleDevis(?string $grilleDevis): static
    {
        $this->grilleDevis = $grilleDevis;

        return $this;
    }

    public function getGrilleSurnomDevis(): ?string
    {
        return $this->grilleSurnomDevis;
    }

    public function setGrilleSurnomDevis(?string $grilleSurnomDevis): static
    {
        $this->grilleSurnomDevis = $grilleSurnomDevis;

        return $this;
    }

    public function getGrilleFact(): ?string
    {
        return $this->grilleFact;
    }

    public function setGrilleFact(?string $grilleFact): static
    {
        $this->grilleFact = $grilleFact;

        return $this;
    }

    public function getGrilleSurnomFact(): ?string
    {
        return $this->grilleSurnomFact;
    }

    public function setGrilleSurnomFact(?string $grilleSurnomFact): static
    {
        $this->grilleSurnomFact = $grilleSurnomFact;

        return $this;
    }

    public function getIdUserWrite(): ?string
    {
        return $this->IdUserWrite;
    }

    public function setIdUserWrite(?string $IdUserWrite): static
    {
        $this->IdUserWrite = $IdUserWrite;

        return $this;
    }

    public function getIdUserModification(): ?int
    {
        return $this->IdUserModification;
    }

    public function setIdUserModification(?int $IdUserModification): static
    {
        $this->IdUserModification = $IdUserModification;

        return $this;
    }

    public function getIdClientFact(): ?int
    {
        return $this->IdClientFact;
    }

    public function setIdClientFact(?int $IdClientFact): static
    {
        $this->IdClientFact = $IdClientFact;

        return $this;
    }

    public function getIdContactFact(): ?int
    {
        return $this->IdContactFact;
    }

    public function setIdContactFact(?int $IdContactFact): static
    {
        $this->IdContactFact = $IdContactFact;

        return $this;
    }

    public function getIdAdresseFact(): ?int
    {
        return $this->IdAdresseFact;
    }

    public function setIdAdresseFact(?int $IdAdresseFact): static
    {
        $this->IdAdresseFact = $IdAdresseFact;

        return $this;
    }

    public function getNbHsj(): ?int
    {
        return $this->NbHsj;
    }

    public function setNbHsj(?int $NbHsj): static
    {
        $this->NbHsj = $NbHsj;

        return $this;
    }

    public function getNbHsn(): ?int
    {
        return $this->NbHsn;
    }

    public function setNbHsn(?int $NbHsn): static
    {
        $this->NbHsn = $NbHsn;

        return $this;
    }

    public function getConditionPaie(): ?int
    {
        return $this->ConditionPaie;
    }

    public function setConditionPaie(?int $ConditionPaie): static
    {
        $this->ConditionPaie = $ConditionPaie;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): static
    {
        $this->statut = $statut;

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

    public function getDateModification(): ?\DateTimeInterface
    {
        return $this->DateModification;
    }

    public function setDateModification(?\DateTimeInterface $DateModification): static
    {
        $this->DateModification = $DateModification;

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

    public function getMontantGlobal(): ?string
    {
        return $this->MontantGlobal;
    }

    public function setMontantGlobal(?string $MontantGlobal): static
    {
        $this->MontantGlobal = $MontantGlobal;

        return $this;
    }

    public function getPrestaETSup(): ?string
    {
        return $this->PrestaETSup;
    }

    public function setPrestaETSup(?string $PrestaETSup): static
    {
        $this->PrestaETSup = $PrestaETSup;

        return $this;
    }

    public function getHeureVendu(): ?string
    {
        return $this->HeureVendu;
    }

    public function setHeureVendu(?string $HeureVendu): static
    {
        $this->HeureVendu = $HeureVendu;

        return $this;
    }

    public function getTotalStaffPlus(): ?string
    {
        return $this->TotalStaffPlus;
    }

    public function setTotalStaffPlus(?string $TotalStaffPlus): static
    {
        $this->TotalStaffPlus = $TotalStaffPlus;

        return $this;
    }

    public function getHsj(): ?string
    {
        return $this->hsj;
    }

    public function setHsj(?string $hsj): static
    {
        $this->hsj = $hsj;

        return $this;
    }

    public function getHsn(): ?string
    {
        return $this->hsn;
    }

    public function setHsn(?string $hsn): static
    {
        $this->hsn = $hsn;

        return $this;
    }

    public function getHSupFact(): ?string
    {
        return $this->HSupFact;
    }

    public function setHSupFact(?string $HSupFact): static
    {
        $this->HSupFact = $HSupFact;

        return $this;
    }

    public function getTotalTaxi(): ?string
    {
        return $this->TotalTaxi;
    }

    public function setTotalTaxi(?string $TotalTaxi): static
    {
        $this->TotalTaxi = $TotalTaxi;

        return $this;
    }

    public function getTotalFraisKm(): ?string
    {
        return $this->TotalFraisKm;
    }

    public function setTotalFraisKm(?string $TotalFraisKm): static
    {
        $this->TotalFraisKm = $TotalFraisKm;

        return $this;
    }

    public function getTotalFraisDivers(): ?string
    {
        return $this->TotalFraisDivers;
    }

    public function setTotalFraisDivers(?string $TotalFraisDivers): static
    {
        $this->TotalFraisDivers = $TotalFraisDivers;

        return $this;
    }

    public function getTotalFrais(): ?string
    {
        return $this->TotalFrais;
    }

    public function setTotalFrais(?string $TotalFrais): static
    {
        $this->TotalFrais = $TotalFrais;

        return $this;
    }

    public function getTotalPrimes(): ?string
    {
        return $this->TotalPrimes;
    }

    public function setTotalPrimes(?string $TotalPrimes): static
    {
        $this->TotalPrimes = $TotalPrimes;

        return $this;
    }

    public function getTotalFraisDevis(): ?string
    {
        return $this->TotalFraisDevis;
    }

    public function setTotalFraisDevis(?string $TotalFraisDevis): static
    {
        $this->TotalFraisDevis = $TotalFraisDevis;

        return $this;
    }

    public function getTotalPrestSup(): ?string
    {
        return $this->TotalPrestSup;
    }

    public function setTotalPrestSup(?string $TotalPrestSup): static
    {
        $this->TotalPrestSup = $TotalPrestSup;

        return $this;
    }

    public function getTotalPrestDevis(): ?string
    {
        return $this->TotalPrestDevis;
    }

    public function setTotalPrestDevis(?string $TotalPrestDevis): static
    {
        $this->TotalPrestDevis = $TotalPrestDevis;

        return $this;
    }

    public function getTotalDevis(): ?string
    {
        return $this->TotalDevis;
    }

    public function setTotalDevis(?string $TotalDevis): static
    {
        $this->TotalDevis = $TotalDevis;

        return $this;
    }

    public function getCoefDevis(): ?string
    {
        return $this->CoefDevis;
    }

    public function setCoefDevis(?string $CoefDevis): static
    {
        $this->CoefDevis = $CoefDevis;

        return $this;
    }

    public function getCoefFact(): ?string
    {
        return $this->CoefFact;
    }

    public function setCoefFact(?string $CoefFact): static
    {
        $this->CoefFact = $CoefFact;

        return $this;
    }

    public function getMasseSalDevis(): ?string
    {
        return $this->MasseSalDevis;
    }

    public function setMasseSalDevis(?string $MasseSalDevis): static
    {
        $this->MasseSalDevis = $MasseSalDevis;

        return $this;
    }

    public function getMasseSalFact(): ?string
    {
        return $this->MasseSalFact;
    }

    public function setMasseSalFact(?string $MasseSalFact): static
    {
        $this->MasseSalFact = $MasseSalFact;

        return $this;
    }

    public function getBoostDevis(): ?string
    {
        return $this->BoostDevis;
    }

    public function setBoostDevis(?string $BoostDevis): static
    {
        $this->BoostDevis = $BoostDevis;

        return $this;
    }

    public function getRemiseDevis(): ?string
    {
        return $this->RemiseDevis;
    }

    public function setRemiseDevis(?string $RemiseDevis): static
    {
        $this->RemiseDevis = $RemiseDevis;

        return $this;
    }

    public function getRemiseFact(): ?string
    {
        return $this->RemiseFact;
    }

    public function setRemiseFact(?string $RemiseFact): static
    {
        $this->RemiseFact = $RemiseFact;

        return $this;
    }

    public function getRemiseA(): ?string
    {
        return $this->RemiseA;
    }

    public function setRemiseA(?string $RemiseA): static
    {
        $this->RemiseA = $RemiseA;

        return $this;
    }

    public function getRemiseP(): ?string
    {
        return $this->RemiseP;
    }

    public function setRemiseP(?string $RemiseP): static
    {
        $this->RemiseP = $RemiseP;

        return $this;
    }

    public function getObsRemise(): ?string
    {
        return $this->ObsRemise;
    }

    public function setObsRemise(?string $ObsRemise): static
    {
        $this->ObsRemise = $ObsRemise;

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

    public function getMontantAcompte(): ?string
    {
        return $this->MontantAcompte;
    }

    public function setMontantAcompte(?string $MontantAcompte): static
    {
        $this->MontantAcompte = $MontantAcompte;

        return $this;
    }

    public function getMontantAcompteRecue(): ?string
    {
        return $this->MontantAcompteRecue;
    }

    public function setMontantAcompteRecue(?string $MontantAcompteRecue): static
    {
        $this->MontantAcompteRecue = $MontantAcompteRecue;

        return $this;
    }

    public function getIdEvent(): ?\DateTimeInterface
    {
        return $this->idEvent;
    }

    public function setIdEvent(?\DateTimeInterface $idEvent): static
    {
        $this->idEvent = $idEvent;

        return $this;
    }

    public function getMoisBr(): ?\DateTimeInterface
    {
        return $this->moisBr;
    }

    public function setMoisBr(?\DateTimeInterface $moisBr): static
    {
        $this->moisBr = $moisBr;

        return $this;
    }
}
