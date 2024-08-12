<?php

namespace App\Entity;

use App\Repository\TypedocumentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypedocumentRepository::class)]
class Typedocument
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $libelle = null;

    /**
     * @var Collection<int, Documentsal>
     */
    #[ORM\OneToMany(targetEntity: Documentsal::class, mappedBy: 'idLibelle')]
    private Collection $documentsals;

    public function __construct()
    {
        $this->documentsals = new ArrayCollection();
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
     * @return Collection<int, Documentsal>
     */
    public function getDocumentsals(): Collection
    {
        return $this->documentsals;
    }

    public function addDocumentsal(Documentsal $documentsal): static
    {
        if (!$this->documentsals->contains($documentsal)) {
            $this->documentsals->add($documentsal);
            $documentsal->setIdLibelle($this);
        }

        return $this;
    }

    public function removeDocumentsal(Documentsal $documentsal): static
    {
        if ($this->documentsals->removeElement($documentsal)) {
            // set the owning side to null (unless already changed)
            if ($documentsal->getIdLibelle() === $this) {
                $documentsal->setIdLibelle(null);
            }
        }

        return $this;
    }
}
