<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	//CONSTRUCT FOR KEKUATAN
	function __construct(){
		parent::__construct();
		//INIT MODEL TRANSACTION
	}

	public function index(){
		$view_data['title'] = 'Contact';
		$this->load->view('contactus',$view_data);
	}
}
