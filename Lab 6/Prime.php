<?php
include "Header.php";
include "Menu.php";

$beginRange = 0;
$endRange = 0;
?>

<!Doctype html>
<html>
    <div id="content">
       <table>
       <tr>
           <td>
               <h1>Lab 6 - Prime</h1>
           </td>
       </tr>
       
       <tr>
       <td>
       <form action="" method="GET">
        <body>
            Range 1: <input type=text name='begin'/>&emsp;&emsp;&emsp;&emsp;
        <form action="" method="GET">    
            Range 2: <input type=text name='end'/>&emsp;&emsp;&emsp;&emsp;
            
            <input type="submit" name="sub" value="Generate">
            <br>
            
            <?php
                
             if(isset($_GET["sub"])) // Genterates prime numbers based on user input ranges entered 
           {
                $beginRange = htmlentities($_GET['begin']);
                $endRange = htmlentities($_GET['end']);
            }
            
            $beginRange = preg_replace("/[a-zA-Z]/", "", $beginRange);
            $endRange = preg_replace("/[a-zA-Z]/", "", $endRange); //removes any characters the user may have entered resulting in errors
        {
         
            for($i=$beginRange;$i<=$endRange;$i++)
            {  //numbers to be checked as prime

          $counter = 0; 
          for($j=1;$j<=$i;$j++){ //all divisible factors


                if($i % $j==0){ 

                      $counter++;
                }
              
          }

        //prime requires 2 rules ( divisible by 1 and divisible by itself)
        if($counter==2)
        {

               echo $i." is Prime <br/>"; // prints the prime numbers
                }
            }
        } 

            
            ?>
             </form>
             </body>
           </form>
        </td>
        </tr>
      </table>
    </div>
        
</html>


<?php
include "Footer.php";
?>