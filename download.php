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
    <link rel="stylesheet" type="text/css" href="print1.css" media="print">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      
      <h2><center>Covid-19 Vaccination Report</center></h2>
      <table class="table table-bordered print">
        <thead>
        
             
	    
	   
	    
	 
	    
	  </tr>
        </thead>
        <tbody>
  <?php
         $testid=31;
if( isset($_GET['tid']) ) {
    $testid = intval($_GET['tid']);
  }
          $query=mysqli_query($con,"select * from tblvacrecords
join vacpatients on vacpatients.MobileNumber=tblvacrecords.PatientMobileNumber
where  tblvacrecords.id='$testid'");
while($row=mysqli_fetch_assoc($query)){ 
    ?>
	
               
            
             

	<tr>
               <th>Booking ID</th>
               <td><?php echo $row['OrderNumber']; ?></td>
           </tr>
         
           <tr>
               <th>Full Name</th>
               <td><?php echo $row['FullName']; ?></td>
	   </tr>
          
           <tr>
               <th>Mobile No</th>  
               <td><?php echo $row['MobileNumber']; ?></td>
	   </tr>
        
           <tr>
               <th>Vaccine Name</th>
               <td><?php echo $row['VaccineType']; ?></td>
	   </tr>
         
           <tr>
		<th>Vaccination Date</th>
                <td><?php echo $row['VaccineTimeSlot']; ?></td>
           </tr>    
       	       
           <tr>
               <th>Report Status</th>
               <td><?php echo $row['ReportStatus']; ?></td>
           </tr>
	 <?php
          $testid++;
          }
          ?>
</tbody>  
</table>

      <div class="text-center">
        <button onclick="window.print();" class="btn btn-info" id="print-btn">Print</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>


