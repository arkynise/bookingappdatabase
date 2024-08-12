<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
class Client
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $raison_sociale = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $categorie_client = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $code_client_1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tel_client = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tel_client2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mail_client = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fax_client = null;

    #[ORM\Column(nullable: true)]
    private ?int $num_comptable = null;

    #[ORM\Column(nullable: true)]
    private ?int $id_tva = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_creation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $num_tva = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $kbis = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $rib = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $siret = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $site_web = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $forme_juridique = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $grille_tarifaire = null;

    #[ORM\Column(name:'grilleTarifaireSurnom',length: 255, nullable: true)]
    private ?string $grilleTarifaireSurnom = null;

    /**
     * @var Collection<int, Adresse>
     */
    #[ORM\OneToMany(targetEntity: Adresse::class, mappedBy: 'clients')]
    private Collection $adresses;

    /**
     * @var Collection<int, Devis>
     */
    #[ORM\OneToMany(targetEntity: Devis::class, mappedBy: 'RechercheClient')]
    private Collection $devis;

    /**
     * @var Collection<int, Idcontactidclient>
     */
    #[ORM\OneToMany(targetEntity: Idcontactidclient::class, mappedBy: 'idClient')]
    private Collection $idcontactidclients;

    public function __construct()
    {
        $this->adresses = new ArrayCollection();
        $this->devis = new ArrayCollection();
        $this->idcontactidclients = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRaisonSociale(): ?string
    {
        return $this->raison_sociale;
    }

    public function setRaisonSociale(?string $raison_sociale): static
    {
        $this->raison_sociale = $raison_sociale;

        return $this;
    }

    public function getCategorieClient(): ?string
    {
        return $this->categorie_client;
    }

    public function setCategorieClient(?string $categorie_client): static
    {
        $this->categorie_client = $categorie_client;

        return $this;
    }

    public function getCodeClient1(): ?string
    {
        return $this->code_client_1;
    }

    public function setCodeClient1(?string $code_client_1): static
    {
        $this->code_client_1 = $code_client_1;

        return $this;
    }

    public function getTelClient(): ?string
    {
        return $this->tel_client;
    }

    public function setTelClient(?string $tel_client): static
    {
        $this->tel_client = $tel_client;

        return $this;
    }

    public function getTelClient2(): ?string
    {
        return $this->tel_client2;
    }

    public function setTelClient2(?string $tel_client2): static
    {
        $this->tel_client2 = $tel_client2;

        return $this;
    }

    public function getMailClient(): ?string
    {
        return $this->mail_client;
    }

    public function setMailClient(?string $mail_client): static
    {
        $this->mail_client = $mail_client;

        return $this;
    }

    public function getFaxClient(): ?string
    {
        return $this->fax_client;
    }

    public function setFaxClient(?string $fax_client): static
    {
        $this->fax_client = $fax_client;

        return $this;
    }

    public function getNumComptable(): ?int
    {
        return $this->num_comptable;
    }

    public function setNumComptable(?int $num_comptable): static
    {
        $this->num_comptable = $num_comptable;

        return $this;
    }

    public function getIdTva(): ?int
    {
        return $this->id_tva;
    }

    public function setIdTva(?int $id_tva): static
    {
        $this->id_tva = $id_tva;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->date_creation;
    }

    public function setDateCreation(?\DateTimeInterface $date_creation): static
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    public function getNumTva(): ?string
    {
        return $this->num_tva;
    }

    public function setNumTva(?string $num_tva): static
    {
        $this->num_tva = $num_tva;

        return $this;
    }

    public function getKbis(): ?string
    {
        return $this->kbis;
    }

    public function setKbis(?string $kbis): static
    {
        $this->kbis = $kbis;

        return $this;
    }

    public function getRib(): ?string
    {
        return $this->rib;
    }

    public function setRib(?string $rib): static
    {
        $this->rib = $rib;

        return $this;
    }

    public function getSiret(): ?string
    {
        return $this->siret;
    }

    public function setSiret(?string $siret): static
    {
        $this->siret = $siret;

        return $this;
    }

    public function getSiteWeb(): ?string
    {
        return $this->site_web;
    }

    public function setSiteWeb(?string $site_web): static
    {
        $this->site_web = $site_web;

        return $this;
    }

    public function getFormeJuridique(): ?string
    {
        return $this->forme_juridique;
    }

    public function setFormeJuridique(?string $forme_juridique): static
    {
        $this->forme_juridique = $forme_juridique;

        return $this;
    }

    public function getGrilleTarifaire(): ?string
    {
        return $this->grille_tarifaire;
    }

    public function setGrilleTarifaire(?string $grille_tarifaire): static
    {
        $this->grille_tarifaire = $grille_tarifaire;

        return $this;
    }

    public function getGrilleTarifaireSurnom(): ?string
    {
        return $this->grilleTarifaireSurnom;
    }

    public function setGrilleTarifaireSurnom(?string $grilleTarifaireSurnom): static
    {
        $this->grilleTarifaireSurnom = $grilleTarifaireSurnom;

        return $this;
    }

    /**
     * @return Collection<int, Adresse>
     */
    public function getAdresses(): Collection
    {
        return $this->adresses;
    }

    public function addAdress(Adresse $adress): static
    {
        if (!$this->adresses->contains($adress)) {
            $this->adresses->add($adress);
            $adress->setClients($this);
        }

        return $this;
    }

    public function removeAdress(Adresse $adress): static
    {
        if ($this->adresses->removeElement($adress)) {
            // set the owning side to null (unless already changed)
            if ($adress->getClients() === $this) {
                $adress->setClients(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Devis>
     */
    public function getDevis(): Collection
    {
        return $this->devis;
    }

    public function addDevi(Devis $devi): static
    {
        if (!$this->devis->contains($devi)) {
            $this->devis->add($devi);
            $devi->setRechercheClient($this);
        }

        return $this;
    }

    public function removeDevi(Devis $devi): static
    {
        if ($this->devis->removeElement($devi)) {
            // set the owning side to null (unless already changed)
            if ($devi->getRechercheClient() === $this) {
                $devi->setRechercheClient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Idcontactidclient>
     */
    public function getIdcontactidclients(): Collection
    {
        return $this->idcontactidclients;
    }

    public function addIdcontactidclient(Idcontactidclient $idcontactidclient): static
    {
        if (!$this->idcontactidclients->contains($idcontactidclient)) {
            $this->idcontactidclients->add($idcontactidclient);
            $idcontactidclient->setIdClient($this);
        }

        return $this;
    }

    public function removeIdcontactidclient(Idcontactidclient $idcontactidclient): static
    {
        if ($this->idcontactidclients->removeElement($idcontactidclient)) {
            // set the owning side to null (unless already changed)
            if ($idcontactidclient->getIdClient() === $this) {
                $idcontactidclient->setIdClient(null);
            }
        }

        return $this;
    }
}
