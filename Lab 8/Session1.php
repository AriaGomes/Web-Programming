<?php
include "Header.php";
include "Menu.php";
$cookie_name = "name";
$cookie_eID = "eID";
$cookie_ePhone = "ePhone";
$cookie_eMail = "eMail";
$cookie_eType = "eType";
$cookie_projects = "projects";
?>

<!DOCTYPE html>
<html>
    <div id="content">
       <table>
       <tr>
           <td>
               <h1>Lab 8 - Session 1</h1>
           </td>
       </tr>
       <tr>
       <td>
           
         <form action="" method="GET">  
        <?php
           
           $name = " ";
           $eID = 0;
           $ePhone = "(000) 000-0000";
           $eEmail = " ";
           $eType = " ";
           $project = " ";
           $CookieExpTime = time()+2*24*60*60;
           ?>
            
           <form action="" method="GET">
           
           <?php
            echo "<div class='firstTableSession'>";
            echo "<table>";
           
            echo "<tr>";
            echo "<td>";
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
            // Second Table (Right)
           
           if(isset($_GET["sub"]))
            {
                $name = htmlentities($_GET["employeeName"]);
                $_COOKIE[$cookie_name] = $name;
                $eID = htmlentities($_GET["employeeID"]);
                $_COOKIE[$cookie_eID] = $eID;
                $ePhone = htmlentities($_GET["employeePhone"]);
                $_COOKIE[$cookie_ePhone] = $ePhone;
                $eEmail = htmlentities($_GET["employeeEmail"]);
                $_COOKIE[$cookie_eMail] = $eEmail;
                $eType = htmlentities($_GET["rad"]);
                $_COOKIE[$cookie_eMail] = $eEmail;
                $project = htmlentities($_GET["projects"]);
                $_COOKIE[$cookie_projects] = $projects;
                
                setcookie($cookie_name,$name,$CookieExpTime);
                setcookie($cookie_eID,$eID,$CookieExpTime);
                setcookie($cookie_ePhone,$ePhone,$CookieExpTime);
                setcookie($cookie_eMail,$eEmail,$CookieExpTime);
                setcookie($cookie_eType,$eType,$CookieExpTime);
                setcookie($cookie_projects,$project,$CookieExpTime);
            
                header("Location: https://ariagomes.net/CST83238/Lab8/Session2.php");
            }
            
            echo '<input type="submit" name="sub" value="Submit">';
           
           echo '</td>';
           echo '</tr>';
           echo '</form>';
            ?>
           
             </form>
           </form>
           </td>
           </tr>
        </table>
    </div>
<?php include "Footer.php";?>
</html>