<?php

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection =@mysql_connect('localhost', "root", "guru123");
$db = mysql_select_db("companydata", $connection);
session_start();
$seller_check=$_SESSION['login_user'];
$ses_sql=mysql_query("select email from dman where email='$seller_check'", $connection);
$user_data_sql=mysql_query("select * from dman where email='$seller_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$output_data = mysql_fetch_assoc($user_data_sql);
$login_session =$row["email"];

$login_session_email =$output_data["email"];
$login_session_pass = $output_data["password"];



$query = mysql_query("SELECT * from dman where `email`='$seller_check' ",$connection);
$ccc = mysql_fetch_object($query);
echo json_encode($ccc);

?>
