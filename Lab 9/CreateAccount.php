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
               <h1>Lab 9 - Create Account</h1>
           </td>
       </tr>
       <tr>
       <td>
           
           <?php
//database connection details
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
           
           //Variables
           $error = "";
           $fName = " ";
           $lName = " ";
           $ePhone = "(000) 000-0000";
           $eEmail = " ";
           $SIN = " ";
           $password = " ";
           $designation = " ";
           $adminCode = 000;
           
           echo "<div class='firstTableInput'>";
           echo "<table>";
           
           echo "<tr>";
           echo "<td>";
           
            echo '<form action="" method="POST">';
            // Table
            echo "First Name: ";
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type=text name='employeeFName'/><br>";
                
            echo "Last Name: ";
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type=text name='employeeLName'/><br>";
           
            echo "Email Address: ";
            echo "&nbsp<input type=text name='emailAddress'/><br>";
            
            echo "Phone Number: ";
            echo "<input type=text name='ePhone'/><br>";
               
               echo "SIN: ";
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type=text name='eSIN'/><br>";
               
               echo "Password: ";
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type=password name='ePass'/><br>";
               
               echo "Designation: ";
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp<input type=text name='eDesignation'/><br>";
               
               echo "Admin Code: ";
            echo "&nbsp&nbsp&nbsp&nbsp<input type=text name='eACode'/><br>";
           
               
             echo '<input type="submit" name="sub" value="Submit">';
               
            if(isset($_POST["sub"]))
            {

                   $fName = htmlentities($_POST['employeeFName']);
                   $lName = htmlentities($_POST['employeeLName']);
                   $eMail = htmlentities($_POST['emailAddress']);
                   $email = strtolower($eMail);
                   $ePhone = htmlentities($_POST['ePhone']);
                   $SIN = htmlentities($_POST['eSIN']);
                   $password = htmlentities($_POST['ePass']);
                   $designation = htmlentities($_POST['eDesignation']);
                   $designationToLower = strtolower($designation);
                   $adminCode = htmlentities($_POST['eACode']);
             
                
	         if($fName != "" && $lName != "" && $eEmail != "" && $password != "" && $designationToLower != "" && $adminCode != "")
	         {		
                 if($adminCode == 999 || $adminCode == 111)
                 {
                 
		          $dbConnection = mysqli_connect($sql_details['host'], $sql_details['user'], $sql_details['pass']);	
		
		          // Check connection
		          if (!$dbConnection) 
			         echo "<br><br>Connection failed";
                  else
                     echo "<br><br>Connected successfully" . "<br>";		
				
		          mysqli_select_db($dbConnection, $sql_details['db']);
		
		          $sqlQuery = "INSERT INTO Employee VALUES(DEFAULT, '$fName', '$lName' , '$eMail', '$ePhone', '$SIN', '$password', '$designationToLower', '$adminCode')";
		
		          if (mysqli_query($dbConnection, $sqlQuery)) 
			         echo "Employee Successfully Added". "<br>";
                 else    
			         echo "Employee Could not be added: " . $sql . "<br>" . mysqli_error($dbConnection);
		      
		          mysqli_close($dbConnection);
                 }
                 else
                     echo "<br><br>Please make sure the Admin code is 111 (Designation: IT-Developer) or 999 (Designation: Manager).";
	       }
	else	
        echo "<br><br>Please enter at least first and last name, Email address, Password, Designation and Admin code to create a user.";	
    }
    
         echo "</tr>";
               echo "</td>";
               echo "</table>";
               echo "</table>";
               echo "</form>";
?>
           </td>
           </tr>
        </table>
    </div>
</html>
<?php include "Footer.php";?>