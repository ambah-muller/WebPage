<?php
  session_start();
  //check if login button was clicked (not bypassing login page)
  if(isset($_POST['login'])){
    include 'dbh.inc.php';  //connection to db

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //error handlers

    //check if input is empty
    if(empty($username) || empty($password)){
      echo "Fill in all boxes";
      header("Location: ../views/Login.html");
      
      exit();
    }
    else {
      //check if username exists
      $sql = "SELECT * FROM user WHERE Username='$username'";

      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if($resultCheck < 1) {  //no rows = no match...username does not exist
        echo "Invalid Input";
        header("Location: ../views/Login.html");
        exit();
      }
      else {  //correct pasword//
        if($row = mysqli_fetch_assoc($result)){
          //De-hashing password
          //$hashedPassword = password_verify($password, $row['password']);
          $password_verify = $row['UserPassword'];

          //check if true or false result
          if($password != $password_verify) { //$hashedPassword === false
            echo "password incorrect";
            header("Location: ../views/Login.html");
            exit();
          }
          elseif($password == $password_verify) { //make cookies
            //Login user and storing info into session variables for use throughout the website
            $_SESSION['Username'] = $row['Username'];
            $_SESSION['UserPassword'] = $row['UserPassword'];
            $_SESSION['Email'] = $row['Email'];
            $_SESSION['FirstName'] = $row['FirstName'];
            $_SESSION['Surname'] = $row['Surname'];
            $_SESSION['Gender'] = $row['Gender'];
            //anon

            header("Location: ../views/HomePageLoggedIn.php");
            exit(); //Make sure code below doesnt execute when redirected
          }
        }
      }
    }
  }
  else {
    exit();
  }
?>