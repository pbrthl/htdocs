<?php
	/*
		================ LANDING PAGE ================
		----------------------------------------------
		Hier entsteht eine landing page, auf der ein 
		Pavillion beworben wird und ein Kauf simuliert
		werden kann.
	*/

	
	//PHP-Skripte und Klassen einbinden
	include_once('script\bundle.php');
	
	
	html_header();
	nav_bar();
	container_fluid();
	
	row();
		column_class('-sm-6');
			pavillion_img();
			
		column_end();
		column_class('-sm-6');
		
			row();
				column();
					liste();
				column_end();
			row_end();
			row();
				column();
					randomform();
				column_end();
			row_end();
		
		column_end();
	row_end();
	
	row();
		column();
		column_end();
		column();
			order_form();//ctst();//=====================================TESTING AREA
		column_end();
		column();
		column_end();
	row_end();
	
	
	container_end();
	html_footer();
	
	
	
?>

