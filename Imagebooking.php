<?php

namespace App\Entity;

use App\Repository\ImagebookingRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImagebookingRepository::class)]
class Imagebooking
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $path = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(nullable: true)]
    private ?int $size = null;

    #[ORM\Column(name:'updateAt',type: Types::DATETIME_MUTABLE,nullable: true)]
    private ?\DateTimeInterface $updateAt = null;

    #[ORM\ManyToOne(inversedBy: 'imagebookings')]
    #[ORM\JoinColumn(name:"IdSalarie_id", referencedColumnName:"id")]
    private ?Salarie $IdSalarie = null;

    #[ORM\Column(name:'fermerImg',nullable: true)]
    private ?bool $fermerImg = null;

    #[ORM\Column(name:'numTrie',nullable: true)]
    private ?int $numTrie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): static
    {
        $this->path = $path;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(?int $size): static
    {
        $this->size = $size;

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->updateAt;
    }

    public function setUpdateAt(\DateTimeInterface $updateAt): static
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    public function getIdSalarie(): ?Salarie
    {
        return $this->IdSalarie;
    }

    public function setIdSalarie(?Salarie $IdSalarie): static
    {
        $this->IdSalarie = $IdSalarie;

        return $this;
    }

    public function isFermerImg(): ?bool
    {
        return $this->fermerImg;
    }

    public function setFermerImg(?bool $fermerImg): static
    {
        $this->fermerImg = $fermerImg;

        return $this;
    }

    public function getNumTrie(): ?int
    {
        return $this->numTrie;
    }

    public function setNumTrie(?int $numTrie): static
    {
        $this->numTrie = $numTrie;

        return $this;
    }
}
