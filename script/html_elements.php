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


	function card_textblock($title, $subtitle, $text, $width){
		echo 
			'
			<div class="card top-buffer" style="width: '. $width .';">
			  <div class="card-body">
				'. ($title != '' ? '<h5 class="card-title">'. $title .'</h5>' : '') .'
				'. ($subtitle != '' ? '<h6 class="card-subtitle mb-2 text-muted">'. $subtitle .'</h6>' : '') .'
				<p class="card-text">'. $text .'</p>
			  </div>
			</div>
			';
	}
	
	
?>