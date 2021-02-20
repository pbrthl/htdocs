<?php 

	/* 
	===========================GRUNDLEGENDE HTML-ELEMENTE
	*/
	
	
	
	function html_header(){
		
		echo 
			'<html>
				<header>
					<link rel="stylesheet" href="css\bootstrap.css">
					<script src="bootstrap.bundle.js"></script>
				</header>
				<body>';
		
	}
	
	
	function html_footer(){
		echo 
			'</body>
			</html>';
	}

?>