<?php
include "Header.php";
include "Menu.php";
include "Employee.php";
include "Supervisor.php";
?>
<!DOCTYPE html>
<div id="content">
       <table>
       <tr>
           <td>
               <h1>Lab 7 - Array Of Objects</h1>
           </td>
       </tr>
       <tr>
       <td>
           <tr>
               <td>  
                   <?php
                    $employee1 = new Employee(1, "Jonathan", "White");
                    $employee2 = new Employee(2, "Hamza", "Incredible");
                    $employee3 = new Employee(3, "Gingy", "Dean");
                    $employee4 = new Employee(4, "Matthew", "Tarasco");
                    $employee5 = new Employee(5, "Ali", "Ceman");
                    $employee6 = new Employee(6, "Jon", "Black");
                   
                    $employees1 = [$employee1,$employee2,$employee3];
                    $employees2 = [$employee4,$employee5,$employee6];
                   
                    $supervisor1 = new Supervisor(7, "Aria", "Gomes", $employees1);
                    $supervisor2 = new Supervisor(8, "Alfredo", "Cortez", $employees2);
                   
                   $supervisor1->getEmployees();
				   $supervisor2->getEmployees();
                   ?>
               </td>
           </tr>
           </td>
           </tr>
        </table>
    </div>
<?php include "footer.php";?>