<?php

namespace App\Entity;

use App\Repository\DocumenteventRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DocumenteventRepository::class)]
class Documentevent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'userWrite',length: 255, nullable: true)]
    private ?string $userWrite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $path = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(nullable: true)]
    private ?int $size = null;

    #[ORM\Column(name:'updateAt',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updateAt = null;

    #[ORM\ManyToOne(inversedBy: 'documentevents')]
    #[ORM\JoinColumn(name:"idEvent", referencedColumnName:"id")]
    private ?event $idEvent = null;

    #[ORM\ManyToOne(inversedBy: 'documentevents')]
    #[ORM\JoinColumn(name:"idLibelle", referencedColumnName:"id")]
    private ?typedocumentevent $idLibelle = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserWrite(): ?string
    {
        return $this->userWrite;
    }

    public function setUserWrite(?string $userWrite): static
    {
        $this->userWrite = $userWrite;

        return $this;
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

    public function setUpdateAt(?\DateTimeInterface $updateAt): static
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    public function getIdEvent(): ?event
    {
        return $this->idEvent;
    }

    public function setIdEvent(?event $idEvent): static
    {
        $this->idEvent = $idEvent;

        return $this;
    }

    public function getIdLibelle(): ?typedocumentevent
    {
        return $this->idLibelle;
    }

    public function setIdLibelle(?typedocumentevent $idLibelle): static
    {
        $this->idLibelle = $idLibelle;

        return $this;
    }
}
