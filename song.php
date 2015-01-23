<?php
//connecting to file with header and footer code, and connecting to database
	require("includes/includes.php");
	require("includes/connect.php");

	//pulling the information from database for the song chosen.
	$result = $db->query('SELECT * FROM songs WHERE songId ='. $db->real_escape_string($_GET['songId']));
	$row = $result->fetch_assoc();
?>

<!doctype html>
<html>
<head>
<link rel="icon" type="image/png" href="images/logo_heart.png" />
<meta charset="UTF-8">
<title><?php echo $row['songName']; ?></title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>

<body>
<?php echo heading(); ?>
<div class="row" id="mainContent">
  <h2><?php echo $row['songName']; ?></h2>
  <object type="application/x-shockwave-flash" data="music/dewplayer-rect.swf" width="200" height="20" id="dewplayer" name="dewplayer">
    <param name="wmode" value="transparent" />
    <param name="movie" value="music/dewplayer-rect.swf" />
    <param name="flashvars" value="mp3=music/<?php echo $row['fileName']; ?>&amp;autostart=1" />
  </object>
  <div class="row" id="download">
  <a href="download.php?songId=<?php echo $row['songId']; ?>" id="musicLinks">Download this song</a>
  </div>
</div>
<?php echo foot(); ?>
</body>
</html>
