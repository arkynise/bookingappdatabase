<?php

namespace App\Entity;

use App\Repository\TypenoteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypenoteRepository::class)]
class Typenote
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $libelle = null;

    /**
     * @var Collection<int, Eventnote>
     */
    #[ORM\OneToMany(targetEntity: Eventnote::class, mappedBy: 'idType')]
    private Collection $eventnotes;

    public function __construct()
    {
        $this->eventnotes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): static
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection<int, Eventnote>
     */
    public function getEventnotes(): Collection
    {
        return $this->eventnotes;
    }

    public function addEventnote(Eventnote $eventnote): static
    {
        if (!$this->eventnotes->contains($eventnote)) {
            $this->eventnotes->add($eventnote);
            $eventnote->setIdType($this);
        }

        return $this;
    }

    public function removeEventnote(Eventnote $eventnote): static
    {
        if ($this->eventnotes->removeElement($eventnote)) {
            // set the owning side to null (unless already changed)
            if ($eventnote->getIdType() === $this) {
                $eventnote->setIdType(null);
            }
        }

        return $this;
    }
}
