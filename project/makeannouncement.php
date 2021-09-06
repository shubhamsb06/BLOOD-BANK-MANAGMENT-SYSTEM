<?php
if(isset($_POST['submit'])){
$announcement = $_POST["announcement"];    
$bloodneed = $_POST["bloodneed"];
$dat = $_POST["dat"];
$organizer = $_POST["organizer"];
$requirements = $_POST["requirements"];

include 'connection.php';
//code after connection is successfull
$qry = "INSERT INTO `announce`( `announcement`, `bloodneeded`, `date`, `organizer`, `requirements`) VALUES ('$announcement','$bloodneed ','$dat','$organizer','$requirements ')";
$result = mysqli_query($db,$qry); //query executes

if(!$result){
    echo"ERROR";
}else {
    echo" <div style='text-align: center'><h1>ANNOUNCEMENT MADE</h1>";
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
<h2>MAKE ANNOUNCEMENT</h2>
<div class="con">
<form role="form" action="makeannouncement.php" method="post">
                                     
                                     <div class="form-group">
                                         <label>Enter Announcement Title</label>
                                         <input class="form-control" type="text" placeholder="Announcement Title" name="announcement" required>
                                     </div>
                                     
                                     
                                     <div class="form-group">
                                         <label>Blood Needed (Type)</label>
                                         <input class="form-control" type="text" placeholder="example: B+" name="bloodneed" required>
                                     </div>

                                     <div class="form-group">
                                         <label>Date and Time</label>
                                         <input class="form-control" type="date" name="dat" required>
                                     </div>

                                     <div class="form-group">
                                             <label>Organized by</label>
                                             <input class="form-control" placeholder="Enter Organizer's Name" type="text" name="organizer" required>
                                         </div>

                                     <div class="form-group">
                                             <label>Requirements</label>
                                             <textarea class="form-control" rows="4" type="text" name="requirements" required="" style="margin: 10px 20px; width: 799px; height: 60px;"></textarea>
                                         </div>
                                    
                                 
        <div class="hun">
        <button type="submit" name="submit" class="btn btn-success btn-default" style="border-radius: 0%;">Submit Form</button>
                             
                                   
             
                                 </form>
                             </div>
                             <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="C:\xampp\htdocs\project\js\bootstrap.min.js.map"></script>  
                             
</body>
</html>