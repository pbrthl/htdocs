<?php
	/*
	=============== Auswertung Formular ===============
	---------------------------------------------------
	*/
	
	
	function generate_mail(){
		
		$email = new e_mail;
		$email->empfaenger = $_POST['email_input_id'];
		$email->betreff = 'TOOLPORT - Deine Bestellung';
		$email->from = 'no reply: TOOLPORT';
		$email->mail_text = 
			'
			Hallo '. $_POST['first_name_input_id'] .'!
			Wir haben Deine Bestellung erhalten.
			Der 3x6 m Faltpavillon PROFESSIONAL Alu 40mm, Seitenteile mit Panoramafenstern in '. strtolower($_POST['color_id']) .'er Farbe wird in den nächsten vier Werktagen geliefert.
			
			Viele Grüße,
			    Dein TOOLPORT-Team.
			';
		$email->send();
	}
	

?>


