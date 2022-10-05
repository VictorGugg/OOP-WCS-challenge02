<?php

/* Vehicle.php
Creating a class for all Vehicle-type object*/

Class Vehicle
{
    // Properties

    protected string $color;

    protected int $numberWheels;

    protected int $currentSpeed;

    protected int $numberSeats;

    public function __construct(string $color, int $numberSeats)
    {
        $this->color = $color;
        $this->numberSeats = $numberSeats;
    }


    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Let's go !!<br>";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed -= 5;
            $sentence .= "Brake !!!<br>";
        }
        $sentence .= "I'm stopped !<br>";
        return $sentence;
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

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNumberSeats(): int
    {
        return $this->getNumberSeats;
    }

    public function setNumberSeats(int $numberSeats): void
    {
        if($numberSeats >= 1) {
           $this->numberSeats = $numberSeats;
        }
    }

    public function getNumberWheels(): int
    {
        return $this->numberWheels;
    }

    public function setNumberWheels(int $numberWheels): void
    {
        if($numberWheels >= 2) {
            $this->numberWheels = $numberWheels;
        }
    }
}