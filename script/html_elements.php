<?php 
	
	
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
	
	
	
	function collapse_control($button_value_default, $button_value_active, $button_id,  $collapse_id){
		echo 
			'
			<script>
			
				$(document).ready(function(){
				 $(\'#'. $button_id .'\').on(\'click\', function () {
					  var text=$(\'#'. $button_id .'\').text();
					  if(text === "'. $button_value_default .'" || text !== \''. $button_value_active .'\'){
						$(this).html(\''. $button_value_active .'\');
					  } else{
						$(this).text(\''. $button_value_default .'\');
					 }
					});
				});
			
			</script>
			<a class="btn btn-primary" id="'. $button_id .'" data-toggle="collapse" href="#'. $collapse_id .'" role="button" aria-expanded="false" aria-controls="'. $collapse_id .'">
				'. $button_value_default .'
			</a>
			';
	}
	
	function collapse_control_html($button_value_default, $button_value_active, $button_id,  $collapse_id){
		return 
			'
			<script>
			
				$(document).ready(function(){
				 $(\'#'. $button_id .'\').on(\'click\', function () {
					  var text=$(\'#'. $button_id .'\').text();
					  if(text === "'. $button_value_default .'" || text !== \''. $button_value_active .'\'){
						$(this).html(\''. $button_value_active .'\');
					  } else{
						$(this).text(\''. $button_value_default .'\');
					 }
					});
				});
			
			</script>
			<a class="btn btn-primary" id="'. $button_id .'" data-toggle="collapse" href="#'. $collapse_id .'" role="button" aria-expanded="false" aria-controls="'. $collapse_id .'">
				'. $button_value_default .'
			</a>
			';
	}
	
	
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
	
	
?>