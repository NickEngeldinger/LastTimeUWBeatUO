<?php

session_start();
require_once('twitteroauth.php');
require_once('config.php');

$_SESSION['msg'] = $_GET['msg'];

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
		echo 'Could not connect to Twitter. <br />Please refresh the page or try again later. ' . $connection->http_code;
}