<?php
include "Header.php";
include "Menu.php";

?>

<!DOCTYPE html>
<html>
    <div id="contentInput">
       <table>
       <tr>
           <td>
               <h1>Lab 8 - Input</h1>
           </td>
       </tr>
       
       <tr>
       <td>
           
           <?php
           
           $name = " ";
           $eID = 0;
           $ePhone = "(000) 000-0000";
           $eEmail = " ";
           $eType = " ";
           $project = " ";
           
           echo "<div class='firstTableInput'>";
           echo "<table>";
           
           echo "<tr>";
           echo "<td>";
           ?>
            
           <form action="" method="GET">
           
           <?php
            echo '<form action="" method="GET">';
            // First Table (Left)
            echo "Employee Name: ";
            echo "&nbsp&nbsp&nbsp&nbsp<input type=text name='employeeName'/><br>";
                
            echo "Employee ID: ";
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type=text name='employeeID'/><br>";
           
            echo "Telephone Number: ";
            echo "<input type=text name='employeePhone'/><br>";
            
            echo "Email Address: ";
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type=text name='employeeEmail'/><br>";
               
           
            echo "<br><br>Employee type: ";
            echo '<center><input type="radio" name="rad" value="Manager"> Manager <br>';
            echo '<center><input type="radio" name="rad" value="Team Lead"> Team Lead <br>';
            echo '<center><input type="radio" name="rad" value="IT Developer"> IT Developer<br>';
            echo '<center><input type="radio" name="rad" value="IT Analyst">IT Analyst';
            echo "</center>";
            echo "</center>";
            echo "</center>";
            echo "</center>";
 
           
            
            echo "<br><br>Projects: ";
            echo '<center><select multiple="multiple" name="projects">';
            echo '<center><option value="Project A">Project A</option>';
            echo '<option value="Project B">Project B</option>';
            echo '<option value="Project C">Project C</option>';
            echo '<option value="Project D">Project D</option>';
            echo '</tr></center></center>';
            
            echo '</table>';
            echo '</div>';
            
            echo '<td>';
            echo '<div >';
            echo '<table>';
               
            // Second Table (Right)
           
           if(isset($_GET["sub"]))
            {
                $name = htmlentities($_GET["employeeName"]);
                $eID = htmlentities($_GET["employeeID"]);
                $ePhone = htmlentities($_GET["employeePhone"]);
                $eEmail = htmlentities($_GET["employeeEmail"]);
                $eType = htmlentities($_GET["rad"]);
                $project = htmlentities($_GET["projects"]);
            }
           
            echo "<td>";
            echo "Employee Name:". $name ."<br>";
            echo "Employee ID: $eID <br>";
            echo "Telephone Number: $ePhone <br>";
            echo "Email Address: $eEmail <br>";
            echo "Employee Type: $eType <br>";
            echo "Project chosen: $project <br><br>";
            echo '<input type="submit" name="sub" value="Submit">';
           
           echo '</div>';
           echo '</td>';
           echo '</tr>';
           echo '</form>';
           echo '</table>';
            ?>
           

          </form>
           </td>
           </tr>
        </table>
    </div>    
<?php include "Footer.php";?>
</html>