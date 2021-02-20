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
	
	
	
	
?>