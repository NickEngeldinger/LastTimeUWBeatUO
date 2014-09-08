<?php

session_start();
require_once('twitteroauth.php');
require_once('config.php');

if (isset($_REQUEST['oauth_token']) && $_SESSION['oauth_token'] !== $_REQUEST['oauth_token']) {
	$_SESSION['oauth_status'] = 'oldtoken';
	header('Location: ./clearsessions.php');
}

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);

$access_token = $connection->getAccessToken($_REQUEST['oauth_verifier']);

$_SESSION['access_token'] = $access_token;

$userage = $_SESSION['age'];
$underage = 'I wasn\'t even born the last time UW beat UO! Check out www.LastTimeUWBeatUO.com #LastTimeUWBeatUO';
$overage = 'Last time UW beat UO I was ' . $userage .' years old! Check out www.LastTimeUWBeatUO.com #LastTimeUWBeatUO';

if ($userage > 0) {
	$message = $overage;
} else {
	$message = $underage;
}

$status = $connection->post('statuses/update', array('status'=>$message));

unset($_SESSION['oauth_token']);
unset($_SESSION['oauth_token_secret']);

if (200 == $connection->http_code) {
	$_SESSION['status'] = 'verified';
	header('Location: ./../thanks.php');
} else {
	header('Location: ./clearsessions.php');
}
