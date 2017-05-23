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
<? session_start();
?>
        <div class="container gallery">
            <h2 class="page-title">Gallery</h2>
		<div align="center">
			<hr>
		<a class="btn btn-large " href="index.php">Home</a>	
		<a class="btn btn-large " href="#">Upload a picture</a>	
		<a class="btn btn-large " href="main.php">Your gallery</a>	
		<hr>
      	<br>
        <h3> Here you can upload your photos/pictures !</h3>
	<h5>Allowed extensions: .gif; .png<br> Maximum size : 1mb. </h5>
		<br>	
		<div class="row">		
<form action="upload_file.php" method="post"
 enctype="multipart/form-data">
 <input type="file" name="file" id="file" ><br>
 <br>
 <input type="submit" name="submit" value="Submit" class="btn btn-large btn-success">
 </form>			
	</div>
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
	<script src="js/jquery.js"></script>

    </body>
</html>
