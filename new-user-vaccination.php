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
$age=$_POST['age'];
$gender=$_POST['gender'];
$govtid=$_POST['govtissuedid'];
$govtidnumber=$_POST['govtidnumber'];
$address=$_POST['address'];
$state=$_POST['state'];


$query="insert into vacpatients(FullName,MobileNumber,DateOfBirth,Age,Gender,GovtIssuedId,GovtIssuedIdNo,FullAddress,State) values('$fname','$mnumber','$dob','$age','$gender','$govtid','$govtidnumber','$address','$state');";

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
</script>

 <script type="text/javascript"> 
 window.onload=function() {  
  if (document.getElementById) { 
 document.getElementById("govtissuedid").onchange=function() { switchme(this); }  
  } 
 } 
 function switchme(SNewSel) { 
 var ind = SNewSel.selectedIndex; 
 var txt = document.getElementById('govtidnumber'); 
 switch (ind) { 
  case 1: 
  txt.placeholder = "Enter Pan Card number"; 
  break; 
  case 2: 
  txt.placeholder = "Enter Voter-ID number" 
  break; 
 case 3:  
 txt.placeholder = "Enter Aadhaar number" 
 break; 
 default: 
 txt.value=''; 
 break; 
 } 
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
                                            <input type="text" class="form-control" id="fullname" name="fullname"  placeholder="Enter your full name" pattern="[A-Za-z ]+" title="letters only" required="true">
                                        </div>
                                        <div class="form-group">
                                             <label>Mobile Number</label>
                                  <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Please enter your mobile number" pattern="[0-9]{10}" title="10 numeric characters only" required="true" onBlur="mobileAvailability()">
                                                <span id="mobile-availability-status" style="font-size:12px;"></span>
                                        </div>
                                         <div class="form-group">
                                             <label>Age</label>
                                  <input type="number" class="form-control" id="age" name="age" placeholder="Please enter age" max="100" title="Max 3 numeric characters only" required="true" ">
                                                
                                        </div>
                                        <div class="form-group">
                                             <label>DOB</label>
                                            <input type="date" class="form-control" id="dob" name="dob" required="true">
                                        </div>
<div class="form-group">
<label>Gender</label><br>
<input type="radio" id="male" name="gender" value="Male">
  <label for="male">Male</label> &nbsp; &nbsp; &nbsp; &nbsp;
  <input type="radio" id="female" name="gender" value="Female">
  <label for="female">Female</label> &nbsp; &nbsp; &nbsp; &nbsp;
  <input type="radio" id="others" name="gender" value="Others">
  <label for="others">Others</label>
</div>

                                                                               <div class="form-group">
 <label>Govt Issued ID</label><br>
<select name="govtissuedid" id="govtissuedid" class="form-control" required="true"> 
<option value="" disabled selected hidden>Choose One</option> 
<option value="Pancard" >Pan Card</option> 
<option value="VoterId" >Voter-ID</option> 
<option value="Aadhar" >Aadhar</option> 
</select> 
</div><div class="form-group">
<label>Govt Issued ID No</label><br>
<input id="govtidnumber" name="govtidnumber" type="text" value="" placeholder="ID No" class="form-control" pattern="[0-9A-Z]{10,12}"  required="true">
</div>
                          

                               <div class="form-group">
                                              <label>Address</label>
                                            <textarea class="form-control" id="address" name="address" required="true" placeholder="Enter your full addres here"></textarea>
                                        </div>
               
                                            <div class="form-group">
                                              <label>State</label>
					<select name="state" id="state" class="form-control" required="true">
    <option value="" disabled selected hidden>Select State</option>                                  
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select></div>                                      

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