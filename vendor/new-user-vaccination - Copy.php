<?php 
session_start();
error_reporting(0);
//DB conncetion
include_once('includes/config.php');

if(isset($_POST['submit'])){
//getting post values
$fname=$_POST['fullname'];
$mnumber=$_POST['mobilenumber'];
$dob=$_POST['dob'];
$govtid=$_POST['govtissuedid'];
$aadhar=$_POST['aadharno'];
$voterid=$_POST['voterid'];
$panno=$_POST['panno'];
$address=$_POST['address'];
$state=$_POST['state'];


$query="insert into vacpatients(FullName,MobileNumber,DateOfBirth,GovtIssuedId,VoterID,Pan number,Aadhar,FullAddress,State) values('$fname','$mnumber','$dob','$govtid','$voterid','$aadhar','$voterid','$panno','$address','$state');";

$result = mysqli_multi_query($con, $query);
if ($result) {
echo '<script>alert("Your vaccination registeration successfully")</script>';
  echo "<script>window.location.href='registered-user-vaccination.php'</script>";
} 
else {
    echo "<script>alert('Something went wrong. Please try again.');</script>";  
echo "<script>window.location.href='new-user-vaccination - Copy.php'</script>";
}
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

    <title>Covid-19 Vaccination Management System | New User Vaccine Slot Booking</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<style type="text/css">
label{
    font-size:16px;
    font-weight:bold;
    color:#000;
}

</style>
  <script>
function mobileAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'mobnumber='+$("#mobilenumber").val(),
type: "POST",
success:function(data){
$("#mobile-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}


function CheckColors(){
 var d=document.getElementById("govtissuedid");
 var displaytext=d.options(d.selectedIndex).text;
 document.getElementById("panno").value=displaytext;
}


</script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

<?php include_once('includes/sidebar.php');?>

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
                    <h1 class="h3 mb-4 text-gray-800">Covid19-Vaccine Registration</h1>
<form name="newtesting" method="post">
  <div class="row">

                        <div class="col-lg-6">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
                                </div>
                                <div class="card-body">
                        <div class="form-group">
                            <label>Full Name</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname"  placeholder="Enter your full name..." pattern="[A-Za-z ]+" title="letters only" required="true">
                                        </div>
                                        <div class="form-group">
                                             <label>Mobile Number</label>
                                  <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Please enter your mobile number" pattern="[0-9]{10}" title="10 numeric characters only" required="true" onBlur="mobileAvailability()">
                                                <span id="mobile-availability-status" style="font-size:12px;"></span>
                                        </div>
                                        <div class="form-group">
                                             <label>DOB</label>
                                            <input type="date" class="form-control" id="dob" name="dob" required="true">
                                        </div>
                                        <div class="form-group">
                                              <fieldset>
        <legend>Radio buttons with Textbox</legend>
        <div id="div1"><input class="rd" type="radio" name="radio-1" id="panno" value="Normal Radio" checked= /> Pan Card <input type="text" class="tb" name="tb1" value="" placeholder="Option 1" /></div><br>
        <div id="div1"><input class="rd" type="radio" name="radio-1" id="voterid" value="Normal Radio" checked= /> VoterID <input type="text" class="tb" name="tb1" value="" placeholder="Option 2" /></div><br>
        <div id="div1"><input class="rd" type="radio" name="radio-1" id="aadharno" value="Normal Radio" checked= /> Aadhar <input type="text" class="tb" name="tb1" value="" placeholder="Option 3" /></div><br>
      
    </fieldset>                                      
                                           </div>
                                        <div class="form-group">
                                              
                                            <input type="text" class="form-control" id="panno" name="panno" placeholder="Enter Pancard Number" pattern="[0-9A-Z]{10,12}" title="Enter a Valid ID." style='display:none;' required="true">
					    <input type="text" class="form-control" id="voterid" name="voterid" placeholder="Enter VoterID Number" pattern="[0-9A-Z]{10,12}" title="Enter a Valid ID." style='display:none;' required="true">
					    <input type="text" class="form-control" id="aadharno" name="aadharno" placeholder="Enter Aadhar Number" pattern="[0-9]{12}" title="Enter a Valid ID." style='display:none;' required="true">
                                        </div>
                          

                               <div class="form-group">
                                              <label>Address</label>
                                            <textarea class="form-control" id="address" name="address" required="true" placeholder="Enter your full addres here"></textarea>
                                        </div>
 <div class="form-group">
                                              <label>State</label>
                                      <input type="text" class="form-control" id="state" name="state" placeholder="Enter your State Here" required="true">
					</div>                                      
<div class="form-group">
                                 <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" id="submit">                           
                             </div>
			</div>
                           
 


                        </div>


                        </div>

                    </div>
</form>

               
               

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>