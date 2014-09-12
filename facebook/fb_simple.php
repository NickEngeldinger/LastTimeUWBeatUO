<?php
session_start();
require 'config.php';
require 'facebook.php';

$facebook = new Facebook(array(
  'appId'  => $config['App_ID'],
  'secret' => $config['App_Secret'],
  'cookie' => true
));

##function print_r2($val){
##        echo '<pre>';
##        print_r($val);
##        echo  '</pre>';
##}

##echo print_r2($facebook);

echo '<a href="https://www.facebook.com/dialog/oauth?client_id='
.$config['App_ID']
.'&redirect_uri='
.$config['callback_url']
.'&scope=email,user_about_me,offline_access,publish_stream,publish_actions,manage_pages">CONNECT</a>';

?>