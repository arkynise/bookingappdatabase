<?php

namespace App\Entity;

use App\Repository\LangueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LangueRepository::class)]
class Langue
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
    #[ORM\OneToMany(targetEntity: Langueparsalarie::class, mappedBy: 'idLangue')]
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
            $langueparsalary->setIdLangue($this);
        }

        return $this;
    }

    public function removeLangueparsalary(Langueparsalarie $langueparsalary): static
    {
        if ($this->langueparsalaries->removeElement($langueparsalary)) {
            // set the owning side to null (unless already changed)
            if ($langueparsalary->getIdLangue() === $this) {
                $langueparsalary->setIdLangue(null);
            }
        }

        return $this;
    }
}
