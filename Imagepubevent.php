<?php

namespace App\Entity;

use App\Repository\ImagepubeventRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImagepubeventRepository::class)]
class Imagepubevent
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

    #[ORM\Column(name:'updateAt',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updateAt = null;

    #[ORM\ManyToOne(inversedBy: 'imagepubevents')]
    #[ORM\JoinColumn(name:"idPubEvent_id", referencedColumnName:"id")]
    private ?Pubevent $idPubEvent = null;

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

    public function setUpdateAt(?\DateTimeInterface $updateAt): static
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    public function getIdPubEvent(): ?Pubevent
    {
        return $this->idPubEvent;
    }

    public function setIdPubEvent(?Pubevent $idPubEvent): static
    {
        $this->idPubEvent = $idPubEvent;

        return $this;
    }
}
