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
                  


    

    ?>              