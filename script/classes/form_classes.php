<?php 
	
	/*
	============== Klassen für Form-Erstellung ==============
	---------------------------------------------------------
	
	Klassen für die Formular-Erstellung
	*/
	
	
	//Klasse für ein einfaches Input-Element
	
	class input_elem extends html_object {
		
		public $id;
		public $css_class;
		public $type;
		public $disabled = false;
		public $placeholder;
		
		public function to_html_string(){
			
			$html_string = 
				'<input '
				. (isset($this->id) ? ' id="'. $this->id .'"' : '') 
				. (isset($this->css_class) ? ' class="'. $this->css_class .'"' : '')
				. (isset($this->type) ? ' type="'. $this->type .'"' : '') 
				. (isset($this->placeholder) ? ' placeholder="'. $this->placeholder .'"' : '') 
				. (isset($this->disabled) ? ' disabled' : '') .'>';
			
		}
		
		public function to_html(){
			echo $this->to_html_string();
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
		
		public static function mk_input($input_type, $input_class){
			$input = new input;
			$input->css_class = $input_class;
			$input->type = $input_type;
		}
		
		public static function mk_input_id($input_type, $input_class, $input_id){
			$input = new input;
			$input->css_class = $input_class;
			$input->type = $input_type;
			$input->id = $input_id;
		}
		
		
	}
	


	//Klasse für Formulare
	
	class html_form extends html_object {
		
		public $id;
		public $css_class;
		public $action;
		public $contents;
		public $method;
		
		public function to_html_string(){
			$html_string =
				'
					<form
					' . (isset($this->id) ? ' id="'. $this->id .'"' : '')
					. (isset($this->css_class) ? ' class="'. $this->css_class .'"' : '')
					. (isset($this->action) ? ' action="'. $this->action .'"' : '')
					. (isset($this->method) ? ' method="'. $this->method .'"' : '')
					. '>
				';
			if(isset($this->contents)){
				foreach($this->contents as $curr_content){
					$html_string .= $curr_content->to_html_string();
				}
			}
			$html_string .= 
				'</form>';
			return $html_string;
		}
		
		public function add_content($cntnt){
			if(isset($this->contents)){
				array_push( $this->contents , $cntnt );
			} else {
				$this->contents = array($cntnt);
			}
		}
		
	}


?>