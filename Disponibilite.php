<?php

namespace App\Entity;

use App\Repository\DisponibiliteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DisponibiliteRepository::class)]
class Disponibilite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'DimancheAM', nullable: true)]
    private ?bool $DimancheAM = null;

    #[ORM\Column(name:'DimanchePM', nullable: true)]
    private ?bool $DimanchePM = null;

    #[ORM\Column(name:'DimancheSoir', nullable: true)]
    private ?bool $DimancheSoir = null;

    #[ORM\Column(name:'SamediAM', nullable: true)]
    private ?bool $SamediAM = null;

    #[ORM\Column(name:'SamediPM',nullable: true)]
    private ?bool $SamediPM = null;

    #[ORM\Column(name:'SamediSoir', nullable: true)]
    private ?bool $SamediSoir = null;

    #[ORM\Column(name:'VendrediAM',nullable: true)]
    private ?bool $VendrediAM = null;

    #[ORM\Column(name:'VendrediPM',nullable: true)]
    private ?bool $VendrediPM = null;

    #[ORM\Column(name:'VendrediSoir',nullable: true)]
    private ?bool $VendrediSoir = null;

    #[ORM\Column(name:'JeudiAM',nullable: true)]
    private ?bool $JeudiAM = null;

    #[ORM\Column(name:'JeudiPM',nullable: true)]
    private ?bool $JeudiPM = null;

    #[ORM\Column(name:'JeudiSoir', nullable: true)]
    private ?bool $JeudiSoir = null;

    #[ORM\Column(name:'MercrediAM',nullable: true)]
    private ?bool $MercrediAM = null;

    #[ORM\Column(name:'MercrediPM',nullable: true)]
    private ?bool $MercrediPM = null;

    #[ORM\Column(name:'MercrediSoir' ,nullable: true)]
    private ?bool $MercrediSoir = null;

    #[ORM\Column(name:'MardiAM',nullable: true)]
    private ?bool $MardiAM = null;

    #[ORM\Column(name:'MardiPM', nullable: true)]
    private ?bool $MardiPM = null;

    #[ORM\Column(name:'MardiSoir',nullable: true)]
    private ?bool $MardiSoir = null;

    #[ORM\Column(name:'LundiAM', nullable: true)]
    private ?bool $LundiAM = null;

    #[ORM\Column(name:'LundiPM', nullable: true)]
    private ?bool $LundiPM = null;

    #[ORM\Column(name:'LundiSoir', nullable: true)]
    private ?bool $LundiSoir = null;

    #[ORM\Column(name:'dateDebut',type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(name:'dateFin',type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateFin = null;

    /**
     * @var Collection<int, Salarie>
     */
    #[ORM\OneToMany(targetEntity: Salarie::class, mappedBy: 'IdDisponibilite')]
    private Collection $salaries;

    public function __construct()
    {
        $this->salaries = new ArrayCollection();
    }

   
    


    public function getId(): ?int
    {
        return $this->id;
    }

    public function isDimancheAM(): ?bool
    {
        return $this->DimancheAM;
    }

    public function setDimancheAM(?bool $DimancheAM): static
    {
        $this->DimancheAM = $DimancheAM;

        return $this;
    }

    public function isDimanchePM(): ?bool
    {
        return $this->DimanchePM;
    }

    public function setDimanchePM(?bool $DimanchePM): static
    {
        $this->DimanchePM = $DimanchePM;

        return $this;
    }

    public function isDimancheSoir(): ?bool
    {
        return $this->DimancheSoir;
    }

    public function setDimancheSoir(?bool $DimancheSoir): static
    {
        $this->DimancheSoir = $DimancheSoir;

        return $this;
    }

    public function isSamediAM(): ?bool
    {
        return $this->SamediAM;
    }

    public function setSamediAM(?bool $SamediAM): static
    {
        $this->SamediAM = $SamediAM;

        return $this;
    }

    public function isSamediPM(): ?bool
    {
        return $this->SamediPM;
    }

    public function setSamediPM(?bool $SamediPM): static
    {
        $this->SamediPM = $SamediPM;

        return $this;
    }

    public function isSamediSoir(): ?bool
    {
        return $this->SamediSoir;
    }

    public function setSamediSoir(?bool $SamediSoir): static
    {
        $this->SamediSoir = $SamediSoir;

        return $this;
    }

    public function isVendrediAM(): ?bool
    {
        return $this->VendrediAM;
    }

    public function setVendrediAM(?bool $VendrediAM): static
    {
        $this->VendrediAM = $VendrediAM;

        return $this;
    }

    public function isVendrediPM(): ?bool
    {
        return $this->VendrediPM;
    }

    public function setVendrediPM(?bool $VendrediPM): static
    {
        $this->VendrediPM = $VendrediPM;

        return $this;
    }

    public function isVendrediSoir(): ?bool
    {
        return $this->VendrediSoir;
    }

    public function setVendrediSoir(?bool $VendrediSoir): static
    {
        $this->VendrediSoir = $VendrediSoir;

        return $this;
    }

    public function isJeudiAM(): ?bool
    {
        return $this->JeudiAM;
    }

    public function setJeudiAM(?bool $JeudiAM): static
    {
        $this->JeudiAM = $JeudiAM;

        return $this;
    }

    public function isJeudiPM(): ?bool
    {
        return $this->JeudiPM;
    }

    public function setJeudiPM(?bool $JeudiPM): static
    {
        $this->JeudiPM = $JeudiPM;

        return $this;
    }

    public function isJeudiSoir(): ?bool
    {
        return $this->JeudiSoir;
    }

    public function setJeudiSoir(?bool $JeudiSoir): static
    {
        $this->JeudiSoir = $JeudiSoir;

        return $this;
    }

    public function isMercrediAM(): ?bool
    {
        return $this->MercrediAM;
    }

    public function setMercrediAM(?bool $MercrediAM): static
    {
        $this->MercrediAM = $MercrediAM;

        return $this;
    }

    public function isMercrediPM(): ?bool
    {
        return $this->MercrediPM;
    }

    public function setMercrediPM(?bool $MercrediPM): static
    {
        $this->MercrediPM = $MercrediPM;

        return $this;
    }

    public function isMercrediSoir(): ?bool
    {
        return $this->MercrediSoir;
    }

    public function setMercrediSoir(?bool $MercrediSoir): static
    {
        $this->MercrediSoir = $MercrediSoir;

        return $this;
    }

    public function isMardiAM(): ?bool
    {
        return $this->MardiAM;
    }

    public function setMardiAM(?bool $MardiAM): static
    {
        $this->MardiAM = $MardiAM;

        return $this;
    }

    public function isMardiPM(): ?bool
    {
        return $this->MardiPM;
    }

    public function setMardiPM(?bool $MardiPM): static
    {
        $this->MardiPM = $MardiPM;

        return $this;
    }

    public function isMardiSoir(): ?bool
    {
        return $this->MardiSoir;
    }

    public function setMardiSoir(?bool $MardiSoir): static
    {
        $this->MardiSoir = $MardiSoir;

        return $this;
    }

    public function isLundiAM(): ?bool
    {
        return $this->LundiAM;
    }

    public function setLundiAM(?bool $LundiAM): static
    {
        $this->LundiAM = $LundiAM;

        return $this;
    }

    public function isLundiPM(): ?bool
    {
        return $this->LundiPM;
    }

    public function setLundiPM(?bool $LundiPM): static
    {
        $this->LundiPM = $LundiPM;

        return $this;
    }

    public function isLundiSoir(): ?bool
    {
        return $this->LundiSoir;
    }

    public function setLundiSoir(?bool $LundiSoir): static
    {
        $this->LundiSoir = $LundiSoir;

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

    /**
     * @return Collection<int, Salarie>
     */
    public function getSalaries(): Collection
    {
        return $this->salaries;
    }

    public function addSalary(Salarie $salary): static
    {
        if (!$this->salaries->contains($salary)) {
            $this->salaries->add($salary);
            $salary->setIdDisponibilite($this);
        }

        return $this;
    }

    public function removeSalary(Salarie $salary): static
    {
        if ($this->salaries->removeElement($salary)) {
            // set the owning side to null (unless already changed)
            if ($salary->getIdDisponibilite() === $this) {
                $salary->setIdDisponibilite(null);
            }
        }

        return $this;
    }

    
    

   
}
