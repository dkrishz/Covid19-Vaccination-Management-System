<?php
include_once('includes/config.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP Print</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>User Data</h2>
      <table class="table table-bordered print">
        <thead>
        
          <tr>
            <th>Booking ID</th>
            <th>Full Name</th>
	    <th>Mobile No</th>
	    <th>Vaccine Name</th>
	    <th>Vaccination Date</th>
	    <th>Report Status</th>
	    
	  </tr>
        </thead>
        <tbody>
  <?php
          $sn=31;
          $query=mysqli_query($con,"select * from tblvacrecords
join vacpatients on vacpatients.MobileNumber=tblvacrecords.PatientMobileNumber
where  tblvacrecords.id='$sn'");
while($row=mysqli_fetch_array($query)){ 
    ?>
	   <tr>
         <td><?php echo $row['OrderNumber']; ?></td>
         <td><?php echo $row['FullName']; ?></td>
         <td><?php echo $row['MobileNumber']; ?></td>
         <td><?php echo $row['VaccineType']; ?></td>
         <td><?php echo $row['VaccineTimeSlot']; ?></td>
         <td><?php echo $row['ReportStatus']; ?></td>
    </tr>
	 <?php
          $sn++;
          }
          ?>
</tbody>  
</table>

      <div class="text-center">
        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>


