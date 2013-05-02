<?php

//Slight modification to code that was present in SharedHere. 
//I do not recall if I wrote this or if the SharedHere team themselves did, but I am 95% sure I did not write this originally. -- Cooper.

function sh_location_id($db_conn, $latitude, $longitude) {
	$query = "SELECT * FROM android_app.location WHERE latitude = \"$latitude\" and longitude = \"$longitude\"";
	$mysql_result = mysql_query($query);
	$num_rows = mysql_num_rows($mysql_result);

	if ($num_rows > 0) {
		$row = mysql_fetch_row($mysql_result);
		return $row[0];
	} else {
		return -1;
	}
}

//Essentially identical to another function in SharedHere, but modified to make it easier to use slightly. 
//This is used for trimming latitude and longitude.
function truncate($string) {
	return substr($string, 0, 1 + strpos($string, ".") + 4);
}



?>
