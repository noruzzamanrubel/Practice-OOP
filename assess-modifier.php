<?php

class Vehicle
{
    protected $capacity = 10;

    public function getCapacity()
    {
        return $this->capacity;
    }
}

class Bus extends Vehicle
{
    public function updateCapacity()
    {
        return $this->capacity;
    }
}

$bus = new Bus;

echo $bus->getCapacity();
echo "\n";
echo $bus->updateCapacity();
