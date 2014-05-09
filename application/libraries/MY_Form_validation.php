<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {

	 // Custom max length
	function max_length($str, $val){
		if(!parent::max_length($str, $val)){
			$this->set_message('max_length', str_replace('[max]', $val, $this->_error_messages['max_length']));
			return false;
		}
			return true;
	}

	function min_length($str, $val){
		if(!parent::min_length($str, $val)){
			$this->set_message('min_length', str_replace('[min]', $val, $this->_error_messages['min_length']));
			return false;
		}
			return true;
	} 

}

/* End of file MY_Form_validation.php */
/* Location: ./application/libraries/MY_Form_validation.php */