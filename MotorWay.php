<?php

class MotorWay extends HighWay
{
    final public function __construct(int $nbLane = 4, int $maxSpeed = 130)
    {
        parent::__construct($nbLane, $maxSpeed);
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed ;
    }

    final function addVehicle(Vehicle $vehicle): void
    {
        if ($vehicle instanceof Car)
        {
            $this->currentVehicles = $vehicle;
        }
    }
}

?>