<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdminUserGroupsRepository")
 */
class AdminUserGroups
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $Users_userId;

    /**
     * @ORM\Column(type="integer")
     */
    private $Groups_groupId;

    public function getUserUserId() : ?int
    {
        return $this->Users_userId;
    }

    public function getGroupsGroupId(): ?int
    {
        return $this->Groups_groupId;
    }
}
