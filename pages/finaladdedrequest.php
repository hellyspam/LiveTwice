<!DOCTYPE html>
<html lang="en">

<head>

    <title>Live Twice</title>

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
                    <h1 class="page-header">BBMS</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            MESSAGE BOX
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="" method="post">

<?php
include 'dbconnect.php';
$name = $_POST["name"];    
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$weight = $_POST["weight"];
$bloodgroup = $_POST["bloodgroup"];
$address = $_POST["address"];
$contact = $_POST["contact"];
$organtype = $_POST["organtype"];
$message = $_POST["message"];
$id=$_POST['id'];
//update query
$qry = "update organ_requests set name='$name', gender='$gender', dob='$dob', weight='$weight', bloodgroup='$bloodgroup', address='$address', contact='$contact', organtype='$organtype', message='$message' where id='$id'";
$result = mysqli_query($conn,$qry); //query executes
if(!$result){
    echo "ERROR". mysqli_error();
}else {
    echo"REQUEST UPDATED";
    // header ("Location:editblood.php");
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
