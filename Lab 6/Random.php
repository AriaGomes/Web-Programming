<?php
include "Header.php";
include "Menu.php";
?>

<!Doctype html>
<html>
    <div id="content">
       <table>
       <tr>
           <td>
               <h1>Lab 6 - Random</h1>
           </td>
       </tr>
       
       <tr>
       <td>
        <body class="range">
           <?php
            $generatedNum[] = array(5); // Creates array with length of 5
            
            for($count=0; $count < 5; $count++) // loops and through each variable and gives them a random number 1-500
            {
               $generatedNum[$count] = rand(1,500); 
            }
            
            //Prints ranges and a value from that range (extra :) )
            echo "Range (1-10) ~ " ,  $generatedNum[0], " Numbers generated. Value:"; 
            echo $randValue1 = rand(1,10), "<br>";
            
            echo "Range (11-20) ~ ",  $generatedNum[1], " Numbers generated. Value:";
            echo $randValue2 = rand(11,20), "<br>";
            
            echo "Range (21-30) ~ ",  $generatedNum[2], " Numbers generated. Value:";
            echo $randValue3 = rand(21,30), "<br>";
            
            echo "Range (31-40) ~ ",  $generatedNum[3], " Numbers generated. Value:";
            echo $randValue4 = rand(31,40), "<br>";
            
            echo "Range (41-50) ~ ",  $generatedNum[4], " Numbers generated. Value:";
            echo $randValue5 = rand(41,50), "<br>";
            ?>
             </body>
             
             <br>
             <br>
             
             <body>
                 <?php
                
                $percentageNum[] = array(100); // Creates array with length of 5
        
                 for($count=0; $count < 5; $count++) // loops and through each variable and gives them a random number 1-500
                 {
                     floor($percentageNum[$count] = $generatedNum[$count] * 100 / 500); // Formaula to calculate percentage of generated number
                 }
                 
                 $maxElement = count($generatedNum); //maxElement counts the elements in the array 
            
            
                 
                 
                 
                 
                        echo "(01 - 10): ";
                        for($x=0; $x < $percentageNum[0]; $x++)
                        {
                            echo "*";
                        }
						echo " $percentageNum[0]%";
                        echo "<br />(11 - 20): ";
                        
                        for($x=0; $x < $percentageNum[1]; $x++)
                        {
                            echo "*";
                        }
                        echo " $percentageNum[1]%";
                 
                        echo "<br />(21 - 30): ";
                        for($x=0; $x < $percentageNum[2]; $x++)
                        {
                            echo "*";
                        }
                        echo " $percentageNum[2]%";
                 
						echo "<br />(31 - 40): ";
						for($x=0; $x < $percentageNum[3]; $x++)
                        {
                            echo "*";
                        }
                        echo " $percentageNum[3]%";
						echo "<br />(41 - 50): ";
						for($x=0; $x < $percentageNum[4]; $x++)
                        {
                            echo "*";
                        }
                        echo " $percentageNum[4]%";
                 
                
                 ?>
             </body>
        </td>
        </tr>
      </table>
    </div>
</html>


<?php
include "Footer.php";
?>