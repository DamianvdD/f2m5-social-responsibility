<?php
    session_start();
    $username = "student";
    $password = "amsterdam";
    $hash = hash($password, PASSWORD_DEFAULT);
    if($_POST['username'] == $username && $_POST['password'] == password_verify($hash)) {
      echo "Je bent ingelogd!";
      $sessie = $_SESSION['ingelogd'];
    }
    else{
      //terugverwijzen naar login.html
      header("login.php");
    }
?>