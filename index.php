<?php

	/*
		Hier entsteht eine landing page, auf der ein 
		Pavillion beworben wird und ein Kauf simuliert
		werden kann.
	*/

	
	//includes
	include_once('script\functions.php');
	
	
	html_header();
	nav_bar();
	container_fluid();
	
	row();
		column();
		
			pavillion_img();
			
		column_end();
		column();
		column_end();
	row_end();
	
	container_end();
	html_footer();
?>

