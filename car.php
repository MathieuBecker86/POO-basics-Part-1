<?php


// car.php

class Car
{
    /**
     * @var string
     */
    private $color;
    /**
     * @var integer
     */
    private $currentSpeed;
    /**
     * @var integer
     */
    private $nbSeats;
    /**
     * @var integer
     */
    private $nbWheels;
    /**
     * @var string
     */
    private $energy;
    /**
     * @var integer
     */
    private $energyLevel;


    public function __construct(string $color, int $nbSeats, string $energyLevel)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->fuelType = $energyLevel;
    }

    public function start() : string
    {
        $this->currentSpeed = 10;

        return 'Car started!';
    }

    public function forward()
    {
        $this->currentSpeed = 50;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }



}
