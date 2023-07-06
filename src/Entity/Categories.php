<?php

namespace App\Entity;

use App\Repository\CategoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriesRepository::class)]
class Categories
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $title = null;

    #[ORM\OneToMany(mappedBy: 'categories', targetEntity: Dishes::class)]
    private Collection $dishes;

    #[ORM\ManyToMany(targetEntity: Menus::class, mappedBy: 'categories')]
    private Collection $menuses;

    public function __construct()
    {
        $this->dishes = new ArrayCollection();
        $this->menuses = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->title;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function gettitle(): ?string
    {
        return $this->title;
    }

    public function settitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return Collection<int, Dishes>
     */
    public function getDishes(): Collection
    {
        return $this->dishes;
    }

    public function addDish(Dishes $dish): self
    {
        if (!$this->dishes->contains($dish)) {
            $this->dishes->add($dish);
            $dish->setCategories($this);
        }

        return $this;
    }

    public function removeDish(Dishes $dish): self
    {
        if ($this->dishes->removeElement($dish)) {
            // set the owning side to null (unless already changed)
            if ($dish->getCategories() === $this) {
                $dish->setCategories(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Menus>
     */
    public function getMenuses(): Collection
    {
        return $this->menuses;
    }

    public function addMenus(Menus $menus): self
    {
        if (!$this->menuses->contains($menus)) {
            $this->menuses->add($menus);
            $menus->addCategory($this);
        }

        return $this;
    }

    public function removeMenus(Menus $menus): self
    {
        if ($this->menuses->removeElement($menus)) {
            $menus->removeCategory($this);
        }

        return $this;
    }
}
