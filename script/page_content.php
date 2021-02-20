<?php
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
		$expand_control_link = html_link::collapse_control_link
			('Mehr sehen', 
			'Weniger sehen', 
			'bs_button', 
			'bilderstrecke');
		$pv_img = new img_card;
		$pv_img->img_src = 'img\gesamtansicht_blau.jpg';
		$pv_img->img_id = 'hauptbild_id';
		$pv_img->id = 'pv_main_img';
		$pv_img->width = '80%';
		$pv_img->bodycontent = '
			<p>'
				. $expand_control_link->to_html_string()
			.'</p>
			<div class="collapse" id="bilderstrecke">
				<p> 
					Beispielinhalt 
				</p>
				</div>';
		$pv_img->to_html();
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
	
	
	
	function ctst(){
		$img_array = array('img\tstimg\jp1.jpg', 'img\tstimg\jp2.jpg', 'img\tstimg\jp3.jpg');
		$carousel = new Carousel;
		$carousel->id = 42;
		$carousel->pictures = $img_array;
		$carousel->to_html();
	}
	
	

?>


