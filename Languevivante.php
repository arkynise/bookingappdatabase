<?php

namespace App\Entity;

use App\Repository\LanguevivantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LanguevivantRepository::class)]
class Languevivante
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'lvUn',length: 255, nullable: true)]
    private ?string $lvUn = null;

    #[ORM\Column(name:'NivUn',length: 255, nullable: true)]
    private ?string $NivUn = null;

    #[ORM\Column(name:'lvDeux',length: 255, nullable: true)]
    private ?string $IvDeux = null;

    #[ORM\Column(name:'NivDeux',length: 255, nullable: true)]
    private ?string $NivDeux = null;

    #[ORM\Column(name:'lvTrois',length: 255, nullable: true)]
    private ?string $IvTrois = null;

    #[ORM\Column(name:'NivTrois',length: 255, nullable: true)]
    private ?string $NivTrois = null;

    #[ORM\Column(name:'lvQuatre',length: 255, nullable: true)]
    private ?string $IvQuatre = null;

    #[ORM\Column(name:'NivQuatre',length: 255, nullable: true)]
    private ?string $NivQuatre = null;

    /**
     * @var Collection<int, Salarie>
     */
    #[ORM\OneToMany(targetEntity: Salarie::class, mappedBy: 'IdLv')]
    private Collection $salaries;

    public function __construct()
    {
        $this->salaries = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLvUn(): ?string
    {
        return $this->lvUn;
    }

    public function setLvUn(?string $lvUn): static
    {
        $this->lvUn = $lvUn;

        return $this;
    }

    public function getNivUn(): ?string
    {
        return $this->NivUn;
    }

    public function setNivUn(?string $NivUn): static
    {
        $this->NivUn = $NivUn;

        return $this;
    }

    public function getIvDeux(): ?string
    {
        return $this->IvDeux;
    }

    public function setIvDeux(?string $IvDeux): static
    {
        $this->IvDeux = $IvDeux;

        return $this;
    }

    public function getNivDeux(): ?string
    {
        return $this->NivDeux;
    }

    public function setNivDeux(?string $NivDeux): static
    {
        $this->NivDeux = $NivDeux;

        return $this;
    }

    public function getIvTrois(): ?string
    {
        return $this->IvTrois;
    }

    public function setIvTrois(?string $IvTrois): static
    {
        $this->IvTrois = $IvTrois;

        return $this;
    }

    public function getNivTrois(): ?string
    {
        return $this->NivTrois;
    }

    public function setNivTrois(?string $NivTrois): static
    {
        $this->NivTrois = $NivTrois;

        return $this;
    }

    public function getIvQuatre(): ?string
    {
        return $this->IvQuatre;
    }

    public function setIvQuatre(?string $IvQuatre): static
    {
        $this->IvQuatre = $IvQuatre;

        return $this;
    }

    public function getNivQuatre(): ?string
    {
        return $this->NivQuatre;
    }

    public function setNivQuatre(?string $NivQuatre): static
    {
        $this->NivQuatre = $NivQuatre;

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
            $salary->setIdLv($this);
        }

        return $this;
    }

    public function removeSalary(Salarie $salary): static
    {
        if ($this->salaries->removeElement($salary)) {
            // set the owning side to null (unless already changed)
            if ($salary->getIdLv() === $this) {
                $salary->setIdLv(null);
            }
        }

        return $this;
    }
}
