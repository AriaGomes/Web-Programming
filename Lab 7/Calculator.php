<?php
include "Header.php";
include "Menu.php";

?>
<!DOCTYPE html>
<div id="content">
       <table>
       <tr>
           <td>
               <h1>Lab 7 - Calculator</h1>
           </td>
       </tr>
       <tr>
       <td>
        <body>
            
            <form action="" method="POST">
            Value 1: <input type=text name="firstVal"/>&emsp;&emsp;&emsp;&emsp;
            <select name="operation">
                <option>+</option>
                <option>-</option>
                <option>/</option>
                <option>*</option>
                <option>exp</option>
            </select> &emsp;&emsp;&emsp;&emsp;   
            Value 2: <input type=text name="secondVal"/>&emsp;&emsp;&emsp;&emsp;
            <input type="submit" name="sub" value="Calculate">
            <!--Form for user input-->
            <br>
            <br>
            
            <?php
            $firstVal = 0;
            $secondVal = 0;
            $result = 0;
            $oddEven = 0;
            $operator = "";
            
            if(isset($_POST["sub"]))
            {
                $firstVal = htmlentities($_POST["firstVal"]);
                $secondVal = htmlentities($_POST["secondVal"]);
                $operator = htmlentities($_POST["operation"]);
            }
                
            if ($operator == "+") // Calculator Logic
                {
                    $result = $firstVal + $secondVal;
                    echo $firstVal . " plus " . $secondVal . " equals " . $result;
                } else if($operator == "-") 
                {
                    $result = $firstVal - $secondVal;
                    echo $firstVal . " minus " . $secondVal . " equals " . $result;
                } else if($operator == "/") 
                {
                    $result = $firstVal / $secondVal;
                    echo $firstVal . " divided " . $secondVal . " equals " . $result;
                } else if($operator == "*") 
                {
                    $result = $firstVal * $secondVal;
                    echo $firstVal . " multiply " . $secondVal . " equals " . $result;
                } else if($operator == "exp") 
                {
                    $result = pow($firstVal,$secondVal);
                    echo $firstVal . " exponent " . $secondVal . " equals " . $result;
                }
                
             echo "<br> <br>";    
            
             function primeChecker($n) // Prime Number Logic
             {   
                for($x=2; $x<$n; $x++)
                {
                    if($n %$x == 0)
                        return 0;
                }
                return 1;
            }
            
            $a = primeChecker($result); // Prints primes based on return status of method above
                if ($a==0) 
                    echo $result . ' is NOT a prime number';
                else 
                    echo $result . ' is a prime number';
                
                echo "<br> <br>";
                
            $oddEven = $result % 2; // Logic to check if calculated number was even 
            if ($oddEven == 0) // Prints if the number was odd or even based on the logic on the line above
                echo $result . " is an even number"; 
            else    
                echo $result . " is an odd number";
            ?>
            </form>
            </body>    
           </td>
           </tr>
    </table>
</div>

<?php include "footer.php";?>