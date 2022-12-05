<?php

namespace App\Entity;

use App\Repository\LeconRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LeconRepository::class)]
class Lecon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 50)]
    private ?string $heure = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Moniteur $idmoniteur = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Eleve $ideleve = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Vehicule $immatriculation = null;

    #[ORM\Column]
    private ?int $reglee = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getHeure(): ?string
    {
        return $this->heure;
    }

    public function setHeure(string $heure): self
    {
        $this->heure = $heure;

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

    public function getIdeleve(): ?Eleve
    {
        return $this->ideleve;
    }

    public function setIdeleve(?Eleve $ideleve): self
    {
        $this->ideleve = $ideleve;

        return $this;
    }

    public function getImmatriculation(): ?Vehicule
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(?Vehicule $immatriculation): self
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getReglee(): ?int
    {
        return $this->reglee;
    }

    public function setReglee(int $reglee): self
    {
        $this->reglee = $reglee;

        return $this;
    }
}
