<?php

namespace App\Entity;

use App\Repository\TypedocumenteventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypedocumenteventRepository::class)]
class Typedocumentevent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Libelle = null;

    /**
     * @var Collection<int, Documentevent>
     */
    #[ORM\OneToMany(targetEntity: Documentevent::class, mappedBy: 'idLibelle')]
    private Collection $documentevents;

    public function __construct()
    {
        $this->documentevents = new ArrayCollection();
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
     * @return Collection<int, Documentevent>
     */
    public function getDocumentevents(): Collection
    {
        return $this->documentevents;
    }

    public function addDocumentevent(Documentevent $documentevent): static
    {
        if (!$this->documentevents->contains($documentevent)) {
            $this->documentevents->add($documentevent);
            $documentevent->setIdLibelle($this);
        }

        return $this;
    }

    public function removeDocumentevent(Documentevent $documentevent): static
    {
        if ($this->documentevents->removeElement($documentevent)) {
            // set the owning side to null (unless already changed)
            if ($documentevent->getIdLibelle() === $this) {
                $documentevent->setIdLibelle(null);
            }
        }

        return $this;
    }
}
