<?php

namespace App\Entity;

use App\Repository\NotifiableNotificationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NotifiableNotificationRepository::class)]
class NotifiableNotification
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $notification_id = null;

    #[ORM\Column]
    private ?bool $seen = null;

    #[ORM\Column(name:'notifiableEntity_id',nullable: true)]
    private ?int $notifiableEntity_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNotificationId(): ?int
    {
        return $this->notification_id;
    }

    public function setNotificationId(?int $notification_id): static
    {
        $this->notification_id = $notification_id;

        return $this;
    }

    public function isSeen(): ?bool
    {
        return $this->seen;
    }

    public function setSeen(bool $seen): static
    {
        $this->seen = $seen;

        return $this;
    }

    public function getNotifiableEntityId(): ?int
    {
        return $this->notifiableEntity_id;
    }

    public function setNotifiableEntityId(?int $notifiableEntity_id): static
    {
        $this->notifiableEntity_id = $notifiableEntity_id;

        return $this;
    }
}
