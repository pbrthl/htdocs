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
	
	function row_class($row_class){
		
		echo 
			'
			<div class="row'. $row_class .'">
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
	
	
	function column_class($col_class){
		echo 
			'
			<div class="col'. $col_class .'">
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
	
	
	
	/*
	=========================== HTML-BAUSTEINE
	*/
	
	
	function img_card_head($img_src, $width){
		echo 
			'
			<div class="card" style="width: '. $width .'%;">
			  <img class="card-img-top" src="'. $img_src .'" alt="Bild nicht gefunden :-(">
			  <div class="card-body">
			';
	}
	
	function card_title($title){
		echo 
			'
			<h5 class="card-title">'. $title .'</h5>	
			';
	}
	
	function card_subtitle($title){
		echo 
			'
			<h6 class="card-subtitle mb-2 text-muted">'. $title .'</h6>	
			';
	}
	
	function card_text($card_text){
		
		echo 
			'
			<p class="card-text">
				'. $card_text .'
			</p>	
			';
		
	}
	
	function card_end(){
		echo 
			'
				  </div>
				</div>
			';
	}
	
	
	
	
	
	
	
	/*
	=============== PAGE CONTENT
	*/
	
	
	
	//Navbar, die oben auf der Page angezeigt wird.
	
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
	
	function pavillion_img(){
		img_card_head('img\gesamtansicht_blau.jpg', 80);
		card_text
			('Der Pavillion. Ich versehe ihn mit einem langen Text. vhjqk jk bobhjbj bhjlbjk bjkb lbjhbjkbhjkb jbjqk jk bobhjbj bhjlbjk bjkb lbjhbjkbhjkb jbj
			  qk jk bobhjbj bhjlbjk bjkb lbjhbjkbhjkb jbjqk jk bobhjbj bhjlbjk bjkb lbjhbjkbhjkb jbjqk jk bobhjbj bhjlbjk bjkb lbjhbjkbhjkb jbj
			  qk jk bobhjbj bhjlbjk bjkb lbjhbjkbhjkb jbjqk jk bobhjbj bhjlbjk bjkb lbjhbjkbhjkb jbj.qk jk bobhjbj bhjlbjk bjkb lbjhbjkbhjkb jbjqk jk bobhjbj bhjlbjk bjkb lbjhbjkbhjkb jbj
			  qk jk bobhjbj bhjlbjk bjkb lbjhbjkbhjkb jbj!!');
		card_end();	
	}
	
	
	function liste(){
		echo 
			'
			<ul class="list-group list-group-flush">
			  <li class="list-group-item">Cras justo odio</li>
			  <li class="list-group-item">Dapibus ac facilisis in</li>
			  <li class="list-group-item">Morbi leo risus</li>
			  <li class="list-group-item">Porta ac consectetur ac</li>
			  <li class="list-group-item">Vestibulum at eros</li>
			</ul>
			';
	}
	
	function randomform(){
		echo 
			'
			<form>
			  <div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				<small id="emailHelp" class="form-text text-muted">We\'ll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <div class="form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Check me out</label>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
			';
	}




?>


