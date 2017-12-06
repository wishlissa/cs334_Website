<?php
/*	Melissa Pallotti
	Created 12/05/17
	CS 334
	Last Updated 12/05/17
*/


//establish connection to the server
	$con=mysqli_connect("localhost", "mrp82x10_user1", "abc123*", "mrp82x10_cs334");
	if(!$con){
		die('Could not connect: ') . mysqli_error();
	}

//Get form values
	$brand = $_SESSION['brandShare'];
	$color = $_SESSION['colorShare'];

//print query results
	if(($brand !='Nordica'&& $brand !='K2'&& $brand !='Rossignol' && $brand !='Line'& $brand !='Fischer'&& $brand !='Volkl' && $brand !='Salomon' && $brand !='Dynastar' && $brand !='Armada'&& $brand !='4FRNT' && $brand !='Icelantic' && $brand !='Other')&&($color!='Red' && $color!='Orange' && $color!='Yellow' && $color!='Green' && $color!='Blue' && $color!='Indigo' && $color!='Violet' && $color!='Black' && $color!='White' && $color!='Other')){
	$sql = "SELECT * FROM skis";
}else if($brand !='Nordica'&& $brand !='K2'&& $brand !='Rossignol' && $brand !='Line'& $brand !='Fischer'&& $brand !='Volkl' && $brand !='Salomon' && $brand !='Dynastar' && $brand !='Armada'&& $brand !='4FRNT' && $brand !='Icelantic' && $brand !='Other'){
		$sql = "SELECT * FROM skis WHERE color='$color'";
	}else if($color!='Red' && $color!='Orange' && $color!='Yellow' && $color!='Green' && $color!='Blue' && $color!='Indigo' && $color!='Violet' && $color!='Black' && $color!='White' && $color!='Other'){
		$sql = "SELECT * FROM skis WHERE brand='$brand'";
	}else{
		$sql = "SELECT * FROM skis WHERE brand='$brand' AND color='$color'";	
	}
	
	$result = mysqli_query($con, $sql);

	while ($row = mysqli_fetch_array($result)) {
			echo "Brand: ".$row{'brand'}."<br>Color: ".$row{'color'}."<br>Ski: ".$row{'productID'}."<br>Price: ".$row{'price'}."<br><br>";
		$count++;
	}


//end connection 
mysqli_close($con);
	
?>