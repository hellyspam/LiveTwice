<html>

<head>

<title>LIVETWICE</title>

<!-- Bootstrap Core CSS -->
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="../icofont/icofont.min.css">
<style>
               #page-wrapper{
                background-image:url('./imgPages/bg9.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
                background-size: 100% 100%;



            }
        </style>

</head>


<body>
<div id="wrapper">

<?php include 'includes/nav.php'?>

		<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div style='color:#e74e63' class=".col-lg-12">
               <h1 class="page-header">Delete Campaign Details</h1>
                </div>
  </div>  

				<div  class="row">
                        <div class=".col-lg-12">
                            <div  class="panel panel-default">
                                <div  class="panel-heading">
                                    Total Records of available campaign
                                </div>
								
								 <div class="panel-body">
                                    <div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									
									<?php

						include "dbconnect.php";

						$qry="select * from campaigndb";
						$result=mysqli_query($conn,$qry);


						echo"
						<thead style='background-color:#e74e63'>
												
						<tr>
						<th>Campaign Name</th>
						<th>Organizer Name</th>
						<th>Phone Number</th>
						<th>Date of campaign</th>
						<th>Description</th>
						<th><i style='color:#e74e63' class='fa fa-pencil'></i></th>
					</tr>
						</thead>";

						while($row=mysqli_fetch_array($result)){
						  echo"<tbody>
						  <tr>
						  <td>".$row['cname']."</td>
						  <td>".$row['oname']."</td>
						  <td>".$row['phn']."</td>
						  <td>".$row['cdate']."</td>
						  <td>".$row['descp']."</td>
						  <td><a href='finaldeletecampaign.php?id=".$row['id']."'><i style='color:#e74e63' class='fa fa-trash' ></i></a></td>
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

  <!-- jQuery -->
  <script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

</body>


	
	
</html>