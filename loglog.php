<?php
session_start(); // Starting Session

// Define $username and $password
$username=$_POST['username'];
$p=$_POST['password'];
$password = md5($p);

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = @mysql_connect("localhost", "root", "guru123");
// To protect MySQL injection for Security purpose

// Selecting Database
$db = mysql_select_db("companydata", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("SELECT * from `dman` where password='$password' AND email='$username'");

$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
print_r("success");
} else {
print_r($password);
}
mysql_close($connection); // Closing Connection

?>
