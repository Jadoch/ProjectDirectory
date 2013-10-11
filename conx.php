<?php

$host="localhost";
$user="root";
$pass="jad123";

$accounts = mysql_connect($host,$user,$pass) or die (mysql_error());

mysql_query('Create Database if not exists Directory');

mysql_select_db("Directory", $accounts) or die('1') ;


?>

