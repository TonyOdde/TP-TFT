<?php

namespace Models;

class Unit
{
    private int $id;
    private string $name;
    private int $cost;
    private int $origin;
    private string $nameOrigin;
    private string $url_img;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCost(): int
    {
        return $this->cost;
    }

    public function setCost(int $cost): void
    {
        $this->cost = $cost;
    }

    public function getOrigin(): int
    {
        return $this->origin;
    }

    public function setOrigin(int $origin): void
    {
        $this->origin = $origin;
    }

    public function getUrlImg(): string
    {
        return $this->url_img;
    }

    public function setUrlImg(string $url_img): void
    {
        $this->url_img = $url_img;
    }

    public function getNameOrigin(): string
    {
        return $this->nameOrigin;
    }

    public function setNameOrigin(string $nameOrigin): void
    {
        $this->nameOrigin = $nameOrigin;
    }

}