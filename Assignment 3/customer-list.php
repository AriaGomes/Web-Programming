
<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; 
   charset=UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Book Template - Customer List</title>

   <link rel="shortcut icon" href="../../assets/ico/favicon.png">   

   <!-- Bootstrap core CSS -->
   <link href="bootstrap3_bookTheme/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Bootstrap theme CSS -->
   <link href="bootstrap3_bookTheme/theme.css" rel="stylesheet">

</head>
<body>
<?php include 'includes/book-header.inc.php'; 
     include 'includes/database.inc.php';
    parse_str($_SERVER["QUERY_STRING"]);
    ?>
<div class="container">
   <div class="row">  <!-- start main content row -->

      <div class="col-md-2">  <!-- start left navigation rail column -->
         <?php include 'includes/book-left-nav.inc.php'; ?>
      </div>  <!-- end left navigation rail --> 

      <div class="col-md-8">  <!-- start main content column -->
        
         <!-- book panel  -->
         <div class="panel panel-danger spaceabove">  
          <?php
           echo '<div class="panel-heading"><h4>My Customers - ' . $stringConnectedToDB. '</h4></div>'
           ?>
               <table class = "table">
            <th><a href=customer-list.php?sort=lastName>Name</a><span class="glyphicon glyphicon-arrow-down" <?php
                                                                        if($sort=="lastName"){
                                                                            echo 'style="visibility:visible;"';
                                                                        }else{ 
                                                                            echo 'style="visibility:hidden;"';
                                                                        } ?>></span></th><th> </th>
               <th>Email</th>
               <th>Address</th>
               <th><a href=customer-list.php?sort=city>City</a><span class="glyphicon glyphicon-arrow-down" <?php
                                                                       if($sort=="city"){
                                                                           echo 'style="visibility:visible;"';
                                                                       }else{ 
                                                                           echo 'style="visibility:hidden;"';
                                                                       } ?>  ></span></th>
                <th><a href=customer-list.php?sort=country>Country</a><span class="glyphicon glyphicon-arrow-down" <?php
                                                                        if($sort=="country"){
                                                                             echo 'style="visibility:visible;"';
                                                                        }else{
                                                                            echo 'style="visibility:hidden;"';
                                                                         } ?>></span></th>
                     <?php
                    include 'includes/database.inc.php';
                     $sort = lastName;
                     parse_str($_SERVER["QUERY_STRING"]);
                    
                    
               
                     $sqlQuery = "SELECT * FROM Customers ORDER BY ".$sort." ASC;";
                     $sql = $sqlQuery;
                     $result = mysqli_query($pdo,$sql);
                     $rowCount = mysqli_num_rows($result);

                     if (mysqli_query($pdo, $sql)) 
                     {                
                        while($row = mysqli_fetch_assoc($result))
                        {
                        echo "<tr>
                            <td>" . $row['firstName'] . '</td>
                            <td>' . $row['lastName'] . '</td>
                            <td>' . $row['email'] . '</td>
                            <td>' . $row['address'] . '</td>
                            <td>' . $row['city'] . '</td>
                            <td>' . $row['country'] . '</td>
                            <tr>';
                        }
                     }
               ?>

           </table>
         </div>           
      </div>
      
  <?php
                    include 'includes/database.inc.php';
                     $sort = lastName;
                     parse_str($_SERVER["QUERY_STRING"]);
                    
                    
               
                     $sqlQuery = "SELECT * FROM Customers ORDER WHERE LIKE "    .$sort." ASC;";
                     $sql = $sqlQuery;
                     $result = mysqli_query($pdo,$sql);
                     $rowCount = mysqli_num_rows($result);

                     if (mysqli_query($pdo, $sql)) 
                     {                
                        while($row = mysqli_fetch_assoc($result))
                        {
                        echo "<tr>
                            <td>" . $row['firstName'] . '</td>
                            <td>' . $row['lastName'] . '</td>
                            <td>' . $row['email'] . '</td>
                            <td>' . $row['address'] . '</td>
                            <td>' . $row['city'] . '</td>
                            <td>' . $row['country'] . '</td>
                            <tr>';
                        }
                     }
       ?>
       
      </div>  <!-- end main content column -->
   </div>  <!-- end main content row -->
   

 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_bookTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_bookTheme/dist/js/bootstrap.min.js"></script>
 <script src="bootstrap3_bookTheme/assets/js/holder.js"></script>
</body>
</html>
      </div>  <!-- end main content column -->
   </div>  <!-- end main content row -->
</div> 
   
   
 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_bookTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_bookTheme/dist/js/bootstrap.min.js"></script>
 <script src="bootstrap3_bookTheme/assets/js/holder.js"></script>
</body>
</html>