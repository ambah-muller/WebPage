<?php 
	$db = mysqli_connect("localhost", "root", "mysqlpass", "dbphpsearch");

	if($db ->connect_error) {
		die("Coudln't connect");
	}

	$username = stripslashes(htmlspecialchars($_GET['username']));
	
	$sql = "SELECT * FROM chat";	
	
	$result = mysqli_query($db, $sql);

	while ($r = $result->fetch_row()) {
		echo $r[1];	//username
		echo "\\";
		echo $r[2];	//message
		echo "\n";
	}