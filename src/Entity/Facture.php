<?php

namespace App\Entity;

use App\Repository\FactureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FactureRepository::class)
 */
class Facture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbCredit;

    /**
     * @ORM\Column(type="integer")
     */
    private $client;

    /**
     * @ORM\OneToMany(targetEntity=Client::class, mappedBy="facture")
     */
    private $credit;

    public function __construct()
    {
        $this->credit = new ArrayCollection();
    }

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

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getNbCredit(): ?int
    {
        return $this->nbCredit;
    }

    public function setNbCredit(int $nbCredit): self
    {
        $this->nbCredit = $nbCredit;

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

    /**
     * @return Collection|Client[]
     */
    public function getCredit(): Collection
    {
        return $this->credit;
    }

    public function addCredit(Client $credit): self
    {
        if (!$this->credit->contains($credit)) {
            $this->credit[] = $credit;
            $credit->setFacture($this);
        }

        return $this;
    }

    public function removeCredit(Client $credit): self
    {
        if ($this->credit->removeElement($credit)) {
            // set the owning side to null (unless already changed)
            if ($credit->getFacture() === $this) {
                $credit->setFacture(null);
            }
        }

        return $this;
    }
}
