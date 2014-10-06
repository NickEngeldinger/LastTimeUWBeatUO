<?php

$age = isset($_GET['age']) ? $_GET['age']: null;

if(age == null)
	$msg = "You weren't even born the last time UW beat UO!"
else
	$msg = "You were ".$age." last time UW beat UO! #GoDucks"

/*THESE ARE HARDCODED TO POST TO MY DEV ACCOUNT PAGE ONLY, NEED TO CAPTURE FROM AUTH FLOW 
ALSO THE TOKEN WILL EXPIRE AFTER 60MIN AND NEEDS TO BE RE-GENERATED*/
$page_access_token = 'CAACEdEose0cBAG0ZCUY1X5NZA2QboGUkPI2oILIHz40A39Ey2LGqSO2EexWcZABSrIkciN5saBMZC7780ZAL2xhTZAB64ARtefyFnaZBCRWZAanVCly9R9rtqBq4t0ZCbxC0MlWBGppB3S06x20g0CGlA7FL7szz30nwF0A9ZBl9wI4SsgsQfq0CfCXlZCE0AwkU7aIfGKFfDbd6kWzjuQ7ZC1ku';
$page_id = '1475915989342199';

$data['picture'] = "http://i.imgur.com/l4ZXhsf.jpg"; /*replace with my hosted version when live */
$data['link'] = "local.LastTimeUWbeatUO.com";
$data['message'] = $msg;
$data['caption'] = "www.LastTimeUWBeatUO.com";
$data['description'] = "The Oregon Ducks football team hasn't lost to the Washington Huskies since November 16th, 2002. Calculate how old you were last time UW beat UO and share with your friends!";

$data['access_token'] = $page_access_token;

$post_url = 'https://graph.facebook.com/'.$page_id.'/feed';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $post_url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$return = curl_exec($ch);
curl_close($ch);

/* NEED TO CHECK IF POSTING WAS SUCCESSFUL THEN REDIRECT TO THANKS PAGE, OTHERWISE PRINT ERROR MESSAGE */

?>