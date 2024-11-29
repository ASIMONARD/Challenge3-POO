<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    final public function __construct(int $nbLane = 2, int $maxSpeed = 50)
    {
        parent::__construct($nbLane, $maxSpeed);
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    final function addVehicle(Vehicle $vehicle): void
    {
        if ($vehicle instanceof Car || $vehicle instanceof Bike || $vehicle instanceof Skateboard)
        {
            $this->currentVehicles = $vehicle;
        }
    }
}