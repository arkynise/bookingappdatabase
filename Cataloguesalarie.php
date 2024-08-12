<?php

namespace App\Entity;

use App\Repository\CataloguesalarieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CataloguesalarieRepository::class)]
class Cataloguesalarie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $noteClient = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $obsClient = null;

    #[ORM\ManyToOne(inversedBy: 'cataloguesalaries')]
    private ?Salarie $idSal = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $modifSal = null;

    #[ORM\Column(nullable: true)]
    private ?int $age = null;

    #[ORM\Column(nullable: true)]
    private ?int $taille = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $permisB = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tailleVeste = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $taillePantalon = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pointure = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lvUn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lvDeux = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lvTrois = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lvQuatre = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $formation = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $backModify = null;

    /**
     * @var Collection<int, Catalogueexperience>
     */
    #[ORM\OneToMany(targetEntity: Catalogueexperience::class, mappedBy: 'idCatSal')]
    private Collection $catalogueexperiences;

    #[ORM\ManyToOne(inversedBy: 'cataloguesalaries')]
    private ?Catalogue $idCat = null;

    public function __construct()
    {
        $this->catalogueexperiences = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNoteClient(): ?int
    {
        return $this->noteClient;
    }

    public function setNoteClient(?int $noteClient): static
    {
        $this->noteClient = $noteClient;

        return $this;
    }

    public function getObsClient(): ?string
    {
        return $this->obsClient;
    }

    public function setObsClient(?string $obsClient): static
    {
        $this->obsClient = $obsClient;

        return $this;
    }

    public function getIdSal(): ?Salarie
    {
        return $this->idSal;
    }

    public function setIdSal(?Salarie $idSal): static
    {
        $this->idSal = $idSal;

        return $this;
    }

    public function getModifSal(): ?int
    {
        return $this->modifSal;
    }

    public function setModifSal(?int $modifSal): static
    {
        $this->modifSal = $modifSal;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function getTaille(): ?int
    {
        return $this->taille;
    }

    public function setTaille(?int $taille): static
    {
        $this->taille = $taille;

        return $this;
    }

    public function getPermisB(): ?int
    {
        return $this->permisB;
    }

    public function setPermisB(?int $permisB): static
    {
        $this->permisB = $permisB;

        return $this;
    }

    public function getTailleVeste(): ?string
    {
        return $this->tailleVeste;
    }

    public function setTailleVeste(?string $tailleVeste): static
    {
        $this->tailleVeste = $tailleVeste;

        return $this;
    }

    public function getTaillePantalon(): ?string
    {
        return $this->taillePantalon;
    }

    public function setTaillePantalon(?string $taillePantalon): static
    {
        $this->taillePantalon = $taillePantalon;

        return $this;
    }

    public function getPointure(): ?string
    {
        return $this->pointure;
    }

    public function setPointure(?string $pointure): static
    {
        $this->pointure = $pointure;

        return $this;
    }

    public function getLvUn(): ?string
    {
        return $this->lvUn;
    }

    public function setLvUn(?string $lvUn): static
    {
        $this->lvUn = $lvUn;

        return $this;
    }

    public function getLvDeux(): ?string
    {
        return $this->lvDeux;
    }

    public function setLvDeux(?string $lvDeux): static
    {
        $this->lvDeux = $lvDeux;

        return $this;
    }

    public function getLvTrois(): ?string
    {
        return $this->lvTrois;
    }

    public function setLvTrois(?string $lvTrois): static
    {
        $this->lvTrois = $lvTrois;

        return $this;
    }

    public function getLvQuatre(): ?string
    {
        return $this->lvQuatre;
    }

    public function setLvQuatre(?string $lvQuatre): static
    {
        $this->lvQuatre = $lvQuatre;

        return $this;
    }

    public function getFormation(): ?string
    {
        return $this->formation;
    }

    public function setFormation(?string $formation): static
    {
        $this->formation = $formation;

        return $this;
    }

    public function getBackModify(): ?int
    {
        return $this->backModify;
    }

    public function setBackModify(?int $backModify): static
    {
        $this->backModify = $backModify;

        return $this;
    }

    /**
     * @return Collection<int, Catalogueexperience>
     */
    public function getCatalogueexperiences(): Collection
    {
        return $this->catalogueexperiences;
    }

    public function addCatalogueexperience(Catalogueexperience $catalogueexperience): static
    {
        if (!$this->catalogueexperiences->contains($catalogueexperience)) {
            $this->catalogueexperiences->add($catalogueexperience);
            $catalogueexperience->setIdCatSal($this);
        }

        return $this;
    }

    public function removeCatalogueexperience(Catalogueexperience $catalogueexperience): static
    {
        if ($this->catalogueexperiences->removeElement($catalogueexperience)) {
            // set the owning side to null (unless already changed)
            if ($catalogueexperience->getIdCatSal() === $this) {
                $catalogueexperience->setIdCatSal(null);
            }
        }

        return $this;
    }

    public function getIdCat(): ?Catalogue
    {
        return $this->idCat;
    }

    public function setIdCat(?Catalogue $idCat): static
    {
        $this->idCat = $idCat;

        return $this;
    }
}
