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

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $DimancheAM = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $DimanchePM = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $DimancheSoir = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $SamediAM = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $SamediPM = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $SamediSoir = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $VendrediAM = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $VendrediPM = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $VendrediSoir = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $JeudiAM = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $JeudiPM = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $JeudiSoir = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $MercrediAM = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $MercrediPM = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $MercrediSoir = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $MardiAM = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $MardiPM = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $MardiSoir = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $LundiAM = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $LundiPM = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $LundiSoir = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
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

    public function getDimancheAM(): ?int
    {
        return $this->DimancheAM;
    }

    public function setDimancheAM(?int $DimancheAM): static
    {
        $this->DimancheAM = $DimancheAM;

        return $this;
    }

    public function getDimanchePM(): ?int
    {
        return $this->DimanchePM;
    }

    public function setDimanchePM(?int $DimanchePM): static
    {
        $this->DimanchePM = $DimanchePM;

        return $this;
    }

    public function getDimancheSoir(): ?int
    {
        return $this->DimancheSoir;
    }

    public function setDimancheSoir(?int $DimancheSoir): static
    {
        $this->DimancheSoir = $DimancheSoir;

        return $this;
    }

    public function getSamediAM(): ?int
    {
        return $this->SamediAM;
    }

    public function setSamediAM(?int $SamediAM): static
    {
        $this->SamediAM = $SamediAM;

        return $this;
    }

    public function getSamediPM(): ?int
    {
        return $this->SamediPM;
    }

    public function setSamediPM(?int $SamediPM): static
    {
        $this->SamediPM = $SamediPM;

        return $this;
    }

    public function getSamediSoir(): ?int
    {
        return $this->SamediSoir;
    }

    public function setSamediSoir(?int $SamediSoir): static
    {
        $this->SamediSoir = $SamediSoir;

        return $this;
    }

    public function getVendrediAM(): ?int
    {
        return $this->VendrediAM;
    }

    public function setVendrediAM(?int $VendrediAM): static
    {
        $this->VendrediAM = $VendrediAM;

        return $this;
    }

    public function getVendrediPM(): ?int
    {
        return $this->VendrediPM;
    }

    public function setVendrediPM(?int $VendrediPM): static
    {
        $this->VendrediPM = $VendrediPM;

        return $this;
    }

    public function getVendrediSoir(): ?int
    {
        return $this->VendrediSoir;
    }

    public function setVendrediSoir(?int $VendrediSoir): static
    {
        $this->VendrediSoir = $VendrediSoir;

        return $this;
    }

    public function getJeudiAM(): ?int
    {
        return $this->JeudiAM;
    }

    public function setJeudiAM(?int $JeudiAM): static
    {
        $this->JeudiAM = $JeudiAM;

        return $this;
    }

    public function getJeudiPM(): ?int
    {
        return $this->JeudiPM;
    }

    public function setJeudiPM(?int $JeudiPM): static
    {
        $this->JeudiPM = $JeudiPM;

        return $this;
    }

    public function getJeudiSoir(): ?int
    {
        return $this->JeudiSoir;
    }

    public function setJeudiSoir(?int $JeudiSoir): static
    {
        $this->JeudiSoir = $JeudiSoir;

        return $this;
    }

    public function getMercrediAM(): ?int
    {
        return $this->MercrediAM;
    }

    public function setMercrediAM(?int $MercrediAM): static
    {
        $this->MercrediAM = $MercrediAM;

        return $this;
    }

    public function getMercrediPM(): ?int
    {
        return $this->MercrediPM;
    }

    public function setMercrediPM(?int $MercrediPM): static
    {
        $this->MercrediPM = $MercrediPM;

        return $this;
    }

    public function getMercrediSoir(): ?int
    {
        return $this->MercrediSoir;
    }

    public function setMercrediSoir(?int $MercrediSoir): static
    {
        $this->MercrediSoir = $MercrediSoir;

        return $this;
    }

    public function getMardiAM(): ?int
    {
        return $this->MardiAM;
    }

    public function setMardiAM(?int $MardiAM): static
    {
        $this->MardiAM = $MardiAM;

        return $this;
    }

    public function getMardiPM(): ?int
    {
        return $this->MardiPM;
    }

    public function setMardiPM(?int $MardiPM): static
    {
        $this->MardiPM = $MardiPM;

        return $this;
    }

    public function getMardiSoir(): ?int
    {
        return $this->MardiSoir;
    }

    public function setMardiSoir(?int $MardiSoir): static
    {
        $this->MardiSoir = $MardiSoir;

        return $this;
    }

    public function getLundiAM(): ?int
    {
        return $this->LundiAM;
    }

    public function setLundiAM(?int $LundiAM): static
    {
        $this->LundiAM = $LundiAM;

        return $this;
    }

    public function getLundiPM(): ?int
    {
        return $this->LundiPM;
    }

    public function setLundiPM(?int $LundiPM): static
    {
        $this->LundiPM = $LundiPM;

        return $this;
    }

    public function getLundiSoir(): ?int
    {
        return $this->LundiSoir;
    }

    public function setLundiSoir(?int $LundiSoir): static
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
