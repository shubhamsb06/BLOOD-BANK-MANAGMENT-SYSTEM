<?php 

if(isset($_POST['submit'])){
$cname = $_POST["cname"];    
$oname = $_POST["oname"];
$phn = $_POST["phn"];
$cdate = $_POST["cdate"];
$descp = $_POST["descp"];

include 'connection.php';
//code after connection is successfull
$qry = "INSERT INTO `campaign`( `iname`, `oname`, `phonenumber`, `edate`, `descp`) VALUES ('$cname','$oname','$phn','$cdate','$descp')";
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
    <link rel="stylesheet" href="blood1.css">
</head>
<body>
<h2>ENTER CAMPAIGN DETAILS</h2>
   <div class="con">                 
    <form  action="addcampaign.php" method="post">
                                     
                                     <div class="form-group">
                                         <label>Campaign Name</label>
                                         <input class="form-control" type="text" placeholder="Enter Campaign's Name" name="cname" required>
                                         
                                     </div>
                                     <div class="form-group">
                                         <label>Organizer Name</label>
                                         <input class="form-control" type="text" placeholder="Enter Organizer's Name" name="oname" required>
                                     </div>
                                     
                                     <div class="form-group">
                                         <label>Contact Number</label>
                                         <input class="form-control" placeholder="9876543210" type="number" name="phn" required>
                                     </div>

                                     <div class="form-group">
                                         <label>Campaign Date</label>
                                         <input class="form-control" type="date" name="cdate" required>
                                     </div>

             

                                     <div class="form-group">
                                         <label for="descp">Description</label>
                                         <textarea class="form-control" type="text" rows="4" name="descp" required="" style="margin: 10px 20px; width: 723px; height: 154px;"></textarea>
                                     </div>
                                    
                                 
                             
                                     <div class="hun">
        <button type="submit" name="submit" class="btn btn-success btn-default" style="border-radius: 0%;">Submit Form</button>
             
                    
</div>
</form>
   </div>
</body>
</html>
