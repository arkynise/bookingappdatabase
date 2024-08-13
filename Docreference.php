<?php

namespace App\Entity;

use App\Repository\DocreferenceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DocreferenceRepository::class)]
class Docreference
{



    #[ORM\Id]
    #[ORM\Column(length:100)]
    private ?string $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $path = null;

    #[ORM\Column(name:'typeDoc',length: 255, nullable: true)]
    private ?string $typeDoc = null;

    #[ORM\Column(name:'salId',nullable: true)]
    private ?int $salId = null;

    #[ORM\Column(name:'docId',nullable: true)]
    private ?int $docId = null;

    #[ORM\Column(name:'updateAt',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updateAt = null;

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

    public function getTypeDoc(): ?string
    {
        return $this->typeDoc;
    }

    public function setTypeDoc(?string $typeDoc): static
    {
        $this->typeDoc = $typeDoc;

        return $this;
    }

    public function getSalId(): ?int
    {
        return $this->salId;
    }

    public function setSalId(?int $salId): static
    {
        $this->salId = $salId;

        return $this;
    }

    public function getDocId(): ?int
    {
        return $this->docId;
    }

    public function setDocId(?int $docId): static
    {
        $this->docId = $docId;

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->updateAt;
    }

    public function setUpdateAt(?\DateTimeInterface $updateAt): static
    {
        $this->updateAt = $updateAt;

        return $this;
    }
}
