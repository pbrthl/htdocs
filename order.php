<?php
	/*
	Script zum Bearbeiten der "Bestellung"
	*/
	
	include_once('script\bundle.php');
	html_header();
	generate_mail();
	nav_bar();
	container_fluid();
	
	
	echo 
		'
		<span class="align-middle">
		';
		
		order_successfull_message();
		row();
			column();
			column_end();
			column();
				pavillion_img();
			column_end();
			column();
			column_end();
		row_end();
	
	echo 
		'
		</span>
		';
	container_end();
	html_footer();
?>

