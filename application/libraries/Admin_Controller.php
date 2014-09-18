<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->data['meta_title'] = config_item('site_name');
	}
}

/* End of file Admin_Controller.php */
/* Location: ./application/libraries/Admin_Controller.php */