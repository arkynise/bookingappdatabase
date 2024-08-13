<?php

namespace App\Entity;

use App\Repository\ContactclientRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContactclientRepository::class)]
class Contactclient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(name:'descriptionC',length: 255, nullable: true)]
    private ?string $descriptionC = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $fonction = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tel_client = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fax_client = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $mail = null;

    #[ORM\Column(length: 255)]
    private ?string $gsm = null;

    #[ORM\Column(name:'civiliteClient',length: 255)]
    private ?string $civiliteClient = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescriptionC(): ?string
    {
        return $this->descriptionC;
    }

    public function setDescriptionC(?string $descriptionC): static
    {
        $this->descriptionC = $descriptionC;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(string $fonction): static
    {
        $this->fonction = $fonction;

        return $this;
    }

    public function getTelClient(): ?string
    {
        return $this->tel_client;
    }

    public function setTelClient(?string $tel_client): static
    {
        $this->tel_client = $tel_client;

        return $this;
    }

    public function getFaxClient(): ?string
    {
        return $this->fax_client;
    }

    public function setFaxClient(?string $fax_client): static
    {
        $this->fax_client = $fax_client;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): static
    {
        $this->mail = $mail;

        return $this;
    }

    public function getGsm(): ?string
    {
        return $this->gsm;
    }

    public function setGsm(string $gsm): static
    {
        $this->gsm = $gsm;

        return $this;
    }

    public function getCiviliteClient(): ?string
    {
        return $this->civiliteClient;
    }

    public function setCiviliteClient(string $civiliteClient): static
    {
        $this->civiliteClient = $civiliteClient;

        return $this;
    }
}
