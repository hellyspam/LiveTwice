

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
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">LIVE TWICE</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default" style="background-color: rgb(255, 179, 197)">
                        <div class="panel-heading">
                            MESSAGE BOX
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="#" method="post">

<?php

				include 'dbconnect.php';

				$name = $_POST["name"];    
				$guardiansname = $_POST["guardiansname"];
				$gender = $_POST["gender"];
				$dob = $_POST["dob"];
				$weight = $_POST["weight"];
				$bloodgroup = $_POST["bloodgroup"];
                $organ=$_POST["organ"];
				$email = $_POST["email"];
				$address = $_POST["address"];
				$contact = $_POST["contact"];
				$id=$_POST['id'];
				//update query
				$qry = "update donor set name='$name', guardiansname='$guardiansname', gender='$gender', dob='$dob', weight='$weight', bloodgroup='$bloodgroup',organ='$organ', email='$email', address='$address', contact='$contact' where id='$id'";
				$result = mysqli_query($conn,$qry); //query executes

				if(!$result){
					echo"ERROR". mysqli_error();
				}else {
					echo"SUCCESSFULLY UPDATED";
					// header("Location:editview.php");

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
