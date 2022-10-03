<?php

// Car.php

// Création de la classe Car
class Car
{
    // Propriétés
    private int $numberWheels = 4;

    private int $currentSpeed;

    private int $currentEnergyLevel;
    
    // Les propriétés suivantes sont créées via la promotion des propriétés dans le constructeur
    // private string $color;

    // private int $numberSeats = 5;

    // private string $energyType;


    // Méthodes
    public function __construct(private string $color, private int $numberSeats, private string $energyType) {}

    public function start(): string
    {
        $this->currentSpeed = 0;

        return "Vroum ! The engine has started.<br>";
    }

    public function forward(): string
    {
        $this->currentSpeed = 50;

        return "Go !!<br>";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed -= 5;
            $sentence .= "Brake, brake, BRAKE !!!<br>";
        }
        $sentence .= "I'm stopped !<br>";
        return $sentence;
    }

    // getters and setters (en public pour pouvoir y accéder depuis l'ext.)

    public function getNumberWheels(): int
    {
        return $this->numberWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNumberSeats(): int
    {
        return $this->getNumberSeats;
    }

    public function getEnergyType(): string
    {
        return $this->energyType;
    }

    public function getEnergyLevel(): string
    {
        return $this->energyLevel;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        if($energyLevel >= 0) {
            $this->energyLevel = $energyLevel;
        }
    }
}