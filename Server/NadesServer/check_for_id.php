<?php

mysql_connect('localhost:3306','root','QWEasdzx00');
mysql_select_db('android_app');

$q=mysql_query("SELECT MAX(player_id) FROM android_app.player ;");
if(mysql_num_rows($q)>0){
	$output[] = 'true';
}else{
	$output[] = 'false';
}
print(json_encode($output));

mysql_close();
?>