<?php
	require("includes/includes.php");
	require("includes/connect.php");

	//information pulled from database for list of songs
	$result = $db->query("SELECT * FROM songs");
	
?>
<!doctype html>
<html>
<head>
<link rel="icon" type="image/png" href="images/logo_heart.png" />
<meta charset="UTF-8">
<title>Music</title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>

<body>
<?php echo heading(); ?>
<div class="row" id="mainContent">
  <table class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-lg-push-2 col-md-push-2 col-sm-push-2 col-xs-push-2">
    <tr>
    	<th class="hidden-sm hidden-xs">Song Title</th>
        <th class="hidden-sm hidden-xs">Sung By:</th>
        <th class="visible-sm visible-xs" id="thXs">Song Title</th>
    </tr>
    <?php while($row = $result->fetch_assoc()){ ?>
    <tr>
    	<td class="hidden-sm hidden-xs"><a href="song.php?songId=<?php echo $row['songId']; ?>" id="musicLinks"><?php echo $row['songName']; ?></a></td>
        <td class="hidden-sm hidden-xs" id="sungBy"><?php echo $row['sungBy']; ?></td>
        <td class="visible-sm visible-xs" id="textXs"><a href="song.php?songId=<?php echo $row['songId']; ?>" id="musicLinks"><?php echo $row['songName'];?></a></td>
    </tr>
    <?php } ?>
  </table>
  
</div>
<?php echo foot(); ?>
</body>
</html>