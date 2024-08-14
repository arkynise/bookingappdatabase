<?php

namespace App\Entity;

use App\Repository\GroupeuserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GroupeuserRepository::class)]
class Groupeuser
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(name:'EnMarche',nullable: true)]
    private ?bool $EnMarch = null;

    #[ORM\ManyToOne(inversedBy: 'groupeusers')]
    #[ORM\JoinColumn(name:"AttacherAgence_id", referencedColumnName:"id")]
    private ?Agence $AttacherAgence = null;

    /**
     * @var Collection<int, Event>
     */
    #[ORM\OneToMany(targetEntity: Event::class, mappedBy: 'groupe')]
    private Collection $events;

    /**
     * @var Collection<int, UserGroupeuser>
     */
    #[ORM\OneToMany(targetEntity: UserGroupeuser::class, mappedBy: 'groupeuser')]
    private Collection $userGroupeusers;

    /**
     * @var Collection<int, Catalogue>
     */
    #[ORM\OneToMany(targetEntity: Catalogue::class, mappedBy: 'groupe')]
    private Collection $catalogues;

    /**
     * @var Collection<int, Missiondispo>
     */
    #[ORM\OneToMany(targetEntity: Missiondispo::class, mappedBy: 'groupe')]
    private Collection $missiondispos;

    /**
     * @var Collection<int, Pubevent>
     */
    #[ORM\OneToMany(targetEntity: Pubevent::class, mappedBy: 'groupe')]
    private Collection $pubevents;

    /**
     * @var Collection<int, Pubentreprise>
     */
    #[ORM\OneToMany(targetEntity: Pubentreprise::class, mappedBy: 'groupe')]
    private Collection $pubentreprises;

    /**
     * @var Collection<int, Urgenceevent>
     */
    #[ORM\OneToMany(targetEntity: Urgenceevent::class, mappedBy: 'groupe')]
    private Collection $urgenceevents;

    /**
     * @var Collection<int, Messagepop>
     */
    #[ORM\OneToMany(targetEntity: Messagepop::class, mappedBy: 'groupe')]
    private Collection $messagepops;

    #[ORM\Column(name:'colorBu',length: 255)]
    private ?string $colorBu = null;

    #[ORM\Column(name:'rechercheHtag',nullable: true)]
    private ?bool $rechercheHtag = null;

    public function __construct()
    {
        $this->events = new ArrayCollection();
        $this->userGroupeusers = new ArrayCollection();
        $this->catalogues = new ArrayCollection();
        $this->missiondispos = new ArrayCollection();
        $this->pubevents = new ArrayCollection();
        $this->pubentreprises = new ArrayCollection();
        $this->urgenceevents = new ArrayCollection();
        $this->messagepops = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function isEnMarch(): ?bool
    {
        return $this->EnMarch;
    }

    public function setEnMarch(?bool $EnMarch): static
    {
        $this->EnMarch = $EnMarch;

        return $this;
    }

    public function getAttacherAgence(): ?Agence
    {
        return $this->AttacherAgence;
    }

    public function setAttacherAgence(?Agence $AttacherAgence): static
    {
        $this->AttacherAgence = $AttacherAgence;

        return $this;
    }

    /**
     * @return Collection<int, Event>
     */
    public function getEvents(): Collection
    {
        return $this->events;
    }

    public function addEvent(Event $event): static
    {
        if (!$this->events->contains($event)) {
            $this->events->add($event);
            $event->setGroupe($this);
        }

        return $this;
    }

    public function removeEvent(Event $event): static
    {
        if ($this->events->removeElement($event)) {
            // set the owning side to null (unless already changed)
            if ($event->getGroupe() === $this) {
                $event->setGroupe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, UserGroupeuser>
     */
    public function getUserGroupeusers(): Collection
    {
        return $this->userGroupeusers;
    }

    public function addUserGroupeuser(UserGroupeuser $userGroupeuser): static
    {
        if (!$this->userGroupeusers->contains($userGroupeuser)) {
            $this->userGroupeusers->add($userGroupeuser);
            $userGroupeuser->setGroupeuser($this);
        }

        return $this;
    }

    public function removeUserGroupeuser(UserGroupeuser $userGroupeuser): static
    {
        if ($this->userGroupeusers->removeElement($userGroupeuser)) {
            // set the owning side to null (unless already changed)
            if ($userGroupeuser->getGroupeuser() === $this) {
                $userGroupeuser->setGroupeuser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Catalogue>
     */
    public function getCatalogues(): Collection
    {
        return $this->catalogues;
    }

    public function addCatalogue(Catalogue $catalogue): static
    {
        if (!$this->catalogues->contains($catalogue)) {
            $this->catalogues->add($catalogue);
            $catalogue->setGroupe($this);
        }

        return $this;
    }

    public function removeCatalogue(Catalogue $catalogue): static
    {
        if ($this->catalogues->removeElement($catalogue)) {
            // set the owning side to null (unless already changed)
            if ($catalogue->getGroupe() === $this) {
                $catalogue->setGroupe(null);
            }
        }

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
            $missiondispo->setGroupe($this);
        }

        return $this;
    }

    public function removeMissiondispo(Missiondispo $missiondispo): static
    {
        if ($this->missiondispos->removeElement($missiondispo)) {
            // set the owning side to null (unless already changed)
            if ($missiondispo->getGroupe() === $this) {
                $missiondispo->setGroupe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Pubevent>
     */
    public function getPubevents(): Collection
    {
        return $this->pubevents;
    }

    public function addPubevent(Pubevent $pubevent): static
    {
        if (!$this->pubevents->contains($pubevent)) {
            $this->pubevents->add($pubevent);
            $pubevent->setGroupe($this);
        }

        return $this;
    }

    public function removePubevent(Pubevent $pubevent): static
    {
        if ($this->pubevents->removeElement($pubevent)) {
            // set the owning side to null (unless already changed)
            if ($pubevent->getGroupe() === $this) {
                $pubevent->setGroupe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Pubentreprise>
     */
    public function getPubentreprises(): Collection
    {
        return $this->pubentreprises;
    }

    public function addPubentreprise(Pubentreprise $pubentreprise): static
    {
        if (!$this->pubentreprises->contains($pubentreprise)) {
            $this->pubentreprises->add($pubentreprise);
            $pubentreprise->setGroupe($this);
        }

        return $this;
    }

    public function removePubentreprise(Pubentreprise $pubentreprise): static
    {
        if ($this->pubentreprises->removeElement($pubentreprise)) {
            // set the owning side to null (unless already changed)
            if ($pubentreprise->getGroupe() === $this) {
                $pubentreprise->setGroupe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Urgenceevent>
     */
    public function getUrgenceevents(): Collection
    {
        return $this->urgenceevents;
    }

    public function addUrgenceevent(Urgenceevent $urgenceevent): static
    {
        if (!$this->urgenceevents->contains($urgenceevent)) {
            $this->urgenceevents->add($urgenceevent);
            $urgenceevent->setGroupe($this);
        }

        return $this;
    }

    public function removeUrgenceevent(Urgenceevent $urgenceevent): static
    {
        if ($this->urgenceevents->removeElement($urgenceevent)) {
            // set the owning side to null (unless already changed)
            if ($urgenceevent->getGroupe() === $this) {
                $urgenceevent->setGroupe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Messagepop>
     */
    public function getMessagepops(): Collection
    {
        return $this->messagepops;
    }

    public function addMessagepop(Messagepop $messagepop): static
    {
        if (!$this->messagepops->contains($messagepop)) {
            $this->messagepops->add($messagepop);
            $messagepop->setGroupe($this);
        }

        return $this;
    }

    public function removeMessagepop(Messagepop $messagepop): static
    {
        if ($this->messagepops->removeElement($messagepop)) {
            // set the owning side to null (unless already changed)
            if ($messagepop->getGroupe() === $this) {
                $messagepop->setGroupe(null);
            }
        }

        return $this;
    }

    public function getColorBu(): ?string
    {
        return $this->colorBu;
    }

    public function setColorBu(string $colorBu): static
    {
        $this->colorBu = $colorBu;

        return $this;
    }

    public function isRechercheHtag(): ?bool
    {
        return $this->rechercheHtag;
    }

    public function setRechercheHtag(?bool $rechercheHtag): static
    {
        $this->rechercheHtag = $rechercheHtag;

        return $this;
    }
}
