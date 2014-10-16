<?php

session_start();
require_once('twitteroauth.php');
require_once('config.php');

$_SESSION['age'] = $_GET['age'];

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);

$request_token = $connection->getRequestToken(OAUTH_CALLBACK);

$_SESSION['oauth_token'] = $token = $request_token['oauth_token'];
$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];

switch ($connection->http_code) {
	case 200:
		$url = $connection->getAuthorizeUrl($token);
		header('Location: ' . $url);
		break;
	default:
		$_SESSION['error'] = $connection->http_code;
		header('Location: ./../error.php');
}