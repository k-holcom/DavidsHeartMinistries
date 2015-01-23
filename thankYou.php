<?php
require("includes/includes.php");

//getting information from the form on the contact page
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

//creating the email that is to be sent when the submit button is clicked
$to = "dan@davidsheart.us";
$subject = "From $name at $email";
$body = "From: $name \n\nMessage: \n\n$message";
$header = "From: $email";
mail($to, $subject, $body, $header);
?>


<!doctype html>
<html>
<head>
<link rel="icon" type="image/png" href="images/logo_heart.png" />
<meta charset="UTF-8">
<title>Thank You!</title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
<link type="text/css" rel="stylesheet" href="css/main.css" />

</head>

<body>
<?php echo heading(); ?> 
<div class="row" id="mainContent">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-push-3">
    	Thank you for contacting us. We will reply as soon as possible.
    </div>
    <br />
    <div class="row">
    	<div class="col-lg-2 col-lg-push-5" style="text-align:center">
        	<span style="color:#FFFFFF">&larr;</span> <a href="index.php" id="contactLinks">Home</a>
        </div>
    </div>
</div>
<?php echo foot(); ?>
</body>
</html>
