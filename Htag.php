<?php

namespace App\Entity;

use App\Repository\HtagRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HtagRepository::class)]
class Htag
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'Libelle',length: 255, nullable: true)]
    private ?string $Libelle = null;

    /**
     * @var Collection<int, Htagevent>
     */
    #[ORM\OneToMany(targetEntity: Htagevent::class, mappedBy: 'idHtag')]
    private Collection $htagevents;

    public function __construct()
    {
        $this->htagevents = new ArrayCollection();
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
     * @return Collection<int, Htagevent>
     */
    public function getHtagevents(): Collection
    {
        return $this->htagevents;
    }

    public function addHtagevent(Htagevent $htagevent): static
    {
        if (!$this->htagevents->contains($htagevent)) {
            $this->htagevents->add($htagevent);
            $htagevent->setIdHtag($this);
        }

        return $this;
    }

    public function removeHtagevent(Htagevent $htagevent): static
    {
        if ($this->htagevents->removeElement($htagevent)) {
            // set the owning side to null (unless already changed)
            if ($htagevent->getIdHtag() === $this) {
                $htagevent->setIdHtag(null);
            }
        }

        return $this;
    }
}
