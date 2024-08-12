<?php

namespace App\Entity;

use App\Repository\UserGroupeuserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserGroupeuserRepository::class)]
class UserGroupeuser
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'userGroupeusers')]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'userGroupeusers')]
    private ?Groupeuser $groupeuser = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getGroupeuser(): ?Groupeuser
    {
        return $this->groupeuser;
    }

    public function setGroupeuser(?Groupeuser $groupeuser): static
    {
        $this->groupeuser = $groupeuser;

        return $this;
    }
}
