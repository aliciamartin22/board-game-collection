<?php
session_start();
//receive username and passowrd
$username = $_POST['username'];
$password = $_POST['password'];

//check admin table for valid username and password
$dsn = "mysql:host=localhost;dbname=martalic_individual;charset=utf8";
$dbusername = "martalic_admin";
$dbpassword = "SheridanCollege";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("
	SELECT * FROM `users`
	WHERE `username` = '$username'
	AND `password` = '$password'");

$stmt->execute();

if($row = $stmt->fetch()){
	//start session if valid and redirect to dashboard
	$_SESSION['logged-in'] = true;
	$_SESSION['username'] = $row['username'];
	$_SESSION['role'] = $row['role'];
	$_SESSION['id'] = $row['id'];

	header("Location: game-collection.php");

}else{
	//redirect to login page if invalid
	header("Location: login.html");
}
?>
