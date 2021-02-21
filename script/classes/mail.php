<?php 
	/*
	==================== Klasse(n) und Funktion(en) für den Umgang mit emails ====================
	----------------------------------------------------------------------------------------------
	*/
	
	
	
	//Email-Klasse. Alle Daten zu einer Email, die versandt werden kann.
	class e_mail {
		public $empfaenger;
		public $betreff;
		public $from;
		public $mail_text;
		
		public function send(){
			mail($this->empfaenger, $this->betreff, $this->mail_text, $this->from);
		}
	}
	
	
	
	
	
	
	
?>