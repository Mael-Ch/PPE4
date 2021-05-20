<?php

namespace App\Entity;

use App\Repository\PartieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PartieRepository::class)
 */
class Partie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $temps;
	


    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $win;

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

    public function getTemps(): ?\DateTimeInterface
    {
        return $this->temps;
    }

    public function setTemps(?\DateTimeInterface $temps): self
    {
        $this->temps = $temps;

        return $this;
    }

    public function getWin(): ?int
    {
        return $this->win;
    }

    public function setWin(?int $win): self
    {
        $this->win = $win;

        return $this;
    }
}
