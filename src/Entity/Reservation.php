<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $ref_reservation = null;

    #[ORM\Column(length: 255)]
    private ?string $NomPassager = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateDepart = null;

    #[ORM\Column(length: 255)]
    private ?string $villeDepart = null;

    #[ORM\Column(length: 255)]
    private ?string $villeArrivee = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?TypeBillet $typeBillet = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRefReservation(): ?string
    {
        return $this->ref_reservation;
    }

    public function setRefReservation(string $ref_reservation): static
    {
        $this->ref_reservation = $ref_reservation;

        return $this;
    }

    public function getNomPassager(): ?string
    {
        return $this->NomPassager;
    }

    public function setNomPassager(string $NomPassager): static
    {
        $this->NomPassager = $NomPassager;

        return $this;
    }

    public function getDateDepart(): ?\DateTimeInterface
    {
        return $this->dateDepart;
    }

    public function setDateDepart(\DateTimeInterface $dateDepart): static
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    public function getVilleDepart(): ?string
    {
        return $this->villeDepart;
    }

    public function setVilleDepart(string $villeDepart): static
    {
        $this->villeDepart = $villeDepart;

        return $this;
    }

    public function getVilleArrivee(): ?string
    {
        return $this->villeArrivee;
    }

    public function setVilleArrivee(string $villeArrivee): static
    {
        $this->villeArrivee = $villeArrivee;

        return $this;
    }

    public function getTypeBillet(): ?TypeBillet
    {
        return $this->typeBillet;
    }

    public function setTypeBillet(?TypeBillet $typeBillet): static
    {
        $this->typeBillet = $typeBillet;

        return $this;
    }
}
