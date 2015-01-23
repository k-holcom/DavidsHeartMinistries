<?php
//File includes the coding for header and footer
require("includes/includes.php");
?>

<!doctype html>
<html>
<head>
<link rel="icon" type="image/png" href="images/logo_heart.png" />
<meta charset="UTF-8">
<title>About Us</title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
<link type="text/css" rel="stylesheet" href="css/main.css" />
<link type="text/css" rel="stylesheet" href="css/buttons.css" />
</head>

<body>
	<?php echo heading(); ?>
    <div class="row">
    	<div class="col-lg-4 col-sm-4 col-lg-push-1 col-sm-push-1">
        	<img src="images/dan.jpg" class="img-circle img-responsive" id="photo"/>
        </div>
        <div class="col-lg-5 col-md-7 col-sm-5 col-lg-push-1 col-sm-push-2" id="mainContent">
            <p id="aboutInfo">My name is Dan Whitmer. I have been singing for as long as I can remember.  When I was a young teenager, the Pastor's wife at that time, Pam Calhoon,  saw  something in me. She taught me to sing, at the time bass, with some friends in the church as a quartet. I went on from there to sing in  a few quartets.  The Believers, The New Believers, and Zephaniah. I then went  on to sing with a friend of mine, RJ Woodard as a duet.  I have been fortunate to be able to do concerts with such singing groups as the Cathedrals, Spokesman, and The Watchmen.</p>
          <p id="aboutInfo">A lot has happened in the last few years where I have not been able to sing due to medical issues, and now that those for the most part are behind me, and during the last year I have been bringing my daughters and wife into the ministry. Hence the name David's Heart.             
            My wife, Tina, and my youngest daughter, Sara, sing with me and my oldest daughter, Kim, runs sound, and at time will sign some of our songs as we sing them. </p>
          <p id="aboutInfo">David's Heart Ministries is just that, a ministry. When I was living in Niagara Falls, NY,  We had the great privilege of ministering in several churches but more importantly, we were able to minister in many city missions and coffee houses in Niagara Falls and inner city Buffalo.
            If you would like to schedule a concert with David's Heart, there are no  conditions or set fee for us coming to minister to your church or group. I have said it before and still true today, We are not in this for fame or money, We are in it for the ministry and what God wants to do through us.</p>
          <p id="aboutInfo">For Scheduling information go to: &nbsp; <a href="contact.php"><button class="button">Contact</button></a></p>
        </div>
    </div>
    <?php foot(); ?>
<script src="js/bootstrap.js"></script>
</body>
</html>