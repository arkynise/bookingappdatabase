<?php

namespace App\Entity;

use App\Repository\IdcontactidclientRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IdcontactidclientRepository::class)]
class Idcontactidclient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idContact = null;

    #[ORM\ManyToOne(inversedBy: 'idcontactidclients')]
    private ?client $idClient = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdContact(): ?int
    {
        return $this->idContact;
    }

    public function setIdContact(int $idContact): static
    {
        $this->idContact = $idContact;

        return $this;
    }

    public function getIdClient(): ?client
    {
        return $this->idClient;
    }

    public function setIdClient(?client $idClient): static
    {
        $this->idClient = $idClient;

        return $this;
    }
}
