<?php

include('config.php');

$confirm_code='False';

$email=$_POST['email'];
$account_type=$_POST['accounttype'];
$name=$_POST['name'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$img = 'avatar.jpg';

$address=$_POST['address'];

if($email == '')
{
echo "Email is required";
}

else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is  not a valid email address");
} 

else if($name == '')
{
echo "Name is required";
}


else if($phone == '')
{
echo "Phone is required";
}
else 
{
   


// Insert data into database
$sql="INSERT INTO user (email,password,name,gender,phone,address,account_type,confirm_code,image)VALUES('$email', '$password', '$name', '$gender', '$phone', '$address', '$account_type','$confirm_code','$img')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
  
  if($account_type == 'Student')
  {
  $sql2="INSERT INTO student_details (email)VALUES('$email')";
  if (!mysql_query($sql2,$conn))
  {
  die('Error: ' . mysql_error());
  }
     
  }
  ?>
  
  
  
  
  
  
  
  
  
  
  
  
  <!DOCTYPE html>
<html>
  <head>
    <title>School System Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  <?php
  include('include/header.php');
  ?>



    <div class="page-content">
    	<div class="row">
		  
		  <div class="col-md-12">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">Account Created</div>
							
						</div>
						
		  				<div class="panel-body">
		  					Wait till admin confirms you add once the verification is done ,you will be added to the school portal within an hour
							<br /><br />
		  				</div>
		  			</div>
		  		</div>

		  		
		  	</div>

		  	

		  
		  </div>
		</div>
    </div>

   <?php
   include('include/footer.php');
   ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
  
  
  
  
  
  
  
  
  
  <?php
}




?>

