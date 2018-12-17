<?php

session_start();

if($_SESSION['logged-in'] == false){
	echo("You are not allowed to view this page");
	?><a href="login.php">Go to login</a><?php
}else{

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];

/*execute update*/
$dsn = "mysql:host=localhost;dbname=martalic_individual;charset=utf8";
$dbusername = "martalic_admin";
$dbpassword = "SheridanCollege";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("UPDATE `users` SET `username` = '$username', `password` = '$password' WHERE `users`.`id` = $id");
$stmt->execute();

header("Location: game-collection.php");
?>
<?php
} ?>
