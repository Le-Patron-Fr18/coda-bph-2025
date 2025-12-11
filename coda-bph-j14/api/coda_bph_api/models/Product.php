<?php

class Product
{
    public function __construct(private string $name, private string $description, private int $price, private string $imageURL, private ProductCategory $category, private ? int $id = null)
    {

    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function getImageURL(): string
    {
        return $this->imageURL;
    }

    public function setImageURL(string $imageURL): void
    {
        $this->imageURL = $imageURL;
    }

    public function getCategory(): ProductCategory
    {
        return $this->category;
    }

    public function setCategory(ProductCategory $category): void
    {
        $this->category = $category;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function toArray() : array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'price' => (float ) $this->price / 100,
            'imageURL' => $this->imageURL,
            'category' => $this->category->toArray()
        ];
    }
}