<?php 
        
        include 'connect.php';

                $q = $_POST['name'];
                $s = $_POST['number'];
                $r = $_POST['email'];
                $v = $_POST['padd'];
                $w = $_POST['dadd'];
                $x = $_POST['pland'];
                $y = $_POST['dland'];
                $t = $_POST['password'];
                $u = md5($t);
                $query=mysql_query("INSERT INTO `dman` (`name` ,`mobile`,`email`,`pick`,`delivery`,`pland`,`dland`	,`password`) VALUES ('$q' , '$s','$r','$v','$w','$x','$y' ,'$u' ) ");
                  

$authKey = "91629AOW6QjOHJRP560a033b";

//Multiple mobiles numbers separated by comma
$mobileNumber = "9009005929,7566248216" ;

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "Dbaman";

//Your message to send, Add URL encoding here.
$message = urlencode($q." just registered with D'man. Following are the details ".$s."  ".$r." ".$v."  ".$w );

//Define route 
$route = 4;
//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);

//API URL
$url="http://api.msg91.com/sendhttp.php";

// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));


//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
$output = curl_exec($ch);

//Print error if any
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

curl_close($ch);
    

    ?>              