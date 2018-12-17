<?php
session_start();

if($_SESSION['logged-in'] == false){
    echo("You are not allowed to view this page");
    ?><a href="login.html">Go to login</a><?php
}else {

//values from add-game.html
$target_dir = 'uploads/';
$target_file = $target_dir . basename($_FILES['filename']['name']);
$filename = $_FILES['filename']['name'];
$gameName = $_POST['gameName'];
$numbPlayers = $_POST['numbPlayers'];
$difficulty = $_POST['difficulty'];
$playLength = $_POST['playLength'];
$catOne = $_POST['catOne'];
$catTwo = $_POST['catTwo'];

//perform database insert using form values
$dsn = "mysql:host=localhost;dbname=martalic_assignment1;charset=utf8";
$dbusername = "martalic_admin";
$dbpassword = "SheridanCollege";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `games` (`gameId`, `gameName`, `numbPlayers`, `difficulty`, `playLength`, `catOne`, `catTwo`, `filename`)
    VALUES (NULL, '$gameName', '$numbPlayers', '$difficulty', '$playLength', '$catOne', '$catTwo', '$filename'); ");

$stmt->execute();

header("Location: game-collection.php");

} ?>
