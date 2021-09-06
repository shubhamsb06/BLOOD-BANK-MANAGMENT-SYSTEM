<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style>
		       body{
                background-image: linear-gradient(to right bottom,white,pink,rgb(108, 214, 108),orange,white);
                height:100vh;
                animation: surya 6s infinite alternate ;
                background-size: 400% 400%;
            }
            @keyframes surya{
                0%{
                    background-position:0%;
                }
                50%{
                    background: position 50%;
                }
                100%{
                    background-position:100%;
                }
            }
			h2{
    text-align: center;
    color: #e98181;
    font-weight: bold;
}
img{
  animation-duration: 100s;
  animation-name: slidein;
  animation-iteration-count: 52;
  animation-direction: alternative;
}
@keyframes slidein {
  from {
    margin-left: 20px;
    width: 30px;
  }

  to {
    margin-left: 10px;
    width: 100px;
  }
}
	</style>
</head>
<body>
    <div id="wrapper">
<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class=".col-lg-12">
               <h2 class="page-header">DONOR DETAILS</h2>
			   <div class="slidein">
<img src="blood-bank-blood-donation-health-administration-management-blood-bd8cc6b0aaa6e9be5d27e01bb6cae4aa.png" alt="img not found" size=>
				</div>
                </div>
  </div>  

				<div class="row">
                        <div class=".col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Total Records of available donors
                                </div>
								
								 <div class="panel-body">
                                    <div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									
									<?php

						include "connection.php";

						$qry="select * from donor";
						$result=mysqli_query($db,$qry);


						echo"
						<thead>
						<tr>
							<th>Name</th>
							<th>Username</th>
							<th>Guardian's Name</th>
							<th>Gender</th>
							<th>D.O.B</th>
							<th>Weight</th>
							<th>Blood Group</th>
							<th>Email</th>
							<th>Address</th>
							<th>Contact</th>
						</tr>
						</thead>";

						while($row=mysqli_fetch_array($result)){
						  echo"<tbody>
						  <tr>
						  <td>".$row['name']."</td>
						  <td>".$row['username']."</td>
						  <td>".$row['guardiansname']."</td>
						  <td>".$row['gender']."</td>
						  <td>".$row['dob']."</td>
						  <td>".$row['weight']."</td>
						  <td>".$row['bloodgroup']."</td>
						  <td>".$row['email']."</td>
						  <td>".$row['address']."</td>
						  <td>".$row['contact']."</td>

						</tr>
						</tbody>";
						}

						?>
						</table>
		
				</div>

				</div>		
		</div>
		</div>	
		</div>	
		</div>
		</div>


</div>
<div>
	
</div>
</body>
</html>