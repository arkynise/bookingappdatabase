<?php

namespace App\Entity;

use App\Repository\JourmsdispoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JourmsdispoRepository::class)]
class Jourmsdispo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateJour = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lieuJour = null;

    #[ORM\ManyToOne(inversedBy: 'jourmsdispos')]
    private ?Missiondispo $idMsDispo = null;

    /**
     * @var Collection<int, Horairemsdispo>
     */
    #[ORM\OneToMany(targetEntity: Horairemsdispo::class, mappedBy: 'idJour')]
    private Collection $horairemsdispos;

    /**
     * @var Collection<int, Retourmsdispo>
     */
    #[ORM\OneToMany(targetEntity: Retourmsdispo::class, mappedBy: 'idJour')]
    private Collection $retourmsdispos;

    public function __construct()
    {
        $this->horairemsdispos = new ArrayCollection();
        $this->retourmsdispos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateJour(): ?\DateTimeInterface
    {
        return $this->dateJour;
    }

    public function setDateJour(?\DateTimeInterface $dateJour): static
    {
        $this->dateJour = $dateJour;

        return $this;
    }

    public function getLieuJour(): ?string
    {
        return $this->lieuJour;
    }

    public function setLieuJour(?string $lieuJour): static
    {
        $this->lieuJour = $lieuJour;

        return $this;
    }

    public function getIdMsDispo(): ?Missiondispo
    {
        return $this->idMsDispo;
    }

    public function setIdMsDispo(?Missiondispo $idMsDispo): static
    {
        $this->idMsDispo = $idMsDispo;

        return $this;
    }

    /**
     * @return Collection<int, Horairemsdispo>
     */
    public function getHorairemsdispos(): Collection
    {
        return $this->horairemsdispos;
    }

    public function addHorairemsdispo(Horairemsdispo $horairemsdispo): static
    {
        if (!$this->horairemsdispos->contains($horairemsdispo)) {
            $this->horairemsdispos->add($horairemsdispo);
            $horairemsdispo->setIdJour($this);
        }

        return $this;
    }

    public function removeHorairemsdispo(Horairemsdispo $horairemsdispo): static
    {
        if ($this->horairemsdispos->removeElement($horairemsdispo)) {
            // set the owning side to null (unless already changed)
            if ($horairemsdispo->getIdJour() === $this) {
                $horairemsdispo->setIdJour(null);
            }
        }

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
            $retourmsdispo->setIdJour($this);
        }

        return $this;
    }

    public function removeRetourmsdispo(Retourmsdispo $retourmsdispo): static
    {
        if ($this->retourmsdispos->removeElement($retourmsdispo)) {
            // set the owning side to null (unless already changed)
            if ($retourmsdispo->getIdJour() === $this) {
                $retourmsdispo->setIdJour(null);
            }
        }

        return $this;
    }
}
