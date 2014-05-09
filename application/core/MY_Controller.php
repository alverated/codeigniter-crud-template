<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
	
	public $data = array();
	
	function __construct(){
		parent::__construct();
		
		$this->data['errors'] = array();
		$this->data['success'] = array();
		$this->data['site_name'] = config_item('site_name');
		
		#SEO Purposes...
		$this->data['title']	= config_item('site_name');
		$this->data['meta_char']= 'UTF-8';
		$this->data['meta_auth']= 'Alver Noquiao';
		$this->data['meta_keys']= 'Codeigniter Template';
		$this->data['meta_desc']= 'CodeIgniter Template made by Alver Noquiao';
		
	} 	
}