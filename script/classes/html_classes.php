<?php 
	
	/*
	Klassen, mit deren Hilfe HTML-Elementen Eigenschaften zugewiesen
	werden können, um sie anschließend zu verwenden.
	*/
	
	//Abstraktion der Klassen, die hier definiert sind.
	
	abstract class html_object {
		
		public $id;
		
		public function to_html_string(){
		}
			
		public function to_html(){
			
		}
		
	}
	
	
	

	
	

	
	//Klasse zum Erstellen eines Carousel-Elementes
	
	class Carousel extends html_object {
		public $id = '';
		public $pictures = array();
		public function to_html() { 
				echo $this->to_html_string();
		}
		
		public function to_html_string(){
			
			$html_string =
				'
				<div id="'. $this->id .'" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				';
				$first = true;
							foreach ($this->pictures as $picture){
								$html_string .= 
									'
									<div class="carousel-item'. ($first ? ' active' : '' ) .'">
										<img class="d-block w-100" src="'. $picture .'" alt="Bild '. $picture .'">
									</div>
									';
								$first = false;
							}
				$html_string .= '
						  <a class="carousel-control-prev" href="#'. $this->id .'" style="background-color:powderblue;" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#'. $this->id .'" style="background-color:powderblue;" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						  </a>
					  </div>
					</div>
					';
					return $html_string;
		}
	}
	
	
	
	//...Image-Card
	
	class img_card extends html_object {
		
		public $id;
		public $width;
		public $img_src;
		public $img_id;
		public $title;
		public $subtitle;
		public $bodycontent;
		
		public function to_html(){
			echo $this->to_html_string();
		}
		
		public function to_html_string(){
			return 
				'
			<div class="card" id="'. $this->id .'" style="width: '. $this->width .';">
			  <img class="card-img-top" '. (isset($this->img_id)? 'id="'. $this->img_id .'"' : '') .' src="'. $this->img_src .'" alt="Bild nicht gefunden :-(">
			  <div class="card-body">
			'. (isset($this->title) ? '<h5 class="card-title">'. $this->title .'</h5>' : '')  
			.  (isset($this->subtitle) ? '<h6 class="card-subtitle mb-2 text-muted">'. $this->subtitle .'</h6>' : '')
			. $this->bodycontent 
			. '
				  </div>
				</div>
				';
			
			
		}
		
	}
	
	
	
	
	
	
	
	
	

	
	
	
	
	
?>