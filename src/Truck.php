<?php

// Truck.php
// Importing parent class Vehicle
require_once 'Vehicle.php';

// Creating the Truck class, child of Vehicle class
class Truck extends Vehicle
{
    // Properties
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
     ];

     public const LOAD_STATUS = [
        'in filling',
        'full',
     ];

    // Methods
    public function __construct(string $loadStatus, string $color, int $numberSeats, string $energyType)
    {
        $this ->setLoadStatus($loadStatus);
        $this->setEnergyType($energyType);
        // Calling the parent methods
        parent::__construct($color, $numberSeats);
        
    }

    public function start(): string
    {
        $this->currentSpeed = 0;

        return "Vroum ! The engine has started. Drive safely !<br>";
    }

    // getters and setters (visibility to public, to be able to use them outside the class)

    public function getEnergyType(): string
    {
        return $this->energyType;
    }

    public function setEnergyType(string $energyType): Truck
    {
        if (in_array($energyType, self::ALLOWED_ENERGIES)) {
            $this->energyType = $energyType;
        }
    return $this;
    }

    public function getEnergyLevel(): string
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        if($energyLevel >= 0) {
            $this->energyLevel = $energyLevel;
        }
    }

    public function getLoadStatus(): string
    {
        return $this->loadStatus;
    }

    public function setLoadStatus(string $loadStatus) : Truck
    {
        if (in_array($loadStatus, self::LOAD_STATUS)) {
            $this->loadStatus = $loadStatus;
        }
        return $this;
    }
}