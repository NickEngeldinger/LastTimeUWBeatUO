<?php

session_start();
require 'facebook/config.php';
require 'facebook/facebook.php';
require 'db.php';

$facebook = new Facebook(array(
	'appId' => $config['App_ID'],
	'secret' => $config['App_Secret'],
	'cookie' => true
));

if(isset($_POST['status']))
{
    $page = split("-",$_POST['page']);
    $page_token = $page[0];
    $page_id= $page[1];
    // status with link
    $publish = $facebook->api('/'.$page_id.'/feed', 'post',
            array('access_token' => $page_token,
            'message'=> $_POST['status'],
            'from' => $config['App_ID'],
            'to' => $page_id,
            'caption' => 'Last Time UW Beat UO',
            'name' => 'LastTimeUWBeatUO.com',
            'link' => 'http://www.lasttimeuwbeatuo.com/',
            //
            //CHANGE TO MY HOSTED IMAGE URL WHEN ITS LIVE
            //
            'picture' => 'http://i.imgur.com/IBKyD0W.jpg', 
            'description' => 'How old wer you the last time UW beat UO? Find out now and share with your friends!'
            ));
    //Simple status without link
 
    //$publish = $facebook->api('/'.$page_id.'/feed', 'post',
//        array('access_token' => $page_token,'message'=>$_POST['status'] .'   via PHPGang.com Demo',
//        'from' => $config['App_ID']
//        ));
 
    echo 'Status updated.<br>';
    $graph_url_pages = "https://graph.facebook.com/me/accounts?access_token=".$_SESSION['token'];
    $pages = json_decode(file_get_contents($graph_url_pages)); // get all pages information from above url.
    $dropdown = "";
    for($i=0;$i<count($pages->data);$i++)
    {
        $dropdown .= "<option value='".$pages->data[$i]->access_token."-".$pages->data[$i]->id."'>".$pages->data[$i]->name."</option>";
    }
 
    echo '
    <style>
    #status
    {
        width: 357px;
        height: 28px;
        font-size: 15px;
    }
    </style>
    '.$message.'
    <form action="index.php" method="post">
    Select Page on which you want to post status: <br><select name="page" id=status>'.$dropdown.'</select><br><br>
    <input type="text" name="status" id="status" placeholder="Write a comment...." /><input type="submit" value="Post On My Page!" style="padding: 5px;" />
    <form>';
 
}
elseif(isset($_GET['fbTrue']))
{
    $token_url = "https://graph.facebook.com/oauth/access_token?"
        . "client_id=".$config['App_ID']."&redirect_uri=" . urlencode($config['callback_url'])
        . "&client_secret=".$config['App_Secret']."&code=" . $_GET['code'];
 
    $response = file_get_contents($token_url);   // get access token from url
    $params = null;
    parse_str($response, $params);
 
    $_SESSION['token'] = $params['access_token'];
 
    $graph_url_pages = "https://graph.facebook.com/me/accounts?access_token=".$_SESSION['token'];
    $pages = json_decode(file_get_contents($graph_url_pages)); // get all pages information from above url.
    $dropdown = "";
    for($i=0;$i<count($pages->data);$i++)
    {
        $dropdown .= "<option value='".$pages->data[$i]->access_token."-".$pages->data[$i]->id."'>".$pages->data[$i]->name."</option>";
    }
 
    echo '
    <style>
    #status
    {
        width: 357px;
        height: 28px;
        font-size: 15px;
    }
    </style>
    '.$message.'
    <form action="index.php" method="post">
    Select Page on which you want to post status: <br><select name="page" id=status>'.$dropdown.'</select><br><br>
    <input type="text" name="status" id="status" placeholder="Write a comment...." /><input type="submit" value="Post On My Page!" style="padding: 5px;" />
    <form>';    
}
else
{
    echo 'Connect &nbsp;&nbsp;<a href="https://www.facebook.com/dialog/oauth?client_id='.$config['App_ID'].'&redirect_uri='.$config['callback_url'].'&scope=email,user_about_me,offline_access,publish_stream,publish_actions,manage_pages"><img src="./images/login-button.png" alt="Sign in with Facebook"/></a>';
}
?>