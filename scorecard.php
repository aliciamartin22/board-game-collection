<?php ?>

<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <meta name="description" content="Board Game Application">
        <meta name="author" content="Alicia Martin">
        <meta name="keywords" content="collection, board games">
        <title>Scorecard | Board Game Application</title>

        <!-- CSS  -->
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
            <h1>Scorecard</h1>
            <form action="process-scorecard.php" method="POST">
                Name of Game:<input type="text" name="game" placeholder="Ex: Settlers of Catan" required autofocus/><br>
                Player 1:<input type="text" name="player1name" placeholder="Ex: Alicia" required/><br>
                Score:<input type="number" name="player1score" placeholder="Ex: 99" required/><br><br>
                Player 2:<input type="text" name="player2name" placeholder="Ex: Juliana"/><br>
                Score:<input type="number" name="player2score" placeholder="Ex: 88"/><br><br>
                Player 3:<input type="text" name="player3name" placeholder="Name"/><br>
                Score:<input type="number" name="player3score" placeholder="Score"/><br><br>
                Player 4:<input type="text" name="player4name" placeholder="Name"/><br>
                Score:<input type="number" name="player4score" placeholder="Score"/><br><br>
                Player 5:<input type="text" name="player5name" placeholder="Name"/><br>
                Score:<input type="number" name="player5score" placeholder="Score"/><br><br>
                Player 6:<input type="text" name="player6name" placeholder="Name"/><br>
                Score:<input type="number" name="player6score" placeholder="Score"/><br>
                <h2> Game Over!</h2><input class="btn-large" type="submit" />
            </form>
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

    <!--  SCRIPTS-->
    <script src="js/script.js"></script>
</body>
</html>
