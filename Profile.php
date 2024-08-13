<?php

namespace App\Entity;

use App\Repository\ProfileRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfileRepository::class)]
class Profile
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'nomProfile',length: 255, nullable: true)]
    private ?string $nomProfile = null;

    #[ORM\Column(name:'tauxVente',type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $tauxVente = null;

    #[ORM\Column(name:'tauxAchat',type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $tauxAchat = null;

    /**
     * @var Collection<int, Profilepubevent>
     */
    #[ORM\OneToMany(targetEntity: Profilepubevent::class, mappedBy: 'idProfile')]
    private Collection $profilepubevents;

    /**
     * @var Collection<int, Prestation>
     */
    #[ORM\OneToMany(targetEntity: Prestation::class, mappedBy: 'profilePrestation')]
    private Collection $prestations;

    /**
     * @var Collection<int, Prestationdevis>
     */
    #[ORM\OneToMany(targetEntity: Prestationdevis::class, mappedBy: 'profilePrestation')]
    private Collection $prestationdevis;

    public function __construct()
    {
        $this->profilepubevents = new ArrayCollection();
        $this->prestations = new ArrayCollection();
        $this->prestationdevis = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProfile(): ?string
    {
        return $this->nomProfile;
    }

    public function setNomProfile(?string $nomProfile): static
    {
        $this->nomProfile = $nomProfile;

        return $this;
    }

    public function getTauxVente(): ?string
    {
        return $this->tauxVente;
    }

    public function setTauxVente(string $tauxVente): static
    {
        $this->tauxVente = $tauxVente;

        return $this;
    }

    public function getTauxAchat(): ?string
    {
        return $this->tauxAchat;
    }

    public function setTauxAchat(?string $tauxAchat): static
    {
        $this->tauxAchat = $tauxAchat;

        return $this;
    }

    /**
     * @return Collection<int, Profilepubevent>
     */
    public function getProfilepubevents(): Collection
    {
        return $this->profilepubevents;
    }

    public function addProfilepubevent(Profilepubevent $profilepubevent): static
    {
        if (!$this->profilepubevents->contains($profilepubevent)) {
            $this->profilepubevents->add($profilepubevent);
            $profilepubevent->setIdProfile($this);
        }

        return $this;
    }

    public function removeProfilepubevent(Profilepubevent $profilepubevent): static
    {
        if ($this->profilepubevents->removeElement($profilepubevent)) {
            // set the owning side to null (unless already changed)
            if ($profilepubevent->getIdProfile() === $this) {
                $profilepubevent->setIdProfile(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Prestation>
     */
    public function getPrestations(): Collection
    {
        return $this->prestations;
    }

    public function addPrestation(Prestation $prestation): static
    {
        if (!$this->prestations->contains($prestation)) {
            $this->prestations->add($prestation);
            $prestation->setProfilePrestation($this);
        }

        return $this;
    }

    public function removePrestation(Prestation $prestation): static
    {
        if ($this->prestations->removeElement($prestation)) {
            // set the owning side to null (unless already changed)
            if ($prestation->getProfilePrestation() === $this) {
                $prestation->setProfilePrestation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Prestationdevis>
     */
    public function getPrestationdevis(): Collection
    {
        return $this->prestationdevis;
    }

    public function addPrestationdevi(Prestationdevis $prestationdevi): static
    {
        if (!$this->prestationdevis->contains($prestationdevi)) {
            $this->prestationdevis->add($prestationdevi);
            $prestationdevi->setProfilePrestation($this);
        }

        return $this;
    }

    public function removePrestationdevi(Prestationdevis $prestationdevi): static
    {
        if ($this->prestationdevis->removeElement($prestationdevi)) {
            // set the owning side to null (unless already changed)
            if ($prestationdevi->getProfilePrestation() === $this) {
                $prestationdevi->setProfilePrestation(null);
            }
        }

        return $this;
    }
}
