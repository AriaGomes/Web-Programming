<?php
include "Header.php";
include "Menu.php";

?>

<!DOCTYPE html>
<html>
    <div id="content">
       <table>
       <tr class=ArrayTittle>
           <td>
               <h1>Lab 7 - Arrays</h1>
           </td>
       </tr>
       <tr>
       <td>
       </td>
       </tr>
           
           
           <tr>
               <td>
                   <h2><center>No Key Array - Output using var_dump</center></h2>
                   
                   <?php //NO KEY ARRAY
                   //Values in array 10, 20, 30, 40
                   $noKeyArray = [10, 20, 30, 40];
                   echo "<center>", var_dump($noKeyArray);
                   ?>
                   
                   <h2><center>No Key Array - Output using foreach</center></h2>
        
                   <?php //NO KEY ARRAY
                   foreach($noKeyArray as $key => $value)
                   {
                       echo "key: $key, value: $value, key data type: " . gettype($key);
                       echo "<br>";    
                   }
                   ?>
                   
                   <h2><center>String Key Array - Output using var_dump</center></h2>
                   
                   <?php //STRING KEY ARRAY
                   //Values in array "item1", item2 with 2 keys
                   $stringKeyArray = ["key1"=>"item1", "key2"=>"item2"];
                   echo var_dump($stringKeyArray);
                   ?>
                   
                   <h2><center>String Key Array - Output using foreach</center></h2>
                   
                   <?php //STRING KEY ARRAY
                   foreach($stringKeyArray as $key => $value) 
                   {
                   echo "key: $key, value: $value, key data type: " . gettype($key);
                   echo "<br>";    
                   }
                   ?>
                   
                   <h2><center>Integer Key Array - Output using var_dump</center></h2>
                   
                   <?php //INTEGER KEY ARRAY
                   // values in array "item1", "item2", "item3" with 3 keys
                   $integerKeyArray = [1=>"item1", 2=>"item2", 3=>"item3"];
                   echo var_dump($integerKeyArray);
                   ?>
                   
                   <h2><center>Integer Key Array - Output using foreach</center></h2>
                   
                   <?php //INTEGER KEY ARRAY
                    foreach($integerKeyArray as $key => $value) 
                    {
                    echo "key: $key, value: $value, key data type: " . gettype($key);
                    echo "<br>";    
                    }
                   ?>
                   
                   <h2><center>Mixed Key Array - Output using var_dump</center></h2>
                   
                   <?php // MIXED KEY ARRAY
                   // values in array "item1", "item2", "item3", "item4", "item5", "item6", "item 7" with 5 integer keys and 2 string keys (7 total keys)
                   $mixedKeyArray = ["key1"=>"item1", "key2"=>"item2", 1=>"item3", 2=>"item4", 3=>"item5", 4=>"item6", 5=>"item7"];
                   echo var_dump($mixedKeyArray);
                   ?>
                   
                   <h2><center>Mixed Key Array - Output using foreach</center></h2>
                   
                   <?php // MIXED KEY ARRAY
                   foreach($mixedKeyArray as $key => $value) 
                   {
                   echo "key: $key, value: $value, key data type: " . gettype($key);
                   echo "<br>";    
                   }
                   ?>
                   
                   <h2><center>Multi-Dimensional Array - Output using var_dump</center></h2>
                   
                   <?php // MULTI-DIMENSIONAL ARRAY
                   // values in array [10, 20], [30 , 40]
                   $multiDimensionalArray = [0=>[0=>10,1=>20], 1=>[0=>30,1=>40]];
                   echo var_dump($multiDimensionalArray);
                   ?>
                   
                   <h2><center>Multi-Dimensional Array - Output using foreach</center></h2>
                   
                   <?php // MULTI-DIMENSIONAL ARRAY
                   $counter = 1;
                   
                   foreach($multiDimensionalArray as $key => $value) 
                   {
                   echo "Level: $counter key: $key";
                   echo "<br>";
                   foreach($value as $key1 => $value1) 
                   {
                   echo"Level 2: ", "key: $key1, value: $value1, key data type: " . gettype($key1);
                   echo "<br>";    
                   }
                   echo "<br>";
                   }
                   ?>
               </td>
           </tr>
        <body>
    </body>
</table>
</div>
    
</html>
<?php include "footer.php";?>