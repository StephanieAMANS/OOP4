<?php


require_once 'Vehicle.php';


class Truck extends Vehicle
{
    private int $storage = 0;
    private int $capacity;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];


    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->capacity = $capacity;
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function setCapacity(int $Capacity): void
    {
        $this->Capacity = $Capacity;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getStorage(): int
    {
        return $this->storage;
    }

    public function setStorage(int $storage): void
    {
        if ($storage >= 0 ){
            $this->storage = $storage;
        }
    }

    public function load(): string
    {
        $sentence = "";
        while ($this->storage < $this->capacity) {
            $this->storage++;
            $sentence .= "In filling";
        }

        $sentence .= "Full";
        return $sentence;
    }

}




