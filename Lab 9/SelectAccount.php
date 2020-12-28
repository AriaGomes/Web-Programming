<?php
include "Header.php";
include "Menu.php";

//database connection details

    $cookie_selectAccess = "selectAccess";
    $cookie_selectAccessDenied = "selectAccessDenied";
    $cookie_updateAccount = "updateAccount";
    $counter = 0;

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


if($_COOKIE[$cookie_selectAccessDenied] == true)
{
    setcookie($cookie_selectAccessDenied, -1, 0);
    setcookie($cookie_selectAccess, -1, 0);
    header("Location: https://ariagomes.net/CST83238/Lab9/Admin.php");
}
else
{
    
echo "<div class='firstTableInput'>";
           echo "<table>";
           
           echo "<tr>";
           echo "<td>";
        echo "<div id='contentInput'>";
        echo" <h1>Lab 9 - Select Account</h1>";
    
    
     $dbConnection = mysqli_connect($sql_details['host'], $sql_details['user'], $sql_details['pass']);	
		
		          // Check connection
		          if (!$dbConnection) 
			         echo "<br><br>Connection to database failed";
                  elseif($dbConnection)
                     echo "<br><br>Connected successfully to database" . "<br>";		
				
		          mysqli_select_db($dbConnection, $sql_details['db']);
    
    
             $sqlQuery = "SELECT * FROM Employee;";
                
                  $sql = $sqlQuery;
                  $result = mysqli_query($dbConnection, $sql);
                  $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0 )
            {
					$row = mysqli_fetch_row($result);
        
        echo '<form action="" method="POST">';							
				while($row = mysqli_fetch_assoc($result))
                    {
                         
                    
                       echo "<table><tr>
                    <td>" . $row['FirstName'] .  "</td>
                    <td>" . $row['LastName'] .  "</td>
                    <td>" . $row['EmailAddress'] .  "</td>
                    <td>" . $row['TelephoneNumber'] .  "</td>
                    <td>" . $row['SocialInsuranceNumber'] .  "</td>
                    <td>" . $row['Designation'] .  "</td><br>";
                    echo "<input type='submit' name='Edit' value='Edit  Employee'>";
                    echo "</tr></table>";
                       echo "<br/>";
					$counter = $counter + 1;
					echo "<br />";
				}
			}
}

        if(isset($_POST["Edit"]  ))
        {
            setcookie($cookie_updateAccount, $counter, 0);
            header("Location: https://ariagomes.net/CST83238/Lab9/UpdateAccount.php");
        }


        mysqli_close($dbConnection);
        
    echo "</tr>";
    echo "</td>";
    echo "</table>";
    echo "</form>";
?>

<!DOCTYPE html>
<html>
<?php include "Footer.php";
?>