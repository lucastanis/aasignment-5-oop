<?php

abstract class Staff extends Person {
    protected $hourlyRate;

    public function __construct($name, $eyeColor, $hairColor, $height, $weight, $hourlyRate) {
        parent::__construct($name, $eyeColor, $hairColor, $height, $weight);
        $this->hourlyRate = $hourlyRate;
    }

    abstract public function calculateSalary($hoursWorked);

    public function getHourlyRate() {
        return $this->hourlyRate;
    }
}

class Doctor extends Staff {
    public function getRole() {
        return "Doctor";
    }

    public function calculateSalary($hoursWorked) {
        return $hoursWorked * $this->getHourlyRate();
    }
}

class Nurse extends Staff {
    public function getRole() {
        return "Nurse";
    }

    public function calculateSalary($hoursWorked) {
        return $this->getHourlyRate() * $hoursWorked;
    }
}
?>
