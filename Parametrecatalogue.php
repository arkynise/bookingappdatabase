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

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $nomCollab = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $dateEntrée = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $permis = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $age = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $taille = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $taillePantalon = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $pointureVeste = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $pointure = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $formation = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $experience = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $langue = null;

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

    public function getNomCollab(): ?int
    {
        return $this->nomCollab;
    }

    public function setNomCollab(?int $nomCollab): static
    {
        $this->nomCollab = $nomCollab;

        return $this;
    }

    public function getDateEntrée(): ?int
    {
        return $this->dateEntrée;
    }

    public function setDateEntrée(?int $dateEntrée): static
    {
        $this->dateEntrée = $dateEntrée;

        return $this;
    }

    public function getPermis(): ?int
    {
        return $this->permis;
    }

    public function setPermis(?int $permis): static
    {
        $this->permis = $permis;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function getTaille(): ?int
    {
        return $this->taille;
    }

    public function setTaille(?int $taille): static
    {
        $this->taille = $taille;

        return $this;
    }

    public function getTaillePantalon(): ?int
    {
        return $this->taillePantalon;
    }

    public function setTaillePantalon(?int $taillePantalon): static
    {
        $this->taillePantalon = $taillePantalon;

        return $this;
    }

    public function getPointureVeste(): ?int
    {
        return $this->pointureVeste;
    }

    public function setPointureVeste(?int $pointureVeste): static
    {
        $this->pointureVeste = $pointureVeste;

        return $this;
    }

    public function getPointure(): ?int
    {
        return $this->pointure;
    }

    public function setPointure(?int $pointure): static
    {
        $this->pointure = $pointure;

        return $this;
    }

    public function getFormation(): ?int
    {
        return $this->formation;
    }

    public function setFormation(?int $formation): static
    {
        $this->formation = $formation;

        return $this;
    }

    public function getExperience(): ?int
    {
        return $this->experience;
    }

    public function setExperience(?int $experience): static
    {
        $this->experience = $experience;

        return $this;
    }

    public function getLangue(): ?int
    {
        return $this->langue;
    }

    public function setLangue(?int $langue): static
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
