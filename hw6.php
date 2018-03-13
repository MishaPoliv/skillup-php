<?php
require_once 'hw5.php';

class Driver extends Worker

{

private $DrivingExp;
private $DrivingCategory;


    public function getDrivingExp()
    {
        return $this->DrivingExp;
    }

    public function setDrivingExp($DrivingExp)
    {
        $this->DrivingExp = $DrivingExp;
    }

    public function getDrivingCategory()
    {
        return $this->DrivingCategory;
    }

    public function setDrivingCategory($DrivingCategory)
    {
        $this->DrivingCategory = $DrivingCategory;
    }

}