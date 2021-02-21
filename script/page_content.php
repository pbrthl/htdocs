<?php
	/*
	=============== PAGE CONTENT ===============
	--------------------------------------------
	
	In diesem Skript werden Funktionen definiert, die 
	jene HTML-Elemente umsetzen, aus denen die 
	konkrete Landing-Page letztendlich besteht.
	
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
	


	//Methode zum Erstellen des Bestell-Formulars

	function order_form(){
		
		//Das Formular 
		$form = new html_form;
		
		
		/*
		TODO
			-Gast? -> registrieren oder einloggen
			-Mann/Frau/Firma
			-Vorname, Nachname (Firma!)
			-Email
			-Straße, Hausnummer, weitere Angabe (zB im Hinterhaus)
			-Ort
			-Land
			-Telefon
			-Rechnungsadresse = Lieferadresse? => Lieferadresse
			-zurück/weiter
			--------------------> Zahlung :)
			
			Zum Absenden des Formulars ist die Bestätigung der AGB und der Datenschutzerklärung
		*/
		
		
		//Vorname und Nachname         ==========================               
		$first_name_column = html_form::form_col
							('col-md-6 mb-3', 
							'text', 
							'form-control', 
							'first_name_input_id', 
							true, 
							'Max', 
							'Vorname*');
		$sur_name_column = html_form::form_col
									('col-md-6 mb-3', 
									'text', 
									'form-control', 
									'surname_name_input_id', 
									true, 
									'Mustermann', 
									'Nachname*');
		$name_line = div::mk_div_content
									('form-row', 
									array
										($first_name_column, 
										$sur_name_column));   

		
		
		//email-adresse
		
		
		$email_inp = input_elem::mk_input_id('email', 'form-control', 'email_input_id', true, 'max@mustermail.com');
		$email_lbl = label::make_lbl('email_input_id', 'Mail*');
		$mail_column = div::mk_div('col-md-12 mb-3');
		$mail_line = div::mk_div('form-row');
		$mail_column->add_content($email_lbl);
		$mail_column->add_content($email_inp);
		$mail_line->add_content($mail_column);
		
		
		//Straße und Hausnummer
		
		
		$address_line = div::mk_div('form-row');
		$street_column = div::mk_div('col-8 mb-3');
		$number_column = div::mk_div('col-4 mb-3');
		$street_input = input_elem::mk_input_id('text', 'form-control', 'street_input_id', true, 'Musterstraße');
		$number_input = input_elem::mk_input_id('text', 'form-control', 'number_input_id', true, '9a');
		$street_lbl = label::make_lbl('street_input_id', 'Straße*');
		$number_lbl = label::make_lbl('number_input_id', 'Hausnummer*');
		
		//zusammenfügen
		$street_column->add_content($street_lbl);
		$street_column->add_content($street_input);
		$number_column->add_content($number_lbl);
		$number_column->add_content($number_input);
		$address_line->add_content($street_column);
		$address_line->add_content($number_column);
		
		//Adresszusatz, Stadt, PLZ
		
		$city_line = div::mk_div('form-row');
		$zstz_col = div::mk_div('col-sm-5 mb-3');
		$city_col = div::mk_div('col-sm-4 mb-3');
		$plz_col = div::mk_div('col-sm-3 mb-3');
		
		$zstz_input = input_elem::mk_input_id('text', 'form-control', 'zstz_i_id', false, 'zB. Hinterhaus');
		$zstz_lbl = label::make_lbl('z_i_id', 'Adresszusatz');
		$city_input = input_elem::mk_input_id('text', 'form-control', 'ct_i_id', true, 'Musterstadt');
		$city_lbl = label::make_lbl('ct_i_id', 'Stadt*');
		$plz_input = input_elem::mk_input_id('text', 'form-control', 'plz_i_id', true, '4242');
		$plz_lbl = label::make_lbl('plz_i_id', 'Postleitzahl*');
		
		
		$zstz_col->add_content($zstz_lbl);
		$zstz_col->add_content($zstz_input);
		$city_col->add_content($city_lbl);
		$city_col->add_content($city_input);
		$plz_col->add_content($plz_lbl);
		$plz_col->add_content($plz_input);
		
		
		
		
		
		
		
		
		
		
		//Submit/ zurück Buttons 
		
		
		//row und line
		$submit_line = div::mk_div('form-row');
		$submit_button_column = div::mk_div('col-md-12 mb-3');
		
		//Der Button
		$submit_button = button::form_submit_button();
		$submit_button->text = 'Bestellen';
		$submit_button->id = 'form_submit_button_id';
		
		//Centered element
		//$centered_element_submit = new center;
		
		//zusammenbauen der Zeile
		$submit_button_column->add_content($submit_button);
		$submit_line->add_content($submit_button_column);
		
		
		
		
		
		
		//Formular füllen
		$form->add_content(array($name_line, $mail_line, $address_line, $submit_line));

		
		
		
		//formular ausgeben
		$form->to_html();

		
		
	}



?>


