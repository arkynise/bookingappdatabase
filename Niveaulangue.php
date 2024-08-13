<?php

namespace App\Entity;

use App\Repository\NiveaulangueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NiveaulangueRepository::class)]
class Niveaulangue
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'Libelle',length: 255, nullable: true)]
    private ?string $Libelle = null;

    /**
     * @var Collection<int, Langueparsalarie>
     */
    #[ORM\OneToMany(targetEntity: Langueparsalarie::class, mappedBy: 'idNiveauLangue')]
    private Collection $langueparsalaries;

    public function __construct()
    {
        $this->langueparsalaries = new ArrayCollection();
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
     * @return Collection<int, Langueparsalarie>
     */
    public function getLangueparsalaries(): Collection
    {
        return $this->langueparsalaries;
    }

    public function addLangueparsalary(Langueparsalarie $langueparsalary): static
    {
        if (!$this->langueparsalaries->contains($langueparsalary)) {
            $this->langueparsalaries->add($langueparsalary);
            $langueparsalary->setIdNiveauLangue($this);
        }

        return $this;
    }

    public function removeLangueparsalary(Langueparsalarie $langueparsalary): static
    {
        if ($this->langueparsalaries->removeElement($langueparsalary)) {
            // set the owning side to null (unless already changed)
            if ($langueparsalary->getIdNiveauLangue() === $this) {
                $langueparsalary->setIdNiveauLangue(null);
            }
        }

        return $this;
    }
}
