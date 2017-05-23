<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>BaltCTF Gallery</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Yesteryear' rel='stylesheet' type='text/css'>
    </head>
    <body>
<?php
 session_start(); 
?>	
        <div class="container gallery">	
            <h2>Gallery</h2>
   		<br>
		<div align="center">
		<hr>
		<a class="btn btn-large " href="#">Home</a>	
		<a class="btn btn-large " href="upload.php">Upload a picture</a>	
		<a class="btn btn-large " href="main.php">Your gallery</a>	
		<hr>		
        <h3> Welcome to our completely free pitucre hosting & service - "Gallery". </h3>
        <h4> You can upload your own photos/pictures and flick through them online. Every user has its own unique album.</h4>


        <a class="btn btn-large btn-success" href="upload.php">Start</a>
          </div>
		<br>
		<br>
		<br>
          <footer>
            		    <p><span class="pull-right credits">
				<a>BaltCTF 2013</a></span></p>
          </footer>
        </div> 
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/main.js"></script>
	<script src="css/bootstrap.css"></script>
    </body>
</html>
