<?php
session_start();

if($_SESSION['logged-in'] == false){
	echo("You are not allowed to view this page");
	?><a href="login.php">Go to login</a><?php
}else{

$dsn = "mysql:host=localhost;dbname=martalic_individual;charset=utf8";
$dbusername = "martalic_admin";
$dbpassword = "SheridanCollege";

$db = $pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $db= $pdo->prepare("SELECT * FROM `games`");

$stmt->execute();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <meta name="description" content="Board Game Application">
    <meta name="author" content="Alicia Martin">
    <meta name="keywords" content="collection, board games">
    <title>Game Collection | Board Game Application</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/main1.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="icon" type="image/png" href="favicon-64x64.png" sizes="64x64" />
</head>

<body>
    <!-- NAVIGATION -->
    <div class="header">
      <a href="index.html" target="_blank"><img src="logo.png"/></a>
    </div>

    <div class="row">
        <div class="col-3 menu">
            <ul>
                <li><a href="scorecard.php">Scorecard</a></li>
                <li><a href="game-collection.php">Game Collection</a></li>
                <li><a href="stats.php">Stats</a></li>
                <li><a href="account-settings.php">Account Settings</a></li>
            </ul>
        </div>

        <div class="col-6">
            <div>
            <h2>My Game Collection</h2>
            <form>
        		<select name="gameName" onchange="showGame(this.value)">
        		<option value="">View A Collection:</option>
        		<option value="1">My Board Games</option>
        		</select>
		    </form>
    		<br>
    		<div id="txtHint-game"><b>Use this dropdown box to view games currently in your collection</b></div>
            </div>
			<div>
				<br>
				<h2>Browse All Games</h2>
				<div>
	                <?php
	                while($row = $stmt->fetch()) {
	                ?>
	                  <div>
	                  <p>Game ID #:<?php echo($row["gameId"]);?></p>
					  <br><img src="uploads/<?php echo($row["filename"]);?>" width="100" height="100"/>
	                  <p>Name of Game: <?php echo($row["gameName"]); ?></p>
	                  <p>Number of Players: <?php echo($row["numbPlayers"]); ?></p>
					  <p>Difficulty Level: <?php echo($row["difficulty"]);?></p>
	                  <p>Length of Play: <?php echo($row["playLength"]); ?></p>
					  <br>
	                  </div>
	                <?php }
	                ?>
	            </div>
			</div>
        </div>

          <div class="col-3 right">
              <div class="aside">
                  <h2>Found A New Game?</h2>
                  <p><a href="add-game.html">Add Game</a></p>
            </div>
        </div>
    </div>

      <!-- FOOTER -->
      <div class="row" id="footer-bg">
          <div class="col-4">
              <div class="footer-style">
                <h4 class="footer-text">Menu</h4>
                  <p><a href="sign-up.html">Sign Up</a><p>
                  <p><a href="login.html">Login</a><p>
              </div>
          </div>
          <div class="col-4">
              <div class="footer-style">
                  <h4 class="footer-text">Connect</h4>
                      <p><a href="https://github.com/aliciamartin22?tab=repositories" target="_blank">Github</a><p>
                      <p><a href="https://dribbble.com/canuckmade" target="_blank">Dribble</a><p>
                      <p><a href="https://www.linkedin.com/in/ammart89/" target="_blank">LinkedIn</a><p>
              </div>
          </div>
          <div class="col-4" >
              <div class="footer-style">
                  <h4 class="footer-text">Accept Cookies</h4>
                  <p id="cookies" onclick="myFunction()">An HTTP cookie is a simple computer file made of text. The information stored in cookies can be used to personalise the experience when using a website. I'm aware cookies are used on this site: <a href="#">Accept Cookies</a></p>
              </div>
          </div>
      </div>
      <div id="footer-darkbg" class="col-12">
          <p class="footer-text">Made by <a href="http://www.canuckcollective.com" target="_blank">Alicia Martin</a></p>
      </div>

      <!--  SCRIPTS -->
      <script src="js/script.js"></script>
</body>
</html>
