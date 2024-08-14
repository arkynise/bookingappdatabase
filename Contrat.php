<?php

namespace App\Entity;

use App\Repository\ContratRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContratRepository::class)]
class Contrat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'datePublication',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datePublication = null;

    #[ORM\Column(name:'dateSigntaure',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateSigntaure = null;

    #[ORM\Column(name:'TotalHTrav',length: 255, nullable: true)]
    private ?string $TotalHTrav = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $path = null;

    #[ORM\ManyToOne(inversedBy: 'contrats')]
    #[ORM\JoinColumn(name:"idSal_id", referencedColumnName:"id")]
    private ?Salarie $idSal = null;

    #[ORM\ManyToOne(inversedBy: 'contrats')]
    #[ORM\JoinColumn(name:"idEvent_id", referencedColumnName:"id")]
    private ?Event $idEvent = null;

    #[ORM\Column(nullable: true)]
    private ?bool $signer = null;

    #[ORM\Column(name:'nbDate',nullable: true)]
    private ?int $nbDate = null;

    #[ORM\Column(name:'nbRepas',nullable: true)]
    private ?int $nbRepas = null;

    #[ORM\Column(name:'prixRepas',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $prixRepas = null;

    #[ORM\Column(name:'totalBrut',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $totalBrut = null;

    #[ORM\Column(name:'totalRepas',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $totalRepas = null;

    #[ORM\Column(name:'tauxHoraire',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $tauxHoraire = null;

    #[ORM\Column(nullable: true)]
    private ?bool $notifications = null;

    #[ORM\Column( nullable: true)]
    private ?bool $expirer = null;

    /**
     * @var Collection<int, Contrateffect>
     */
    #[ORM\OneToMany(targetEntity: Contrataffect::class, mappedBy: 'idContrat')]
    private Collection $contrateffects;

    public function __construct()
    {
        $this->contrateffects = new ArrayCollection();
    }



    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->datePublication;
    }

    public function setDatePublication(?\DateTimeInterface $datePublication): static
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    public function getDateSigntaure(): ?\DateTimeInterface
    {
        return $this->dateSigntaure;
    }

    public function setDateSigntaure(?\DateTimeInterface $dateSigntaure): static
    {
        $this->dateSigntaure = $dateSigntaure;

        return $this;
    }

    public function getTotalHTrav(): ?string
    {
        return $this->TotalHTrav;
    }

    public function setTotalHTrav(?string $TotalHTrav): static
    {
        $this->TotalHTrav = $TotalHTrav;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): static
    {
        $this->path = $path;

        return $this;
    }

    public function getIdSal(): ?Salarie
    {
        return $this->idSal;
    }

    public function setIdSal(?Salarie $idSal): static
    {
        $this->idSal = $idSal;

        return $this;
    }

    public function getIdEvent(): ?Event
    {
        return $this->idEvent;
    }

    public function setIdEvent(?Event $idEvent): static
    {
        $this->idEvent = $idEvent;

        return $this;
    }

    public function isSigner(): ?bool
    {
        return $this->signer;
    }

    public function setSigner(?bool $signer): static
    {
        $this->signer = $signer;

        return $this;
    }

    public function getNbDate(): ?int
    {
        return $this->nbDate;
    }

    public function setNbDate(?int $nbDate): static
    {
        $this->nbDate = $nbDate;

        return $this;
    }

    public function getNbRepas(): ?int
    {
        return $this->nbRepas;
    }

    public function setNbRepas(?int $nbRepas): static
    {
        $this->nbRepas = $nbRepas;

        return $this;
    }

    public function getPrixRepas(): ?string
    {
        return $this->prixRepas;
    }

    public function setPrixRepas(?string $prixRepas): static
    {
        $this->prixRepas = $prixRepas;

        return $this;
    }

    public function getTotalBrut(): ?string
    {
        return $this->totalBrut;
    }

    public function setTotalBrut(?string $totalBrut): static
    {
        $this->totalBrut = $totalBrut;

        return $this;
    }

    public function getTotalRepas(): ?string
    {
        return $this->totalRepas;
    }

    public function setTotalRepas(?string $totalRepas): static
    {
        $this->totalRepas = $totalRepas;

        return $this;
    }

    public function getTauxHoraire(): ?string
    {
        return $this->tauxHoraire;
    }

    public function setTauxHoraire(?string $tauxHoraire): static
    {
        $this->tauxHoraire = $tauxHoraire;

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

    public function isExpirer(): ?bool
    {
        return $this->expirer;
    }

    public function setExpirer(?bool $expirer): static
    {
        $this->expirer = $expirer;

        return $this;
    }

    /**
     * @return Collection<int, Contrateffect>
     */
    public function getContrateffects(): Collection
    {
        return $this->contrateffects;
    }

    public function addContrateffect(Contrataffect $contrateffect): static
    {
        if (!$this->contrateffects->contains($contrateffect)) {
            $this->contrateffects->add($contrateffect);
            $contrateffect->setIdContrat($this);
        }

        return $this;
    }

    public function removeContrateffect(Contrataffect $contrateffect): static
    {
        if ($this->contrateffects->removeElement($contrateffect)) {
            // set the owning side to null (unless already changed)
            if ($contrateffect->getIdContrat() === $this) {
                $contrateffect->setIdContrat(null);
            }
        }

        return $this;
    }

    
 

   
}
