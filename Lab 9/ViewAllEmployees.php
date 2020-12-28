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
               <h1>Lab 9 - View All Employees</h1>
           </td>
       </tr>
       
       <tr>
       <td>
           
           <?php
           echo "<div class='firstTableInput'>";
           echo "<table>";
           
           echo "<tr>";
           echo "<td>";
           
           $cookie_access = "access";
           $row = 0;
           
           
           if($_COOKIE[$cookie_access] == false)
           {
               setcookie($cookie_access, -1, 0);
               header("Location: https://ariagomes.net/CST83238/Lab9/Login.php");
           }
           
$sql_details = array
(
	"type" => "Mysql",
	"user" => "u713067852_AriaGo_bookrep",
	"pass" => "book@rep",
	"host" => "localhost",
	"port" => "3306",
	"db"   => "u713067852_AriaGo_Books",
	"dsn"  => "charset=utf8"
);
           
            $dbConnection = mysqli_connect($sql_details['host'], $sql_details['user'], $sql_details['pass']);	
		
		          // Check connection
		          if (!$dbConnection) 
			         echo "<br><br>Connection to database failed";
                  elseif($dbConnection)
                     echo "<br><br>Connected successfully to database" . "<br><br><br>";		
				
		          mysqli_select_db($dbConnection, $sql_details['db']);
                    
                  $sqlQuery = "SELECT * FROM Employee;";
                
                  $sql = $sqlQuery;
                  $result = mysqli_query($dbConnection, $sql);
                  $resultCheck = mysqli_num_rows($result);
                   if($resultCheck > 0 )
                   {
                       echo "<b>Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEmail Address&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPhone Number&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSIN &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDesignation</b>";
                    while($row = mysqli_fetch_assoc($result))
                    {
                       echo "<table><tr>
                    <td>" . $row['FirstName'] .  "</td>
                    <td>" . $row['LastName'] .  "</td>
                    <td>" . $row['EmailAddress'] .  "</td>
                    <td>" . $row['TelephoneNumber'] .  "</td>
                    <td>" . $row['SocialInsuranceNumber'] .  "</td>
                    <td>" . $row['Designation'] .  "</td>
                    </tr></table>";
                       echo "<br/>";
                    }  
                    }
                elseif($row == 0)
				    echo "*** There are no rows to display from the Employee table ***";
                
          mysqli_close($dbConnection);
           echo "</tr>";
               echo "</td>";
               echo "</table>";
               echo "</table>";
           
           
           echo "</td>";
           echo "</tr>";
        echo "</table>";
        
echo "</html>";
include "Footer.php";
           ?>