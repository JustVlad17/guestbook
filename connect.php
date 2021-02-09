<?php
ini_set ('display_errors', 'on');

$host = 'localhost';
$user = 'debian-sys-maint';
$password = 'CTvCr1tmUyytWJaw';
$db_name = 'GuestBook';

$link = mysqli_connect($host, $user, $password, $db_name) or die (mysqli_error($link));

mysqli_query($link, "SET NAME 'utf8'");