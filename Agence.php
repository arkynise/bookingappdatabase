<?php

namespace App\Entity;

use App\Repository\AgenceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AgenceRepository::class)]
class Agence
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $fax = null;

    #[ORM\Column(name:'Nom',length: 255)]
    private ?string $nom = null;

    #[ORM\Column(name:'Siret',length: 255)]
    private ?string $Siret = null;

    #[ORM\Column(name:"CodeAPE",length: 255,)]
    private ?string $CodeAPE = null;

    #[ORM\Column(name:'PiedContrat',type: Types::TEXT, nullable: true)]
    private ?string $PiedContrat = null;

    #[ORM\Column(length: 255)]
    private ?string $tel = null;

    #[ORM\Column(name:'AdrRue',length: 255)]
    private ?string $AdrRue = null;

    #[ORM\Column(name:'AdrNum',length: 255)]
    private ?string $AdrNum = null;

    #[ORM\Column(name:'AdrVille',length: 255)]
    private ?string $AdrVille = null;

    #[ORM\Column(name:'AdrCodepostal',length: 255)]
    private ?string $AdrCodepostal = null;

    #[ORM\Column(name:'AuthNom',length: 255)]
    private ?string $AuthNom = null;

    #[ORM\Column(name:'AuthPrenom',length: 255)]
    private ?string $AuthPrenom = null;

    #[ORM\Column(name:'AuthPassword',length: 255)]
    private ?string $AuthPassword = null;

    #[ORM\Column(name:'NomEntite',length: 255)]
    private ?string $NomEntite = null;

    /**
     * @var Collection<int, Groupeuser>
     */
    #[ORM\OneToMany(targetEntity: Groupeuser::class, mappedBy: 'AttacherAgence')]
    private Collection $groupeusers;

    public function __construct()
    {
        $this->groupeusers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(string $fax): static
    {
        $this->fax = $fax;

        return $this;
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

    public function getSiret(): ?string
    {
        return $this->Siret;
    }

    public function setSiret(string $Siret): static
    {
        $this->Siret = $Siret;

        return $this;
    }

    public function getCodeAPE(): ?string
    {
        return $this->CodeAPE;
    }

    public function setCodeAPE(string $CodeAPE): static
    {
        $this->CodeAPE = $CodeAPE;

        return $this;
    }

    public function getPiedContrat(): ?string
    {
        return $this->PiedContrat;
    }

    public function setPiedContrat(?string $PiedContrat): static
    {
        $this->PiedContrat = $PiedContrat;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): static
    {
        $this->tel = $tel;

        return $this;
    }

    public function getAdrRue(): ?string
    {
        return $this->AdrRue;
    }

    public function setAdrRue(string $AdrRue): static
    {
        $this->AdrRue = $AdrRue;

        return $this;
    }

    public function getAdrNum(): ?string
    {
        return $this->AdrNum;
    }

    public function setAdrNum(string $AdrNum): static
    {
        $this->AdrNum = $AdrNum;

        return $this;
    }

    public function getAdrVille(): ?string
    {
        return $this->AdrVille;
    }

    public function setAdrVille(string $AdrVille): static
    {
        $this->AdrVille = $AdrVille;

        return $this;
    }

    public function getAdrCodepostal(): ?string
    {
        return $this->AdrCodepostal;
    }

    public function setAdrCodepostal(string $AdrCodepostal): static
    {
        $this->AdrCodepostal = $AdrCodepostal;

        return $this;
    }

    public function getAuthNom(): ?string
    {
        return $this->AuthNom;
    }

    public function setAuthNom(string $AuthNom): static
    {
        $this->AuthNom = $AuthNom;

        return $this;
    }

    public function getAuthPrenom(): ?string
    {
        return $this->AuthPrenom;
    }

    public function setAuthPrenom(string $AuthPrenom): static
    {
        $this->AuthPrenom = $AuthPrenom;

        return $this;
    }

    public function getAuthPassword(): ?string
    {
        return $this->AuthPassword;
    }

    public function setAuthPassword(string $AuthPassword): static
    {
        $this->AuthPassword = $AuthPassword;

        return $this;
    }

    public function getNomEntite(): ?string
    {
        return $this->NomEntite;
    }

    public function setNomEntite(string $NomEntite): static
    {
        $this->NomEntite = $NomEntite;

        return $this;
    }

    /**
     * @return Collection<int, Groupeuser>
     */
    public function getGroupeusers(): Collection
    {
        return $this->groupeusers;
    }

    public function addGroupeuser(Groupeuser $groupeuser): static
    {
        if (!$this->groupeusers->contains($groupeuser)) {
            $this->groupeusers->add($groupeuser);
            $groupeuser->setAttacherAgence($this);
        }

        return $this;
    }

    public function removeGroupeuser(Groupeuser $groupeuser): static
    {
        if ($this->groupeusers->removeElement($groupeuser)) {
            // set the owning side to null (unless already changed)
            if ($groupeuser->getAttacherAgence() === $this) {
                $groupeuser->setAttacherAgence(null);
            }
        }

        return $this;
    }
}
