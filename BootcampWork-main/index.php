<?php
session_start();
ob_start();




$username = $_SESSION["username"];
$password = $_SESSION["password"];


if (isset($username) && isset($password)) {

  // $_SESSION["username"] = $_POST["username"];
  // $_SESSION["password"] = $_POST["password"];

  header('location: posts.php');
} else {
  header('location: login.php');
}
