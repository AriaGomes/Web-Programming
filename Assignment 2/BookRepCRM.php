<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; 
   charset=UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Assignment 3 - Book List</title>

   <link rel="shortcut icon" href="../../assets/ico/favicon.png">

  <?php
    ?>
   <!-- Google fonts used in this theme  -->
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>  
    
   <!-- Bootstrap core CSS -->
   <link href="bootstrap3_bookTheme/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Bootstrap theme CSS -->
   <link href="bootstrap3_bookTheme/theme.css" rel="stylesheet">
    
</head>
<body>

<?php include 'book-header.inc.php'; ?>
   
<div class="container">
   <div class="row">  <!-- start main content row -->

      <div class="col-md-2">  <!-- start left navigation rail column -->
         <?php include 'book-left-nav.inc.php'; ?>
      </div>  <!-- end left navigation rail --> 

      <div class="col-md-10">  <!-- start main content column -->
        
         <!-- Customer panel  -->
         <div class="panel panel-danger spaceabove">           
           <div class="panel-heading"><h4>My Customers</h4></div>
           
           
           <table class="table">
             <tr>
               <th>Name</th>
               <th>Email</th>
               <th>University</th>
               <th>City</th>
             </tr>
               <?php
               
               $file = fopen("customers.txt", "r") or die("Unable to open file!");
               
             
             while($row = fgets($file)) 
             {
                 list( $id, $fName, $lName, $email, $school, $address, $city, $province, $country, $postalCode, $phoneNum) = explode( ",", $row );
                 $fName= iconv("Windows-1252", "UTF-8", $fName);
                 $lName= iconv("Windows-1252", "UTF-8", $lName);
                 $email= iconv("Windows-1252", "UTF-8", $email);
                 $school= iconv("Windows-1252", "UTF-8", $school);
                 $city= iconv("Windows-1252", "UTF-8", $city);
                 echo "<tr>";
                 echo "<td>$fName $lName</th>";
                 echo "<td>$email</th>";
                 echo "<td>$school</th>";
                 echo "<td>$city</th>";
                 echo "</tr>";
             }
               ?>
           </table>
         </div>           
      </div>
      </div> 
   </div>    
</body>
</html>
