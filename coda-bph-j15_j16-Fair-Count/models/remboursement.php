<?php

class remboursement
{
    public function __construct(private int $id, private string $donner_prenom, private int $coût, private string $recevoir_prenom)
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

    public function getDonner_prenom(): string
    {
        return $this->donner_prenom;
    }

    public function setDonner_prenom(string $donner_prenom): void
    {
        $this->donner_prenom = $donner_prenom;
    }

    public function getCoût(): int
    {
        return $this->coût;
    }

    public function setCoût(int $coût): void
    {
        $this->coût = $coût;
    }

    public function getRecevoir_prenom(): string
    {
        return $this->recevoir_prenom;
    }

    public function setRecevoir_prenom(string $recevoir_prenom): void
    {
        $this->recevoir_prenom = $recevoir_prenom;
    }
    public function toArray() : array
    {
        return [
            'id' => $this->id,
            'donner_prenom' => $this->donner_prenom,
            'coût' => $this->coût,
            'recevoir_prenom' => $this->recevoir_prenom
        ];
    }
}