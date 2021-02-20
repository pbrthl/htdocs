<?php


	
	// Grundlegende HTML-Eemente
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
	
	
	
	//Navbar, die oben auf der Seite angezeigt wird.
	
	function nav_bar(){
		echo 
			'
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="#">Navbar</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				  <li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				  </li>
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Dropdown
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="#">Action</a>
					  <a class="dropdown-item" href="#">Another action</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="#">Something else here</a>
					</div>
				  </li>
				  <li class="nav-item">
					<a class="nav-link disabled" href="#">Disabled</a>
				  </li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
				  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			  </div>
			</nav>
			';
	}
	
	
	//Bild des Pavillions
	
	function show_picture(){
		echo 
			'
			<figure class="figure">
			  <img src="img\gesamtansicht_blau.jpg" class="figure-img img-fluid rounded" alt="Bild des Pavillions, blaue Version.">
			  <figcaption class="figure-caption">
			  Der Pavillion. Ich versehe ihn mit einem langen Text. vhjqk jk bobhjbj bhjlbjk bjkb lbjhbjkbhjkb jbjqk jk bobhjbj bhjlbjk bjkb lbjhbjkbhjkb jbj
			  qk jk bobhjbj bhjlbjk bjkb lbjhbjkbhjkb jbjqk jk bobhjbj bhjlbjk bjkb lbjhbjkbhjkb jbjqk jk bobhjbj bhjlbjk bjkb lbjhbjkbhjkb jbj
			  qk jk bobhjbj bhjlbjk bjkb lbjhbjkbhjkb jbjqk jk bobhjbj bhjlbjk bjkb lbjhbjkbhjkb jbj.qk jk bobhjbj bhjlbjk bjkb lbjhbjkbhjkb jbjqk jk bobhjbj bhjlbjk bjkb lbjhbjkbhjkb jbj
			  qk jk bobhjbj bhjlbjk bjkb lbjhbjkbhjkb jbj!!
			  </figcaption>
			</figure>
			';
	}
	


	/*
	================LAYOUT========================
	*/


	//Container für das Grid-system
	
	function container(){
		echo 
			'
				<div class="container">
			';
	}
	
	function container_fluid(){
		echo 
			'
			<div class="container-fluid">
			';
	}
	
	function container_end(){
		echo 
			'
			</div>
			';
	}
	
	//columns und rows für das Grid-system
	
	
	function row(){
		echo 
			'
			<div class="row">
			';
	}
	
	function row_end(){
		echo 
			'
			</div>
			';
	}
	
	
	function column(){
		echo 
			'
			<div class="col">
			';
	}
	
	
	function col_width($row_width){
		echo 
			'
			<div class="col-'. $row_width .'">
			';
	}
	
	function multi_row_column(){
		
		echo 
			'
			<div class="w-100"></div>
			';
	}
	
	
	function column_end(){
		echo 
			'
			</div>
			';
	}
	
	
	




?>


