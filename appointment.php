<?php

class Appointment {
    private $doctor;
    private $patient;
    private $nurse;
    private $startTime;
    private $endTime;

    public function __construct($doctor, $patient, $startTime, $endTime, $nurse = null) {
        $this->doctor = $doctor;
        $this->patient = $patient;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->nurse = $nurse;
    }

    public function getDoctor() {
        return $this->doctor;
    }

    public function getPatient() {
        return $this->patient;
    }

    public function getNurse() {
        return $this->nurse;
    }

    public function getStartTime() {
        return $this->startTime;
    }

    public function getEndTime() {
        return $this->endTime;
    }

    public function getDurationInHours() {
        $start = new DateTime($this->startTime);
        $end = new DateTime($this->endTime);
        $duration = $start->diff($end);
        return $duration->h + ($duration->i / 60);
    }

    public function calculateCost() {
        $hoursWorked = $this->getDurationInHours();
        $cost = $this->doctor->calculateSalary($hoursWorked);

        if ($this->nurse !== null) {
            $cost += $this->nurse->calculateSalary($hoursWorked);
        }

        return $cost;
    }
}
?>
