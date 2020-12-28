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
               <h1>Lab 6 - Pattern</h1>
           </td>
       </tr>
       
       <tr>
       <td>
        <body>
    <?php   //prints the pattern
    echo "<pre>";
        for ($i = 1; $i < 6; $i++) 
        {
        for ($j = $i; $j < 6; $j++)
        echo "&nbsp;&nbsp;";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo ("&nbsp;*");
        echo "<br>";
        }
        $n = 6;
        for ($i = 6; $i > 0; $i--) 
        {
        for ($j = $n - $i; $j > 0; $j--)
            echo "&nbsp;&nbsp;";
        for ($j = 2 * $i - 1; $j > 0; $j--)
            echo ("&nbsp;*");
            echo "<br>";
        }
            echo "</pre>";
            
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