<?php

namespace App\Entity;

use App\Repository\CodesignatureRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CodesignatureRepository::class)]
class Codesignature
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numero_portable = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $code_signature = null;

    #[ORM\Column(nullable: true)]
    private ?bool $verifié = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroPortable(): ?string
    {
        return $this->numero_portable;
    }

    public function setNumeroPortable(?string $numero_portable): static
    {
        $this->numero_portable = $numero_portable;

        return $this;
    }

    public function getCodeSignature(): ?string
    {
        return $this->code_signature;
    }

    public function setCodeSignature(?string $code_signature): static
    {
        $this->code_signature = $code_signature;

        return $this;
    }

    public function isVerifié(): ?bool
    {
        return $this->verifié;
    }

    public function setVerifié(?bool $verifié): static
    {
        $this->verifié = $verifié;

        return $this;
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
}
