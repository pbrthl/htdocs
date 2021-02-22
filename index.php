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
	container();
	
	row();
		column_class('-sm-6');
			center_start();
			pavillion_img();
			center_end();
		column_end();
		column_class('-sm-6');
			row();
				column();
					liste();
				column_end();
			row_end();
			row();
				column();
					order_button();
				column_end();
			row_end();
		
		column_end();
	row_end();
	
	row();
		column();
		column_end();
		column_class('-12');
			support_info();
		column_end();
		column();
		column_end();
	row_end();
	row();
		column();
		column_end();
		column_class('-12');	
			beschreibung();
		column_end();
		column();
		column_end();
	row_end();
	row();
		column_class('-sm-6');
			slide_show();
		column_end();
		column_class('-sm-6');
			sicherheitshinweise();
		column_end();
	row_end();
	row();
		column();
			link_seitenanfang();
		column_end();
	row_end();
	container_end();
	html_footer();
	
	
	
?>

