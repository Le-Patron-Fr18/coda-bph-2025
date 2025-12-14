<?php

class depense
{
    public function __construct(private int $id, private string $prenom, private int $montant, private string $motif, private string $id_life)
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

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    public function getMontant(): int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): void
    {
        $this->montant = $montant;
    }

    public function getMotif(): string
    {
        return $this->motif;
    }

    public function setMotif(string $motif): void
    {
        $this->motif = $motif;
    }

    public function getId_life(): string
    {
        return $this->id_life;
    }

    public function setId_life(string $id_life): void
    {
        $this->id_life = $id_life;
    }



    public function toArray() : array
    {
        return [
            'id' => $this->id,
            'prenom' => $this->prenom,
            'montant' => $this->montant,
            'motif' => $this->motif,
            'id_life' => $this->id_life
        ];
    }
}