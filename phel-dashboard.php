<?php
session_start();
include_once('includes/config.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{ 


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Covid19 VMS | Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" type="image/ico" href="assets/images.ico">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php include_once('includes/sidebar2.php');?>
        <!-- End of Sidebar --> 

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
<?php include_once('includes/topbar2.php');?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">

<?php 
//Total tests
$query=mysqli_query($con,"select id from tbltestrecord");
$totaltest=mysqli_num_rows($query);
//Assigned tests
$query1=mysqli_query($con,"select id from tblvacrecords where ReportStatus='Assigned'");
$totalassigned=mysqli_num_rows($query1);
//On the way for sample collection
$query2=mysqli_query($con,"select id from tblvacrecords where ReportStatus='On the Way'");
$totalontheway=mysqli_num_rows($query2);
//Sample Collected
$query3=mysqli_query($con,"select id from tbltestrecord where ReportStatus='Sample Collected'");
$totalsamplecollected=mysqli_num_rows($query3);
//Sent for lab
$query4=mysqli_query($con,"select id from tbltestrecord where ReportStatus='Sent to Lab'");
$totalsenttolab=mysqli_num_rows($query4);

//Report Delivered
$query5=mysqli_query($con,"select id from tbltestrecord where ReportStatus='Delivered'");
$totaldelivered=mysqli_num_rows($query5);

//Totall Registered Patients 
$query6=mysqli_query($con,"select id from tblpatients");
$totalpatients=mysqli_num_rows($query6); 

//Totall Registered Phlebotomist 
$query7=mysqli_query($con,"select id from tblphlebotomist");
$totalphlebotomist=mysqli_num_rows($query7);
?>



                        <!-- Assigned test-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-bottom-success shadow h-100 py-3">
                                <a href="phel-assigned-vaccine.php">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                              Total Vaccination Assigned</div>
                                            <div class="h5 mb-0 font-weight-bold text-success"><?php echo $totalassigned;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-md fa-2x text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>

 <!--Vaccine Status-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-bottom-success shadow h-100 py-3">
                                <a href="phel-vaccine-status.php">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                             Total Vaccination Status</div>
                                            <div class="h5 mb-0 font-weight-bold text-success"><?php echo $totalontheway;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-syringe fa-2x text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                        
                   
<!-- Content Row -->

 
                  

             



 <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
           <?php include_once('includes/footer2.php');?>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
<?php } ?>