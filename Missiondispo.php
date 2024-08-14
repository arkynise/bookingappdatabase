<?php

namespace App\Entity;

use App\Repository\MissiondispoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MissiondispoRepository::class)]
class Missiondispo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'missiondispos')]
    #[ORM\JoinColumn(name:"groupe", referencedColumnName:"id")]
    private ?Groupeuser $groupe = null;

    #[ORM\Column(name:'dateCreation',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(name:'IdUserWrite',nullable: true)]
    private ?int $IdUserWrite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $titre = null;

    #[ORM\Column(name:'infoDate',length: 255, nullable: true)]
    private ?string $infoDate = null;

    #[ORM\Column(name:'infoEvent',length: 255, nullable: true)]
    private ?string $infoEvent = null;

    #[ORM\Column(name:'debutPub',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $debutPub = null;

    #[ORM\Column(name:'finPub',type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $finPub = null;

    #[ORM\Column(name:'fontBlanc',nullable: true)]
    private ?bool $fontBlanc = null;

    #[ORM\OneToOne]
    #[ORM\JoinColumn(name:"imgDsp_id", referencedColumnName:"id")]
    private ?Imagemsdispo $imgDsp = null;

    #[ORM\Column(nullable: true)]
    private ?bool $publier = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $statut = null;

    #[ORM\Column(name:'titrePop',length: 255, nullable: true)]
    private ?string $titrePop = null;

    #[ORM\Column(name:'msgPop',length: 255, nullable: true)]
    private ?string $msgPop = null;

    /**
     * @var Collection<int, Connexionmslgevent>
     */
    #[ORM\OneToMany(targetEntity: Connexionmslgevent::class, mappedBy: 'IdMslg')]
    private Collection $connexionmslgevents;

    /**
     * @var Collection<int, Jourmsdispo>
     */
    #[ORM\OneToMany(targetEntity: Jourmsdispo::class, mappedBy: 'idMsDispo')]
    private Collection $jourmsdispos;

    /**
     * @var Collection<int, Retourmsdispo>
     */
    #[ORM\OneToMany(targetEntity: Retourmsdispo::class, mappedBy: 'idMsDispo')]
    private Collection $retourmsdispos;

    /**
     * @var Collection<int, Paniermsdispo>
     */
    #[ORM\OneToMany(targetEntity: Paniermsdispo::class, mappedBy: 'idMsDispo')]
    private Collection $paniermsdispos;

    public function __construct()
    {
        $this->connexionmslgevents = new ArrayCollection();
        $this->jourmsdispos = new ArrayCollection();
        $this->retourmsdispos = new ArrayCollection();
        $this->paniermsdispos = new ArrayCollection();
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
        return $this->IdUserWrite;
    }

    public function setIdUserWrite(?int $IdUserWrite): static
    {
        $this->IdUserWrite = $IdUserWrite;

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

    public function getInfoEvent(): ?string
    {
        return $this->infoEvent;
    }

    public function setInfoEvent(?string $infoEvent): static
    {
        $this->infoEvent = $infoEvent;

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

    public function isFontBlanc(): ?bool
    {
        return $this->fontBlanc;
    }

    public function setFontBlanc(?bool $fontBlanc): static
    {
        $this->fontBlanc = $fontBlanc;

        return $this;
    }

    public function getImgDsp(): ?Imagemsdispo
    {
        return $this->imgDsp;
    }

    public function setImgDsp(?Imagemsdispo $imgDsp): static
    {
        $this->imgDsp = $imgDsp;

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

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): static
    {
        $this->statut = $statut;

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
            $connexionmslgevent->setIdMslg($this);
        }

        return $this;
    }

    public function removeConnexionmslgevent(Connexionmslgevent $connexionmslgevent): static
    {
        if ($this->connexionmslgevents->removeElement($connexionmslgevent)) {
            // set the owning side to null (unless already changed)
            if ($connexionmslgevent->getIdMslg() === $this) {
                $connexionmslgevent->setIdMslg(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Jourmsdispo>
     */
    public function getJourmsdispos(): Collection
    {
        return $this->jourmsdispos;
    }

    public function addJourmsdispo(Jourmsdispo $jourmsdispo): static
    {
        if (!$this->jourmsdispos->contains($jourmsdispo)) {
            $this->jourmsdispos->add($jourmsdispo);
            $jourmsdispo->setIdMsDispo($this);
        }

        return $this;
    }

    public function removeJourmsdispo(Jourmsdispo $jourmsdispo): static
    {
        if ($this->jourmsdispos->removeElement($jourmsdispo)) {
            // set the owning side to null (unless already changed)
            if ($jourmsdispo->getIdMsDispo() === $this) {
                $jourmsdispo->setIdMsDispo(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Retourmsdispo>
     */
    public function getRetourmsdispos(): Collection
    {
        return $this->retourmsdispos;
    }

    public function addRetourmsdispo(Retourmsdispo $retourmsdispo): static
    {
        if (!$this->retourmsdispos->contains($retourmsdispo)) {
            $this->retourmsdispos->add($retourmsdispo);
            $retourmsdispo->setIdMsDispo($this);
        }

        return $this;
    }

    public function removeRetourmsdispo(Retourmsdispo $retourmsdispo): static
    {
        if ($this->retourmsdispos->removeElement($retourmsdispo)) {
            // set the owning side to null (unless already changed)
            if ($retourmsdispo->getIdMsDispo() === $this) {
                $retourmsdispo->setIdMsDispo(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Paniermsdispo>
     */
    public function getPaniermsdispos(): Collection
    {
        return $this->paniermsdispos;
    }

    public function addPaniermsdispo(Paniermsdispo $paniermsdispo): static
    {
        if (!$this->paniermsdispos->contains($paniermsdispo)) {
            $this->paniermsdispos->add($paniermsdispo);
            $paniermsdispo->setIdMsDispo($this);
        }

        return $this;
    }

    public function removePaniermsdispo(Paniermsdispo $paniermsdispo): static
    {
        if ($this->paniermsdispos->removeElement($paniermsdispo)) {
            // set the owning side to null (unless already changed)
            if ($paniermsdispo->getIdMsDispo() === $this) {
                $paniermsdispo->setIdMsDispo(null);
            }
        }

        return $this;
    }
}
