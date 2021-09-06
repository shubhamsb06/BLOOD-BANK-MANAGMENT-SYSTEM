<?php 

if(isset($_POST['create'])){
$name = $_POST['name'];    
$guardiansname = $_POST['guardiansname'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$weight = $_POST['weight'];
$bloodgroup = $_POST['bloodgroup'];
$email = $_POST['email'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$username = $_POST['username'];

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','newpro');
$db=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
if($db==false){
    die('Erroe:cant connect');
}
else{

//code after connection is successfull
$qry="INSERT INTO `donor`(`name`, `guardiansname`, `gender`, `dob`, `weight`, `bloodgroup`, `email`, `address`, `contact`, `username`) VALUES  ('$name','$guardiansname','$gender','$dob','$weight','$bloodgroup','$email','$address','$contact', '$username') ";
$result = mysqli_query($db,$qry); //query executes

if(!$result){
    echo"alert(an error occured)";
}else {
    echo" <div style='text-align: center'><h1>SUBMITTED SUCCESSFULLY</h1>";
    echo" <a href='bloodnav.php' div style='text-align: center'><h3>Go Back</h3>";
}
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
    <link rel="stylesheet" href="blood1.css">
</head>
<body>

    <h2>ENTER DONOR DETAILS</h2>
   <div class="con">
    <form action="blood4.php" method="post">
                                     
        <div class="form-group">
            <label>Enter Full Name</label>
            <input class="form-control" type="text" placeholder="Harry Den" name="name" required>
        </div>
        
        <div class="form-group">
            <label>Gender [ M/F ]</label>
            <input class="form-control" type="text" placeholder="M or F" name="gender" required>
        </div>

        <div class="form-group">
            <label>Enter Date of birth</label>
            <input class="form-control" type="date" name="dob" required>
        </div>

        <div class="form-group">
            <label>Enter Weight</label>
            <input class="form-control" placeholder="Weight" type="number" name="weight" required>
        </div>

        <div class="form-group">
            <label>Enter Blood Group</label>
            <input class="form-control" type="text" placeholder="Eg: B+" name="bloodgroup" required>
        </div>

        <div class="form-group">
            <label>Enter Address</label>
            <input class="form-control" placeholder="Address" type="text" name="address" required>
        </div>

        <div class="form-group">
            <label>Enter Contact Number</label>
            <input class="form-control" placeholder="Contact Number" type="number" name="contact" required>
        </div>

        <div class="form-group">
            <label>Guardian Name</label>
            <input class="form-control" placeholder="Gaurdian name" type="text" name="guardiansname" required>
        </div>

        <div class="form-group">
                <label>Email adress</label>
                <input class="form-control" type="text" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label>Enter username</label>
                <input class="form-control" type="text" name="username" placeholder="No repitition" required>
            </div>
    
        <div class="hun">
        <button type="submit" name="create" class="btn btn-success btn-default" style="border-radius: 0%;">Submit Form</button>

                                  

</div>
</form>
   </div> 
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="C:\xampp\htdocs\project\js\bootstrap.min.js.map"></script>
   
</html>
