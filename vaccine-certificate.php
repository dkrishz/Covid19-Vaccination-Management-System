<?php session_start();
//DB conncetion
include_once('includes/config.php');
error_reporting(0);


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Covid19 Management System | Certificate</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" type="image/ico" href="assets/images.ico">
    <link rel="stylesheet" type="text/css" href="print1.css" media="print">
<style type="text/css">
label{
    font-size:16px;
    font-weight:bold;
    color:#000;
}

</style>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
      
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Covid 19 Vaccination Certificate #<?php echo intval($_GET['oid']);?></h1>
<div class="row">


<?php 
$testid=intval($_GET['tid']);
$query=mysqli_query($con,"select * from tblvacrecords
join vacpatients on vacpatients.MobileNumber=tblvacrecords.PatientMobileNumber
where  tblvacrecords.id='$testid'");
while($row=mysqli_fetch_array($query)){ 
    ?>

<!-- Vaccine Information --->
                         <div class="col-lg-6">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Vaccine Certificate</h6>
                                </div>
                                <div class="card-body">

 <table  &nbsp; class="table table-bordered" width="200%" cellspacing="0">
    

 <tr>
    <th>Full Name</th> 
    <td><?php echo $row['FullName'];?></td>
    </tr>
 


  <tr>
    <th>Age</th> 
    <td><?php echo $row['Age'];?></td>
    </tr>

 <tr>
    <th>Gender</th> 
    <td><?php echo $row['Gender'];?></td>
    </tr>

<tr>
    <th>Booking ID</th> 
    <td><?php echo $row['OrderNumber'];?></td>
    </tr>

    <tr>
    <th>Vaccine Type</th> 
    <td><?php echo $row['VaccineType'];?></td>
    </tr>

    <tr>
    <th>Dosage</th> 
    <td><?php echo $row['Dosage'];?></td>
    </tr>

    <tr>
    <th>Date of Dose</th> 
    <td><?php echo $row['VaccineTimeSlot'];?></td>
    </tr>

 <tr>
    <th>Report Status</th> 
    <td><?php if($row['ReportStatus']==''):
              echo "Not Processed yet";
          else:
           echo $row['ReportStatus'];
          endif;

    ?></td>
    </tr>



   

<?php if($row['FinalReport']!=''):?>
  <tr>
    <th>Report</th> 
    <td><a href="reportfiles/<?php echo $row['FinalReport'];?>" target="_blank">Download</a></td>
    </tr>

    <tr>
    <th>Report Delivered Time</th> 
    <td><?php echo $row['ReportUploadTime'];?></td>
    </tr>
<?php endif;?>

</table>
   <div class="text-center">
 &nbsp; &nbsp; &nbsp; &nbsp; <button onclick="window.print();" class="btn btn-info" id="print-btn">Download</button> &nbsp;

  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="index.php"> <button  class="btn btn-info" id="print-btn">Home Page</button></a>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;        
         </div>
   </div>
                            </div>

                        </div>
                    </div>
                <?php } ?>


<!-- Vaccine Tracking History --->
<?php
$orderid=intval($_GET['oid']);
$ret=mysqli_query($con,"select * from tblreporttracking
join tblphlebotomist on tblphlebotomist.ID=tblreporttracking.RemarkBy
where tblreporttracking.OrderNumber='$orderid'");
$num=mysqli_num_rows($ret);
?>

<div class="row">
                         
          


                                </div>
                            </div>

                        </div>
                    </div>

</form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           <?php include_once('includes/footer.php');?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
<a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>




    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
<script type="text/javascript">

  //For report file
  $('#reportfile').hide();
  $(document).ready(function(){
  $('#status').change(function(){
  if($('#status').val()=='Delivered')
  {
  $('#reportfile').show();
  jQuery("#report").prop('required',true);  
  }
  else{
  $('#reportfile').hide();
  }
})}) 
</script>
</body>
</html>
