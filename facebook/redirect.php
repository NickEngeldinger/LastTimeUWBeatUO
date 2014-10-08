<?php

$age = isset($_GET['age']) ? $_GET['age'] : null;

if($age == null) {
	$msg = "I wasn't even born the last time UW beat UO!";
}
else {
	$msg = "I was ".$age." last time UW beat UO!";
}

/*THESE ARE HARDCODED TO POST TO MY DEV ACCOUNT PAGE ONLY, NEED TO CAPTURE FROM AUTH FLOW 
ALSO THE TOKEN WILL EXPIRE AFTER 60MIN AND NEEDS TO BE RE-GENERATED*/
$page_access_token = 'CAACEdEose0cBACNdqFrFayBN1zVTYlodKaSsmQ3bcplKqcGXON1ZCibz2fTGXT9GK0Y47UvB7pNJy6Nc9Jq6cp4SrwkSZAqryhIox86HEZBjZBZAJTHtXIzyFzsn6kwDSbXiRswyxsLD0fZCtxQCSPToiwLIIusJyFSsX9r46HZAt22EG2qZCDT1QnZBHMDMNSZApZB2UBj0eEnuK7D1pjNVz80';
$page_id = '1475915989342199';

##CREATE ARRAY FOR ALL THE PARTS OF THE FB POST
$data['picture'] = "http://i.imgur.com/l4ZXhsf.jpg"; /*replace with my hosted version when live */
$data['link'] = "local.LastTimeUWbeatUO.com";
$data['message'] = $msg;
$data['caption'] = "www.LastTimeUWBeatUO.com";
$data['description'] = "The Oregon Ducks football team hasn't lost to the Washington Huskies since November 16th, 2002. Calculate how old you were last time UW beat UO and share with your friends!";
$data['access_token'] = $page_access_token;

##URL WE ARE SENDING THE ARRAY TO
$post_url = 'https://grah.facebook.com/'.$page_id.'/feed';

##CURL SENDS THE HTTP REQUEST TO THAT URL INCLUDING OUR DATA
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $post_url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$return = curl_exec($ch);

if(curl_errno($ch)) {
	#PASS ERROR THRU TO ERROR PAGE AND DISPLAY, APOLOGIZE, LINK BACK TO HOME
	echo 'Error: '.curl_error($ch);
	header('Location: ./../error.php?error='.curl_error($ch));
}
else {
	echo 'Connection all good!';
}

curl_close($ch);

/* NEED TO CHECK IF POSTING WAS SUCCESSFUL THEN REDIRECT TO THANKS PAGE, OTHERWISE PRINT ERROR MESSAGE */
#header('Location: ./../thanks.php');
?>