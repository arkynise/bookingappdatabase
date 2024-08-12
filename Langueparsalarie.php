<?php

namespace App\Entity;

use App\Repository\LangueparsalarieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LangueparsalarieRepository::class)]
class Langueparsalarie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'langueparsalaries')]
    private ?Salarie $idSalarie = null;

    #[ORM\ManyToOne(inversedBy: 'langueparsalaries')]
    private ?Langue $idLangue = null;

    #[ORM\ManyToOne(inversedBy: 'langueparsalaries')]
    private ?Niveaulangue $idNiveauLangue = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdSalarie(): ?Salarie
    {
        return $this->idSalarie;
    }

    public function setIdSalarie(?Salarie $idSalarie): static
    {
        $this->idSalarie = $idSalarie;

        return $this;
    }

    public function getIdLangue(): ?Langue
    {
        return $this->idLangue;
    }

    public function setIdLangue(?Langue $idLangue): static
    {
        $this->idLangue = $idLangue;

        return $this;
    }

    public function getIdNiveauLangue(): ?Niveaulangue
    {
        return $this->idNiveauLangue;
    }

    public function setIdNiveauLangue(?Niveaulangue $idNiveauLangue): static
    {
        $this->idNiveauLangue = $idNiveauLangue;

        return $this;
    }
}
