<?php

namespace App\Entity;

use App\Repository\PanierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PanierRepository::class)]
class Panier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'dateCreation',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\ManyToOne(inversedBy: 'paniers')]
    #[ORM\JoinColumn(name:"IdEvent_id", referencedColumnName:"id")]
    private ?Event $IdEvent = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(name:"idMsg_id", referencedColumnName:"id")]
    private ?Message $idMsg = null;

    #[ORM\Column(name:'Libelle',length: 255, nullable: true)]
    private ?string $Libelle = null;

    #[ORM\Column(name:'dltDoublon',nullable: true)]
    private ?bool $dltDoublon = null;

    #[ORM\Column(name:'cloture',nullable: true)]
    private ?bool $cloture = null;

    #[ORM\Column(name:'titrePop',length: 255, nullable: true)]
    private ?string $titrePop = null;

    #[ORM\Column(name:'msgPop',length: 255, nullable: true)]
    private ?string $msgPop = null;

    /**
     * @var Collection<int, Connexionpanierpub>
     */
    #[ORM\OneToMany(targetEntity: Connexionpanierpub::class, mappedBy: 'IdPanier')]
    private Collection $connexionpanierpubs;

    /**
     * @var Collection<int, Paniersalarie>
     */
    #[ORM\OneToMany(targetEntity: Paniersalarie::class, mappedBy: 'idPanier')]
    private Collection $paniersalaries;

    /**
     * @var Collection<int, Urgenceevent>
     */
    #[ORM\OneToMany(targetEntity: Urgenceevent::class, mappedBy: 'idPanier')]
    private Collection $urgenceevents;

    /**
     * @var Collection<int, Diffusionsalprest>
     */
    #[ORM\OneToMany(targetEntity: Diffusionsalprest::class, mappedBy: 'idPanier')]
    private Collection $diffusionsalprests;

    public function __construct()
    {
        $this->connexionpanierpubs = new ArrayCollection();
        $this->paniersalaries = new ArrayCollection();
        $this->urgenceevents = new ArrayCollection();
        $this->diffusionsalprests = new ArrayCollection();
    }

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

    public function getIdEvent(): ?Event
    {
        return $this->IdEvent;
    }

    public function setIdEvent(?Event $IdEvent): static
    {
        $this->IdEvent = $IdEvent;

        return $this;
    }

    public function getIdMsg(): ?Message
    {
        return $this->idMsg;
    }

    public function setIdMsg(?Message $idMsg): static
    {
        $this->idMsg = $idMsg;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->Libelle;
    }

    public function setLibelle(?string $Libelle): static
    {
        $this->Libelle = $Libelle;

        return $this;
    }

    public function isDltDoublon(): ?bool
    {
        return $this->dltDoublon;
    }

    public function setDltDoublon(?bool $dltDoublon): static
    {
        $this->dltDoublon = $dltDoublon;

        return $this;
    }

    public function isCloture(): ?bool
    {
        return $this->cloture;
    }

    public function setCloture(?bool $cloture): static
    {
        $this->cloture = $cloture;

        return $this;
    }

    public function getTitrePop(): ?string
    {
        return $this->titrePop;
    }

    public function setTitrePop(?string $titrePop): static
    {
        $this->titrePop = $titrePop;

        return $this;
    }

    public function getMsgPop(): ?string
    {
        return $this->msgPop;
    }

    public function setMsgPop(?string $msgPop): static
    {
        $this->msgPop = $msgPop;

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
            $connexionpanierpub->setIdPanier($this);
        }

        return $this;
    }

    public function removeConnexionpanierpub(Connexionpanierpub $connexionpanierpub): static
    {
        if ($this->connexionpanierpubs->removeElement($connexionpanierpub)) {
            // set the owning side to null (unless already changed)
            if ($connexionpanierpub->getIdPanier() === $this) {
                $connexionpanierpub->setIdPanier(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Paniersalarie>
     */
    public function getPaniersalaries(): Collection
    {
        return $this->paniersalaries;
    }

    public function addPaniersalary(Paniersalarie $paniersalary): static
    {
        if (!$this->paniersalaries->contains($paniersalary)) {
            $this->paniersalaries->add($paniersalary);
            $paniersalary->setIdPanier($this);
        }

        return $this;
    }

    public function removePaniersalary(Paniersalarie $paniersalary): static
    {
        if ($this->paniersalaries->removeElement($paniersalary)) {
            // set the owning side to null (unless already changed)
            if ($paniersalary->getIdPanier() === $this) {
                $paniersalary->setIdPanier(null);
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
            $urgenceevent->setIdPanier($this);
        }

        return $this;
    }

    public function removeUrgenceevent(Urgenceevent $urgenceevent): static
    {
        if ($this->urgenceevents->removeElement($urgenceevent)) {
            // set the owning side to null (unless already changed)
            if ($urgenceevent->getIdPanier() === $this) {
                $urgenceevent->setIdPanier(null);
            }
        }

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
            $diffusionsalprest->setIdPanier($this);
        }

        return $this;
    }

    public function removeDiffusionsalprest(Diffusionsalprest $diffusionsalprest): static
    {
        if ($this->diffusionsalprests->removeElement($diffusionsalprest)) {
            // set the owning side to null (unless already changed)
            if ($diffusionsalprest->getIdPanier() === $this) {
                $diffusionsalprest->setIdPanier(null);
            }
        }

        return $this;
    }
}
