<?php

  $dbServername="localhost";
  $dbUsername="root";
  $dbPassword="mysqlpass";
  $dbName="unplannedpregnancy"; //Unplanned Pregnancy Database

  $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
  //Connection - refer to this page each time need to connect to db
?>
