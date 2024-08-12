<?php

namespace App\Entity;

use App\Repository\FrouteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FrouteRepository::class)]
class Froute
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'dateCreation',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(name:'IdUserWrite',nullable: true)]
    private ?int $IdUserWrite = null;

    /**
     * @var Collection<int, Event>
     */
    #[ORM\OneToMany(targetEntity: Event::class, mappedBy: 'idFroute')]
    private Collection $events;

    /**
     * @var Collection<int, Fraffectation>
     */
    #[ORM\OneToMany(targetEntity: Fraffectation::class, mappedBy: 'IdFroute')]
    private Collection $fraffectations;

    public function __construct()
    {
        $this->events = new ArrayCollection();
        $this->fraffectations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $dateCreation): static
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getIdUserWrite(): ?int
    {
        return $this->IdUserWrite;
    }

    public function setIdUserWrite(?int $IdUserWrite): static
    {
        $this->IdUserWrite = $IdUserWrite;

        return $this;
    }

    /**
     * @return Collection<int, Event>
     */
    public function getEvents(): Collection
    {
        return $this->events;
    }

    public function addEvent(Event $event): static
    {
        if (!$this->events->contains($event)) {
            $this->events->add($event);
            $event->setIdFroute($this);
        }

        return $this;
    }

    public function removeEvent(Event $event): static
    {
        if ($this->events->removeElement($event)) {
            // set the owning side to null (unless already changed)
            if ($event->getIdFroute() === $this) {
                $event->setIdFroute(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Fraffectation>
     */
    public function getFraffectations(): Collection
    {
        return $this->fraffectations;
    }

    public function addFraffectation(Fraffectation $fraffectation): static
    {
        if (!$this->fraffectations->contains($fraffectation)) {
            $this->fraffectations->add($fraffectation);
            $fraffectation->setIdFroute($this);
        }

        return $this;
    }

    public function removeFraffectation(Fraffectation $fraffectation): static
    {
        if ($this->fraffectations->removeElement($fraffectation)) {
            // set the owning side to null (unless already changed)
            if ($fraffectation->getIdFroute() === $this) {
                $fraffectation->setIdFroute(null);
            }
        }

        return $this;
    }
}
