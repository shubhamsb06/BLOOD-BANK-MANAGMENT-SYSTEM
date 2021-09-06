<?php


if(isset($_POST['submit'])) {
   // username and password sent from form 
   include "connection.php";
   $myusername = mysqli_real_escape_string($db,$_POST['user']);
   $mypassword = mysqli_real_escape_string($db,$_POST['pass']); 
   
   $sql = "SELECT * FROM `admin` WHERE username = '$myusername' AND password = '$mypassword'";
   $result = mysqli_query($db,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $count = mysqli_num_rows($result);
   
   // If result matched $myusername and $mypassword, table row must be 1 row
 
   if($count == 1) {
      header("location:bloodnav.php");
   }else {
    echo '<script language="javascript">';
    echo 'alert("INVALID USERNAME OR PASSWORD")';  //not showing an alert box.
    echo '</script>';
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
    background-image: url("login background final.PNG");
    background-repeat: no-repeat;
    background-size: cover;

}


form{
    size: 100px ;
    position: 100px 200px;
}
.container{
    margin-top: 338px;
    margin-left: 730px;
}
input[type="text"],input[type="password"]{
    width: 100px;
    margin: 9px 5px;
   
    padding: 8px 30px
}
button {
    background-color: #04AA6D;
    color: white;
    padding: 8px 17px;
    margin: 5px 0;
    border: none;
    cursor: pointer;
    width: 20%;
}
button:hover {
  opacity: 0.8;
  background-color: aqua;
}

</style>
<body>
    <form action="" method="post">
        
      
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="user" required>
          
      <div>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pass" required>
      </div>
          
      
          <input type="submit" name="submit" value="login"></input>

        </div>
      
       
      </form>
</body>
</html>


