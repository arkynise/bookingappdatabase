<?php

namespace App\Entity;

use App\Repository\ContrateffectRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContrateffectRepository::class)]
class Contrataffect
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'idAffect',nullable: true)]
    private ?int $idAffect = null;

    #[ORM\Column(name:'dateM',type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateM = null;

    #[ORM\Column(name:'debutM',length: 255, nullable: true)]
    private ?string $debutM = null;

    #[ORM\Column(name:'finM',length: 255, nullable: true)]
    private ?string $finM = null;

    #[ORM\Column(name:'hTrav',length: 255, nullable: true)]
    private ?string $hTrav = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $profile = null;

    #[ORM\Column(name:'idProfile',nullable: true)]
    private ?int $idProfile = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mission = null;

    #[ORM\Column(name:'idMission',nullable: true)]
    private ?int $idMission = null;

    #[ORM\Column(name:'Salaire',type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $Salaire = null;

    #[ORM\Column(name:'Repas',nullable: true)]
    private ?int $Repas = null;

    #[ORM\Column(name:'DebForfait',length: 255, nullable: true)]
    private ?string $DebForfait = null;

    #[ORM\ManyToOne(inversedBy: 'contrateffects')]
    #[ORM\JoinColumn(name:"idContrat_id", referencedColumnName:"id")]
    private ?Contrat $idContrat = null;

    #[ORM\Column(name:'hDebOld',length: 255, nullable: true)]
    private ?string $hDebOld = null;

    #[ORM\Column(name:'hFinOld',length: 255, nullable: true)]
    private ?string $hFinOld = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAffect(): ?int
    {
        return $this->idAffect;
    }

    public function setIdAffect(?int $idAffect): static
    {
        $this->idAffect = $idAffect;

        return $this;
    }

    public function getDateM(): ?\DateTimeInterface
    {
        return $this->dateM;
    }

    public function setDateM(?\DateTimeInterface $dateM): static
    {
        $this->dateM = $dateM;

        return $this;
    }

    public function getDebutM(): ?string
    {
        return $this->debutM;
    }

    public function setDebutM(?string $debutM): static
    {
        $this->debutM = $debutM;

        return $this;
    }

    public function getFinM(): ?string
    {
        return $this->finM;
    }

    public function setFinM(?string $finM): static
    {
        $this->finM = $finM;

        return $this;
    }

    public function getHTrav(): ?string
    {
        return $this->hTrav;
    }

    public function setHTrav(?string $hTrav): static
    {
        $this->hTrav = $hTrav;

        return $this;
    }

    public function getProfile(): ?string
    {
        return $this->profile;
    }

    public function setProfile(?string $profile): static
    {
        $this->profile = $profile;

        return $this;
    }

    public function getIdProfile(): ?int
    {
        return $this->idProfile;
    }

    public function setIdProfile(?int $idProfile): static
    {
        $this->idProfile = $idProfile;

        return $this;
    }

    public function getMission(): ?string
    {
        return $this->mission;
    }

    public function setMission(?string $mission): static
    {
        $this->mission = $mission;

        return $this;
    }

    public function getIdMission(): ?int
    {
        return $this->idMission;
    }

    public function setIdMission(?int $idMission): static
    {
        $this->idMission = $idMission;

        return $this;
    }

    public function getSalaire(): ?string
    {
        return $this->Salaire;
    }

    public function setSalaire(?string $Salaire): static
    {
        $this->Salaire = $Salaire;

        return $this;
    }

    public function getRepas(): ?int
    {
        return $this->Repas;
    }

    public function setRepas(?int $Repas): static
    {
        $this->Repas = $Repas;

        return $this;
    }

    public function getDebForfait(): ?string
    {
        return $this->DebForfait;
    }

    public function setDebForfait(?string $DebForfait): static
    {
        $this->DebForfait = $DebForfait;

        return $this;
    }

    public function getIdContrat(): ?Contrat
    {
        return $this->idContrat;
    }

    public function setIdContrat(?Contrat $idContrat): static
    {
        $this->idContrat = $idContrat;

        return $this;
    }

    public function getHDebOld(): ?string
    {
        return $this->hDebOld;
    }

    public function setHDebOld(?string $hDebOld): static
    {
        $this->hDebOld = $hDebOld;

        return $this;
    }

    public function getHFinOld(): ?string
    {
        return $this->hFinOld;
    }

    public function setHFinOld(?string $hFinOld): static
    {
        $this->hFinOld = $hFinOld;

        return $this;
    }
}
