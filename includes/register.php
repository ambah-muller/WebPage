<?php

	//check if user clicked sign up button
	if (isset($_POST['submit'])) {

		include 'dbh.inc.php';	//db access page

		$screen_name = mysqli_real_escape_string($conn, $_POST['screen']); //prevent users from submitting code
		$first = mysqli_real_escape_string($conn, $_POST['firstName']);
		$last = mysqli_real_escape_string($conn, $_POST['lastName']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$phone = mysqli_real_escape_string($conn, $_POST['phoneNo']);
//		$dob = mysqli_real_escape_string($conn, $_POST['dob']); ???
		$city = mysqli_real_escape_string($conn, $_POST['city']);
		$level = "Registered";
		$pic = "15"; //default pic
		$gender = mysqli_real_escape_string($conn, $_POST['gender']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
//		$verpass = mysqli_real_escape_string($conn, $_POST['verifyPassword']);
		$anon = mysqli_real_escape_string($conn, $_POST['anon']);

		//error handlers
		//check for empty fields - only fields required (non-nullable fields)
		if(empty($screen_name) || empty($email) || empty($phone) || empty($password)) {
			echo "Error";
			exit();
		}
		else { //no empty fields-
			//check if input characters are valid
			if (!preg_match("/^[a-zA-Z]*$/", $screen_name) || !preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
				echo "invalid input character";
				exit();
			}
			else { //valid charcters
				//check if email is valid
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)) { //check if not valid
					echo "invalid email";
					//header("Location: register.php?signup=empty");
					exit();
				}
				else {
					//check if user name exists
					$sql = "SELECT * FROM user WHERE Username='$screen_name'";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);

					if($resultCheck > 0) { //screen name already taken
						echo "user taken";
						exit();
					}
					else {
						//Hasing password
						//$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
						
						//insert user into db
						$sql = "INSERT INTO user (Username, UserPassword, FirstName, Surname, Email, Gender, CellNo, CityID, LevelOfUser, ProfilePictureID, Anonymous) VALUES ('$screen_name', '$password', '$first', '$last', '$email', '$gender', '$phone', '$city', '$level', '$pic', '$anon')";
						//DateOfBirth '$dob'
						mysqli_query($conn, $sql);

						//$_SESSION['Username'] = $row['Username'];
			            //$_SESSION['UserPassword'] = $row['UserPassword'];
			            //$_SESSION['Email'] = $row['Email'];
			            //$_SESSION['FirstName'] = $row['FirstName'];
			            //$_SESSION['Surname'] = $row['Surname'];
			            //$_SESSION['Gender'] = $row['Gender'];
            			
            			header("Location: ../views/HomePageLoggedIn.php");
						exit();
					}
				}
			}
		}
	}
	else {
		echo "invalid input";
		exit();
	}

?>