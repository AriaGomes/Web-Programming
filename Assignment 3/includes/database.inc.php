<?php

/*
 Sets up the PDO database connection
*/   
      //For Hostinger Webserver
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
   
      $connString = $sql_details['host'];
      $db=$sql_details['db'];
      $user = $sql_details['user'];
      $password = $sql_details['pass'];

      $pdo = mysqli_connect($connString,$user,$password,$db);

     // Check connection
		      if (!$pdo)
		          $stringConnectedToDB = "Connection to database failed";
             elseif($pdo)
                    $stringConnectedToDB = "Connected successfully to database";
?>