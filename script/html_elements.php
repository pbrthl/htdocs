<?php 
	/*
	=========================== HTML-BAUSTEINE ===========================
	----------------------------------------------------------------------
	
	Funktionen zum Erzeugen von HTML-Elementen, die immer wieder verwendet
	werden
	
	*/
	
	


	
	function collapsefield($id){
		echo 
			'
			<div class="collapse" id="'. $id .'">
			';
	}


	
	function collapsefield_end(){
		echo 
			'</div>';
	}
	
	
	function label($input_id, $value){
		echo 
			'<label for="'. $input_id .'">'. $value .'</label>';
	}
	
	
	function title($title_size, $text){
		echo 
			'
			<center class="top-buffer">
				<h'. $title_size .'>
					'. $text .'
				</h'. $title_size .'>
			</center>
			';
	}


	function card_block(){
		
	}
	
?>