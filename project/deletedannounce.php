<?php

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'connection.php';


$qry="delete from announce where id=$id";
$result=mysqli_query($db,$qry);

if($result){
    echo"DELETED";
    header('Location:delteannouncement.php');
}else{
    echo"ERROR!!";
}
}
?>