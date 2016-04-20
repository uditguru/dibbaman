<?php
$con = @mysql_connect('localhost','root','guru123');
$db_link = mysql_select_db('companydata');

define('DATE_FORMAT', 'm-d-Y');

function highLight($name=""){
    if($name==basename($_SERVER['PHP_SELF'])){
        return 'current';
    }else{
        return 'select';
    }
}