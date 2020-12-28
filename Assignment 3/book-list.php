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


       <?php    
        include 'includes/database.inc.php';	   
    echo '<body>';
    include 'includes/book-header.inc.php';
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-md-2">';
    include 'includes/book-left-nav.inc.php';
    echo '</div>';
    echo '<div class="col-md-8">';
    echo '<div class="panel panel-danger spaceabove">';
    echo '<div class="panel-heading"><h4>My Books - ' . $stringConnectedToDB . '</h4></div>';
    echo '<table class="table">';
    echo '<tr>';
               	
    echo '<th>Cover</th>';
    echo '<th>ISBN</th>';
    echo '<th>Title</th></tr>';



                      $sqlQuery = "SELECT * FROM Books ORDER BY Title ASC;";

                      $sql = $sqlQuery;
                      $result = mysqli_query($pdo, $sql);
                      $resultCheck = mysqli_num_rows($result);

                      while($row = mysqli_fetch_assoc($result))
                        {
                           echo "<tr>" . "<td><img src=images/tinysquare/".$row['ISBN10'].".jpg></td>";
                          echo "<td>". $row['ISBN10'] . "</td>";
                          echo "<td><a href=\"book-details.php?bookID=".$row['ID']."\">".$row['Title']."</td><tr></a>";
                        }



                   echo '</table>';
    echo '</div>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo "<div class='panel panel-info spaceabove'>";
    echo '<div class="panel-heading"><h4>Categories</h4></div>';
    echo "<ul class='nav nav-pills nav-stacked'>";

            $sqlQuery = "SELECT * FROM Subcategories;";

                      $sql = $sqlQuery;
                      $result = mysqli_query($pdo, $sql);
                      $resultCheck = mysqli_num_rows($result);

             while($row = mysqli_fetch_assoc($result))
                        {
                            echo "
                        <tr><td><a href=\"book-list.php?category=".$row['ID']."\">".$row['SubcategoryName']."</a><br></tr></td>";
                        }

            echo '</ul>'; 
         echo '</div>';                
      echo '</div>'; 


          echo '<div class="col-md-2">';
    echo '<div class="panel panel-info spaceabove">';
    echo '<div class="panel-heading"><h4>Imprints</h4></div>';
    echo '<ul class="nav nav-pills nav-stacked">';

        $sqlQuery = "SELECT * FROM Imprints;";

                      $sql = $sqlQuery;
                      $result = mysqli_query($pdo, $sql);
                      $resultCheck = mysqli_num_rows($result);

             while($row = mysqli_fetch_assoc($result))
                        {
                            echo "
                         <tr><td><a href=\"book-list.php?imprint=".$row['ID']."\">".$row['Imprint']."</a><br></tr></td>";
                        }
    echo '</ul>';
    echo '</div>';
        
             echo '<div class="panel panel-info">';
    echo '<div class="panel-heading"><h4>Status</h4></div>';

         $sqlQuery = "SELECT * FROM ProductionStatuses;";

                      $sql = $sqlQuery;
                      $result = mysqli_query($pdo, $sql);
                      $resultCheck = mysqli_num_rows($result);

             while($row = mysqli_fetch_assoc($result))
                        {
                            echo "
                         <tr><td><a href=\"book-list.php?status=".$row['ID']."\">".$row['ProductionStatus']."</a><br></tr></td>";
                        }

    echo '<ul class="nav nav-pills nav-stacked">';
    echo '</ul>';
    echo '</div>';
    echo '<div class="panel panel-info">';
    echo '<div class="panel-heading"><h4>Binding</h4></div>';

        $sqlQuery = "SELECT * FROM BindingTypes;";

                      $sql = $sqlQuery;
                      $result = mysqli_query($pdo, $sql);
                      $resultCheck = mysqli_num_rows($result);

             while($row = mysqli_fetch_assoc($result))
                        {
                            echo "
                         <tr><td><a href=\"book-list.php?binding=".$row['ID']."\">".$row['BindingType']."</a><br></tr></td>";
                        }

    echo '</ul>';
 
        ?>