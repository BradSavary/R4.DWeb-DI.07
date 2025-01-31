<?php

namespace App\Entity;

class Lego
{
    private int $id;
    private string $name;
    private string $collection;
    private string $description;
    private float $price;
    private int $pieces;
    private string $boxImage;
    private string $legoImage;

    public function __construct()
    {
        $this->id = 10252;
        $this->name = 'La coccinelle Volkwagen';
        $this->collection = 'Creator Expert';
        $this->description = 'Construis une réplique LEGO® Creator Expert de l\'automobile la plus populaire au monde. Ce magnifique modèle LEGO est plein de détails authentiques qui capturent le charme et la personnalité de la voiture, notamment un coloris bleu ciel, des ailes arrondies, des jantes blanches avec des enjoliveurs caractéristiques, des phares ronds et des clignotants montés sur les ailes.';
        $this->price = 94.99;
        $this->pieces = 1167;
        $this->boxImage = 'LEGO_10252_Box.png';
        $this->legoImage = 'LEGO_10252_Main.jpg';
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCollection(): string
    {
        return $this->collection;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getPieces(): int
    {
        return $this->pieces;
    }

    public function getBoxImage(): string
    {
        return $this->boxImage;
    }

    public function getlegoImage(): string
    {
        return $this->legoImage;
    }
    public function setId(int $id): void
{
    $this->id = $id;
}

public function setName(string $name): void
{
    $this->name = $name;
}

public function setCollection(string $collection): void
{
    $this->collection = $collection;
}

public function setDescription(string $description): void
{
    $this->description = $description;
}

public function setPrice(float $price): void
{
    $this->price = $price;
}

public function setPieces(int $pieces): void
{
    $this->pieces = $pieces;
}

public function setBoxImage(string $boxImage): void
{
    $this->boxImage = $boxImage;
}

public function setlegoImage(string $legoImage): void
{
    $this->legoImage = $legoImage;
}
}
?>
