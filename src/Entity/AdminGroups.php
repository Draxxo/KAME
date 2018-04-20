<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdminGroupsRepository")
 */
class AdminGroups
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $groupId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $groupName;

    /**
     * @ORM\Column(type="smallint")
     */
    private $groupType;

    /**
     * @ORM\Column(type="int")
     */
    private $idPromotion;

    public function getGroupId()
    {
        return $this->groupId;
    }

    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    public function setGroupName(string $groupName): self
    {
        $this->groupName = $groupName;

        return $this;
    }

    public function getGroupType(): ?int
    {
        return $this->groupType;
    }

    public function setGroupType(int $groupType): self
    {
        $this->groupType = $groupType;

        return $this;
    }

    public function getIdPromotion(): ?int
    {
        return $this->idPromotion;
    }

    public function setIdPromotion(int $idPromotion): self
    {
        $this->idPromotion = $idPromotion;

        return $this;
    }
}
