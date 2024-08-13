<?php

namespace App\Entity;

use App\Repository\DevisuserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DevisuserRepository::class)]
class Devisuser
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'devisusers')]
    #[ORM\JoinColumn(name:"User_id", referencedColumnName:"id")]
    private ?User $User = null;

    #[ORM\ManyToOne(inversedBy: 'devisusers')]
    #[ORM\JoinColumn(name:"Devis_id", referencedColumnName:"id")]
    private ?Devis $Devis = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): static
    {
        $this->User = $User;

        return $this;
    }

    public function getDevis(): ?Devis
    {
        return $this->Devis;
    }

    public function setDevis(?Devis $Devis): static
    {
        $this->Devis = $Devis;

        return $this;
    }
}
