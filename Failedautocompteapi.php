<?php

namespace App\Entity;

use App\Repository\FailedautocompteapiRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FailedautocompteapiRepository::class)]
class Failedautocompteapi
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'failedautocompteapis')]
    #[ORM\JoinColumn(name:"salarieId", referencedColumnName:"id")]
    private ?Salarie $salarie = null;

    #[ORM\Column(name:'dateCreation',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(name:'lastDateEnvoi',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $lastDateEnvoi = null;

    #[ORM\Column(name:'traitedAt',type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $traitedAt = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mobile = null;

    #[ORM\Column(name:'retryNb',nullable: true)]
    private ?int $retryNb = null;

    #[ORM\Column(name:'errorMsg',length: 255, nullable: true)]
    private ?string $errorMsg = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cause = null;

    #[ORM\Column(nullable: true)]
    private ?int $traited = null;

    #[ORM\Column(name:'traitedEmail',length: 255, nullable: true)]
    private ?string $traitedEmail = null;

    #[ORM\Column(name:'traitedMobile',length: 255, nullable: true)]
    private ?string $traitedMobile = null;

    #[ORM\Column(name:'apiUserId',nullable: true)]
    private ?int $apiUserId = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $statut = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSalarie(): ?Salarie
    {
        return $this->salarie;
    }

    public function setSalarie(?Salarie $salarie): static
    {
        $this->salarie = $salarie;

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

    public function getLastDateEnvoi(): ?\DateTimeInterface
    {
        return $this->lastDateEnvoi;
    }

    public function setLastDateEnvoi(?\DateTimeInterface $lastDateEnvoi): static
    {
        $this->lastDateEnvoi = $lastDateEnvoi;

        return $this;
    }

    public function getTraitedAt(): ?\DateTimeInterface
    {
        return $this->traitedAt;
    }

    public function setTraitedAt(?\DateTimeInterface $traitedAt): static
    {
        $this->traitedAt = $traitedAt;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(?string $mobile): static
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getRetryNb(): ?int
    {
        return $this->retryNb;
    }

    public function setRetryNb(?int $retryNb): static
    {
        $this->retryNb = $retryNb;

        return $this;
    }

    public function getErrorMsg(): ?string
    {
        return $this->errorMsg;
    }

    public function setErrorMsg(?string $errorMsg): static
    {
        $this->errorMsg = $errorMsg;

        return $this;
    }

    public function getCause(): ?string
    {
        return $this->cause;
    }

    public function setCause(?string $cause): static
    {
        $this->cause = $cause;

        return $this;
    }

    public function getTraited(): ?int
    {
        return $this->traited;
    }

    public function setTraited(?int $traited): static
    {
        $this->traited = $traited;

        return $this;
    }

    public function getTraitedEmail(): ?string
    {
        return $this->traitedEmail;
    }

    public function setTraitedEmail(?string $traitedEmail): static
    {
        $this->traitedEmail = $traitedEmail;

        return $this;
    }

    public function getTraitedMobile(): ?string
    {
        return $this->traitedMobile;
    }

    public function setTraitedMobile(?string $traitedMobile): static
    {
        $this->traitedMobile = $traitedMobile;

        return $this;
    }

    public function getApiUserId(): ?int
    {
        return $this->apiUserId;
    }

    public function setApiUserId(?int $apiUserId): static
    {
        $this->apiUserId = $apiUserId;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }
}
