<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdminEquipementsRepository")
 */
class AdminEquipements
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
    private $equipementId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $equipementDenimonation;

    /**
     * @ORM\Column(type="smallint")
     */
    private $equipementStatus;

    /**
     * @ORM\Column(type="smallint")
     */
    private $equimentAcces;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $equipementReference;

    public function getId()
    {
        return $this->id;
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

    public function getEquipementDenimonation(): ?string
    {
        return $this->equipementDenimonation;
    }

    public function setEquipementDenimonation(string $equipementDenimonation): self
    {
        $this->equipementDenimonation = $equipementDenimonation;

        return $this;
    }

    public function getEquipementStatus(): ?int
    {
        return $this->equipementStatus;
    }

    public function setEquipementStatus(int $equipementStatus): self
    {
        $this->equipementStatus = $equipementStatus;

        return $this;
    }

    public function getEquimentAcces(): ?int
    {
        return $this->equimentAcces;
    }

    public function setEquimentAcces(int $equimentAcces): self
    {
        $this->equimentAcces = $equimentAcces;

        return $this;
    }

    public function getEquipementReference(): ?string
    {
        return $this->equipementReference;
    }

    public function setEquipementReference(string $equipementReference): self
    {
        $this->equipementReference = $equipementReference;

        return $this;
    }
}
