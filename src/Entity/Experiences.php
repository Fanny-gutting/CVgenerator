<?php

namespace App\Entity;

use App\Repository\ExperiencesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExperiencesRepository::class)
 */
class Experiences
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $nameEntreprise;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $anneeDebut;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $anneeFin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNameEntreprise(): ?string
    {
        return $this->nameEntreprise;
    }

    public function setNameEntreprise(?string $nameEntreprise): self
    {
        $this->nameEntreprise = $nameEntreprise;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAnneeDebut(): ?string
    {
        return $this->anneeDebut;
    }

    public function setAnneeDebut(?string $anneeDebut): self
    {
        $this->anneeDebut = $anneeDebut;

        return $this;
    }

    public function getAnneeFin(): ?string
    {
        return $this->anneeFin;
    }

    public function setAnneeFin(?string $anneeFin): self
    {
        $this->anneeFin = $anneeFin;

        return $this;
    }
}
