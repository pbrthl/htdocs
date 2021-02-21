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
				. (isset($this->required) ? ($this->required ? ' required' : '') : '')				
				. (isset($this->placeholder) ? ' placeholder="'. $this->placeholder .'"' : '') 
				. (isset($this->disabled) ?  ($this->disabled ? ' disabled' : '') : '') .'>';
			return $html_string;
			
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
			return $input;
		}
		
		public static function mk_input_id($input_type, $input_class, $input_id, $required, $p_holder){
			$input = new input_elem;
			$input->css_class = $input_class;
			$input->type = $input_type;
			$input->id = $input_id;
			if($required){
					$input->required = true;
			}
			$input->placeholder = $p_holder;
			return $input;
		}
		
		
	}
	
	
	//Klasse für Labels
	class label {
		public $id;
		public $target_id;
		public $value;
		
		public function to_html_string(){
			return 
				'
				<label '. (isset($this->id) ? ' id="'. $this->id .'"' : '') .' for="'. $this->target_id .'">'. $this->value .'</label>
				';
		}
		public function to_html(){
			echo $this->to_html_string();
		}
		
		public static function make_lbl($t_id, $val){
			$label = new label;
			$label->target_id = $t_id;
			$label->value = $val;
			return $label;
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
		
		public function to_html(){
			
			echo 
				$this->to_html_string();
			
		}
		
		
		public function add_content($cntnt){
			if(isset($this->contents)){
				if(is_array($cntnt)){
					foreach($cntnt as $cur_c){
						array_push($this->content, $cur_c);
					}
				} else {
					array_push( $this->contents , $cntnt);
				}
			} else { 
				if(is_array($cntnt)){ 
					$this->contents = $cntnt;
				} else {
					$this->contents = array($cntnt);
				}
			}
		}
		
		public static function form_col($col_class, $input_type, $input_class, $input_id, $required, $p_holder, $label){
			$inp_e = input_elem::mk_input_id($input_type, $input_class, $input_id, $required, $p_holder);
			$lbl = label::make_lbl($input_id, $label); 
			$col = div::mk_form_col($col_class, $lbl, $inp_e);
			return $col;
		}
		
	}
	


	class dd_option extends html_object {
		
		public $value;
		
		public function to_html_string(){
			return 
				'
				<option>
					'. $this->value .'
				</option>
				';
		}
		
		public function to_html(){
			echo 
				$this->to_html_string();
		}
		
		public static function make_option($val){
			$option = new dd_option;
			$option->value = $val;
			return $option;
		}
		
	}
	
	
	
	class dropdown extends html_object {
		
		public $id;
		public $options;
		public $css_class;
		
		public function to_html_string(){
			$html_string = 
				'
				<select'. (isset($this->css_class) ? ' class="'. $this->css_class .'"' : '' ) .' name="'. $this->id .'" id="'. $this->id .'">
				';
			if(isset($this->options)){
				foreach($this->options as $c_opt){
					$html_string .= $c_opt->to_html_string();
				}
			}
			$html_string .= 
				'
				</select>
				';
			
			
			return $html_string;
		}
		
		public function to_html(){
			echo $this->to_html_string();
		}
		
		public function add_options ($os){
			if(isset($this->options)){
				if(is_array($os)){
					foreach($os as $cur_o){
						array_push($this->options, dd_option::make_option($cur_o));
					}
				} else {
					array_push($this->options, dd_option::make_option($os));
				}
			} else {
				if(is_array($os)){
					$this->options = array_map ('dd_option::make_option', $os);
				} else {
					$this->options = array(dd_option::make_option($os));
				}
			}
		}
		
		public static function make_dropdown($dd_id, $opts, $dd_class){
			$ddown = new dropdown;
			$ddown->css_class = $dd_class;
			$ddown->id = $dd_id;
			$ddown->add_options($opts);
			return $ddown;
		}
		
		
	}  

	
	
	
	
	
	
	
	
	
	


?>