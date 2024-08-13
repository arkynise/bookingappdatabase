<?php

namespace App\Entity;

use App\Repository\MissionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MissionRepository::class)]
class Mission
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'nomMission',length: 255)]
    private ?string $nomMission = null;

    /**
     * @var Collection<int, Prestation>
     */
    #[ORM\OneToMany(targetEntity: Prestation::class, mappedBy: 'missionPrestation')]
    private Collection $prestations;

    /**
     * @var Collection<int, Prestationdevis>
     */
    #[ORM\OneToMany(targetEntity: Prestationdevis::class, mappedBy: 'missionPrestation')]
    private Collection $prestationdevis;

    public function __construct()
    {
        $this->prestations = new ArrayCollection();
        $this->prestationdevis = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMission(): ?string
    {
        return $this->nomMission;
    }

    public function setNomMission(string $nomMission): static
    {
        $this->nomMission = $nomMission;

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
            $prestation->setMissionPrestation($this);
        }

        return $this;
    }

    public function removePrestation(Prestation $prestation): static
    {
        if ($this->prestations->removeElement($prestation)) {
            // set the owning side to null (unless already changed)
            if ($prestation->getMissionPrestation() === $this) {
                $prestation->setMissionPrestation(null);
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
            $prestationdevi->setMissionPrestation($this);
        }

        return $this;
    }

    public function removePrestationdevi(Prestationdevis $prestationdevi): static
    {
        if ($this->prestationdevis->removeElement($prestationdevi)) {
            // set the owning side to null (unless already changed)
            if ($prestationdevi->getMissionPrestation() === $this) {
                $prestationdevi->setMissionPrestation(null);
            }
        }

        return $this;
    }
}
