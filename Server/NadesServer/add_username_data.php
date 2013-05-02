<?php

mysql_connect('localhost:3306','root','QWEasdzx00');
mysql_select_db('android_app');
 
$query=mysql_query("INSERT INTO android_app.player (username, password, phone_number, game_id) VALUES
		('".$_REQUEST['username']."','".$_REQUEST['password']."','".$_REQUEST['phone_number']."',".$_REQUEST['game_id'].");");
$output[]="INSERT INTO android_app.player (username,password,phone_number,game_id) VALUES
		('".$_REQUEST['username']."','".$_REQUEST["password"]."','".$_REQUEST['phone_number']."',".$_REQUEST['game_id'].");";
print(json_encode($output));
 
mysql_close();
?>