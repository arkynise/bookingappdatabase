<?php

namespace App\Entity;

use App\Repository\TalonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TalonRepository::class)]
class Talon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'Libelle',length: 255, nullable: true)]
    private ?string $Libelle = null;

    /**
     * @var Collection<int, Talonsalarie>
     */
    #[ORM\OneToMany(targetEntity: Talonsalarie::class, mappedBy: 'idTalon')]
    private Collection $talonsalaries;

    public function __construct()
    {
        $this->talonsalaries = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection<int, Talonsalarie>
     */
    public function getTalonsalaries(): Collection
    {
        return $this->talonsalaries;
    }

    public function addTalonsalary(Talonsalarie $talonsalary): static
    {
        if (!$this->talonsalaries->contains($talonsalary)) {
            $this->talonsalaries->add($talonsalary);
            $talonsalary->setIdTalon($this);
        }

        return $this;
    }

    public function removeTalonsalary(Talonsalarie $talonsalary): static
    {
        if ($this->talonsalaries->removeElement($talonsalary)) {
            // set the owning side to null (unless already changed)
            if ($talonsalary->getIdTalon() === $this) {
                $talonsalary->setIdTalon(null);
            }
        }

        return $this;
    }
}
