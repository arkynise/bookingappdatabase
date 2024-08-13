<?php

namespace App\Entity;

use App\Repository\NewnotificationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NewnotificationRepository::class)]
class Newnotification
{
    #[ORM\Id]
    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(name:"idSalarie", referencedColumnName:"id")]
    private ?Salarie $idSalarie = null;

    #[ORM\Column(name:'newMissionsProposes',nullable: true)]
    private ?bool $newMissionsProposes = null;

    #[ORM\Column(name:'newEventsAconfirmer',nullable: true)]
    private ?bool $newEventsAconfirmer = null;

    #[ORM\Column(name:'newEventsListe',nullable: true)]
    private ?bool $newEventsListe = null;

    #[ORM\Column(name:'newEventModified',nullable: true)]
    private ?bool $newEventModified = null;

    #[ORM\Column(name:'newContratNonSigne',nullable: true)]
    private ?bool $newContratNonSigne = null;

    #[ORM\Column(name:'newMissionLongue',nullable: true)]
    private ?bool $newMissionLongue = null;

    #[ORM\Column(name:'newFashionNews',nullable: true)]
    private ?bool $newFashionNews = null;

    
   




    public function getIdSalarie(): ?Salarie
    {
        return $this->idSalarie;
    }

    public function setIdSalarie(?Salarie $idSalarie): static
    {
        $this->idSalarie = $idSalarie;

        return $this;
    }

    public function isNewMissionsProposes(): ?bool
    {
        return $this->newMissionsProposes;
    }

    public function setNewMissionsProposes(?bool $newMissionsProposes): static
    {
        $this->newMissionsProposes = $newMissionsProposes;

        return $this;
    }

    public function isNewEventsAconfirmer(): ?bool
    {
        return $this->newEventsAconfirmer;
    }

    public function setNewEventsAconfirmer(?bool $newEventsAconfirmer): static
    {
        $this->newEventsAconfirmer = $newEventsAconfirmer;

        return $this;
    }

    public function isNewEventsListe(): ?bool
    {
        return $this->newEventsListe;
    }

    public function setNewEventsListe(?bool $newEventsListe): static
    {
        $this->newEventsListe = $newEventsListe;

        return $this;
    }

    public function isNewEventModified(): ?bool
    {
        return $this->newEventModified;
    }

    public function setNewEventModified(?bool $newEventModified): static
    {
        $this->newEventModified = $newEventModified;

        return $this;
    }

    public function isNewContratNonSigne(): ?bool
    {
        return $this->newContratNonSigne;
    }

    public function setNewContratNonSigne(?bool $newContratNonSigne): static
    {
        $this->newContratNonSigne = $newContratNonSigne;

        return $this;
    }

    public function isNewMissionLongue(): ?bool
    {
        return $this->newMissionLongue;
    }

    public function setNewMissionLongue(?bool $newMissionLongue): static
    {
        $this->newMissionLongue = $newMissionLongue;

        return $this;
    }

    public function isNewFashionNews(): ?bool
    {
        return $this->newFashionNews;
    }

    public function setNewFashionNews(?bool $newFashionNews): static
    {
        $this->newFashionNews = $newFashionNews;

        return $this;
    }

    
    
}
