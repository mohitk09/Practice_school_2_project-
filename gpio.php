<?php
//This page is requested by the JavaScript, it updates the pin's status and then print it
//Getting and using values
if (isset ( $_GET["pic"] )) {
	$pic = strip_tags ($_GET["pic"]);
	
	//test if value is a number
	if ( (is_numeric($pic)) && ($pic <= 5) && ($pic >= 0) ) {
		
		//set the gpio's mode to output		
		system("gpio mode ".$pic." out");
		//reading pin's status
		$status[$pic]=exec ("gpio read ".$pic);
		//set the gpio to high/low
		if ($status[$pic] == "0" ) { $status[$pic] = "1"; }
		else if ($status[$pic] == "1" ) { $status[$pic] = "0"; }
		system("gpio write ".$pic." ".$status[$pic] );
		//reading pin's status
		exec ("gpio read ".$pic, $status, $return );
		//print it to the client on the response
		echo($status[$pic]);
		
	}
	else { echo ("fail"); }
} //print fail if cannot use values
else { echo ("fail"); }
?>
