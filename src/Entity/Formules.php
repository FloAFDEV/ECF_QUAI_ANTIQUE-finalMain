<?php

namespace App\Entity;

use App\Repository\FormulesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormulesRepository::class)]
class Formules
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $dish_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDishId(): ?int
    {
        return $this->dish_id;
    }

    public function setDishId(int $dish_id): self
    {
        $this->dish_id = $dish_id;

        return $this;
    }
}
