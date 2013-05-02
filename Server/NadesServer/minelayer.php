<?php

require_once('./functions.php');

mysql_connect('localhost:3306','root','QWEasdzx00');
mysql_select_db('android_app');
 


$latitude = truncate($_REQUEST['latitude']);
$longitude = truncate($_REQUEST['longitude']);
$conn = mysql_connect('localhost:3306','root','');


//This is pretty much straight from SharedHere. -- Cooper
$location_id = sh_location_id($conn, $latitude, $longitude);

if ($location_id < 0) {
	$query = 'INSERT INTO location(latitude, longitude) VALUES(' . $latitude . ', ' . $longitude . ')';	
	$mysql_result = mysql_query($query);

	$location_id = sh_location_id($conn, $latitude, $longitude);
}

	$unumb = 0;

	$query = "SELECT player_id FROM android_app.player WHERE username = '" . $_REQUEST['username'] . "'";
	$mysql_result = mysql_query($query);
	$num_rows = mysql_num_rows($mysql_result);

	if ($num_rows > 0) {
		$row = mysql_fetch_row($mysql_result);
		$unumb = $row[0];
	} 

	$query = 'INSERT INTO weapons_at(location_id, player_id, weapon_id) VALUES(' . $location_id . ', ' . $unumb . ', 1)';	
	$mysql_result = mysql_query($query);


print($location_id);
 
mysql_close();
?>