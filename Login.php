<?php

namespace App\Entity;

use App\Repository\LoginRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LoginRepository::class)]
class Login
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne]
    #[ORM\JoinColumn(name:"imageLogin", referencedColumnName:"id")]
    private ?Media $imageLogin = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImageLogin(): ?Media
    {
        return $this->imageLogin;
    }

    public function setImageLogin(?Media $imageLogin): static
    {
        $this->imageLogin = $imageLogin;

        return $this;
    }
}
