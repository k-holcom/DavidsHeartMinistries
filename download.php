<?php
//connecting to database to pull information
require 'includes/connect.php';
$result = $db->query('SELECT * FROM songs WHERE songID = ' . $db->real_escape_string($_GET['songId']));
$row = $result->fetch_assoc();

//forcing download (on click) instead of opening up in another media player
header('Content-type:audio/mp3');
header('Content-Disposition: attachment; filename = "' .$row['fileName'] . '"');
readfile("music/" . $row['fileName']);


?>
