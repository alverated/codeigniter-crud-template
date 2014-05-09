<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends MY_Controller {

	

	function __construct()
	{
		parent::__construct();
		
		/*
		$this->load->model('admin_model');
		$this->load->library('session');

		if($this->session->userdata('_DTR_is_logged_in') === FALSE){
			redirect('sign-in');
		}else{
			if($this->session->userdata('_DTR_user_type') != 'Administrator')
				redirect('users/home');
		}

		$user_id = $this->session->userdata('_DTR_user_id');
		$where = array('admin_id' => $user_id);
		$this->data['info'] = $this->admin_model->get_only('admin_id,first_name,middle_name,last_name,email',$where,'admin',TRUE,'ASC');
		$this->data['allowed_late'] = intval($this->admin_model->get_only('option_value',array('option_name' => 'allowed_late'),'options',TRUE,NULL)->option_value);
		$this->data['allowed_time_before_leaving'] = intval($this->admin_model->get_only('option_value',array('option_name' => 'allowed_time_before_leaving'),'options',TRUE,NULL)->option_value);
		*/
	}

	public function index()
	{
		
	}

}

/* End of file Admin_Controller.php */
/* Location: ./application/libraries/Admin_Controller.php */