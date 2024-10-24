<?php
session_start();

$valid_username = 'admin';
$valid_password = '12345';

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == $valid_username && $password == $valid_password) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("Location: Dashboard.php");
    exit();
} else {
    header("Location: Login.php?error=1");
    exit();
}
?>