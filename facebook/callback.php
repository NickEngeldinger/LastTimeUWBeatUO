<?php

session_start();

$age = $_SESSION['age'];

if($age == null) {
	$msg = "I wasn't even born the last time UW beat UO!";
}
else {
	$msg = "I was ".$age." last time UW beat UO!";
}
?>