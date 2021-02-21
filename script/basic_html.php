<?php 
	/* 
	================= GRUNDLEGENDE HTML-ELEMENTE =================
	--------------------------------------------------------------
	
	Footer und Header, die immer benötigt werden
	
	*/
	
	
	
	
	//Generiert den HTML-Header, bindet CSS und Javascript ein
	
	function html_header(){
		
		echo 
			'<html>
				<header>
					<link rel="stylesheet" href="css\bootstrap.css">
					<script type="text/javascript" src="js\jquery-3.5.1.min.js"></script>
					<script src="js\bootstrap.js"></script>
					<script src="js\paulcustom.js"></script>
				</header>
				<body>';
		
	}
	
	
	
	// ..Der footer der Page.
	function html_footer(){
		echo 
			'</body>
			</html>';
	}
	

?>