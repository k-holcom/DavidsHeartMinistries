<?php
require("includes/includes.php");
?>

<!doctype html>
<html>
<head>
<link rel="icon" type="image/png" href="images/logo_heart.png" />
<meta charset="UTF-8">
<title>Contact Us</title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
<link type="text/css" rel="stylesheet" href="css/main.css" />
<link type="text/css" rel="stylesheet" href="css/buttons.css" />
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>

<body>
<?php echo heading(); ?>
<div class="row" id="mainContent">
  <div class="col-lg-4 col-md-3 col-lg-push-1 col-md-push-1">
  	<h2 id="contact">CONTACT US</h2>
    
    <div class="row">
    	<div class="col-lg-9 col-lg-push-1 hidden-sm hidden-xs" id="email">
        	Email Us at:
        </div>
    </div>
    <div class="row">
    	<div class="col-lg-9 col-lg-push-1 hidden-md hidden-sm hidden-xs" style="text-align:center;">    
            <a href="mailto:dan@davidsheart.us" id="contactLinks">dan@davidsheart.us</a>
        </div>
    </div>
  </div>
  <div class="col-lg-5 col-md-5 col-lg-push-2 hidden-sm hidden-xs">
  	<p><?php echo $errors; ?></p>
    <form method="post" name="contact" action="thankYou.php">
      <div class="row">
        <input type="text" class="formField" style="margin-top:0px;" name="name" placeholder="Your Name" />
      </div>
      <div class="row">
        <input type="text" class="formField" name="email" placeholder="Your Email" />
      </div>
      <div class="row">
        <textarea name="message" id="message" placeholder="Type Your Message To Us Here"></textarea>
      </div>
      <div class="row">
      	<input type="submit" name="submit" value="Submit" class="button" style="margin:5px" />
      </div>
    </form>
  </div>
  <div class="col-sm-5 col-sm-push-3 visible-sm ">
    <form method="post" name="contact" action="thankYou.php">
      <div class="row">
        <input type="text" class="formFieldsm" style="margin-top:0px;" name="name" placeholder="Your Name" />
      </div>
      <div class="row">
        <input type="text" class="formFieldsm" name="email" placeholder="Your Email" />
      </div>
      <div class="row">
        <textarea name="message" id="messagesm" placeholder="Type Your Message To Us Here"></textarea>
      </div>
    </form>
  </div>
  <div class=" col-xs-8 visible-xs">
    <form method="post" name="contact" action="thankYou.php">
      <div class="row">
        <input type="text" class="formFieldxs" style="margin-top:0px;" name="name" placeholder="Your Name" />
      </div>
      <div class="row">
        <input type="text" class="formFieldxs" name="email" placeholder="Your Email" />
      </div>
      <div class="row">
        <textarea name="message" id="messageXs" placeholder="Type Your Message To Us Here"></textarea>
      </div>
    </form>
  </div>
</div>
<?php echo foot(); ?> 

</body>
</html>