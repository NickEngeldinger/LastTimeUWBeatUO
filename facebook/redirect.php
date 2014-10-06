<?php

/*THESE ARE HARDCODED TO POST TO MY PAGE ONLY, NEED TO CAPTURE FROM AUTH FLOW*/
$page_access_token = 'CAACEdEose0cBAJJIvTyqFukvtnojEivaILXG6jWcKxi7K9ipZBp0m9xR1eJ1JeeXpo8OVd97TZCZAMvdiRfaLJsv53RDmuMbQdkTGoTFggqeyqSZCZBtv3yAYHU1h17tIMiAvOrMUU5OaOtggD1b8Jy14ZAH3uFeeGbMu9AEWfQYWSLnPvW9nDcapFhn98Lve9ZBv45DZCdxFJXtwPzxrDmJ';
$page_id = '1475915989342199';

$data['picture'] = "http://i.imgur.com/l4ZXhsf.jpg"; /*replace with my hosted version when live */
$data['link'] = "local.LastTimeUWbeatUO.com";
$data['message'] = "I was 77 last time UW beat UO.";
$data['caption'] = "Find out how old you were last time UW beat UO";
$data['description'] = "Visit our site and share with your friends!";

$data['access_token'] = $page_access_token;

$post_url = 'https://graph.facebook.com/'.$page_id.'/feed';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $post_url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$return = curl_exec($ch);
curl_close($ch);

echo $return;

?>