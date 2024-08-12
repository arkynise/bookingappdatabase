<?php

namespace App\Entity;

use App\Repository\MessagepopRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessagepopRepository::class)]
class Messagepop
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'messagepops')]
    private ?groupeuser $groupe = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $text = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datePublication = null;

    #[ORM\Column(nullable: true)]
    private ?bool $actif = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $valableAu = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updateat = null;

    #[ORM\Column(nullable: true)]
    private ?int $idUserWrite = null;

    #[ORM\Column(nullable: true)]
    private ?bool $forAll = null;

    #[ORM\Column(nullable: true)]
    private ?bool $notifications = null;

    /**
     * @var Collection<int, Poppanier>
     */
    #[ORM\OneToMany(targetEntity: Poppanier::class, mappedBy: 'idMsgPop')]
    private Collection $poppaniers;

    public function __construct()
    {
        $this->poppaniers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGroupe(): ?groupeuser
    {
        return $this->groupe;
    }

    public function setGroupe(?groupeuser $groupe): static
    {
        $this->groupe = $groupe;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): static
    {
        $this->titre = $titre;

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

    public function isActif(): ?bool
    {
        return $this->actif;
    }

    public function setActif(?bool $actif): static
    {
        $this->actif = $actif;

        return $this;
    }

    public function getValableAu(): ?\DateTimeInterface
    {
        return $this->valableAu;
    }

    public function setValableAu(?\DateTimeInterface $valableAu): static
    {
        $this->valableAu = $valableAu;

        return $this;
    }

    public function getUpdateat(): ?\DateTimeInterface
    {
        return $this->updateat;
    }

    public function setUpdateat(?\DateTimeInterface $updateat): static
    {
        $this->updateat = $updateat;

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

    public function isForAll(): ?bool
    {
        return $this->forAll;
    }

    public function setForAll(bool $forAll): static
    {
        $this->forAll = $forAll;

        return $this;
    }

  

    public function isNotifications(): ?bool
    {
        return $this->notifications;
    }

    public function setNotifications(?bool $notifications): static
    {
        $this->notifications = $notifications;

        return $this;
    }

    /**
     * @return Collection<int, Poppanier>
     */
    public function getPoppaniers(): Collection
    {
        return $this->poppaniers;
    }

    public function addPoppanier(Poppanier $poppanier): static
    {
        if (!$this->poppaniers->contains($poppanier)) {
            $this->poppaniers->add($poppanier);
            $poppanier->setIdMsgPop($this);
        }

        return $this;
    }

    public function removePoppanier(Poppanier $poppanier): static
    {
        if ($this->poppaniers->removeElement($poppanier)) {
            // set the owning side to null (unless already changed)
            if ($poppanier->getIdMsgPop() === $this) {
                $poppanier->setIdMsgPop(null);
            }
        }

        return $this;
    }
}
