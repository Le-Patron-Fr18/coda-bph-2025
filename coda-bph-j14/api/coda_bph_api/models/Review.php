<?php

class Review
{
    public function __construct(private string $content, private string $author, private int $starNumber, private Product $product, private ? int $id = null)
    {

    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function getStarNumber(): int
    {
        return $this->starNumber;
    }

    public function setStarNumber(int $starNumber): void
    {
        $this->starNumber = $starNumber;
    }

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function setProduct(Product $product): void
    {
        $this->product = $product;
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
            'content' => $this->content,
            'author' => $this->author,
            'starNumber' => $this->starNumber,
            'product' => $this->product->toArray()
        ];
    }
}