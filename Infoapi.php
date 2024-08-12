<?php

namespace App\Entity;

use App\Repository\InfoapiRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InfoapiRepository::class)]
class Infoapi
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(nullable: true)]
    private ?int $idUserWrite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numVersion = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $msgMineur = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $msgMajeur = null;

    #[ORM\Column(nullable: true)]
    private ?bool $enable = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?media $imgAccueil = null;

    #[ORM\Column(nullable: true)]
    private ?bool $reloadAppChanged = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdUserWrite(): ?int
    {
        return $this->idUserWrite;
    }

    public function setIdUserWrite(?int $idUserWrite): static
    {
        $this->idUserWrite = $idUserWrite;

        return $this;
    }

    public function getNumVersion(): ?string
    {
        return $this->numVersion;
    }

    public function setNumVersion(?string $numVersion): static
    {
        $this->numVersion = $numVersion;

        return $this;
    }

    public function getMsgMineur(): ?string
    {
        return $this->msgMineur;
    }

    public function setMsgMineur(?string $msgMineur): static
    {
        $this->msgMineur = $msgMineur;

        return $this;
    }

    public function getMsgMajeur(): ?string
    {
        return $this->msgMajeur;
    }

    public function setMsgMajeur(?string $msgMajeur): static
    {
        $this->msgMajeur = $msgMajeur;

        return $this;
    }

    public function isEnable(): ?bool
    {
        return $this->enable;
    }

    public function setEnable(?bool $enable): static
    {
        $this->enable = $enable;

        return $this;
    }

    public function getImgAccueil(): ?media
    {
        return $this->imgAccueil;
    }

    public function setImgAccueil(?media $imgAccueil): static
    {
        $this->imgAccueil = $imgAccueil;

        return $this;
    }

    public function isReloadAppChanged(): ?bool
    {
        return $this->reloadAppChanged;
    }

    public function setReloadAppChanged(?bool $reloadAppChanged): static
    {
        $this->reloadAppChanged = $reloadAppChanged;

        return $this;
    }
}
