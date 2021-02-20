<?php 
	/*
	================LAYOUT========================
	*/


	//Container für das Grid-system
	
	function container(){
		echo 
			'
				<div class="container">
			';
	}
	
	function container_fluid(){
		echo 
			'
			<div class="container-fluid">
			';
	}
	
	function container_end(){
		echo 
			'
			</div>
			';
	}
	
	//columns und rows für das Grid-system
	
	
	function row(){
		echo 
			'
			<div class="row">
			';
	}
	
	function row_class($row_class){
		
		echo 
			'
			<div class="row'. $row_class .'">
			';
		
	}
	
	function row_end(){
		echo 
			'
			</div>
			';
	}
	
	
	function column(){
		echo 
			'
			<div class="col">
			';
	}
	
	
	function column_class($col_class){
		echo 
			'
			<div class="col'. $col_class .'">
			';
	}
	
	function multi_row_column(){
		
		echo 
			'
			<div class="w-100"></div>
			';
	}
	
	
	function column_end(){
		echo 
			'
			</div>
			';
	}
?>