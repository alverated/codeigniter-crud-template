<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends User_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	
	public function index()
	{

		$this->data['title']	= $this->user_model->page_title();
		$this->data['css']		= '';
		$this->data['js_top']	= '';
		$this->data['header'] 	= $this->load->view('header_view',NULL,TRUE);
		$this->data['body'] 	= $this->load->view('home_view',NULL,TRUE);
		$this->data['footer'] 	= $this->load->view('footer_view',NULL,TRUE);
		$this->data['js_bottom']= '';
		$this->load->view('templates',$this->data);
	}


}

/* End of file home.php */
/* Location: ./application/controllers/home.php */