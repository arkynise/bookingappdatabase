<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Nucleos\UserBundle\Model\User as BaseUser;
#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
class User extends BaseUser implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'users')]
    private ?Media $image = null;

    #[ORM\Column(length: 255)]
    private ?string $username_canonical = null;

    #[ORM\Column(length: 255)]
    private ?string $email_canonical = null;

    #[ORM\Column(length: 255)]
    private ?string $salt = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $locked = null;

    #[ORM\Column]
    private ?bool $expired = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $expired_at = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $credentials_expired = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $credentials_expired_at = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $motPasseMail = null;

    #[ORM\Column(length: 255)]
    private ?string $civilite = null;

    #[ORM\Column(length: 255)]
    private ?string $RoleUser = null;

    #[ORM\Column(length: 255)]
    private ?string $initiales = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\Column(length: 255)]
    private ?string $tel = null;

    #[ORM\Column(length: 100)]
    private ?string $gsm = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $observation = null;

    #[ORM\ManyToOne]
    private ?Media $signature = null;

    #[ORM\Column(length: 255)]
    private ?string $objet = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $message = null;

    #[ORM\ManyToOne]
    private ?Media $signatureMail = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $OnApi = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $derCnxNote = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $RespGroupe = null;

    #[ORM\Column(nullable: true)]
    private ?int $numTrie = null;

    /**
     * @var Collection<int, Devisuser>
     */
    #[ORM\OneToMany(targetEntity: Devisuser::class, mappedBy: 'User')]
    private Collection $devisusers;

    /**
     * @var Collection<int, Eventnote>
     */
    #[ORM\OneToMany(targetEntity: Eventnote::class, mappedBy: 'Ecritpar')]
    private Collection $eventnotes;

    /**
     * @var Collection<int, Salarienote>
     */
    #[ORM\OneToMany(targetEntity: Salarienote::class, mappedBy: 'Ecritpar')]
    private Collection $salarienotes;

    /**
     * @var Collection<int, Eventuser>
     */
    #[ORM\OneToMany(targetEntity: Eventuser::class, mappedBy: 'idUser')]
    private Collection $eventusers;

    /**
     * @var Collection<int, UserGroupeuser>
     */
    #[ORM\OneToMany(targetEntity: UserGroupeuser::class, mappedBy: 'user')]
    private Collection $userGroupeusers;

    /**
     * @var Collection<int, Observent>
     */
    #[ORM\OneToMany(targetEntity: Observent::class, mappedBy: 'ecritpar')]
    private Collection $observents;

    /**
     * @var Collection<int, Event>
     */
    #[ORM\OneToMany(targetEntity: Event::class, mappedBy: 'idUserWrite')]
    private Collection $events;

    /**
     * @var Collection<int, Devis>
     */
    #[ORM\OneToMany(targetEntity: Devis::class, mappedBy: 'IdUserWrite')]
    private Collection $devis;

    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->devisusers = new ArrayCollection();
        $this->eventnotes = new ArrayCollection();
        $this->salarienotes = new ArrayCollection();
        $this->eventusers = new ArrayCollection();
        $this->userGroupeusers = new ArrayCollection();
        $this->observents = new ArrayCollection();
        $this->events = new ArrayCollection();
        $this->devis = new ArrayCollection();
    }

    public function getImage(): ?Media
    {
        return $this->image;
    }

    public function setImage(?Media $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getUsernameCanonical(): ?string
    {
        return $this->username_canonical;
    }

    public function setUsernameCanonical(string $username_canonical): static
    {
        $this->username_canonical = $username_canonical;

        return $this;
    }

    public function getEmailCanonical(): ?string
    {
        return $this->email_canonical;
    }

    public function setEmailCanonical(string $email_canonical): static
    {
        $this->email_canonical = $email_canonical;

        return $this;
    }

    public function getSalt(): ?string
    {
        return $this->salt;
    }

    public function setSalt(string $salt): static
    {
        $this->salt = $salt;

        return $this;
    }

    public function getLocked(): ?int
    {
        return $this->locked;
    }

    public function setLocked(int $locked): static
    {
        $this->locked = $locked;

        return $this;
    }

    public function isExpired(): ?bool
    {
        return $this->expired;
    }

    public function setExpired(bool $expired): static
    {
        $this->expired = $expired;

        return $this;
    }

    public function getExpiredAt(): ?\DateTimeImmutable
    {
        return $this->expired_at;
    }

    public function setExpiredAt(?\DateTimeImmutable $expired_at): static
    {
        $this->expired_at = $expired_at;

        return $this;
    }

    public function getCredentialsExpired(): ?int
    {
        return $this->credentials_expired;
    }

    public function setCredentialsExpired(int $credentials_expired): static
    {
        $this->credentials_expired = $credentials_expired;

        return $this;
    }

    public function getCredentialsExpiredAt(): ?\DateTimeImmutable
    {
        return $this->credentials_expired_at;
    }

    public function setCredentialsExpiredAt(?\DateTimeImmutable $credentials_expired_at): static
    {
        $this->credentials_expired_at = $credentials_expired_at;

        return $this;
    }

    public function getMotPasseMail(): ?string
    {
        return $this->motPasseMail;
    }

    public function setMotPasseMail(?string $motPasseMail): static
    {
        $this->motPasseMail = $motPasseMail;

        return $this;
    }

    public function getCivilite(): ?string
    {
        return $this->civilite;
    }

    public function setCivilite(string $civilite): static
    {
        $this->civilite = $civilite;

        return $this;
    }

    public function getRoleUser(): ?string
    {
        return $this->RoleUser;
    }

    public function setRoleUser(string $RoleUser): static
    {
        $this->RoleUser = $RoleUser;

        return $this;
    }

    public function getInitiales(): ?string
    {
        return $this->initiales;
    }

    public function setInitiales(string $initiales): static
    {
        $this->initiales = $initiales;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

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

    public function getGsm(): ?string
    {
        return $this->gsm;
    }

    public function setGsm(string $gsm): static
    {
        $this->gsm = $gsm;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(?string $observation): static
    {
        $this->observation = $observation;

        return $this;
    }

    public function getSignature(): ?Media
    {
        return $this->signature;
    }

    public function setSignature(?Media $signature): static
    {
        $this->signature = $signature;

        return $this;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): static
    {
        $this->objet = $objet;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function getSignatureMail(): ?Media
    {
        return $this->signatureMail;
    }

    public function setSignatureMail(?Media $signatureMail): static
    {
        $this->signatureMail = $signatureMail;

        return $this;
    }

    public function getOnApi(): ?int
    {
        return $this->OnApi;
    }

    public function setOnApi(?int $OnApi): static
    {
        $this->OnApi = $OnApi;

        return $this;
    }

    public function getDerCnxNote(): ?\DateTimeInterface
    {
        return $this->derCnxNote;
    }

    public function setDerCnxNote(?\DateTimeInterface $derCnxNote): static
    {
        $this->derCnxNote = $derCnxNote;

        return $this;
    }

    public function getRespGroupe(): ?int
    {
        return $this->RespGroupe;
    }

    public function setRespGroupe(?int $RespGroupe): static
    {
        $this->RespGroupe = $RespGroupe;

        return $this;
    }

    public function getNumTrie(): ?int
    {
        return $this->numTrie;
    }

    public function setNumTrie(?int $numTrie): static
    {
        $this->numTrie = $numTrie;

        return $this;
    }

    /**
     * @return Collection<int, Devisuser>
     */
    public function getDevisusers(): Collection
    {
        return $this->devisusers;
    }

    public function addDevisuser(Devisuser $devisuser): static
    {
        if (!$this->devisusers->contains($devisuser)) {
            $this->devisusers->add($devisuser);
            $devisuser->setUser($this);
        }

        return $this;
    }

    public function removeDevisuser(Devisuser $devisuser): static
    {
        if ($this->devisusers->removeElement($devisuser)) {
            // set the owning side to null (unless already changed)
            if ($devisuser->getUser() === $this) {
                $devisuser->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Eventnote>
     */
    public function getEventnotes(): Collection
    {
        return $this->eventnotes;
    }

    public function addEventnote(Eventnote $eventnote): static
    {
        if (!$this->eventnotes->contains($eventnote)) {
            $this->eventnotes->add($eventnote);
            $eventnote->setEcritpar($this);
        }

        return $this;
    }

    public function removeEventnote(Eventnote $eventnote): static
    {
        if ($this->eventnotes->removeElement($eventnote)) {
            // set the owning side to null (unless already changed)
            if ($eventnote->getEcritpar() === $this) {
                $eventnote->setEcritpar(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Salarienote>
     */
    public function getSalarienotes(): Collection
    {
        return $this->salarienotes;
    }

    public function addSalarienote(Salarienote $salarienote): static
    {
        if (!$this->salarienotes->contains($salarienote)) {
            $this->salarienotes->add($salarienote);
            $salarienote->setEcritpar($this);
        }

        return $this;
    }

    public function removeSalarienote(Salarienote $salarienote): static
    {
        if ($this->salarienotes->removeElement($salarienote)) {
            // set the owning side to null (unless already changed)
            if ($salarienote->getEcritpar() === $this) {
                $salarienote->setEcritpar(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Eventuser>
     */
    public function getEventusers(): Collection
    {
        return $this->eventusers;
    }

    public function addEventuser(Eventuser $eventuser): static
    {
        if (!$this->eventusers->contains($eventuser)) {
            $this->eventusers->add($eventuser);
            $eventuser->setIdUser($this);
        }

        return $this;
    }

    public function removeEventuser(Eventuser $eventuser): static
    {
        if ($this->eventusers->removeElement($eventuser)) {
            // set the owning side to null (unless already changed)
            if ($eventuser->getIdUser() === $this) {
                $eventuser->setIdUser(null);
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
            $userGroupeuser->setUser($this);
        }

        return $this;
    }

    public function removeUserGroupeuser(UserGroupeuser $userGroupeuser): static
    {
        if ($this->userGroupeusers->removeElement($userGroupeuser)) {
            // set the owning side to null (unless already changed)
            if ($userGroupeuser->getUser() === $this) {
                $userGroupeuser->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Observent>
     */
    public function getObservents(): Collection
    {
        return $this->observents;
    }

    public function addObservent(Observent $observent): static
    {
        if (!$this->observents->contains($observent)) {
            $this->observents->add($observent);
            $observent->setEcritpar($this);
        }

        return $this;
    }

    public function removeObservent(Observent $observent): static
    {
        if ($this->observents->removeElement($observent)) {
            // set the owning side to null (unless already changed)
            if ($observent->getEcritpar() === $this) {
                $observent->setEcritpar(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Event>
     */
    public function getEvents(): Collection
    {
        return $this->events;
    }





    /**
     * @return Collection<int, Devis>
     */
    public function getDevis(): Collection
    {
        return $this->devis;
    }



}
