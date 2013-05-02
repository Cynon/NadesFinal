<?php
mysql_connect('localhost:3306','root','QWEasdzx00');
mysql_select_db('android_app');

$q=mysql_query("SELECT phone_number FROM android_app.player WHERE username='".$_REQUEST['friend_username']."';");
	while($e=mysql_fetch_assoc($q))
        $output[]=$e;

print(json_encode($output));

mysql_close();
?>