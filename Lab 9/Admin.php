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
               <h1>Lab 9 - Admin</h1>
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
           
           $eEmail = " ";
           $password = " ";
           $adminCode = 000;
          
            
            $cookie_selectAccess = "selectAccess";
            $cookie_selectAccessDenied = "selectAccessDenied";
           
       
           echo "<div class='firstTableInput'>";
           echo "<table>";
           
           echo "<tr>";
           echo "<td>";

            echo '<form action="" method="POST">';
           
            // Table
            echo "Email: ";
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type=text name='email'/><br>";
                
            echo "Password: ";
            echo "<input type=password name='password'/><br>";
               
            echo "Admin Code: ";
            echo "<input type=text name='eACode'/><br>";
               
                echo '<input type="submit" name="sub" value="Login">';
               
           
           if(isset($_POST["sub"]))
            {
                
                $eEmail = $_POST['email'];
                $password = $_POST['password'];
                $adminCode = $_POST['eACode'];
                
                if($eEmail == "" && $password == "" && $adminCode == "")
                {
                    echo "<br><br>Please enter an email and password and admin code";
                }
                else
                {	
                    
		           $dbConnection = mysqli_connect($sql_details['host'], $sql_details['user'], $sql_details['pass']);	
		
		          // Check connection
		          if (!$dbConnection) 
			         echo "<br><br>Connection to database failed";
                  elseif($dbConnection)
                     echo "<br><br>Connected successfully to database" . "<br>";		
				
		          mysqli_select_db($dbConnection, $sql_details['db']);
                    
                  $sqlQuery = "SELECT * FROM Employee WHERE EmailAddress ='$eEmail' AND Password = '$password' AND AdminCode = '$adminCode';";	
                    
			   if (mysqli_query($dbConnection, $sqlQuery)) 
               {
                
                $sql = $sqlQuery;
                $result = mysqli_query($dbConnection, $sql);
                $resultCheck = mysqli_num_rows($result);
        if($resultCheck > 0 )
        {
            if($row = mysqli_fetch_assoc($result))
            {
                         echo $row['EmailAddress'] . " Logged in successfully";
        
                         $_COOKIE[$cookie_access] = true;
                         setcookie($cookie_access, true, 0);
                        
                        $sql_searchQuery = "SELECT AdminCode FROM Employee WHERE Password = '$password';";
                        
                        $sql = $sql_searchQuery;
                        $result = mysqli_query($dbConnection, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        
                if($resultCheck > 0 )
                {
                    if($row = mysqli_fetch_assoc($result))
                    {
                        if($row['AdminCode'] == 999)
                        {
                            setcookie($cookie_selectAccessDenied, false, 0);
                            setcookie($cookie_selectAccess, true, 0);
                        }
                        else
                        {
                            setcookie($cookie_selectAccessDenied, true, 0);
                            setcookie($cookie_selectAccess, false, 0); 
                        }
                    }
                }
            }
        }
                   
        else
                   {
                       echo "Access Denied, Wrong credentials";
                       $_COOKIE[$cookie_access] = false;
                       setcookie($cookie_access, false, 0);
                   }
                
                  
                    
                }
               }
               }
            
              mysqli_close($dbConnection);
               
           
            if($_COOKIE[$cookie_selectAccess] == -1 && $_COOKIE[$cookie_selectAccessDenied] == -1)
           {
               setcookie($cookie_selectAccess, false, 0);
               setcookie($cookie_selectAccessDenied, true, 0);
               echo "<br><br> You need to log in as an Admin (Manager) to select an account.";
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