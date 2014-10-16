<?php

$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$conn = mysql_connect($DB_HOST, $DB_USER, $DB_PASS);

mysql_select_db('trivia') or die(mysql_errno());

if (!$conn) {
	die('Could not connect' . mysql_error());
}

//GRAB AND RETURN RANDOM TRIVIA
$result = mysql_query("SELECT * FROM facts ORDER BY RAND() LIMIT 1") 
or die(mysql_error());

$data = array();
while( $row = mysql_fetch_assoc($result) ) {
	array_push($data, $row);
}

echo json_encode($data);