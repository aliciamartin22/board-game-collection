<?php
session_start();

if($_SESSION['logged-in'] == false){
	echo("You are not allowed to view this page");
	?><a href="login.php">Go to login</a><?php
}else{

$dsn = "mysql:host=localhost;dbname=martalic_individual;charset=utf8";
$dbusername = "martalic_admin";
$dbpassword = "SheridanCollege";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$q = $_GET['q'];

$stmt = $pdo->prepare("SELECT * FROM `games` WHERE `gameId` = '$q'");
$stmt1 = $pdo->prepare("SELECT `games`.`gameId`, `games`.`gameName`, `games`.`numbPlayers`, `games`.`playLength`, `games`.`filename`, `games`.`difficulty`, `gameId-id`.`id`
	 	FROM `games` INNER JOIN `gameId-id` ON `gameId-id`.`gameId` = `games`.`gameId` WHERE `gameId-id`.`id`= '$q'");

 $stmt->execute();
 $stmt1->execute();
}
?>

<!doctype html>
<html lang="en">
<head>
	<link rel="icon" type="image/png" href="favicon-64x64.png" sizes="64x64" />
</head>
<body>
	<div>
		<?php
		while($row = $stmt->fetch()) {
		?>
		  <div>
		  <br><img src="uploads/<?php echo($row["filename"]);?>" width="100" height="100"/>
		  <p>Name of Game: <?php echo($row["gameName"]); ?></p>
		  <p>Number of Players: <?php echo($row["numbPlayers"]); ?></p>
		  <p>Difficulty: <?php echo($row["difficulty"]); ?></p>
		  <p>Length of Play: <?php echo($row["playLength"]); ?></p>
		  </div>
		<?php }
		 while($row = $stmt1->fetch()) {
		 ?>
		 <div>
		 	<input type="hidden" value="<?php echo $row['$q'];?>"/>
	 	</div>
	<?php }
	?>

	<!-- SCRIPTS -->
	<script src="js/script.js"></script>
</body>
</html>
