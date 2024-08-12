<?php

namespace App\Entity;

use App\Repository\MailRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MailRepository::class)]
class Mail
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Objet = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Message = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $MailDe = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $MailA = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $MailCc = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateEnvoyer = null;

    #[ORM\Column]
    private ?int $IdUser = null;

    #[ORM\Column(nullable: true)]
    private ?int $IdDevis = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObjet(): ?string
    {
        return $this->Objet;
    }

    public function setObjet(?string $Objet): static
    {
        $this->Objet = $Objet;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->Message;
    }

    public function setMessage(?string $Message): static
    {
        $this->Message = $Message;

        return $this;
    }

    public function getMailDe(): ?string
    {
        return $this->MailDe;
    }

    public function setMailDe(?string $MailDe): static
    {
        $this->MailDe = $MailDe;

        return $this;
    }

    public function getMailA(): ?string
    {
        return $this->MailA;
    }

    public function setMailA(?string $MailA): static
    {
        $this->MailA = $MailA;

        return $this;
    }

    public function getMailCc(): ?string
    {
        return $this->MailCc;
    }

    public function setMailCc(?string $MailCc): static
    {
        $this->MailCc = $MailCc;

        return $this;
    }

    public function getDateEnvoyer(): ?\DateTimeInterface
    {
        return $this->DateEnvoyer;
    }

    public function setDateEnvoyer(?\DateTimeInterface $DateEnvoyer): static
    {
        $this->DateEnvoyer = $DateEnvoyer;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->IdUser;
    }

    public function setIdUser(int $IdUser): static
    {
        $this->IdUser = $IdUser;

        return $this;
    }

    public function getIdDevis(): ?int
    {
        return $this->IdDevis;
    }

    public function setIdDevis(?int $IdDevis): static
    {
        $this->IdDevis = $IdDevis;

        return $this;
    }
}
