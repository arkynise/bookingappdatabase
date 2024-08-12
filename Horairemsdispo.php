<?php

namespace App\Entity;

use App\Repository\HorairemsdispoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HorairemsdispoRepository::class)]
class Horairemsdispo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $debutH = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $finH = null;

    #[ORM\Column(nullable: true)]
    private ?int $intDeb = null;

    #[ORM\Column(nullable: true)]
    private ?int $intFin = null;

    #[ORM\ManyToOne(inversedBy: 'horairemsdispos')]
    private ?Jourmsdispo $idJour = null;

    /**
     * @var Collection<int, Retourmsdispo>
     */
    #[ORM\OneToMany(targetEntity: Retourmsdispo::class, mappedBy: 'idHoraire')]
    private Collection $retourmsdispos;

    public function __construct()
    {
        $this->retourmsdispos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDebutH(): ?string
    {
        return $this->debutH;
    }

    public function setDebutH(?string $debutH): static
    {
        $this->debutH = $debutH;

        return $this;
    }

    public function getFinH(): ?string
    {
        return $this->finH;
    }

    public function setFinH(?string $finH): static
    {
        $this->finH = $finH;

        return $this;
    }

    public function getIntDeb(): ?int
    {
        return $this->intDeb;
    }

    public function setIntDeb(?int $intDeb): static
    {
        $this->intDeb = $intDeb;

        return $this;
    }

    public function getIntFin(): ?int
    {
        return $this->intFin;
    }

    public function setIntFin(?int $intFin): static
    {
        $this->intFin = $intFin;

        return $this;
    }

    public function getIdJour(): ?Jourmsdispo
    {
        return $this->idJour;
    }

    public function setIdJour(?Jourmsdispo $idJour): static
    {
        $this->idJour = $idJour;

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
            $retourmsdispo->setIdHoraire($this);
        }

        return $this;
    }

    public function removeRetourmsdispo(Retourmsdispo $retourmsdispo): static
    {
        if ($this->retourmsdispos->removeElement($retourmsdispo)) {
            // set the owning side to null (unless already changed)
            if ($retourmsdispo->getIdHoraire() === $this) {
                $retourmsdispo->setIdHoraire(null);
            }
        }

        return $this;
    }
}
