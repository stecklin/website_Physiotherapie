<?php
/**
 * Project: praxis
 * User: Christian Steusloff
 * Date: 30.01.14
 * Time: 12:50
 */

// Bootstrap 3.0 -> mobile first

// responsive images
// <img src="..." class="img-responsive" alt="Responsive image">

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--    mobile Device like native app  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no">
</head>
<body>


<div class="container-fluid">
    <div class="header navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><h2 id="physio"><span class="maincolor">Physiotherapie</span><br> <span class="grey_font">am Gesundbrunnen-Center</span></h2></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/Physiotherapie/website_Physiotherapie/praxis/bootstrap/#">
                        <button id="loginbutton" type="button" class="btn btn-primary narbar-btn">Startseite</button>
                    </a></li>
                <li><a href="#">
                        <button id="loginbutton" type="button" class="btn btn-link narbar-btn">Therapie</button>
                    </a></li>
                <li><a href="#">
                        <button id="loginbutton" type="button" class="btn btn-link narbar-btn">Praxis</button>
                    </a></li>
                <li><a href="#">
                        <button id="loginbutton" type="button" class="btn btn-link narbar-btn">Kontakt</button>
                    </a></li>
            </ul>
        </div>
    </div>

	<div id="banner">
        <h1 id="welcome">Praxis</h1>
	</div>
  
	<div class="row">
		<div class="col-xs-12 col-sm-4">
			<img src="praxis.png" class="img-responsive" alt="Praxis">
		</div>
		<div class="col-xs-4">
			<img src="empfang.png" class="img-responsive hidden-xs" alt="Praxis">
		</div>
		<div class="col-xs-4">
			<img src="praxis.png" class="img-responsive hidden-xs" alt="Praxis">
		</div>
	<div>		

	<div class="row">
		<div class="col-xs-12">
			<div class="panel-heading">Unsere Räumlichkeiten<div/>
			<div class="panel-body">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod 
				tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At 
				vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
				no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
				consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
				dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo 
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem 
				ipsum dolor sit amet.
			</div>
		</div>
	</div>

    <footer>
        <ul id="info">
            <li>Physiotherapie am Gesundbrunnen-Center</li>
            <li>Behmstraße 23, 13357 Berlin</li>
            <li>Rita Seidler & Andrea Klonz</li>
        </ul>
        <ul id="copyright">
            <li>&copy; 2014</li>
            <li><a href="http://submit-ev.de">submit e.V.</a></li>
            <li><a href="#">Impressum</a></li>
            <li>Kontakt</li>
        </ul>
    </footer>
</div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>