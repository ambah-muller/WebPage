<?php 

	$db = mysqli_connect("localhost", "root", "mysqlpass", "dbphpsearch");

	if($db ->connect_error) {
		die("Coudln't connect");
	}

	$username = stripslashes(htmlspecialchars($_GET['username']));
	$message = stripslashes(htmlspecialchars($_GET['message']));

	if($username == "" || $message == ""){
		die();
	}

	$username = stripslashes(htmlspecialchars($_GET['username']));
	$message = stripslashes(htmlspecialchars($_GET['message']));

	if ($message == "" || $username == "") {
		die();
	}

	$sql = "INSERT INTO chat (username, message) VALUES('$username', '$message')";
	mysqli_query($db, $sql);

	//echo $username;
	//echo $message;