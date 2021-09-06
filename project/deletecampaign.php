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
	</style>
	</style>
</head>
<body>
<div id="wrapper">
		<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class=".col-lg-12">
               <h2 class="page-header">DELETE CAMPAIGN DEATILS</h2>
                </div>
  </div>  

				<div class="row">
                        <div class=".col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Total Records of available campaign
                                </div>
								
								 <div class="panel-body">
                                    <div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									
									<?php

						include "connection.php";

						$qry="select * from campaign";
						$result=mysqli_query($db,$qry);


						echo"
						<thead>
												
						<tr>
						<th>Campaign Name</th>
						<th>Organizer Name</th>
						<th>Phone Number</th>
						<th>Date of campaign</th>
						<th>Description</th>
						<th><i class='fa fa-pencil'></i></th>
					</tr>
						</thead>";

						while($row=mysqli_fetch_array($result)){
						  echo"<tbody>
						  <tr>
						  <td>".$row['iname']."</td>
						  <td>".$row['oname']."</td>
						  <td>".$row['phonenumber']."</td>
						  <td>".$row['edate']."</td>
						  <td>".$row['descp']."</td>
						  <td><a href='finaldeletecampaign.php?id=".$row['id']."'>delete<i class='fa fa-trash' style='color:red'></i></a></td>
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
</body>
</html>