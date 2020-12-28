<?php

class Supervisor extends Employee
{
 private $employees;
    
 function __construct($employeeId, $firstName, $lastName, $employees)
 {
     
     $this->employeeId = $employeeId;
     $this->firstName = $firstName;
     $this->lastName = $lastName;
     $this->employees = $employees;
 }
 public function getEmployees()
 {
     foreach($this->employees as $value)
     {
         echo "Employee ID: " . $value->getEmployeeID() . ", Name: " . $value->getFirstName() . " " . $value->getLastName() . " Supervisor: " . $this->firstName . " " . $this->lastName;
         echo "<br>";
     }
 }
 public function setEmployees($employees)
 {
    $this->employees = $employees;
 }
}

?>