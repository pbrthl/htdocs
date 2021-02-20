<?php 

	/* 
	===========================GRUNDLEGENDE HTML-ELEMENTE
	*/
	
	
	
	function html_header(){
		
		echo 
			'<html>
				<header>
					<link rel="stylesheet" href="css\bootstrap.css">
					<script type="text/javascript" src="js\jquery-3.5.1.min.js"></script>
					<script src="js\bootstrap.js"></script>
				</header>
				<body>';
		
	}
	
	
	
	
	function html_footer(){
		echo 
			'</body>
			</html>';
	}
	

?>