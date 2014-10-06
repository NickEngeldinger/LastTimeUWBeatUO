<?php

$page_access_token = '';
$page_id = '';

$data['picture'] = "";
$data['link'] = "";
$data['message'] = "";
$data['caption'] = "";
$data['description'] = "";

$data['access_token'] = $page_access_token;

$post_url = 'https://graph.facebook.com/'.$page_id.'/feed';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $post_url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$return = curl_exec($ch);
curl_close($ch);
?>

/*
	THIS IS A TEST FOR A SINGLE USER
*/