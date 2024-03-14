<?php

require_once 'patient.php';
require_once 'staff.php';
require_once 'appointment.php';

$patient = new Patient("Lucas Tanis", "Blauw", "Groen", 180, 75);
$doctor = new Doctor("Doktor, Van Dijk", "Bruin", "Groen", 185, 80, 50);
$nurse = new Nurse("Zuster Jari", "Bruin", "Blond", 170, 60, 30);

$appointment = new Appointment($doctor, $patient, "2024-02-14 10:00:00", "2024-02-14 12:00:00", $nurse);

echo "Patient: " . $patient->getName() . "<br>";
echo "Dokter: " . $doctor->getName() . "<br>";
echo "Zuster: " . $nurse->getName() . "<br>";
echo "Begin Tijd: " . $appointment->getStartTime() . "<br>";
echo "Eind Tijd: " . $appointment->getEndTime() . "<br>";
echo "Tijd: " . $appointment->getDurationInHours() . " uren<br>";
echo "Kosten: $" . $appointment->calculateCost() . "<br>";

?>
