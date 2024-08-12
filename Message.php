<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessageRepository::class)]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datePublication = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $text = null;

    #[ORM\ManyToOne(inversedBy: 'messages')]
    private ?Event $idEvent = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $PubMsg = null;

    /**
     * @var Collection<int, Messageprestation>
     */
    #[ORM\OneToMany(targetEntity: Messageprestation::class, mappedBy: 'idMsg')]
    private Collection $messageprestations;

    public function __construct()
    {
        $this->messageprestations = new ArrayCollection();
    }

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

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->datePublication;
    }

    public function setDatePublication(?\DateTimeInterface $datePublication): static
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): static
    {
        $this->text = $text;

        return $this;
    }

    public function getIdEvent(): ?Event
    {
        return $this->idEvent;
    }

    public function setIdEvent(?Event $idEvent): static
    {
        $this->idEvent = $idEvent;

        return $this;
    }

    public function getPubMsg(): ?int
    {
        return $this->PubMsg;
    }

    public function setPubMsg(int $PubMsg): static
    {
        $this->PubMsg = $PubMsg;

        return $this;
    }

    /**
     * @return Collection<int, Messageprestation>
     */
    public function getMessageprestations(): Collection
    {
        return $this->messageprestations;
    }

    public function addMessageprestation(Messageprestation $messageprestation): static
    {
        if (!$this->messageprestations->contains($messageprestation)) {
            $this->messageprestations->add($messageprestation);
            $messageprestation->setIdMsg($this);
        }

        return $this;
    }

    public function removeMessageprestation(Messageprestation $messageprestation): static
    {
        if ($this->messageprestations->removeElement($messageprestation)) {
            // set the owning side to null (unless already changed)
            if ($messageprestation->getIdMsg() === $this) {
                $messageprestation->setIdMsg(null);
            }
        }

        return $this;
    }
}
