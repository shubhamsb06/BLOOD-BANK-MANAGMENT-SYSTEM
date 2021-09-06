<?php 

if(isset($_POST['submit'])){
    $name = $_POST["name"];    
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $weight = $_POST["weight"];
    $bloodgroup = $_POST["bloodgroup"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    $bloodqty = $_POST["bloodqty"];
    $collection = $_POST["collection"];

include 'connection.php';
//code after connection is successfull
$qry="INSERT INTO `blood`(`name`, `gender`, `weight`, `bloodgroup`, `address`, `contact`, `bloodqty`, `collection`, `dob`) VALUES ('$name','$gender','$weight','$bloodgroup','$address','$contact','$bloodqty','$collection','$dob')";
$result = mysqli_query($db,$qry); //query executes

if(!$result){
    echo"ERROR";
}else {
    echo" <div style='text-align: center'><h1>SUBMITTED SUCCESSFULLY</h1>";
    echo" <a href='bloodnav.php' div style='text-align: center'><h3>Go Back</h3>";

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
     body {
 
    }
    h2{
        text-align: center;
        color: brown;
        font-weight: bold;
    }
    .con{
        margin:  -11px 273px;
        font-family: "Mitr", sans-serif;
        
      background-image: linear-gradient(to right bottom, pink, rgb(247, 247, 137));
      height: 100vh;
        border: 2px 0.1 rgb(105, 103, 98);
        border-radius: 12px;
      
        
        
    }
    .form-group{
        margin:-2px 18px;
        padding: 11px 26px;
        color:#17659c;
    }
    .btn btn-success btn-default{
        text-align: center;
        margin:auto;
        size: 10px;

    }
    .form-control{
        margin: 10px 20px;
    padding: 9px 26px;
    width: 239px;
    height: 14px;
        
    }
    .hun{
        margin:10px 20px;  
        display: block;

    }
    #shubj{
        background-color:red;
        color:white;
    }
    
</style>
<body>
   <h2>ENTER BLOOD DETAILS</h2>
   <div class="con">
    <form role="form" action="blood3c.php" method="post">
                                     
        <div class="form-group">
            <label>Enter Full Name</label>
            <input class="form-control" type="text" placeholder="Harry Den" name="name" required>
        </div>
        
        <div class="form-group">
            <label>Gender [ M/F ]</label>
            <input class="form-control"  type="text" placeholder="M or F" name="gender" required>
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
            <label>Blood Quantity</label>
            <input class="form-control" placeholder="Blood Quantity" type="number" name="bloodqty" required>
        </div>

        <div class="form-group">
                <label>Collection Date</label>
                <input class="form-control" type="date" name="collection" required>
            </div>
       
    
        <div class="hun">
        <button id="shubj" type="submit" name="submit"class="btn btn-success btn-default" style="border-radius: 0%;">Submit Form</button>
</div>
    </form>
   </div> 

</body>

</html>