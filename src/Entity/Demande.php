<?php

namespace App\Entity;

use App\Repository\DemandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DemandeRepository::class)
 * @ORM\Table(name="ghs_demande")
 */
class Demande
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
    private $idDemandeur;

    /**
     * @ORM\Column(type="integer")
     */
    private $idCollaborateur;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateFin;

    /**
     * @ORM\Column(type="integer")
     */
    private $duree;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tache;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statut;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idCD1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idRH1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idDU1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idCD2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idRH2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idDU2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $statutCD1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $statutRH1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $statutDU1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $statutCD2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $statutRH2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $statutDU2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $dureeReelle;

    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    private $payee;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdDemandeur(): ?int
    {
        return $this->idDemandeur;
    }

    public function setIdDemandeur(int $idDemandeur): self
    {
        $this->idDemandeur = $idDemandeur;

        return $this;
    }

    public function getIdCollaborateur(): ?int
    {
        return $this->idCollaborateur;
    }

    public function setIdCollaborateur(int $idCollaborateur): self
    {
        $this->idCollaborateur = $idCollaborateur;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getTache(): ?string
    {
        return $this->tache;
    }

    public function setTache(string $tache): self
    {
        $this->tache = $tache;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getIdCD1(): ?int
    {
        return $this->idCD1;
    }

    public function setIdCD1(?int $idCD1): self
    {
        $this->idCD1 = $idCD1;

        return $this;
    }

    public function getIdRH1(): ?int
    {
        return $this->idRH1;
    }

    public function setIdRH1(?int $idRH1): self
    {
        $this->idRH1 = $idRH1;

        return $this;
    }

    public function getIdDU1(): ?int
    {
        return $this->idDU1;
    }

    public function setIdDU1(?int $idDU1): self
    {
        $this->idDU1 = $idDU1;

        return $this;
    }

    public function getIdCD2(): ?int
    {
        return $this->idCD2;
    }

    public function setIdCD2(?int $idCD2): self
    {
        $this->idCD2 = $idCD2;

        return $this;
    }

    public function getIdRH2(): ?int
    {
        return $this->idRH2;
    }

    public function setIdRH2(?int $idRH2): self
    {
        $this->idRH2 = $idRH2;

        return $this;
    }

    public function getIdDU2(): ?int
    {
        return $this->idDU2;
    }

    public function setIdDU2(?int $idDU2): self
    {
        $this->idDU2 = $idDU2;

        return $this;
    }

    public function getStatutCD1(): ?string
    {
        return $this->statutCD1;
    }

    public function setStatutCD1(?string $statutCD1): self
    {
        $this->statutCD1 = $statutCD1;

        return $this;
    }

    public function getStatutRH1(): ?string
    {
        return $this->statutRH1;
    }

    public function setStatutRH1(?string $statutRH1): self
    {
        $this->statutRH1 = $statutRH1;

        return $this;
    }

    public function getStatutDU1(): ?string
    {
        return $this->statutDU1;
    }

    public function setStatutDU1(?string $statutDU1): self
    {
        $this->statutDU1 = $statutDU1;

        return $this;
    }

    public function getStatutCD2(): ?string
    {
        return $this->statutCD2;
    }

    public function setStatutCD2(?string $statutCD2): self
    {
        $this->statutCD2 = $statutCD2;

        return $this;
    }

    public function getStatutRH2(): ?string
    {
        return $this->statutRH2;
    }

    public function setStatutRH2(?string $statutRH2): self
    {
        $this->statutRH2 = $statutRH2;

        return $this;
    }

    public function getStatutDU2(): ?string
    {
        return $this->statutDU2;
    }

    public function setStatutDU2(?string $statutDU2): self
    {
        $this->statutDU2 = $statutDU2;

        return $this;
    }

    public function getDureeReelle(): ?int
    {
        return $this->dureeReelle;
    }

    public function setDureeReelle(?int $dureeReelle): self
    {
        $this->dureeReelle = $dureeReelle;

        return $this;
    }

    public function getPayee(): ?string
    {
        return $this->payee;
    }

    public function setPayee(?string $payee): self
    {
        $this->payee = $payee;

        return $this;
    }
}
