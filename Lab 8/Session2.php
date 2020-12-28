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
    <div id="contentSession2">
       <table>
       <tr>
           <td>
               <h1>Lab 8 - Session 2</h1>
           </td>
       </tr>
       <tr>
       <td>           
           <?php
           if (!isset($_COOKIE[$cookie_name]))
           {
               echo "No session state available.";
           }
           else
           {
               echo "Employee Name: " . $_COOKIE[$cookie_name] . "<br>";
               echo "Employee ID: " . $_COOKIE[$cookie_eID] . "<br>";
               echo "Telephone Number: " . $_COOKIE[$cookie_ePhone] . "<br>";
               echo "Email Address: " . $_COOKIE[$cookie_eMail] . "<br>";
               echo "Employee Type: " . $_COOKIE[$cookie_eType] . "<br>";
               echo "Project chosen: " . $_COOKIE[$cookie_projects] . "<br>";
           }
           ?>
           
       </td>
        </tr>
        </table>
    </div>
           <?php include "Footer.php";?>
</html>