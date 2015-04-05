<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

	//Setting up the form values
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$email = $_POST["email"];
	
	//Update db
        $sql = "INSERT INTO NewsletterRegistrations (FirstName, LastName, Email) VALUES (?,?,?)";
	$mysqli = new mysqli("fdb3.biz.ht","1155213_bg","bloodbought01","1155213_bg");
        $statement = $mysqli->prepare($sql);
        $statement->bind_param("sss",$firstName, $lastName, $email);
        $statement->execute();
        
        
        $result = $mysqli->query($sql);
       
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Bored Gamer-Register with the Bored Gamer to stay updated on board game news and events</title>
        <meta name="description" content="Register with The Bored Gamer to stay updated with local board game news, information and reviews.">
        <meta name="keywords" content="boardgame, boardgames, board game, board games, board, game, games, register">
        <meta name="author" content="Ryan Murphy">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

      
        <script>
            var _gaq=[['_setAccount','UA-37651352-1'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

       <div class="wrapper">
	<header> 
   <img src="ImageAssets/boredgamer.jpg" alt="The Bored Gamer" />
 	</header>
   
   <nav class="horizontalNAV">
   	<ul>
   		<li><a href="index.html">HOME</a></li>
      	<li><a href="library.html">GAME LIBRARY</a></li>
      	<li><a href="review.html">REVIEWS</a></li>
         <li><a href="register.php">REGISTER</a></li>
      </ul>
   </nav>
   
 <form id="registrationform" method="post" >
   	<h2><strong>Please Register to Receive News and Updates on Boardgame Reviews and Events</strong></h2>
      <input type="text" name="firstName" placeholder="First Name" required tabindex="1"><br>
      <input type="text" name="lastName" placeholder="Last Name" required tabindex="2"><br>
      <input type="email" name="email" placeholder="Email" required tabindex="3"><br>
      <button type="submit" name="register" tabindex="4" onClick="_gaq.push(['_trackEvent','Registration','Submit']);">Register</button>
   </form>
  
	<footer>
   	<address>The Bored Gamer &nbsp;&#9830;&nbsp; Ryan Murphy &nbsp;&#9830;&nbsp;<a href="mailto:ryamur01@gmail.com?subject=The%20Bored%20Gamer"><em>Contact Me</em></a>
        <br>Medford, OR 97504
      </address>
   </footer>
   </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

      
    </body>
</html>
