<?php

namespace App\Entity;

use App\Repository\ImagemsdispoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImagemsdispoRepository::class)]
class Imagemsdispo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $path = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(nullable: true)]
    private ?int $size = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updateAt = null;

    /**
     * @var Collection<int, Missiondispo>
     */
    #[ORM\OneToMany(targetEntity: Missiondispo::class, mappedBy: 'imgDsp')]
    private Collection $missiondispos;

    public function __construct()
    {
        $this->missiondispos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): static
    {
        $this->path = $path;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(?int $size): static
    {
        $this->size = $size;

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->updateAt;
    }

    public function setUpdateAt(?\DateTimeInterface $updateAt): static
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * @return Collection<int, Missiondispo>
     */
    public function getMissiondispos(): Collection
    {
        return $this->missiondispos;
    }

    public function addMissiondispo(Missiondispo $missiondispo): static
    {
        if (!$this->missiondispos->contains($missiondispo)) {
            $this->missiondispos->add($missiondispo);
            $missiondispo->setImgDsp($this);
        }

        return $this;
    }

    public function removeMissiondispo(Missiondispo $missiondispo): static
    {
        if ($this->missiondispos->removeElement($missiondispo)) {
            // set the owning side to null (unless already changed)
            if ($missiondispo->getImgDsp() === $this) {
                $missiondispo->setImgDsp(null);
            }
        }

        return $this;
    }
}
