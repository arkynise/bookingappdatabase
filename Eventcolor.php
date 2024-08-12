<?php

namespace App\Entity;

use App\Repository\EventcolorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventcolorRepository::class)]
class Eventcolor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'couleurHex',length: 255, nullable: true)]
    private ?string $couleurHex = null;

    #[ORM\Column(name:'couleurObs',length: 255, nullable: true)]
    private ?string $couleurObs = null;

    /**
     * @var Collection<int, Eventinfo>
     */
    #[ORM\OneToMany(targetEntity: Eventinfo::class, mappedBy: 'idEventColor')]
    private Collection $eventinfos;

    public function __construct()
    {
        $this->eventinfos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCouleurHex(): ?string
    {
        return $this->couleurHex;
    }

    public function setCouleurHex(?string $couleurHex): static
    {
        $this->couleurHex = $couleurHex;

        return $this;
    }

    public function getCouleurObs(): ?string
    {
        return $this->couleurObs;
    }

    public function setCouleurObs(?string $couleurObs): static
    {
        $this->couleurObs = $couleurObs;

        return $this;
    }

    /**
     * @return Collection<int, Eventinfo>
     */
    public function getEventinfos(): Collection
    {
        return $this->eventinfos;
    }

    public function addEventinfo(Eventinfo $eventinfo): static
    {
        if (!$this->eventinfos->contains($eventinfo)) {
            $this->eventinfos->add($eventinfo);
            $eventinfo->setIdEventColor($this);
        }

        return $this;
    }

    public function removeEventinfo(Eventinfo $eventinfo): static
    {
        if ($this->eventinfos->removeElement($eventinfo)) {
            // set the owning side to null (unless already changed)
            if ($eventinfo->getIdEventColor() === $this) {
                $eventinfo->setIdEventColor(null);
            }
        }

        return $this;
    }
}
