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
			<nav class="navbar navbar-expand-lg bg-primary navbar-light ">
			  <a class="navbar-brand" href="#">TOOLPORT</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				  <li class="nav-item active">
					<a class="nav-link" href="#">Pavillions <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item active">
					<a class="nav-link" href="#">Partyzelte <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item active">
					<a class="nav-link" href="#">Gartenpavillion <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item active">
					<a class="nav-link" href="#">Faltpavillion <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item active">
					<a class="nav-link" href="#">Zeltgaragen <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item active">
					<a class="nav-link" href="#">Lagerzelte <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item active">
					<a class="nav-link" href="#">Zelthallen <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item active">
					<a class="nav-link" href="#">Rundbogenhallen <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item active">
					<a class="nav-link" href="#">Weidezelte <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  mehr
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="#">Container</a>
					  <a class="dropdown-item" href="#">Zubehör</a>
					  <a class="dropdown-item" href="#">% Sale</a>
					  <a class="dropdown-item" href="#">Zelt-Ratgeber</a>
					</div>
				  </li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
				  <input class="form-control mr-sm-2" type="search" placeholder="Suche" aria-label="Search">
				  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">suchen</button>
				</form>
			  </div>
			</nav>
			';
	}
	
	
	//Bild des Pavillions
	
	function pavillion_img(){	
		$expand_control_link = html_link::collapse_control_link
															('Technische Daten anzeigen', 
															'Technische Daten verbergen', 
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
			<table class="table table-striped">
				<tbody>
					<tr>
						<td>
							<b>Gewicht:</b>
						</td>
						<td>
							66,9 kg
						</td>
					</tr>
					<tr>
						<td>
							<b>Material:</b>
						</td>
						<td>
							Aluminium, Hochleistungspolyester
						</td>
					</tr>
					<tr>
						<td>
							<b>Kartons:</b>
						</td>
						<td>
							3
						</td>
					</tr>
				</tbody>
			</table>
				</div>';
		$pv_img->to_html();
	}
	
	
	function slide_show(){
		
			$carousel = new Carousel;
			$carousel->id = 'crsl_id';
			$carousel->width = "40%";
			$carousel->pictures = array
									('img\tstimg\jp1.jpg', 
									'img\tstimg\jp2.jpg', 
									'img\tstimg\jp3.jpg');
			$carousel->to_html();
		
	}

	
	function liste(){
		echo 
			'
			<h5>
				3x6 m Faltpavillon PROFESSIONAL Alu 40mm, Seitenteile mit Panoramafenstern, Farbe wählbar
			</h5>
			<ul class="list-group list-group-flush">
			  <li class="list-group-item">Lieferbar in ein bis zwei Werktagen</li>
			  <li class="list-group-item">Innerhalb von Minuten aufgebaut in</li>
			  <li class="list-group-item">Hohe Stabilität bei gleichzeitig niedrigem Gewicht</li>
			</ul>
			';
			
	}
	
	
	//Kaufen-Button; leitet weiter zum Formular mit den Kundendaten
	function order_button(){

		echo 
			'
			<div class="card">
			  <h5 class="card-header">Verfügbar</h5>
			  <div class="card-body">
				<h5 class="card-title">Gratis Versand im Inland</h5>
				<p class="card-text">799 € inklusive 19 %Mwst.</p>
				<a href="order_form.php" class="btn btn-success">Bestellen</a>
			  </div>
			</div>
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
		$form->css_class = 'top-buffer';
		
		

		
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
		$agb_und_datenschutz->content = 		'
<p><h5>Allgemeine Geschäftsbedingungen (AGB)</hf><p><br/>
§ 1 Verwender <br/>
Als Verwender dieser AGB gilt:
<br/><br/>
Modellshop<br/>
Volker Vorlage<br/>
Modellstraße 1<br/>
12345 Modellstadt<br/>
Registernummer: 7891011<br/>
Registergericht: Amtsgericht Modellstadt<br/><br/>

§ 2 Geltungsbereich <br/>
Diese Allgemeinen Geschäftsbedingungen gelten für alle Rechtsgeschäfte zwischen dem Verwender und einem Verbraucher (Gemäß § 13 BGB einer „natürlichen Person, die ein Rechtsgeschäft zu Zwecken abschließt, die überwiegend weder ihrer gewerblichen noch ihrer selbständigen beruflichen Tätigkeit zugerechnet werden können“).
<br/><br/>
§ 3 Vertragsschluss und Speicherung des Vertragstextes<br/>
Die Bestimmungen dieser AGB gelten für Bestellungen, welche Verbraucher über die Website www.modelldomain.de des Onlineshops Modellshop abschließen.<br/>
<br/>
Der Vertrag kommt mit dem Verwender (siehe § 1) zustande.<br/>
<br/>
Die Vorstellung und Beschreibung der Waren auf der Internetseite des Modellshops www.modelldomain.de stellt kein Vertragsangebot dar.<br/>
<br/>
Mit der Bestellung einer Ware durch einen Klick auf den Button „kostenpflichtig bestellen“ am Ende des Bestellvorgangs gibt ein Verbraucher ein verbindliches Angebot auf einen Kaufvertragsabschluss ab. Erst mit dem Versand einer Auftragsbestätigung per E-Mail durch den Verwender kommt der Vertragsschluss zustande.
<br/><br/>
Der Vertragstext wird bei Bestellungen gespeichert. Verbraucher erhalten eine E-Mail mit den Bestelldaten und den geltenden AGB. Nach Vertragsschluss sind die Bestelldaten nicht mehr online einsehbar.
<br/><br/>
§ 4 Zahlung<br/>
Die gesetzliche Umsatzsteuer sowie weitere Preisbestandteile sind in den angegebenen Preisen inbegriffen. Versandkosten sind nicht im angezeigten Preis enthalten und können ggf. zusätzlich anfallen.
Verbrauchern stehen folgende Zahlungsoptionen zur Verfügung:
<br/><br/>
Paypal<br/>
Überweisung<br/>
Nachnahme<br/>
<br/><br/>
§ 5 Lieferung, Lieferungsbeschränkungen<br/>
Die Lieferung erfolgt – sofern die Beschreibung eines gewählten Produkts nicht explizit Abweichendes festlegt – innerhalb von 7 Werktagen.<br/>
Diese Frist beginnt im Falle der Zahlung via Überweisung oder Paypal am Tag nach Erteilung des Zahlungsauftrages zu laufen.<br/>
<br/><br/>
§ 6 Gefahrenübergang<br/>
Das Risiko einer zufälligen Verschlechterung oder einem zufälligen Verlust der Ware liegt bis zur Übergabe der Ware beim Verwender und geht es mit der Übergabe auf den Verbraucher über.
<br/><br/>
§ 7 Eigentumsvorbehalt<br/>
Bis zum vollständigen Empfang des Kaufpreises behält sich der Verwender das Eigentum an der Ware vor.
<br/><br/>
§ 8 Gewährleistung<br/>
Die gesetzlichen Gewährleistungsregelungen gelten.
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
		$outter_column = div::mk_div('col mb-3');
		$submit_line = div::mk_div('form-row justify-content-md-center');
		$cancel_button_column = div::mk_div('col mb-3');
		$submit_button_column = div::mk_div('col mb-3');
		$cancel_button = html_link::simple_link('btn btn-outline-warning', 'index.php', 'abbrechen');
		$submit_button = button::form_submit_button();
		$submit_button->text = 'Bestellen';
		$submit_button->id = 'form_submit_button_id'; 
		$cancel_button_column->add_content($cancel_button);
		$submit_button_column->add_content($submit_button);
		$submit_line->add_content(array($outter_column, $cancel_button_column, $submit_button_column, $outter_column));
		

		
		

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


	function  support_info(){
		
		card_textblock
			('Sie haben fragen?', 
			'Wir haben Antworten.', '
			<p>Unsere Mitarbeiter sind von Montag bis Freitag 
			von 9:00 - 18:00 Uhr und am Samstag von 9:00 bis 
			16:00 Uhr für Sie da und stehen Ihnen mit fachkundigem
			Rat zur Seite.</p><p>
			Sie erreichen uns am Besten telefonisch unter: </p><p>
			<center>
				<b style="color:blue;">
					+49-40-7972446457
				</b>
			</center> 
			oder auch jederzeit per Email. </p><p>
			Wenden Sie sich vertrauensvoll an: </p><p>
			<center>
				<b style="color:blue;">
					kundenservice@toolport.com
				</b>
			</center> </p><p>
			Ihr TOOLPORT-Team </p>
			', 
			'100%');
		
	}


	function beschreibung(){
		
		card_textblock
				('Faltpavillon „Professional 40 mm ALU-HEX“ – elegant und stabil mit 4 Seitenteilen', 
				'', 
				'Hochwertiger, professioneller Faltpavillon der Extra-Klasse entwickelt für höchste Leistungsfähigkeit, 
				lange Lebensdauer und den schnellen Einsatz. Das leichte, robuste Gestänge besteht aus modernem 6063-T5 
				Aluminium und ist nach DIN 17611 E2 gebürstet. Für eine hohe Stabilität sind die Standbeine im ca. 40 mm 
				breiten Sechskantprofil gefertigt und verfügen über besonders große, standsichere Fußplatten. Als 
				Planenmaterial kommt PVC beschichtetes, ca. 400 g/m² schweres Hochleistungs-Polyester mit bandversiegelten 
				Nähten zum Einsatz. Dieses ist zu 100% wasserdicht und bietet einen hohen UV-Schutz von 80+. Die 
				mitgelieferten Seitenwände bieten die Möglichkeit den Faltpavillon komplett zu schließen. Integrierte 
				Panoramafenster sorgen für ein helles, offenes Ambiente. Bei Bedarf lassen sich die Fenster durch vorhandene 
				Rollos abdecken, so dass der Faltpavillon sicht- und lichtgeschützt ist. Dadurch ergeben sich viele 
				Nutzungsmöglichkeiten. Je nach Größe des Faltpavillons verfügen die Seitenwände über eine oder mehrere 
				Türen, die sich durch Reißverschlüsse schnell öffnen und schließen lassen. Dank des leichtgängigen 
				Scherenmechanismus ist der Faltpavillon im Handumdrehen aufgestellt. Die Arretierung erfolgt über ein 
				hochwertiges, schnelles Klicksystem. Der Faltpavillon kann in der Höhe 5-fach verstellt werden.', 
				'100%');
		
	}


	function sicherheitshinweise(){
		echo 
			'
			<h5 class="card-title top-buffer">Sicherheitshinweise</h5>
			<ul class="list-group list-group-flush">
			  <li class="list-group-item">
				Wind- und Schneelasten wurden für den Faltpavillon nicht getestet.
				</li>
			  <li class="list-group-item">
				  Bauen Sie bitte den Faltpavillon sachgemäß auf und räumen 
				  Sie bei leichtem Schneefall diesen unverzüglich vom Dach. 
				  Bei stärkeren Winden, Regen und Schneefall empfehlen wir den vorübergehenden Abbau.
			  </li>
			  <li class="list-group-item">
				Halten Sie das Planenmaterial von allen Hitze- und offenen Feuerquellen fern.
			  </li>
			  <li class="list-group-item">
				Bitte beachten Sie die Sicherheitshinweise in der Aufbauanleitung.
			  </li>
			</ul>
			';
	}
	
	function link_seitenanfang(){
		echo 
			'<center class="top-buffer">
				<a href="#" class="link">zum Anfang der Seite</a>
			</center>
			<br/>
			<div class="top-buffer"></div>';
	}
	
	
?>


