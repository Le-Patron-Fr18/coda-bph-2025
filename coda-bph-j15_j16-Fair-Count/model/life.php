<?php

class users
{
    public function __construct(private int $id, private string $daly)
    {

    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getDaly(): string
    {
        return $this->daly;
    }

    public function setDaly(string $daly): void
    {
        $this->daly = $daly;
    }
    public function toArray() : array
    {
        return [
            'id' => $this->id,
            'daly' => $this->daly
        ];
    }
}