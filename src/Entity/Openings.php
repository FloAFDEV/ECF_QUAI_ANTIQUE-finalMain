<?php

namespace App\Entity;

use App\Repository\OpeningsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OpeningsRepository::class)]
class Openings
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $day = null;

    #[ORM\Column]
    private ?bool $morning_state = null;

    #[ORM\Column]
    private ?bool $evening_state = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $morning_open = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $morning_close = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $evening_open = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $evening_close = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDay(): ?string
    {
        return $this->day;
    }

    public function setDay(string $day): self
    {
        $this->day = $day;

        return $this;
    }

    public function isMorningState(): ?bool
    {
        return $this->morning_state;
    }

    public function setMorningState(bool $morning_state): self
    {
        $this->morning_state = $morning_state;

        return $this;
    }

    public function isEveningState(): ?bool
    {
        return $this->evening_state;
    }

    public function setEveningState(bool $evening_state): self
    {
        $this->evening_state = $evening_state;

        return $this;
    }

    public function getMorningOpen(): ?\DateTimeInterface
    {
        return $this->morning_open;
    }

    public function setMorningOpen(\DateTimeInterface $morning_open): self
    {
        $this->morning_open = $morning_open;

        return $this;
    }

    public function getMorningClose(): ?\DateTimeInterface
    {
        return $this->morning_close;
    }

    public function setMorningClose(\DateTimeInterface $morning_close): self
    {
        $this->morning_close = $morning_close;

        return $this;
    }

    public function getEveningOpen(): ?\DateTimeInterface
    {
        return $this->evening_open;
    }

    public function setEveningOpen(\DateTimeInterface $evening_open): self
    {
        $this->evening_open = $evening_open;

        return $this;
    }

    public function getEveningClose(): ?\DateTimeInterface
    {
        return $this->evening_close;
    }

    public function setEveningClose(\DateTimeInterface $evening_close): self
    {
        $this->evening_close = $evening_close;

        return $this;
    }
}
