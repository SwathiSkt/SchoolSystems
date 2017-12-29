<?php
include('config.php');	  
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
						<div class="panel-title">About Us</div>
						</div>
		  				<div class="panel-body">
							<div class="col-md-6">
							<div class="w3-content w3-section">
							 <?php
				
	                 		$result = mysql_query("SELECT * FROM resources");
                     		while($row = mysql_fetch_array($result))
                     		{
					 		?>
						 
						 <img class="mySlides w3-animate-fading" src="resources/<?php echo $row['image']; ?>" style="width:100%">
						 
						 <?php
						 }
						 ?>
 </div>
<script>
var myIndex = 0;
carousel();
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 9000);    
}
</script>
</div>					
<div class="col-md-6">		
<?php
 		$result = mysql_query("SELECT * FROM blog where id = 2");
                     		while($row = mysql_fetch_array($result))
                     		{
					 		echo $row['content']; 
						 }
						 ?>
						</div>
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
