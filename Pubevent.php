<?php

namespace App\Entity;

use App\Repository\PubeventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PubeventRepository::class)]
class Pubevent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'pubevents')]
    private ?Groupeuser $groupe = null;

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

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $infoAppelle = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $debutPub = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $finPub = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $descriptionPub = null;

    #[ORM\Column(nullable: true)]
    private ?bool $demiTrav = null;

    #[ORM\Column(nullable: true)]
    private ?bool $jourTrav = null;

    #[ORM\Column(nullable: true)]
    private ?bool $soirtrav = null;

    #[ORM\Column(nullable: true)]
    private ?bool $publier = null;

    #[ORM\Column(nullable: true)]
    private ?bool $notifications = null;

    /**
     * @var Collection<int, Imagepubevent>
     */
    #[ORM\OneToMany(targetEntity: Imagepubevent::class, mappedBy: 'idPubEvent')]
    private Collection $imagepubevents;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Imagepubevent $imgPubEvent = null;

    /**
     * @var Collection<int, Connexionpanierpub>
     */
    #[ORM\OneToMany(targetEntity: Connexionpanierpub::class, mappedBy: 'IdPubEvent')]
    private Collection $connexionpanierpubs;

    /**
     * @var Collection<int, Panierpub>
     */
    #[ORM\OneToMany(targetEntity: Panierpub::class, mappedBy: 'idPub')]
    private Collection $panierpubs;

    /**
     * @var Collection<int, Profilepubevent>
     */
    #[ORM\OneToMany(targetEntity: Profilepubevent::class, mappedBy: 'idPubEvent')]
    private Collection $profilepubevents;

    /**
     * @var Collection<int, Retourpubevent>
     */
    #[ORM\OneToMany(targetEntity: Retourpubevent::class, mappedBy: 'idPubEvent')]
    private Collection $retourpubevents;

    public function __construct()
    {
        $this->imagepubevents = new ArrayCollection();
        $this->connexionpanierpubs = new ArrayCollection();
        $this->panierpubs = new ArrayCollection();
        $this->profilepubevents = new ArrayCollection();
        $this->retourpubevents = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getInfoAppelle(): ?string
    {
        return $this->infoAppelle;
    }

    public function setInfoAppelle(?string $infoAppelle): static
    {
        $this->infoAppelle = $infoAppelle;

        return $this;
    }

    public function getDebutPub(): ?\DateTimeInterface
    {
        return $this->debutPub;
    }

    public function setDebutPub(?\DateTimeInterface $debutPub): static
    {
        $this->debutPub = $debutPub;

        return $this;
    }

    public function getFinPub(): ?\DateTimeInterface
    {
        return $this->finPub;
    }

    public function setFinPub(?\DateTimeInterface $finPub): static
    {
        $this->finPub = $finPub;

        return $this;
    }

    public function getDescriptionPub(): ?string
    {
        return $this->descriptionPub;
    }

    public function setDescriptionPub(?string $descriptionPub): static
    {
        $this->descriptionPub = $descriptionPub;

        return $this;
    }

    public function isDemiTrav(): ?bool
    {
        return $this->demiTrav;
    }

    public function setDemiTrav(?bool $demiTrav): static
    {
        $this->demiTrav = $demiTrav;

        return $this;
    }

    public function isJourTrav(): ?bool
    {
        return $this->jourTrav;
    }

    public function setJourTrav(?bool $jourTrav): static
    {
        $this->jourTrav = $jourTrav;

        return $this;
    }

    public function isSoirtrav(): ?bool
    {
        return $this->soirtrav;
    }

    public function setSoirtrav(bool $soirtrav): static
    {
        $this->soirtrav = $soirtrav;

        return $this;
    }

    public function isPublier(): ?bool
    {
        return $this->publier;
    }

    public function setPublier(bool $publier): static
    {
        $this->publier = $publier;

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

    /**
     * @return Collection<int, Imagepubevent>
     */
    public function getImagepubevents(): Collection
    {
        return $this->imagepubevents;
    }

    public function addImagepubevent(Imagepubevent $imagepubevent): static
    {
        if (!$this->imagepubevents->contains($imagepubevent)) {
            $this->imagepubevents->add($imagepubevent);
            $imagepubevent->setIdPubEvent($this);
        }

        return $this;
    }

    public function removeImagepubevent(Imagepubevent $imagepubevent): static
    {
        if ($this->imagepubevents->removeElement($imagepubevent)) {
            // set the owning side to null (unless already changed)
            if ($imagepubevent->getIdPubEvent() === $this) {
                $imagepubevent->setIdPubEvent(null);
            }
        }

        return $this;
    }

    public function getImgPubEvent(): ?Imagepubevent
    {
        return $this->imgPubEvent;
    }

    public function setImgPubEvent(?Imagepubevent $imgPubEvent): static
    {
        $this->imgPubEvent = $imgPubEvent;

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
            $connexionpanierpub->setIdPubEvent($this);
        }

        return $this;
    }

    public function removeConnexionpanierpub(Connexionpanierpub $connexionpanierpub): static
    {
        if ($this->connexionpanierpubs->removeElement($connexionpanierpub)) {
            // set the owning side to null (unless already changed)
            if ($connexionpanierpub->getIdPubEvent() === $this) {
                $connexionpanierpub->setIdPubEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Panierpub>
     */
    public function getPanierpubs(): Collection
    {
        return $this->panierpubs;
    }

    public function addPanierpub(Panierpub $panierpub): static
    {
        if (!$this->panierpubs->contains($panierpub)) {
            $this->panierpubs->add($panierpub);
            $panierpub->setIdPub($this);
        }

        return $this;
    }

    public function removePanierpub(Panierpub $panierpub): static
    {
        if ($this->panierpubs->removeElement($panierpub)) {
            // set the owning side to null (unless already changed)
            if ($panierpub->getIdPub() === $this) {
                $panierpub->setIdPub(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Profilepubevent>
     */
    public function getProfilepubevents(): Collection
    {
        return $this->profilepubevents;
    }

    public function addProfilepubevent(Profilepubevent $profilepubevent): static
    {
        if (!$this->profilepubevents->contains($profilepubevent)) {
            $this->profilepubevents->add($profilepubevent);
            $profilepubevent->setIdPubEvent($this);
        }

        return $this;
    }

    public function removeProfilepubevent(Profilepubevent $profilepubevent): static
    {
        if ($this->profilepubevents->removeElement($profilepubevent)) {
            // set the owning side to null (unless already changed)
            if ($profilepubevent->getIdPubEvent() === $this) {
                $profilepubevent->setIdPubEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Retourpubevent>
     */
    public function getRetourpubevents(): Collection
    {
        return $this->retourpubevents;
    }

    public function addRetourpubevent(Retourpubevent $retourpubevent): static
    {
        if (!$this->retourpubevents->contains($retourpubevent)) {
            $this->retourpubevents->add($retourpubevent);
            $retourpubevent->setIdPubEvent($this);
        }

        return $this;
    }

    public function removeRetourpubevent(Retourpubevent $retourpubevent): static
    {
        if ($this->retourpubevents->removeElement($retourpubevent)) {
            // set the owning side to null (unless already changed)
            if ($retourpubevent->getIdPubEvent() === $this) {
                $retourpubevent->setIdPubEvent(null);
            }
        }

        return $this;
    }
}
