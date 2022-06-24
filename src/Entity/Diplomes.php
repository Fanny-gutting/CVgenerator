<?php

namespace App\Entity;

use App\Repository\DiplomesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DiplomesRepository::class)
 */
class Diplomes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $intitule;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nameEcole;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntitule(): ?string
    {
        return $this->intitule;
    }

    public function setIntitule(?string $intitule): self
    {
        $this->intitule = $intitule;

        return $this;
    }

    public function getNameEcole(): ?string
    {
        return $this->nameEcole;
    }

    public function setNameEcole(?string $nameEcole): self
    {
        $this->nameEcole = $nameEcole;

        return $this;
    }
}
