<?php

namespace App\Entity;

use App\Repository\FonctionUtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FonctionUtilisateurRepository::class)
 */
class FonctionUtilisateur
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
    private $id_utilisateur;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_fonction;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUtilisateur(): ?int
    {
        return $this->id_utilisateur;
    }

    public function setIdUtilisateur(int $id_utilisateur): self
    {
        $this->id_utilisateur = $id_utilisateur;

        return $this;
    }

    public function getIdFonction(): ?int
    {
        return $this->id_fonction;
    }

    public function setIdFonction(int $id_fonction): self
    {
        $this->id_fonction = $id_fonction;

        return $this;
    }
}
