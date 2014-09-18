### CodeIgniter Simple CRUD ###

* Quick summary
* Version 1.0.1

### How do I get set up? ###

Extract File and there you go.

Need to Change.

	application/core/MY_Controller.php
	application/libraries/Admin_Controller.php
	application/libraries/User_Controller.php
	application/config/custom_config.php


	:: Constants and Helper Functions ::
		applications/config/constants.php
			js_url()
			css_url()
			img_url()
			uploads_url()

		applications/helpers/global_function_helper.php
			dump()
			current_url_full()


========================================================================================
Tips:
	Form validation libraries when using max_length and min_length custom message.
		Create MY_Form_validation.php in application/libraries/

		And add this line of codes whenever you want to use that validation.

		/*=======================================================*/
		<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

		class MY_Form_validation extends CI_Form_validation {

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

		/*=======================================================*/

		Usage:

			$this->form_validation->set_message('min_length','Your %s must be at least [min] characters in length.');
		    $this->form_validation->set_message('max_length','Your %s can not exceed [max] characters in length.');

    	Purpose:
    	Instead of using %s %s I used %s for the field name and [max] for the number.


Recommended JQuery:
	Alertify
	Colorbox


### Do you have questions? ###

* Just email me @ alvernoquiao@alverated.com