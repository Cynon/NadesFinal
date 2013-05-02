<?php
// Set POST variables
$url = 'https://android.googleapis.com/gcm/send';

$apikey = "AIzaSyDO-ugOwpuhpWM4pnfZ3j3RO54_jGs-5mE";

$registrationIDs = array($_REQUEST['regID']);
$message = $_REQUEST["message"];

$fields = array(
		'registration_ids' => $registrationIDs,
		'data' => array("message" => $message),
);

$headers = array(
		'Authorization: key=' . $apikey,
		'Content-Type:' . ' application/json'
);
// Open connection
$ch = curl_init();

// Set the url, number of POST vars, POST data
curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Disabling SSL Certificate support temporarly
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

// Execute post
$result = curl_exec($ch);

// Close connection
curl_close($ch);
$output[] = $result;
print(json_encode($output));
?>