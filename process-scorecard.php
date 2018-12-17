<?php

//receive values user submitted from form
$scoreId = $_POST['scoreId'];
$game = $_POST['game'];
$player1name = $_POST['player1name'];
$player1score = $_POST['player1score'];
$player2name = $_POST['player2name'];
$player2score = $_POST['player2score'];
$player3name = $_POST['player3name'];
$player3score = $_POST['player3score'];
$player4name = $_POST['player4name'];
$player4score = $_POST['player4score'];
$player5name = $_POST['player5name'];
$player5score = $_POST['player5score'];
$player6name = $_POST['player6name'];
$player6score = $_POST['player6score'];

//perform database insert using form values;
$dsn = "mysql:host=localhost;dbname=martalic_individual;charset=utf8";
$dbusername = "martalic_admin";
$dbpassword = "SheridanCollege";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `scores` (`scoreId`, `game`, `player1name`, `player1score`, `player2name`, `player2score`, `player3name`, `player3score`, `player4name`, `player4score`, `player5name`, `player5score`, `player6name`, `player6score`)
    VALUES ('$scoreId', '$game', '$player1name', '$player1score', '$player2name', '$player2score', '$player3name', '$player3score', '$player4name', '$player4score', '$player5name', '$player5score', '$player6name', '$player6score'); ");

$stmt->execute();

header("Location: stats.php");

?>
