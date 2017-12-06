<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1"
    <!--Includes Bootstrap for CSS, jQuery, and JavaScript-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		a.learnmore{
			color:#33383B;
			opacity: 1;
			filter: alpha(opacity=100);
		}
		a.learnmore:hover{
			color:gray;
			text-decoration:none;
			opacity: 1;
			filter: alpha(opacity=100);
		}
		body{
			position:relative;
		}
		.form-group{
			padding:7px;
		}
		.jumbotron{
			background-color:#00668E;
			background-size:cover;
			height:575px;
			width:100%;
			background-repeat: no-repeat;
			background-position: center center;
		}
		li{
			list-style-type:none;
		}
		#section1 {
			padding-top:50px;
			height:575px;
			color: #fff;
			background-color:#1E88E5;
		}
		#section2 {
			padding-top:0px;
			height:250px;
			color:#fff;
			background-color:#33383B;
		}
		.shoutout{
			position: absolute;
			height: 10%;
			width: 35%;
			top:45%;
			left:65%;
			background-color:white;
			opacity: 0.75;
			filter: alpha(opacity=75);
		}
		.textfiles{
			color:white;
		}
		.textfiles:hover{
			color:#A72F31;
			text-decoration:none;
		}
	</style>
	
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<!--Navigation-->
	<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
	    <a class="navbar-brand" data-toggle="collapse" href="#navoptions">
	      <div id="buttondiv">
	        Bogus Ski Supply >
	      </div>
	    </a>
	    <div id="navoptions" class="collapse">
	      <ul class="nav navbar-nav">
	        <li><a href="http://mrp82.x10host.com/labs/Final/about.html">About</a></li>
	        <li><a href="http://mrp82.x10host.com/labs/Final/query.html">Search Inventory</a></li>
	        <li><a href="http://mrp82.x10host.com/labs/Final/customerForm.html">New Customer</a></li>
	        <li><a href="http://mrp82.x10host.com/labs/Final/price.html">Display Price</a></li>
	        <li><a href="http://mrp82.x10host.com/labs/Final/finalIndex.html">Home</a></li>
			<li><a href="#"><div id="buttondiv2"></div></a></li>
	      </ul>
	    </div>
	</nav>
	
<!--Page body-->
	
	
	<div class="container-fluid" style="position:relative">
		<div id="section1" class="row">
			<div class="col-md-12, jumbotron">
<?php
/*	Melissa Pallotti
	Created 11/5/17
	CS 334
	Last Updated 11/5/17
*/

//establish connection to the server
	$con=mysqli_connect("localhost", "mrp82x10_user1", "abc123*", "mrp82x10_cs334");
	if(!$con){
		die('Could not connect: ') . mysqli_error();
	}

//Get form values
	$productID = $_POST['productID'];
	
//Page title
	echo "<h1>Price Check for $productID</h1>";

//print user information
	$sql = "SELECT * FROM skis WHERE productID='$productID'";
	$result = mysqli_query($con, $sql);
	
	while ($row = mysqli_fetch_array($result)) {
	   echo "</h2>Price: $".$row{'price'}."</h2>";
	}
	
//end connection 
mysqli_close($con);

	?>
	</div>	
</div>	
	
	<!--Bottom content-->		
			<div id="section2" class="row" style="position:relative">
			
				<div class="col-md-6">
					<h2>Contact Information</h2>
					<p>Questions? Comments?</p>
					<p>Feel free to contact via social media:</p>	
					
						<a href="https://www.facebook.com/melissa.pallotti.3"><span class="fa fa-facebook-f" style="font-size:24px;padding:2px;color:white;"></span></a>
						<a href="https://github.com/wishlissa"><span class="fa fa-github" style="font-size:24px; padding:2px;color:white;"></span></a>
						<a href="https://www.linkedin.com/in/melissapallotti/"><span class="fa fa-linkedin-square" style="font-size:24px; padding:2px;color:white;"></span></a>
						<a href="https://twitter.com/wishlissa"><span class="fa fa-twitter" style="font-size:24px;padding:2px;color:white;"></span></a>
			
					<br><br>
					<p style="font-size:10px">Created by Melissa Pallotti, Fall 2017.</p>
				</div>
				<div class="col-md-6">
					<h2>Text File directory</h2>
					<p>These are the text files versions of the html and php files used to create this webpage:
					<ul>
						<li><a href="http://mrp82.x10host.com/labs/Final/finalIndex.txt" class="textfiles">Homepage</a>&nbsp;&nbsp;&nbsp;<a href="http://mrp82.x10host.com/labs/Final/about.txt" class="textfiles">About</a>&nbsp;&nbsp;&nbsp;<a href="http://mrp82.x10host.com/labs/Final/tables.txt" class="textfiles">Table Info</a></li>
						<li><a href="http://mrp82.x10host.com/labs/Final/query.txt" class="textfiles">Query Design</a>&nbsp;&nbsp;&nbsp;<a href="http://mrp82.x10host.com/labs/Final/queryphp.txt" class="textfiles">Query PHP</a></li>
						<li><a href="http://mrp82.x10host.com/labs/Final/customerForm.txt" class="textfiles">Customer Form</a>&nbsp;&nbsp;&nbsp;<a href="http://mrp82.x10host.com/labs/Final/customer.txt" class="textfiles">Customer PHP</a></li>
						<li><a href="http://mrp82.x10host.com/labs/Final/price.txt" class="textfiles">Price Form</a>&nbsp;&nbsp;&nbsp;<a href="http://mrp82.x10host.com/labs/Final/pricephp.txt" class="textfiles">Price PHP</a></li>
					</ul>
				</div>
			</div>	
		</div>
	
	
	
		<script>
		$(document).ready(function(){
		  $("#navoptions").on("hide.bs.collapse", function(){
		    $("#buttondiv").html('Bogus Ski Supply ></span>');
		  });
		  $("#navoptions").on("show.bs.collapse", function(){
		    $("#buttondiv").html('Bogus Ski Supply ');
		    $("#buttondiv2").html('<div id="buttondiv3" data-toggle="collapse" href="#navoptions"> < </span></div>')
		  });
		  $("#buttondiv3").on("hide.bs.collapse", function(){
		    $("#buttondiv").html('Bogus Ski Supply ');
		    $("#buttondiv2").html('<')
		  });
		});
		</script>
	
	</body>
	</html>