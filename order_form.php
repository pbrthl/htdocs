<?php
	/*
	Script zum Bearbeiten der "Bestellung"
	*/
	
	include_once('script\bundle.php');
	html_header();
	//generate_mail();
	nav_bar();
	container_fluid();
		row();
			column();
			column_end();
			column();
				title(4, 'Kauf abschließen');
				order_form();
			column_end();
			column();
			column_end();

	container_end();
	html_footer();
?>

