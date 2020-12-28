<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; 
   charset=UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Book Template - Book Details</title>

   <link rel="shortcut icon" href="../../assets/ico/favicon.png">   

   <!-- Bootstrap core CSS -->
   <link href="bootstrap3_bookTheme/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Bootstrap theme CSS -->
   <link href="bootstrap3_bookTheme/theme.css" rel="stylesheet">


   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="bootstrap3_bookTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_bookTheme/assets/js/respond.min.js"></script>
   <![endif]-->
</head>

<body>

<?php include 'includes/book-header.inc.php'; 
    include 'includes/database.inc.php';
         parse_str($_SERVER["QUERY_STRING"]);
    
   
echo '<div class="container">',
   '<div class="row">',  
'<div class="col-md-2">'; 
include 'includes/book-left-nav.inc.php'; 
    echo  '</div>',  

     '<div class="col-md-10">',
        // book panel 
        '<div class="panel panel-danger spaceabove">',      
        "<div class='panel-heading'><h4>Book Details - $stringConnectedToDB</h4></div>";    
             
    
           echo "<table class='table'>";
             echo "<tr>";
               echo "<th>Cover</th>";
               echo "<td></td>";
        $sqlQuery = "SELECT * FROM Books WHERE ID = $bookID;";
    

                      $sql = $sqlQuery;
                     $result = mysqli_query($pdo,$sql);
                 $rowCount = mysqli_query($pdo);
                 if (mysqli_query($pdo, $sql)) {
                    while($row = mysqli_fetch_assoc($result)){
                    echo "<td>" ."<img src=images/tinysquare/".$row['ISBN10'].".jpg>".'</td>';
                    }
                 }      
         
             $sql = "SELECT ISBN10, ISBN13, Title, CopyrightYear, TrimSize, PageCountsEditorialEst, Description, LatestInstockDate
             FROM Books 
             WHERE ID =".$bookID.";";
             

 ?>          
             <tr>
               <th>Title</th>
               <td><em><?php
                 $result = mysqli_query($pdo,$sql);
                $rowCount = mysqli_query($result);
                 if (mysqli_query($pdo, $sql)) {
                    while($row = mysqli_fetch_assoc($result)){
                    echo "<td>" . $row['Title'] . "</td>";
                    }
                 }
                ?></em></td>
             </tr>    
             <tr>
                <th>Authors</th>
               <td>
               <?php
                $sqlBook = "SELECT * FROM Books WHERE ID =".$bookID.";";
                $sqlAuthor = "SELECT AuthorId FROM Authors WHERE ID =".$bookID.";";
                $sqlBookAuthor = "SELECT ID FROM BookAuthor WHERE ID =".$bookID.";";
                $sqlBookId = "SELECT BookId FROM BookAuthor WHERE ID =".$bookID.";";
                $resultBook = mysqli_query($pdo,$sqlBook);
                $resultAuthor = mysqli_query($pdo,$sqlAuthor);
                $result = mysqli_query($pdo,$sqlBookAuthor);
                $resultId = mysqli_query($pdo,$sqlBookId);
                $rowCount = mysqli_query($resulBook);
                $rowCount1 = mysqli_query($resultAuthor);
                $rowCount2 = mysqli_query($result);
                $rowCount3 = mysqli_query($resultId);
                   if(mysqli_query($pdo, $sqlBook)){
                       while($Count3 = mysqli_fetch_assoc($resultId)){
                           echo "<td>".$Count3['BookID'] . "</td>";
                       }
                   }else{
                           echo "<td> error </td>";
                   }
                   ?>
               </td>
             </tr>   
             <tr>
               <th>ISBN-10</th>
               <td>
                   <?php
                   
                   
                $result = mysqli_query($pdo,$sql);
                $rowCount = mysqli_query($result);
                 if (mysqli_query($pdo, $sql)) {
                    while($row = mysqli_fetch_assoc($result)){
                    echo "<td>" . $row['ISBN10'] . "</td>";
                    }
                 }
                ?>
               </td>
             </tr>
             <tr>
               <th>ISBN-13</th>
               <td>                   
                <?php
                $result = mysqli_query($pdo,$sql);
                $rowCount = mysqli_query($result);
                 if (mysqli_query($pdo, $sql)) {
                    while($row = mysqli_fetch_assoc($result)){
                    echo "<td>" . $row['ISBN13'] . "</td>";
                    }
                 }
                ?></td>
             </tr>
             <tr>
               <th>Copyright Year</th>
               <td>             
                <?php
                $result = mysqli_query($pdo,$sql);
                $rowCount = mysqli_query($result);
                 if (mysqli_query($pdo, $sql)) {
                    while($row = mysqli_fetch_assoc($result)){
                    echo "<td>" . $row['CopyrightYear'] . "</td>";
                    }
                 }
                ?>
                </td>
             </tr>   
             <tr>
               <th>Instock Date</th>
               <td>
                <?php
                $result = mysqli_query($pdo,$sql);
                $rowCount = mysqli_query($result);
                   if (mysqli_query($pdo, $sql)) {
                    while($row = mysqli_fetch_assoc($result)){
                    echo "<td>" . $row['LatestInstockDate'] . "</td>";
                    }
                 }
                ?>
               </td>
             </tr>              
             <tr>
               <th>Trim Size</th>
               <td>       
               <?php
                $result = mysqli_query($pdo,$sql);
                $rowCount = mysqli_query($result);
                   if (mysqli_query($pdo, $sql)) {
                    while($row = mysqli_fetch_assoc($result)){
                    echo "<td>" . $row['TrimSize'] . "</td>";
                    }
                 }
                ?>
                </td>
             </tr> 
             <tr>
               <th>Page Count</th>
               <td>
                <?php
                $result = mysqli_query($pdo,$sql);
                $rowCount = mysqli_query($result);
                   if (mysqli_query($pdo, $sql)) {
                    while($row = mysqli_fetch_assoc($result)){
                    echo "<td>" . $row['PageCountsEditorialEst'] . "</td>";
                    }
                 }
                ?>     
                </td>
             </tr> 
             <tr>
               <th>Description</th>
               <td>
                <?php
                $result = mysqli_query($pdo,$sql);
                $rowCount = mysqli_query($result);
                   if (mysqli_query($pdo, $sql)) {
                    while($row = mysqli_fetch_assoc($result)){
                    echo "<td>" . $row['Description'] . "</td>";
                    }
                 }
                ?>  
            </td>
             </tr> 
             <tr>
               <th>Sub Category</th>
               <td>
               
               </td>
             </tr>
             <tr>
               <th>Imprint</th>
               <td>
               <?php
                $sqlImprint = "SELECT ImprintID FROM Books WHERE ID =".$bookID.";";
                $result = mysqli_query($pdo,$sqlImprint);
                $rowCount = mysqli_query($result);
                   if (mysqli_query($pdo, $sqlImprint)) {
                    while($row = mysqli_fetch_assoc($result)){
                        if($row['ImprintID'] == 1){
                            echo "<td>Undecided</td>";
                        }if($row['ImprintID'] == 3){
                            echo "<td>Addison-Wesley</td>";
                        }if($row['ImprintID'] == 4){
                            echo "<td>Longman</td>";
                        }if($row['ImprintID'] == 5){
                            echo "<td>Pearson</td>";
                        }if($row['ImprintID'] == 6){
                            echo "<td>Prentice Hall</td>";
                        }if($row['ImprintID'] == null){
                            echo "<td>null</td>";
                        }
                    }
                 }
                ?>                     
               </td>
             </tr>   
             <tr>
               <th>Binding Type</th>
               <td>
               <?php
                $sqlBinding = "SELECT BindingTypeID FROM Books WHERE ID =".$bookID.";";
                $result = mysqli_query($pdo,$sqlBinding);
                $rowCount = mysqli_query($result);
                   if (mysqli_query($pdo, $sqlBinding)) {
                    while($row = mysqli_fetch_assoc($result)){
                        if($row['BindingTypeID'] == 2){
                            echo "<td>Casebound</td>";
                        }if($row['BindingTypeID'] == 3){
                            echo "<td>Paperback</td>";
                        }if($row['BindingTypeID'] == null){
                            echo "<td>null</td>";
                        }
                    }
                 }
                ?>                   
               </td>
             </tr> 
             <tr>
               <th>Production Status</th>
               <td>
                <?php
                $sqlStatus = "SELECT ProductionStatusID FROM Books WHERE ID =".$bookID.";";
                $result = mysqli_query($pdo,$sqlStatus);
                $rowCount = mysqli_query($result);
                   if (mysqli_query($pdo, $sqlStatus)) {
                    while($row = mysqli_fetch_assoc($result)){
                        if($row['ProductionStatusID'] == 1){
                            echo "<td>Complete</td>";
                        }if($row['ProductionStatusID'] == 2){
                            echo "<td>Estimated</td>";
                        }if($row['ProductionStatusID'] == 3){
                            echo "<td>Pending</td>";
                        }if($row['ProductionStatusID'] == 4){
                            echo "<td>Scheduled</td>";
                        }
                    }
                 }
                ?>  
                   
               </td>
             </tr>              
           </table>


   
   
 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_bookTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_bookTheme/dist/js/bootstrap.min.js"></script>
 <script src="bootstrap3_bookTheme/assets/js/holder.js"></script>
</body>
</html>