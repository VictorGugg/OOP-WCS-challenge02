<?php

// Bicycle.php

// Création de la classe Bicycle
class Bicycle
{
    // Propriétés
    private string $color;

    private int $currentSpeed;

    private int $nbSeats = 1;

    private int $nbWheels = 2;

    // Méthodes
    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !!<br>";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!<br>";
        }
        $sentence .= "I'm stopped !<br>";
        return $sentence;
    }

    // getters and setters (en public pour pouvoir y accéder depuis l'ext.)
    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }
}