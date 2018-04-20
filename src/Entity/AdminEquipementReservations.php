<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdminEquipementReservationsRepository")
 */
class AdminEquipementReservations
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $reservationId;

    /**
     * @ORM\Column(type="date")
     */
    private $reservationDate;

    /**
     * @ORM\Column(type="date")
     */
    private $reservationDuration;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reservationLabel;

    /**
     * @ORM\Column(type="smallint")
     */
    private $reservationStatus;

    /**
     * @ORM\Column(type="integer")
     */
    private $equipementId;

    public function getId()
    {
        return $this->id;
    }

    public function getReservationId(): ?int
    {
        return $this->reservationId;
    }

    public function setReservationId(int $reservationId): self
    {
        $this->reservationId = $reservationId;

        return $this;
    }

    public function getReservationDate(): ?\DateTimeInterface
    {
        return $this->reservationDate;
    }

    public function setReservationDate(\DateTimeInterface $reservationDate): self
    {
        $this->reservationDate = $reservationDate;

        return $this;
    }

    public function getReservationDuration(): ?\DateTimeInterface
    {
        return $this->reservationDuration;
    }

    public function setReservationDuration(\DateTimeInterface $reservationDuration): self
    {
        $this->reservationDuration = $reservationDuration;

        return $this;
    }

    public function getReservationLabel(): ?string
    {
        return $this->reservationLabel;
    }

    public function setReservationLabel(string $reservationLabel): self
    {
        $this->reservationLabel = $reservationLabel;

        return $this;
    }

    public function getReservationStatus(): ?int
    {
        return $this->reservationStatus;
    }

    public function setReservationStatus(int $reservationStatus): self
    {
        $this->reservationStatus = $reservationStatus;

        return $this;
    }

    public function getEquipementId(): ?int
    {
        return $this->equipementId;
    }

    public function setEquipementId(int $equipementId): self
    {
        $this->equipementId = $equipementId;

        return $this;
    }
}
