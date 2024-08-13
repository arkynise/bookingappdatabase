<?php

namespace App\Entity;

use App\Repository\ParametrecatalogueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParametrecatalogueRepository::class)]
class Parametrecatalogue
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $img = null;

    #[ORM\Column(name:'nomCollab', nullable: true)]
    private ?bool $nomCollab = null;

    #[ORM\Column(name:'dateEntrée', nullable: true)]
    private ?bool $dateEntrée = null;

    #[ORM\Column( nullable: true)]
    private ?bool $permis = null;

    #[ORM\Column( nullable: true)]
    private ?bool $age = null;

    #[ORM\Column( nullable: true)]
    private ?bool $taille = null;

    #[ORM\Column(name:'taillePantalon', nullable: true)]
    private ?bool $taillePantalon = null;

    #[ORM\Column(name:'pointureVeste',nullable: true)]
    private ?bool $pointureVeste = null;

    #[ORM\Column( nullable: true)]
    private ?bool $pointure = null;

    #[ORM\Column( nullable: true)]
    private ?bool $formation = null;

    #[ORM\Column(nullable: true)]
    private ?bool $experience = null;

    #[ORM\Column( nullable: true)]
    private ?bool $langue = null;

    /**
     * @var Collection<int, Catalogue>
     */
    #[ORM\OneToMany(targetEntity: Catalogue::class, mappedBy: 'idParam')]
    private Collection $catalogues;

    public function __construct()
    {
        $this->catalogues = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImg(): ?int
    {
        return $this->img;
    }

    public function setImg(?int $img): static
    {
        $this->img = $img;

        return $this;
    }

    public function isNomCollab(): ?bool
    {
        return $this->nomCollab;
    }

    public function setNomCollab(?bool $nomCollab): static
    {
        $this->nomCollab = $nomCollab;

        return $this;
    }

    public function isDateEntrée(): ?bool
    {
        return $this->dateEntrée;
    }

    public function setDateEntrée(?bool $dateEntrée): static
    {
        $this->dateEntrée = $dateEntrée;

        return $this;
    }

    public function isPermis(): ?bool
    {
        return $this->permis;
    }

    public function setPermis(?bool $permis): static
    {
        $this->permis = $permis;

        return $this;
    }

    public function isAge(): ?bool
    {
        return $this->age;
    }

    public function setAge(?bool $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function isTaille(): ?bool
    {
        return $this->taille;
    }

    public function setTaille(?bool $taille): static
    {
        $this->taille = $taille;

        return $this;
    }

    public function isTaillePantalon(): ?bool
    {
        return $this->taillePantalon;
    }

    public function setTaillePantalon(?bool $taillePantalon): static
    {
        $this->taillePantalon = $taillePantalon;

        return $this;
    }

    public function isPointureVeste(): ?bool
    {
        return $this->pointureVeste;
    }

    public function setPointureVeste(?bool $pointureVeste): static
    {
        $this->pointureVeste = $pointureVeste;

        return $this;
    }

    public function isPointure(): ?bool
    {
        return $this->pointure;
    }

    public function setPointure(?bool $pointure): static
    {
        $this->pointure = $pointure;

        return $this;
    }

    public function isFormation(): ?bool
    {
        return $this->formation;
    }

    public function setFormation(?bool $formation): static
    {
        $this->formation = $formation;

        return $this;
    }

    public function isExperience(): ?bool
    {
        return $this->experience;
    }

    public function setExperience(?bool $experience): static
    {
        $this->experience = $experience;

        return $this;
    }

    public function isLangue(): ?bool
    {
        return $this->langue;
    }

    public function setLangue(?bool $langue): static
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * @return Collection<int, Catalogue>
     */
    public function getCatalogues(): Collection
    {
        return $this->catalogues;
    }

    public function addCatalogue(Catalogue $catalogue): static
    {
        if (!$this->catalogues->contains($catalogue)) {
            $this->catalogues->add($catalogue);
            $catalogue->setIdParam($this);
        }

        return $this;
    }

    public function removeCatalogue(Catalogue $catalogue): static
    {
        if ($this->catalogues->removeElement($catalogue)) {
            // set the owning side to null (unless already changed)
            if ($catalogue->getIdParam() === $this) {
                $catalogue->setIdParam(null);
            }
        }

        return $this;
    }
}
