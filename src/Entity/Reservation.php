<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $client;

    /**
     * @ORM\Column(type="integer")
     */
    private $partie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
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

    public function getClient(): ?int
    {
        return $this->client;
    }

    public function setClient(int $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getPartie(): ?int
    {
        return $this->partie;
    }

    public function setPartie(int $partie): self
    {
        $this->partie = $partie;

        return $this;
    }
}
