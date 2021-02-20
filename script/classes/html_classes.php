<?php 
	
	/*
	Klassen, mit deren Hilfe HTML-Elementen Eigenschaften zugewiesen
	werden können, um sie anschließend zu verwenden.
	*/
	
	//Abstraktion der Klassen, die hier definiert sind.
	
	//TODO: to_html_string robuster machen
	
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
	
	
	
	
	//... Button
	
	class button extends html_object {
		public $id;
		public $css_class;
		public $data_toggle;
		public $href;
		public $role;
		public $aria_expanded;
		public $aria_controls;
		public $text;
		public $toggle_text;
		public $type;
		
		public function to_html_string(){	
			return 
				(isset($this->toggle_text) && isset($this->id) && isset($this->text) ? 
					'
					<script>
						$(document).ready(function(){
						 $(\'#'. $this->id .'\').on(\'click\', function () {
							  var text=$(\'#'. $this->id .'\').text();
							  if(text === "'. $this->text .'" || text !== \''. $this->toggle_text .'\'){
								$(this).html(\''. $this->toggle_text .'\');
							  } else{
								$(this).text(\''. $this->toggle_text .'\');
							 }
							});
						});
					</script>
					'
				: '')
				.'<button 
				'. (isset($this->id) ? ' id="'. $this->id .'" ' : '') 
				. (isset($this->css_class) ? ' class="'. $this->css_class .'" ' : '') 
				. (isset($this->data_toggle) ? ' data-toggle="'. $this->data_toggle .'" ' : '') 
				. (isset($this->href) ? ' href="#'. $this->href .'" ' : '') 
				. (isset($this->role) ? ' role="'. $this->role .'" ' : '') 
				. (isset($this->aria_expanded) ? ' aria-expanded="'. $this->aria_expanded .'" ' : '') 
				. (isset($this->aria_controls) ? ' aria-controls="'. $this->aria_controls .'" ' : '') 
				. (isset($this->type) ? ' type="'. $this->type .'" ' : '') 
				. '>
					'. $this->text .'
				</button>';
			
			
		}
	
		public function to_html(){
			return $this->to_html_string();
		}
		
		public static function collapse_control_button
			($button_value_default, 
			$button_value_active, 
			$button_id,  
			$collapse_id)
		{
				
			$button = new button;
			$button->id = $button_id;
			$button->css_class = 'btn btn-primary';
			$button->data_toggle = 'collapse';
			$button->href = $collapse_id;
			$button->role = 'button';
			$button->aria_expanded = 'false';
			$button->aria_controls = $collapse_id;
			$button->text = $button_value_default;
			$button->toggle_text = $button_value_active;
			$button->type = 'button';
			return button;
			
		}
		
	}
	
	class html_link extends html_object {
		public $id;
		public $css_class;
		public $data_toggle;
		public $href;
		public $role;
		public $aria_expanded;
		public $aria_controls;
		public $text;
		public $toggle_text;
		public $type;
		
		public function to_html_string(){	
			return 
				(isset($this->toggle_text) && isset($this->id) && isset($this->text) ? 
					'
					<script>
						$(document).ready(function(){
						 $(\'#'. $this->id .'\').on(\'click\', function () {
							  var text=$(\'#'. $this->id .'\').text();
							  if(text === "'. $this->text .'" || text !== \''. $this->toggle_text .'\'){
								$(this).html(\''. $this->toggle_text .'\');
							  } else{
								$(this).text(\''. $this->toggle_text .'\');
							 }
							});
						});
					</script>
					'
				: '')
				.'<a 
				'. (isset($this->id) ? ' id="'. $this->id .'" ' : '') 
				. (isset($this->css_class) ? ' class="'. $this->css_class .'" ' : '') 
				. (isset($this->data_toggle) ? ' data-toggle="'. $this->data_toggle .'" ' : '') 
				. (isset($this->href) ? ' href="#'. $this->href .'" ' : '') 
				. (isset($this->role) ? ' role="'. $this->role .'" ' : '') 
				. (isset($this->aria_expanded) ? ' aria-expanded="'. $this->aria_expanded .'" ' : '') 
				. (isset($this->aria_controls) ? ' aria-controls="'. $this->aria_controls .'" ' : '') 
				. (isset($this->type) ? ' type="'. $this->type .'" ' : '') 
				. '>
					'. $this->text .'
				</a>';
			
			
		}
	
		public function to_html(){
			return $this->to_html_string();
		}
		
		public static function collapse_control_link
			($link_value_default, 
			$link_value_active, 
			$link_id,
			$collapse_id)
		{
			$link = new html_link;
			$link->id = $link_id;
			$link->css_class = 'btn btn-primary';
			$link->data_toggle = 'collapse';
			$link->href = $collapse_id;
			$link->role = 'button';
			$link->aria_expanded = 'false';
			$link->aria_controls = $collapse_id;
			$link->text = $link_value_default;
			$link->toggle_text = $link_value_active;
			$link->type = 'button';
			return $link;
			
		}
		
	}
	
	

	

	
	
	
	
	
?>