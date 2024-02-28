<?php
session_start();
include('includes/config.php');

if(isset($_POST['submit']))
  {
$contactno=$_POST['contactno'];
$username=$_POST['username'];
$password=md5($_POST['newpassword']);
$query=mysqli_query($con,"select ID from tbladmin where  AdminuserName='$username' and MobileNumber='$contactno' ");
        
    $ret=mysqli_num_rows($query);
    if($ret>0){
      $query1=mysqli_query($con,"update tbladmin set Password='$password'  where  AdminuserName='$username' && MobileNumber='$contactno' ");
       if($query1)
   {
echo "<script>alert('Password successfully changed');</script>";
echo "<script>window.location.href='login.php'</script>";

   }
     
    }
    else{
    
      echo "<script>alert('Invalid Details. Please try again.');</script>";
    }
  }
  ?>



<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Password Recovery Page</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/virus-solid.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

   
 <script type="text/javascript">
        function Validate() {
            var password = document.getElementById("newpassword").value;
            var confirmPassword = document.getElementById("confirmpassword").value;
            if (password != confirmPassword) {
                alert("Your New password is not similar with Confirm password. Please enter same password in both");
                return false;
            }
            return true;
        }
    </script>  

 </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Covid-19 VMS</strong></h1>
                            <div class="description">
                            	
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Password Recovery</h3>
                            		<p>Enter your username , password and Contact No to Change Password:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom"> 
			                    <form role="form" action="" method="post" class="login-form" name="login-form">
			                    	<div class="form-group">
                                            <input type="text" class="form-control" name="username" 
                                                id="username" placeholder="Enter username" required="true">
                                        </div>
                                        <div class="form-group">
                                <input type="password" name="contactno" placeholder="Secret Code" autocomplete="off" class="form-control" required="true">
                                        </div>
                                  <div class="form-group">
                                       
                                      <input type="password" name="newpassword" placeholder="New password" id="newpassword" value="" autocomplete="off" class="form-control" required="true">
                              			
                                        </div>

                                            <div class="form-group">
                               <input type="password" name="confirmpassword" placeholder="Confirm password" id="confirmpassword" value="" autocomplete="off" class="form-control" required="true">
                                        </div>
			                         <input type="submit" name="submit" class="btn btn-warning btn-user btn-block" value="Submit" onclick="return Validate()" />
			                    </form>
		                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3 style="color:black"><strong>...switch login with:</strong></h3>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-2" href="Phel-login.php">
	                        		<i class="fa fa-user-md"></i> Phlebotomist
	                        	</a>
	                        	<a class="btn btn-link-2" href="login.php">
	                        		<i class="fa fa-user"></i> Admin
	                        	</a>
	                        	<a class="btn btn-link-2" href="password-recovery.php">
	                        		<i class="fa fa-unlock-alt"></i> Forgot Password
	                        	</a>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>