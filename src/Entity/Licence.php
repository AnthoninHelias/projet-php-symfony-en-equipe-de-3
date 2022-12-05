<?php

namespace App\Entity;

use App\Repository\LicenceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LicenceRepository::class)]
class Licence
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateobtention = null;

    #[ORM\Column]
    private ?int $codelicence = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Moniteur $idmoniteur = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Categorie $codecategorie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateobtention(): ?\DateTimeInterface
    {
        return $this->dateobtention;
    }

    public function setDateobtention(\DateTimeInterface $dateobtention): self
    {
        $this->dateobtention = $dateobtention;

        return $this;
    }

    public function getCodelicence(): ?int
    {
        return $this->codelicence;
    }

    public function setCodelicence(int $codelicence): self
    {
        $this->codelicence = $codelicence;

        return $this;
    }

    public function getIdmoniteur(): ?Moniteur
    {
        return $this->idmoniteur;
    }

    public function setIdmoniteur(?Moniteur $idmoniteur): self
    {
        $this->idmoniteur = $idmoniteur;

        return $this;
    }

    public function getCodecategorie(): ?Categorie
    {
        return $this->codecategorie;
    }

    public function setCodecategorie(?Categorie $codecategorie): self
    {
        $this->codecategorie = $codecategorie;

        return $this;
    }
}
