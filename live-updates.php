<?php 
session_start();
error_reporting(0);
//DB conncetion
include_once('includes/config.php');
//error_reporting(0);

 //$sql ="SELECT * FROM tblupdates";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $productname[]  = $row['Testcases']  ;
            $sales[] = $row['TotalCases'];
        }

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Live Updates</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="icon" type="image/ico" href="assets/images.ico">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
  <?php include_once('includes/sidebar.php');?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
<?php include_once('includes/topbar.php');?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Live Updates</h1>
    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Districtwise Updates</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form name="assignto" method="post">
                    <table class="table table-bordered"  width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>District Name</th>
                                            <th>Infected Cases</th>
                                            <th>Cured Cases</th>
                                            <th>Deceased</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php $query=mysqli_query($con,"select * from liveupdates"); // fetch data from database
$cnt=1;
while($row=mysqli_fetch_array($query)){
?>
            
                                        <tr>
                                            
                                            <td><?php echo $row['S.no'];?></td>
                                            <td><?php echo $row['District'];?></td>
                                            <td><?php echo $row['Infected'];?></td>
                                             <td><?php echo $row['Cured'];?></td>
                                             <td><?php echo $row['Deceased'];?></td>
                                        </tr>
<?php $cnt++;} ?>
                                    </tbody>
                                </table>
                                     </form>


<div id="chartContainer" style="height: 370px; width: 100%;"></div>                       
     

<a href="https://www.mygov.in/corona-data/covid19-statewise-status/" target="_blank">Click here for Statewise/Districtwise information</a>
                            

                             </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            <!-- Footer -->
    <?php include_once('includes/footer.php');?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

     <script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
   <script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Covid-19 Test Cases for TamilNadu"
	},
	axisY: {
		title: ""
	},
	data: [{ 
		color:"#4e73df",       
		type: "column",  
		showInLegend: true, 
		legendMarkerColor: "#4e73df",
		legendText: " New Cases",
		dataPoints: [      
			{ y: 77, label: "Apr27" },
			{ y: 73,  label: "Apr28" },
			{ y: 54,  label: "Apr29" },
			{ y: 49,  label: "Apr30" },
			{ y: 47,  label: "May01" },
			{ y: 40, label: "May02" },
			{ y: 39,  label: "May03" },
			{ y: 37,  label: "May04" },
			{ y: 58,  label: "May05" },
			{ y: 64,  label: "May06" },
			{ y: 89,  label: "May07" },
			{ y: 47,  label: "May08" },
			{ y: 38,  label: "May09" },
		]
	}]
});
chart.render();

}
</script>
</body>
</html>
