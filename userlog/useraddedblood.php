<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LIVE TWICE</title>

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
                background-image:url('./imagesbg/bg12.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
                background-size: 100% 100%;



            }
        </style>
</head>

<body style="background-color:#FEECEC">

    <div id="wrapper">

    <?php include 'includes/donornav.php'?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">LIVE TWICE</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: rgb(255, 179, 197)">
                            MESSAGE BOX
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="index.php" method="post">
							<?php 

							if(isset($_POST['name'])){
								$name = $_POST["name"];    
								$gender = $_POST["gender"];
								$dob = $_POST["dob"];
								$weight = $_POST["weight"];
								$bloodgroup = $_POST["bloodgroup"];
                                $organ = $_POST["organ"];
								$address = $_POST["address"];
								$contact = $_POST["contact"];
								$bloodqty = $_POST["bloodqty"];
								$collection = $_POST["collection"];

								include '../pages/dbconnect.php';
								//code after connection is successfull
								$qry = "insert into request (name,gender,dob,weight,bloodgroup,organ,address,contact,bloodqty,collection) values ('$name','$gender','$dob','$weight','$bloodgroup','$organ','$address','$contact','$bloodqty','$collection')";
								$result = mysqli_query($conn,$qry); //query executes

								if(!$result){
									echo"ERROR";
								}else {
									echo" <div style='text-align: center'><h1>Blood Donation Details Has Been Listed. Thank You.</h1>";
									echo" <a href='userdashboard.php' div style='text-align: center'><h3>Go Back</h3>";

								}

							}else{
								echo"<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='userdashboard.php'> DASHBOARD </a></h3>";
							}


							?>        
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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
