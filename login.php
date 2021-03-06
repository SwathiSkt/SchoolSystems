<!DOCTYPE html>
<html>
  <head>
    <title>School Management System Database </title>
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
	
	<?php echo
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: text/html');?>
	<script type="text/javascript">

window.history.forward();
function noback()
{
window.history.forward();

	}
</script>
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.php">School Management System Database</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Sign In</h6>
			                
	                        <form action="checklogin.php" method="post">
						<table style="width:80%">
						<tr height="45">
						<td>Enter Your Email</td>
						<td><input type="text" name="email" class="form-control"></td>
						</tr>
						
						
					
						
					
						
						<tr height="45">
						<td>Enter Your Password</td>
						<td><input type="password" name="password" class="form-control"></td>
						</tr>
						<tr>
						
						<tr height="45">
						<td>Account Type</td>
						<td><input type="radio" name="accounttype" value="Teacher"> Teacher   <input type="radio" name="accounttype" value="Student"> Student</td>
						</tr>
						<tr>
						
						<tr>
						<td colspan="2"><input type="submit" value="Login" class="theme-btn btn-style-one"></td>
						</tr>

						</table>
						</form>         
			            </div>
			        </div>
					
					 <div class="already">
			            <p>Don't have an account yet?</p>
			            <a href="signup.php">Sign Up</a>
			        </div>

			       
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>