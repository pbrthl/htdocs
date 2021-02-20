<?php

	/*
		Hier entsteht eine landing page, auf der ein 
		Pavillion beworben wird und ein Kauf simuliert
		werden kann.
	*/

	
	//includes
	include_once('script\basic_html.php');
	include_once('script\layout.php');
	include_once('script\html_elements.php');
	include_once('script\page_content.php');
	
	
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
	
	
	container_end();
	html_footer();
	
	
	
?>

