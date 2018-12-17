<?php
 session_start();
 session_destroy();
?>

<!doctype html>
<html lang="en">
<head>
	    <meta charset="utf-8">
	    <title>Board Game Application</title>
        <meta name="description" content="Board Game Application">
        <meta name="author" content="Alicia Martin">
        <meta name="keywords" content="collection, board games">
	    <link rel="icon" type="image/png" href="favicon-64x64.png" sizes="64x64" />
		<link rel="stylesheet" type="text/css" href="css/main1.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:500|Roboto" rel="stylesheet">
</head>
<body>
    <!-- NAVIGATION -->
    <div class="header">
      <a href="index.html">Logo</a>
      <!-- <a href="index.html" target="_blank"><img src="images/logo.png" width="100" height="100"/></a> -->
    </div>

    <div class="row">
        <div class="col-9">
        	<h2>You've successfully been logged out!</h2>
        </div>

        <div class="col-3 right">
            <div class="aside">
                <h3><a href="login.html">Click Here to Login Again</a></h3>
            	<h3><a href="index.html">Click Here to Home Page</a></h3>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="row" id="footer-bg">
        <div class="col-3" >
            <div class="footer-style">
                <h4 class="footer-text">Accept Cookies</h4>
                <p id="cookies" onclick="myFunction()">An HTTP cookie is a simple computer file made of text. The information stored in cookies can be used to personalise the experience when using a website. I'm aware cookies are used on this site: <a href="#">Accept Cookies</a></p>
            </div>
        </div>
        <div class="col-6">
            <div class="footer-style">
              <h4 class="footer-text">Menu</h4>
                <p><a href="sign-up.html">Sign Up</a><p>
                <p><a href="login.html">Login</a><p>
            </div>
        </div>
        <div class="col-3 right">
            <div class="footer-style">
                <h4 class="footer-text">Connect</h4>
                    <p><a href="https://github.com/aliciamartin22?tab=repositories" target="_blank">Github</a><p>
                    <p><a href="https://dribbble.com/canuckmade" target="_blank">Dribble</a><p>
                    <p><a href="https://www.linkedin.com/in/ammart89/" target="_blank">LinkedIn</a><p>
            </div>
        </div>
    </div>
    <div id="footer-darkbg" class="col-12">
        <p class="footer-text">Made by <a href="http://www.canuckcollective.com" target="_blank">Alicia Martin</a></p>
    </div>
</body>
</html>
