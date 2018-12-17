<?php
//receive values user submitted from form
$username = $_POST['username'];
$password = $_POST['password'];

//perform database insert using form values;
$dsn = "mysql:host=localhost;dbname=martalic_individual;charset=utf8";
$dbusername = "martalic_admin";
$dbpassword = "SheridanCollege";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES (NULL, '$username', '$password', 2); ");

$stmt->execute();

header("Location: login.html");
?>
