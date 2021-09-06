<?php

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','newpro');
$db=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
if($db==false){
    die('Erroe:cant connect');
    $qry = "INSERT INTO donor( id,name,guardiansname,gender, dob, weight, bloodgroup,email,address,contact,username) VALUES (`NULL`,'$name ','$guardiansname','$gender','$dob','$weight','$bloodgroup','$email','$address','$contact','$username')";
}

?>