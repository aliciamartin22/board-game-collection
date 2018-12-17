<?php
session_start();

if($_SESSION['logged-in'] == false){
    echo("You are not allowed to view this page");
    ?><a href="login.html">Go to login</a><?php
}else if($_SESSION['role'] == 1 || $_SESSION['role'] == 2 ){

//perform database insert using form values;
$dsn = "mysql:host=localhost;dbname=martalic_individual;charset=utf8";
$dbusername = "martalic_admin";
$dbpassword = "SheridanCollege";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $db = $pdo->prepare("SELECT * FROM `scores`");
$stmt1 = $db = $pdo->prepare("SELECT * FROM `games` WHERE `catOne`='Strategy'");

$stmt->execute();
$stmt1->execute();

?>

<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <meta name="description" content="Board Game Application">
        <meta name="author" content="Alicia Martin">
        <meta name="keywords" content="collection, board games">
        <title>Stats | Board Game Application</title>

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
		     <h1>Playing Statistics</h1>
             <h2>Games Played Over Last 6 Months</h2>
                 <table id="siteTable">
                     <tr id="myTr1"></tr>
                     <tr id="myTr2"></tr>
                 </table>

    		<div>
    			<h2>Playing History</h2>
    			<?php
    			//show records (process results)
    			while($row = $stmt->fetch()) {
    				//echo($row["email"]); //or $row[0];
    				?><div>
    					<p>Name of Game: <?php echo($row["game"]);?></p>
    					<p>Players: <?php echo($row["player1name"]); ?> <?php echo($row["player2name"]); ?> <?php echo($row["player3name"]); ?> <?php echo($row["player4name"]); ?> <?php echo($row["player5name"]); ?> <?php echo($row["player6name"]); ?></p>
    					<p>Scores: <?php echo($row["player1score"]); ?> <?php echo($row["player2score"]); ?> <?php echo($row["player3score"]); ?> <?php echo($row["player4score"]); ?> <?php echo($row["player5score"]); ?> <?php echo($row["player6score"]); ?></p>
    				</div>
                    <br>
    			<?php }
    			?>
    		</div>
        </div>

        <div class="col-3 right">
            <div class="aside">
                <h2>Played Recently?</h2>
                <p><a href="scorecard.php">Log A Game</a>
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

      <!--  SCRIPTS-->
      <script src="js/script.js"></script>
</body>
</html>

<?php
}else{
//redirect to login page if invalid
header("Location: login.html");
}
