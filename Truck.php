<?php

require_once 'Vehicle.php';

class Truck extends Vehicle

{

    // Définition des propriétés

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;

    private int $energyLevel;

    private int $storageCapacity;

    private int $load = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->storageCapacity = $storageCapacity;
    }


    // Accesseurs et mutateurs

    /**
     * Get the value of storageCapacity
     *
     * @return int
     */
    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    /**
     * Set the value of storageCapacity
     *
     * @param int $storageCapacity
     *
     * @return self
     */
    public function setStorageCapacity(int $storageCapacity): self
    {
        $this->storageCapacity = $storageCapacity;

        return $this;
    }

    /**
     * Get the value of energyLevel
     *
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    /**
     * Set the value of energyLevel
     *
     * @param int $energyLevel
     *
     * @return self
     */
    public function setEnergyLevel(int $energyLevel): self
    {
        if($energyLevel <= 100) {
        $this->energyLevel = $energyLevel;
        }
        return $this;
    }

    /**
     * Get the value of energy
     *
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * Set the value of energy
     *
     * @param string $energy
     *
     * @return self
     */
    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    /**
     * Get the value of load
     *
     * @return int
     */
    public function getLoad(): int
    {
        return $this->load;
    }

    /**
     * Set the value of load
     *
     * @param int $load
     *
     * @return self
     */
    public function setLoad(int $load): self
    {
        $this->load = $load;

        return $this;
    }


    // Définition des méthodes 

    public function isFull(): string
    {
    $sentence='';
    if($this->energyLevel === 100){
        $sentence = 'full';
        return $sentence;
    } else {
        $sentence = 'in filling';
        return $sentence;
    }
    }

}


