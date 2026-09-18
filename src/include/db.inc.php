<?php
$host = "db";
$username = "dev_user";
$db_name = "my_database";
$pswd = "123456789";
$conn = mysqli_connect($host, $username, $pswd, $db_name);
if (!$conn) die("Error [" . mysqli_connect_error() . "]");
