<?php

namespace App\Entity;

use App\Repository\PubentrepriseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PubentrepriseRepository::class)]
class Pubentreprise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'pubentreprises')]
    #[ORM\JoinColumn(name:"groupe", referencedColumnName:"id")]
    private ?groupeuser $groupe = null;

    #[ORM\Column(name:'dateCreation',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(name:'idUserWrite',nullable: true)]
    private ?int $idUserWrite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $titre = null;

    #[ORM\Column(name:'infoDate',length: 255, nullable: true)]
    private ?string $infoDate = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lieu = null;

    #[ORM\Column(nullable: true)]
    private ?bool $homme = null;

    #[ORM\Column(nullable: true)]
    private ?bool $femme = null;

    #[ORM\Column(name:'infoAppelle',length: 255, nullable: true)]
    private ?string $infoAppelle = null;

    #[ORM\Column(name:'debutPub',type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $debutPub = null;

    #[ORM\Column(name:'finPub',type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $finPub = null;

    #[ORM\Column(name:'descriptionPub',type: Types::TEXT, nullable: true)]
    private ?string $descriptionPub = null;

    #[ORM\Column(name:'qualification',type: Types::TEXT, nullable: true)]
    private ?string $qualification = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $client = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mission = null;

    #[ORM\Column(name:'heureFin',type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $heureFin = null;

    #[ORM\Column(name:'heureDbt',type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $heureDbt = null;

    #[ORM\Column(name:'infoHeure',length: 255, nullable: true)]
    private ?string $infoHeure = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prix = null;

    #[ORM\Column(name:'infoPrix',length: 255, nullable: true)]
    private ?string $infoPrix = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $langue = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prime = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $avantage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $autre = null;

    #[ORM\Column(nullable: true)]
    private ?bool $publier = null;

    #[ORM\Column(nullable: true)]
    private ?bool $notifications = null;

    /**
     * @var Collection<int, Imagepubentreprise>
     */
    #[ORM\OneToMany(targetEntity: Imagepubentreprise::class, mappedBy: 'idPubEntreprise')]
    private Collection $imagepubentreprises;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(name:"imgPubEntreprise_id", referencedColumnName:"id")]
    private ?imagepubentreprise $imgPubEntreprise = null;

    /**
     * @var Collection<int, Panierpubentreprise>
     */
    #[ORM\OneToMany(targetEntity: Panierpubentreprise::class, mappedBy: 'idPub')]
    private Collection $panierpubentreprises;

    /**
     * @var Collection<int, Retourpubentreprise>
     */
    #[ORM\OneToMany(targetEntity: Retourpubentreprise::class, mappedBy: 'idPubEntreprise')]
    private Collection $retourpubentreprises;

    #[ORM\Column(name:'idUserContact',nullable: true)]
    private ?int $idUserContact = null;

    public function __construct()
    {
        $this->imagepubentreprises = new ArrayCollection();
        $this->panierpubentreprises = new ArrayCollection();
        $this->retourpubentreprises = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGroupe(): ?groupeuser
    {
        return $this->groupe;
    }

    public function setGroupe(?groupeuser $groupe): static
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

    public function getQualification(): ?string
    {
        return $this->qualification;
    }

    public function setQualification(?string $qualification): static
    {
        $this->qualification = $qualification;

        return $this;
    }

    public function getClient(): ?string
    {
        return $this->client;
    }

    public function setClient(?string $client): static
    {
        $this->client = $client;

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

    public function getLangue(): ?string
    {
        return $this->langue;
    }

    public function setLangue(?string $langue): static
    {
        $this->langue = $langue;

        return $this;
    }

    public function getPrime(): ?string
    {
        return $this->prime;
    }

    public function setPrime(?string $prime): static
    {
        $this->prime = $prime;

        return $this;
    }

    public function getAvantage(): ?string
    {
        return $this->avantage;
    }

    public function setAvantage(?string $avantage): static
    {
        $this->avantage = $avantage;

        return $this;
    }

    public function getAutre(): ?string
    {
        return $this->autre;
    }

    public function setAutre(?string $autre): static
    {
        $this->autre = $autre;

        return $this;
    }

    public function isPublier(): ?bool
    {
        return $this->publier;
    }

    public function setPublier(?bool $publier): static
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
     * @return Collection<int, Imagepubentreprise>
     */
    public function getImagepubentreprises(): Collection
    {
        return $this->imagepubentreprises;
    }

    public function addImagepubentreprise(Imagepubentreprise $imagepubentreprise): static
    {
        if (!$this->imagepubentreprises->contains($imagepubentreprise)) {
            $this->imagepubentreprises->add($imagepubentreprise);
            $imagepubentreprise->setIdPubEntreprise($this);
        }

        return $this;
    }

    public function removeImagepubentreprise(Imagepubentreprise $imagepubentreprise): static
    {
        if ($this->imagepubentreprises->removeElement($imagepubentreprise)) {
            // set the owning side to null (unless already changed)
            if ($imagepubentreprise->getIdPubEntreprise() === $this) {
                $imagepubentreprise->setIdPubEntreprise(null);
            }
        }

        return $this;
    }

    public function getImgPubEntreprise(): ?imagepubentreprise
    {
        return $this->imgPubEntreprise;
    }

    public function setImgPubEntreprise(?imagepubentreprise $imgPubEntreprise): static
    {
        $this->imgPubEntreprise = $imgPubEntreprise;

        return $this;
    }

    /**
     * @return Collection<int, Panierpubentreprise>
     */
    public function getPanierpubentreprises(): Collection
    {
        return $this->panierpubentreprises;
    }

    public function addPanierpubentreprise(Panierpubentreprise $panierpubentreprise): static
    {
        if (!$this->panierpubentreprises->contains($panierpubentreprise)) {
            $this->panierpubentreprises->add($panierpubentreprise);
            $panierpubentreprise->setIdPub($this);
        }

        return $this;
    }

    public function removePanierpubentreprise(Panierpubentreprise $panierpubentreprise): static
    {
        if ($this->panierpubentreprises->removeElement($panierpubentreprise)) {
            // set the owning side to null (unless already changed)
            if ($panierpubentreprise->getIdPub() === $this) {
                $panierpubentreprise->setIdPub(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Retourpubentreprise>
     */
    public function getRetourpubentreprises(): Collection
    {
        return $this->retourpubentreprises;
    }

    public function addRetourpubentreprise(Retourpubentreprise $retourpubentreprise): static
    {
        if (!$this->retourpubentreprises->contains($retourpubentreprise)) {
            $this->retourpubentreprises->add($retourpubentreprise);
            $retourpubentreprise->setIdPubEntreprise($this);
        }

        return $this;
    }

    public function removeRetourpubentreprise(Retourpubentreprise $retourpubentreprise): static
    {
        if ($this->retourpubentreprises->removeElement($retourpubentreprise)) {
            // set the owning side to null (unless already changed)
            if ($retourpubentreprise->getIdPubEntreprise() === $this) {
                $retourpubentreprise->setIdPubEntreprise(null);
            }
        }

        return $this;
    }

    public function getIdUserContact(): ?int
    {
        return $this->idUserContact;
    }

    public function setIdUserContact(?int $idUserContact): static
    {
        $this->idUserContact = $idUserContact;

        return $this;
    }
}
