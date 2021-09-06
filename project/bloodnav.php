<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="blood.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
</head>
<style>
      
    marquee{
        margin-top:0px;
        text:bold;
        border: rgb(223, 221, 220);
    
       
    }
    .dropdown-item{
        border: rgb(168, 167, 166);
    }
body{
margin-top:-42px;
}
    
</style>
<body>
    <marquee behavior="slide" direction="flow" height="30px"><h2>BLOOD BANK MANAGMENT SYSTEM</h2></marquee>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <div class="container-fluid">
          <a class="navbar-brand" href="#">WELCOME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                
              </li>
             
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  BLOOD COLLECTION DETAILS
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="blood3c.php">ADD BLOOD</a></li>
                  
                  <li><a class="dropdown-item" href="displaydonor.php">VIEW BLOOD</a></li>
                  <li><a class="dropdown-item" href="deleteblood1.php">DELETE BLOOD</a></li>

                </ul>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  DONOR DETAILS
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="blood4.php">ADD DONOR</a></li>
                  
                  <li><a class="dropdown-item" href="displayblood.php">VIEW DONOR DETAILS</a></li>
                  <li><a class="dropdown-item" href="deletedonor.php">DELETE DONOR</a></li>
                 
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 ANNOUNCEMENTS
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="makeannouncement.php">MAKE ANNOUNCEMENTS</a></li>
                  <li><a class="dropdown-item" href="viewannouncement.php">VIEW ANNOUNCEMENTS</a></li>
                  <li><a class="dropdown-item" href="delteannouncement.php">DELETE ANNOUNCEMENTS</a></li>
                 
                 
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    CAMPAIGN DETAILS
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="addcampaign.php">NEW CAMPAIGN</a></li>
                  <li><a class="dropdown-item" href="displaycampaign.php">VIEW CAMPAIGN </a></li>
                  <li><a class="dropdown-item" href="deletecampaign.php">DELETE CAMPAIGN</a></li>
                 
                 
                </ul>
              </li>
            </ul>
            <form class="d-flex">
            
            </form>
          </div>
        </div>
        </nav>
        <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <?php include"dashboard.php";?>
    </header>
       <!-- Page Content -->
       <div class="container">

<!-- Marketing Icons Section -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-primary">
           Online Blood Bank Management System
        </h1>
    </div>
         <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4><i class="fa fa-fw fa-user"></i> Donor Registration</h4>
            </div>
            <div class="panel-body">
                <p>Have you at anytime witnessed a relative of yours or a close friend searching frantically for a blood donor, when blood banks say out of stock, the donors in mind are out of reach and the time keeps ticking?This thought laid our foundation. </p>
                <a href="blood3c.php" class="btn btn-primary">View More</a>
            </div>
        </div>
    </div>
<div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4><i class="fa fa-fw fa-medkit"></i> Need Blood</h4>
            </div>
            <div class="panel-body">
                <p>Every 2 seconds someone needs blood. Your blood helps more than one life at a time. Accident victims, premature babies, patients undergoing major surgeries require whole blood, where your blood after testing is used directly.  </p>
                <a href="makeannouncement.php" class="btn btn-primary">View More</a>
            </div>
        </div>
    </div>

<div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4><i class="fa fa-fw fa-search"></i>Search Donor</h4>
            </div>
            <div class="panel-body">
                <p>Some people who have serious injuries they need blood transfusions to replace blood lost during the injury.Regular blood donors ensure that a safe and plentiful supply of blood is available whenever and wherever it is needed.</p>
                <a href="displaydonor.php" class="btn btn-primary">View More</a>
            </div>
        </div>
    </div>

</div>
<!-- /.row -->

<!-- Portfolio Section -->
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header  text-primary">Blood Donor Camps</h2>
    </div>
    <div class="col-md-4 col-sm-6">
        <a href="#">
            <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p1.jpg" alt="">
        </a>
    </div>
    <div class="col-md-4 col-sm-6">
        <a href="#">
            <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p2.jpg" alt="">
        </a>
    </div>
    <div class="col-md-4 col-sm-6">
        <a href="#">
            <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p3.jpg" alt="">
        </a>
    </div>
    <div class="col-md-4 col-sm-6">
        <a href="#">
            <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p4.jpg" alt="">
        </a>
    </div>
    <div class="col-md-4 col-sm-6">
        <a href="#">
            <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p5.jpg" alt="">
        </a>
    </div>
    <div class="col-md-4 col-sm-6">
        <a href="#">
            <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p6.jpg" alt="">
        </a>
    </div>
</div>
<!-- /.row -->

<!-- Features Section -->
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header  text-primary">Why we need you to give blood ?</h2>
    </div>
    <div class="col-md-6">
      

<ul>
<li>Giving blood saves lives. The blood you give is a lifeline in an emergency and for people who need long-term treatments.</li>

<li>Many people would not be alive today if donors had not generously given their blood.</li>

<li>We need over 6,000 blood donations every day to treat patients in need across india. Which is why there’s always a need for people to give blood.</li>

<li>Each year we need approximately 200,000 new donors, as some donors can no longer give blood.</li>

<li>Most people between the ages of 17-65 are able to give blood.</li>

<li>Around half our current donors are over 45. That's why we need more young people (over the age of 17) to start giving blood, so we can make sure we have enough blood in the future.</li>

</ul>
    </div>
    <div class="col-md-6">
        <img class="img-responsive" src="images/contact.jpg" alt="">
    </div>
</div>
<!-- /.row -->

<hr>

<!-- Call to Action Section -->
<div class="well">
    <div class="row">
      
    </div>
</div>

<div class="modal fade" id="myModal">
<div class="modal-dialog">
<div class="modal-content">
<img src='' width="100%" height="100%" id='ModalImg'>
</div>
</div>
</div>

<hr>

<!-- Footer -->


</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
interval: 500 //changes the speed
})

$(".img-portfolio").click(function(){
var a=$(this).attr("src");
$("#ModalImg").attr("src",a);
$('#myModal').modal();
})
</script>

     
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>