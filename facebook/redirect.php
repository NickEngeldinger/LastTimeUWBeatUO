<?php

session_start();
require_once('facebook.php');
require_once('config.php');

$age = isset($_GET['age']) ? $_GET['age'] : null;
$_SESSION['age'] = $age;
//WHY ISNT MY AGE SESSION VAR SHOWING UP IN DEV TOOLS?

// Create our Application instance.
$facebook = new Facebook(array(
  'appId'  => APP_ID,
  'secret' => APP_SECRET,
  'cookie' => true
));
if ($user = $facebook->getUser()) { //user is logged in and authorized us
    $user = $facebook->getUser();
    $fbme = $facebook->api('/me');
    //print "Welcome User ID: " . $user;
    //print_r($fbme);

    $success_code = $_GET['code'];
    //print "HERES YA CODE ".$success_code;
    //HERE IS WHERE WE WANT TO ADD THE REQUEST FOR EXTENDED PERMISSIONS (ABILITY TO PUBLISH STATUS)
    //IT SHOULD SEND US TO THE CALLBACK.PHP URL WITH THE ACCESS_TOKEN WHICH WE PLUG INTO OUR FB OBJECT 
    //IN ORDER TO AUTHORIZE OUR POST

    $post_url = 'https://graph.facebook.com/oauth/access_token?'.
                'client_id='.APP_ID.'&redirect_uri='.CALLBACK_URL.
                '&client_secret='.APP_SECRET.'&code='.$success_code;

    //print $post_url;
    print "<script type='text/javascript'>top.location.href = '$post_url';</script>";
    //header('Location: '.$post_url);

} else { // User has not authorized us or is not logged in
    $params = array(
        'fbconnect'=>0,
        'canvas'=>1,
        'req_perms'=>'publish_stream,email',
        'redirect_uri'=>'http://local.lasttimeuwbeatuo.com/facebook/redirect.php/'
    // For a full list of permissions: http://developers.facebook.com/docs/authentication/permissions
    );
    $loginUrl = $facebook->getLoginUrl($params);
}   header('Location: '.$loginUrl);

?>