<?php 
	/*
	==================== Definition Klassen HTML-Generierung ====================
	-----------------------------------------------------------------------------
	
	Klassen, mit deren Hilfe HTML-Elementen Eigenschaften zugewiesen
	werden können, um sie anschließend zu verwenden.
	*/
	
	
	
	//Diese Klasse ist die Abstraktion aller weiteren Klassen, die in diesem Skript definiert sind.
	
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
		public $disabled;
		public $onclick;
		
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
				. (isset($this->disabled) ? ($this->disabled ? ' disabled ' : '') : '')
				. (isset($this->href) ? ' href="#'. $this->href .'" ' : '') 
				. (isset($this->role) ? ' role="'. $this->role .'" ' : '') 
				. (isset($this->onclick) ? ' onclick="'. $this->onclick .'" ' : '') 
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
			return $button;
			
		}
	

		public static function form_submit_button(){
			$submit_button = new button;
			$submit_button->css_class = 'btn btn-success';
			return $submit_button;
		}
	
	}
	
	
	//.. Link
	
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
								$(this).text(\''. $this->text .'\');
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
	
	
	
	
	// .. Die Div-Klasse.
	
	class div extends html_object {
		public $id;
		public $css_class;
		public $content;
		public function to_html_string(){
			$html_string = 
				'
				<div'. (isset($this->id) ? ' id="'. $this->id .'"' : '') 
				. (isset($this->css_class) ? ' class="'. $this->css_class .'"' : '') .'>
				';
				if(isset($this->content)){
					foreach($this->content as $curr_content){
						$html_string .= $curr_content->to_html_string();
					}
				}
				$html_string .= 
					'
					</div>
					';
				return $html_string;
		}
		
		public function to_html(){
			echo $this->to_html_string();
		}
		
		public function add_content($cntnt){
			if(isset($this->content)){
				if(is_array($cntnt)){
					foreach($cntnt as $cur_c){
						array_push($this->content, $cur_c);
					}
				} else {
					array_push( $this->content , $cntnt );
				}
			} else {
				if(is_array($cntnt)){
					$this->content = $cntnt;
				} else {
					$this->content = array($cntnt);
				}
			}
		}
		
		public function add_classes($classes){
			if(is_array ($classes)){
				foreach($classes as $curr_class){
					$this->css_class .= ' '. $curr_class;
				}
			} else {
				$this->css_class .= $classes;
			}
		}
		
		
		public static function mk_div($divclass){
			$div = new div;
			$div->css_class = $divclass;
			return $div;
		}
		
		public static function mk_form_col($divclass, $lbl, $inp){
			$div = new div;
			$div->css_class = $divclass;
			$div->add_content(array($lbl, $inp));
			return $div;
		}
		
		public static function mk_div_content($divclass, $cntnt){
			$div = new div;
			$div->css_class = $divclass;
			$div->add_content($cntnt);
			return $div;
		}
		
	}
	

	
	class center extends html_object {
		
		public $content;
		
		public function to_html_string(){
			$html_string = '<center>';
			if(isset($this->content)){
				foreach($this->content as $curr_content){
					$html_string .= $curr_content->to_html_string();
				}
			}
			$html_string .= '</center>';
			return $html_string;
		}
		
		public function add_content($cntnt){
			if(isset($this->content)){
				array_push( $this->content , $cntnt );
			} else {
				$this->content = array($cntnt);
			}
		}
		
		public function add_classes($classes){
			if(is_array ($classes)){
				foreach($classes as $curr_class){
					$this->css_class .= ' '. $curr_class;
				}
			} else {
				$this->css_class .= $classes;
			}
		}
		
		
		
	}
	
	
	
	
?>