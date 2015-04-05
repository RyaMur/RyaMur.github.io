<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Contact SammyTheArtist</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="_css/normalize.css">
        <link rel="stylesheet" href="_css/main.css">
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="_js/modernizr-2.6.1.min.js"></script>
        <script src="_js/bjqs.min.js"></script>
        <link type="text/css" rel="Stylesheet" href="_css/bjqs.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div id="wrapper"> 
        <header><img src="_img/sammylogo.png" alt="sammy logo">The Artwork of Samantha (Allen) Little<img id="selfPortrait"src="_img/self portrait sm.jpg" alt="Self Portrait"></header>
        <nav>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="gallery.html">GALLERY</a></li>
                <li><a href="commission.html">COMMISSION PRICES</a></li>
                <li><a href="sale.html">ART FOR SALE</a></li>
            </ul>
        </nav>
        <div class="mainContent">
            <form class="mainContent" action="FormToEmail.php" method="post">
                <fieldset>
                  <label for="last_name">Last Name:</label>
                  <input id="last_name" type="text" size="30" name="last_name" required tabindex="1" autofocus/><br><br>
                  <label for="first_name">First Name:</label>
                  <input id="first_name" type="text" size="30" name="first_name" required tabindex="2"/><br><br>
                  <label for="email">E-Mail Address:</label>
                  <input id="email" type="text" size="30" name="email" required tabindex="3"/><br><br>
                </fieldset>
                  <label for="comments">Enter a Comment:</label><br/>
                  <textarea id="comments" name="comments" rows="8" cols="80"></textarea><br><br>
                  <input type="submit" value="Submit Comment">
            </form>
        </div>
        <footer>
                <a href="index.html">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="about.html">ABOUT THE ARTIST</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contact.php">CONTACT</a>
                <br>PO BOX 280 Prospect,OR 97536
                <br>Phone:  541.560.4045
                <br>&copy;SammyTheArtist                     
        </footer>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
