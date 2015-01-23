<?php
require("includes/includes.php");
?>
<!doctype html>
<html>
<head>
<link rel="icon" type="image/png" href="images/logo_heart.png" />
<meta charset="UTF-8">
<title>Calendar</title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>

<body>
<?php echo heading(); ?>
<div class="row">
	<div class="col-lg-6 col-lg-push-3">
    <iframe src="https://www.google.com/calendar/embed?src=davidsheart.us%40gmail.com&ctz=America/New_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </div>
</div>
<?php echo foot(); ?>
<script src="js/bootstrap.js"></script>
</body>
</html>