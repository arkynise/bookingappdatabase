<?php

namespace App\Entity;

use App\Repository\CatalogueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CatalogueRepository::class)]
class Catalogue
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'catalogues')]
    #[ORM\JoinColumn(name:"groupe", referencedColumnName:"id")]
    private ?Groupeuser $groupe = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datecreation = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateEnvoie = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateRetour = null;

    #[ORM\Column(nullable: true)]
    private ?int $idUserWrite = null;

    #[ORM\Column(nullable: true)]
    private ?int $idClient = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $client = null;

    #[ORM\Column(nullable: true)]
    private ?int $idCtc = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ctc = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $libelle = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateFin = null;

    #[ORM\Column(nullable: true)]
    private ?int $statut = null;

    #[ORM\ManyToOne(inversedBy: 'catalogues')]
    private ?Imagecata $imgCat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tokenUrl = null;

    #[ORM\ManyToOne(inversedBy: 'catalogues')]
    private ?Parametrecatalogue $idParam = null;

    /**
     * @var Collection<int, Cataloguesalarie>
     */
    #[ORM\OneToMany(targetEntity: Cataloguesalarie::class, mappedBy: 'idCat')]
    private Collection $cataloguesalaries;

    public function __construct()
    {
        $this->cataloguesalaries = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGroupe(): ?Groupeuser
    {
        return $this->groupe;
    }

    public function setGroupe(?Groupeuser $groupe): static
    {
        $this->groupe = $groupe;

        return $this;
    }

    public function getDatecreation(): ?\DateTimeInterface
    {
        return $this->datecreation;
    }

    public function setDatecreation(?\DateTimeInterface $datecreation): static
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    public function getDateEnvoie(): ?\DateTimeInterface
    {
        return $this->dateEnvoie;
    }

    public function setDateEnvoie(?\DateTimeInterface $dateEnvoie): static
    {
        $this->dateEnvoie = $dateEnvoie;

        return $this;
    }

    public function getDateRetour(): ?\DateTimeInterface
    {
        return $this->dateRetour;
    }

    public function setDateRetour(?\DateTimeInterface $dateRetour): static
    {
        $this->dateRetour = $dateRetour;

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

    public function getIdClient(): ?int
    {
        return $this->idClient;
    }

    public function setIdClient(?int $idClient): static
    {
        $this->idClient = $idClient;

        return $this;
    }

    public function getClient(): ?string
    {
        return $this->client;
    }

    public function setClient(?string $client): static
    {
        $this->client = $client;

        return $this;
    }

    public function getIdCtc(): ?int
    {
        return $this->idCtc;
    }

    public function setIdCtc(?int $idCtc): static
    {
        $this->idCtc = $idCtc;

        return $this;
    }

    public function getCtc(): ?string
    {
        return $this->ctc;
    }

    public function setCtc(?string $ctc): static
    {
        $this->ctc = $ctc;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): static
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): static
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): static
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getStatut(): ?int
    {
        return $this->statut;
    }

    public function setStatut(?int $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getImgCat(): ?Imagecata
    {
        return $this->imgCat;
    }

    public function setImgCat(?Imagecata $imgCat): static
    {
        $this->imgCat = $imgCat;

        return $this;
    }

    public function getTokenUrl(): ?string
    {
        return $this->tokenUrl;
    }

    public function setTokenUrl(?string $tokenUrl): static
    {
        $this->tokenUrl = $tokenUrl;

        return $this;
    }

    public function getIdParam(): ?Parametrecatalogue
    {
        return $this->idParam;
    }

    public function setIdParam(?Parametrecatalogue $idParam): static
    {
        $this->idParam = $idParam;

        return $this;
    }

    /**
     * @return Collection<int, Cataloguesalarie>
     */
    public function getCataloguesalaries(): Collection
    {
        return $this->cataloguesalaries;
    }

    public function addCataloguesalary(Cataloguesalarie $cataloguesalary): static
    {
        if (!$this->cataloguesalaries->contains($cataloguesalary)) {
            $this->cataloguesalaries->add($cataloguesalary);
            $cataloguesalary->setIdCat($this);
        }

        return $this;
    }

    public function removeCataloguesalary(Cataloguesalarie $cataloguesalary): static
    {
        if ($this->cataloguesalaries->removeElement($cataloguesalary)) {
            // set the owning side to null (unless already changed)
            if ($cataloguesalary->getIdCat() === $this) {
                $cataloguesalary->setIdCat(null);
            }
        }

        return $this;
    }
}
