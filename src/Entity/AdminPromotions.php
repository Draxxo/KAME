<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdminPromotionsRepository")
 */
class AdminPromotions
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
    private $idPromotion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $promotionName;

    /**
     * @ORM\Column(type="integer")
     */
    private $promotionIsActive;

    public function getId()
    {
        return $this->id;
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

    public function getPromotionName(): ?string
    {
        return $this->promotionName;
    }

    public function setPromotionName(string $promotionName): self
    {
        $this->promotionName = $promotionName;

        return $this;
    }

    public function getPromotionIsActive(): ?int
    {
        return $this->promotionIsActive;
    }

    public function setPromotionIsActive(int $promotionIsActive): self
    {
        $this->promotionIsActive = $promotionIsActive;

        return $this;
    }
}
