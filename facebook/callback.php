<?php

session_start();
require_once('facebook.php');
require_once('config.php');

$age = $_SESSION['age'];

#NEED VALUES FOR USER ID AND ACCESS TOKEN

if($age == null) {
	$msg = "I wasn't even born the last time UW beat UO!";
}
else {
	$msg = "I was ".$age." last time UW beat UO!";
}

##CREATE ARRAY FOR ALL THE PARTS OF THE FB POST
$data['picture'] = "http://i.imgur.com/l4ZXhsf.jpg"; /*replace with my hosted version when live */
$data['link'] = "local.LastTimeUWbeatUO.com";
$data['message'] = $msg;
$data['caption'] = "www.LastTimeUWBeatUO.com";
$data['description'] = "The Oregon Ducks football team hasn't lost to the Washington Huskies since November 16th, 2002. Calculate how old you were last time UW beat UO and share with your friends!";
$data['access_token'] = $page_access_token;

##URL WE ARE SENDING THE ARRAY TO
$post_url = 'https://grah.facebook.com/'.$user_id.'/feed';

##CURL SENDS THE HTTP REQUEST TO THAT URL INCLUDING OUR DATA
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $post_url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$return = curl_exec($ch);

if(curl_errno($ch)) {
	#PASS ERROR THRU TO ERROR PAGE AND DISPLAY, APOLOGIZE, LINK BACK TO HOME
	$_SESSION['error_msg'] = curl_error($ch);
	header('Location: ./../error.php');
}
else {
	header('Location: ./../thanks.php');
}

#DOES IT EXECUTE THIS LINE SINCE I CAHNGE URL ABOVE?
curl_close($ch);
?>