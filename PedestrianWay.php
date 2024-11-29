<?php


final class PedestrianWay extends HighWay
{
    final public function __construct(int $nbLane = 1, int $maxSpeed = 10)
    {
        parent::__construct($nbLane, $maxSpeed);
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    final function addVehicle(Vehicle $vehicle): void
    {
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard)
        {
            $this->currentVehicles = $vehicle;
        }
    }
}