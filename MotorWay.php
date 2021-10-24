<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    protected int $nbLane = 4;
    protected int $maxSpeed = 130;

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Car){
            $this->setCurrentVehicles([$vehicle]);
        }
    }
}
