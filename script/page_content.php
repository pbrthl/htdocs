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
		$form->action = "order.php";
		
		

		
		//Vorname und Nachname                  
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
		
		$mail_line = div::mk_div('form-row');
		$mail_column = html_form::form_col
									('col-md-12 mb-3', 
									'email', 
									'form-control', 
									'email_input_id', 
									true, 
									'max@mustermail.com', 
									'Email*');
		
		$mail_line->add_content($mail_column);
		
		
		//Straße und Hausnummer
		
		$street_column = html_form::form_col
									('col-8 mb-3', 
									'text', 
									'form-control', 
									'street_input_id', 
									true, 
									'Musterstraße', 
									'Straße*');
									
		$number_column = html_form::form_col
									('col-4 mb-3', 
									'text', 
									'form-control', 
									'number_input_id', 
									true, 
									'9a', 
									'Hausnummer*');
									
		$address_line = div::mk_div_content
											('form-row', 
											array
												($street_column, 
												$number_column)); 
									
		

		
		//Adresszusatz, Stadt, PLZ
		
		$zstz_col = html_form::form_col
								('col-sm-5 mb-3', 
								'text', 
								'form-control', 
								'zs_input_id', 
								false, 
								'zB. Hinterhaus', 
								'Adresszusatz');
								
		$city_col = html_form::form_col
								('col-md-4 mb-3', 
								'text', 
								'form-control', 
								'ct_input_id', 
								true, 
								'Musterstadt', 
								'Stadt*');
								
		$plz_col = html_form::form_col
								('col-sm-3 mb-3', 
								'text', 
								'form-control', 
								'plz_input_id', 
								true, 
								'4242', 
								'PLZ*');

		$city_line = div::mk_div_content
								('form-row', 
								array
									($zstz_col, 
									$city_col,
									$plz_col));		

										
		//Land und Telefon
		
		$land_dd = dropdown::make_dropdown
									('land_id', 
									array
										('Deutschland', 
										'Frankreich', 
										'United Kingdom', 
										'Nordkorea'), 
									'form-control');
									
		$tele_input = input_elem::mk_input_id
							('tel', 
							'form-control', 
							'tele_id', 
							true, 
							'4242/4242');
							
		$land_lbl = label::make_lbl('land_id', 'Land');
		$tele_lbl = label::make_lbl('tele_id', 'Telefonnummer*');
		
		$land_col = div::mk_div('col-sm-6 mb-3');
		$tele_col = div::mk_div('col-sm-6 mb-3');
		$land_col->add_content(array($land_lbl, $land_dd));
		$tele_col->add_content(array($tele_lbl, $tele_input));
		$land_line = div::mk_div_content
								('form-row', 
								array
									($land_col,
									$tele_col));
									
		//Farbe und Versandart
		
		
		$color_dd = dropdown::make_dropdown
									('color_id', 
									array
										('Rot',
										'Gelb',
										'Grün'),
									'form-control');
									
		$color_lbl = label::make_lbl('color_id', 'Farbe');
		
		$versand_dd = dropdown::make_dropdown
									('versand_id', 
									array
										('Abholung',
										'Standardversand'),
									'form-control');
									
		$versand_lbl = label::make_lbl('versand_id', 'Versandart');
		

		$versand_col = div::mk_div('col-sm-8 mb-3');
		$color_col = div::mk_div('col-sm-4 mb-3');
		
		$versand_col->add_content(array($versand_lbl, $versand_dd));
		$color_col->add_content(array($color_lbl, $color_dd));
		
		$vc_line = div::mk_div_content
								('form-row', 
								array
									($color_col,
									$versand_col));
		
		
		
		//Zahlungsmethode und AGB sowie Datenschutzerklärung
		

		$payment_dd = dropdown::make_dropdown
										('pay_id', 
										array
											('Bezahlung bei Erhalt'),
										'form-control');
		$payment_dd->disabled = true;
		$pay_label = label::make_lbl('pay_id', 'Zahlungsmethode');
		$pay_col = div::mk_div('col-sm-6 mb-3');
		$pay_col->add_content(array($pay_label, $payment_dd));
		
		$agb_ds_col = html_form::form_col
										('col-sm-6 mb-3', 
										'checkbox', 
										'form-check-input', 
										'agb_ds_id', 
										true, 
										'', 
										'AGB & Datenschutzerklärung akzeptieren');
										
										
		$agb_ds_line = div::mk_div_content
								('form-row', 
								array
									($pay_col,
									$agb_ds_col));
									
		//Datenschutzerklärung optional anzeigen
									
		
		$empty_col = div::mk_div('col-2 mb-3');
		$button_col = div::mk_div('col-8 mb-3');
		$agb_collapse_link = html_link::collapse_control_link
												('AGB und Datenschutzerklärung anzeigen', 
												'AGB und Datenschutzerklärung nicht mehr anzeigen', 
												'agb_toggle_button',  
												'a_d_c');
		$agb_ds_collapse = div::mk_div('collapse');
		$agb_ds_collapse->id = 'a_d_c';
		$button_col->add_content($agb_collapse_link);
		
		$toggle_button_row =  div::mk_div_content
								('form-row', 
								array
									($empty_col,
									$button_col,
									$empty_col));
									
									
		$agb_und_datenschutz = new custom_content;
		$agb_und_datenschutz->content = 
			'
			<h1>
				AGB und Datenschutz
			</h1>
			';
		$agb_ds_collapse->add_content($agb_und_datenschutz);
		$collapse_column =  div::mk_div_content
							('col-12', 
							array
								($agb_ds_collapse));
		
		$collapse_row =  div::mk_div_content
							('form-row', 
							array
								($collapse_column));
		

		
		//Button Bestätigung 
		$submit_line = div::mk_div('form-row');
		$submit_button_column = div::mk_div('col-md-12 mb-3');
		$submit_button = button::form_submit_button();
		$submit_button->text = 'Bestellen';
		$submit_button->id = 'form_submit_button_id';
		$submit_button_column->add_content($submit_button);
		$submit_line->add_content($submit_button_column);
		

		
		

		//Formular füllen
		$form->add_content
				(array
					($name_line, 
					$mail_line, 
					$address_line, 
					$city_line,
					$land_line,
					$vc_line,
					$agb_ds_line,
					$toggle_button_row,
					$collapse_row,
					$submit_line));

		
		//formular ausgeben
		$form->to_html();

		
		
	}
	
	
	
	function order_successfull_message(){
		
		echo 
			'
			
			<div class="alert alert-success" role="alert">
				<center>
					Vielen dank! Deine Bestellung wird bearbeitet. Wir werden Dir in Kürze eine Mail schicken. Kehre <a href="index.php" class="link">hier</a> zu unserem Shop zurück.
				</center>
			</div>
			<center>
			';
			
		
			
		echo 
			'</center>';
			
		
		
	}



?>


