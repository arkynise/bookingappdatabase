<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventRepository::class)]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Client = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $titre = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $marque = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateFin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lieu = null;

    

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(nullable: true)]
    private ?int $staff = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NumDevis = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Commercial = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ContactPlace = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $telCtcPlace = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ChefEquipe = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $MsgAnnulation = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $AnnulerEvent = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $notifications = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $MsgSms = null;

    #[ORM\Column(nullable: true)]
    private ?int $compteurUrssaf = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $latitude = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $longitude = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $obsLieu = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $tenue = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $orderEv = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fermerDate = null;

    #[ORM\ManyToOne(inversedBy: 'events')]
    private ?User $fermerUser = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $model = null;

    #[ORM\Column(nullable: true)]
    private ?int $IdUserWrite = null;

    #[ORM\Column(nullable: true)]
    private ?int $idDevis = null;

    #[ORM\Column(nullable: true)]
    private ?int $idClient = null;

    #[ORM\Column(nullable: true)]
    private ?int $GroupeWriter = null;

    #[ORM\Column(nullable: true)]
    private ?int $GroupeOrogine = null;

    #[ORM\ManyToOne(inversedBy: 'events')]
    private ?Fichierbooking $Brefing = null;

    /**
     * @var Collection<int, Message>
     */
    #[ORM\OneToMany(targetEntity: Message::class, mappedBy: 'idEvent')]
    private Collection $messages;

    #[ORM\ManyToOne(inversedBy: 'events')]
    private ?Groupeuser $groupe = null;

    #[ORM\ManyToOne(inversedBy: 'events')]
    private ?Froute $idFroute = null;

    /**
     * @var Collection<int, Eventuser>
     */
    #[ORM\OneToMany(targetEntity: Eventuser::class, mappedBy: 'idEvent')]
    private Collection $eventusers;

    /**
     * @var Collection<int, Observent>
     */
    #[ORM\OneToMany(targetEntity: Observent::class, mappedBy: 'IdEvent')]
    private Collection $observents;

    /**
     * @var Collection<int, Eventnote>
     */
    #[ORM\OneToMany(targetEntity: Eventnote::class, mappedBy: 'IdEvent')]
    private Collection $eventnotes;

    /**
     * @var Collection<int, Contrat>
     */
    #[ORM\OneToMany(targetEntity: Contrat::class, mappedBy: 'idEvent')]
    private Collection $contrats;

    /**
     * @var Collection<int, Diffusionsalprest>
     */
    #[ORM\OneToMany(targetEntity: Diffusionsalprest::class, mappedBy: 'IdEvent')]
    private Collection $idSalarie;

    /**
     * @var Collection<int, Diffusionsalprest>
     */
    #[ORM\OneToMany(targetEntity: Diffusionsalprest::class, mappedBy: 'IdEvent')]
    private Collection $diffusionsalprests;

    /**
     * @var Collection<int, Ursoperation>
     */
    #[ORM\OneToMany(targetEntity: Ursoperation::class, mappedBy: 'IdEvent')]
    private Collection $ursoperations;

    /**
     * @var Collection<int, Fraffectation>
     */
    #[ORM\OneToMany(targetEntity: Fraffectation::class, mappedBy: 'IdEvent')]
    private Collection $fraffectations;

    /**
     * @var Collection<int, Connexionmslgevent>
     */
    #[ORM\OneToMany(targetEntity: Connexionmslgevent::class, mappedBy: 'IdEvent')]
    private Collection $connexionmslgevents;

    /**
     * @var Collection<int, Panier>
     */
    #[ORM\OneToMany(targetEntity: Panier::class, mappedBy: 'IdEvent')]
    private Collection $paniers;

    /**
     * @var Collection<int, Connexionpanierpub>
     */
    #[ORM\OneToMany(targetEntity: Connexionpanierpub::class, mappedBy: 'IdEvent')]
    private Collection $connexionpanierpubs;

    /**
     * @var Collection<int, Prestation>
     */
    #[ORM\OneToMany(targetEntity: Prestation::class, mappedBy: 'idEvent')]
    private Collection $prestations;

    /**
     * @var Collection<int, Urgenceevent>
     */
    #[ORM\OneToMany(targetEntity: Urgenceevent::class, mappedBy: 'idEvent')]
    private Collection $urgenceevents;

    /**
     * @var Collection<int, Eventinfo>
     */
    #[ORM\OneToMany(targetEntity: Eventinfo::class, mappedBy: 'idEvent')]
    private Collection $eventinfos;

    /**
     * @var Collection<int, Htagevent>
     */
    #[ORM\OneToMany(targetEntity: Htagevent::class, mappedBy: 'idEvent')]
    private Collection $htagevents;

    /**
     * @var Collection<int, Documentevent>
     */
    #[ORM\OneToMany(targetEntity: Documentevent::class, mappedBy: 'idEvent')]
    private Collection $documentevents;

    /**
     * @var Collection<int, Brouillard>
     */
    #[ORM\OneToMany(targetEntity: Brouillard::class, mappedBy: 'idEvent')]
    private Collection $brouillards;

    public function __construct()
    {
        $this->messages = new ArrayCollection();
        $this->eventusers = new ArrayCollection();
        $this->observents = new ArrayCollection();
        $this->eventnotes = new ArrayCollection();
        $this->contrats = new ArrayCollection();
        $this->idSalarie = new ArrayCollection();
        $this->diffusionsalprests = new ArrayCollection();
        $this->ursoperations = new ArrayCollection();
        $this->fraffectations = new ArrayCollection();
        $this->connexionmslgevents = new ArrayCollection();
        $this->paniers = new ArrayCollection();
        $this->connexionpanierpubs = new ArrayCollection();
        $this->prestations = new ArrayCollection();
        $this->urgenceevents = new ArrayCollection();
        $this->eventinfos = new ArrayCollection();
        $this->htagevents = new ArrayCollection();
        $this->documentevents = new ArrayCollection();
        $this->brouillards = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): static
    {
        $this->titre = $titre;

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

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): static
    {
        $this->dateDebut = $dateDebut;

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

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): static
    {
        $this->lieu = $lieu;

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

    public function getStaff(): ?int
    {
        return $this->staff;
    }

    public function setStaff(?int $staff): static
    {
        $this->staff = $staff;

        return $this;
    }

    public function getNumDevis(): ?string
    {
        return $this->NumDevis;
    }

    public function setNumDevis(?string $NumDevis): static
    {
        $this->NumDevis = $NumDevis;

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

    public function getContactPlace(): ?string
    {
        return $this->ContactPlace;
    }

    public function setContactPlace(?string $ContactPlace): static
    {
        $this->ContactPlace = $ContactPlace;

        return $this;
    }

    public function getTelCtcPlace(): ?string
    {
        return $this->telCtcPlace;
    }

    public function setTelCtcPlace(?string $telCtcPlace): static
    {
        $this->telCtcPlace = $telCtcPlace;

        return $this;
    }

    public function getChefEquipe(): ?string
    {
        return $this->ChefEquipe;
    }

    public function setChefEquipe(?string $ChefEquipe): static
    {
        $this->ChefEquipe = $ChefEquipe;

        return $this;
    }

    public function getMsgAnnulation(): ?string
    {
        return $this->MsgAnnulation;
    }

    public function setMsgAnnulation(?string $MsgAnnulation): static
    {
        $this->MsgAnnulation = $MsgAnnulation;

        return $this;
    }

    public function getAnnulerEvent(): ?int
    {
        return $this->AnnulerEvent;
    }

    public function setAnnulerEvent(?int $AnnulerEvent): static
    {
        $this->AnnulerEvent = $AnnulerEvent;

        return $this;
    }

    public function getNotifications(): ?int
    {
        return $this->notifications;
    }

    public function setNotifications(?int $notifications): static
    {
        $this->notifications = $notifications;

        return $this;
    }

    public function getMsgSms(): ?string
    {
        return $this->MsgSms;
    }

    public function setMsgSms(?string $MsgSms): static
    {
        $this->MsgSms = $MsgSms;

        return $this;
    }

    public function getCompteurUrssaf(): ?int
    {
        return $this->compteurUrssaf;
    }

    public function setCompteurUrssaf(?int $compteurUrssaf): static
    {
        $this->compteurUrssaf = $compteurUrssaf;

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

    public function getObsLieu(): ?string
    {
        return $this->obsLieu;
    }

    public function setObsLieu(?string $obsLieu): static
    {
        $this->obsLieu = $obsLieu;

        return $this;
    }

    public function getTenue(): ?string
    {
        return $this->tenue;
    }

    public function setTenue(?string $tenue): static
    {
        $this->tenue = $tenue;

        return $this;
    }

    public function getOrderEv(): ?string
    {
        return $this->orderEv;
    }

    public function setOrderEv(?string $orderEv): static
    {
        $this->orderEv = $orderEv;

        return $this;
    }

    public function getFermerDate(): ?\DateTimeInterface
    {
        return $this->fermerDate;
    }

    public function setFermerDate(?\DateTimeInterface $fermerDate): static
    {
        $this->fermerDate = $fermerDate;

        return $this;
    }

    public function getFermerUser(): ?User
    {
        return $this->fermerUser;
    }

    public function setFermerUser(?User $fermerUser): static
    {
        $this->fermerUser = $fermerUser;

        return $this;
    }

    public function getModel(): ?int
    {
        return $this->model;
    }

    public function setModel(?int $model): static
    {
        $this->model = $model;

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

    public function getIdDevis(): ?int
    {
        return $this->idDevis;
    }

    public function setIdDevis(?int $idDevis): static
    {
        $this->idDevis = $idDevis;

        return $this;
    }

    public function getIdClient(): ?int
    {
        return $this->idClient;
    }

    public function setIdClient(?int $idClient): static
    {
        $this->idClient = $idClient;

        return $this;
    }

    public function getGroupeWriter(): ?int
    {
        return $this->GroupeWriter;
    }

    public function setGroupeWriter(?int $GroupeWriter): static
    {
        $this->GroupeWriter = $GroupeWriter;

        return $this;
    }

    public function getGroupeOrogine(): ?int
    {
        return $this->GroupeOrogine;
    }

    public function setGroupeOrogine(?int $GroupeOrogine): static
    {
        $this->GroupeOrogine = $GroupeOrogine;

        return $this;
    }

    public function getBrefing(): ?Fichierbooking
    {
        return $this->Brefing;
    }

    public function setBrefing(?Fichierbooking $Brefing): static
    {
        $this->Brefing = $Brefing;

        return $this;
    }

    /**
     * @return Collection<int, Message>
     */
    public function getMessages(): Collection
    {
        return $this->messages;
    }

    public function addMessage(Message $message): static
    {
        if (!$this->messages->contains($message)) {
            $this->messages->add($message);
            $message->setIdEvent($this);
        }

        return $this;
    }

    public function removeMessage(Message $message): static
    {
        if ($this->messages->removeElement($message)) {
            // set the owning side to null (unless already changed)
            if ($message->getIdEvent() === $this) {
                $message->setIdEvent(null);
            }
        }

        return $this;
    }

    public function getGroupe(): ?Groupeuser
    {
        return $this->groupe;
    }

    public function setGroupe(?Groupeuser $groupe): static
    {
        $this->groupe = $groupe;

        return $this;
    }

    public function getIdFroute(): ?Froute
    {
        return $this->idFroute;
    }

    public function setIdFroute(?Froute $idFroute): static
    {
        $this->idFroute = $idFroute;

        return $this;
    }

    /**
     * @return Collection<int, Eventuser>
     */
    public function getEventusers(): Collection
    {
        return $this->eventusers;
    }

    public function addEventuser(Eventuser $eventuser): static
    {
        if (!$this->eventusers->contains($eventuser)) {
            $this->eventusers->add($eventuser);
            $eventuser->setIdEvent($this);
        }

        return $this;
    }

    public function removeEventuser(Eventuser $eventuser): static
    {
        if ($this->eventusers->removeElement($eventuser)) {
            // set the owning side to null (unless already changed)
            if ($eventuser->getIdEvent() === $this) {
                $eventuser->setIdEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Observent>
     */
    public function getObservents(): Collection
    {
        return $this->observents;
    }

    public function addObservent(Observent $observent): static
    {
        if (!$this->observents->contains($observent)) {
            $this->observents->add($observent);
            $observent->setIdEvent($this);
        }

        return $this;
    }

    public function removeObservent(Observent $observent): static
    {
        if ($this->observents->removeElement($observent)) {
            // set the owning side to null (unless already changed)
            if ($observent->getIdEvent() === $this) {
                $observent->setIdEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Eventnote>
     */
    public function getEventnotes(): Collection
    {
        return $this->eventnotes;
    }

    public function addEventnote(Eventnote $eventnote): static
    {
        if (!$this->eventnotes->contains($eventnote)) {
            $this->eventnotes->add($eventnote);
            $eventnote->setIdEvent($this);
        }

        return $this;
    }

    public function removeEventnote(Eventnote $eventnote): static
    {
        if ($this->eventnotes->removeElement($eventnote)) {
            // set the owning side to null (unless already changed)
            if ($eventnote->getIdEvent() === $this) {
                $eventnote->setIdEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Contrat>
     */
    public function getContrats(): Collection
    {
        return $this->contrats;
    }

    public function addContrat(Contrat $contrat): static
    {
        if (!$this->contrats->contains($contrat)) {
            $this->contrats->add($contrat);
            $contrat->setIdEvent($this);
        }

        return $this;
    }

    public function removeContrat(Contrat $contrat): static
    {
        if ($this->contrats->removeElement($contrat)) {
            // set the owning side to null (unless already changed)
            if ($contrat->getIdEvent() === $this) {
                $contrat->setIdEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Diffusionsalprest>
     */
    public function getIdSalarie(): Collection
    {
        return $this->idSalarie;
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
            $diffusionsalprest->setIdEvent($this);
        }

        return $this;
    }

    public function removeDiffusionsalprest(Diffusionsalprest $diffusionsalprest): static
    {
        if ($this->diffusionsalprests->removeElement($diffusionsalprest)) {
            // set the owning side to null (unless already changed)
            if ($diffusionsalprest->getIdEvent() === $this) {
                $diffusionsalprest->setIdEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Ursoperation>
     */
    public function getUrsoperations(): Collection
    {
        return $this->ursoperations;
    }

    public function addUrsoperation(Ursoperation $ursoperation): static
    {
        if (!$this->ursoperations->contains($ursoperation)) {
            $this->ursoperations->add($ursoperation);
            $ursoperation->setIdEvent($this);
        }

        return $this;
    }

    public function removeUrsoperation(Ursoperation $ursoperation): static
    {
        if ($this->ursoperations->removeElement($ursoperation)) {
            // set the owning side to null (unless already changed)
            if ($ursoperation->getIdEvent() === $this) {
                $ursoperation->setIdEvent(null);
            }
        }

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
            $fraffectation->setIdEvent($this);
        }

        return $this;
    }

    public function removeFraffectation(Fraffectation $fraffectation): static
    {
        if ($this->fraffectations->removeElement($fraffectation)) {
            // set the owning side to null (unless already changed)
            if ($fraffectation->getIdEvent() === $this) {
                $fraffectation->setIdEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Connexionmslgevent>
     */
    public function getConnexionmslgevents(): Collection
    {
        return $this->connexionmslgevents;
    }

    public function addConnexionmslgevent(Connexionmslgevent $connexionmslgevent): static
    {
        if (!$this->connexionmslgevents->contains($connexionmslgevent)) {
            $this->connexionmslgevents->add($connexionmslgevent);
            $connexionmslgevent->setIdEvent($this);
        }

        return $this;
    }

    public function removeConnexionmslgevent(Connexionmslgevent $connexionmslgevent): static
    {
        if ($this->connexionmslgevents->removeElement($connexionmslgevent)) {
            // set the owning side to null (unless already changed)
            if ($connexionmslgevent->getIdEvent() === $this) {
                $connexionmslgevent->setIdEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Panier>
     */
    public function getPaniers(): Collection
    {
        return $this->paniers;
    }

    public function addPanier(Panier $panier): static
    {
        if (!$this->paniers->contains($panier)) {
            $this->paniers->add($panier);
            $panier->setIdEvent($this);
        }

        return $this;
    }

    public function removePanier(Panier $panier): static
    {
        if ($this->paniers->removeElement($panier)) {
            // set the owning side to null (unless already changed)
            if ($panier->getIdEvent() === $this) {
                $panier->setIdEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Connexionpanierpub>
     */
    public function getConnexionpanierpubs(): Collection
    {
        return $this->connexionpanierpubs;
    }

    public function addConnexionpanierpub(Connexionpanierpub $connexionpanierpub): static
    {
        if (!$this->connexionpanierpubs->contains($connexionpanierpub)) {
            $this->connexionpanierpubs->add($connexionpanierpub);
            $connexionpanierpub->setIdEvent($this);
        }

        return $this;
    }

    public function removeConnexionpanierpub(Connexionpanierpub $connexionpanierpub): static
    {
        if ($this->connexionpanierpubs->removeElement($connexionpanierpub)) {
            // set the owning side to null (unless already changed)
            if ($connexionpanierpub->getIdEvent() === $this) {
                $connexionpanierpub->setIdEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Prestation>
     */
    public function getPrestations(): Collection
    {
        return $this->prestations;
    }

    public function addPrestation(Prestation $prestation): static
    {
        if (!$this->prestations->contains($prestation)) {
            $this->prestations->add($prestation);
            $prestation->setIdEvent($this);
        }

        return $this;
    }

    public function removePrestation(Prestation $prestation): static
    {
        if ($this->prestations->removeElement($prestation)) {
            // set the owning side to null (unless already changed)
            if ($prestation->getIdEvent() === $this) {
                $prestation->setIdEvent(null);
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
            $urgenceevent->setIdEvent($this);
        }

        return $this;
    }

    public function removeUrgenceevent(Urgenceevent $urgenceevent): static
    {
        if ($this->urgenceevents->removeElement($urgenceevent)) {
            // set the owning side to null (unless already changed)
            if ($urgenceevent->getIdEvent() === $this) {
                $urgenceevent->setIdEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Eventinfo>
     */
    public function getEventinfos(): Collection
    {
        return $this->eventinfos;
    }

    public function addEventinfo(Eventinfo $eventinfo): static
    {
        if (!$this->eventinfos->contains($eventinfo)) {
            $this->eventinfos->add($eventinfo);
            $eventinfo->setIdEvent($this);
        }

        return $this;
    }

    public function removeEventinfo(Eventinfo $eventinfo): static
    {
        if ($this->eventinfos->removeElement($eventinfo)) {
            // set the owning side to null (unless already changed)
            if ($eventinfo->getIdEvent() === $this) {
                $eventinfo->setIdEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Htagevent>
     */
    public function getHtagevents(): Collection
    {
        return $this->htagevents;
    }

    public function addHtagevent(Htagevent $htagevent): static
    {
        if (!$this->htagevents->contains($htagevent)) {
            $this->htagevents->add($htagevent);
            $htagevent->setIdEvent($this);
        }

        return $this;
    }

    public function removeHtagevent(Htagevent $htagevent): static
    {
        if ($this->htagevents->removeElement($htagevent)) {
            // set the owning side to null (unless already changed)
            if ($htagevent->getIdEvent() === $this) {
                $htagevent->setIdEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Documentevent>
     */
    public function getDocumentevents(): Collection
    {
        return $this->documentevents;
    }

    public function addDocumentevent(Documentevent $documentevent): static
    {
        if (!$this->documentevents->contains($documentevent)) {
            $this->documentevents->add($documentevent);
            $documentevent->setIdEvent($this);
        }

        return $this;
    }

    public function removeDocumentevent(Documentevent $documentevent): static
    {
        if ($this->documentevents->removeElement($documentevent)) {
            // set the owning side to null (unless already changed)
            if ($documentevent->getIdEvent() === $this) {
                $documentevent->setIdEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Brouillard>
     */
    public function getBrouillards(): Collection
    {
        return $this->brouillards;
    }

    public function addBrouillard(Brouillard $brouillard): static
    {
        if (!$this->brouillards->contains($brouillard)) {
            $this->brouillards->add($brouillard);
            $brouillard->setIdEvent($this);
        }

        return $this;
    }

    public function removeBrouillard(Brouillard $brouillard): static
    {
        if ($this->brouillards->removeElement($brouillard)) {
            // set the owning side to null (unless already changed)
            if ($brouillard->getIdEvent() === $this) {
                $brouillard->setIdEvent(null);
            }
        }

        return $this;
    }

    

   
}
